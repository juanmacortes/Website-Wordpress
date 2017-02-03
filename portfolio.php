<?php
/* 
Template Name: Portfolio page
*/ 
?>
    
<?php get_header(); ?>

<?php

	$allcustom = parada_all_pp();
	
	if (isset($allcustom["parada_header_title"])){$headtitle = $allcustom['parada_header_title'];}else{$headtitle = "";}
	if (isset($allcustom["parada_header_sub_title"])){$headsubtitle = $allcustom['parada_header_sub_title'];}else{$headsubtitle = "";}
	if (isset($allcustom["parada_image_bg"])){$image_bg = $allcustom['parada_image_bg'];}else{$image_bg = "";}
	if (isset($allcustom["parada_portfolio_category"])){$posttype = $allcustom["parada_portfolio_category"];}else{$posttype ='portfolio';} 
    $postcat = "types";
	
?>
<div class="showcase">
  <div class="container">
    <div class="row">
	 <div class="page-padding">
      <?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
      <!-- end col-12 -->
     </div>
	</div>
  </div>
	<?php 
	$args=array('post_type' => $posttype,'posts_per_page' =>-1);
	$temp = $wp_query; 
	$wp_query = null;
	$wp_query = new WP_Query();
	$wp_query->query($args);
	$terms = get_terms($postcat);
	$count = 1;
    ?>
	<?php if ($wp_query->have_posts()) : ?>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				
			<?php	
				$custom = get_post_custom($post->ID);
				$port_list = get_the_term_list( $post->ID, $postcat, '', ', ', '' );
				$allcategory = get_the_term_list( $post->ID, $postcat, '', '_', '' );
				$allcategory = strip_tags($allcategory);
				$allcategory = strtolower($allcategory);
				$allcategory = str_replace(' ', '-', $allcategory);
				$allcategory = str_replace('_', ' ', $allcategory);
				$all_title = get_the_title();
				$blogimageurl_p = wp_get_attachment_url( get_post_thumbnail_id($parada_post->ID) );
				$decneo_term = null;
				$website_url = (isset($custom["website_url"][0]) ? strip_tags($custom["website_url"][0]) : ''); 
				$video_link = (isset($custom["video_link"][0]) ? strip_tags($custom["video_link"][0]) : ''); 
		        $project_progress = (isset($custom["project_progress"][0]) ? strip_tags($custom["project_progress"][0]) : ''); 
			?>				
    <?php if ($count==1){ ?>	
    <!-- end row -->
	<ul>
	<?php } ?>
      <li class="<?php echo esc_attr($allcategory) ?>" data-id="id-<?php echo esc_attr($count) ?>">
	   <?php if($video_link==""){ ?>
            <figure>
             <img src="<?php echo esc_url($blogimageurl_p) ?>" alt="">
             <figcaption><h4><a href="<?php the_permalink(); ?>"><?php echo esc_attr($all_title) ?></a></h4>
             <small><?php echo esc_attr($allcategory) ?></small>
             </figcaption>
            </figure>
	  <?php } else if($video_link!=""){ ?>
            <figure>
             <img src="<?php echo esc_url($blogimageurl_p) ?>" alt="">
             <figcaption><h4><a href="<?php the_permalink(); ?>"><?php echo esc_attr($all_title) ?></a></h4>
             <small><?php echo esc_attr($allcategory) ?></small>
             </figcaption>
            </figure>
		<?php } ?>
	  </li>
	<?php $count++ ?>	
	<?php endwhile; ?>
								
	<?php 
	 $wp_query = null; 
	 $wp_query = $temp;
	 wp_reset_postdata();
	?>
	</ul>
	<?php endif; ?>
  <!-- end container -->
</div>	
<?php get_footer(); ?>