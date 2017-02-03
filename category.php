<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 get_header(); ?>

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
      <h2><?php esc_html_e('Category','parada'); ?></h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/shape-gray-wave.png" alt="">
      <div class="clearfix"></div>
      <h6><?php printf( __( 'Archives: %s', 'parada' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h6>
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
		$parada_posttype = null;		 
		$args=array(
		'post_type' => $parada_posttype,
		'posts_per_page' => 6
		);
		$args = 	( $wp_query->query && !empty( $wp_query->query ) )
		? array_merge( $wp_query->query , $args )
		: $args;
		query_posts( $args );
					
     ?>
<div class="row">
<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
				
					<?php	
						
					$blogimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					$blog_crop = array( 'width' => 500, 'height' => 350, 'crop' => true );
                    $bfi_image_b = bfi_thumb( $blogimageurl, $blog_crop );
					$parada_newspost = null;
					$time = get_post_time('j F Y', true,$parada_newspost['ID']); 
					$monthyear = get_post_time('M Y', true,$parada_newspost['ID']);
					$month = get_post_time('M', true,$parada_newspost['ID']);
					$day = get_post_time('j', true,$parada_newspost['ID']); 
					
					$allcategory = get_the_term_list( $post->ID, 'category', '', '_', '' );
					$allcategory = strip_tags($allcategory);
					$allcategory = strtolower($allcategory);
					$allcategory = str_replace(' ', '-', $allcategory);
					$allcategory = str_replace('_', ' ', $allcategory);

					$postcustoms = parada_all_pp($post->ID);
					if (isset($postcustoms["postformat_type"])){$postformat = $postcustoms['postformat_type'];}else{$postformat = 0;}
					if (isset($postcustoms["postformat_slider"])){
						$slider_q = $postcustoms['postformat_slider'];
						$slider_image_q = explode("\n", str_replace("\r", "", $slider_q));
					}else{
						$slider_image_q = 0;
					}
					if (isset($postcustoms["postformat_video"])){$video_post = $postcustoms['postformat_video'];}else{$video_post = "";}
					?>
	 <div class="post_wrapper">
	 <?php if($blogimageurl!="" && $postformat!=1 && $postformat!=2 && $postformat!=3){ ?>
          <div class="blog-post wow fadeIn" data-wow-delay="0.1s">
            <figure class="post-image"><img src="<?php echo esc_url($blogimageurl) ?>" alt=""></figure>
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="post-desc"><?php echo parada_excerpt(36); ?></p>
            <small class="post-date"><?php echo esc_html($time) ?></small> <small class="post-author"><?php the_author(); ?></small> 
		  </div>
		  
	    <?php } else if($postformat==1){ ?>	
	
          <div class="blog-post wow fadeIn" data-wow-delay="0.1s">
            <figure class="post-image">
			<div class="flexslider">	
				<ul class="slides">
				  <?php foreach($slider_image_q as $bfi_image_b):
				  echo '<li><img src="'.esc_url($bfi_image_b).'" alt="" class="scale-with-grid" /></li>';
				  endforeach; ?>														
				</ul>						
			</div>
			</figure>
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="post-desc"><?php echo parada_excerpt(36); ?></p>
            <small class="post-date"><?php echo esc_html($time) ?></small> <small class="post-author"><?php the_author(); ?></small> 
		  </div>
		
		<?php } else if($postformat==2){ ?>	
		
          <div class="blog-post wow fadeIn" data-wow-delay="0.1s">
            <figure class="post-image">
				<div class="scale_vid">
					 <iframe src="http://player.vimeo.com/video/<?php echo esc_attr($video_post) ?>?title=0&amp;byline=0&amp;portrait=0" width="1200" height="610"></iframe>
				</div>
			</figure>
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="post-desc"><?php echo parada_excerpt(36); ?></p>
            <small class="post-date"><?php echo esc_html($time) ?></small> <small class="post-author"><?php the_author(); ?></small> 
          </div>
          
		<?php } else if($postformat==3){ ?>	  
		  
          <div class="blog-post wow fadeIn" data-wow-delay="0.1s">
            <figure class="post-image">
				<div class="scale_vid"> 
					 <iframe src="http://www.youtube.com/embed/<?php echo esc_attr($video_post) ?>?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0" width="1200" height="610"></iframe>
				</div>
			</figure>
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="post-desc"><?php echo parada_excerpt(36); ?></p>
            <small class="post-date"><?php echo esc_html($time) ?></small> <small class="post-author"><?php the_author(); ?></small> 
		  </div>
         
		 <?php } else if($blogimageurl==""){ ?>
		 
          <div class="blog-post wow fadeIn" data-wow-delay="0.1s">
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="post-desc"><?php echo parada_excerpt(36); ?></p>
            <small class="post-date"><?php echo esc_html($time) ?></small> <small class="post-author"><?php the_author(); ?></small> 
		  </div>
            
		<?php } ?>
	</div>
		<?php endwhile; ?>
	
		<div class="col-xs-12">
		<?php if(function_exists('parada_pagination')){ parada_pagination(); } ?>
		</div>
		<?php else : ?>
	      <?php wp_link_pages( $args ); ?>
		<?php endif; ?>	
  <!-- end col-12 -->
    </div>
    <!-- end row --> 
</div>
<!-- end container -->
</section>
</main>
<!-- end main -->
<?php get_footer(); ?>