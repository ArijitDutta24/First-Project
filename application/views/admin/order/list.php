<?php //print_r($usertype);exit; ?>
    <section class="content-header">
      <h1>
        Purchase Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Purchase Details List</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <?php echo $this->utility->showMsg();?>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Purchase Details Management</h3>
              
            </div>
               
              <div></div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl No.</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Total Purchase Amount</th>
                  <th>Account</th>
                  <th>Sale ID</th>
                  <th>Payment Status</th>
                  <th>Transaction ID</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                
                 <?php if(count($sales)>0)
                 $i=1;
                {?>
                <tbody>
               <?php
                foreach ($sales as $data_key=>$data) 
                {
                  
                ?>
                <tr>
                 
                 <td><?php echo $i++;?></td>
               
                   
                  <td><?php echo $data['bill_1'];?></td>

                	<td><?php echo $data['bill_3'].",&nbsp;". $data['bill_4'].",&nbsp;". $data['bill_5']."-".$data['bill_7'] .",&nbsp;".$data['bill_6'];?></td>

                  <td><?php echo $data['bill_2'];?></td>

                  <td><?php echo $data['grandTotal'];?></td>
                  <!-- <?php
                    foreach ($curr as $val1) 
                    {
                  ?>
                  <td>
                    <?php 
                    $arr = str_split($data['transaction_id'],5);
                    if($arr[0] == 'CASH_' || $arr[0] == 'CARD_')
                    {
                      
                      echo currency($data['grandTotal'], $val1['curr_rate'], $val1['curr_name']);
                    }
                    else
                    {
                      echo 'USD$ '.$data['grandTotal'];
                    }
                    ?>
                  </td>

                <?php } ?> -->

                  <td>
                    <?php 
                      if($data['user_id']==0)
                      {
                        echo 'As A Guest';
                      }
                      else
                        {
                          echo 'Registered';
                        }
                    ?>
                  </td>

                  <td><?php echo $data['id'];?></td>
                  <td>
                    <?php if($data['payment_status'] == 1)
                    {
                      echo "Paid";
                    }
                    else
                    {
                    ?>
                      <select id="paymentStatus" onchange="status('<?php echo $data["sale_id"];?>')">
                        <option selected value="1">Unpaid</option>
                        <option value="2">Cash</option>
                        <option value="3">Card</option>
                      </select>
                    <?php } ?>
                      
                  </td>

                  <td>
                    <?php if($data['payment_status'] == 1)
                    {
                      echo $data['transaction_id'];
                    }
                    else
                    {
                      echo "Unpaid";
                    } ?>
                      
                  </td>
                  
                    <td>
                       <a href="<?php echo base_url();?>admin/order/details/<?php echo base64_encode($data['id']);?>" title="Edit">Details</a>                       
                    </td> 
                </tr>

               <?php } ?>

                </tbody>
                <?php } ?>
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
    </section>
    <form id="another_form" action="" method="POST">

    <input type="hidden" name="status" id="status" value="">
    <input type="hidden" name="edit_id" id="edit_id" value="">
	</form>
    <!-- /.content -->

    <script type="text/javascript">
    function edit(edit_id)
    {
        var action="<?php echo base_url()?>admin/order/edit";
        $('#another_form').attr('action',action);
        $('#edit_id').val(edit_id);
        $('#another_form').submit();
    }

    // function delete_data(edit_id)
    // {
    //     var confirm_box=confirm("Are you sure to delete?");
    //     if(confirm_box==true)
    //     {
    //         var action="<?php echo base_url()?>admin/order/delete";
    //         $('#another_form').attr('action',action);
    //         $('#edit_id').val(edit_id);
    //         $('#another_form').submit();
    //     }
    // }

    // function change_status(edit_id,recent_status)
    // {
    //     if(recent_status==1)
    //     {
    //         var update_status='inactive';
    //     }
    //     if(recent_status==0)
    //     {
    //         var update_status='active';
    //     }
    //     var confirm_box=confirm("Are you sure to "+update_status+" this?");
    //     if(confirm_box==true)
    //     {
    //         var action="<?php echo site_url('admin/order/update_status')?>";
    //         $('#another_form').attr('action',action);
    //         $('#edit_id').val(edit_id);
    //         $('#status').val(recent_status);
    //         $('#another_form').submit();
    //     }
    // }


    function status(id) {
      var selectId = $('#paymentStatus').val();
      // console.log(id);
      // console.log(selectId);
      var insertUrl   = "<?php echo base_url('admin/Order/update_status');?>";
      var r = confirm("Are You Sure?");
      if(r == true)
      {
        $.ajax({
          url : insertUrl,
          method : "POST",
          data : {'id' : id, 'selectId' : selectId},
          success : function(data)
          {
            // alert(data);
            window.location.reload();
          }
        });
      }
      else
      {
        window.location.reload();
      }
    }
   

    </script>
    
    <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>