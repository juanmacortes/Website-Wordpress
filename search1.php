<?php
/* 

Template Name: Search Page

*/ 
?>
<?php get_header(); ?>
<?php

	$allcustom = parada_all_pp();
	
	if (isset($allcustom["parada_header_title"])){$headtitle = $allcustom['parada_header_title'];}else{$headtitle = "";}
	if (isset($allcustom["parada_header_sub_title"])){$headsubtitle = $allcustom['parada_header_sub_title'];}else{$headsubtitle = "";}
	if (isset($allcustom["parada_image_bg"])){$image_bg = $allcustom['parada_image_bg'];}else{$image_bg = "";}
	
?>
<!-- HERO -->
<div class="hero page-section overlay-dark text-light" data-background="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bg/27.jpg">
    <div class="container mt70 mb10">
		<div class="centered fullwidth text-center">
			<h1 class="title bold"><?php esc_html_e('Search','parada'); ?></h1>
			<p class="separator"></p>
		</div>
    </div>
</div>
<!-- /HERO -->

<section class="page-section">
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
      <div class="col-sm-8">
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
			<a href="<?php the_permalink(); ?>">
			<div class="post-content">
			<h5 class="title bold mt20"><?php the_title(); ?></h5>
			<p><?php echo parada_excerpt(20); ?></p>
			</div>
			</a>
		</div>
		<?php endwhile; ?>
        <?php if(function_exists('parada_pagination')){ parada_pagination(); } ?>
	    <?php else : ?>
        <p><?php esc_html_e('Sorry, but the thing you were looking for is not here !!!', 'parada'); ?></p>
        <?php endif; ?>
		<?php wp_link_pages( $args ); ?>	
		
      </div>
      <!-- end col-8 -->
      <div class="blog-sidebar col-sm-4 col-md-3 col-md-offset-1">
        <?php if ( is_active_sidebar( 'parada-sidebar-6' ) ) : ?>
		<?php dynamic_sidebar( 'parada-sidebar-6' ); ?>
		<?php else : ?>
		<div class="text-content">          
		  <p><?php esc_html_e('Add widget here','parada'); ?></p>			
		</div>
		<?php endif; ?>

	  </div>
      <!-- end col-4 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<?php get_footer(); ?>