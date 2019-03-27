<?php include('include/header.php');?>

      <!--start-->
    <div class="slider_Wrapper clearfix mb0">
      <?php foreach ($holiday as $key => $value) {
        if($value['cms_title'] == 'Holiday Packages')
        {
        ?>
        <div class="col8 login">         
        <div class="box_wrapper">
          <div class="box_heading">
            <h4>Login</h4>
          </div>
          <div class="box_body clearfix">
            <!-- <?php //echo $this->utility->showMsg();?> -->
            <?php if ($this->session->flashdata('err_msg1')) { ?>
                <div class="alert alert-danger">
                  <p><strong>Warning</strong> <span><?= $this->session->flashdata('err_msg1');?></span></p>
                </div>
              <?php } ?>

              <?php if ($this->session->flashdata('success_msg1')) { ?>
                <div class="alert alert-success">
                  <p><span id="successmsg"><?= $this->session->flashdata('success_msg1');?></span></p>
                </div>
              <?php } ?>
             <div class="box_login">
               <form action="<?php echo base_url('Login/userLogin');?>" method="post">
                  <div class="form_group">
                    <label for="username">User Name</label>
                    <input type="text" id="username" class="form_control" name="username">
                  </div>

                  <div class="form_group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form_control" name="password">
                  </div>

                  <div class="form_group">
                    <p class="password-forgot">Forgot Password?<a href="javascript:void(0);" id="forgot-password" >Click Here</a></p>
                  </div>

                  <input type="submit" value="Login" class="btn_primary">
              </form>
             </div>
                         
          </div>
          
       </div>
          
      </div>
      <!-- Right Side Bar -->

        <?php include('include/right-side.php');?>

      <!-- //Right Side Bar -->
      <?php }};?>
    </div>
    <!--end-->

    <!-- Forget Password -->
    <div id="forgotpassword-form" title="Reset your password">
     <p class="forgot-msg" ></p>
      <form >
        <fieldset>
          
          <label for="email">Email</label>
          <input type="text" name="forgot-email" id="forgot-email" placeholder="enter your email" class="text ui-widget-content ui-corner-all">
         
         
        </fieldset>
      </form>
       <p class="forgot-note">Enter your registerd email address to get new password.</p>
    </div>
    <!-- Forget Password -->
   <!-- Footer -->

<?php include('include/footer.php');?>

<!-- //Footer -->
 <script type="text/javascript">
      jQuery(document).ready(function($){
        var emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
        var dialog, emailVal, tips = $('#forgotpassword-form').find('.forgot-msg'), form = $('#forgotpassword-form').find('form');
        function updateTips( t ) {
          tips
            .text( t )
            .addClass( "tip-error" );
        }
        
        function checkRegexp( o, regexp, n ) {
          if ( !( regexp.test( o ) ) ) {
            updateTips( n );
            return false;
          } else {
            return true;
          }
        }
        function sendPassword(){
          var valid = true;
          emailVal = $('#forgot-email').val();
          valid = valid && checkRegexp( emailVal, emailRegex, "Please enter a valid email" );
          if(valid){
            $.ajax({
              url : "<?php echo base_url();?>Login/sendpassword",
              method : "POST",
              data : {'emailVal' : emailVal},
              success : function(datar) {
                var response = jQuery.parseJSON(datar);
                if(response.success == 'yes'){
                  tips.text(response.message).addClass('tip-suc');
                  setTimeout(function(){ tips.text('').removeClass('tip-suc'); dialog.dialog( "close" ); }, 3000);
                }
                else if(response.success == 'no'){
                  tips.text(response.message).addClass('tip-error');
                   setTimeout(function(){ tips.text('').removeClass('tip-error');  }, 5000);
                }
                
              }
            });
          }
          return valid;
        }
            dialog = $( "#forgotpassword-form" ).dialog({
            autoOpen: false,
            height: 200,
            width: 450,
            modal: true,
            buttons: {
              "Submit": sendPassword,
              Cancel: function() {
                dialog.dialog( "close" );
              }
            },
            close: function() {
              form[ 0 ].reset();
              
            }
          });
       
          form = dialog.find( "form" ).on( "submit", function( event ) {
            event.preventDefault();
            sendPassword();
          });
       
          $( "#forgot-password" ).on( "click", function() {
            dialog.dialog( "open" );
          });
      });
    </script>
