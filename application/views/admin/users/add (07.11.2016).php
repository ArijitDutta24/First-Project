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
        <li class="active"> Add New</li>
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
              <h3 class="box-title">Add</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="add_user" name="add_user" class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url()?>users/add" >
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" name="username" placeholder="Please enter Username" value="<?php echo set_value('username');?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control required" name="password" placeholder="Please enter User password">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Email Id</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required email" name="email" placeholder="Please enter email" value="<?php echo set_value('email');?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Contact No</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" name="contact_no" placeholder="Please enter Contact Number" value="<?php echo set_value('contact_no');?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" id="usertype" name="address" placeholder="Please enter address" > <?php echo set_value('address');?></textarea>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label required">Designation</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="user_type_id">
                      <?php foreach($user_types as $ut){ ?>
                      <option value="<?php echo $ut['user_type_id'];?>"><?php echo $ut['user_type_name'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label required">Skills</label>

                  <div class="col-sm-10">
                    <select class="form-control required" name="skills[]" multiple="multiple" >
                      <?php foreach($skills as $skill){ ?>
                        <option value="<?php echo $skill['skill_id'];?>">
                          <?php echo $skill['skill_name'];?>
                        </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Joining Date</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control " id="datepicker" name="doj"  value="<?php echo set_value('doj');?>">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Profile Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="" name="image" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <select class="form-control required" name="status" id="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
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
              <input type="hidden" name="user_id" value="0"/>
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
      $("#add_user").validate();
    </script>
    <script>
      function return_back()
      {
        var back_url='<?php echo base_url()?>users';
        window.location=back_url;
      }
      $('#datepicker').datepicker({
        todayHighlight: true,
        autoclose: true
      });
   </script>