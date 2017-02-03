<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
    <!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php	
if ( function_exists( 'parada_ot_get_option') ) {
   $favicon = parada_ot_get_option( 'favicon' );	
   }
if ( ! function_exists( 'wp_site_icon' ) ) {
     echo '<link rel="shortcut icon" href="'.esc_url($favicon).'" type="image/gif"/>';
}
 ?>
  		<?php
				if(parada_ot_get_option( 'parada_header_logo' )!=""){
				   $parada_headerlogo = parada_ot_get_option( 'parada_header_logo' );
				   }else{
				   $parada_headerlogo = get_template_directory_uri() . '/images/logo-light.png';
				  }
				/* MP4 */
				if ( function_exists( 'parada_ot_get_option') ) {
						if(parada_ot_get_option( 'parada_mp4_link' )!=""){
						   $parada_mp4_link = parada_ot_get_option( 'parada_mp4_link' );
						   }else{
						   $parada_mp4_link = get_template_directory_uri().'/videos/video.mp4';
						  } 				
					}
        ?>	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="preloader"></div>
<!-- end preloader -->
<div class="transition-overlay"></div>
<!-- end transition-overlay -->
<div class="navigation">
  <div class="video">
    <video src="<?php echo esc_url($parada_mp4_link) ?>" loop autoplay muted></video>
  </div>
  <!-- end video -->
  <div class="table-middle">
       <div class="inner">
                 <?php
					if (has_nav_menu('main_menu')) {		  
					$parada_header_menu_args = array(	
					'theme_location' => 'main_menu',								  
					'menu_id' => '', 
					'menu_class' => '',
					'echo' => true,
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'depth' => 0								  
					 );
					wp_nav_menu( $parada_header_menu_args );	
						}				
					?>
	   </div>
    <!-- end inner --> 
  </div>
  <!-- end table-middle --> 
</div>
<!-- end navigation -->