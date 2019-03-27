<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>

  <!-- Datepicker style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datepicker/datepicker3.css">
  <script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <section class="content-header">
      <h1>
        Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('admin/profile');?>"> Profile</a></li>
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
            <form id="edit_user" name="edit_user" class="form-horizontal" enctype="multipart/form-data" method="post" action="">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Full name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" name="full_name" placeholder="Full Name" value="<?php echo $user['full_name'];?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" name="username" placeholder="Username" value="<?php echo $user['username'];?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <p style="color:blue;" class="info">Leave it blank to remain password unchanged.</p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Email Id</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required email" name="email" id="email" placeholder="Email" value="<?php echo $user['email'];?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Contact No</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" name="contact_no" placeholder="Contact Number" value="<?php echo $user['contact_no'];?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" id="usertype" name="address" placeholder="Address" > <?php echo $user['address'];?></textarea>
                  </div>
                </div>
                
               
              


                <div class="form-group">
                  <label class="col-sm-2 control-label">Profile Image</label>
                  <div class="col-sm-10">
                  <?php
                      if($data['banner_image'])
                         {
                            $img = base_url('assets/uploads/user_images/').$user['profile_image'];
                         }
                         else
                         {
                           $img = base_url('assets/uploads/user_images/images.png');
                         }
                  ?>
                  <img src="<?php echo  $img; ?>" style="height: 100px; width: 150px;">
                    
                    <input type="file" class="" name="image" >
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" onclick="return_back()" class="btn btn-default pull-right margin-left" >Cancel</button>
                <input type="submit" class="btn btn-info pull-right" value="Save">

              </div>
              <!-- /.box-footer -->
              <input type="hidden" name="edit_id" id="edit_id" value="<?php echo $user['user_id'];?>"/>
              <input type="hidden" name="frmSecurity" value="<?php echo $this->utility->getSecurity();?>"/>
              
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
    var base_url='<?php echo base_url();?>';
      $("#edit_user").validate({
        rules: {
          
          email: {
            required: true,
            email: true,
            remote: {
              url: base_url+'admin/profile/check_edit_email',
              type: "post",
            }
          }
        },
        messages: {
          email: {
            required: "This field is required.",
            email: "Please enter a valid email address.",
            remote: "Email already in use!"
          }
        }
      });
    </script>
    <script>
      function return_back()
      {
        var back_url='<?php echo base_url()?>admin/dashboard';
        window.location=back_url;
        
      }
      $('.datepicker').datepicker({
        todayHighlight: true,
        autoclose: true,
        format: 'yyyy-mm-dd'
      });
   </script>

   