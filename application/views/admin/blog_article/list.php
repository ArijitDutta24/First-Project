<?php 
//print_r($blog_article_details);exit; 
?>
    <section class="content-header">
      <h1>
        Blog Article
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin';?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('admin/blog_article');?>">Blog Article</a></li>
        <li class="active">List</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <?php echo $this->utility->showMsg();?>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Management</h3>
              <a class="btn btn-primary margin-right pull-right" href="<?php echo base_url()?>admin/blog_article/add">Add</a>
            </div>
               
            <div></div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Blog Name</th>
                  <th>Description</th>
				          <th>Display Order</th>
				          <th>Logo</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                 <?php if(count($blog_article)>0)
                {?>
                <tbody>
               <?php
                $i=1;
                foreach ($blog_article as $data) 
                {
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $data['blog_title']; ?></td>
                    <td><?php echo limit_text($data['blog_desc'], 100) ?></td>
					          
					<td>
					<?php
					  if($data['display_order']>1 && $data['display_order'] < count($blog_article)+1){
                      ?>
                      <a href="<?php echo base_url();?>admin/blog_article/display_order/<?php echo $data['display_order'];?>/1/<?php echo $data['blog_id'];?>" title="Up"><span class="fa fa-arrow-up"></span></a>
                      <?php
                      }
					  if($data['display_order']>0 && $data['display_order'] < count($blog_article)){
                      ?>
                      <a href="<?php echo base_url();?>admin/blog_article/display_order/<?php echo $data['display_order'];?>/2/<?php echo $data['blog_id'];?>" title="Down"><span class="fa fa-arrow-down"></span></a>
                      <?php
                      }
                      ?>
					</td>
                
                <?php
                       if($data['logo_path'])
                         {
                            $img = base_url('assets/uploads/blog_images/thumb/').$data['logo_path'];
                         }
                         else
                         {
                           $img = base_url('assets/uploads/blog_images/noimg_usr.jpg');
                         }
                         ?>

                         <td> <img src="<?php echo  $img; ?>"></td>
                   



                    <td>
                      <a href="<?php echo base_url();?>admin/blog_article/edit/<?php echo base64_encode($data['blog_id']);?>" title="Edit"><span class="fa fa-pencil-square"></span></a>
                      
                       <a href="<?php echo base_url();?>admin/blog_article/delete/<?php echo base64_encode($data['blog_id']);?>" onclick="return confirm('Are You Sure To Delete');" title="Delete"><span class="fa fa-trash-o"></span></a>
					  <?php
                      if($data['staus']==1){
                      ?>
                      <a href="<?php echo base_url();?>admin/blog_article/article_status/<?php echo base64_encode($data['blog_id']);?>/0" title="Inactive" onclick="return confirm('Are you sure to inactive ?');"><span class="fa fa-check"></span></a>
                      <?php
                      }else{
                      ?>
                      <a href="<?php echo base_url();?>admin/blog_article/article_status/<?php echo base64_encode($data['blog_id']);?>/1" title="Active" onclick="return confirm('Are you sure to active ?');"><span class="fa fa-times"></span></a>
                      <?php
                      }
                      ?>
					  <?php if($data['is_home']==0){?>
                        <a href="<?php echo base_url();?>admin/blog_article/visibility/<?php echo base64_encode($data['blog_id']);?>/1" title="Make shows in home page" onclick="return confirm('Are you sure to show in Home page ?');"><span class="fa fa-eye-slash"></span></a>
                      <?php } else { ?>
                        <a href="<?php echo base_url();?>admin/blog_article/visibility/<?php echo base64_encode($data['blog_id']);?>/0" title="Make not shows in home page" onclick="return confirm('Are you sure to not show in Home page ?');"><span class="fa fa-eye"></span></a>
                      <?php } ?>
                    </td> 
                </tr>

               <?php $i++; } ?>

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
