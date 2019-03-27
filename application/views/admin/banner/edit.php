<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>   
<section class="content-header">
    <h1>
        Banner
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>/admin/Banner">Banner</a></li>
        <li class="active"> Edit Banner</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <?php echo $this->utility->showMsg(); ?>
        <!-- right column -->
        <div class="col-md-12">

            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form id="add_sell_product" name="add_sell_product" class="form-horizontal" method="post" action="" enctype="multipart/form-data" onsubmit="return formValidation();">
                   



                    <input type="hidden" name="existing_image" id="existing_image" value="<?php echo $banner['banner_image'];?>">
                    <div class="box-body">

                        
                        

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Image Flow Number</label>
                            <div class="col-sm-10">
                                <input type="text" name="flow" id="flow" required class="form-control required" value="<?php echo $banner['flow_num'];?>">
                            </div>
                        </div>



                        
                        
                        <?php
                        if($banner['banner_image']!=''){
                            $image_file_path = 'assets/uploads/banner_image/'.$banner['banner_image'];
                            if(file_exists($image_file_path)){
                        ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Uploaded Banner Image</label>
                            <div class="col-sm-10">
                                <img src="<?php echo base_url();?>assets/uploads/banner_image/<?php echo $banner['banner_image'];?>" style="height: 100px; width: 100px;">
                            </div>
                        </div>
                        <?php
                            }
                        }
                        ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Update Banner Image</label>
                            <div class="col-sm-10">
                                <input type="file" id="banner_image" name="banner_image" placeholder="Upload Banner Image" accept="image/*">
                            </div>
                        </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="button" onclick="return_back()" class="btn btn-default pull-right margin-left  " >Cancel</button>
                        <input type="submit" class="btn btn-info pull-right" value="Update">
                    </div>
                    <!-- /.box-footer -->
                    <input type="hidden" name="frmSecurity" value="<?php echo $this->utility->getSecurity(); ?>"/>
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
    $("#add_sell_product").validate({
        rules: {
            product_price: {
                required: true,
                number: true
            }
        }

    });
</script>

<script>

    function return_back()
    {
        var back_url = '<?php echo base_url() ?>admin/Banner';
        window.location = back_url;
    }

    
    function formValidation(){
        if (CKEDITOR.instances['descrip'].getData() == '') {
            $('#product_description_error').html("This field is required.").show();
            return false;
        } else {
            $('#product_description_error').html("").hide();
        }

    }
</script>