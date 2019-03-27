<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script> 
<section class="content-header">
    <h1>
        Holiday Package Activity 
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <?php if ($this->session->userdata('is_sub_admin') == 0)
         { ?>
              <li><a href="<?php echo base_url() . 'admin/holiday_store' ?>">Heritage Holiday</a></li>
         <?php }
         
             ?>
             <li><a href="<?php echo base_url() . "admin/holiday_package_activity" ?>">Holiday Package Activity</a></li>

        <li class="active"> Edit</li>
    </ol>
</section>
<script>
    var d = new Date(90, 0, 1);
    $(function () {

        $(".timepicker").timepicker({
            showInputs: false,
            defaultTime: '11',
            use24hours: true,
            format: 'HH:mm',
            showMeridian: false
        });
    });
</script>

<section class="content">
    <div class="row">
<?php echo $this->utility->showMsg(); ?>
        <div class="col-md-12">

            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form id="holiday_package_addEdit" name="holiday_package_addEdit" class="form-horizontal" method="post" action="" enctype="multipart/form-data" onsubmit="return editorValidate();">
                    <div class="box-body">
                        

                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Theme</label>
                                 <div class="col-sm-10">
                                   <select class="form-control " id="theme_id" name="theme_id"  data-placeholder="Theme" style="width: 100%;" >

                                    <option value="">Select Theme</option>

                                    <?php
                                     foreach ($theme_details as $value)
                                     {
                                         ?>
                                         <option value="<?php echo $value['theme_id']; ?>" <?php if ($value['theme_id']==$activity_details['theme_id']) { ?>selected="selected"<?php } ?> ><?php echo $value['theme_name'] ?></option> 
                                     <?php } ?> 
                                </select>
                                    
                                 </div>
                             </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Activity Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control required" id="activity_name" name="activity_name"  placeholder="Please enter activity Name" value="<?php echo (isset($activity_details)) ? $activity_details['activity_name'] : '' ?>" maxlength="100">
                            </div>
                        </div>
                       
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Duration(Minutes)</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control required" id="activity_duration" name="activity_duration" min="1"  placeholder="Activity duration" value="<?php echo (isset($activity_details)) ? $activity_details['activity_duration'] : '' ?>">
                            </div>
                        </div>
                       
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control required" id="activity_price" name="activity_price"   value="<?php echo (isset($activity_details)) ? $activity_details['activity_price'] : '' ?> ">
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Activity Description</label>

                            <div class="col-sm-10">
                                <textarea class="form-control required" id="activity_description" name="activity_description" required placeholder="Please enter description"><?php echo (isset($activity_details))? ($activity_details['activity_description']):'' ?></textarea>
                                <script>
                                    // Replace the <textarea id="editor1"> with a CKEditor
                                    // instance, using default configuration.
                                    CKEDITOR.replace('activity_description', {
                                        filebrowserBrowseUrl: '/fileman/index.html',
                                        filebrowserImageBrowseUrl: '/fileman/index.html?type=image',
                                        removeDialogTabs: 'link:upload;image:upload'
                                    });
                                </script>
                                <label id="activity_description_error" style="color:red;"></label>
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Activity Inclusions</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="activity_inclusions" name="activity_inclusions"  placeholder="Inclusions" ><?php echo (isset($activity_details)) ? $activity_details['activity_inclusions'] : '' ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Terms and Conditions</label>
                            <div class="col-sm-10">
                                <textarea class="form-control required" id="activity_terms_conditions" name="activity_terms_conditions"  placeholder="Terms and conditions" ><?php echo (isset($activity_details)) ? $activity_details['activity_terms_conditions'] : '' ?></textarea>
                            </div>
                        </div>

                          <div class="form-group">
                                 <label class="col-sm-2 control-label">Activity Status</label>
                                 <div class="col-sm-10">
                                   <select class="form-control required " id="activity_status" name="activity_status"  data-placeholder="Status" style="width: 100%;" >
                                        <option value="">Please select status</option> 

                                        <option value="1" <?php echo (isset($activity_details) && ($activity_details['activity_status']==1)) ? "selected":""; ?>>Active</option> 
                                        <option value="0" <?php echo (isset($activity_details) && ($activity_details['activity_status']==0)) ? "selected":""; ?>>Inactive</option> 
                                   
                                </select>
                                    
                                 </div>
                             </div>
                       
                       
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="button" onclick="return_back()"class="btn btn-default pull-right margin-left  " >Cancel</button>
                        <input type="submit" class="btn btn-info pull-right" value="Save">
                    </div>
                    <input type="hidden" name="frmSecurity" value="<?php echo $this->utility->getSecurity(); ?>"/>
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type='text/javascript'>
    $("#holiday_package_addEdit").validate();
</script>
<script>

   

    function return_back()
    {
        var back_url = '<?php echo base_url() ?>admin/holiday_package_activity/index/<?php echo base64_encode($store_id) ?>';
        window.location = back_url;
    }

     function editorValidate(){
        
        if(CKEDITOR.instances['activity_description'].getData()==''){
          $('#activity_description_error').html("This field is required.");
          return false;
        }
      }
</script>

<script>
    $(document).ready(function () {
        
        $(".select2").select2();


    });
    

</script>
