<?php

class stripe extends paymentHandler {

  public $gateway_name;
  public $gateway_url;
  public $gateway;

  // Payment server url..
  // Stripe doesn`t use this..
  public function paymentServer() {}

  // Validate gateway payment..
  public function validateResponse() {
    // Validation has already been done via the charge event, so we can return ok here..
    return 'ok';
  }

  // Variables created on callback..
  public function gatewayPostFields() {
    $ramount = '0.00';
    // Check for webhook event..
    // Not all are supported..
    if (defined('HOOK_EVENT')) {
      if (isset($this->hookevt['data']['object']['metadata']['custom'])) {
        $chop = explode('-', $this->hookevt['data']['object']['metadata']['custom']);
        $order = $this->getOrderInfo($chop[0], $chop[1]);
        if (isset($order->id)) {
          $this->writeLog($order->id, 'Webhook event received from payment gateway. Received: ' . print_r($this->hookevt));
          $_POST['custom'] = $this->hookevt['data']['object']['metadata']['custom'];
          $failCode  = '';
          $txn_id    = '';
          $currency  = $this->hookevt['data']['object']['currency'];
          $amount    = ($this->hookevt['data']['object']['amount'] / 100);
          switch($this->hookevt['type']) {
            case 'charge.refunded':
              $this->writeLog($order->id, 'Processing refund for webhook event');
              $payStatus = 'refunded';
              $ramount = ($this->hookevt['data']['object']['amount_refunded'] / 100);
              break;
            default:
              $payStatus = $this->hookevt['type'];
              break;
          }
        }
      }
    } else {
      if (isset($_POST['custom'], $_POST['id'])) {
        $chop = explode('-', $_POST['custom']);
        $order = $this->getOrderInfo($chop[0], $chop[1]);
        if (isset($order->id)) {
          $this->writeLog($order->id, 'Attempting to charge card via payment gateway');
          $params = $this->paymentParams($this->gateway);
          include(PATH . 'control/gateways/lib/stripe/init.php');
          try {
            \Stripe\Stripe::setApiKey((isset($params['secret-key']) ? $params['secret-key'] : 'xx'));
            $charge = \Stripe\Charge::create(array(
              'amount' => ($order->grandTotal * 100),
              'currency' => $this->settings->baseCurrency,
              'description' => $this->lang[0],
              'source' => $_POST['id'],
              'metadata' => array(
                'custom' => $_POST['custom']
              )
            ));
            if (isset($charge['id'], $charge['metadata']['custom']) && $charge['metadata']['custom'] == $_POST['custom']) {
              if ($charge['outcome']['type'] != 'authorized' || $charge['outcome']['reason'] != '' || $charge['outcome']['risk_level'] != 'normal') {
                $payStatus = 'declined_by_gateway';
                $failCode  = ($charge['outcome']['reason'] ? $charge['outcome']['reason'] : '');
                $txn_id    = '';
                $currency  = $charge['currency'];
                $amount    = ($charge['amount'] / 100);
              } else {
                $this->writeLog($order->id, 'Charge authorized by payment gateway');
                $payStatus = 'completed';
                $failCode  = '';
                $txn_id    = $charge['balance_transaction'];
                $currency  = $charge['currency'];
                $amount    = ($charge['amount'] / 100);
              }
            }
          } catch (\Stripe\Stripe\Error\Card $e) {
            $payStatus = 'declined_by_gateway';
            $this->log($order->saleID, $e->getMessage());
          } catch (\Stripe\Stripe\Error\RateLimit $e) {
            $payStatus = 'declined_by_gateway';
            $this->log($order->saleID, $e->getMessage());
          } catch (\Stripe\Stripe\Error\InvalidRequest $e) {
            $payStatus = 'declined_by_gateway';
            $this->log($order->saleID, $e->getMessage());
          } catch (\Stripe\Stripe\Error\Authentication $e) {
            $payStatus = 'declined_by_gateway';
            $this->log($order->saleID, $e->getMessage());
          } catch (\Stripe\Stripe\Error\ApiConnection $e) {
            $payStatus = 'declined_by_gateway';
            $this->log($order->saleID, $e->getMessage());
          } catch (\Stripe\Stripe\Error\Base $e) {
            $payStatus = 'declined_by_gateway';
            $this->log($order->saleID, $e->getMessage());
          } catch (Exception $e) {
            $payStatus = 'declined_by_gateway';
            $this->log($order->saleID, 'An undetermined error occured from the server');
          }
        }
      }
    }
    $arr = array(
      'trans-id' => (isset($txn_id) ? $txn_id : ''),
      'amount' => (isset($amount) ? number_format($amount, 2, '.', '') : ''),
      'pay-total' => (isset($amount) ? number_format($amount, 2, '.', '') : ''),
      'refund-amount' => (isset($ramount) ? number_format($ramount, 2, '.', '') : ''),
      'currency' => (isset($currency) ? $currency : ''),
      'code-id' => (isset($_POST['custom']) ? $_POST['custom'] : '0-0-x'),
      'pay-status' => (isset($payStatus) ? $payStatus : 'failed'),
      'fail-code' => (isset($failCode) ? $failCode : ''),
      'pending-reason' => '',
      'inv-status' => '',
      'fraud-status' => ''
    );
    return $arr;
  }

