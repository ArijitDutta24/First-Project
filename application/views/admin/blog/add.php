<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
        <section class="content-header">
      <h1>
        BLOG
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url()?>/admin/blog">Blog</a></li>
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
            <form id="add_cms" name="add_cms" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="box-body">

            

                <div class="form-group">
                  <label class="col-sm-2 control-label">Blog Title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="blog_title" name="blog_title" required placeholder="Please enter blog title">
                  <!--   <p style="color:#A94442" id="usertype_error"></p> -->
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Blog Description</label>

                  <div class="col-sm-10">
                    <textarea class="form-control required" id="blog_desc" name="blog_desc" required placeholder="Please enter blog description"></textarea>
                     <script>
                     // Replace the <textarea id="editor1"> with a CKEditor
                     // instance, using default configuration.
                     CKEDITOR.replace( 'blog_desc',{
                     filebrowserBrowseUrl : '/fileman/index.html',
                     filebrowserImageBrowseUrl : '/fileman/index.html?type=image',
                     removeDialogTabs: 'link:upload;image:upload'
                     });
                     </script>
                  <!--   <p style="color:#A94442" id="usertype_error"></p> -->
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Blog Short Description</label>

                  <div class="col-sm-10">
                    <textarea class="form-control required" id="blogshort_description" name="blogshort_description" required placeholder="Please enter blog short description"></textarea>
                    <!--   <p style="color:#A94442" id="usertype_error"></p> -->
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Blog Image</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control required" id="blog_image" name="blog_image">
                  <!--   <p style="color:#A94442" id="usertype_error"></p> -->
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Blog Status</label>
                  <div class="col-sm-10">
                    <select class="form-control required" name="blog_status" id="blog_status">
                    <option value="">Please Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                   </select>
                  </div>
                </div>
         
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" onclick="return_back()"class="btn btn-default pull-right margin-left  " >Cancel</button>
                <input type="submit" class="btn btn-info pull-right" value="Save">
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
      $("#add_cms").validate();
    </script>

    <script>
  
    function return_back()
    {
      var back_url='<?php echo base_url()?>admin/blog';
      window.location=back_url;
    }
    </script>
