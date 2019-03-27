<?php
//print_r($holiday_transactions);exit; 
$order_status = array('1'=>'Confirm','2'=>'Cancel');
?>
<section class="content-header">
    <h1>
      Holiday Package Booking
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>

         <li><a href="<?php echo base_url() . 'admin/holiday_store/index/' .$store_id; ?>">RTG Holiday</a></li>
            
        <li class="active"> Holiday Package Booking </li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <?php
        echo $this->utility->showMsg();
        //echo CI_VERSION;
        //echo '<pre>';print_r($gift_booking);
        ?>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Holiday Package Booking</h3>
                   
                </div>

                <div>       </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>User Contact</th>
                                <th>Booking ID</th>
                                <th>Total Price</th>
                                <th>Payment Status</th>
                                <th>Details</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            if(!empty($holiday_transactions)){
                                foreach($holiday_transactions as $keys => $values){
                            ?>
                            <tr>
                                <td><?php echo $keys+1;?></td>

                                <td><?php echo $values['user_name'];?></td>

                                <td><?php echo $values['user_contact'];?></td>

                                <td><?php echo $values['booking_id'];?></td>

                                <td><?php echo $values['transaction_amount']; ?></td>

                                <td id="<?php echo $values['booking_id'] ?>">
                                    <?php
                                    if (!empty($values['transaction_id']))
                                    {
                                         echo 'Paid';
                                    }
                                   
                                   else {
                                    ?>
                                        <a href="javascript:void(0)"  class='paynow' order_id="<?php echo $values['holiday_transaction_id'] ?>"    booking_id="<?php echo $values['booking_id']; ?>" amount="<?php echo $values['transaction_amount']; ?>"  user_id="<?php echo $values['user_id']; ?>"   >Pay now</a>
                                    <?php }
                                    ?>
                                </td>

                                <td>
                                    <a href="javascript:void(0)" onclick="viewDetails(<?php echo $values['holiday_transaction_id'];?>,<?php echo $values['Is_package'];?>,<?php echo $values['Is_activity'];?>)">Details</a>
                                </td>

                                <td>
                                    <?php if($values['reservation_status'] == 0){
                                    ?>
                                    <a href="javascript:void(0);" class='update_status'  present_status="<?php echo $values['reservation_status']; ?>" booking_id="<?php echo $values['holiday_transaction_id']; ?>" user_id="<?php echo $values['user_id']; ?>">Confirm</a>        
                                    <?php
                                    }else if($values['reservation_status'] == 1) { ?>

                                         <a href="javascript:void(0);" class='update_status'  present_status="<?php echo $values['reservation_status']; ?>" booking_id="<?php echo $values['holiday_transaction_id']; ?>" user_id="<?php echo $values['user_id']; ?>">Confirmed</a> 
                                         
                                    <?php } else {

                                        echo "Canceled";
                                    }
                                    ?>
                                </td>
                                
                            </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>

                        <tfoot>

                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="open_modal" style="display:none;">Open Modal</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Details</h4>
                </div>
                <div class="modal-body">
                <!-- <p>Some text in the modal.</p> -->
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Package/Activity Name</th>
                                <th>Travel Date</th>
                                <th>No of Peaple</th>
                            </tr>
                        </thead>
                        <tbody id="display_sec">
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="payment"  role="dialog" class="modal draggable ">   <!--class="modal fade"-->
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Payment Details</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label class="col-sm-4 control-label">Order Id</label>
                    <div class="col-sm-8">
                        <input type="readonly"  readonly  required class="form-control required" id="order_id" name="order_id"   value="" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Amount</label>
                    <div class="col-sm-8">
                        <input type="text"   required class="form-control required" id="amount" name="amount"  value="" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Transaction Id</label>
                    <div class="col-sm-8">
                        <input type="text"  required class="form-control required" id="tran_id" name="tran_id"   value="" >
                    </div>
                </div>

                <input type="hidden" id="booking_id" name="booking_id" value="">
                <!--<input type="hidden" id="eating_id" name="eating_id" value="">-->
                <input type="hidden" id="user_id" name="user_id" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="do_payment" >Make Payment</button>
            </div>
            <!--</form>-->
        </div>
    </div>
</div>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#confirmModal" id="confirm_modal" style="display:none;">Open Modal</button>

    <!-- Modal -->
    <div id="change_delivery_status"  role="dialog" class="modal draggable">   <!--class="modal fade"-->
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Status</h4>
                </div>
                <form name="confirm-form" action="" method="post">
                    <div class="modal-body">
                      <!-- <p>Some text in the modal.</p> -->
                        <table class="table table-bordered ">
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-sm-4">Select status:</div>
                                    <div class="col-sm-8">
                                        <select name="order_status" id="order_status" class="form-control required">
                                            <option value=" ">Select status</option>
                                            <?php
                                             foreach($order_status as $stat=>$name){
                                            ?>
                                            <option value="<?php echo $stat;?>"  <?php  //echo $values['gift_delivery_status'] ?>><?php echo $name;?></option>
                                                <?php 
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-4">Put some comments(Optional)</div>
                                    <div class="col-sm-8">
                                        <textarea id="confirm_text" class='form-control' name="confirm_text" placeholder="If you want's to send any note " > </textarea> 
                                    </div>
                                </div>
                                <input type="hidden" id="booking_order_id">
                              
                                <!--<input type="hidden" id="present_status">-->
                                
                            </div>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <img id="loading" src="<?php echo base_url();?>assets/loader.gif" style="display:none;"/> <!-- Loading Image -->
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal"  id="con_close">Close</button>
                        <button type="button" class="btn btn-primary" id="update_status_submit">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
</div>


<form id="another_form" action="" method="POST">
    <input type="hidden" name="edit_id" id="edit_id" value="">
    <input type="hidden" name="status" id="status" value="">
    <input type="hidden" name="p_status" id="p_status" value="">
     <input type="hidden" name="e_id" id="e_id" value="">
     <input type="hidden" name="table" id="table" value="">
    <input type="hidden" name="uid" id="uid" value="">
</form>
<!-- Modal For Success-->

<script type="text/javascript">
    var base_url = '<?php echo base_url();?>';
    function viewDetails(transaction_id,is_package,is_activity){
        $.post(base_url+'admin/holiday_bookings/viewDetails',{transaction_id:transaction_id,is_package:is_package,is_activity:is_activity},function(response){
            response = JSON.parse(response);
            var htmlval = '';
            if(response.length >0){
                $.each(response,function(i,val){

                    htmlval += '<tr>';
                    htmlval += '<td>'+val.name+'</td>';
                    htmlval += '<td>'+val.travel_date+'</td>';
                    htmlval += '<td>'+val.no_of_person+'</td>';
                    htmlval += '</tr>';
                });
            }else{
                htmlval += 'No record found';
            }
            console.log(htmlval);
            $('#display_sec').html(htmlval);
            $('#open_modal').click();
        })
    }
</script>

<script>
    $(function () {
        $("#example1").DataTable({"aaSorting": []});
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });


    });

    $(document).ready(function () {

        $('body').on('click', '.update_status', function () {
            //$("#loading").hide();

          

            $('#change_delivery_status').modal('show');
            $('#booking_order_id').val($(this).attr('booking_id'));
            //$('#eating_id').val($(this).attr('eating_id'));

            $('#order_status').val($(this).attr('present_status'));
            $("#user_id").val($(this).attr('user_id'));
        });

       

        $('#update_status_submit').click(function(){
            $('#msg').html('');
            $("#loading").show();
                    
                    var booking_id = $('#booking_order_id').val();

                  
                   // alert(booking_id);return false;

                    //var eating_id = $('#eating_id').val();
                    var user_id = $('#user_id').val();
                    var confirm_text = $('#confirm_text').val();

                    var order_status = $('#order_status').val();
                   
                    $.post(base_url + 'admin/holiday_bookings/send_confirmation', {
                                            booking_id: booking_id, 
                                            user_id: user_id, 
                                            confirm_text: confirm_text,
                                            order_status:order_status
                                        }, 
                        function (response) {
                            if(response == 3){
                                $("#loading").hide();
                                error_html = '<div class="alert alert-danger alert-dismissable">';
                                error_html += '    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                                error_html += '        <h4><i class="icon fa fa-ban"></i> Alert!!</h4>';
                                error_html += '        No delivery man found nearby.<br />You can wait for 2 minutes so that, system will retry again.(Please do not click anywhere)';
                                error_html += '<br />Or, try again some time later.';
                                error_html += '</div>';
                                $('#msg').html(error_html);
                                $('#con_close').trigger('click');
                                $("html, body").animate({ scrollTop: 0 }, "slow");
                                setTimeout(function(){
                                    $('#update_status_submit').trigger('click');
                                }, 120000);
                            }
                            if (response == 1)
                            {
                                $("#loading").hide();
                                location.reload(true)
                            }
                            if (response == 0)
                            {
                               $("#loading").hide();
                                alert('Please send again');
                            }
                            $('#con_close').click();
                        });
                    });
              

    
       // $('.paynow').click(function () {
       $('body').on('click', '.paynow', function () {      
            var order_id = $(this).attr('order_id');
            var amount = $(this).attr('amount');
           
            var booking_id = $(this).attr('booking_id');
            var user_id = $(this).attr('user_id');

            $('#order_id').val(booking_id);
            $('#amount').val(amount);
           
            $('#booking_id').val(booking_id);
            $('#user_id').val(user_id);

            // $('#example1').find("tr[order_id='" + order_id + "']").html('Paid'); 

            $('#payment').modal('show');
        });

        
       // $('#do_payment').click(function () {
 $('body').on('click', '#do_payment', function () {
            var order_id = $('#order_id').val();
            var amount = $('#amount').val();
           // var eating_id = $('#eating_id').val();
            var booking_id = $('#booking_id').val();
            var tran_id = $('#tran_id').val();
            var user_id = $('#user_id').val();
           
            $.post(base_url + 'admin/holiday_bookings/make_payment', {booking_id: booking_id, order_id: order_id, amount: amount, tran_id: tran_id, user_id: user_id}, function (response) {

                //$('#display_sec').html(response);
                //$('#open_modal').click();

                if (response == 1)
                {
                    $('#' + booking_id).html('Paid');
                }


                $('#payment').modal('hide');
            });

        });
    });


</script>
<style type="text/css">
    .add, .minus{
        cursor:pointer;
    }
</style>
