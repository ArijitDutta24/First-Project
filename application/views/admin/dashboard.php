<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

         <?php echo $this->utility->showMsg();?>
        <div class="row">

          <div class="col-md-10 col-sm-8 col-xs-12">
              <h1>Currency Management</h1>
              <h3><span>USD</span></h3>
              <h5>USD$ 1</h5>
              <?php
              foreach ($curr as $val) {
               ?>
               <div id="textDisplay">
                  <h3><span><!-- <?php //echo $val['curr_name'];?> -->RTGS</span></h3>
                  
                  <h5 id="display"><?php echo currency(1, $val['curr_rate'], $val['curr_name']);?></h5>
                  <a href="#" onclick="edit()">Edit</a>
              </div>
            
              <div style="display: none;" id="inputDisplay">
                <h3><span><!-- <?php //echo $val['curr_name'];?> -->RTGS</span></h3>
                <input type="text" name="RTGS" value="<?php echo $val['curr_rate'];?>" placeholder="value" required="" id="rtgs">&nbsp;&nbsp;&nbsp;<button>Save</button>
                <input type="hidden" name="RTGSid" value="<?php echo $val['id'];?>" id="rtgsid">
              </div>
              <?php } ?>
         </div>

      
        <!-- /.col -->
       <!--  <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-product-hunt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Product</span>
              <span class="info-box-number"><?php if(count($product)>0) echo count($product); else echo "0";?></span>
            </div> -->
            <!-- /.info-box-content -->
          <!-- </div> -->
          <!-- /.info-box -->
        <!-- </div>--> 
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sell Enquiry</span>
              <span class="info-box-number"><?php if(count($sell)>0) echo count($sell); else echo "0";?></span>
            </div> -->
            <!-- /.info-box-content -->
          <!-- </div> -->
          <!-- /.info-box -->
        <!-- </div> -->
        <!-- /.col -->
        
        <!-- /.col -->
      </div>

    </section>
    <!-- /.content -->
    <script type="text/javascript">
      
      function edit() {
        
        $('#inputDisplay').css('display', 'block');
        $('#textDisplay').css('display', 'none');
      }


      $('button').on('click', function(){
          // alert('hi');
          var value = $('#rtgs').val();
          var id    = $('#rtgsid').val();
          $.ajax({
            url : "<?php echo base_url('admin/Dashboard/update');?>",
            method : "POST",
            data : {'val' :value, 'id' : id},
            success : function(data)
            {
              // alert(data);
              $('#inputDisplay').css('display', 'none');
              $('#textDisplay').css('display', 'block');
              $('#display').html(data);
            }

          });
      });
    </script>