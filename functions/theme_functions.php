<?php
	
	
	/*  Register Menu  */
    if(function_exists('add_theme_support')){
	
		add_theme_support('menus');
		register_nav_menus(array('main_menu' =>'Main Navigation Menu'));
		
	}	
		
	/*   Get All Custom Fields From A Page Or A Post    */	
		
	function parada_all_pp($id = 0){
    if ($id == 0) :
        global $wp_query;
        $content_array = $wp_query->get_queried_object();
		if(isset($content_array->ID)){
        	$id = $content_array->ID;
		}
    endif;   

    $first_array = get_post_custom_keys($id);

	if(isset($first_array)){
		foreach ($first_array as $key => $value) :
			   $second_array[$value] =  get_post_meta($id, $value, FALSE);
				foreach($second_array as $second_key => $second_value) :
						   $result[$second_key] = $second_value[0];
				endforeach;
		 endforeach;
	 }
	
	if(isset($result)){
    	return $result;
	  }
    }
	
/* lang */

function parada_custom_theme_setup() {  
  
    // Retrieve the directory for the localization files  
    $lang_dir = (get_template_directory() . '/lang');  
  
    // Set the theme's text domain using the unique identifier from above  
    load_theme_textdomain('parada', $lang_dir); 
 
} // end parada_custom_theme_setup 
add_action('after_setup_theme', 'parada_custom_theme_setup');


function parada_custom_plugin_setup() {  
    load_plugin_textdomain('parada', false, get_template_directory() . '/lang/');  
} // end parada_custom_theme_setup  
add_action('after_setup_theme', 'parada_custom_plugin_setup');

add_action( 'after_setup_theme', 'parada_theme_title' );
function parada_theme_title() {

    add_theme_support( 'title-tag' );

}	
	
/*   Get Catgory Slug Using Catgory ID     */

   function parada_getidslug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	  } else {
		return null;
	  }
    };


if ( ! function_exists( 'parada_comment' ) ) :

/*   Function To Get Comment List   */
function parada_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>" class="con_comment">
		<div class="comment_author">
			<?php echo get_avatar( $comment, 50 ); ?>
		</div>


		<div class="comment_text">
			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div>
			<?php  printf( esc_html( '%s ', 'parada' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?><br />
			<span class="time">
			<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				printf( esc_html( '%1$s', 'parada' ), get_comment_date(),  get_comment_time() ); ?></a>
				&nbsp;<?php edit_comment_link( esc_html( '(Edit)', 'parada' ), ' ' );?>
			</span>
			<?php comment_text(); ?>
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em><?php esc_html_e( 'Your comment is waiting moderation.', 'parada' ); ?></em>
			<?php endif; ?>
		
		</div>
		<div class="clear"></div>
	</div>

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php esc_html_e( 'Pingback:', 'parada' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html('(Edit)', 'parada'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

/* Limit words in Excerpt wordpress http://creativemindtechnology.com/how-to-limit-words-in-excerpt-or-content-wordpress/ */

function parada_excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	} 
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);

	return $excerpt;
}

?>