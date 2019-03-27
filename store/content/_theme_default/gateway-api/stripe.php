     <?php
     // Checks template is loading via system, so do not move..
     if (!defined('PARENT')) {
       exit;
     }

     // STRIPE API
     ?>
      <script src="https://checkout.stripe.com/checkout.js"></script>
      <script>
      //<![CDATA[
      function mc_Stripe() {
        jQuery(document).ready(function() {
          jQuery.ajax({
            type     : 'POST',
            url      : '<?php echo $this->BASE_PATH; ?>/?cart-ops=checkout-ops&nav=stripe',
            data     : jQuery('#pform').serialize(),
            cache    : false,
            dataType : 'json',
            success  : function (data) {
              if (data['redir']) {
                window.location = data['redir'];
              } else {
                switch(data['msg']) {
                  case 'ok':
                    mc_CloseSpinner();
                    var chargeAmount = data['totals'];
                    var gw_handler = StripeCheckout.configure({
                      key            : '<?php echo $this->STRIPE_PARAMS['perishable-key']; ?>',
                      image          : '<?php echo (isset($this->STRIPE_PARAMS['image']) && $this->STRIPE_PARAMS['image'] ? $this->BASE_PATH . '/' . $this->THEME_FOLDER . '/images/' . $this->STRIPE_PARAMS['image'] : $this->BASE_PATH . '/' . $this->THEME_FOLDER . '/images/stripe.png'); ?>',
                      locale         : '<?php echo (isset($this->STRIPE_PARAMS['locale']) ? $this->STRIPE_PARAMS['locale'] : 'auto'); ?>',
                      currency       : '<?php echo $this->SETTINGS['baseCurrency']; ?>',
                      billingAddress : true,
                      token          : function(token) {
                        mc_ShowSpinner();
                        jQuery.post('<?php echo $this->BASE_PATH; ?>/checkout/stripe.php', {
                          id     : token.id,
                          email  : token.email,
                          custom : data['s_custom'],
                          charge : chargeAmount.toFixed(0)
                        }, function(data) {
                          switch(data['status']) {
                            case 'ok':
                              window.location = data['url'];
                              break;
                            default:
                              if (data['errcode'] != undefined) {
                                window.location = 'index.php?p=gate2&errStr=' + data['errcode'];
                              } else {
                                mc_CloseSpinner();
                                mc_showDialog(data['msg'], data['title'], 'err');
                              }
                              break;
                          }
                        }, 'json');
                      }
                    });
                    var paymail = jQuery('input[name="bill[em]"]').val();
                    gw_handler.open({
                      name        : '<?php echo mc_safeHTML(mc_filterJS($this->SETTINGS['website'])); ?>',
                      description : '<?php echo mc_filterJS($this->TXT[0]); ?>',
                      email       : paymail,
                      zipCode     : true,
                      amount      : chargeAmount.toFixed(0)
                    });
                    mc_CloseSpinner();
                    break;
                  default:
                    mc_CloseSpinner();
                    mc_showDialog((data['html'] ? data['html'] : data['text'][1]), data['text'][0], data['msg']);
                    break;
                }
              }
            }
          });
        });
      }
      window.addEventListener('popstate', function() {
        gw_handler.close();
      });
      //]]>
      </script>




