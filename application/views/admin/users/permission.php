<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-switch.css">
<script src="<?php echo base_url();?>assets/js/bootstrap-switch.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2/select2.min.css">
<script src="<?php echo base_url();?>assets/plugins/select2/select2.full.min.js"></script>

<script type="text/javascript">
function ajaxFunctionNew(data,url,dataType)
{
        if(!dataType)
            dataType="JSON";
  return $.ajax({
      url:url,
      data:data,
      type:'POST',
      dataType:dataType
    });
}
        jQuery(function($){
                var change_permission=function(data){
                    var targetUrl="<?php echo base_url().'users/change_permission'?>";
                    var obj=ajaxFunctionNew(data,targetUrl);
                    obj.success(function(res){
                        //alert(res);
                    });
                };
                 var form2 = $('#user_form');
                form2.validate({
                        errorElement: 'span', //default input error message container
                        errorClass: 'help-inline', // default input error message class
                        focusInvalid: false, // do not focus the last invalid input
                        ignore: "",
                        rules: {
                            type_name: {
                                required: true,
                            },
                        },
                        /*
                        messages: { // custom messages for radio buttons and checkboxes
                                membership: {
                                        required: "Please select a Membership type"
                                },
                                service: {
                                        required: "Please select  at least 2 types of Service",
                                        minlength: jQuery.format("Please select  at least {0} types of Service")
                                }
                        },

                        errorPlacement: function (error, element) { // render error placement for each input type
                                if (element.attr("name") == "education") { // for chosen elements, need to insert the error after the chosen container
                                        error.insertAfter("#form_2_education_chzn");
                                } else if (element.attr("name") == "membership") { // for uniform radio buttons, insert the after the given container
                                        error.addClass("no-left-padding").insertAfter("#form_2_membership_error");
                                } else if (element.attr("name") == "service") { // for uniform checkboxes, insert the after the given container
                                        error.addClass("no-left-padding").insertAfter("#form_2_service_error");
                                } else {
                                        error.insertAfter(element); // for other inputs, just perform default behavoir
                                }
                        },
                        */
                        invalidHandler: function (event, validator) { //display error alert on form submit   
                                success2.hide();
                                error2.show();
                                App.scrollTo(error2, -200);
                        },

                        highlight: function (element) { // hightlight error inputs
                                $(element)
                                        .closest('.help-inline').removeClass('ok'); // display OK icon
                                $(element)
                                        .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
                        },

                        unhighlight: function (element) { // revert the change dony by hightlight
                                $(element)
                                        .closest('.control-group').removeClass('error'); // set error class to the control group
                        },

                        success: function (label) {
                                if (label.attr("for") == "service" || label.attr("for") == "membership") { // for checkboxes and radip buttons, no need to show OK icon
                                        label
                                                .closest('.control-group').removeClass('error').addClass('success');
                                        label.remove(); // remove error label here
                                } else { // display success icon for other inputs
                                        label
                                                .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
                                        .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
                                }
                        },

                        submitHandler: function (form) {
                                error2.hide();
                                form2.unbind('submit');
                                form2.submit();
                        }

                });
                $(".select2").select2();
                    $('#select').click(function(){
                        $('select[name=modules] option:selected').each(function(i,j){
                            $('#selected_modules')
                                .append($("<option></option>")
                                .attr("value",$(this).val())
                                .attr("selected","selected")
                                .text($(this).text())); 
                            $('select[name=modules] option[value=\''+$(this).val()+'\']').remove();
                            $('.select2').trigger('change.select2');
                        });
                    });
                    $('#unselect').click(function(){
                        $('#selected_modules option').each(function(i,j){
                            if(!$(this).is(':selected'))
                            {
                                $('select[name=modules]')
                                    .append($("<option></option>")
                                    .attr("value",$(this).val())
                                    .text($(this).text())); 
                                $('#selected_modules option[value=\''+$(this).val()+'\']').remove();
                                $('.select2').trigger('change.select2');
                            }
                        });
                    });
                    $('#selected_modules').on("select2:unselect", function(e) { 
                        $('#unselect').trigger('click');
                    });

                    $("input[type=checkbox]").bootstrapSwitch({
                        offColor:'danger'
                    });

                    $("input[name='read_access']").on('switchChange.bootstrapSwitch', function(event, state) {
                        var data={
                            'frmSecurity':'<?php echo $this->utility->getSecurity();?>',
                            'read_access':2,
                            'id':$(this).attr('user-module-id')
                        };
                        if(state==true)
                            data.read_access=1;
                        change_permission(data);

                    });
                    $("input[name='write_access']").on('switchChange.bootstrapSwitch', function(event, state) {
                       var data={
                            'frmSecurity':'<?php echo $this->utility->getSecurity();?>',
                            'write_access':2,
                            'id':$(this).attr('user-module-id')
                        };
                        if(state==true)
                        {
                            data.write_access=1;
                            $(this).closest('tr').find("input[name='read_access']").bootstrapSwitch('state', true, true);
                        }
                        change_permission(data);
                    });
                
        });
