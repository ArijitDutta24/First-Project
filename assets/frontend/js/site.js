// ==============================================
// Javascript Document
// ==============================================

jQuery(document).ready(function($) {

// ==============================================
// Dropdowns
// ==============================================

	var skipContents = $('.skip-content');
	var skipLinks = $('.skip-link');

	skipLinks.on('click', function (e) {
	    e.preventDefault();

	    var self = $(this);
	    // Use the data-target-element attribute, if it exists. Fall back to href.
	    var target = self.attr('data-target-element') ? self.attr('data-target-element') : self.attr('href');

	    // Get target element
	    var elem = $(target);

	    // Check if stub is open
	    var isSkipContentOpen = elem.hasClass('skip-active') ? 1 : 0;

	    // Hide all stubs
	    skipLinks.removeClass('skip-active');
	    skipContents.removeClass('skip-active');

	    // Toggle stubs
	    if (isSkipContentOpen) {
	        self.removeClass('skip-active');
	    } else {
	        self.addClass('skip-active');
	        elem.addClass('skip-active');
	    }
	});

// ==============================================
// Banner
// ==============================================

	$('.flexslider').flexslider({
		animation: "slide"
	});

// ==============================================
// Carousel
// ==============================================

	$('.manufacturing .owl-carousel').owlCarousel({
		loop: true,
		margin: 29,
		responsiveClass: true,
		dots: false,
		responsive: {
			0: {
			items: 1,
			nav: false
			},
			480: {
			items: 1,
			nav: true
			},
			600: {
			items: 2,
			nav: true,
			margin: 15
			},
			1000: {
			items: 3,
			nav: true,
			loop: true
			}
		}
	});

// ==============================================
// Form Fields
// ==============================================

	$("#header-search select, select:not([multiple]), input[type='checkbox']").fancyfields();

// ==============================================
// Accordion
// ==============================================
	
	$( ".accordion" ).accordion({
    	heightStyle: "content"
    });

// ==============================================
// Tab
// ==============================================

	$( "#tabs" ).tabs({
		active: 1
	});

	$( "#edit-product" ).tabs();	

});




































