<?php //print_r($usertype);exit; ?>
    <section class="content-header">
      <h1>
        CMS
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">CMS List</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <?php echo $this->utility->showMsg();?>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">CMS Management</h3>
              <!-- <a class="btn btn-primary margin-right pull-right" href="<?php //echo base_url()?>admin/cms/add">Add New CMS</a> -->  
            </div>
               
              <div></div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CMS Title</th>
                  <th>CMS Heading</th>
                  <th>CMS Description</th>
                  <th>Status</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                 <?php if(count($cms)>0)
                {?>
                <tbody>
               <?php
                foreach ($cms as $data) 
                {
                ?>
                <tr>
                  <td><?php echo $data['cms_title'];?></td>
                  <td><?php echo $data['cms_heading'];?></td>
                	<td><?php echo substr($data['cms_description'], 0, 200);?></td>
                	 <td>
                        <?php
                        if($data['cms_status']==1)
                        {
                            echo "<a href='javascript:void(0)' onclick='change_status(".$data['cms_id'].",".$data['cms_status'].")' title='Click here to inactive'>ACTIVE</a>";
                                    
                        }
                        else
                        {
                           echo "<a href='javascript:void(0)' onclick='change_status(".$data['cms_id'].",".$data['cms_status'].")' title='Click here to active'>INACTIVE</a>";
                        }
                        ?>
                    </td>
                     <td>
                        
                        <a href="<?php echo base_url();?>admin/cms/edit/<?php echo base64_encode($data['cms_id']);?>" title="Edit"><span class="fa fa-pencil-square-o"></span></a>
                        <!-- <a href="<?php //echo base_url();?>admin/cms/delete/<?php //echo base64_encode($data['cms_id']);?>" onclick="return confirm('Are You Sure To Delete');" title="Delete"><span class="fa fa-trash-o"></span></a> -->
                       
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
    <input type="hidden" name="edit_id" id="edit_id" value="">
    <input type="hidden" name="status" id="status" value="">
	</form>
    <!-- /.content -->

    <script type="text/javascript">
    function edit(edit_id)
    {
        var action="<?php echo base_url()?>admin/cms/edit";
        $('#another_form').attr('action',action);
        $('#edit_id').val(edit_id);
        $('#another_form').submit();
    }

    function delete_data(edit_id)
    {
        var confirm_box=confirm("Are you sure to delete?");
        if(confirm_box==true)
        {
            var action="<?php echo base_url()?>admin/cms/delete";
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
            var action="<?php echo site_url('admin/cms/update_status')?>";
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