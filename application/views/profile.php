<!-- Header -->

<?php include('include/header.php');?>

<!-- //Header -->

      <!--start-->
    <div class="slider_Wrapper clearfix mb0">
      <div class="col8 details clearfix">     
          <div class="profile_container">
             <div class="profile_detials" id="profileDetails">

               <div class="panel">
                 <div class="panel_heading"><h4> <img src="<?php echo base_url();?>assets/images/profile.svg" width="20" alt=""> PROFILE</h4></div>
                 <div class="panel_body">
                      <p class="mb20">Please update your profile below.</p>
                   
                 </div>


                <div class="alert alert-danger" id="error" style="display: none;">
                  <p><strong>Warning</strong> <span id="errormsg">lorem ipsum doler sit amet</span></p>
                </div>
                <div class="alert alert-success" id="success" style="display: none;">
                  <p><span id="successmsg">lorem ipsum doler sit amet</span></p>
                </div>

               </div>

               <!--Horizontal Tab-->
               <input type="hidden" name="sessionId" value="<?php echo $this->session->userdata('id');?>" id="sessionId">
                <div id="parentHorizontalTab">
                    <ul class="resp-tabs-list hor_1">
                        <li onclick="general()"><img src="<?php echo base_url();?>assets/images/settings-work-tool.svg" width="15" alt=""> General</li>
                        <li onclick="billing()"><img src="<?php echo base_url();?>assets/images/credit-card.svg" width="15" alt=""> Billing Address</li>
                        <li onclick="password()"><img src="<?php echo base_url();?>assets/images/key.svg" width="15" alt=""> Password</li>
                    </ul>
                    <div class="resp-tabs-container hor_1">

<!--//////////////////////////////GENERAL PROFILE//////////////////////////-->
                        <div>                    
                            <form action="">
                               <div class="form_group">
                                  <label for="name">Your Name*</label>
                                  <input type="text" id="name" class="form_control" value="<?php echo $account[0]['name'];?>">
                                </div>
                                 <div class="form_group">
                                   <label for="email">Your Email</label>
                                   <input type="text" id="email" class="form_control" value="<?php echo $account[0]['email'];?>" disabled>
                                </div>
                                
                            </form>
                        </div>


<!--//////////////////////////////BILLING PROFILE//////////////////////////-->
                        <div>                   
                            <form action="">
                               <div class="form_group">
                                  <label for="billingname">Billing Name*</label>
                                  <input type="text" id="billingname1" class="form_control" value="<?php echo $address[0]['nm'];?>">
                                </div>

                                <div class="form_group">
                                  <label for="billingemailaddress">Billing Email Address</label>
                                  <input type="text" id="billingemailaddress1" class="form_control" value="<?php echo $address[0]['em'];?>" disabled>
                                </div> 

                                <div class="form_group">
                                  
                                  <label for="country">Country*</label>
                                  <select name="" id="country_id" class="form_control">
                                  <?php foreach ($country as $key => $val) {  ?>
                                      <option value="<?= $val['id']?>" <?php if($val['id'] == $address[0]['addr1']){echo 'selected';}?>><?php echo $val['cName'];?></option> 
                                  <?php }?>
                                  </select>
                                </div> 

                                <div class="form_group">
                                  <label for="addressline1">Address Line 1*</label>
                                  <input type="text" id="addressline1" class="form_control" value="<?php echo $address[0]['addr2'];?>">
                                </div> 

                                <div class="form_group">
                                  <label for="addressline2">Address Line 2 (Optional)</label>
                                  <input type="text" id="addressline2" class="form_control" value="<?php echo $address[0]['addr3'];?>">
                                </div>  

                                <div class="form_group">
                                  <label for="townarea">Town / Area*</label>
                                  <input type="text" id="townarea" class="form_control" value="<?php echo $address[0]['addr4'];?>">
                                </div> 

                                <div class="form_group">
                                  <label for="countystate">County / State*</label>
                                  <input type="text" id="countystate" class="form_control" value="<?php echo $address[0]['addr5'];?>">
                                </div> 

                                <div class="form_group">
                                  <label for="zipcode">Post / Zip Code*</label>
                                  <input type="text" id="zipcode" class="form_control" value="<?php echo $address[0]['addr6'];?>">
                                </div>       
                            </form>
                        </div>


