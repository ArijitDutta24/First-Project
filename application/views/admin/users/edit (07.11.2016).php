  <!-- Datepicker style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datepicker/datepicker3.css">
  <script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <section class="content-header">
      <h1>
        Employee
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('users');?>"> Employee</a></li>
        <li class="active"> Edit</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
      <?php echo $this->utility->showMsg();?>
        <!-- right column -->
        <div class="col-md-12">
    
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="edit_user" name="edit_user" class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>users/edit" >
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" name="username" placeholder="Please enter Username" value="<?php echo $user['username'];?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Please enter User password">
                    <p style="color:blue;" class="info">Leave it blank to remain password unchanged.</p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Email Id</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required email" name="email" placeholder="Please enter email" value="<?php echo $user['email'];?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Contact No</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" name="contact_no" placeholder="Please enter Contact Number" value="<?php echo $user['contact_no'];?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" id="usertype" name="address" placeholder="Please enter address" > <?php echo $user['address'];?></textarea>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label required">Designation</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="user_type_id">
                      <?php foreach($user_types as $ut){ ?>
                      <option value="<?php echo $ut['user_type_id'];?>" <?php echo $a=($ut['user_type_id']==$user['user_type_id']) ? 'selected' : '';?> ><?php echo $ut['user_type_name'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label required">Skills</label>

                  <div class="col-sm-10">
                    <select class="form-control required" name="skills[]" multiple="multiple" >
                      <?php foreach($skills as $skill){ ?>
                        <option value="<?php echo $skill['skill_id'];?>" <?php echo $s=(in_array($skill['skill_id'], $user_skills)) ? 'selected' : '';?>>
                          <?php echo $skill['skill_name'];?>
                        </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Joining Date</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control datepicker" name="doj"  value="<?php echo $user['add_date'];?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Release Date</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control datepicker" name="dor"  value="<?php echo $user['end_date'];?>">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Profile Image</label>
                  <div class="col-sm-10">
                    <?php if($user['profile_image']){
                      echo "<img src='".base_url()."assets/uploads/user_images/".$user['profile_image']."' height='150' >";
                    }?>
                    <input type="file" class="" name="image" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <select class="form-control required" name="status" id="status">
                    <option value="1" <?php echo $a= ($user['user_status']==1) ? 'selected' : '';?>>Active</option>
                    <option value="0" <?php echo $a= ($user['user_status']==0) ? 'selected' : '';?>>Inactive</option>
                   </select>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" onclick="return_back()"class="btn btn-default pull-right margin-left" >Cancel</button>
                <input type="submit" class="btn btn-info pull-right" value="Save">
              </div>
              <!-- /.box-footer -->
              <input type="hidden" name="frmSecurity" value="<?php echo $this->utility->getSecurity();?>"/>
              <input type="hidden" name="edit_id" value="<?php echo $user['user_id'];?>"/>
            </form>
          </div>
          <!-- /.box -->
         
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <script type='text/javascript'>
      $("#edit_user").validate();
    </script>
    <script>
      function return_back()
      {
        var back_url='<?php echo base_url()?>users';
        window.location=back_url;
      }
      $('.datepicker').datepicker({
        todayHighlight: true,
        autoclose: true,
        format: 'yyyy-mm-dd'
      });
   </script>