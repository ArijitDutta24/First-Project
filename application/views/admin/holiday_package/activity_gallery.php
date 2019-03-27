<section class="content-header">
    <h1>
        Gallery
    </h1>
    <ol class="breadcrumb">
         <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('admin/holiday_package_activity'); ?>">Holiday Activity</a></li>
        <li class="active"> Add New Image</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <?php echo $this->utility->showMsg(); ?>
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add </h3>
                </div>
                <form id="package_gallery" name="eating_gallery" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Upload Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="required" id="activity_image"  name="activity_image[]"  placeholder="upload image" multiple>
                            <div class="gallery"></div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="button" onclick="return_back()" class="btn btn-default pull-right margin-left " >Cancel</button>
                        <input type="submit" class="btn btn-info pull-right" value="Save">
                    </div>
                    <input type="hidden" name="frmSecurity" value="<?php echo $this->utility->getSecurity(); ?>"/>
                </form>
                <div>
                    <?php
                    if (!empty($activity_gallery))
                        foreach ($activity_gallery as $key => $value) {
                            echo"  <img src='" . base_url() . "assets/uploads/activity_images/" . $value['activity_image'] . "' height='100'> ";
                            echo '<a href="' . base_url() . 'admin/holiday_package_activity/delImage/' . base64_encode($value['id']) . '/' . base64_encode($value['activity_id']) . '" style="position: absolute; margin-left: -17px" onclick="return confirm(\'Are You Sure?\')"><i class="fa fa-close"></i></a> ';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script type='text/javascript'>
    $("#package_gallery").validate({
        rules: {
        },
        highlight: function (element) { // hightlight error inputs
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
        },
    });

    $(document).ready(function () {
        $(".select2").select2();
    });

   function return_back()
    {
        var back_url = "<?php echo base_url() ?>admin/holiday_package_activity/gallery/<?php  echo $this->uri->segment(4); ?>";
        window.location = back_url;
    }


    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('height', '100').attr('src', event.target.result).appendTo(placeToInsertImagePreview).after('&nbsp;&nbsp;');
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        $("#activity_image").change(function() {
            imagesPreview(this, ".gallery");
        });
    });
</script>
