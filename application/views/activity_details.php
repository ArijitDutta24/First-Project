<?php include('include/header.php');?>

    <!--start-->
    <div class="slider_Wrapper clearfix mb0" id="refresh">
      <?php foreach ($holiday as $key => $value) {
        if($value['cms_title'] == 'Holiday Packages')
        {
        ?>
      <div class="col8 details" id="activity_details">
         <div class="details_slider">
          <?php foreach ($details as $key => $val) {?>
           <h1><?php echo $val['activity_name'];?></h1>
           <?php }?>
           <div class="owl-carousel detailsBanner">
            <?php foreach ($details as $key => $val) {
              $pic = base_url('assets/uploads/activity_images/').$val['activity_image'];

              
              
              ?>
             <div class="item">
                <input type="hidden" id='act_img' value="<?php echo $pic;?>">

                <img src="<?php echo $pic;?>" alt="">
              
              
             </div>
            <?php }?>

             

          </div>

          <ul id="accordion" class="accordion mt30">
              <li>
                  <div class="link">Activity Description <img src="<?php echo base_url('assets/images/chevron.svg');?>" alt=""></div>
                  <?php foreach ($details as $key => $val) {?>
                  <div class="submenu">
                     <p><?php echo $val['activity_description'];?></p>
                  </div>
                <?php }?>
              </li> 

              <li>
                  <div class="link">Activity Inclusion <img src="<?php echo base_url('assets/images/chevron.svg');?>" alt=""></div>
                  
                  <div class="submenu text-center">
                   <p><?php echo $val['activity_inclusions'];?></p>
                  </div>
                  
              </li> 

                           

              <li>
                  <div class="link">Activity Enquiry <img src="<?php echo base_url('assets/images/chevron.svg');?>" alt=""></div>
                  <div class="submenu">
                    <div class="alert alert-danger" id="act_errors" style="display: none;">
                    <p><strong>Warning</strong> <span id="act_errormsgs">lorem ipsum doler sit amet</span></p>
                  </div>


                  <div class="alert alert-success" id="act_success1" style="display: none;">
                <p><span id="act_successmsg1">lorem ipsum doler sit amet</span></p>
              </div>
                     <form action="#" method="post" onsubmit="return validation()">
                        <div class="form_group">
                          <label for="name">Name*</label>
                          <input type="text" id="name1" name="name1" class="form_control">
                          <span id="namecheck1">  </span>
                        </div>

                        <div class="form_group">
                          <label for="email">Email*</label>
                          <input type="text" id="email1" name="email1" class="form_control">
                          <span id="emailcheck1">  </span>
                        </div>

                        <div class="form_group">
                          <label for="comments">Comments*</label>
                          <textarea name="comments1" id="comments1" rows="5" class="form_control"></textarea>
                          <span id="commentcheck1">  </span>
                        </div>

                        <a href="#" onclick="insert_activity()" class="btn_primary">Send</a>
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
             <input type="hidden" name="act_id" id="act_id" value="<?php echo $val['activity_id'];?>">
             <input type="hidden" name="act_price" id="act_price" value="<?php echo $val['activity_price'];?>">
             <input type="hidden" name="act_cat_id" id="act_cat_id" value="<?php echo $val['theme_id'];?>">
             <input type="hidden" name="act_time" id="act_time" value="<?php echo $val['activity_duration'];?>">
             <input type="hidden" name="act_name" id="act_name" value="<?php echo $val['activity_name'];?>">
             <input type="hidden" id="act_stock" value="<?php echo $val['activity_stock']?>">
                <input type="hidden" id="act_purchase" value="<?php echo $val['activity_max_purchase']?>">


             <div class="panel_body">
               <div class="package_details">
                <span>Duration:</span> 
                <span>
                  
                  <?php echo $val['activity_duration'];?> Minutes
               </span>
             </div>

            
              <div class="package_details price">
                <span>Per Person:</span> 
                <span>
                  
                <?php 
                     if(!empty($val['activity_price']))
                      {
                        echo 'USD$ &nbsp;&nbsp;&nbsp;&nbsp;'.$val['activity_price'];
                      }
                      else
                      {
                        echo "USD$ &nbsp;&nbsp;&nbsp;&nbsp;0.00";
                      }   
                     
                    foreach ($curr as $val1)
                    { 
                       if(!empty($val['activity_price']))
                        {
                          echo '<br>'.$val1['curr_name'].' &nbsp;&nbsp;'.Ocurrency($val['activity_price'], $val1['curr_rate']);
                        }
                        else
                        {
                          echo '<br>'.$val1['curr_name'].' &nbsp;&nbsp;'.number_format(Ocurrency($val['activity_price'], $val1['curr_rate']), 2);
                        }
                    }   
                ?>

               </span>
               
              </div>
            
               

               <!-- <div class="package_details price">
                <span>Per Person:</span>
                <span>
                  $<?php 
               //if(!empty($val['activity_price']))
                {
                  //echo $val['activity_price'];
                }
                //else
                {
                  //echo "0.00";
                }   ?>
                </span>
                </div> -->


               <div class="package_details"><span>No. Of Person: </span> 
                <span>
                  <input type="number" class="package_qty" min="1" id="act_qty" value="1" max="3">
                </span>
              </div>

              <div class="package_details"><span>Activity Date: </span> 
                <span>
                  <input type="text" id="datepicker1" class="datepicker1" placeholder="yyyy-mm-dd">
                </span>
              </div>

              <div class="alert alert-danger" id="btnerror" style="display: none;">
                <p><strong>Warning</strong> <span id="btnerrormsg">lorem ipsum doler sit amet</span></p>
              </div>

               <button class="btn_secondary--large mt30" id="enquiry">Enquiry</button>
               
               <button id="booknow1" class="btn_primary--large mt30" onclick="myActivityFunction()"><img src="<?php echo base_url('assets/images/shopping-cart.svg');?>" width="20" alt=""> Book Now</button>
             </div>
           <?php }?>

           </div>
           <p style="text-align: center;" id="T&C"><a href="#" style="color: blue;" onMouseOver="this.style.color='green'" onMouseOut="this.style.color='blue'">Terms And Condition</a></p>


              
         </div>


      </div>

      <!-- <div class="col8 details" id="activity_cart" style="display: none;">
        hj
      </div> -->
      <!-- Right Side Bar -->

        <?php include('include/right-side.php');?>

      <!-- //Right Side Bar -->
      <?php }};?>
    </div>
    <!--end-->

   <!-- Footer -->

