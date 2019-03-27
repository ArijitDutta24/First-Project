<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<section class="content-header">
  <h1>Blog Article</h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'admin';?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo base_url('admin/blog_article');?>">Blog Article</a></li>
    <li class="active">Add</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <?php echo $this->utility->showMsg();?>
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Add </h3>
        </div>
        <form id="add_cat_add" name="add_cat_add" class="form-horizontal" method="post" action="" enctype="multipart/form-data" onsubmit="return formValidate();">
           
          
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Meta Tag</label>
              <div class="col-sm-6">
              <input type="text" class="form-control required" required id="meta_title" name="meta_title"  placeholder="Please enter meta title">
                <p style="color:#b3975b !important">Please enter details with comma seperators</p>
              </div>
            </div>
          </div>
           
          
          
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Meta Description</label>
              <div class="col-sm-6">
             <textarea name="meta_description" id="meta_description" class="form-control required" required style="width:680px;height:175px;"></textarea>
              </div>
            </div>
          </div>
          
          
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Intro Text</label>
              <div class="col-sm-6">
              <textarea name="intro_text" id="intro_text" class="form-control required" required style="width:680px;height:175px;"></textarea>
              </div>
            </div>
          </div>
          
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Blog Category </label>
              <div class="col-sm-6">
                <select name="cat_id" id="cat_id" class="form-control required" required>
                  <option value="">Select Category</option>
                  <?php 
                  if(!empty($category_list))
                  {
                    foreach($category_list as $row)
                    {
                      if($row['cat_id']==$blogDetails['cat_id'])
                      {
                        $selected_catgory = "selected";
                      }
                      else
                      {
                        $selected_catgory = "";
                      }
                  ?>
                  <option value="<?php echo $row['cat_id']; ?>" <?php echo $selected_catgory;?>><?php echo $row['cat_name']; ?></option>
                  <?php 
                    } 
                  } 
                  ?>   
                </select>
              </div>
            </div>
          </div>

          
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Blog Title</label>
              <div class="col-sm-6">
              <input type="text" class="form-control required" required id="blog_title" name="blog_title" placeholder="Please enter blog title">
              </div>
            </div>
          </div>
      
          
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Blog Descriotion</label>
              <div class="col-sm-10">
              <textarea name="blog_desc" id="blog_desc" class="form-control"></textarea>
                <script>
               CKEDITOR.replace( 'blog_desc',
               {
                        filebrowserBrowseUrl : '/fileman/index.html',
                        filebrowserImageBrowseUrl : '/fileman/index.html?type=image',
                        removeDialogTabs: 'link:upload;image:upload'
                });
                </script> 
                <label id="blog_desc_error" style="color:red;"></label>
              </div>

            </div>
          </div>
          
		  <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Logo</label>
              <div class="col-sm-6">
                <input type="file" class="form-control" id="logofile" name="logo_path" value="">
              </div>
            </div>
          </div>
          <div class="box-footer">
            <button type="button" onclick="return_back()"class="btn btn-default  margin-left  " >Cancel</button>
            <input type="submit" class="btn btn-info " value="Add" id="add">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
 <script type='text/javascript'>
  $("#add_cat_add").validate();
  function formValidate() 
  {
      
      if (CKEDITOR.instances['blog_desc'].getData() == '') 
      {
          $('#blog_desc_error').html("This field is required.");
          return false;
      }
      else
      {
          $('#blog_desc_error').html("");
          return true;
      }
  }
</script>
 <script type="text/javascript">
  function return_back(){
    var back_url='<?php echo base_url()?>admin/blog_article';
    window.location=back_url;
  }
 </script>

 
