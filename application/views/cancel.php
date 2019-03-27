<?php include('include/header.php');?>
  
      <!--start-->
    <div class="slider_Wrapper clearfix mb0">
      
        <!-- <?php //echo $this->utility->showMsg();?> -->
        
      <?php foreach ($cancel as $key => $value) {
        if($value['cms_title'] == 'Holiday Packages')
        {
        ?>
      <div class="col8 checkout"> 
       



      <!----------------------Start Thank You----------------->

       <div class="box_wrapper">

          <div class="box_heading">
            <h4><img src="<?php echo base_url('assets/images/credit-cards-payment.svg');?>" alt="" width="30"> CANCEL  </h4>
          </div>


          <div class="box_body clearfix">

              <?php if ($this->session->flashdata('err_msg')) { ?>
                <div class="alert alert-danger">
                  <p><strong>Warning</strong> <span><?= $this->session->flashdata('err_msg');?></span></p>
                </div>
              <?php } ?>
              
                <div class="form_group">
                
                    <h3 style="text-align: center;" class="success-text" style="color: red;"> Please Try Again</h3>
                
                </div>

                <div class="text-center">
                  <button type="button" class="btn_primary" id="finish" onclick="finish()">Home</button>
                </div>
          </div>
 
       </div>

      <!------------------------End Thank You----------------->



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
    
   
<script type="text/javascript">
  function finish() {
  window.location.href= "<?php echo base_url();?>";
}
</script>




  

  