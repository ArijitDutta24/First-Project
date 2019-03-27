 <?php //print_r($usertype_info);?>
 <script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
         <section class="content-header">
      <h1>
        CMS
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url();?>admin/cms"> CMS</a></li>
        <li class="active"> Edit</li>
      </ol>
    </section>

 <section class="content">
      <div class="row">
      <?php //echo $this->utility->showMsg();?>
        <!-- right column -->
        <div class="col-md-12">
    
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="edit_cms" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <input type="hidden" name="edit_id" id="edit_id" value="<?php echo $cms_info['cms_id'];?>">
              <div class="box-body">
      

                <div class="form-group">
                  <label class="col-sm-2 control-label">CMS Title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="cms_title" required name="cms_title" value="<?php echo $cms_info['cms_title']?>">
                  
                  </div>

                </div>


                <div class="form-group">

                  <label class="col-sm-2 control-label">CMS Description Heading</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="cms_title" name="cms_heading" required value="<?php echo $cms_info['cms_heading']?>">
                  <!--   <p style="color:#A94442" id="usertype_error"></p> -->
                  </div>
                </div>

                  <input type="hidden" class="form-control required" id="cms_slug" required name="cms_slug" value="<?php echo $cms_info['cms_slug']?>">
                
                  <div class="form-group">
                  <label class="col-sm-2 control-label">CMS Description</label>

                  <div class="col-sm-10">
                   <!--  <input type="text" class="form-control required" id="cms_desc" required name="cms_desc" value="<?php echo $cms_info['cms_description']?>"> -->
                    <textarea class="form-control required" id="cms_desc" name="cms_desc" required placeholder="Please enter cms description"><?php echo $cms_info['cms_description']?></textarea>
                    <script>
                     // Replace the <textarea id="editor1"> with a CKEditor
                     // instance, using default configuration.
                     CKEDITOR.replace( 'cms_desc',{
                     filebrowserBrowseUrl : '/fileman/index.html',
                     filebrowserImageBrowseUrl : '/fileman/index.html?type=image',
                     removeDialogTabs: 'link:upload;image:upload'
                     });
                     </script>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Meta Title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="meta_title" name="meta_title" required placeholder="Please enter meta title" value="<?php echo $cms_info['meta_title']?>">
                  <!--   <p style="color:#A94442" id="usertype_error"></p> -->
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Meta Keyword</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="meta_keyword" name="meta_keyword" required placeholder="Please enter meta keyword" value="<?php echo $cms_info['meta_keyword']?>">
                  <!--   <p style="color:#A94442" id="usertype_error"></p> -->
                  </div>
                </div>

                

                <div class="form-group">
                  <label class="col-sm-2 control-label">CMS Status</label>

                  <div class="col-sm-10">
                    <select class="form-control required" id="cms_status" name="cms_status">
                     <option value="">Please Select Status</option>
                    <option value="1" <?php if($cms_info['cms_status']==1){echo "selected";}?>>Active</option>
                    <option value="0" <?php if($cms_info['cms_status']==0){echo "selected";}?>>Inactive</option>
                   </select>
                  </div>
                </div>


                <div class="form-group">
                            <label class="col-sm-2 control-label">Background Image</label>
                            <div class="col-sm-10">
                                <?php if( $cms_info['cms_image']!='') { ?>
                                <div >
                                     <img  src="<?php echo base_url()?>assets/uploads/background_images/<?php echo $cms_info['cms_image'];?> " alt="<?php echo $cms_info['cms_image'];?>"  height="89px" width="213px">
                                    
                                </div>
                                <?php } ?>
                                
                                <input type="file"  id="bn_image" name="bn_image"  placeholder="upload brand image"  >
                            </div>
                        </div>
              </div>


              <?php if($cms_info['cms_slug'] == 'about-us.'){?>
              <div class="form-group">
                            <label class="col-sm-2 control-label">PDF File</label>
                            <div class="col-sm-10">
                                <?php if( $cms_info['cms_file']!='') { ?>
                                <div >
                                     <img  src="<?php echo base_url()?>assets/uploads/download/<?php echo $cms_info['cms_file'];?> " alt="<?php echo $cms_info['cms_file'];?>"  height="100" >
                                    
                                </div>
                                <?php } ?>
                                
                                <input type="file" id="pdf"  name="pdf"  placeholder="upload image">
                            </div>
                        </div>
              </div>
            <?php }?>


              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" onclick="return_back()"class="btn btn-default pull-right">Cancel</button>
                <input type="submit" class="btn btn-info pull-right" value="Update">
              </div>
              <!-- /.box-footer -->
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
    <!-- /.content -->

    <script type='text/javascript'>
      $("#edit_cms").validate();
    </script>

    <script>
  
  function return_back()
  {
    var back_url='<?php echo base_url()?>admin/cms';
    window.location=back_url;
  }

 
  
</script>