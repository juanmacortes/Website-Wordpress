<?php 
/**
 * The template used for displaying testimonial post type
 *
 * @package parada
 */
?>

<div class="page-section text-light text-center overlay-dark-3x">
<h4 class="serif capitalize testimonials-title"><?php echo esc_attr( '"what people say"', 'parada' ) ?> </h4>
<!-- TESTIMONIALS SLIDER -->
<div class="owl-slider nav-light pt40" data-dots="false" data-nav="true">
<?php 

$args = array(
	'post_type' => 'testimonials',
	'posts_per_page'	=> $no_posts,
	'tax_query' => $quote_cat,
);
// The Query

$testimonials_query = new WP_Query( $args ); ?>

	<?php // Check if the Query returns any posts
  	if ( $testimonials_query->have_posts() ) {
        while( $testimonials_query->have_posts() ) : $testimonials_query->the_post(); 			
        
            $parada_testimonial_quote = get_post_meta( $post->ID , 'testimonial_quote' , true );
            $parada_testimonial_name = get_post_meta( $post->ID , 'testimonial_name' , true );    ?>   
			
      <div class="col-md-8 col-md-offset-2">
		<p><?php echo esc_attr($parada_testimonial_quote) ?></p>
		<h6 class="title capitalize mt30"><?php echo esc_attr($parada_testimonial_name) ?></h6>
	  </div>		
		
     <?php  endwhile; }  wp_reset_postdata(); ?> 
</div>
<!-- /TESTIMONIALS SLIDER -->
</div>