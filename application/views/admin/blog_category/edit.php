<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<section class="content-header">
  <h1>Blog Category</h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'admin';?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo base_url('admin/blog_category');?>">Blog Category</a></li>
    <li class="active">Edit</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <?php echo $this->utility->showMsg();?>
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Edit </h3>
        </div>
        <form id="edit_cat_add" name="edit_cat_add" class="form-horizontal" method="post" action="">
          
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Category Name</label>
              <div class="col-sm-6">
              

                <input type="text" class="form-control required" required id="cat_name" name="cat_name" value="<?php if(!empty($category['cat_name'])){ echo $category['cat_name']; } else { echo $categoryDetails['cat_name']; }?>" placeholder="Please enter category name">
              </div>
            </div>
          </div>
            
          <div class="box-footer">
            <button type="button" onclick="return_back()"class="btn btn-default  margin-left  " >Cancel</button>
            <input type="submit" class="btn btn-info " value="Update" id="add">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


 <script type='text/javascript'>
  $("#edit_cat_add").validate();
</script>


 <script type="text/javascript">
  function return_back(){
    var back_url='<?php echo base_url()?>admin/blog_category';
    window.location=back_url;
  }
 </script>