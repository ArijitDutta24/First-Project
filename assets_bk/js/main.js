// HEADER MENU
$(document).ready(function() { 
    
 $('#mobile_menu').click(function(event){       
    event.stopPropagation();        
     $(".header_nav").slideToggle();
  });

 $('.homeBanner').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      autoplay:true,
      dots:false,
      items:1
  })
 

});

var viewportWidth = $(window).width();
if (viewportWidth < 639) {      
  $('#thumb-gallery').royalSlider({  
    transitionType:'move'       
  });
  $(document).on("click", function(event){
        var $trigger = $(".header_nav");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".header_nav").slideUp();
        }            
    });
}

 