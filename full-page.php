<?php
/* 
Template Name: Full page
*/ 
?>
<?php get_header(); ?>
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
<?php

	$allcustom = parada_all_pp();
	
	if (isset($allcustom["parada_header_title"])){$headtitle = $allcustom['parada_header_title'];}else{$headtitle = "";}
	if (isset($allcustom["parada_header_sub_title"])){$headsubtitle = $allcustom['parada_header_sub_title'];}else{$headsubtitle = "";}
	if (isset($allcustom["parada_image_bg"])){$image_bg = $allcustom['parada_image_bg'];}else{$image_bg = "";}
	
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
      <h2><?php 
				if ($headtitle == "") {
					echo get_the_title();
				} else {
					echo esc_attr($headtitle);
				}
				?></h2>
	  <img src="<?php echo get_template_directory_uri(); ?>/images/shape-gray-wave.png" alt="">
      <div class="clearfix"></div>
      <h6> <?php echo esc_attr($headsubtitle) ?></h6>
    </div>
    <!-- end inner --> 
  </div>
  <!-- end table-middle --> 
</section>
<!-- end int-hero -->
<main>
<div class="page-section">
   <div class="container">
     <?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
	 <?php comments_template( '', true ); ?> 
   </div>
</div>
</main>
<?php get_footer(); ?>