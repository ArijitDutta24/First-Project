 <?php //print_r($usertype_info);?>
 <script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
         <section class="content-header">
      <h1>
        Metatags
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url();?>admin/metatags"> Metatags</a></li>
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
              <input type="hidden" name="edit_id" id="edit_id" value="<?php echo $metainfo['id'];?>">
              <div class="box-body">
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Meta Title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="meta_title" name="meta_title" required placeholder="Please enter meta title" value="<?php echo $metainfo['meta_title']?>">
                  <!--   <p style="color:#A94442" id="usertype_error"></p> -->
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Meta Keyword</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="meta_keywords" name="meta_keywords" required placeholder="Please enter meta keyword" value="<?php echo $metainfo['meta_keywords']?>">
                  <!--   <p style="color:#A94442" id="usertype_error"></p> -->
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Meta Description</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="meta_desc" name="meta_desc" required placeholder="Please enter meta description" value="<?php echo $metainfo['meta_desc']?>">
                  <!--   <p style="color:#A94442" id="usertype_error"></p> -->
                  </div>
                </div>

              </div>
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
    var back_url='<?php echo base_url()?>admin/metatags';
    window.location=back_url;
  }

 
  
</script>