<!--//////////////////////////////PROFILE PASSWORD//////////////////////////-->
                        
                        <div>                   
                           <form action="">
                               <div class="form_group">
                                  <label for="password_exist">Enter Existing Password*</label>
                                  
                                  <input type="password" id="password_exist" class="form_control" value="">
                                </div>
                                 <div class="form_group">
                                   <label for="password_new">Enter New Password*</label>
                                   <input type="password" id="password_new" class="form_control" value="">
                                </div>  

                                <div class="form_group">
                                   <label for="password_new">Enter Confirm Password*</label>
                                   <input type="password" id="cpassword" class="form_control" value="">
                                </div>                              
                            </form> 
                        </div>
                    </div>
                </div>

                <input type="submit" class="btn_primary mt20" value="Upadate" onclick="submit()" id="sub">

             </div>

<!--//////////////////////////ORDER HISTROY///////////////////////////////-->
        
             <div class="profile_detials" id="Myorder" style="display: none;">
               <div class="panel">
                 <div class="panel_heading"><h4> <img src="<?php echo base_url();?>assets/images/profile.svg" width="20" alt=""> ORDER HISTROY</h4></div>
                 <div class="panel_body">
                   <table id="example">
                    <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Sale Id</th>
                            <th>Coupon Code</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Total Price</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; 
                      foreach ($orderDetails as $value) {
                           
                          ?>
                        <tr>
                          
                            <td align="center"><?php echo $i++;?></td>

                            <td align="center"><?php echo $value['saleID'];?></td>

                            <td align="center"><?php if(!empty($value['couponCode'])){echo $value['couponCode'];}else{echo '-';}?></td>

                            <td align="center"><?php echo $value['purchaseDate'];?></td>

                            <td align="center"><?php echo $value['purchaseTime'];?></td>
                            <?php foreach ($curr as $val1) { ?>
                             
                              <td align="center"><?php echo 'USD$ '.$value['salePrice'].'&nbsp;(&nbsp;'.currency($value['salePrice'], $val1['curr_rate'], $val1['curr_name']).'&nbsp;)';?></td>
                          
                            <?php } ?>

                            <td align="center"><?php if($value['payment_status'] == 0){echo "<p style='color : red;'>Pending</p>";}else{echo "<p style='color : #192d3d;'>Paid</p>";};?></td>
                           
                            <td align="center" ><button class="orderDetails" order-id="<?php echo $value['saleID'];?>">Details</button></td>
                            
                        </tr>
                      <?php }?>
                    </tbody>
                    
                </table>
                 </div>
                </div>
               
             </div>


             <div class="loading" style="display:none;">
                <img src="<?php echo base_url().'assets/images/packageloader.gif'; ?>"/>
            </div> 


             <!-- <div class="profile_detials" id="Myorder_details" style="display: none;">
               
             </div> -->


<!--///////////////////////////////PROFILE SIDEBAR/////////////////////-->
             <div class="profile_menu">
               <div class="panel">
                 <div class="panel_heading"><h4> <img src="<?php echo base_url();?>assets/images/development.svg" width="25" alt=""> ACCOUNT MENU</h4></div>
                 <div class="panel_body">
                   <ul class="profile_link">
                     <li><a href="javascript:void(0)" onclick="profile()" id="profile" style="color: green;">Profile</a></li>
                     <li><a href="javascript:void(0)" onclick="order()"  id="order">Order History</a></li>
                   </ul>

                   <hr>
                   
                   <div class="acount_type">
                    <p> <strong>Account Type: </strong>Personal</p>
                   </div>
                 </div>

               </div>
             </div>
          </div>
      </div>
      <!-- Right Side Bar -->

        <?php include('include/right-side.php');?>

  <!-- //Right Side Bar -->
      
    </div>
    <!--end-->

    <!-- Footer -->

