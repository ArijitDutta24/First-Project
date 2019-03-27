<script type="text/javascript">
$(document).ready(function(){
  var user_type = '<?php echo $user_type?>';
  var search_key = '<?php echo $search_key?>';
  var search_value = '<?php echo $search_value?>';
  $('#user_type').val(user_type);
  if(user_type=='client'){
    $("#employee_div").hide();
    $("#client_div").show();
    $('#employee_btn').removeClass('btn_active');
    $('#client_btn').addClass('btn_active');
    $('#add_btn').text("Add New Client");
    var base_url='<?php echo base_url();?>';
    $('#add_btn').attr('href',base_url+'users/add/client');
  }if(user_type=='emp'){
    $("#client_div").hide();
    $("#employee_div").show();
    $('#employee_btn').addClass('btn_active');
    $('#client_btn').removeClass('btn_active');
    $('#add_btn').text("Add New Employee");
    var base_url='<?php echo base_url();?>';
    $('#add_btn').attr('href',base_url+'users/add/emp');
  }
});
</script>
<style type="text/css">
.btn_active{
  background-color : #367fa9 !important;
}
</style>
    <section class="content-header">
      <h1>
    User
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User List</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <?php echo $this->utility->showMsg();?>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List</h3>
              <a class="btn btn-primary margin-right pull-right" href="<?php echo base_url();?>users/add/emp" id="add_btn">Add New Employee</a>
            </div>
            
              <div><a class="btn btn-primary margin-left pull-left btn_active" href="javascript:void(0)" onclick="empshow()" id="employee_btn">Employee</a></div>
              <div><a class="btn btn-primary margin-left pull-left" href="javascript:void(0)" onclick="clientshow()" id="client_btn">Client</a></div>
              <form action="" id="search_form" method="POST">
                <input type="hidden" name="user_type" id="user_type" value="">
                <div>
                  <div class="col-sm-3">
                    <select class="form-control required" name="search_key" id="search_key">
                      <option value="" <?php if($search_key==''){echo "selected";}?>>Select</option>
                      <option value="username" <?php if($search_key=='username'){echo "selected";}?>>Username</option>
                      <option value="email" <?php if($search_key=='email'){echo "selected";}?>>Email</option>
                      <option value="contact_no" <?php if($search_key=='contact_no'){echo "selected";}?>>Contact</option>
                    </select>
                  </div>
                  <div class="col-sm-3">
                    <input type="text" class="form-control required" name="search_value" id="search_value" placeholder="Search here ..." value="<?php echo $search_value;?>">
                  </div>
                </div>
              </form>
              <div><a class="btn btn-primary margin-left pull-left" href="javascript:void(0)" onclick="SearchClick();">Search</a></div>
              <div><a class="btn btn-primary margin-left pull-left" href="<?php echo base_url()?>users">RESET</a></div>
              <div></div>
            <!-- /.box-header -->
            <div class="box-body" id="employee_div">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Employee Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Skills</th>
                    <th>Designation</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php if(count($users)>0) { ?>
                <tbody>
               <?php foreach ($users as $data) { 
                  if($data['user_type_id']!=1){
                      $designation = $this->common_model->GetColumnData('tbl_user_type','user_type_name',array('user_type_id' => $data['user_type_id'],'user_type_status' => '1'));

                ?>
                <tr>
                  <td><?php echo $data['username'];?></td>
                  <td><?php echo $data['email'];?></td>
                  <td><?php echo $data['contact_no'];?></td>
                  <td>
                    <?php
                    $skills = $this->users_model->GetUserSkill($data['user_type_id']); 
                    echo $skills;
                    ?>
                  </td>
                	<td><?php echo $designation;?></td>
                  <td>
                      <a href="javascript:void(0)" onclick="edit(<?php echo $data['user_id'];?>)" title="Edit"><span class="fa fa-pencil-square-o"></span></a>
                      <a href="javascript:void(0)" onclick="delete_data(<?php echo $data['user_id'];?>)" title="Delete"><span class="fa fa-trash-o"></span></a>
                     <!--  <a href="<?php echo  base_url();?>users/permission/<?php echo base64_encode($data['user_id']);?>" title="Role"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> -->
                  </td> 
                </tr>

               <?php } } ?>

                </tbody>
                <?php } ?>
                <tfoot>
               
                </tfoot>
              </table>
            </div>
            <div class="box-body" id="client_div" style="display:none;">
               <table id="example3" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Client Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <!-- <th>Designation</th> -->
                    <th>Action</th>
                   
                  </tr>
                </thead>
                <?php if(count($client)>0) { ?>
                <tbody>
               <?php foreach ($client as $data) { ?>
                  <tr>
                    <td><?php echo $data['username'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><?php echo $data['contact_no'];?></td>
                    <td><?php echo $data['address'];?></td>
                    <!-- <td><?php echo $data['user_type_id'];?></td> -->
                    <td>
                        <a href="javascript:void(0)" onclick="edit(<?php echo $data['user_id'];?>)" title="Edit"><span class="fa fa-pencil-square-o"></span></a>
                        <a href="javascript:void(0)" onclick="delete_data(<?php echo $data['user_id'];?>)" title="Delete"><span class="fa fa-trash-o"></span></a>
                        <!-- <a href="<?php echo  base_url();?>users/permission/<?php echo base64_encode($data['user_id']);?>" title="Role"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> -->
                    </td> 
                  </tr>

               <?php } ?>

                </tbody>
                <?php } ?>
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
    <!-- <input type="hidden" name="status" id="status" value=""> -->
	</form>
    <!-- /.content -->

    <script>
    /*$(document).ready(function(){
      $("#example3").hide();
    });*/

    function clientshow()
    {
      var user_type = '<?php echo $user_type?>';
      var search_key = '<?php echo $search_key?>';
      var search_value = '<?php echo $search_value?>';
      $('#search_key').prop('selectedIndex','');
      $('#search_value').val('');
      $('#user_type').val('client');
      $("#employee_div").hide();
      $("#client_div").show();
      $('#employee_btn').removeClass('btn_active');
      $('#client_btn').addClass('btn_active');
      $('#add_btn').text("Add New Client");
      var base_url='<?php echo base_url();?>';
      $('#add_btn').attr('href',base_url+'users/add/client');
      if(user_type=='client'){
        $('#search_key').val(search_key);
        $('#search_value').val(search_value);
      }
    }

    function empshow()
    {
      var user_type = '<?php echo $user_type?>';
      var search_key = '<?php echo $search_key?>';
      var search_value = '<?php echo $search_value?>';
      $('#search_key').prop('selectedIndex','');
      $('#search_value').val('');
      $('#user_type').val('emp');
      $("#client_div").hide();
      $("#employee_div").show();
      $('#employee_btn').addClass('btn_active');
      $('#client_btn').removeClass('btn_active');
      $('#add_btn').text("Add New Employee");
      var base_url='<?php echo base_url();?>';
      $('#add_btn').attr('href',base_url+'users/add/emp');
      if(user_type=='emp'){
        $('#search_key').val(search_key);
        $('#search_value').val(search_value);
      }
    }
    </script>

  <script type="text/javascript">
    function edit(edit_id)
    {
        var action="<?php echo base_url()?>users/edit";
        $('#another_form').attr('action',action);
        $('#edit_id').val(edit_id);
        $('#another_form').submit();
    }

    function delete_data(edit_id)
    {
        var confirm_box=confirm("Are you sure to delete?");
        if(confirm_box==true)
        {
            var action="<?php echo base_url()?>users/delete";
            $('#another_form').attr('action',action);
            $('#edit_id').val(edit_id);
            $('#another_form').submit();
        }
    }

    $(function () {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
      $('#example3').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });

    });

    function SearchClick(){
      if($('#search_key').val()==''){
        alert('Please select search key');
      }else{
        if($.trim($('#search_value').val())==''){
          alert('Please write in the search section.');
        }else{
          $('#search_form').submit();
        }
      }
      
    }
</script>