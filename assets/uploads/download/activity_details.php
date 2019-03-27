<?php include('include/header.php');?>

      <!--start-->
      <?php foreach ($picture as $key => $val) {
              $picture1 = base_url('store/content/products/demo/').$val['thumb_path'];
              $pic1 = explode('-', $val['thumb_path']);
              $pic2 = explode('.', $pic1[1]);
              // print_r($pic2);
              // exit;
              if($pic2[0]==1)
              {              
      ?>
      

            <input type="hidden" id='img' value="<?php echo $picture1;?>">
      <?php }}?>
    <div class="slider_Wrapper clearfix mb0" id="refresh">
      <?php foreach ($holiday as $key => $value) {
        if($value['cms_title'] == 'Holiday Packages')
        {
        ?>
      <div class="col8 details">
         <div class="details_slider">
          <?php foreach ($details as $key => $val) {?>
           <h1><?php echo $val['pName'];?></h1>
           <?php }?>
           <div class="owl-carousel detailsBanner">
            <?php foreach ($picture as $key => $val) {
              $pic = base_url('store/content/products/demo/').$val['thumb_path'];

              
              
              ?>
             <div class="item">
            
                <img src="<?php echo $pic;?>" alt="">
              
              
             </div>
            <?php }?>

             

          </div>

          <ul id="accordion" class="accordion mt30">
              <li>
                  <div class="link">Description <img src="<?php echo base_url('assets/images/chevron.svg');?>" alt=""></div>
                  <?php foreach ($details as $key => $val) {?>
                  <div class="submenu">
                     <p><?php echo $val['pDescription'];?></p>
                  </div>
                <?php }?>
              </li> 

              <li>
                  <div class="link">Product Video <img src="<?php echo base_url('assets/images/chevron.svg');?>" alt=""></div>
                  <?php foreach ($details as $key => $val) {
                    $video = $val['pVideo'];
                    $video2 = $val['pVideo2'];
                    $video3 = $val['pVideo3'];
                   
                    ?>
                  <div class="submenu text-center">
                    <?php if(!empty($video) || !empty($video2) || !empty($video))
                    {?>
                      <iframe src='<?php echo $video;?>'
                        ></iframe>
                        <iframe src='<?php echo $video2;?>'
                        ></iframe>
                        <iframe src='<?php echo $video3;?>'
                        ></iframe>
                        
                    <?php }
                    else{?>
                    
                     <p>No video is currently available for this product</p>
                  </div>
                  <?php }}?>
              </li> 

              

              <li>
                  <div class="link">Product Enquiry <img src="<?php echo base_url('assets/images/chevron.svg');?>" alt=""></div>
                  <div class="submenu">
                    <div class="alert alert-danger" id="errors" style="display: none;">
                    <p><strong>Warning</strong> <span id="errormsgs">lorem ipsum doler sit amet</span></p>
                  </div>


                  <div class="alert alert-success" id="success1" style="display: none;">
                <p><span id="successmsg1">lorem ipsum doler sit amet</span></p>
              </div>
                     <form action="#" method="post" onsubmit="return validation()">
                        <div class="form_group">
                          <label for="name">Name*</label>
                          <input type="text" id="name" name="name" class="form_control">
                          <span id="namecheck">  </span>
                        </div>

                        <div class="form_group">
                          <label for="email">Email*</label>
                          <input type="text" id="email" name="email" class="form_control">
                          <span id="emailcheck">  </span>
                        </div>

                        <div class="form_group">
                          <label for="comments">Comments*</label>
                          <textarea name="comments" id="comments" rows="5" class="form_control"></textarea>
                          <span id="commentcheck">  </span>
                        </div>

                        <!-- <input type="submit" class="btn_primary" value="Send" onclick="insert()"> -->
                        <a href="#" onclick="insert()" class="btn_primary">Send</a>
                     </form>
                  </div>
              </li>

          </ul>

         </div>

         <div class="details_content" id="details_content">
           <div class="panel">
             <div class="panel_heading">
              <h4>What's Included</h4>
             </div>
                <?php foreach ($details as $key => $val) {
                
                ?>
             <div class="panel_body">
               <div class="package_details">
                <span>Availability:</span> 
                <span>
                  <input type="hidden" id="stock" value="<?php echo $val['pStock']?>">
                  
                <?php 
                   if($val['pStock']>0)
                    {
                      echo 'Available';
                    }
                else
                    {
                      echo 'Not Available';
                    }
                 ?> 
               </span>
             </div>
               <div class="package_details"><span>Code/Model No: </span> <span>
                <input type="hidden" id="code" value="<?php echo $val['pCode']?>">
                <input type="hidden" id="prodid" value="<?php echo $val['product']?>">
                <input type="hidden" id="prodid1" value="<?php echo md5($val['product'])?>">
                <input type="hidden" id="catid" value="<?php echo $val['category']?>">
                <input type="hidden" id="prodName" value="<?php echo $val['pName']?>">
                <input type="hidden" id="purchase" value="<?php echo $val['maxPurchaseQty']?>">
                <?php
                if(!empty($val['pCode']))
                  {
                    echo $val['pCode'];
                  }
                  else
                  {?>
                    N/A
                  <?php }?>  
                  </span>
               </div>

               <div class="package_details">
                <span>Max Purchase Qty:</span> 
                <span>
                  
                
                      <?php echo $val['maxPurchaseQty'];?>
                    
               </span>
             </div>

               <div class="package_details price">$<?php 
               if(!empty($val['pPrice']))
                {
                  echo number_format((float)$val['pPrice'], 2, '.', '');
                }
                else
                {
                  echo "0.00";
                }   ?>
                  <input type="hidden" id="offer" value="<?php echo $val['pPrice']?>">
                </div>
               <div class="package_details"><span>Qty: </span> 
                <span>
                  <input type="number" class="package_qty" min="1" id="qty" value="1" max="<?php if($val['pStock']<$val['maxPurchaseQty']){echo $val['pStock'];}else{echo $val['maxPurchaseQty'];}?>">
                </span>
              </div>
              <div class="alert alert-danger" id="btnerror" style="display: none;">
                <p><strong>Warning</strong> <span id="btnerrormsg">lorem ipsum doler sit amet</span></p>
              </div>

               <button class="btn_secondary--large mt30" id="enquiry">Enquiry</button>
               <?php 
               
               if($val['maxPurchaseQty']>0 && $val['pStock'] > 0)
               {
                 $class = 'js__popup1';
               }
               else
               {
                 $class = '';
               }
               ?>

               <button class="btn_primary--large mt30 <?php echo $class;?>" id="booknow" onclick="myFunction()"><img src="<?php echo base_url('assets/images/shopping-cart.svg');?>" width="20" alt=""> Book Now</button>
             </div>
           <?php }?>

           </div>

              <div class="panel">
               <div class="panel_heading"><h4>MOST POPULAR PRODUCTS</h4></div>
               <?php foreach ($popular as $popularvalue) {
                    $pic = base_url('store/content/products/demo/').$popularvalue['thumb_path'];
                    ?>
                     <div class="panel_body">
                        <a href="<?php echo base_url().'packages_details/'.base64_encode($popularvalue['product']);?>">
                          <img src="<?php echo $pic;?>" class="packages_img" alt="">
                        </a>

                        <div class="packages_content">
                          <a href="<?php echo base_url().'packages_details/'. base64_encode($popularvalue['product']);?>">
                            <h5><?php echo $popularvalue['pTitle'];?></h5>
                          </a>                                               
                        </div>

                     </div>
                <?php }?>
             </div>
         </div>
          
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

<script>
  jQuery(document).ready(function($){

    $('#enquiry').on('click',function(){
      var attrB = $('ul#accordion li:eq(2)').find('div.submenu').attr('style');
      if($('ul#accordion li:eq(2)').hasClass('open')){
        $('ul#accordion li:eq(2)').removeClass('open');
      }else{
        $('ul#accordion li:eq(2)').addClass('open');
      }
      
      if(attrB == 'display: block;'){
        $('ul#accordion li:eq(2)').find('div.submenu').css('display','none');
      }else{
        $('ul#accordion li:eq(2)').find('div.submenu').css('display','block');
      }
      
    });
  });
</script>







<script type="text/javascript">
  






function insert()
    {


      var user    = document.getElementById('name').value;
      var email   = document.getElementById('email').value;
      var comm    = document.getElementById('comments').value;
      var http    = "<?php echo base_url('Cart/sendEmail');?>";


      //**--------------------Username Validation---------------------------**//
      if(user == '')
      {
        document.getElementById('namecheck').innerHTML = '** Please Fill The Name Field';
        document.getElementById('namecheck').style.color = "red";

        return false;
      }
      else
      {
        document.getElementById('namecheck').innerHTML = '';
      }
      
      
      if(!isNaN(user))
      {
        document.getElementById('namecheck').innerHTML = '** Name Must Be Start With Characters';
        document.getElementById('namecheck').style.color = "red";

        return false;
      }
      else
      {
        document.getElementById('namecheck').innerHTML = '';
      }


      
      //**-------------------Email Validation-------------------------------**//

      if(email == '')
      {
        document.getElementById('emailcheck').innerHTML = '** Please Fill The Email Field';
        document.getElementById('emailcheck').style.color = "red";

        return false;
      }
      else
      {
        document.getElementById('emailcheck').innerHTML = '';
      }
      

      if(email.indexOf('@') <= 0)
      {
        document.getElementById('emailcheck').innerHTML = '** User Cannot Start With This Symbol';
        document.getElementById('emailcheck').style.color = "red";

        return false;
      }
      else
      {
        document.getElementById('emailcheck').innerHTML = '';
      }


      if((email.charAt(email.length-4) != '.') && (email.charAt(email.length-3) != '.'))
      {
        document.getElementById('emailcheck').innerHTML = '** Dot Invalid Position';
        document.getElementById('emailcheck').style.color = "red";

        return false;
      }
      else
      {
        document.getElementById('emailcheck').innerHTML = '';
      }
    


    //**-------------------Comments Validation-------------------------------**//

      if(comm == '')
      {
        document.getElementById('commentcheck').innerHTML = '** Please Fill The Comment Area';
        document.getElementById('commentcheck').style.color = "red";

        return false;
      }
      else
      {
        document.getElementById('commentcheck').innerHTML = '';
      }

      
        $.ajax({
          url : http,
          method : "POST",
          data : {'name' : user, 'email' : email, 'comm' : comm},
          success : function(data) {
            $('#success1').css("display","block");
            $('#successmsg1').html('** Email Sent Successfully');
            
            
          },
          error : function(data) {
            $('#errors').css("display","block");
            $('#errormsgs').html('** Email Not Sent Successfully');
            // alert('abc');
          }
          
        });



    }



</script>