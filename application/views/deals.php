<!-- Header -->

<?php include('include/header.php');?>

<!-- //Header -->


<!-- Body -->

  <!--start-->

  <!-- Left Side Bar -->
  <div class="slider_Wrapper aboutWrapper clearfix">
      

    <div class="col12 packages">
       
       <!--  <div class="packages_filter clearfix">

          <div class="filter_dropdown">
            <h4>Sort By :</h4>
            <div class="select_box">
              <select name="price-sorting" class="price-sorting type-regular" id="sortByPriceD" onchange="searchFilter()">
                 <option value="">Select Option</option>
                 <option value="ASC">Low to high</option>
                 <option value="DESC">High to low</option>               
              </select>
            </div>
          </div>

      </div> -->
     

      <div class="package_all" id="packageList2">  
          <?php 
            if(!empty($deal))
              { 
                foreach ($deal as $key => $val) 
                {
                      $img  = $val['thumb_path'];
                      $img1 = explode("-",$img);
                      $img2 = explode(".",$img1[1]);
                  if($img2[0] == 1)
                  {
                    $pic = base_url('store/content/products/demo/').$val['thumb_path'];
          ?>

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

                      <p class="package_desc"><?php echo word_limiter($val['pDescription'],12);?>
                      </p>

                      <!-- <h3 class="package_price">$<?php //echo $val['pPrice'];?></h3> -->
                      <h3 class="package_price"><?php echo 'USD$ &nbsp;&nbsp;'.number_format($val['pPrice'], 2);?>   
                      </h3>
                    
                      <br>
                
                  <?php foreach ($curr as $val1) {?>                        
                      <h3 class="package_price"><?php echo currency($val['pPrice'], $val1['curr_rate'], $val1['curr_name']);?>
                      </h3>
                  <?php } ?>
                      
                      <a href="<?php echo base_url();?>packages_details/<?php echo base64_encode($val['product']);?>" class="btn_primary">
                        Read more
                      </a>
                    </div>

                </div>

              </div>
             
          <?php } } }
          else
          { 
          ?>
              <h2 class="no_package">No packages are found</h2>
          <?php }?>
          	<div class="pagination_outer">
				<?php echo $this->ajax_pagination->create_links(); ?>
			</div>
      </div>

        
         
    </div>
  <!-- //Left Side Bar-->
     
  </div>
    <!--end-->

<!-- //Body -->

<!-- Footer -->

<?php include('include/footer.php');?>

<!-- //Footer -->
<script type="text/javascript">
  function searchFilter(page_num) {
    page_num = page_num?page_num:0;
    //var keywords = $('#keywords').val();
    var categoryBy = get_filter('category');
    // console.log(categoryBy);
    var sortBy = $('#sortByPriceD').val();
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>home/ajaxPaginationDataDeals/'+page_num,
        data:'page='+page_num+'&sortBy='+sortBy+'&categoryBy='+categoryBy,
        beforeSend: function () {
            $('.loading').show();
        },
        success: function (html) {
            $('#packageList2').html(html);
            $('.loading').fadeOut("slow");
        }
    });
  }

  function get_filter(class_name)
    {
        var filter = [];
        $('ul.cat_filter li a.'+class_name+'.active').each(function(){
            filter.push($(this).attr('data-cat'));
        });
        return filter;
    }

  jQuery(document).ready(function($){
    $(document).on('click','ul.cat_filter li a',function(e){
      e.preventDefault();
        if($(this).hasClass('active')){
          $(this).removeClass('active');
          searchFilter();
        }else{
          $(this).addClass('active');
          searchFilter();
        }
    });
  });
</script>

