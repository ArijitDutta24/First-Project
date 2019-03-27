<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header"></li>
            <li class="<?php if ($this->uri->segment(2, 0) == "dashboard") { echo "active";} ?> treeview">
                <a href="<?php echo base_url('admin/dashboard'); ?>">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
                </a>
            </li>

                
    		<li <?php if ($this->uri->segment(2, 0) == "banner") { ?>class="active" <?php } ?>>
                    <a href="<?php echo base_url('admin/banner'); ?>"><i class="fa fa-gear"></i>Banner Images</a>  
            </li>

            <li <?php if ($this->uri->segment(2, 0) == "holiday_package_activity") { ?>class="active" <?php } ?>>
                    <a href="<?php echo base_url('admin/holiday_package_activity'); ?>"><i class="fa fa-gear"></i>holiday package activity</a>  
            </li>


    		</li>


            <!-- <li class="<?php if (($this->uri->segment(2, 0) == "blog") || ($this->uri->segment(2, 0) == "enquiry_list")) { echo "active"; } ?> treeview">
                <a href="#">
                    <i class="fa fa-gear"></i>
                    <span>Blog</span>
                    <i class="fa fa-angle-left pull-right"></i> 
                </a>
                <ul class="treeview-menu">
                    <li <?php if (($this->uri->segment(2, 0) == "blog_article")) { ?>class="active" <?php } ?>><a href="<?php echo base_url('admin/blog_article'); ?>"><i class="fa fa-circle-o"></i>Article</a></li>
                    <li <?php if (($this->uri->segment(2, 0) == "blog_category")) { ?>class="active" <?php } ?>><a href="<?php echo base_url('admin/blog_category'); ?>"><i class="fa fa-circle-o"></i>Catagory</a></li>
		    
                </ul>
            </li> -->

		
		    <li <?php if ($this->uri->segment(2, 0) == "cms") { ?>class="active" <?php } ?>>
                <a href="<?php echo base_url('admin/cms'); ?>"><i class="fa fa-gear"></i>CMS Management</a>  
            </li>


            <li <?php if ($this->uri->segment(2, 0) == "order") { ?>class="active" <?php } ?>>
                    <a href="<?php echo base_url('admin/order'); ?>"><i class="fa fa-gear"></i>Order Details</a>  
            </li>


            <li>
                <a href="<?php echo base_url('store/admin'); ?>" target="_blank"><i class="fa fa-gear"></i>Tour Package Admin</a>  
            </li>


            <!-- <li <?php if ($this->uri->segment(2, 0) == "metatags") { ?>class="active" <?php } ?>>
                <a href="<?php echo base_url('admin/metatags'); ?>"><i class="fa fa-gear"></i>Meta tag Management</a>  
            </li> -->

            
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
