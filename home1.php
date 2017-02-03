<?php
/* 
Template Name: Homepage
*/ 
?>
<?php get_header(); ?>
<?php
	 if(parada_ot_get_option( 'parada_header_logo' )!=""){
	 $parada_headerlogo = parada_ot_get_option( 'parada_header_logo' );
     }else{
	 $parada_headerlogo = get_template_directory_uri() . '/images/logo-dark.png';
	 } 
	 $slider_h = parada_ot_get_option( 'slider_h' );
?>	
<?php
	$allcustom = parada_all_pp();
	if (isset($allcustom["parada_header_title"])){$headtitle = $allcustom['parada_header_title'];}else{$headtitle = "";}
	if (isset($allcustom["parada_header_sub_title"])){$headsubtitle = $allcustom['parada_header_sub_title'];}else{$headsubtitle = "";}
	if (isset($allcustom["parada_sidebar_type"])){$side_type = $allcustom['parada_sidebar_type'];}else{$side_type = 0;}
	if ($side_type == 1){$side_select = "right"; $side_offset = ""; $content_offset = "offset-by-one";}else{$side_select = "left"; $side_offset = "offset-by-one"; $content_offset = "";}
	if (isset($allcustom["parada_sidebar"])){$sidebar = $allcustom["parada_sidebar"];}else{$sidebar = "Blog Sidebar";}
	if (isset($allcustom["parada_image_bg"])){$image_bg = $allcustom['parada_image_bg'];}else{$image_bg = "";}
	if (isset($allcustom["parada_portfolio_category"])){$posttype = $allcustom["parada_portfolio_category"];}else{$posttype ='portfolio';} 
    $postcat = "parada_portfoliocategory";
	
?>
<main>
  <section class="main-hero" data-stellar-background-ratio="0.5">
    <header class="header">
      <div class="container-fluid"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="transition"><img src="<?php echo esc_url($parada_headerlogo) ?>" alt="" class="logo"></a>
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
    <div class="banner">
    <div class="slider-content">
      <?php if (function_exists('putRevSlider')) { putRevSlider($slider_h); } ?> 
    </div>
    <!-- end slider-content --> 
    </div>
    <!-- end rev_slider_wrapper --> 
  </section>
  <!-- end main-hero -->
  <?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
</main>
<!-- end main -->
<?php get_footer(); ?>