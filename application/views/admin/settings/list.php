
    <section class="content-header">
      <h1>
        Settings
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Settings List</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <?php echo $this->utility->showMsg();?>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Settings Management</h3>

            </div>
               

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Setting</th>
                  <th>Setting Value</th>
                  <th class="hidden-480">Action</th>
                 
                </tr>
                </thead>
                 <?php if(count($settings)>0)
                {?>
                <tbody>
               <?php
                foreach ($settings as $key=>$value) 
                {
                ?>
                <tr>
                	    <td><?php echo $key+1;?></td>
                      <td><?php echo $value['setting_name'];?></td>
                      <td>
                      <?php 
                        if($value['is_image'])
                        {
                      ?>
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                            <img alt="<?php echo $value['setting_value'];?>" src="<?php echo (!empty($value['setting_value']))?base_url().'assets/uploads/site_settings/'.$value['setting_value']:'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image';?>">                        
                          </div>
                         </div>
                      <?php
                        }
                        else
                          echo $value['setting_value'];
                      ?>
                      </td>
                      <td>
                        
                        <a href="<?php echo base_url();?>admin/settings/edit/<?php echo base64_encode($value['slug']);?>" title="Edit"><span class="fa fa-pencil-square-o"></span></a>
  
                      </td> 
                </tr>

               <?php } ?>

                </tbody>
                <?php } ?>
                <tfoot>
               
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>