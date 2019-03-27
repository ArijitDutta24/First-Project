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
            <h4>Register or Sign in</h4>
          </div>
          <div class="box_body clearfix">
            
             <div class="box_left">
              <?php if ($this->session->flashdata('err_msg')) { ?>
                <div class="alert alert-danger">
                  <p><strong>Warning</strong> <span><?= $this->session->flashdata('err_msg');?></span></p>
                </div>
              <?php } ?>

              <?php if ($this->session->flashdata('success_msg')) { ?>
                <div class="alert alert-success">
                  <p><span id="successmsg"><?= $this->session->flashdata('success_msg');?></span></p>
                </div>
              <?php } ?>
            <!-- <?php //echo $this->utility->showMsg();?> -->
               <form action="<?php echo base_url('Cart/loginAccess');?>" method="post">
                  <div class="form_group">
                    <label for="username">User Name</label>
                    <input type="text" id="username" class="form_control" name="username">
                  </div>

                  <div class="form_group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form_control" name="password">
                  </div>

                  <input type="submit" value="Login" class="btn_primary">
              </form>
             </div>
             <div class="box_right">
               <p>You don`t have to have an account to buy from us. Just click the button below.</p>
                <p>You`ll have the chance to set up an account during checkout, this is totally optional.</p>
                <a href="<?php echo base_url('Cart/billing');?>" class="btn_secondary">Checkout as Guest</a>
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

   <!-- Footer -->

<?php include('include/footer.php');?>

<!-- //Footer -->



   


