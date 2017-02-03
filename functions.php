<?php	

/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
include_once( get_template_directory() . '/option-tree/ot-loader.php' );


/**
 * Theme Options */

include_once( get_template_directory() . '/includes/theme-options.php' );

define('parada_PAGES_FUNCTIONS', get_template_directory() .'/functions');
define('parada_PAGES_JAVASCRIPT', get_template_directory_uri() .'/js');

/* css Stlye */

function parada_stylesheet() {
        wp_enqueue_style( 'parada_style', get_template_directory_uri() .'/style.css');
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css');
		wp_enqueue_style( 'animate', get_template_directory_uri() .'/css/animate.css');		
		wp_enqueue_style( 'flexslider', get_template_directory_uri() .'/css/flexslider.css');
		wp_enqueue_style( 'fa', get_template_directory_uri() .'/css/fa.min.css');
		wp_enqueue_style( 'jquery.fancybox', get_template_directory_uri() .'/css/jquery.fancybox.css');
		wp_enqueue_style( 'odometer', get_template_directory_uri() .'/css/odometer.css');
		wp_enqueue_style( 'parada_mainstyle', get_template_directory_uri() .'/css/style.css');
		
}
add_action('wp_enqueue_scripts', 'parada_stylesheet');

/* Theme Function */
require_once(parada_PAGES_FUNCTIONS . '/theme_functions.php');
require_once(parada_PAGES_FUNCTIONS . '/theme_support.php');
require_once(parada_PAGES_FUNCTIONS . '/pagination.php');

/* JavaScripts, Widgets, Sidebars */
require_once(parada_PAGES_FUNCTIONS . '/js.php');
require_once(parada_PAGES_FUNCTIONS . '/widgets.php');
require_once(parada_PAGES_FUNCTIONS . '/register_sidebars.php');

/* Page Options */
require_once(parada_PAGES_FUNCTIONS . '/page_options.php');

/*  BFI Thumb Resizer */
require_once(parada_PAGES_FUNCTIONS . '/BFI_Thumb.php');

/*  Visual Composer */
 
add_action( 'vc_before_init', 'parada_vc_intialization' );
function parada_vc_intialization() {	
	vc_set_as_theme( true );	
	require get_template_directory() . '/functions/vc_shortcodes.php';	
	vc_set_shortcodes_templates_dir( get_template_directory() . '/vc_extends/' );
	
	add_filter( 'vc_load_default_templates', 'my_custom_template_modify_array' );
	function my_custom_template_modify_array($data) {
		return array(); // This will remove all default templates
	}
	
}

function parada_vc_grid_ele_remove(){
	remove_submenu_page( 'vc-general', 'edit.php?post_type=vc_grid_item' );	
	
	//unregister posttype custom function
	if ( ! function_exists( 'unregister_post_type' ) ) :
	function unregister_post_type( $post_type ) {
		global $wp_post_types;
		if ( isset( $wp_post_types[ $post_type ] ) ) {
			unset( $wp_post_types[ $post_type ] );
			return true;
		}
		return false;
	}
	endif;

	unregister_post_type( 'vc_grid_item' );
	
}
add_action( 'admin_menu', 'parada_vc_grid_ele_remove' ); 

function custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
	if ($tag=='vc_row' || $tag=='vc_row_inner') {
		$class_string = str_replace('vc_row-fluid', '', $class_string);
	}
	if ($tag=='vc_column' || $tag=='vc_column_inner') {
		$class_string = str_replace('vc_col-', 'col-', $class_string);
	}
	return $class_string;
	}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'custom_css_classes_for_vc_row_and_vc_column', 10, 2);
add_filter('deprecated_constructor_trigger_error', '__return_false');

add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $jquery_dependencies = $scripts->registered['jquery']->deps;
        $scripts->registered['jquery']->deps = array_diff( $jquery_dependencies, array( 'jquery-migrate' ) );
    }
} );

function parada_content_width() {
/* content width has been defined */
if ( ! isset( $content_width ) ) {
	$content_width = 900;
}
}
add_action('admin_init', 'parada_content_width');

function parada_wpcontent_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'parada_wpcontent_svg_mime_type' );

/* Meta Box */

require get_template_directory() . '/includes/metaboxes/meta_box.php';

$prefix = 'portfolio_';

$portfolio_fields = array(
	
	array(
		'label' => esc_html__('Project add', 'parada' ),
		'desc'	=> esc_html__('add "wide or tall or wide tall', 'parada' ), 
		'id' => $prefix.'add',
		'type' => 'text'
	),	
);