<?php include('include/footer.php');?>

<!-- //Footer -->


<!-- The Modal -->
<div id="act_myModal" class="act_modal">

  <!-- Modal content -->
  <div class="act_modal-content">
    <div class="act_modal-header">      
      <h2>Terms And Conditions <span class="act_close">X</span></h2>      
    </div>
    <div class="act_modal-body">
      <?php foreach ($details as $key => $val) {?>
        <p><?php echo $val['activity_terms_conditions'];?></p>
      <?php }?>
    </div>
  </div>

</div>

<script>
  

  jQuery(document).ready(function($){

    $('#enquiry').on('click',function(){
      $('html,body').animate({
        scrollTop: $("ul#accordion li:eq(2)").offset().top},
        'slow');
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

  $(function(){
    $("#datepicker1").datepicker({
        dateFormat: "yy-mm-dd",
        minDate : 0
    });
});


  // Get the modal
        var modal = document.getElementById('act_myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("T&C");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("act_close")[0];

        // When the user clicks on the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
</script>







<script type="text/javascript">


function insert_activity()
    {


      var user    = document.getElementById('name1').value;
      var email   = document.getElementById('email1').value;
      var comm    = document.getElementById('comments1').value;
      var http    = "<?php echo base_url('Cart/sendEmail');?>";
      var product = document.getElementById('act_name').value;



    //**--------------------Username Validation---------------------------**//
      if(user == '')
      {
        document.getElementById('namecheck1').innerHTML = '** Please Fill The Name Field';
        document.getElementById('namecheck1').style.color = "red";

        $('html, body').animate({
            scrollTop: $("#namecheck1").offset().top
        }, 2000);
        
        return false;
        
      }
      else
      {
        document.getElementById('namecheck1').innerHTML = '';
        
      }
      
      
      if(!isNaN(user))
      {
        document.getElementById('namecheck1').innerHTML = '** Name Must Be Start With Characters';
        document.getElementById('namecheck1').style.color = "red";

        $('html, body').animate({
            scrollTop: $("#namecheck1").offset().top
        }, 2000);

        return false;
      }
      else
      {
        document.getElementById('namecheck1').innerHTML = '';

        
      }


      
    //**-------------------Email Validation-------------------------------**//

      if(email == '')
      {
        document.getElementById('emailcheck1').innerHTML = '** Please Fill The Email Field';
        document.getElementById('emailcheck1').style.color = "red";

        $('html, body').animate({
            scrollTop: $("#emailcheck1").offset().top
        }, 2000);

        return false;
      }
      else
      {
        document.getElementById('emailcheck1').innerHTML = '';
        
      }
      

      if(email.indexOf('@') <= 0)
      {
        document.getElementById('emailcheck1').innerHTML = '** User Cannot Start With This Symbol';
        document.getElementById('emailcheck1').style.color = "red";

        $('html, body').animate({
            scrollTop: $("#emailcheck1").offset().top
        }, 2000);

        return false;
      }
      else
      {
        document.getElementById('emailcheck1').innerHTML = '';

      }


      if((email.charAt(email.length-4) != '.') && (email.charAt(email.length-3) != '.'))
      {
        document.getElementById('emailcheck1').innerHTML = '** Dot Invalid Position';
        document.getElementById('emailcheck1').style.color = "red";

        $('html, body').animate({
            scrollTop: $("#emailcheck1").offset().top
        }, 2000);

        return false;
      }
      else
      {
        document.getElementById('emailcheck1').innerHTML = '';
      }
    


    //**-------------------Comments Validation---------------------**//

      if(comm == '')
      {
        document.getElementById('commentcheck1').innerHTML = '** Please Fill The Comment Area';
        document.getElementById('commentcheck1').style.color = "red";

        $('html, body').animate({
            scrollTop: $("#commentcheck1").offset().top
        }, 2000);

        return false;
      }
      else
      {
        document.getElementById('commentcheck1').innerHTML = '';
      }

      
        $.ajax({
          url : http,
          method : "POST",
          data : {'name' : user, 'email' : email, 'comm' : comm, 'product' : product},
          success : function(data) {
            
            $('#act_success1').css("display","block");
            $('#act_successmsg1').html('** Email Sent Successfully');
            $('html, body').animate({
                  scrollTop: $("#act_success1").offset().top
              });
            // $('html, body').animate({
            //       scrollTop: $("#success1").offset().top
            //   }); 
          },
          error : function(data) {
            $('#act_errors').css("display","block");
            $('#act_errormsgs').html('** Email Not Sent Successfully');
            $('html, body').animate({
              scrollTop: $("#act_errors").offset().top
              });
          }
          
        });



    }


// $(document).on('click', '#T&C', function(){
//   alert('hi');
// });

</script>