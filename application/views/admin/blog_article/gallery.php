<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<section class="content-header">
  <h1>Blog Article</h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'admin';?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo base_url('admin/blog_article');?>">Blog Article</a></li>
    <li class="active">Gallery</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <?php echo $this->utility->showMsg();?>
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Gallery </h3>
        </div>
        <form id="add_cat_add" name="add_cat_add" class="form-horizontal" method="post" action="" enctype="multipart/form-data" onsubmit="return formValidate();">
          <div class="form-group">
            <label class="col-sm-2 control-label">Gallary Image</label>
            <div class="col-sm-6">
              <input type="file" name="article_image[]" value="Upload" class="form-control" multiple="multiple">
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Gallery Video</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="video_url" name="video_url" value="" placeholder="Please enter gallery video">
                <p>( Eg: https://player.vimeo.com/video/XXXXXXX )</p>
              </div>
            </div>
          </div>
          <div class="box-body">
            <?php
            if(count($gallery_list)>0){
              foreach($gallery_list as $gallery){
                if($gallery['type']==2){
            ?>
            <div class="col-sm-4">
              <?php
              //$videoUrl = 'http://www.youtube.com/embed/'.$gallery['path'];
				$videoUrl = $gallery['path'];
              ?>
              <iframe width="200" height="125" src="<?php echo $videoUrl;?>"> </iframe>
              <a href="<?php echo base_url()?>admin/blog_article/delete_gallery/<?php echo base64_encode($gallery['gallery_id']);?>/<?php echo base64_encode($gallery['b_article_id']);?>" class="" onclick="return confirm('Are you sure')"><i class="fa fa-trash tooltipstered"></i></a>
              <p>&nbsp;</p>
            </div>
            <?php
                }if($gallery['type']==1){
                  $explode_path = explode('.',$gallery['path']);
                  $image_name = $explode_path[0].'_thumb.'.$explode_path[1];
                  //echo $image_name;
                  $file_path = 'assets/uploads/blog_images/350_thumb/'.$image_name;
                  if(file_exists($file_path)){
                    $image_path = base_url().'assets/uploads/blog_images/350_thumb/'.$image_name;
            ?>
            <div class="col-sm-4">
              <img src="<?php echo $image_path;?>" width="200" height="125">
              <a href="<?php echo base_url()?>admin/blog_article/delete_gallery/<?php echo base64_encode($gallery['gallery_id']);?>/<?php echo base64_encode($gallery['b_article_id']);?>" class="" onclick="return confirm('Are you sure')"><i class="fa fa-trash tooltipstered"></i></a>
              <p>&nbsp;</p>
            </div>
            <?php
                  }
                }if($gallery['type']==3){
            ?>
            <div class="col-sm-4">
              <?php
              //$ViemovideoUrl = 'https://player.vimeo.com/video/'.$gallery['path'];
				$ViemovideoUrl = $gallery['path'];
              ?>
              <iframe width="200" height="125" src="<?php echo $ViemovideoUrl;?>"> </iframe>
              <a href="<?php echo base_url()?>admin/blog_article/delete_gallery/<?php echo base64_encode($gallery['gallery_id']);?>/<?php echo base64_encode($gallery['b_article_id']);?>" class="" onclick="return confirm('Are you sure')"><i class="fa fa-trash tooltipstered"></i></a>
              <p>&nbsp;</p>
            </div>
            <?php
                }
              }
            }
            ?>
            
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
  function formValidate() {
      
      if (CKEDITOR.instances['blog_desc'].getData() == '') {
          $('#blog_desc_error').html("This field is required.");
          return false;
      }else{
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
