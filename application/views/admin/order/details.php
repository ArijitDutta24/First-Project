<?php //print_r($usertype);exit; ?>
    <section class="content-header">
      <h1>
        Order Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Order Details List</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <?php echo $this->utility->showMsg();?>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Order Details Management</h3>
              <!-- <a class="btn btn-primary margin-right pull-right" href="<?php echo base_url()?>admin/banner/add">Add New Banner Image</a> -->  
            </div>
               
              <div></div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Type</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Booking Date</th>
                  <th>Amount</th>
                 
                </tr>
                </thead>
                
                 

                <tbody>
                <?php 
                     foreach ($type as $purvalue) 
                    {
                      $i=1;
                      if($purvalue['type']=='Package')
                      {
                        foreach ($package as $value) 
                        {
                            $total = $value['productQty']*$value['pPrice'];
                 ?>  
                <tr>
                 
                  
                  <td><?php echo $value['pName'];?></td>

                  <td><?php echo $value['catname'];?></td>

                  <td><?php echo $value['type'];?></td>

                  <td><?php echo $value['pPrice'];?></td>

                  <!-- <?php
                    foreach ($curr as $val1) 
                    {
                  ?>
                  <td>
                    <?php 
                    $arr = str_split($value['transaction_id'],5);
                    if($arr[0] == 'CASH_' || $arr[0] == 'CARD_')
                    {
                      
                      echo currency($value['pPrice'], $val1['curr_rate'], $val1['curr_name']);
                    }
                    else
                    {
                      echo 'USD$ '.$value['pPrice'];
                    }
                    ?>
                  </td>

                <?php } ?> -->

                  <td><?php echo $value['productQty'];?></td>

                  <td><?php echo $value['booking_date'];?></td>

                  <td><?php echo $total;?></td>

                  <!-- <?php
                    foreach ($curr as $val1) 
                    {
                  ?>
                  <td>
                    <?php 
                    $arr = str_split($value['transaction_id'],5);
                    if($arr[0] == 'CASH_' || $arr[0] == 'CARD_')
                    {
                      
                      echo currency($total, $val1['curr_rate'], $val1['curr_name']);
                    }
                    else
                    {
                      echo 'USD$ '.number_format($total, 2);
                    }
                    ?>
                  </td>

                <?php } ?> -->

                  
                   
                </tr>

               <?php }}else{ 
                    foreach ($activity as $value) 
                      {
                        $total1 = $value['productQty']*$value['activity_price'];
                ?>


                <tr>
                 
                  <td><?php echo $value['activity_name'];?></td>

                  <td><?php echo $value['theme_name'];?></td>

                  <td><?php echo $value['type'];?></td>

                  <td><?php echo $value['activity_price'];?></td>

                  <!-- <?php
                    foreach ($curr as $val1) 
                    {
                  ?>
                  <td>
                    <?php 
                    $arr = str_split($value['transaction_id'],5);
                    if($arr[0] == 'CASH_' || $arr[0] == 'CARD_')
                    {
                      
                      echo currency($value['activity_price'], $val1['curr_rate'], $val1['curr_name']);
                    }
                    else
                    {
                      echo 'USD$ '.$value['activity_price'];
                    }
                    ?>
                  </td>

                <?php } ?> -->

                  <td><?php echo $value['productQty'];?></td>

                  <td><?php echo $value['booking_date'];?></td>

                  <td><?php echo $total1;?></td>

                  <!-- <?php
                    foreach ($curr as $val1) 
                    {
                  ?>
                  <td>
                    <?php 
                    $arr = str_split($value['transaction_id'],5);
                    if($arr[0] == 'CASH_' || $arr[0] == 'CARD_')
                    {
                      
                      echo currency($total1, $val1['curr_rate'], $val1['curr_name']);
                    }
                    else
                    {
                      echo 'USD$ '.number_format($total1, 2);
                    }
                    ?>
                  </td>

                <?php } ?> -->

                </tr>
            <?php }}}?>
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

    function delete_data(edit_id)
    {
        var confirm_box=confirm("Are you sure to delete?");
        if(confirm_box==true)
        {
            var action="<?php echo base_url()?>admin/order/delete";
            $('#another_form').attr('action',action);
            $('#edit_id').val(edit_id);
            $('#another_form').submit();
        }
    }

    function change_status(edit_id,recent_status)
    {
        if(recent_status==1)
        {
            var update_status='inactive';
        }
        if(recent_status==0)
        {
            var update_status='active';
        }
        var confirm_box=confirm("Are you sure to "+update_status+" this?");
        if(confirm_box==true)
        {
            var action="<?php echo site_url('admin/order/update_status')?>";
            $('#another_form').attr('action',action);
            $('#edit_id').val(edit_id);
            $('#status').val(recent_status);
            $('#another_form').submit();
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