<?php //print_r($usertype);exit; ?>
    <section class="content-header">
      <h1>
        Metatags
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Metatags List</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <?php echo $this->utility->showMsg();?>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Metatags Management</h3>
              <!-- <a class="btn btn-primary margin-right pull-right" href="<?php //echo base_url()?>admin/cms/add">Add New CMS</a> -->  
            </div>
               
              <div></div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Meta Title</th>
                  <th>Meta Keywords</th>
                  <th>Meta Description</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                 <?php if(count($metatags)>0)
                {?>
                <tbody>
               <?php
                foreach ($metatags as $data) 
                {
                ?>
                <tr>
                  <td><?php echo $data['meta_title'];?></td>
                  <td><?php echo $data['meta_keywords'];?></td>
                  <td><?php echo substr($data['meta_desc'], 0, 200);?></td>
                	<td>
                      <a href="<?php echo base_url();?>admin/metatags/edit/<?php echo base64_encode($data['id']);?>" title="Edit"><span class="fa fa-pencil-square-o"></span></a>
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
   
    
    <script>
  $(function () {
    $("#example1").DataTable();
  });
</script>