<?php
/* 

Template Name: Search Page

*/ 
?>
<?php get_header(); ?>
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
      <h2><?php esc_html_e('Search','parada'); ?></h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/shape-gray-wave.png" alt="">
      <div class="clearfix"></div>
      <h6><?php esc_html_e('This is what are you looking','parada'); ?></h6>
    </div>
    <!-- end inner --> 
  </div>
  <!-- end table-middle --> 
</section>
<!-- end int-hero -->
<main>
<section class="blog_wrapper about-parada">
  <div class="container">
         <?php
					global $parada_posttype;		 
					$args=array(
						'post_type' => $parada_posttype,
						'posts_per_page' => 10
					);
					$args = 	( $wp_query->query && !empty( $wp_query->query ) )
					? array_merge( $wp_query->query , $args )
					: $args;
					query_posts( $args );
					
          ?>
    <div class="row">
      <div class="col-md-9">
	        <h2 class="sb_title"> <?php print( esc_attr( 'Search Results :', 'parada' ) ); ?></h2>
		    <h5 class="margin-20"> <?php the_search_query() ?> </h5>
		            <?php
                        global $parada_time;
						$parada_newspost = null;
                        $parada_time = get_post_time('j F Y', true,$parada_newspost['ID']); 						
						$paged =
							( get_query_var('paged') && get_query_var('paged') > 1 )
							? get_query_var('paged')
							: 1;
						$args = array(
							'posts_per_page' => 10,
							'paged' => $paged
						);
						$args =
							( $wp_query->query && !empty( $wp_query->query ) )
							? array_merge( $wp_query->query , $args )
							: $args;
						query_posts( $args );
					?>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>  
		<div class="post mb90 <?php get_post_class(); ?>" id="post-<?php the_ID(); ?>">			
			<div class="post-content">
			<h5 class="title bold mt20"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			<p><?php echo parada_excerpt(20); ?></p>
			</div>		
		</div>
		<?php endwhile; ?>
        <?php if(function_exists('parada_pagination')){ parada_pagination(); } ?>
	    <?php else : ?>
        <p><?php esc_html_e('Sorry, but the thing you were looking for is not here !!!', 'parada'); ?></p>
        <?php endif; ?>
		<?php wp_link_pages( $args ); ?>	
		
      </div>
      <!-- end col-9 -->
      <div class="col-md-3">
	  <aside class="blog-sidebar">
        <?php if ( is_active_sidebar( 'parada-sidebar-6' ) ) : ?>
		<?php dynamic_sidebar( 'parada-sidebar-6' ); ?>
		<?php else : ?>
		<div class="text-content">          
		  <p><?php esc_html_e('Add widget here','parada'); ?></p>			
		</div>
		<?php endif; ?>
      </aside>
	  </div>
      <!-- end col-3 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
</main>
<?php get_footer(); ?>