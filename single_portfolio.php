<?php get_header(); ?>
<?php

	$allcustom = parada_all_pp();
	
	if (isset($allcustom["parada_header_title"])){$headtitle = $allcustom['parada_header_title'];}else{$headtitle = "";}
	
?>
<!-- PROJECT TITLE -->
<div class="page-section section-small mt80">
<div class="container">
	<h1 class="title bold text-center"><?php 
				if ($headtitle == "") {
					echo wp_title('');
				} else {
					echo esc_attr($headtitle);
				}
				?></h1>
	<p class="separator"></p>
</div>
</div>
<!-- /PROJECT TITLE -->
<!-- PROJECT DETAILS -->
<div class="page-section pt0">
	<div class="container">	
	    <?php	
					global $parada_post;
					global $parada_postcat;
					$custom = get_post_custom($parada_post->ID);
					$all_title = get_the_title();
					$blogimageurl = wp_get_attachment_url( get_post_thumbnail_id($parada_post->ID) );
					$time = get_post_time('F jS, Y', true); 
					$video_link1 = $custom["video_link"][0];
					$website_url = $custom["website_url"][0];
				?>
			<?php if (have_posts()) : ?>
	     	<?php while (have_posts()) : the_post(); ?>	
			<div class="project_wrapper <?php get_post_class(); ?>" id="post-<?php the_ID(); ?>">
            <?php  
		    if($video_link1==""){ 
	        ?>
			<div class="row ">
			<div class="col-md-8 col-md-offset-2">
							<!-- SLIDER -->
				<div class="img-slider text-center">
					<img src="<?php echo esc_url($blogimageurl) ?>" alt="">
				</div>
				<!-- /SLIDER -->
			</div>
		    </div>
		   <div class="row mt60">
				<div class="text-center col-md-8 col-md-offset-2">
					<h6 class="title bold"><?php esc_html_e('about','parada'); ?></h6>
					<?php the_content(); ?>
					</p>
				</div>
			</div>
				
			
			<?php }else{ ?>	
			<div class="row">
			<div class="col-md-8 col-md-offset-2">
							<!-- SLIDER -->
				<div class="img-slider text-center">
                    <div class="scale_vid"> 
			         <iframe src="http://www.youtube.com/embed/<?php echo esc_attr($video_link1) ?>?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0" width="670" height="375"></iframe>
		            </div>
				</div>
				<!-- /SLIDER -->
			</div>
		    </div>
			<div class="row mt60">
				<div class="text-center col-md-8 col-md-offset-2">
					<h6 class="title bold"><?php esc_html_e('about','parada'); ?></h6>
					<?php the_content(); ?>
					</p>
				</div>
			</div>
				
			
			<?php } ?> 
	  
	        </div>
			
	</div>
</div>
<!-- /PROJECT DETAILS -->
<!-- PAGINATION -->
<div class="container">	
	<div class="pagination">
	<div class="alignleft"><?php previous_post_link('%link') ?></div>
    <div class="alignright"><?php next_post_link('%link') ?></div>
	<?php endwhile; ?>
	<?php else : ?>
	<div class="col-xs-12">
	<p><?php esc_html_e('Sorry, but the thing you were looking for is not here !!!', 'parada'); ?></p>
	</div>
	<?php endif; ?>
	</div>
</div>
<!-- /PAGINATION -->
	
<?php get_footer(); ?>