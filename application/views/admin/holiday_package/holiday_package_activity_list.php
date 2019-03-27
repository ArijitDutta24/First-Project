
<section class="content-header">
    <h1>
        Holiday Package Activity List
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">List</li>
    </ol>
</section>

<!-- Modal For Success-->

<section class="content">
    <div class="row">
        <?php echo $this->utility->showMsg(); ?>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Holiday Package Activity Management</h3>
                   
                    
                         <a class="btn btn-primary margin-right pull-right" href="<?php echo base_url() . 'admin/holiday_package_activity/activity_add_edit/'?>">Add Activity</a>
                         
                    
                </div>

                <div class="box-body" id="report_list">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Activity Name</th>
                                <th>Activity Duration</th>
                                <th>Activity Price</th>
                              
                                <th>Status</th>
                                <th class="hidden-480">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                             if (!empty($activity_details))
                             {
                                 foreach ($activity_details as $key => $val)
                                 {
                                     ?>

                                     <tr>
                                         <td><?php echo $key + 1 ?></td>

                                         <td><?php echo $val['activity_name'] ?></td>

                                         <td><?php echo $val['activity_duration'] ?></td>

                                         <td><?php echo $val['activity_price'] ?></td>

                                        
                                           
                                        <td>

                                            <?php
                                            if($val['activity_status']==1)
                                            {
                                                echo "<a href='javascript:void(0)' onclick='change_status(".$val['activity_id'].",".$val['activity_status'].")' title='Click here to inactive'>ACTIVE</a>";

                                            }
                                            else
                                            {
                                            echo "<a href='javascript:void(0)' onclick='change_status(".$val['activity_id'].",".$val['activity_status'].")' title='Click here to active'>INACTIVE</a>";
                                            }
                                            ?>

                                        </td>
                                         

                                         <td> 
                                             <a href="<?php echo base_url(); ?>admin/holiday_package_activity/activity_add_edit/<?php echo base64_encode($val['activity_id']); ?>" title="Edit"><span class="fa fa-pencil-square-o"></span></a>

                                            <a href="<?php echo base_url(); ?>admin/holiday_package_activity/gallery/<?php echo base64_encode($val['activity_id']); ?>" title="Gallery"><span class="fa fa-picture-o"></span></a>

                                            <!--  <a href="<?php //echo base_url(); ?>online_mall/online_mall/store_preview/<?php //echo base64_encode($val['gift_store_id']); ?>"target="_blank" title="Preview"><span class="fa fa-search"></span></a> -->
                                           

                                         </td>
                                     </tr>

                                     <?php
                                 }
                             }
                            ?>
                            
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<form action="<?php echo base_url() . 'admin/rtg_hotel_report/create_xml' ?>" method="post" id="export_form">
    <input type="hidden" name="data" value=""/>
</form>
<form id="another_form" action="" method="POST">
    <input type="hidden" name="edit_id" id="edit_id" value="">
  
    <input type="hidden" name="status" id="status" value="">
</form>

<script type="text/javascript">

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
            var action="<?php echo site_url('admin/holiday_package_activity/update_status')?>";
            $('#another_form').attr('action',action);
            $('#edit_id').val(edit_id);
            $('#status').val(recent_status);
           // $('#store_id').val(store_id);
            $('#another_form').submit();
        }
    }

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