<footer>
    	<div class="container">
    		<ul>
    			<li>Copyright © 2018 Heritage Expeditions Africa.</li>
    			<li><?php echo $contact[20]['setting_value'];?></li>
    			<li><a href="tel:<?php echo $contact[14]['setting_value'];?>" style="color: white;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='white'"><?php echo $contact[14]['setting_value'];?></a><br><a href="mailto:<?php echo $contact[3]['setting_value'];?>" style="color: white;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='white'"><?php echo $contact[3]['setting_value'];?> </a></li>
    			<li>
    				<a href="<?php echo $contact[8]['setting_value'];?>" target="_blank"><img src="<?php echo base_url();?>assets/images/facebook.png" alt=""></a>
    				<a href="<?php echo $contact[10]['setting_value'];?>" target="_blank"><img src="<?php echo base_url();?>assets/images/linked-in.png" alt=""></a>
    				<a href="<?php echo $contact[9]['setting_value'];?>" target="_blank"><img src="<?php echo base_url();?>assets/images/twitter.png" alt=""></a>
    			</li>
    		</ul>
    	</div>
    </footer>


 
      <!-- JQUERY LIB -->
     <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>  
  
      <!-- SLIDER JS -->     
      <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
      <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  
      <script src="<?php echo base_url();?>assets/js/main.js"></script>
      <script src="<?php echo base_url();?>assets/js/jquery.popup.js"></script> 
      <script src="<?php echo base_url();?>assets/js/easyResponsiveTabs.js"></script> 
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      
      <script type="text/javascript">
$(function()
{ 
   
    
    $("#read_More").on('click', function (e) {
        e.preventDefault();
    
        $("#full_content").css('overflow','scroll');
        $("#full_content").scroll();
        $('#read_More').css('display','none');
        $('#read_Less').css('display','block');

    });
    $("#read_Less").on('click', function (e) {
        e.preventDefault();
        $("#full_content").animate({ scrollTop: 0}, 'slow');
        $("#full_content").css('overflow','hidden');
        $('#read_More').css('display','block');
        $('#read_Less').css('display','none');

    });

  
});

    
</script>  
<!-- Order Details popup-->

  <div class="orderDetail-container"></div>

<!-- Order Details popup-->

   <div class="popup js__popup js__slide_top" id="popBusket">
    <div class="popup__header">
      CART
      <a href="#" class="p_close js__p_close" title="CART">
          <span></span><span></span>
        </a>
      </div>
      <div class="p_content">
        <div class="alert alert-danger" id="errors_shopping-cart" style="display: none;">
            <p><strong>Warning</strong><span id="errormsg_shopping-cart"></span></p>
        </div>
        <div class="shopping-cart">


        </div>
      </div>
      
    </div>
    <div class="p_body js__p_body js__fadeout"></div>
   </body>
</html>

<script type="text/javascript">
  $('.orderDetails').on('click', function() {
    var orderId = $(this).attr('order-id');


    $.ajax({
      url : "<?php echo base_url();?>profile/details",
      method : "POST",
      data : {'id' : orderId},
      beforeSend: function () {
                        $('.loading').show();
                    },
      success : function(response) {
        $('.orderDetail-container').html(response);
        // $('.loading').fadeOut("slow");
        // alert(data);
          $( "#order-details" ).dialog({
            resizable: true,
            height: "auto",
            width: 600,
            modal: true,
            buttons: {
              "Print Order": function() {
                var newWindow = window.open();
                newWindow.document.write(document.getElementById("order-details").innerHTML);
                newWindow.print();
              }
            }
          });
          $('.loading').fadeOut("slow");
      }
    });

  });




  $('.busket').on('click', function() {
    
    $(".js__popup").removeClass("js__slide_top");
    $(".js__popup").addClass('top');

    var basketUrl = "<?php echo base_url('Cart/busket');?>";
    $.ajax({
      type : 'POST',
      url  : basketUrl,
      
      success:function(data){
        // alert(data);

        $('.shopping-cart').html(data);
        // $("#qty").val('');
      },
      error:function(data){
        alert("Product not into Cart");

        // $('.shopping-cart').html(data);
        // $("#qty").val('');
      }
    });
});



   $('.busket1').on('click', function() {
    
    $(".js__popup").removeClass("js__slide_top");
    $(".js__popup").addClass('top');

    var basketUrl = "<?php echo base_url('Activity/busket');?>";
    $.ajax({
      type : 'POST',
      url  : basketUrl,
      
      success:function(data){
        // alert(data);

        $('.shopping-cart').html(data);
        // $("#qty").val('');
      },
      error:function(data){
        alert("Product not into Cart");

        // $('.shopping-cart').html(data);
        // $("#qty").val('');
      }
    });
});
</script>

<script type="text/javascript">
  
  function myFunction() 
  {
    var stock = $("#stock").val();
    var code = $("#code").val();
    var offer = $("#offer").val();
    var qty = $("#qty").val();
    var prod = $("#prodid").val();
    var cat = $("#catid").val();
    var pName = $("#prodName").val();
    var pic = $("#img").val();
    var popUrl = "<?php echo base_url('Cart');?>";
    var maxqty = $("#purchase").val();
    var url1 = $('#segment').val();
    var date = $('.datepicker').val();

  

  if(date == '')
  {
        $('#btnerror').css("display","block");
        $('#btnerrormsg').html('**Please Choose Package Date');
        $('button #booknow').removeClass("js__popup1");
        $('.shopping-cart').hide();
        $('#btnerror')
        .delay(3000)
        .queue(function (next) { 
          $(this).css('display', 'none'); 
          next(); 
        });
  }
  else
  {
	$('.busket').click();  
	$('.shopping-cart').show();  
    if(maxqty > 0 && stock > 0)
    {
       
        $.ajax({
          type : 'POST',
          url  : popUrl,
          data : { 
                  'stock' : stock, 
                  'code'  : code,
                  'offer' : offer,
                  'qty'   : qty,
                  'cat'   : cat,
                  'prod'  : prod,
                  'pName' : pName,
                  'image' : pic,
                  'max'   : maxqty,
                  'url1'  : url1,
                  'date'  : date
                  
                },
          dataType : 'text',
          success:function(data){
            $('.shopping-cart').html(data);
            
          }
        });
      
      }
      else
      {
        $('#btnerror').css("display","block");
        $('#btnerrormsg').html('**Please Check Product Stock/Maximum Purchase Limit');
        $('.shopping-cart').hide();
        $('#btnerror')
        .delay(3000)
        .queue(function (next) { 
          $(this).css('display', 'none'); 
          next(); 
        });
      }
  }

}



