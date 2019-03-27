<!-- Header -->

<?php include('include/header.php');?>

<!-- //Header -->


<!-- Body -->

  <!--start-->

  <!-- Left Side Bar -->
    
       <!--start-->
    <div class="slider_Wrapper aboutWrapper clearfix">
      <?php foreach ($holiday as $key => $value) {
        if($value['cms_title'] == 'Holiday Packages')
        {
    ?>
      <div class="col8 packages">

        <div class="packages_filter clearfix">

          <div class="filter_dropdown">
            <h4>Sort By :</h4>
            <div class="select_box">
              <select name="price-sorting" class="price-sorting type-regular" id="sortByPrice1" onchange="searchFilter()">
                 <option value="">Select Option</option>
                 <option value="ASC">Low to high</option>
                 <option value="DESC">High to low</option>               
              </select>
            </div>
          </div>

          <div class="filter_list clearfix ">
            <ul class="cat_filter">
              <?php foreach ($activities as $key => $val) {?>
              <li><a href="<?php echo base_url();?>holiday/activities/<?php echo base64_encode($val['theme_id']);?>" class="category" data-cat="<?php echo $val['theme_id'];?>" ><?php echo $val['theme_name'];?></a> </li>
            <?php }?>
            </ul>
          </div>
          
      </div>


      <div class="package_all" id="packageList1">  
	        <?php if(!empty($products)){ foreach ($products as $key => $val) {
              $pic = base_url('assets/uploads/activity_images/').$val['activity_image'];?>
              <div class="packages_box packages-grid">
                
                <div class="packages_card">

                  <div class="packages_img">
                    <a href="<?php echo base_url();?>activity_details/<?php echo base64_encode($val['activity_id']);?>">
                      <img src="<?php echo $pic;?>" alt="">
                    </a>
                  </div>

                  <div class="packages_content">
                    <a href="<?php echo base_url();?>activity_details/<?php echo base64_encode($val['activity_id']);?>">
                      <h5 class="text-blue"><?php echo $val['activity_name'];?></h5>
                    </a>

                    <p class="package_desc"><?php echo word_limiter($val['activity_description'],12);?>
                    </p>

                    <!-- <h3 class="package_price">$<?php //echo $val['activity_price'];?></h3> -->

                    <h3 class="package_price"><?php echo 'USD$ &nbsp;&nbsp;'.number_format($val['activity_price'], 2);?>   
                    </h3>
                    
                    <br>
                
                <?php foreach ($curr as $val1) {?>                        
                    <h3 class="package_price"><?php echo currency($val['activity_price'], $val1['curr_rate'], $val1['curr_name']);?>
                    </h3>
                <?php } ?>

                    <a href="<?php echo base_url();?>activity_details/<?php echo base64_encode($val['activity_id']);?>" class="btn_primary">
                      Read more
                    </a>
                  </div>

                </div>

              </div>
             
          <?php } }else{ ?>
            <h2 class="no_package">No packages are found</h2>
          <?php }?>
          <div class="pagination_outer">
           <?php echo $this->ajax_pagination->create_links(); ?>
          </div>
      </div>

         <div class="loading" style="display:none;">
                <img src="<?php echo base_url().'assets/images/packageloader.gif'; ?>"/>
         </div> 
         
      </div>
  <!-- //Left Side Bar-->
      
  <!-- Right Side Bar -->

        <?php include('include/right-side.php');?>

  <!-- //Right Side Bar -->

     <?php }};?> 
    </div>
    <!--end-->

<!-- //Body -->

<!-- Footer -->

<?php include('include/footer.php');?>

<!-- //Footer -->

<script>
	
function searchFilter(page_num) {
    page_num = page_num?page_num:0;
    //var keywords = $('#keywords').val();
    var categoryBy = get_filter('category');
    // console.log(categoryBy);
    var sortBy = $('#sortByPrice1').val();
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>home/ajaxPaginationDataSecond/'+page_num,
        data:'page='+page_num+'&sortBy='+sortBy+'&categoryBy='+categoryBy,
        beforeSend: function () {
            $('.loading').show();
        },
        success: function (html) {
            $('#packageList1').html(html);
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