<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo $contact[0]['setting_value'];?></title>
      <!-- OTHER CSS -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fonts.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/easy-responsive-tabs.css " />

      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
      
      <!-- SLIDER  -->
      <link href="<?php echo base_url();?>assets/css/owl.carousel.min.css" rel="stylesheet">  
       
     
      <!-- Custom Css -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

      
   </head>
   <body>
      <header>
         <div class="container clearfix">
         <?php $img = base_url('assets/images/').$contact[5]['setting_value'];?>
            <a href="<?php echo base_url();?>" class="logo"><img src="<?php echo $img;?>" alt=""></a>
            <img src="<?php echo base_url();?>assets/images/menu.svg" id="mobile_menu" width="35" alt="">
            <ul class="header_nav">

               <li <?php if ($this->uri->segment(1) == "") { ?> class="active" <?php } ?>><a href="<?php echo base_url();?>">Home</a></li>

               <li <?php if ($this->uri->segment(1) == "about_us") { ?> class="active" <?php } ?>><a href="<?php echo base_url();?>about_us">About Us</a></li>
               
               <li <?php if ($this->uri->segment(1) == "tours_transfers") { ?> class="active" <?php } ?>><a href="<?php echo base_url();?>tours_transfers">Tours & Transfers</a></li>
               
               <li class="hasmenu" <?php if ($this->uri->segment(1) == "holiday") { ?> class="active" <?php } ?>><a href="javascript:void(0)">holiday Packages</a>
               <ul class="submenu">
                    <li><a href="<?php echo base_url();?>holiday">Packages</a></li>
                    <li><a href="<?php echo base_url();?>activities">Activities</a></li>
                    
                  </ul>
               </li>
               
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
               
               <li><a href="tel:<?php echo $contact[14]['setting_value'];?>" style="color: white;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='white'"><?php echo $contact[14]['setting_value'];?></a></li>
               
               <?php
               if(count($this->cart->contents())==0){?>
               <li><a href="javascript:void(0)" class="js__popup2 busket">CART</a>
               </li>
               <?php }else{?>

                
               <li><a href="javascript:void(0)" class="js__popup2 busket" id="busCart">CART(<?php echo count($this->cart->contents());?>)</a>
                 
               </li>
               <?php }?>
               
            
               <?php if(!empty($this->session->userdata('id')))
               {
                  
               

               ?>

               
               <li class="hasmenu">
                <a class="book" href="javascript:void(0)">Hi, <?php echo ucfirst($this->session->userdata('accName'));?></a>
                <ul class="submenu">
                    <li><a href="<?php echo base_url('profile');?>">My Account</a></li>
                    <li><a href="<?php echo base_url('Home/logout');?>">Logout</a></li>
                </ul>    
               </li>
            <?php } else{ ?>
              <li><a href="<?php echo base_url('Login');?>">LOGIN</a></li>

            <?php }?>
            </ul>
         </div>
      </section>