function myActivityFunction() {
  
  
  var id     = $('#act_id').val();
  var qty    = $('#act_qty').val();
  var cat_id = $('#act_cat_id').val();
  var image  = $('#act_img').val();
  var name   = $('#act_name').val();
  var price  = $('#act_price').val();
  var time   = $('#act_time').val();
  var stock  = $("#act_stock").val();
  var maxqty = $("#act_purchase").val();
  var url1   = "<?php echo base_url('Cart');?>";
  var date   = $('.datepicker1').val();
  
  if(date == '')
  {
        $('#btnerror').css("display","block");
        $('#btnerrormsg').html('**Please Choose Activity Date');
        $('button #booknow1').removeClass("js__popup1");
        $('.shopping-cart').hide();
        $('#btnerror')
        .delay(3000)
        .queue(function (next) { 
          $(this).css('display', 'none'); 
          next(); 
        });
  }
  else
  {
  $('.busket').click();  
  $('.shopping-cart').show();
  $(".js__popup").removeClass("js__slide_top");
  $(".js__popup").addClass('top');
    $.ajax({
        url : url1,
        method : "POST",
        data : {
                  'id'     : id, 
                  'qty'    : qty,
                  'cat_id' : cat_id,
                  'image'  : image,
                  'name'   : name,
                  'time'   : time,
                  'price'  : price,
                  'stock'  : stock,
                  'max'    : maxqty,
                  'date'   : date                
                },
        success : function(data) {
          $('.shopping-cart').html(data);
          // alert(data);
        }
    });
  }
  
}




  


</script>



<script type="text/javascript">
  
//=======================Package Plus Button==========================//

  $(document).on('click', '.qtyplus', function() {
    var price = $(this).data('price');
    var id = $(this).attr('id');
    var counter = $("#quantity-"+ id).val();
    var maxqty = $("#maxquantity-"+ id).val();
    var stock = $("#stocky").val();

     if(counter<maxqty && counter<stock)
    {
         counter++;
         
    }
    else
    {
      $('#errors_shopping-cart').css("display","block");
      $('#errormsg_shopping-cart').html('** You Can Not Increment Quantity More Than Maximum Purchase Quantity');
      $('#errors_shopping-cart')
        .delay(2000)
        .queue(function (next) { 
          $(this).css('display', 'none'); 
          next(); 
        });
      
    }   
        var newPrice = price * counter;
        $.ajax({
          url : "<?php echo base_url();?>Cart/update",
          method : "POST",
          data : {'id' : id, 'qty' : counter, 'price' : newPrice},
          success : function (data) {
            $('.shopping-cart').html(data);
          }
        });
       
       
    });




//=====================Package Minus Button==============================//

$(document).on('click', '.qtyminus', function() {
      var price = $(this).data('price');
      var id = $(this).attr("id");
      var counter = $("#quantity-"+ id).val();

       if(counter>1)
            {
                 counter--;
                                 
            }
            else
            {
              $('#errors_shopping-cart').css("display","block");
              $('#errormsg_shopping-cart').html('** You Can Not Decrement Quantity Less Than 1');
              $('#errors_shopping-cart')
                .delay(2000)
                .queue(function (next) { 
                  $(this).css('display', 'none'); 
                  next(); 
                });
            }

            var newPrice = price * counter;
                
                $.ajax({
                  url : "<?php echo base_url();?>Cart/update",
                  method : "POST",
                  data : {'id' : id, 'qty' : counter, 'price' : newPrice},
                  success : function (data) {
                    $('.shopping-cart').html(data);
                  }
                });
      
            });




//=======================Package Remove Button===========================//

  $(document).on('click', '.remove-product', function() {
    var delid = $(this).attr("id");
    
    $.ajax({
      url : "<?php echo base_url();?>Cart/remove",
      method : "POST",
      data : {id : delid},
      success : function (data) {
        $('.shopping-cart').html(data);
      }
    });
   
  });


  


//=======================Package Check Button===========================//

  function check() {
    var sesId   = "<?php echo $this->session->userdata('id');?>";
    var popUrl  = "<?php echo base_url('Cart/login');?>";
    var popUrl1 = "<?php echo base_url('Cart/loginAccess');?>";
    var count   = $('#package_count').val();

    // alert(sesId);


    if(sesId !== '')
    {
      
      window.location.href = popUrl1;
      
    }
    else
    {
      
      window.location.href = popUrl;
      
    }

    
    
}


//=======================Activity Check Button===========================//

function shopping_con() {
  var popUrl  = "<?php echo base_url();?>";
    
  window.location.href = popUrl;
}



function close()
{
   $.ajax({
                url : "<?php echo base_url('Profile/update');?>",
                method : "POST",
                success : function(data)
                {
                  
                    $('.busket').html(data);
                    $('.datepicker').val('');
                    $('.datepicker1').val('');
                }
            });
   
}
</script>