<div class="col2">
        <div class="listing">
          <ul>
            
            <?php 
            // $i=0;
            foreach ($deal as $key => $value) {
              // if($i>=3)
              // {
              //   break;
              // }
              // else{
                // $img  = $value['thumb_path'];
                // $img1 = explode("-",$img);

                // $img2 = explode(".",$img1[1]);
                // if($img2[0] == 1 )
                // { 
                // $i++;
                  
                  $pic = base_url('store/content/products/demo/').$value['thumb_path'];

                  $title = word_limiter($value['pTitle'],6);


                ?>
                
            <li>
            	
                <a href="<?php echo base_url();?>packages_details/<?php echo base64_encode($value['product']);?>"><img src= "<?php echo $pic;?>" alt="No Image"><p><?php echo $title;?></p></a>
                
            </li>            
            <?php 
            //   }
            // }
          }?>


          </ul>
        </div>
      </div>