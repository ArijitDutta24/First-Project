<footer>
    	<div class="container">
    		<ul>
    			<li>Copyright © 2018 Heritage Expeditions Africa.</li>
    			<li><?php echo $contact[20]['setting_value'];?></li>
    			<li><?php echo $contact[14]['setting_value'];?>; <br><a href="mailto:<?php echo $contact[3]['setting_value'];?>" style="color: white;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='white'"><?php echo $contact[3]['setting_value'];?> </a></li>
    			<li>
    				<a href="<?php echo $contact[8]['setting_value'];?>" target="_blank"><img src="<?php echo base_url();?>assets/images/facebook.png" alt=""></a>
    				<a href="<?php echo $contact[10]['setting_value'];?>" target="_blank"><img src="<?php echo base_url();?>assets/images/linked-in.png" alt=""></a>
    				<a href="<?php echo $contact[9]['setting_value'];?>" target="_blank"><img src="<?php echo base_url();?>assets/images/twitter.png" alt=""></a>
    			</li>
    		</ul>
    	</div>
    </footer>
      <!-- JQUERY LIB -->
     <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>  
  
      <!-- SLIDER JS -->     
      <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>  
      <script src="<?php echo base_url();?>assets/js/main.js"></script>
      <script type="text/javascript">
$(function()
{ 
   
    
    $("#read_More").on('click', function (e) {
        e.preventDefault();
    
        $("#full_content").css('overflow','scroll');
        $("#full_content").scroll();
        $('#read_More').css('display','none');
        $('#read_Less').css('display','block');

    });
    $("#read_Less").on('click', function (e) {
        e.preventDefault();
        $("#full_content").animate({ scrollTop: 0}, 'slow');
        $("#full_content").css('overflow','hidden');
        $('#read_More').css('display','block');
        $('#read_Less').css('display','none');

    });

  
});

    
</script>  
   </body>
</html>