<?php 
/**
 * The template used for displaying client post type
 *
 * @package parada
 */
?>
<?php 
	$no_posts = null;
    $args = array(
		'post_type' => 'clients',
		'posts_per_page'	=> '-1',
		'tax_query' => $client_cat,
	);
	// The Query
	$clients_query = new WP_Query( $args );
 
	// Check if the Query returns any posts
	if ( $clients_query->have_posts() ) {
		while( $clients_query->have_posts() ) : $clients_query->the_post(); ?> 
		
			<?php $parada_clients_image = wp_get_attachment_url( get_post_meta( $post->ID , 'clients_image' , true ) ); ?>
			
			<div class="col-md-3 col-sm-3 col-xs-6">
              <figure><img src="<?php echo esc_url($parada_clients_image) ?>" alt=""></figure>
            </div>
		
	<?php endwhile; } 
	
	wp_reset_query(); ?>
