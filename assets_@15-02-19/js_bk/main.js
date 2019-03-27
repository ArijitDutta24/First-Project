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

 $('.detailsBanner').owlCarousel({
      loop:true,
      animateOut: 'fadeOut',
      margin:10,
      nav:true,
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

 // ACCORDIAN
 $(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {
            el: this.el,
            multiple: this.multiple
        }, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        };

    }

    var accordion = new Accordion($('#accordion'), false);

});





// MODAL
$(function () {
  $('.js__popup1').popup({
    background: true,
        center: false,
  });
  
});
 $(function () {
  
  $('.js__popup2').popup({
    background: true,
        center: false,
  });
  
});
// Shopping cart plus minus buttn
jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});