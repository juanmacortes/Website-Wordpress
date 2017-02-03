<?php 
/**
 * The template used for displaying service post type
 *
 * @package parada
 */
?>
<?php
global $no_posts, $service_cat;
$args = array(
	'post_type' => 'services',
	'posts_per_page'	=> $no_posts,
	'tax_query' => $service_cat,
);
// The Query

$services_query = new WP_Query( $args ); ?>

	<?php // Check if the Query returns any posts
  	if ( $services_query->have_posts() ) {
        while( $services_query->have_posts() ) : $services_query->the_post();       
           
			$parada_service_image = wp_get_attachment_url(get_post_meta( $post->ID , 'service_image' , true ));
            $parada_service_name = get_post_meta( $post->ID , 'service_name' , true );
            $parada_service_quote = get_post_meta( $post->ID , 'service_quote' , true );  ?>    
            <div class="col-md-4 col-sm-4 col-xs-12">
			 <div class="service-home">
              <figure class="icon"> <img src="<?php echo esc_url($parada_service_image) ?>" alt="Image"></figure>
              <h4 class="heading"><?php echo esc_attr($parada_service_name); ?></h4>
              <p class="description"><?php echo esc_attr($parada_service_quote) ?></p>
             </div>
			</div>
     <?php  endwhile; }  wp_reset_query(); ?> 
