<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo $contact[0]['setting_value'];?></title>
      <!-- OTHER CSS -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fonts.css">

      <!-- SLIDER  -->
      <link href="<?php echo base_url();?>assets/css/owl.carousel.min.css" rel="stylesheet">  
       
     
      <!-- Custom Css -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
   </head>
   <body>
      <header>
         <div class="container clearfix">
         <?php $img = base_url('assets/images/').$contact[5]['setting_value'];?>
            <a href="<?php base_url();?>" class="logo"><img src="<?php echo $img;?>" alt=""></a>
            <img src="<?php echo base_url();?>assets/images/menu.svg" id="mobile_menu" width="35" alt="">
            <ul class="header_nav">

               <li <?php if ($this->uri->segment(1) == "") { ?> class="active" <?php } ?>><a href="<?php echo base_url();?>">Home</a></li>

               <li <?php if ($this->uri->segment(1) == "about_us") { ?> class="active" <?php } ?>><a href="<?php echo base_url();?>about_us">About Us</a></li>
               
               <li <?php if ($this->uri->segment(1) == "tours_transfers") { ?> class="active" <?php } ?>><a href="<?php echo base_url();?>tours_transfers">Tours & Transfers</a></li>
               
               <li <?php if ($this->uri->segment(1) == "holiday") { ?> class="active" <?php } ?>><a href="<?php echo base_url();?>store" target="_blank">holiday Packages</a></li>
               
               <li <?php if ($this->uri->segment(1) == "groups_incentives") { ?> class="active" <?php } ?>><a href="<?php echo base_url();?>groups_incentives">Groups & Incentives</a></li>
               
               <li <?php if ($this->uri->segment(1) == "deals") { ?> class="active" <?php } ?>><a href="<?php echo base_url();?>deals">Deals</a></li>
               
               <li <?php if ($this->uri->segment(1) == "contact_us") { ?> class="active" <?php } ?>><a href="<?php echo base_url();?>contact_us">Contact Us</a></li>
            
            </ul>
         </div>
      </header>

      <section class="top_info">
         <div class="container clearfix">
            <span class="tagline"><em>A Journey of discovery...</em></span>
            <ul>
               <li><a href="javascript:void(0)"><?php echo $contact[14]['setting_value'];?></a></li>
               <li><a href="javascript:void(0)">ENQUIRE NOW</a></li>
               <li><a class="book" href="javascript:void(0)">BOOK NOW</a></li>
            </ul>
         </div>
      </section>