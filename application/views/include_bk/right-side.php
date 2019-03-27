<div class="col2">
        <div class="listing">
          <ul>
            
            <?php $i=0;
            foreach ($deal as $key => $value) {
              if($i>=3)
              {
                break;
              }
              else{
                $img  = $value['thumb_path'];
                $img1 = explode("-",$img);

                $img2 = explode(".",$img1[1]);
                if($img2[0] == 1 )
                { $i++;
                  
                  $pic = base_url('store/content/products/demo/backupofimages/').$value['thumb_path'];

                ?>
                
            <li>
            	
                <img src= "<?php echo $pic;?>" alt="No Image"><a href="<?php echo base_url();?>store/?pd=<?php echo $value['product'];?>" target="_blank" ><p><?php echo $value['pTitle'];?></p></a>
                
            </li>            
            <?php }}}?>


          </ul>
        </div>
      </div>