<?php

if (!defined('CHECKOUT_LOADED')) {
  exit;
}

define('FREE_TRANS', 1);

// RANDOM TRANSACTION ID NUMBER..
$redrWin = '';
$_POST['txn_id'] = 'free-' . time() . rand(111, 999);

// LOAD PAYMENT CLASS..
include(PATH . 'control/gateways/methods/class.free.php');

// INITIATE GATEWAY CLASS..
$GATEWAY               = new freeorder();
$GATEWAY->settings     = $SETTINGS;
$GATEWAY->modules      = $mcSystemPaymentMethods;
$GATEWAY->gateway_name = $public_checkout134;
$GATEWAY->gateway_url  = '';
$GATEWAY->gateway      = 'free';

// CREATE BUY CODE FOR SALE..
$SALE_CODE = $MCCART->generateUniCode(40);

// ADD TO DATABASE..
$MCCKO->gwmethod = $GATEWAY;
$SALE_ID         = $MCCKO->addOrderToDatabase('sales', $SALE_CODE, false, 'free', '', $form);

// PROCESS ORDER..
$SALE_ORDER = $GATEWAY->getOrderInfo($SALE_CODE, $SALE_ID);

// NOTHING? RELOAD..
if (isset($SALE_ORDER->id)) {
  // LOG..
  $GATEWAY->writeLog($SALE_ID, 'New free sale added and updated. Send to callback operations to finalise');

  // GLOBAL MAIL TAGS..
  $MCMAIL->addTag('{GATEWAY_NAME}', $GATEWAY->gateway_name);
  $MCMAIL->addTag('{GATEWAY_URL}', $GATEWAY->gateway_url);
  $MCMAIL->addTag('{ORDER_IP}', $SALE_ORDER->ipAddress);
  $MCMAIL->addTag('{NAME}', mc_cleanData($SALE_ORDER->bill_1));

  // LOAD MAIL TEMPLATE FILE PREFERENCES..
  $MTEMP = $GATEWAY->mailTemplates();

  // ORDER ADDRESSES..
  $ORDER_ADDR = $GATEWAY->orderAddresses($SALE_ORDER);

  // CLEAR CART..
  $MCCART->clearCart();

  // LOAD CALLBACK TEMPLATE..
  include(PATH . 'control/gateways/callback-completed.php');

  // REDIRECT..
  $MCCART->clearCart();

  // IS ALTERNATIVE REDIRECT SET IF DOWNLOAD ONLY ORDER?
  $isDownloadOrderOnly = $GATEWAY->checkOrderForDownloadsOnly($SALE_ID);
  if ($isDownloadOrderOnly == 'yes' && $SETTINGS->freeAltRedirect &&
    (substr($SETTINGS->freeAltRedirect, 0, 5) == 'http:' ||
    substr($SETTINGS->freeAltRedirect, 0, 6) == 'https:')) {
    $redrWin = $SETTINGS->freeAltRedirect;
  } else {
    $url = ($ssl == 'yes' ? str_replace('http://', 'https://', $SETTINGS->ifolder) . '/' : $SETTINGS->ifolder . '/');
    $redrWin = $url . 'index.php?gw=' . $SALE_ID . '-' . $SALE_CODE;
  }

  // DONE..
  $mc_pay_status = 'ok';

} else {

  $MCOPS->log('Sale ID NOT found, checkout system terminated');

}

?>