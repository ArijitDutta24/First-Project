<!-- Header -->

<?php include('include/header.php');?>

<!-- //Header -->


<!-- Body -->

 <!--start-->


  <!-- Left Side Bar -->
    <div class="slider_Wrapper aboutWrapper contactPage clearfix">
    <?php $img = base_url('assets/uploads/background_images/').$about[0]['cms_image'];?>
      <div class="col8 aboutBanner" style="background: url(<?php echo $img;?>) no-repeat center center / cover;">
        <div class="bannerContent contact">
          <div class="bluebg">
            <h4><strong>Click here</strong> to enquire</h4>
            <img src="<?php echo base_url();?>assets/images/mail-icon.png" alt="">
          </div>
          <div class="contactDetails">
            <address>
                <?php echo $contact[18]['setting_value'];?>
            </address>
            <hr>
           <address>
           <h5>TELEPHONE</h5>
                
                <p><a href="tel:<?php echo $contact[14]['setting_value'];?>" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='black'"><?php echo $contact[14]['setting_value'];?> </a></p>
            </address>
            <hr>
           <address>
                <h5>EMAIL</h5>
                <p><a href="mailto:<?php echo $contact[3]['setting_value'];?>" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='black'"><?php echo $contact[3]['setting_value'];?> </a></p>
            </address>
          </div>
          <div class="contactMap">
            <iframe src="<?php echo $contact[19]['setting_value'];?>" width="" height="" frameborder="0" style="border:0"></iframe>
          </div>            
        </div> 
         
      </div>
  <!-- //Left Side Bar-->
      
  <!-- Right Side Bar -->

        <?php include('include/right-side.php');?>

  <!-- //Right Side Bar -->
      
    </div>
    <!--end-->

 <!-- //Body -->

<!-- Footer -->

<?php include('include/footer.php');?>

<!-- //Footer -->