<?php

/* 

Template Name: Page With Sidebar

*/ 

?>

<?php
  get_header();
?>
<?php
	$templateurl = get_template_directory_uri();
	
	if ( function_exists( 'parada_ot_get_option') ) {
        /* Blog homepage */
        if(parada_ot_get_option( 'head_blog_read' )!=""){
		 $parada_head_blog_read = parada_ot_get_option( 'head_blog_read' );		
		 }else{
		 $parada_head_blog_read = esc_attr( 'READ MORE', 'parada' );
	     }	
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
	if (isset($allcustom["parada_sidebar_type"])){$side_type = $allcustom['parada_sidebar_type'];}else{$side_type = 0;}
	if ($side_type == 1){$side_select = "right"; $side_offset = ""; $content_offset = "offset-by-one";}else{$side_select = "left"; $side_offset = "offset-by-one"; $content_offset = "";}
	if (isset($allcustom["parada_sidebar"])){$sidebar = $allcustom["parada_sidebar"];}else{$sidebar = "Blog Sidebar";}
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
      <h4><?php 
				if ($headtitle == "") {
					echo get_the_title();
				} else {
					echo esc_attr($headtitle);
				}
				?></h4>
      <div class="clearfix"></div>
    </div>
    <!-- end inner --> 
  </div>
  <!-- end table-middle --> 
</section>
<!-- end int-hero -->
<main>

<!-- Page With Sidebar Block --> 
<section class="blog_wrapper about-parada">
	  <div class="container"> 
       <div class="row">
        <div class="search_wrapper">
      	   <!-- Start content -->
			
		<?php if ($side_type == 1){ ?>
		<div class="col-md-9 left">
		<div class="page_right">
		<?php } else if ($side_type == 0){ ?>		 
		<div class="col-md-9 right">
		<div class="page_left">
        <?php } ?>
		
                <?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
				
				<div class="clear"></div>
				
				<?php comments_template('', true); ?>
            <?php if($commentsvar) comment_form(); ?>
				
		<?php if ($side_type == 1){ ?>				
		</div>
	    </div>
		<?php } else if ($side_type == 0){ ?>		
        </div>
	    </div>
		<?php } ?>
		 
			<!-- End col-md-9 -->

			<!-- Sidebar -->

		<div class="col-md-3 float_right">
				<aside class="blog-sidebar">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar($sidebar) ) : ?>

	               	<div class="widget">
					  <div class="widget_text">							   
					    <div class="abwrap">                  
							 <p><?php esc_html_e('Add widget here','parada'); ?></p>
						</div>
						<div class="clear"></div>							   
					  </div>						    						
					</div>
                    <div class="padding60"></div>

	            <?php endif; ?>                   
						
				</aside>
		</div>
		  
	
         <div class="clear"></div>
         </div>			 
        </div> <!-- End row -->
			
     </div>		 
</section>	

</main>	 
<?php get_footer(); ?>