$portfolio = new custom_add_meta_box( 'portfolio_format', 'Portfolio Options', $portfolio_fields, array( 'portfolio'), true );


$prefix = 'member_';
$team_fields = array( 
				
	array(
		'label'=> esc_html__('Image/photo URL', 'parada'),
		'desc'  => esc_html__('Upload image', 'parada'),
		'id'    => $prefix.'image_url',
		'type'  => 'image'
	),
	array(
		'label'=> esc_html__('Name', 'parada'),
		'desc'  => esc_html__('name of team member', 'parada'),
		'id'    => $prefix.'name',
		'type'  => 'text'
	),
	array(
		'label'=> esc_html__('Position', 'parada'),
		'desc'  => esc_html__('working status of member', 'parada'),
		'id'    => $prefix.'position',
		'type'  => 'text'
	),
	
);			
			
$team = new custom_add_meta_box( 'team_member', 'Team Members', $team_fields, array( 'team'), true ); 


$prefix = 'service_';
$services_fields = array( 
	
	array(
		'label'=> esc_html__('add image', 'parada'),
		'desc'  => esc_html__('add image', 'parada'),
		'id'    => $prefix.'image',
		'type'  => 'image'
	),
	
	array(
		'label'=> esc_html__('Title', 'parada'),
		'desc'  => esc_html__('title of service ', 'parada'),
		'id'    => $prefix.'name',
		'type'  => 'text'
	),
					
	array(
		'label'=> esc_html__('Service Text', 'parada'),
		'desc'  => esc_html__('service content', 'parada'),
		'id'    => $prefix.'quote',
		'type'  => 'textarea'
	),
	
);			

$services = new custom_add_meta_box( 'services_meta', 'Services', $services_fields, array( 'services'), true );


$prefix = 'clients_';
$clients_fields = array( 
				
		array(
			'label'=> esc_html__('Image/photo URL', 'parada'),
			'desc'  => esc_html__('Upload client image ', 'parada'),
			'id'    => $prefix.'image',
			'type'  => 'image'
		),
		array(
			'label'=> esc_html__('Link', 'parada'),
			'desc'  => esc_html__('href for the client', 'parada'),
			'id'    => $prefix.'image_link',
			'type'  => 'url'
		),
	
);	

$clients = new custom_add_meta_box( 'clients_meta', 'Clients', $clients_fields, array( 'clients'), true );

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once ( get_template_directory() . '/class-tgm-plugin-activation.php');
 
add_action( 'parada_register', 'parada_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the parada library
 * and one from the .org repo.
 *
 * The variable passed to parada_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into parada_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function parada_register_required_plugins() {
 
	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		/** This is an example of how to include a plugin pre-packaged with a theme */
		array(
			'name'     => esc_html__('Options importer', 'parada'), // The plugin name
			'slug'     => 'options-importer', // The plugin slug (typically the folder name)
			'source'   => 'http://multipixels.net/plugins/options-importer.zip', // The plugin source
			'required' => true,
		),
		array(
			'name'     => esc_html__('custom post type by decneo', 'parada'), // The plugin name
			'slug'     => 'decneo-parada', // The plugin slug (typically the folder name)
			'source'   => 'http://multipixels.net/plugins/decneo-parada.zip', // The plugin source
			'required' => true,
		),
		array(
			'name'     => esc_html__('WPBakery Visual Composer', 'parada'), // The plugin name
			'slug'     => 'js_composer', // The plugin slug (typically the folder name)
			'source'   => 'http://multipixels.net/plugins/js_composer.zip', // The plugin source
			'required' => true,
		),
		array(
			'name'     => esc_html__('Revolution slider', 'parada'), // The plugin name
			'slug'     => 'revslider-1', // The plugin slug (typically the folder name)
			'source'   => 'http://multipixels.net/plugins/revslider-1.zip', // The plugin source
			'required' => true,
		),
		array(
			'name'     => esc_html__('Contact form 7', 'parada'), // The plugin name
			'slug'     => 'contact-form-7', // The plugin slug
			'required' => true,
		),
	);
 
	/** Change this to your theme text domain, used for internationalising strings */
	$theme_text_domain = 'parada';
 
	/**
	 * Array of configuration settings. Uncomment and amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * uncomment the strings and domain.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'strings'      	 => array(
		),
	);
 
	parada( $plugins, $config );
 
} 

?>
