jQuery(document).ready(function($){
	"use strict";

// social hover
	$('ul.hs_footer_menu li a').hover(function(){
		$(this).addClass('animated swing');
		});
	$('ul.hs_footer_menu li a').mouseleave(function(){
		$('ul.hs_footer_menu li a').removeClass('animated swing');
	});	
	
/********** makes sure the whole site is loaded-************/
jQuery(window).load(function() {
        // will first fade out the loading animation
	jQuery("#status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery("#preloader").delay(1000).fadeOut("slow");
	// smooth scroll
	jQuery.smoothScroll();
	// scroll animation 
	var wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
	$('.carousel').carousel({
      interval: 3000
    });
});
$('.bxslider').bxSlider({
  auto: true,
  pager: false,
  speed: 500,
});

$('.bxslider_partner').bxSlider({
  auto: true,
  autoControls: false,
  maxSlides: 4,
  slideWidth: 300,
  slideMargin: 0,
  moveSlides: 1,
  pager: false
}); 
 
 /*************Portfolio- shorting******************/
 jQuery(function () {
		var filterList = { 
			init: function () {
				// MixItUp plugin
				// http://mixitup.io
				jQuery('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			},
			hoverEffect: function () {
				// Simple parallax effect
				jQuery('#portfoliolist .portfolio').hover(
					function () {
						jQuery(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						jQuery(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						jQuery(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						jQuery(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			} 
		};  
		// Run the show!
		filterList.init();
	});	 
 /*************Portfolio- shorting -End******************/
 /*************--Facybox--****/
 //fancybox
	$(".fancybox").fancybox({
          openEffect	: 'elastic',
		  closeEffect	: 'elastic',
		  helpers : 
			{
				overlay: 
				{ 
					locked: false 
				} 
			}
      });
	/*************** Contact-form *****************/
	$.validate({
		form : '#artist_contactform',
		modules : 'security',
		onSuccess : function() {
		contactform();
		return false; // Will stop the submission of the form
		}
	});
	function contactform(){
		$('.artist_loading_images').css('display','block');
		var formdata = $( "#artist_contactform" ).serialize();
		formdata += '&action=artist_sndadminmail';
		$.ajax({
			type : "post",
			url : $('#artist_ajaxurl').val(),
			data : formdata, 
			success: function(response) {
				$('.artist_loading_images').css('display','none');
				$('.artist_infotext').text(response);
				$('#Message').val('');
			}
		});
	}
	/*************** Contact-form *****************/
});//End document ready