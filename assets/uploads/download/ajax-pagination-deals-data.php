<?php if(!empty($products)){ foreach ($products as $key => $val) {
          $pic = base_url('store/content/products/demo/').$val['thumb_path'];?>
	        
	        <div class="packages_box packages-grid">
                
                <div class="packages_card">

  			          <div class="packages_img">
  				          <a href="<?php echo base_url();?>packages_details/<?php echo base64_encode($val['product']);?>">
  				          	<img src="<?php echo $pic;?>" alt="">
  				          </a>
  			          </div>

  			          <div class="packages_content">
  			            <a href="<?php echo base_url();?>packages_details/<?php echo base64_encode($val['product']);?>">
  			            	<h5 class="text-blue"><?php echo $val['pName'];?></h5>
  			            </a>
                    <p class="package_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda numquam fugiat.</p>
  			            <h3 class="package_price">$<?php echo $val['pPrice'];?></h3>
                    <a href="<?php echo base_url();?>packages_details/<?php echo base64_encode($val['product']);?>" class="btn_primary">
                      Read more
                    </a>
  			          </div>

                </div>

			        </div>
<?php } }else{ ?>
	<h2 class="no_package">No packages are found</h2>
<?php }?>
<div class="pagination_outer">
<?php echo $this->ajax_pagination->create_links(); ?></div>