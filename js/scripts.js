// JavaScript for Themezinho items
(function($) {
jQuery(document).ready(function() {
	"use strict";
	
	jQuery(window).load(function(){
		jQuery("body").addClass("page-loaded");	
	});
	
	// Fancybox
		jQuery(".fancybox").fancybox({
		helpers: {
		overlay: {
		  locked: false
			}
		  }
		});
		
	
	// Scroll down opacity
		var divs = jQuery('.int-hero .inner');
		jQuery(window).on('scroll', function() {
		var st = jQuery(this).scrollTop();
		divs.css({ 'opacity' : (1 - st/300) });
		});
		
		
	// Hamburger Menu
		jQuery('.menu-btn').on('click', function(e) {
		jQuery(".menu-btn").toggleClass("active");
		jQuery(".bars .bar").toggleClass("rotated");
		jQuery(".header img").toggleClass("light");
		jQuery(".navigation").toggleClass("active");
		jQuery(".navigation ul li").toggleClass("active");
		jQuery("body").toggleClass("overflow-hidden");
		});
		
		
	// Page transition
		jQuery('.transition').on('click', function(e) {
      	jQuery('.transition-overlay').toggleClass("show-me");
	    });
		
		
	// Transition delay
		jQuery('.transition').on('click', function(e) {
    	e.preventDefault();                  
    	var goTo = this.getAttribute("href"); 
		setTimeout(function(){
         window.location = goTo;
    	},1000);       
		}); 
		
		
	
	// Parallax Effect
		jQuery.stellar({
			horizontalScrolling: false,
			verticalOffset: 0,
			responsive:true
		});
		
	
	
	});
	
	// Wow animations
		wow = new WOW(
      	{
       		animateClass: 'animated',
        	offset:0
      	}
    	);
    	wow.init();
		
	
	// Isotope works filter
		jQuery(window).load(function(){
			var $container = jQuery('.works ul');
			$container.isotope({
			filter: '*',
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		   }
		});
		
		jQuery('.filter li a').on('click', function(e) {	 
		jQuery('.filter li a.current').removeClass('current');
		jQuery(this).addClass('current');
	 
		var selector = jQuery(this).attr('data-filter');
		$container.isotope({
			filter: selector,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
			}
		});
			return false;
		});
		});
		
		
		// COUNTER EFFECT
	var n = document.getElementById("counter");
		if (n == null) {
	} 
	else {
	
	var lastWasLower = false;
		jQuery(document).scroll(function(){
		
		var p = jQuery( "#counter" );
		var position = p.position();
		var position2 = position.top;
	
		if (jQuery(document).scrollTop() > position2-300){
		if (!lastWasLower)
			jQuery('#1').html('98');
			jQuery('#2').html('54000');
			jQuery('#3').html('248');
	
		lastWasLower = true;
			} else {
		lastWasLower = false;
		}
		});		
	};

})(jQuery);