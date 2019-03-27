        <section class="content-header">
      <h1>
        Settings 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('settings');?>"> Settings</a></li>
        <li class="active"> Edit</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
      <?php echo $this->utility->showMsg();?>
        <div class="col-md-12">
    
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="edit_settings" name="edit_phase" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Settings Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="settings_name" name="settings_name"  placeholder="Please enter Settings Name" value="<?php echo $settings['setting_name'];?>">
               </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Settings Value</label>

                  <div class="col-sm-10">
                    <?php
                      if($settings['is_text'])
                      {
                    ?>
                    <input type="text" class="form-control required" id="settings_value" name="settings_value"  placeholder="Please enter Settings Value" value="<?php echo $settings['setting_value'];?>">
                    <input name="is_text" type="hidden" class="span6 m-wrap" value="1"/>
                    <?php 
                      }
                      if($settings['is_textarea'])
                      {
                    ?>
                    <textarea name="settings_value" class="form-control required"><?php echo $settings['setting_value'];?></textarea>
                    <input name="is_textarea" type="hidden" class="span6 m-wrap" value="1"/>
                    <?php
                    }
                    ?>
                    <?php
                      if($settings['is_image'])
                      {
                    ?>
                    <div data-provides="fileupload" class="fileupload fileupload-new">
                      <input type="hidden" value="" name="">
                      <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                      <?php echo (!empty($settings['setting_value']))?'<img src="'.base_url().'assets/uploads/site_settings/'.$settings['setting_value'].'" alt="'.$settings['setting_name'].'"/>':'<img alt="no_image" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">';?>
                         
                      </div>
                      <!-- <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div> -->
                      <div>
                         <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                         <!-- <span class="fileupload-exists">Change</span> -->
                         <input type="file" name="image">
                        <!--  <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Remove</a> -->
                      </div>
                     </div>
                     <input name="is_image" type="hidden" class="span6 m-wrap" value="1"/>
                    <?php
                      }
                      if($settings['instruction'])
                      {
                    ?>
                      <span class="">NOTE!</span>
                      <span>
                       <?php echo $settings['instruction'];?>
                      </span>
                    <?php
                      }
                    ?>
                  </div>
                </div>
            
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" onclick="return_back()"class="btn btn-default pull-right margin-left  " >Cancel</button>
                <input type="submit" class="btn btn-info pull-right" value="Update">
              </div>
              <input type="hidden" name="frmSecurity" value="<?php echo $this->utility->getSecurity();?>"/>

              <!-- /.box-footer -->
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
      $("#edit_settings").validate();
    </script>
    <script>
      function return_back()
      {
        var back_url='<?php echo base_url()?>admin/settings';
        window.location=back_url;
      }
   </script>