<?php include('include/header.php');?>
  
      <!--start-->
    <div class="slider_Wrapper clearfix mb0">
      
        <!-- <?php //echo $this->utility->showMsg();?> -->
        
      <?php foreach ($holiday as $key => $value) {
        if($value['cms_title'] == 'Holiday Packages')
        {
        ?>
      <div class="col8 checkout"> 
       
        
          <input type="hidden" name="total" id="total" value="<?php echo $cart;?>">
          <input type="hidden" name="accId" id="accId" value="<?php echo $this->session->userdata('id');?>">
        

      <!----------------------------Start Billing Address-------------------->        
       <div class="box_wrapper" id="billing" style="display: block;">
          <div class="box_heading">
            <h4><img src="<?php echo base_url('assets/images/credit-cards-payment.svg');?>" alt="" width="30"> BILLING ADDRESS</h4>
          </div>
          <div class="box_body clearfix">
            <p class="mb20">Please complete the following to continue with checkout, thank you.</p>
              <div class="alert alert-danger" id="error" style="display: none;">
                <p><strong>Warning</strong> <span id="errormsg">lorem ipsum doler sit amet</span></p>
              </div>
             <div class="form_group">
                <label for="billingname">Billing Name*</label>
                <input type="hidden" name="cartcatId" id="cartcatId" value="<?php echo $this->session->userdata('ID');?>">
                <input type="text" id="billingname" class="form_control" name="billingname" value="<?php if(!empty($this->session->userdata('id'))){echo $this->session->userdata('name');}?>">
              </div>

              <div class="form_group">
                <label for="billingemailaddress">Billing Email Address*</label>
                <input type="text" id="billingemailaddress" class="form_control" name="billingemailaddress" value="<?php if(!empty($this->session->userdata('id'))){echo $this->session->userdata('email');}?>">
              </div> 

              <div class="form_group">
                <label for="billingcountry">Country*</label>
                
                <select name="billingcountry" id="billingcountry" class="form_control">
                  <?php foreach ($country as $key => $val) {?>
                   <option value="<?php if(!empty($this->session->userdata('id'))){echo $this->session->userdata('add1');}else{echo $val['id'];}?>"><?php echo $val['cName'];?></option>
                   <?php }?>
                </select>
              
              </div> 

              <div class="form_group">
                <label for="billingaddressline1">Address Line 1*</label>
                <input type="text" id="billingaddressline1" class="form_control" name="billingaddressline1" value="<?php if(!empty($this->session->userdata('id'))){echo $this->session->userdata('add2');}?>">
              </div> 

              <div class="form_group">
                <label for="billingaddressline2">Address Line 2(Optional)</label>
                <input type="text" id="billingaddressline2" class="form_control" name="billingaddressline2" value="<?php if(!empty($this->session->userdata('id'))){echo $this->session->userdata('add3');}?>">
              </div>  

              <div class="form_group">
                <label for="billingtownarea">Town / Area*</label>
                <input type="text" id="billingtownarea" class="form_control" name="billingtownarea" value="<?php if(!empty($this->session->userdata('id'))){echo $this->session->userdata('add4');}?>">
              </div> 

              <div class="form_group">
                <label for="billingcountystate">County / State*</label>
                <input type="text" id="billingcountystate" class="form_control" name="billingcountystate" value="<?php if(!empty($this->session->userdata('id'))){echo $this->session->userdata('add5');}?>">
              </div> 

              <div class="form_group">
                <label for="billingzipcode">Post / Zip Code*</label>
                <input type="text" id="billingzipcode" class="form_control" name="billingzipcode" value="<?php if(!empty($this->session->userdata('id'))){echo $this->session->userdata('add6');}?>">
              </div>            
          </div>

          <div class="box_footer">
             <button type="button" class="btn_primary" onclick="billingcon1()">Continue <img src="<?php echo base_url('assets/images/right-arrow-sm.svg');?>" width="15" alt=""></button>
          </div>
         
       </div>

      <!----------------------------End Billing Address-------------------->

      


      <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

      <!----------------------------Start Coupon-------------------->

       <div class="box_wrapper" id="coupon" style="display : none;">
          <div class="box_heading">
            <h4><img src="<?php //echo base_url('assets/images/credit-cards-payment.svg');?>" alt="" width="30"> COUPON CODE </h4>
          </div>
          <div class="box_body clearfix">
            
            <div class="alert alert-danger" id="error3" style="display: none;">
                <p><strong>Warning</strong><span id="errormsg3">lorem ipsum doler sit amet</span></p>
              </div>

               <div class="alert alert-success" id="success" style="display: none;">
                <p><span id="successmsg">lorem ipsum doler sit amet</span></p>
              </div>

              
             

             <div class="form_group" id="coupondiv">
                <label for="coupncode"><strong>If you have a coupon code, please enter it below</strong></label>
                <input type="text" id="couponcode" class="form_control couponcode" name="couponcode">
                <button type="button" class="btn_primary" id="apply" onclick="apply()" style="text-align: center;">Apply</button>
                <button type="button" class="btn_primary" id="remove" onclick="removeApply()" style="text-align: center; display: none;">Remove</button>
                <span style="color: red; font-style: italic;">If entered, clear and continue to remove</span>
              </div>         
          </div>

          <div id="hiddenId" style="display: none;"></div>
          

          <div class="box_footer">
            <button type="button" class="btn_secondary" onclick="couponback()"><img src="<?php echo base_url('assets/images/right-arrow-sm.svg');?>" width="15" alt="" class="left-arr"> Back</button>
             <button type="button" class="btn_primary" id="coupondata" onclick="couponcon()">Continue <img src="<?php echo base_url('assets/images/right-arrow-sm.svg');?>" width="15" alt=""></button>
          </div>
         
       </div>

      <!----------------------------End Coupon-------------------->



      <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

      <!----------------------------Start Account-------------------->

       <div class="box_wrapper" id="account1" style="display : none;">
          <div class="box_heading">
            
            <h4><img src="<?php echo base_url('assets/images/credit-cards-payment.svg');?>" alt="" width="30"> ACCOUNT </h4>
          </div>
          <div class="box_body clearfix">

            <div class="alert alert-danger" id="erroracc" style="display: none;">
                <p><strong>Warning</strong><span id="errormsgacc">lorem ipsum doler sit amet</span></p>
            </div>
            <div class="alert alert-success" id="successacc" style="display: none;">
                <p><span id="successmsgacc">lorem ipsum doler sit amet</span></p>
              </div>
           
              <div class="form_group" id="cartaccount">
                
                <select name="registeroption" id="registeroption" class="form_control registeroption">
                   <option value="0">No, I don't want to have an account</option>
                   <option value="1">Yes, Please create an account for me</option>
                   
                </select>
              </div> 
 
          </div>

          <div class="box_footer">
            <button type="button" class="btn_secondary" onclick="accountback()"><img src="<?php echo base_url('assets/images/right-arrow-sm.svg');?>" width="15" alt="" class="left-arr"> Back</button>
             <button type="button" class="btn_primary" id="shippingcostdata" onclick="accountcon()">Continue <img src="<?php echo base_url('assets/images/right-arrow-sm.svg');?>" width="15" alt=""></button>
          </div>
         
       </div>

      <!----------------------------End Account-------------------->

      <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

      <!----------------------------Start Note-------------------->

       <div class="box_wrapper" id="note" style="display : none;">
          <div class="box_heading">
            <h4><img src="<?php echo base_url('assets/images/credit-cards-payment.svg');?>" alt="" width="30"> NOTES </h4>
          </div>
          <div class="box_body clearfix">
              <label><strong>If you have any special requests for this order, enter them below</strong></label>  
                <textarea name="notes" id="notes" class="form_control" rows="5" cols="20"></textarea> 
          </div>

          <div class="box_footer">
            <button type="button" class="btn_secondary" onclick="noteback()"><img src="<?php echo base_url('assets/images/right-arrow-sm.svg');?>" width="15" alt="" class="left-arr"> Back</button>
             <button type="button" class="btn_primary" id="shippingcostdata" onclick="notecon()">Continue <img src="<?php echo base_url('assets/images/right-arrow-sm.svg');?>" width="15" alt=""></button>
          </div>
         
       </div>

      <!----------------------------End Note-------------------->


      <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

      <!----------------------Start Pay & Finish----------------->

       <div class="box_wrapper" id="payfinish" style="display : none;">
          <div class="box_heading">
            <h4><img src="<?php echo base_url('assets/images/credit-cards-payment.svg');?>" alt="" width="30"> PAY & FINISH  </h4>
          </div>

          

          <div class="box_body clearfix" id="payment">
                             
                
                  
          </div>

          <div class="form_group" style="text-align: center;">
                <input type="checkbox" name="pay" id="pay" value="payment"> Please confirm you accept our <a href="#">Terms & Conditions</a>
            </div>

          <div class="box_footer">
            <button type="button" class="btn_secondary" onclick="payback()"><img src="<?php echo base_url('assets/images/right-arrow-sm.svg');?>" width="15" alt="" class="left-arr"> Back</button>
             <button type="button" class="btn_primary" id="shippingcostdata" onclick="payorder()" style="text-align: center;">Complete Order<img src="<?php echo base_url('assets/images/right-arrow-sm.svg');?>" width="15" alt=""></button>
          </div>

          <div class="loading" style="display:none;">
                <img src="<?php echo base_url().'assets/images/packageloader.gif'; ?>"/>
            </div>
         
       </div>

      <!------------------------End Pay & Finish----------------->


    <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

      <!----------------------Start Thank You----------------->

       <div class="box_wrapper" id="Thank" style="display : none;">

          <div class="box_heading">
            <h4><img src="<?php echo base_url('assets/images/credit-cards-payment.svg');?>" alt="" width="30"> THANK YOU  </h4>
          </div>


          <div class="box_body clearfix">

              <div class="alert alert-success" id="successfinal" style="display: none;">
                <p><span id="successmsgfinal">lorem ipsum doler sit amet</span></p>
              </div>

              <div class="alert alert-danger" id="errorthank" style="display: none;">
                <p><strong>Warning</strong> <span id="errormsgthank">lorem ipsum doler sit amet</span></p>
              </div>
              
                <div class="form_group">
                
                    <h3 style="text-align: center;" class="success-text"> Thank You, Your Order Placed Successfully</h3>
                
                </div>

                <div class="text-center">
                  <button type="button" class="btn_primary" id="finish" onclick="finish()">Home</button>
                </div>
          </div>
 
       </div>

      <!------------------------End Thank You----------------->



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
    
   

<!--=====================================================================-->
<!--=====================================================================-->
<!--========================JavaScript And jQuery========================-->
<!--=====================================================================-->
<!--=====================================================================-->


<script type="text/javascript">


  ///////////////////////////////Billing Start///////////////////////////////
  function billingcon1() {
      var user      = document.getElementById('billingname').value;
      var country   = document.getElementById('billingcountry').value;
      var address   = document.getElementById('billingaddressline1').value;
      var add       = document.getElementById('billingaddressline2').value;
      var post      = document.getElementById('billingzipcode').value;
      var email     = document.getElementById('billingemailaddress').value;
      var state     = document.getElementById('billingcountystate').value;
      var town      = document.getElementById('billingtownarea').value;
      var check     = document.getElementById('billingdetails');
      var accId     = $('#accId').val();
      // alert(accId);



      
      //**--------------------Username Validation--------------------**//
      if(user == '')
      {
        var link = document.getElementById('error');
        link.style.display = 'block';
        document.getElementById('errormsg').innerHTML = '** Please Fill The Billing Name Field';

        return false;
      }
      
      
      


      //**--------------------Address Validation--------------------**//
      if(address == '')
      {
        var link = document.getElementById('error');
        link.style.display = 'block';
        document.getElementById('errormsg').innerHTML = '** Please Fill The Address Line1 Field';

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

           
      $('#billing').fadeOut('slow');
      $('#coupon').fadeIn(1500);
            

      
  }
  ////////////////////////////////Billing End////////////////////////////////


//****************************************************************************//
  
  ////////////////////////////////Coupon Start///////////////////////////////
  ////////////////////////////////Coupon Back////////////////////////////////

  function couponback() {

    $('#coupon').fadeOut('slow');
    $('#billing').fadeIn(1000);
  
  }

  //////////////////////////////Coupon Continue/////////////////////////////

  function couponcon() {
    
    var accId = $('#accId').val();
      if(accId != '')
      {
        $('#coupon').fadeOut('slow');
        $('#note').fadeIn(1000);
      }
      else
      {
        $('#coupon').fadeOut('slow');
        $('#account1').fadeIn(1000);
      }
    
  }


  //////////////////////////////Coupon Apply////////////////////////////////

  function apply() {
    var accId = $('#accId').val();
    var code  = $('#couponcode').val();
    var catId = $('#cartcatId').val();
    // console.log(catId);
    
      if(code != '')
      {
      $.ajax({
          url : "<?php echo base_url('Cart/codeCheck');?>",
          method : "POST",
          data : { 'code' : code, 'cID' : catId },
          success : function(data){
            // alert(data);
            if(data == 1)
            {
              $('#success').css("display","none");
              $('#error3').css("display","block");
              $('#errormsg3').html('** This code is Not Available');
            }
            else if(data == 2)
            {
              $('#success').css("display","none");
              $('#error3').css("display","block");
              $('#errormsg3').html('** This code is Not Active/Code is Expired, Please Contact Admin');
            }
            else if(data == 3)
            {
              $('#success').css("display","none");
              $('#error3').css("display","block");
              $('#errormsg3').html('** In this category the code is not applyed');
            }
            else if(data == 4)
            {
              $('#success').css("display","none");
              $('#error3').css("display","block");
              $('#errormsg3').html('** Please Register First Then Use This Coupon Code');
            }
            else if(data == 5)
            {
              $('#success').css("display","none");
              $('#error3').css("display","block");
              $('#errormsg3').html('** Your Coupon Code Applying Limit Is Over');
            }
            else
            {
              $('#error3').css("display","none");
              $('#success').css("display","block");
              $('#successmsg').html('Code Applyed Successfully');
              $('#apply').css("display","none");
              $('#remove').css("display","inline-block");
              $('#hiddenId').html(data);
            }
          }
      });
    }
    else
    {
      $('#success').css("display","none");
      $('#error3').css("display","block");
      $('#errormsg3').html('** Please Enter A Field With Valid Code');
    }
  }


  //////////////////////////////Coupon Remove////////////////////////////////

  function removeApply() {
   
    var accId = $('#accId').val();
    var code  = $('#couponcode').val();
    var catId = $('#cartcatId').val();
    

    $.ajax({
          url : "<?php echo base_url('Cart/codeRemove');?>",
          method : "POST",
          data : { 'code' : code, 'cID' : catId, 'accId' : accId },
          success : function(data){
            $('.couponcode').val('');
            $('#success').css("display","block");
            $('#successmsg').html('Coupon Code Remove Successfully');
            $('#remove').css("display","none");
            $('#apply').css("display","inline-block");
            $('#hiddenId').html(data);
          }
        });
    
  }



  /////////////////////////////////Coupon End////////////////////////////////





  

//****************************************************************************//


  ////////////////////////////////Account Start///////////////////////////////

  ////////////////////////////////Account Back///////////////////////////////

  function accountback() {
    
       $('#account1').fadeOut('slow');
       $('#coupon').fadeIn(1000);
  }

////////////////////////////Account Continue/////////////////////////////

  function accountcon() {
    
       var account = $('#registeroption').val();
       var email   = $('#billingemailaddress').val();
       if(account == 1)
       {
          $.ajax({
              url    : "<?php echo base_url('Cart/emailCheck');?>",
              method : "POST",
              data   : {'email' : email},
              success: function(data) {
               if(data == 1)
               {
                    $('#erroracc').css("display","block");
                    $('#errormsgacc').html('** Email Id Already Exist');
               }
               else
               {
                  $('#account1').fadeOut('slow');
                  $('#note').fadeIn(1000);
               }
               
              } 
          });
       }
       else
       {
          $('#account1').fadeOut('slow');
          $('#note').fadeIn(1000);
       }
       
  }


  ////////////////////////////////Select Registration////////////////////////

  $('#registeroption').on('change', function() {
   var value = this.value;
    if(value == 1)
    {
      $('#successacc').css("display","block");
      $('#successmsgacc').html('** Plaese Check Registration Details In Your Email After Order Placed');
    }
    else
    {
      $('#successacc').css("display","none");
    }
  });

  ////////////////////////////////Account End////////////////////////////////





//****************************************************************************//




//////////////////////////////////Notes Start////////////////////////////////

//////////////////////////////////Notes Back/////////////////////////////////  

function noteback() {
    var accId = $('#accId').val();
      if(accId != '')
      {
        $('#note').fadeOut('slow');
        $('#coupon').fadeIn(1000);
      }
      else
      {
        $('#note').fadeOut('slow');
        $('#account1').fadeIn(1000);
      }
  }


/////////////////////////////////Notes Continue/////////////////////////////

  function notecon() {
    var subTotal = $('#carttotal').val();
    // var discount = $('#cartdiscount').val();
    // var discode  = $('#cartdiscountcode').val();
    var totalPay = $('#amountpay').val();

    // console.log(discode);
    
    if(discode != '')
    {
      var discode  = $('#cartdiscountcode').val();
      var discount = $('#cartdiscount').val();

       $.ajax({
        url : "<?php echo base_url('Cart/finalPayment');?>",
        method : "POST",
        data : { 'subTotal' : subTotal, 'discount' : discount, 'totalPay' : totalPay, 'discode' : discode},
        success : function(data) {
          // alert(data);
          $('#note').fadeOut('slow');
          $('#payfinish').fadeIn(1000);
          $('#payment').html(data);
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo base_url('Cart/finalPayment1');?>",
        method : "POST",
        data : { 'subTotal' : subTotal,'totalPay' : totalPay},
        success : function(data) {
          // alert(data);
          $('#note').fadeOut('slow');
          $('#payfinish').fadeIn(1000);
          $('#payment').html(data);
        }
      });
    }

      // $('#note').fadeOut('slow');
      // $('#payfinish').fadeIn(1000);
  }


 //////////////////////////////////Notes End////////////////////////////////





//****************************************************************************//




////////////////////////////////Payment Start////////////////////////////////
//////////////////////////////////Pay Back///////////////////////////////////  

function payback() {
    
      $('#payfinish').fadeOut('slow');
      $('#note').fadeIn(1000);
  }


/////////////////////////////////Notes Continue/////////////////////////////

  function payorder() 
  {
       
        var checkbox    = document.getElementById('pay');
        var b_user      = $('#billingname').val();
        var b_country   = $('#billingcountry').val();
        var b_address   = $('#billingaddressline1').val();
        var b_add       = $('#billingaddressline2').val();
        var b_post      = $('#billingzipcode').val();
        var b_email     = $('#billingemailaddress').val();
        var b_state     = $('#billingcountystate').val();
        var b_town      = $('#billingtownarea').val();

        var account     = $('#registeroption').val();

        var note        = $('#notes').val();

        var prodId      = $('#proid').val();
        var catId       = $('#catid1').val();
        var quantity    = $('#qty1').val();
        var stock       = $('#stock').val();
        var subPrice    = $('#subprice').val();
        var discount    = $('#dis').text();
        var discode     = $('#couponcode').val();
        var total       = $('.ATP').text();
        var indPrice    = $('#indprice').val();
        var method      = $('.paymentoption').val();
        var accId       = $('#accId').val();
        var details     = $('#details').val();
        var date        = $('#AdateP').val();
        var insertUrl   = "<?php echo base_url('Cart/insert');?>";
        var updateUrl   = "<?php echo base_url('Cart/loginInsert');?>";

        // alert(date);

    if(checkbox.checked === true)
    {

      if(accId != '')
      {
          $.ajax({

            url     : updateUrl,
            method  : 'POST',
            data    : {
                      'id'        : accId,
                      'b_name'    : b_user,
                      'b_email'   : b_email,
                      'b_ccode'   : b_country,
                      'b_address' : b_address,
                      'b_add'     : b_add,
                      'b_town'    : b_town,
                      'b_state'   : b_state,
                      'b_post'    : b_post,
                      'account'   : account,
                      'note'      : note,
                      'prodId'    : prodId,
                      'catId'     : catId,
                      'quantity'  : quantity,
                      'stock'     : stock,
                      'subPrice'  : subPrice,
                      'details'   : details,
                      'total'     : total,
                      'method'    : method,
                      'price'     : indPrice,
                      'discount'  : discount,
                      'discode'   : discode,
                      'AdateP'    : date


                    },
                    beforeSend: function () {
                        $('.loading').show();
                    },
                    success : function(data)
                    {
                       // alert(data);
                       var str = data.split('|');
                       if(str[0]==0)
                       {

                          $('#payfinish').fadeOut('slow');
                          $('#Thank').fadeIn(1000);
                          $('#successfinal').css("display","block");
                          $('#successmsgfinal').html('** Order Placed Successfully, Please Check Your Email');
                          $('.loading').fadeOut("slow");
                          
                       }
                       else if(str[0]==1)
                       {
                          $('#payfinish').fadeOut('slow');
                          $('#Thank').fadeIn(1000);
                          $('#successfinal').css("display","block");
                          $('#successmsgfinal').html('** '+str[1]);
                          $('.loading').fadeOut("slow");
                       }
                       else
                       {
                          window.location.href=str[1];
                          $('.loading').fadeOut("slow");
                       }
                    },
                    error:function(data)
                    {
                      // alert(data);
                      $('#errorpay').css("display","block");
                      $('#errormsgpay').html('** Something Is Wrong');
                      $('.loading').fadeOut("slow");
                    }


              });
      } 
      else 
      {       
          $.ajax({

            url     : insertUrl,
            method  : 'POST',
            data    : {
                      'b_name'    : b_user,
                      'b_email'   : b_email,
                      'b_ccode'   : b_country,
                      'b_address' : b_address,
                      'b_add'     : b_add,
                      'b_town'    : b_town,
                      'b_state'   : b_state,
                      'b_post'    : b_post,
                      'account'   : account,
                      'note'      : note,
                      'prodId'    : prodId,
                      'catId'     : catId,
                      'quantity'  : quantity,
                      'stock'     : stock,
                      'subPrice'  : subPrice,
                      'details'   : details,
                      'total'     : total,
                      'method'    : method,
                      'price'     : indPrice,
                      'AdateP'    : date


                    },
                    beforeSend: function () {
                        $('.loading').show();
                    },
                    success : function(data)
                    {
                      var str = data.split('|');
                       if(str[0]==0)
                       {
                          $('#payfinish').fadeOut('slow');
                          $('#Thank').fadeIn(1000);
                          $('#successfinal').css("display","block");
                          if(account == 1)
                          {
                            $('#successmsgfinal').html('** Registration And Order Placed Successfully, Please Check Your Email');
                            $('.loading').fadeOut("slow");
                          }
                          else
                          {
                            $('#successmsgfinal').html('** Order Placed Successfully, Please Check Your Email');
                            $('.loading').fadeOut("slow");
                          }
                       }
                       else if(str[0]==1)
                       {
                          $('#payfinish').fadeOut('slow');
                          $('#Thank').fadeIn(1000);
                          $('#successfinal').css("display","block");
                          $('#successmsgfinal').html('** '+str[1]);
                          $('.loading').fadeOut("slow");
                       }
                       else
                       {
                          window.location.href=str[1];
                          $('.loading').fadeOut("slow");
                       }
                      // alert(data);
                    },
                    error:function(data)
                    {
                      $('#errorpay').css("display","block");
                      $('#errormsgpay').html('** Something Is Wrong');
                      $('.loading').fadeOut("slow");
                    }


              });
      }
    }
    else
    {
        $('#errorpay').css("display","block");
        $('#errormsgpay').html('** Please Select Terms & Conditions');

    }
     
  }


function finish() {
  window.location.href= "<?php echo base_url();?>";
}

</script>