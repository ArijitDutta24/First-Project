<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>   
<section class="content-header">
    <h1>
        New Banner
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>/admin/Banner">New Testiminial</a></li>
        <li class="active"> Add New</li>
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
                    <h3 class="box-title">Add</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form id="add_sell_product" name="add_sell_product" class="form-horizontal" method="post" action="" enctype="multipart/form-data" onsubmit="return formValidation();">
                    <div class="box-body">

                       <div class="form-group">
                          <label class="col-sm-2 control-label">Banner Image Status*</label>
                          <div class="col-sm-10">
                            <select class="form-control required" name="banner_status" id="banner_status" required>
                            <option value="">Please Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                           </select>
                          </div>
                       </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Image Flow* Number</label>
                            <div class="col-sm-10">
                                <input type="text" name="flow" id="flow" required class="form-control required" placeholder="example: 1">
                            </div>
                        </div>


                        
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Banner Picture*</label>
                            <div class="col-sm-10">
                                <input type="file" id="banner_image" name="banner_image" placeholder="Upload Banner Picture" accept="image/*" required>
                            </div>
                        </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="button" onclick="return_back()"class="btn btn-default pull-right margin-left  " >Cancel</button>
                        <input type="submit" class="btn btn-info pull-right" value="Save">
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