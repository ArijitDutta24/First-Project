<header class="main-header">
    <!-- Logo -->
 <a href="<?php echo base_url()?>admin/dashboard" class="logo"> 
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Heri</b>tage</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Heritage</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php 
              $filename="assets/uploads/user_images/".$this->session->userdata('userimg');
               if(file_exists($filename) && $this->session->userdata('userimg')!=""){ ?>
              <img src="<?php echo base_url();?>assets/uploads/user_images/<?php echo $this->session->userdata('userimg')?>" class="user-image">
             <?php } 
             else
             {?>
               <img src="<?php echo base_url();?>assets/uploads/user_images/images.png" class="user-image" alt="User Image">
            <?php } ?>
              <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               <?php 
                $filename="assets/uploads/user_images/".$this->session->userdata('userimg');
               if(file_exists($filename) && $this->session->userdata('userimg')!=""){?>
                <img src="<?php echo base_url();?>assets/uploads/user_images/<?php echo $this->session->userdata('userimg')?>" class="img-circle">
                <?php } 
                else
             {?>
               <img src="<?php echo base_url();?>assets/uploads/user_images/images.png" class="user-image">
            <?php } ?>
                <p>
                  <?php echo $this->session->userdata('username');?>

                </p>
              </li>
              <!-- Menu Body -->
              <!--<li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li>-->
              <!-- Menu Footer-->
              <li class="user-footer" style="background-color:#3c8dbc !important;">
                <div class="pull-left">
                  <a href="<?php echo base_url()?>admin/profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('admin/login/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
          </li>
        </ul>
      </div>
    </nav>
  </header>