<!--Header -->

<?php include('include/header.php');?>

<!-- //Header -->

<!-- Body -->
    <!--start-->

    <!-- Left Side Bar -->
    <div class="slider_Wrapper clearfix">
      <div class="col8">
          <div class="owl-carousel homeBanner">
          <?php
            foreach ($banner as $value) 
            {
              if($value['status']==1 && $value['banner_image'])
                {
                  $img = base_url('assets/uploads/banner_image/').$value['banner_image'];
          ?>
                 <div class="item">
                   <img src="<?php echo $img; ?>" alt="">
                 </div>
          <?php }}?>

      </div>
    </div>

      <!-- //Left Side Bar-->
      
      <!-- Right Side Bar -->

        <?php include('include/right-side.php');?>

      <!-- //Right Side Bar -->
      
    </div>
    <!--end-->

    <!-- DESCRIPTON -->
          <div class="description">
            <div class="container">
              <?php foreach ($home as $key => $value) {
                if($value['cms_title'] == 'Home')
                  {
              ?>
               <h2><?php echo $value['cms_heading'];?></h2>
              <p><?php echo $value['cms_description'];?></p>
            <?php }}?>
            </div>
           
          </div>
    <!-- // DESCRIPTON -->


<!-- //Body -->

<!-- Footer -->

<?php include('include/footer.php');?>

<!-- //Footer