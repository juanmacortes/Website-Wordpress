<?php
	get_header();
?>
<?php
	$templateurl = get_template_directory_uri();
	
		if ( function_exists( 'parada_ot_get_option') ) {	
        if(parada_ot_get_option( 'parada_header_logo' )!=""){
	    $parada_headerlogo = parada_ot_get_option( 'parada_header_logo' );
        }else{
	    $parada_headerlogo = get_template_directory_uri() . '/images/logo-dark.png';
	    } 
        /* MP4 */
		if ( function_exists( 'parada_ot_get_option') ) {
			if(parada_ot_get_option( 'parada_mp4_link' )!=""){
			 $parada_mp4_link = parada_ot_get_option( 'parada_mp4_link' );
		     }else{
			 $parada_mp4_link = get_template_directory_uri().'/videos/video.mp4';
			 } 				
			}		
	}
	
?>
<section class="int-hero">
	<div class="video">
  <video src="<?php echo esc_url($parada_mp4_link) ?>" loop autoplay muted></video>
	</div>
    <!-- end video -->
  <header class="header">
    <div class="container-fluid"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="transition"><img src="<?php echo esc_url($parada_headerlogo) ?>" alt="" class="logo"></a>
      <div class="menu-btn" id="menu-btn">
        <div class="menu-circle-wrap">
          <div class="wave"></div>
        </div>
        <div class="bars">
          <div class="bar b1"></div>
          <div class="bar b2"></div>
          <div class="bar b3"></div>
        </div>
      </div>
      <!-- end menu-btn --> 
    </div>
    <!-- end container-fluid --> 
  </header>
  <!-- end header -->
  <div class="table-middle text-center">
    <div class="inner">
      <h2><?php esc_html_e('404','parada'); ?></h2>
	  <img src="<?php echo get_template_directory_uri(); ?>/images/shape-gray-wave.png" alt="">
      <div class="clearfix"></div>
      <h6> <?php esc_html_e('OOPS! Page not found','parada'); ?></h6>
    </div>
    <!-- end inner --> 
  </div>
  <!-- end table-middle --> 
</section>
<!-- end int-hero -->
<?php
	  if( is_page_template( '404.php' ) ) {
         get_footer( '-nf' );
      } 
	  else {
         get_footer( '-nf' );
      }
?>