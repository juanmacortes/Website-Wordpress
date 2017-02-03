<?php

/*  Load JS  */

function parada_add_our_scripts() {
        wp_enqueue_script('jquery');
		wp_enqueue_script( 'bootstrap.min', parada_PAGES_JAVASCRIPT .'/bootstrap.min.js',array('jquery'), '', true);
		wp_enqueue_script( 'stellar', parada_PAGES_JAVASCRIPT .'/stellar.min.js',array('jquery'), '', true);	
		wp_enqueue_script( 'wow', parada_PAGES_JAVASCRIPT .'/wow.js',array('jquery'), '', true);
		wp_enqueue_script( 'isotope', parada_PAGES_JAVASCRIPT .'/isotope.min.js',array('jquery'), '', true);
		wp_enqueue_script( 'fancybox', parada_PAGES_JAVASCRIPT .'/jquery.fancybox.js',array('jquery'), '', true);		
		wp_enqueue_script( 'odometer', parada_PAGES_JAVASCRIPT .'/odometer.min.js',array('jquery'), '', true);
		wp_enqueue_script( 'fitvids', parada_PAGES_JAVASCRIPT .'/jquery.fitvids.js',array('jquery'), '', true);	
		  
		//flex
	    if(is_page_template('home1.php') || is_page_template('home2.php') || is_page_template('home3.php') || is_page_template('home4.php') || is_page_template('index.php') || is_page_template('single.php')) {
		wp_enqueue_script( 'flexslider', parada_PAGES_JAVASCRIPT .'/jquery.flexslider.js',array('jquery'), '', true);
		wp_enqueue_script( 'parada_flexslider_custom', parada_PAGES_JAVASCRIPT .'/flexslider.js',array('jquery'), '', true);
     	}
        
		//validate
	    if(is_page_template('contact.php')) {
        wp_enqueue_script('parada_google_maps_api', 'https://maps.googleapis.com/maps/api/js?v=3', '', 1.0 );			
		wp_enqueue_script( 'google-maps', parada_PAGES_JAVASCRIPT .'/google-maps.php',array('jquery'), '', true);
		wp_enqueue_script( 'validate', parada_PAGES_JAVASCRIPT .'/jquery.validate.min.js',array('jquery'), '', true);
     	}
		
		wp_enqueue_script( 'parada_script', parada_PAGES_JAVASCRIPT .'/scripts.js',array('jquery'), '', true);
		if(is_singular()) 	
			wp_enqueue_script( 'parada_comment-reply' );
}
add_action('wp_enqueue_scripts', 'parada_add_our_scripts');

?>