</script>
        <section class="content-header">
      <h1>
        Users 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('usertype');?>"> User</a></li>
        <li class="active"> Permission</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
      <?php echo $this->utility->showMsg();?>
        <div class="col-md-12">
    
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Permission </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url().'users/permission/'.$id;?>" method="POST" id="user_form" role="form">
              
                  <div class="span5  col-md-4">
                     <div class="control-group">
                          <label for="firstName" class="control-label">Modules</label>
                          <div class="controls">
                              <select class="form-control select2" multiple="multiple" name="modules" data-placeholder="Select Modules" style="width: 100%;">
                                  <?php
                                  foreach($modules as $value)
                                  {
                                      if(in_array($value['id'],$user_module_ids))
                                          continue;

                                  ?>
                                  <option value="<?php echo base64_encode($value['id'])?>"><?php echo $value['alias'];?></option>
                                  <?php
                                  }
                                  ?>
                              </select>
                          </div>
                     </div>
                  </div>
                  <!--/span-->
                  <div class="span1 col-md-4">
                     <div class="control-group">
                          <label for="firstName" class="control-label"></label>
                          <div class="controls">
                              <a id="select" class="btn icn-only green" href="javascript:void(0)"><i class="m-icon-big-swapright m-icon-white"></i></a>
                              <br/>
                              <a style="display:none" id="unselect" class="btn icn-only" href="javascript:void(0)"><i class="m-icon-swapleft"></i></a>
                          </div>
                     </div>
                  </div>
                  <div class="span5 col-md-4">
                     <div class="control-group">
                          <label for="firstName" class="control-label">Selected Modules</label>
                          <div class="controls">
                              <select class="form-control select2" multiple="multiple" data-placeholder="Select Modules" id="selected_modules" name="selected_modules[]" style="width: 100%;">
                                  <?php 
                                  foreach($user_modules as $value)
                                  {
                                  ?>
                                  <option value="<?php echo base64_encode($value['module_id'])?>" selected="selected"><?php echo $value['alias'];?></option>
                                  <?php
                                  }
                                  ?>
                              </select>
                          </div>
                     </div>
                  </div>
                  <!--/span-->
                  
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" onclick="return_back()"class="btn btn-default pull-right margin-left  " >Cancel</button>
                <input type="submit" class="btn btn-info pull-right" value="Save">
              </div>
              <input type="hidden" name="frmSecurity" value="<?php echo $this->utility->getSecurity();?>"/>
              <input type="hidden" name="edit_id" value="0"/>
              <!-- /.box-footer -->
            </form>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Module</th>
                    <th class="no_sort">Read</th>
                    <th class="no_sort">Read & Write</th>
                    <th>Date</th>
                </tr>
                </thead>
                <?php if(!empty($user_modules))
                      { 
                         ?>
                <tbody>
               <?php  foreach($user_modules as $key=>$value)
                      {  echo $value['modules'];?>
                        <tr>
                          <td><?php echo $key+1?></td>
                          <td><?php echo $value['alias']?></td>
                          <td><input id="switch-size" user-module-id="<?php echo base64_encode($value['id']);?>" name="read_access" type="checkbox" <?php echo ($value['read_access'])?'checked':''?> data-size="mini"></td>
                          <td><input id="switch-size" user-module-id="<?php echo base64_encode($value['id']);?>" name="write_access" type="checkbox" <?php echo ($value['write_access'])?'checked':''?> data-size="mini"></td>
                          <td><?php echo (!empty($value['date_of_creation']))?date('d-M-Y h:i A',$value['date_of_creation']):''?></td>
                        </tr>

               <?php } ?>

                </tbody>
                <?php } ?>
                <tfoot>
               
                </tfoot>
              </table>
          </div>
          <!-- /.box -->
         
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
   <script type='text/javascript'>
      $("#add_skill").validate();
    </script>
    <script>
      function return_back()
      {
        var back_url='<?php echo base_url()?>users';
        window.location=back_url;
      }
   </script>