<?php 
/**
 * The template used for displaying team post type
 *
 * @package parada
 */
?>
<div class="team_wrapper">
<?php
    $posts_per_page = intval( $atts['posts_per_page'] );
	$team_cat = null;
	$args = array(
		'post_type' => 'team',
		'posts_per_page' => $posts_per_page,
		'tax_query' => $team_cat,
	);
	// The Query
	$team_query = new WP_Query( $args );

	// Check if the Query returns any posts
	if ( $team_query->have_posts() ) {
		while( $team_query->have_posts() ) : $team_query->the_post();  
		
			$parada_member_image_url = wp_get_attachment_url( get_post_meta( $post->ID , 'member_image_url' , true ) );
			$parada_member_name = get_post_meta( $post->ID , 'member_name' , true );
			$parada_member_position = get_post_meta( $post->ID , 'member_position' , true );				
			?>
			<div class="col-md-3 col-sm-6 col-xs-12">
			  <figure class="member"> <img src="<?php echo esc_url($parada_member_image_url) ?>" alt="">
				<figcaption>
				  <h5><?php echo esc_attr($parada_member_name) ?></h5>
				  <small><?php echo esc_attr($parada_member_position) ?></small> </figcaption>
			  </figure>
			  <!-- end member --> 
			</div>
	<?php endwhile; } 

	wp_reset_query(); ?> 
</div>