<?php include('include/footer.php');?>

<!-- //Footer//-->
<script type="text/javascript">

///////////////////////////////General Button///////////////////////////////
  function general() {
    
    $('#error').css('display', 'none');
    $('#success').css('display', 'none');
  }

////////////////////////////////Password Button//////////////////////////////
  function password() {
    
    $('#error').css('display', 'none');
    $('#success').css('display', 'none');
  }

/////////////////////////////////Billing Button//////////////////////////////
  function billing() {
    
    $('#error').css('display', 'none');
    $('#success').css('display', 'none');
  }


///////////////////////////////////////////////////////////////////////////////

//////////////////////////////General Submit////////////////////////////////

  function submit() {
       
    var url = window.location.href;
    var parts = url.split("#");
    var last_part = parts[parts.length-1];
    var url1 = window.location.href;
    var parts1 = url1.split("/");
    var last_part1 = parts1[parts1.length-1];
    // alert(last_part);

    if(last_part == 'parentHorizontalTab1' || last_part1 == 'profile')
    {
      var id = $('#sessionId').val();
      var name = $('#name').val();
      var email = $('#email').val();
      
      //**--------------------Username Validation--------------------**//
        if(name == '')
        {
          var link = document.getElementById('error');
          link.style.display = 'block';
          document.getElementById('errormsg').innerHTML = '** Please Fill The Username Field';

          return false;
        }


        //**------------------Email Validation-----------------------**//

        if(email == '')
        {
          var link = document.getElementById('error');
          link.style.display = 'block';
          document.getElementById('errormsg').innerHTML = '** Please Fill The Email Field';

          return false;
        }
        

        if(email.indexOf('@') <= 0)
        {
          var link = document.getElementById('error');
          link.style.display = 'block';
          document.getElementById('errormsg').innerHTML = '** User Cannot Start With This Symbol';

          return false;
        }


        if((email.charAt(email.length-4) != '.') && (email.charAt(email.length-3) != '.'))
        {
          var link = document.getElementById('error');
          link.style.display = 'block';
          document.getElementById('errormsg').innerHTML = '** Dot Invalid Position';

          return false;
        }


        $.ajax({
            url : "<?php echo base_url();?>profile/generalUpdate",
            method : "POST",
            data : { 'id' : id, 'name' : name, 'email' : email},
            success : function(data) {
              $('#success').css('display', 'block');
              $('#successmsg').html('General Profile Update Succesfully');
            }
        });  

    }

    else if(last_part == 'parentHorizontalTab2')
    {
        var id        = $('#sessionId').val();
        var user      = $('#billingname1').val();
        var email     = $('#billingemailaddress1').val();
        var country   = $('#country_id').val();;
        var address   = $('#addressline1').val();
        var add       = $('#addressline2').val();
        var post      = $('#zipcode').val();
        var state     = $('#countystate').val();
        var town      = $('#townarea').val();

        // alert(country);


        //**--------------------Username Validation--------------------**//
          if(user == '')
          {
            var link = document.getElementById('error');
            link.style.display = 'block';
            document.getElementById('errormsg').innerHTML = '** Please Fill The Billing Name Field';

            return false;
          }




          //**------------------Email Validation-----------------------**//

          if(email == '')
          {
            var link = document.getElementById('error');
            link.style.display = 'block';
            document.getElementById('errormsg').innerHTML = '** Please Fill The Billing Email Field';

            return false;
          }
          

          if(email.indexOf('@') <= 0)
          {
            var link = document.getElementById('error');
            link.style.display = 'block';
            document.getElementById('errormsg').innerHTML = '** User Cannot Start With This Symbol';

            return false;
          }


          if((email.charAt(email.length-4) != '.') && (email.charAt(email.length-3) != '.'))
          {
            var link = document.getElementById('error');
            link.style.display = 'block';
            document.getElementById('errormsg').innerHTML = '** Dot Invalid Position';

            return false;
          }
          
          
          


          //**--------------------Address Validation--------------------**//
          if(address == '')
          {
            var link = document.getElementById('error');
            link.style.display = 'block';
            document.getElementById('errormsg').innerHTML = '** Please Fill The Address1 Field';

            return false;
          }


          //**--------------------Town Validation--------------------**//
          if(town == '')
          {
            var link = document.getElementById('error');
            link.style.display = 'block';
            document.getElementById('errormsg').innerHTML = '** Please Fill The Town Field';

            return false;
          }


          //**--------------------State Validation--------------------**//
          if(state == '')
          {
            var link = document.getElementById('error');
            link.style.display = 'block';
            document.getElementById('errormsg').innerHTML = '** Please Fill The State Field';

            return false;
          }


          //**--------------------Zipcode Validation--------------------**//
          if(post == '')
          {
            var link = document.getElementById('error');
            link.style.display = 'block';
            document.getElementById('errormsg').innerHTML = '** Please Fill The Zipcode Field';

            return false;
          }

          if(isNaN(post))
          {
            var link = document.getElementById('error');
            link.style.display = 'block';
            document.getElementById('errormsg').innerHTML = '** Only Digits Are Allowed In Pincode';

            return false;
          }


          $.ajax({
            url : "<?php echo base_url();?>profile/billingUpdate",
            method : "POST",
            data : { 

                    'id'      : id, 
                    'user'    : user, 
                    'email'   : email,
                    'country' : country,
                    'address' : address,
                    'add'     : add,
                    'post'    : post,
                    'state'   : state,
                    'town'    : town
                   },
            success : function(data) {
              $('#success').css('display', 'block');
              $('#successmsg').html('Billing Profile Update Succesfully');
            }
        }); 



    }


    else if(last_part == 'parentHorizontalTab3')
    {
      var id        = $('#sessionId').val();
      var oldPass   = $('#password_exist').val();
      var newPass   = $('#password_new').val();
      var conPass	= $('#cpassword').val();
      
      

      if(oldPass == '')
      {
        var link = document.getElementById('error');
            link.style.display = 'block';
            document.getElementById('errormsg').innerHTML = '** Please Fill Existing Password';

            return false;
      }

      

      if(newPass == '')
      {
        var link = document.getElementById('error');
            link.style.display = 'block';
            document.getElementById('errormsg').innerHTML = '** Please Fill New Password';

            return false;
      }


      if(newPass != conPass)
      {
        var link = document.getElementById('error');
            link.style.display = 'block';
            document.getElementById('errormsg').innerHTML = '** Confirm Password Not Matched';

            return false;
      }


      $.ajax({
            url : "<?php echo base_url();?>profile/passwordUpdate",
            method : "POST",
            data : { 

                    'id'      : id, 
                    'oldPass' : oldPass,
                    'newPass' : newPass
                   },
            success : function(data) {
            
              if(data == 1)
              {
                $('#success').css('display', 'none');
                $('#error').css('display', 'block');
                $('#errormsg').html('Existing Password Not Matched');
              }
              else
              {
                $('#error').css('display', 'none');
                $('#success').css('display', 'block');
                $('#successmsg').html('Password Update Succesfully');
              }
            },
            error : function(data)
            {
              alert(data);
            }
        }); 
    }
  }


  function profile() {
    $('#profileDetails').css('display', 'block');
    $('#profile').css('color', 'green');
    $('#order').css('color', 'black');
    $('#Myorder').css('display', 'none');
  }



  function order() {
    
    $(document).ready( function () {
      
      $('#profileDetails').css('display', 'none');
      $('#order').css('color', 'green');
      $('#profile').css('color', 'black');
      $('#Myorder').css('display', 'block');
      $('#example').DataTable();
    } );
    
    
  }


  // function details(id) {

  //   $.ajax({
  //     url : "<?php echo base_url();?>profile/details",
  //     method : "POST",
  //     data : {'id' : id},
  //     success : function(data) {
  //       // alert(data);
  //       $('#Myorder').css('display', 'none');
  //       $('#Myorder_details').html(data);
  //       $('#Myorder_details').css('display', 'block');
  //       $('#example1').DataTable();
  //     }
  //   });
  // }




</script>