  // Mail templates assigned to this method..
  public function mailTemplates() {
    $t = array(
      'completed' => 'order-completed.txt',
      'completed-wm' => 'order-completed-webmaster.txt',
      'completed-dl' => 'order-completed-dl.txt',
      'completed-wm-dl' => 'order-completed-dl-webmaster.txt',
      'pending' => 'order-pending.txt',
      'pending-wm' => 'order-pending-webmaster.txt',
      'refunded' => 'order-refunded.txt',
      'cancelled' => 'order-cancelled.txt',
      'completed-wish' => 'order-completed-wish.txt',
      'completed-wish-dl' => 'order-completed-wish-dl.txt',
      'completed-wish-recipient' => 'order-completed-wish-recipient.txt',
      'completed-wish-recipient-dl' => 'order-completed-wish-recipient-dl.txt'
    );
    return $t;
  }

  // Set preferred status..
  public function setOrderStatus($code) {
    $d = array(
      'completed' => 'shipping',
      'download' => 'completed',
      'virtual' => 'completed',
      'free' => 'completed',
      'pending' => 'pending',
      'cancelled' => 'cancelled',
      'refunded' => 'refund'
    );
    $s = ($this->modules[$this->gateway]['statuses'] ? unserialize($this->modules[$this->gateway]['statuses']) : '');
    return (isset($s[$code]) ? $s[$code] : $d[$code]);
  }

  // Pending reasons..
  public function decline_reasons($code) {
    $arr = array(
      'approve_with_id' => 'The payment cannot be authorized.',
      'call_issuer' => 'The card has been declined for an unknown reason.',
      'card_not_supported' => 'The card does not support this type of purchase.',
      'card_velocity_exceeded' => 'The customer has exceeded the balance or credit limit available on their card.',
      'currency_not_supported' => 'The card does not support the specified currency.',
      'do_not_honor' => 'The card has been declined for an unknown reason.',
      'do_not_try_again' => 'The card has been declined for an unknown reason.',
      'duplicate_transaction' => 'A transaction with identical amount and credit card information was submitted very recently.',
      'expired_card' => 'The card has expired.',
      'fraudulent' => 'The payment has been declined as Stripe suspects it is fraudulent.',
      'generic_decline' => 'The card has been declined for an unknown reason.',
      'incorrect_number' => 'The card number is incorrect.',
      'incorrect_cvc' => 'The CVC number is incorrect.',
      'incorrect_pin' => 'The PIN entered is incorrect. This decline code only applies to payments made with a card reader. ',
      'incorrect_zip' => 'The ZIP/postal code is incorrect.',
      'insufficient_funds' => 'The card has insufficient funds to complete the purchase.',
      'invalid_account' => 'The card or account the card is connected to is invalid.',
      'invalid_amount' => 'The payment amount is invalid or exceeds the amount that is allowed.',
      'invalid_cvc' => 'The CVC number is incorrect.',
      'invalid_expiry_year' => 'The expiration year invalid.',
      'invalid_number' => 'The card number is incorrect.',
      'invalid_pin' => 'The PIN entered is incorrect. This decline code only applies to payments made with a card reader.',
      'issuer_not_available' => 'The card issuer could not be reached so the payment could not be authorized.',
      'lost_card' => 'The payment has been declined because the card is reported lost.',
      'new_account_information_available' => 'The card or account the card is connected to is invalid.',
      'no_action_taken' => 'The card has been declined for an unknown reason.',
      'not_permitted' => 'The payment is not permitted.',
      'pickup_card' => 'The card cannot be used to make this payment (it is possible it has been reported lost or stolen).',
      'pin_try_exceeded' => 'The allowable number of PIN tries has been exceeded.',
      'processing_error' => 'An error occurred while processing the card.',
      'reenter_transaction' => 'The payment could not be processed by the issuer for an unknown reason.',
      'restricted_card' => 'The card cannot be used to make this payment (it is possible it has been reported lost or stolen).',
      'revocation_of_all_authorizations' => 'The card has been declined for an unknown reason.',
      'revocation_of_authorization' => 'The card has been declined for an unknown reason.',
      'security_violation' => 'The card has been declined for an unknown reason.',
      'service_not_allowed' => 'The card has been declined for an unknown reason.',
      'stolen_card' => 'The payment has been declined because the card is reported stolen.',
      'stop_payment_order' => 'The card has been declined for an unknown reason.',
      'testmode_decline' => 'A Stripe test card number was used.',
      'transaction_not_allowed' => 'The card has been declined for an unknown reason.',
      'try_again_later' => 'The card has been declined for an unknown reason.',
      'withdrawal_count_limit_exceeded' => 'The customer has exceeded the balance or credit limit available on their card.',
      'just_failed' => 'The card has been declined for an unknown reason. Please contact your issuing bank.'
    );
    return (isset($arr[$code]) ? $arr[$code] : 'N/A');
  }

}

?>