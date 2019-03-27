<!DOCTYPE html>
<html>
<?php $this->load->view('admin/includes/header');?>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Validation -->
<script src="<?php echo base_url();?>assets/js/jquery-validation/dist/jquery.validate.min.js"></script>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/includes/top_header_menu');?>

  <?php $this->load->view('admin/includes/navbar');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $content;?>
  </div>
  <!-- /.content-wrapper -->
  
  <?php $this->load->view('admin/includes/footer');?>

  <!-- Control Sidebar -->
  <?php //$this->load->view('includes/right_side_settings');?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<!-- <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script> -->
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>

<!-- Data table -->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/angular.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>
</body>
</html>
