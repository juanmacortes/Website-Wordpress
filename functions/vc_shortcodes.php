<?php 

$vc_is_wp_version_3_6_more = version_compare( preg_replace( '/^([\d\.]+)(\-.*$)/', '$1', get_bloginfo( 'version' ) ), '3.6' ) >= 0;

function parada_remove_plugin_metaboxes(){
	remove_meta_box( 'vc_teaser', 'page', 'side' );
}
add_action( 'do_meta_boxes', 'parada_remove_plugin_metaboxes' );

vc_remove_element("vc_message");
vc_remove_element("vc_tweetmeme");
vc_remove_element("vc_googleplus");
vc_remove_element("vc_facebook");
vc_remove_element("vc_pinterest");
vc_remove_element("vc_flickr");
vc_remove_element("vc_button");
vc_remove_element("vc_button2");
vc_remove_element("vc_btn");
vc_remove_element("vc_cta");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_basic_grid");
vc_remove_element("vc_raw_js");
vc_remove_element("vc_single_image");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_tour");
vc_remove_element("vc_media_grid");
vc_remove_element("vc_masonry_grid");
vc_remove_element("vc_separator");
vc_remove_element("vc_text_separator");
vc_remove_element("vc_custom_heading");
vc_remove_element("vc_gmaps");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_toggle");
vc_remove_element("vc_gallery");
vc_remove_element("vc_masonry_media_grid");
vc_remove_element("vc_icon");
vc_remove_element("vc_video");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_text");


// Row 
vc_remove_param("vc_row", "full_width");
vc_remove_param("vc_row", "font_color");
vc_remove_param("vc_row", "css");

vc_add_param("vc_row", array(
	'type' => 'checkbox',
	'heading' => esc_html( 'Fullwidth container', 'parada' ),
	'param_name' => 'fullwidth',
	'description' => esc_html( 'If you want a fullwidth container just check it', 'parada' ),
	'value' => array( esc_html( 'Yes', 'parada' ) => 'yes' )
));

vc_add_param("vc_row", array(
	'type' => 'colorpicker',
	'heading' => esc_html( 'Background Color', 'parada' ),
	'param_name' => 'bg_color',
	'description' => esc_html( 'select the background color for this row section', 'parada' ),
	'edit_field_class' => 'vc_col-md-6 vc_column'
));

vc_add_param("vc_row", array(
	'type' => 'attach_image',
	'heading' => esc_html( 'Background Image', 'parada' ),
	'param_name' => 'bg_image',
	'description' => esc_html( 'Select background image for your row', 'parada' )
));

vc_add_param("vc_row", array(
	'type' => 'dropdown',
	'heading' => esc_html( 'Background Repeat', 'parada' ),
	'param_name' => 'bg_image_repeat',
	'value' => array(
		 esc_html( 'Default', 'parada' ) => '',
		 esc_html('No Repeat', 'parada') => 'no-repeat'
		),
	'description' => esc_html( 'Select how a background image will be repeated', 'parada' ),
	'dependency' => array( 'element' => 'bg_image', 'not_empty' => true)
));

vc_add_param("vc_row", array(
	'type' => 'dropdown',
	'heading' => esc_html( 'Background Size', 'parada' ),
	'param_name' => 'bg_image_size',
	'value' => array(
		 esc_html( 'Auto', 'parada' ) => '',
		 esc_html('Cover', 'parada') => 'cover'
		),
	'description' => esc_html( 'Select how a background image will be repeated', 'parada' ),
	'dependency' => array( 'element' => 'bg_image', 'not_empty' => true)
));

vc_add_param("vc_row", array(
	'type' => 'dropdown',
	'heading' => esc_html( 'Background attachment', 'parada' ),
	'param_name' => 'bg_image_attachment',
	'value' => array(
		 esc_html( 'Default', 'parada' ) => '',
		 esc_html( 'Fixed', 'parada' ) => 'fixed',
		 esc_html('Parallax', 'parada') => 'parallax',
		),
	'description' => esc_html( 'Select how a background image will be attached', 'parada' ),
	'dependency' => array( 'element' => 'bg_image', 'not_empty' => true)
));

vc_add_param("vc_row", array(
	'type' => 'checkbox',
	'heading' => esc_html( 'No Spacing', 'parada' ),
	'param_name' => 'no_margin',
	'description' => esc_html( 'Sometime you may need row without side spacing(padding)..in that scenario it will be helpful', 'parada' ),
	'value' => array( esc_html( 'Yes', 'parada' ) => 'no-margin-padding' )
));

vc_add_param("vc_row", array(
	'type' => 'textfield',
	'heading' => esc_html( 'Top margin', 'parada' ),
	'param_name' => 'margin_top',
	'description' => esc_html( 'You can use px, em, %, etc. or enter just number and it will use pixels.', 'parada' ),
	
));

vc_add_param("vc_row", array(
	'type' => 'textfield',
	'heading' => esc_html( 'Bottom margin', 'parada' ),
	'param_name' => 'margin_bottom',
	'description' => esc_html( 'You can use px, em, %, etc. or enter just number and it will use pixels.', 'parada' ),
	
));

// Row inner

vc_remove_param("vc_row_inner", "full_width");
vc_remove_param("vc_row_inner", "font_color");
vc_remove_param("vc_row_inner", "css");

vc_add_param("vc_row_inner", array(
	'type' => 'checkbox',
	'heading' => esc_html( 'No Spacing', 'parada' ),
	'param_name' => 'no_margin',
	'description' => esc_html( 'Sometime you may need row without side spacing (padding) in that scenario it will be helpful.', 'parada' ),
	'value' => array( esc_html( 'Yes', 'parada' ) => 'no-margin-padding' )
));

vc_add_param("vc_row_inner", array(
	'type' => 'textfield',
	'heading' => esc_html( 'Top margin', 'parada' ),
	'param_name' => 'margin_top',
	'description' => esc_html( 'You can use px, em, %, etc. or enter just number and it will use pixels.', 'parada' ),
	
));

vc_add_param("vc_row_inner", array(
	'type' => 'textfield',
	'heading' => esc_html( 'Bottom margin', 'parada' ),
	'param_name' => 'margin_bottom',
	'description' => esc_html( 'You can use px, em, %, etc. or enter just number and it will use pixels.', 'parada' ),
	
));


// Text editor
vc_remove_param("vc_column_text", "css");
vc_remove_param("vc_column_text", "css_animation");


// tabs
vc_add_param("vc_tab", array(
	'type' => 'checkbox',
	'heading' => esc_html( 'Active', 'parada' ),
	'param_name' => 'active',
	'description' => esc_html( 'If you want this tab active please check it', 'parada' ),
	'value' => array( esc_html( 'Yes', 'parada' ) => 'active' )
));

vc_remove_param("vc_tabs", "interval");

vc_add_param("vc_tabs", array(
	'type' => 'dropdown',
	'heading' => esc_html( 'Tabs Choice', 'parada' ),
	'param_name' => 'choice',
	'value' => array(
		 esc_html( 'Default', 'parada' ) => '',
		 esc_html( 'Style 1', 'parada' ) => '2',
		 esc_html('Style 2', 'parada') => '3',
		 esc_html('Style 3(center)', 'parada') => '4',
		 esc_html('Style 4(right)', 'parada') => '5',
		),
	'description' => esc_html( ' various tabs style ', 'parada' )
));


// Accordions

// tabs
vc_add_param("vc_accordion_tab", array(
	'type' => 'checkbox',
	'heading' => esc_html( 'Active', 'parada' ),
	'param_name' => 'active',
	'description' => esc_html( 'If you want this tab please check', 'parada' ),
	'value' => array( esc_html( 'Yes', 'parada' ) => 'in' )
));

vc_add_param("vc_accordion_tab", array(
	'type' => 'checkbox',
	'heading' => esc_html( 'No border', 'parada' ),
	'param_name' => 'border',
	'description' => esc_html( 'If you don\'t want the border for the toggle just check it', 'parada' ),
	'value' => array( esc_html( 'Yes', 'parada' ) => 'panel-no-border' )
));


vc_remove_param("vc_accordion", "interval");
vc_remove_param("vc_accordion", "collapsible");
vc_remove_param("vc_accordion", "active_tab");

vc_add_param("vc_accordion", array(
	'type' => 'checkbox',
	'heading' => esc_html( 'Not an Accordion', 'parada' ),
	'param_name' => 'choice',
	'description' => esc_html( 'If you want to keep it as a toggle just check it', 'parada' ),
	'value' => array( esc_html( 'Yes', 'parada' ) => 'yes' )
));


class parada_vc_shortcodes {
    function __construct() {
        // We safely integrate with VC with this hook
        add_action( 'init', array( $this, 'parada_integrateWithVC' ) );
 
        // Use this when creating a shortcode addon
		add_shortcode( 'parada_section_heading', array( $this, 'parada_section_heading' ) );
        add_shortcode( 'parada_heading', array( $this, 'parada_heading' ) );
		add_shortcode( 'parada_blockquote', array( $this, 'parada_blockquote' ) );
		add_shortcode( 'parada_s_intro', array( $this, 'parada_s_intro' ) );
		add_shortcode( 'parada_separator', array( $this, 'parada_separator' ) );
		add_shortcode( 'parada_quote', array( $this, 'parada_quote' ) );
		add_shortcode( 'parada_icon', array( $this, 'parada_icon' ) );		
		add_shortcode( 'parada_service', array( $this, 'parada_service' ) );
		add_shortcode( 'parada_service_2', array( $this, 'parada_service_2' ) );
		add_shortcode( 'parada_pricingtable', array( $this, 'parada_pricingtable' ) );
		add_shortcode( 'parada_funfact', array( $this, 'parada_funfact' ) );
		add_shortcode( 'parada_list', array( $this, 'parada_list' ) );
		add_shortcode( 'parada_button', array( $this, 'parada_button' ) );		
		add_shortcode( 'parada_alerts', array( $this, 'parada_alerts' ) );	
		add_shortcode( 'parada_image', array( $this, 'parada_image' ) );	
		add_shortcode( 'parada_video', array( $this, 'parada_video' ) );	
		add_shortcode( 'parada_gmap', array( $this, 'parada_gmap' ) );
		add_shortcode( 'parada_departments', array( $this, 'parada_departments' ) );
		add_shortcode( 'parada_clients', array( $this, 'parada_clients' ) );
		add_shortcode( 'parada_team', array( $this, 'parada_team' ) );
		add_shortcode( 'parada_testimonials', array( $this, 'parada_testimonials' ) );
		add_shortcode( 'parada_custom_slider', array( $this, 'parada_custom_slider' ) );
		add_shortcode( 'parada_posts', array( $this, 'parada_posts' ) );
    }
 
 	
    public function parada_integrateWithVC() {
        // Check if Visual Composer is installed
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            // Display notice that Visual Compser is required
            add_action('admin_notices', array( $this, 'showVcVersionNotice' ));
            return;
        }
		
        /*
        Add your Visual Composer logic here.
        Lets call vc_map function to "register" our custom shortcode within Visual Composer interface.

        More info: http://kb.wpbakery.com/index.php?title=Vc_map
        */
        
		// Section heading
		vc_map( array(
			'name' => esc_html( 'Section heading', 'parada' ),
			'base' => 'parada_section_heading',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/draw.png",
			'category' => esc_html( 'Typography', 'parada' ),
			'description' => esc_html( 'various headings for your section row', 'parada' ),
			'params' => array(
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Header Choice', 'parada' ),
					'param_name' => 'choice',
					'value' => array(
						 esc_html( 'Primary heading', 'parada' ) => '1',
						 esc_html( 'Secondary heading', 'parada' ) => '3'
						),
					'description' => esc_html( 'Select the heading which you want', 'parada' ),
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Heading Text', 'parada' ),
					'param_name' => 'heading',
					'description' => esc_html( 'Type your heading', 'parada' )
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Description Text', 'parada' ),
					'param_name' => 'additional',
					'description' => esc_html( 'Description text for your heading Ex: 01', 'parada' )
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'class for the element', 'parada' )
				),
			)
		) );
		// Section heading
		vc_map( array(
			'name' => esc_html( 'Heading', 'parada' ),
			'base' => 'parada_heading',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/brushes.png",
			'category' => esc_html( 'Typography', 'parada' ),
			'description' => esc_html( 'Headings for your content & paragraph', 'parada' ),
			'params' => array(
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Header Choice', 'parada' ),
					'param_name' => 'choice',
					'value' => array(
						'H1' => '1',
						'H2' => '2',
						'H3' => '3',
						'H4' => '4',
						'H5' => '5',
						'H6' => '6',
						'Custom' => 'div',
						),
					'description' => esc_html( 'Select the heading which you want', 'parada' ),
				),
							
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Font Size', 'parada' ),
					'param_name' => 'font_size',
					'description' => esc_html( 'You can use px, em, %, etc. or enter just number and it will use pixels.', 'parada' ),
					'dependency' => array( 'element' => 'choice', 'value' => 'div' )
					
				),	
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Heading Text', 'parada' ),
					'param_name' => 'heading',
					'description' => esc_html( 'Type or Enter your heading', 'parada' )
				),
						
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Header alignment', 'parada' ),
					'param_name' => 'align',
					'value' => array(
						 esc_html('center', 'parada') => 'center',
						 esc_html( 'left', 'parada' ) => 'left',						 
						 esc_html( 'right', 'parada' ) => 'right',
						 esc_html( 'justify', 'parada' ) => 'justify',
						),
					'description' => esc_html( 'Select how the heading will be aligned', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Bottom margin', 'parada' ),
					'param_name' => 'margin_bottom',
					'description' => esc_html( 'You can use px, em, %, etc. or enter just number and it will use pixels.', 'parada' ),
					
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		) );
		
		
		vc_map( array(
			'name' => esc_html( 'Title page', 'parada' ),
			'base' => 'parada_blockquote',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/swirling.png",
			'category' => esc_html( 'Typography', 'parada' ),
			'description' => esc_html( 'Title page', 'parada' ),
			'params' => array(
			
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Title bold', 'parada' ),
					'param_name' => 'title',
					'description' => esc_html( 'Type or Enter Title', 'parada' )
				),			
				
				array(
					'type' => 'textarea_html',
					'heading' => esc_html( 'Quote Text', 'parada' ),
					'param_name' => 'content',
					'value' => esc_html( '<p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
		vc_map( array(
			'name' => esc_html( 'into service', 'parada' ),
			'base' => 'parada_s_intro',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/lightning.png",
			'category' => esc_html( 'Typography', 'parada' ),
			'description' => esc_html( 'Intro service', 'parada' ),
			'params' => array(
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'number', 'parada' ),
					'param_name' => 'icon',
					'description' => esc_html( 'add number', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'text', 'parada' ),
					'param_name' => 'text',
					'description' => esc_html( 'add text', 'parada' )
				),				
				
				array(
					'type' => 'textarea_html',
					'heading' => esc_html( 'content', 'parada' ),
					'param_name' => 'content',
					'value' => esc_html( 'add content here', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
		vc_map( array(
			'name' => esc_html( 'separator', 'parada' ),
			'base' => 'parada_separator',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/fast.png",
			'category' => esc_html( 'Typography', 'parada' ),
			'description' => esc_html( 'separator for your content', 'parada' ),
			'params' => array(
				
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'separator Choice', 'parada' ),
					'param_name' => 'choice',
					'value' => array(
						 esc_html('Default', 'parada') => '',
						 esc_html( 'With text', 'parada' ) => 'text',	
						),
					'description' => esc_html( 'Select how the separator will be shown', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Text', 'parada' ),
					'param_name' => 'text',
					'description' => esc_html( 'Text inside the separator', 'parada' ),
					'dependency' => array( 'element' => 'choice', 'value' => 'text' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Width', 'parada' ),
					'param_name' => 'width',
					'description' => esc_html( 'Width of the separator in percentage %.. <strong>for.eg. 50</strong>', 'parada' )
				),
				
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Border style', 'parada' ),
					'param_name' => 'style',
					'value' => array(
						 esc_html('Solid', 'parada') => 'solid',
						 esc_html( 'Dashed', 'parada' ) => 'dashed',	
						 esc_html( 'Dotted', 'parada' ) => 'dotted',	
						),
					'description' => esc_html( 'Select how the separator will be shown', 'parada' )
				),
				
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Separator alignment', 'parada' ),
					'param_name' => 'align',
					'value' => array(
						 esc_html('center', 'parada') => 'center',
						 esc_html( 'left', 'parada' ) => 'left',						 
						 esc_html( 'right', 'parada' ) => 'right'
						),
					'description' => esc_html( 'Select how the heading will be aligned', 'parada' )
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html( 'separator Color', 'parada' ),
					'param_name' => 'color',
					'description' => esc_html('pick your color for separator', 'parada' )
				),
				
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
			
		vc_map( array(
			'name' => esc_html( 'Quote', 'parada' ),
			'base' => 'parada_quote',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/paper.png",
			'category' => esc_html( 'Content', 'parada' ),
			'description' => esc_html( 'add quote', 'parada' ),
			'params' => array(
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Text', 'parada' ),
					'param_name' => 'quote',
					'description' => esc_html( 'Call to action text', 'parada' )
				),
				
				array(
					'type' => 'colorpicker',
					'heading' => esc_html( 'Text Color', 'parada' ),
					'param_name' => 'color',
					'description' => esc_html('pick your color for call to action text', 'parada' )
				),
								
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Button Text', 'parada' ),
					'param_name' => 'button',
					'description' => esc_html( 'Text inside the button for call to action ', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Button URL', 'parada' ),
					'param_name' => 'button_url',
					'description' => esc_html( 'Url for the button ', 'parada' )
				),
				
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Button Choice', 'parada' ),
					'param_name' => 'choice',
					'value' => array(
						 esc_html('Default', 'parada') => 'default',
						 esc_html( 'Primary(accent) color', 'parada' ) => 'primary',	
						 esc_html( 'White', 'parada' ) => 'white',	
						),
					'description' => esc_html( 'Select button relative to your background', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
$ionicons = array(
			'  alert' =>	'ion-alert',
			'  alert-circled' =>	'ion-alert-circled',
			'  android-add' =>	'ion-android-add',
			'  android-add-circle' =>	'ion-android-add-circle',
			'  android-alarm-clock' =>	'ion-android-alarm-clock',
			'  android-alert' =>	'ion-android-alert',
			'  android-apps' =>	'ion-android-apps',
			'  android-archive' =>	'ion-android-archive',
			'  android-arrow-back' =>	'ion-android-arrow-back',
			'  android-arrow-down' =>	'ion-android-arrow-down',
			'  android-arrow-dropdown' =>	'ion-android-arrow-dropdown',
			'  android-arrow-dropdown-circle' =>	'ion-android-arrow-dropdown-circle',
			'  android-arrow-dropleft' =>	'ion-android-arrow-dropleft',
			'  android-arrow-dropleft-circle' =>	'ion-android-arrow-dropleft-circle',
			'  android-arrow-dropright' =>	'ion-android-arrow-dropright',
			'  android-arrow-dropright-circle' =>	'ion-android-arrow-dropright-circle',
			'  android-arrow-dropup' =>	'ion-android-arrow-dropup',
			'  android-arrow-dropup-circle' =>	'ion-android-arrow-dropup-circle',
			'  android-arrow-forward' =>	'ion-android-arrow-forward',
			'  android-arrow-up' =>	'ion-android-arrow-up',
			'  android-attach' =>	'ion-android-attach',
			'  android-bar' =>	'ion-android-bar',
			'  android-bicycle' =>	'ion-android-bicycle',
			'  android-boat' =>	'ion-android-boat',
			'  android-bookmark' =>	'ion-android-bookmark',
			'  android-bulb' =>	'ion-android-bulb',
			'  android-bus' =>	'ion-android-bus',
			'  android-calendar' =>	'ion-android-calendar',
			'  android-call' =>	'ion-android-call',
			'  android-camera' =>	'ion-android-camera',
			'  android-cancel' =>	'ion-android-cancel',
			'  android-car' =>	'ion-android-car',
			'  android-cart' =>	'ion-android-cart',
			'  android-chat' =>	'ion-android-chat',
			'  android-checkbox' =>	'ion-android-checkbox',
			'  android-checkbox-blank' =>	'ion-android-checkbox-blank',
			'  android-checkbox-outline' =>	'ion-android-checkbox-outline',
			'  android-checkbox-outline-blank' =>	'ion-android-checkbox-outline-blank',
			'  android-checkmark-circle' =>	'ion-android-checkmark-circle',
			'  android-clipboard' =>	'ion-android-clipboard',
			'  android-close' =>	'ion-android-close',
			'  android-cloud' =>	'ion-android-cloud',
			'  android-cloud-circle' =>	'ion-android-cloud-circle',
			'  android-cloud-done' =>	'ion-android-cloud-done',
			'  android-cloud-outline' =>	'ion-android-cloud-outline',
			'  android-color-palette' =>	'ion-android-color-palette',
			'  android-compass' =>	'ion-android-compass',
			'  android-contact' =>	'ion-android-contact',
			'  android-contacts' =>	'ion-android-contacts',
			'  android-contract' =>	'ion-android-contract',
			'  android-create' =>	'ion-android-create',
			'  android-delete' =>	'ion-android-delete',
			'  android-desktop' =>	'ion-android-desktop',
			'  android-document' =>	'ion-android-document',
			'  android-done' =>	'ion-android-done',
			'  android-done-all' =>	'ion-android-done-all',
			'  android-download' =>	'ion-android-download',
			'  android-drafts' =>	'ion-android-drafts',
			'  android-exit' =>	'ion-android-exit',
			'  android-expand' =>	'ion-android-expand',
			'  android-favorite' =>	'ion-android-favorite',
			'  android-favorite-outline' =>	'ion-android-favorite-outline',
			'  android-film' =>	'ion-android-film',
			'  android-folder' =>	'ion-android-folder',
			'  android-folder-open' =>	'ion-android-folder-open',
			'  android-funnel' =>	'ion-android-funnel',
			'  android-globe' =>	'ion-android-globe',
			'  android-hand' =>	'ion-android-hand',
			'  android-hangout' =>	'ion-android-hangout',
			'  android-happy' =>	'ion-android-happy',
			'  android-home' =>	'ion-android-home',
			'  android-image' =>	'ion-android-image',
			'  android-laptop' =>	'ion-android-laptop',
			'  android-list' =>	'ion-android-list',
			'  android-locate' =>	'ion-android-locate',
			'  android-lock' =>	'ion-android-lock',
			'  android-mail' =>	'ion-android-mail',
			'  android-map' =>	'ion-android-map',
			'  android-menu' =>	'ion-android-menu',
			'  android-microphone' =>	'ion-android-microphone',
			'  android-microphone-off' =>	'ion-android-microphone-off',
			'  android-more-horizontal' =>	'ion-android-more-horizontal',
			'  android-more-vertical' =>	'ion-android-more-vertical',
			'  android-navigate' =>	'ion-android-navigate',
			'  android-notifications' =>	'ion-android-notifications',
			'  android-notifications-none' =>	'ion-android-notifications-none',
			'  android-notifications-off' =>	'ion-android-notifications-off',
			'  android-open' =>	'ion-android-open',
			'  android-options' =>	'ion-android-options',
			'  android-people' =>	'ion-android-people',
			'  android-person' =>	'ion-android-person',
			'  android-person-add' =>	'ion-android-person-add',
			'  android-phone-landscape' =>	'ion-android-phone-landscape',
			'  android-phone-portrait' =>	'ion-android-phone-portrait',
			'  android-pin' =>	'ion-android-pin',
			'  android-plane' =>	'ion-android-plane',
			'  android-playstore' =>	'ion-android-playstore',
			'  android-print' =>	'ion-android-print',
			'  android-radio-button-off' =>	'ion-android-radio-button-off',
			'  android-radio-button-on' =>	'ion-android-radio-button-on',
			'  android-refresh' =>	'ion-android-refresh',
			'  android-remove' =>	'ion-android-remove',
			'  android-remove-circle' =>	'ion-android-remove-circle',
			'  android-restaurant' =>	'ion-android-restaurant',
			'  android-sad' =>	'ion-android-sad',
			'  android-search' =>	'ion-android-search',
			'  android-send' =>	'ion-android-send',
			'  android-settings' =>	'ion-android-settings',
			'  android-share' =>	'ion-android-share',
			'  android-share-alt' =>	'ion-android-share-alt',
			'  android-star' =>	'ion-android-star',
			'  android-star-half' =>	'ion-android-star-half',
			'  android-star-outline' =>	'ion-android-star-outline',
			'  android-stopwatch' =>	'ion-android-stopwatch',
			'  android-subway' =>	'ion-android-subway',
			'  android-sunny' =>	'ion-android-sunny',
			'  android-sync' =>	'ion-android-sync',
			'  android-textsms' =>	'ion-android-textsms',
			'  android-time' =>	'ion-android-time',
			'  android-train' =>	'ion-android-train',
			'  android-unlock' =>	'ion-android-unlock',
			'  android-upload' =>	'ion-android-upload',
			'  android-volume-down' =>	'ion-android-volume-down',
			'  android-volume-mute' =>	'ion-android-volume-mute',
			'  android-volume-off' =>	'ion-android-volume-off',
			'  android-volume-up' =>	'ion-android-volume-up',
			'  android-walk' =>	'ion-android-walk',
			'  android-warning' =>	'ion-android-warning',
			'  android-watch' =>	'ion-android-watch',
			'  android-wifi' =>	'ion-android-wifi',
			'  aperture' =>	'ion-aperture',
			'  archive ' =>	'ion-archive',
			'  arrow-down-a' =>	'ion-arrow-down-a',
			'  arrow-down-b' =>	'ion-arrow-down-b',
			'  arrow-down-c' =>	'ion-arrow-down-c',
			'  arrow-expand' =>	'ion-arrow-expand',
			'  arrow-graph-down-left' =>	'ion-arrow-graph-down-left',
			'  arrow-graph-down-right' =>	'ion-arrow-graph-down-right',
			'  arrow-graph-up-left' =>	'ion-arrow-graph-up-left',
			'  arrow-graph-up-right' =>	'ion-arrow-graph-up-right',
			'  arrow-left-a' =>	'ion-arrow-left-a',
			'  arrow-left-b' =>	'ion-arrow-left-b',
			'  arrow-left-c' =>	'ion-arrow-left-c',
			'  arrow-move' =>	'ion-arrow-move',
			'  arrow-resize' =>	'ion-arrow-resize',
			'  arrow-return-left' =>	'ion-arrow-return-left',
			'  arrow-return-right' =>	'ion-arrow-return-right',
			'  arrow-right-a' =>	'ion-arrow-right-a',
			'  arrow-right-b' =>	'ion-arrow-right-b',
			'  arrow-right-c' =>	'ion-arrow-right-c',
			'  arrow-shrink' =>	'ion-arrow-shrink',
			'  arrow-swap' =>	'ion-arrow-swap',
			'  arrow-up-a' =>	'ion-arrow-up-a',
			'  arrow-up-b' =>	'ion-arrow-up-b',
			'  arrow-up-c' =>	'ion-arrow-up-c',
			'  asterisk ' =>	'ion-asterisk',
			'  at ' =>	'ion-at',
			'  backspace' =>	'ion-backspace',
			'  backspace-outline' =>	'ion-backspace-outline',
			'  bag' =>	'ion-bag',
			'  battery-charging' =>	'ion-battery-charging',
			'  battery-empty' =>	'ion-battery-empty',
			'  battery-full' =>	'ion-battery-full',
			'  battery-half' =>	'ion-battery-half',
			'  battery-low' =>	'ion-battery-low',
			'  beaker' =>	'ion-beaker',
			'  beer ' =>	'ion-beer',
			'  bluetooth' =>	'ion-bluetooth',
			'  bonfire' =>	'ion-bonfire',
			'  bookmark ' =>	'ion-bookmark',
			'  bowtie' =>	'ion-bowtie',
			'  briefcase ' =>	'ion-briefcase',
			'  bug ' =>	'ion-bug',
			'  calculator ' =>	'ion-calculator',
			'  calendar ' =>	'ion-calendar',
			'  camera ' =>	'ion-camera',
			'  card' =>	'ion-card',
			'  cash' =>	'ion-cash',
			'  chatbox' =>	'ion-chatbox',
			'  chatbox-working' =>	'ion-chatbox-working',
			'  chatboxes' =>	'ion-chatboxes',
			'  chatbubble' =>	'ion-chatbubble',
			'  chatbubble-working' =>	'ion-chatbubble-working',
			'  chatbubbles' =>	'ion-chatbubbles',
			'  checkmark' =>	'ion-checkmark',
			'  checkmark-circled' =>	'ion-checkmark-circled',
			'  checkmark-round' =>	'ion-checkmark-round',
			'  chevron-down ' =>	'ion-chevron-down',
			'  chevron-left ' =>	'ion-chevron-left',
			'  chevron-right ' =>	'ion-chevron-right',
			'  chevron-up ' =>	'ion-chevron-up',
			'  clipboard' =>	'ion-clipboard',
			'  clock' =>	'ion-clock',
			'  close ' =>	'ion-close',
			'  close-circled' =>	'ion-close-circled',
			'  close-round' =>	'ion-close-round',
			'  closed-captioning' =>	'ion-closed-captioning',
			'  cloud ' =>	'ion-cloud',
			'  code ' =>	'ion-code',
			'  code-download' =>	'ion-code-download',
			'  code-working' =>	'ion-code-working',
			'  coffee ' =>	'ion-coffee',
			'  compass ' =>	'ion-compass',
			'  compose' =>	'ion-compose',
			'  connectbars' =>	'ion-connection-bars',
			'  contrast' =>	'ion-contrast',
			'  crop ' =>	'ion-crop',
			'  cube ' =>	'ion-cube',
			'  disc ' =>	'ion-disc',
			'  document' =>	'ion-document',
			'  document-text' =>	'ion-document-text',
			'  drag' =>	'ion-drag',
			'  earth' =>	'ion-earth',
			'  easel' =>	'ion-easel',
			'  edit ' =>	'ion-edit',
			'  egg' =>	'ion-egg',
			'  eject ' =>	'ion-eject',
			'  email' =>	'ion-email',
			'  email-unread' =>	'ion-email-unread',
			'  erlenmeyer-flask' =>	'ion-erlenmeyer-flask',
			'  erlenmeyer-flask-bubbles' =>	'ion-erlenmeyer-flask-bubbles',
			'  eye ' =>	'ion-eye',
			'  eye-disabled' =>	'ion-eye-disabled',
			'  female ' =>	'ion-female',
			'  filing' =>	'ion-filing',
			'  film-marker' =>	'ion-film-marker',
			'  fireball' =>	'ion-fireball',
			'  flag ' =>	'ion-flag',
			'  flame' =>	'ion-flame',
			'  flash ' =>	'ion-flash',
			'  flash-off' =>	'ion-flash-off',
			'  folder ' =>	'ion-folder',
			'  fork' =>	'ion-fork',
			'  fork-repo' =>	'ion-fork-repo',
			'  forward ' =>	'ion-forward',
			'  funnel' =>	'ion-funnel',
			'  gear-a' =>	'ion-gear-a',
			'  gear-b' =>	'ion-gear-b',
			'  grid' =>	'ion-grid',
			'  hammer' =>	'ion-hammer',
			'  happy' =>	'ion-happy',
			'  happy-outline' =>	'ion-happy-outline',
			'  headphone' =>	'ion-headphone',
			'  heart ' =>	'ion-heart',
			'  heart-broken' =>	'ion-heart-broken',
			'  help' =>	'ion-help',
			'  help-buoy' =>	'ion-help-buoy',
			'  help-circled' =>	'ion-help-circled',
			'  home ' =>	'ion-home',
			'  icecream' =>	'ion-icecream',
			'  image ' =>	'ion-image',
			'  images' =>	'ion-images',
			'  information' =>	'ion-information',
			'  informatcircled' =>	'ion-information-circled',
			'  ionic' =>	'ion-ionic',
			'  ios-alarm' =>	'ion-ios-alarm',
			'  ios-alarm-outline' =>	'ion-ios-alarm-outline',
			'  ios-albums' =>	'ion-ios-albums',
			'  ios-albums-outline' =>	'ion-ios-albums-outline',
			'  ios-americanfootball' =>	'ion-ios-americanfootball',
			'  ios-americanfootball-outline' =>	'ion-ios-americanfootball-outline',
			'  ios-analytics' =>	'ion-ios-analytics',
			'  ios-analytics-outline' =>	'ion-ios-analytics-outline',
			'  ios-arrow-back' =>	'ion-ios-arrow-back',
			'  ios-arrow-down' =>	'ion-ios-arrow-down',
			'  ios-arrow-forward' =>	'ion-ios-arrow-forward',
			'  ios-arrow-left' =>	'ion-ios-arrow-left',
			'  ios-arrow-right' =>	'ion-ios-arrow-right',
			'  ios-arrow-thin-down' =>	'ion-ios-arrow-thin-down',
			'  ios-arrow-thin-left' =>	'ion-ios-arrow-thin-left',
			'  ios-arrow-thin-right' =>	'ion-ios-arrow-thin-right',
			'  ios-arrow-thin-up' =>	'ion-ios-arrow-thin-up',
			'  ios-arrow-up' =>	'ion-ios-arrow-up',
			'  ios-at' =>	'ion-ios-at',
			'  ios-at-outline' =>	'ion-ios-at-outline',
			'  ios-barcode' =>	'ion-ios-barcode',
			'  ios-barcode-outline' =>	'ion-ios-barcode-outline',
			'  ios-baseball' =>	'ion-ios-baseball',
			'  ios-baseball-outline' =>	'ion-ios-baseball-outline',
			'  ios-basketball' =>	'ion-ios-basketball',
			'  ios-basketball-outline' =>	'ion-ios-basketball-outline',
			'  ios-bell' =>	'ion-ios-bell',
			'  ios-bell-outline' =>	'ion-ios-bell-outline',
			'  ios-body' =>	'ion-ios-body',
			'  ios-body-outline' =>	'ion-ios-body-outline',
			'  ios-bolt' =>	'ion-ios-bolt',
			'  ios-bolt-outline' =>	'ion-ios-bolt-outline',
			'  ios-book' =>	'ion-ios-book',
			'  ios-book-outline' =>	'ion-ios-book-outline',
			'  ios-bookmarks' =>	'ion-ios-bookmarks',
			'  ios-bookmarks-outline' =>	'ion-ios-bookmarks-outline',
			'  ios-box' =>	'ion-ios-box',
			'  ios-box-outline' =>	'ion-ios-box-outline',
			'  ios-briefcase' =>	'ion-ios-briefcase',
			'  ios-briefcase-outline' =>	'ion-ios-briefcase-outline',
			'  ios-browsers' =>	'ion-ios-browsers',
			'  ios-browsers-outline' =>	'ion-ios-browsers-outline',
			'  ios-calculator' =>	'ion-ios-calculator',
			'  ios-calculator-outline' =>	'ion-ios-calculator-outline',
			'  ios-calendar' =>	'ion-ios-calendar',
			'  ios-calendar-outline' =>	'ion-ios-calendar-outline',
			'  ios-camera' =>	'ion-ios-camera',
			'  ios-camera-outline' =>	'ion-ios-camera-outline',
			'  ios-cart' =>	'ion-ios-cart',
			'  ios-cart-outline' =>	'ion-ios-cart-outline',
			'  ios-chatboxes' =>	'ion-ios-chatboxes',
			'  ios-chatboxes-outline' =>	'ion-ios-chatboxes-outline',
			'  ios-chatbubble' =>	'ion-ios-chatbubble',
			'  ios-chatbubble-outline' =>	'ion-ios-chatbubble-outline',
			'  ios-checkmark' =>	'ion-ios-checkmark',
			'  ios-checkmark-empty' =>	'ion-ios-checkmark-empty',
			'  ios-checkmark-outline' =>	'ion-ios-checkmark-outline',
			'  ios-circle-filled' =>	'ion-ios-circle-filled',
			'  ios-circle-outline' =>	'ion-ios-circle-outline',
			'  ios-clock' =>	'ion-ios-clock',
			'  ios-clock-outline' =>	'ion-ios-clock-outline',
			'  ios-close' =>	'ion-ios-close',
			'  ios-close-empty' =>	'ion-ios-close-empty',
			'  ios-close-outline' =>	'ion-ios-close-outline',
			'  ios-cloud' =>	'ion-ios-cloud',
			'  ios-cloud-download' =>	'ion-ios-cloud-download',
			'  ios-cloud-download-outline' =>	'ion-ios-cloud-download-outline',
			'  ios-cloud-outline' =>	'ion-ios-cloud-outline',
			'  ios-cloud-upload' =>	'ion-ios-cloud-upload',
			'  ios-cloud-upload-outline' =>	'ion-ios-cloud-upload-outline',
			'  ios-cloudy' =>	'ion-ios-cloudy',
			'  ios-cloudy-night' =>	'ion-ios-cloudy-night',
			'  ios-cloudy-night-outline' =>	'ion-ios-cloudy-night-outline',
			'  ios-cloudy-outline' =>	'ion-ios-cloudy-outline',
			'  ios-cog' =>	'ion-ios-cog',
			'  ios-cog-outline' =>	'ion-ios-cog-outline',
			'  ios-color-filter' =>	'ion-ios-color-filter',
			'  ios-color-filter-outline' =>	'ion-ios-color-filter-outline',
			'  ios-color-wand' =>	'ion-ios-color-wand',
			'  ios-color-wand-outline' =>	'ion-ios-color-wand-outline',
			'  ios-compose' =>	'ion-ios-compose',
			'  ios-compose-outline' =>	'ion-ios-compose-outline',
			'  ios-contact' =>	'ion-ios-contact',
			'  ios-contact-outline' =>	'ion-ios-contact-outline',
			'  ios-copy' =>	'ion-ios-copy',
			'  ios-copy-outline' =>	'ion-ios-copy-outline',
			'  ios-crop' =>	'ion-ios-crop',
			'  ios-crop-strong' =>	'ion-ios-crop-strong',
			'  ios-download' =>	'ion-ios-download',
			'  ios-download-outline' =>	'ion-ios-download-outline',
			'  ios-drag' =>	'ion-ios-drag',
			'  ios-email' =>	'ion-ios-email',
			'  ios-email-outline' =>	'ion-ios-email-outline',
			'  ios-eye' =>	'ion-ios-eye',
			'  ios-eye-outline' =>	'ion-ios-eye-outline',
			'  ios-fastforward' =>	'ion-ios-fastforward',
			'  ios-fastforward-outline' =>	'ion-ios-fastforward-outline',
			'  ios-filing' =>	'ion-ios-filing',
			'  ios-filing-outline' =>	'ion-ios-filing-outline',
			'  ios-film' =>	'ion-ios-film',
			'  ios-film-outline' =>	'ion-ios-film-outline',
			'  ios-flag' =>	'ion-ios-flag',
			'  ios-flag-outline' =>	'ion-ios-flag-outline',
			'  ios-flame' =>	'ion-ios-flame',
			'  ios-flame-outline' =>	'ion-ios-flame-outline',
			'  ios-flask' =>	'ion-ios-flask',
			'  ios-flask-outline' =>	'ion-ios-flask-outline',
			'  ios-flower' =>	'ion-ios-flower',
			'  ios-flower-outline' =>	'ion-ios-flower-outline',
			'  ios-folder' =>	'ion-ios-folder',
			'  ios-folder-outline' =>	'ion-ios-folder-outline',
			'  ios-football' =>	'ion-ios-football',
			'  ios-football-outline' =>	'ion-ios-football-outline',
			'  ios-game-controller-a' =>	'ion-ios-game-controller-a',
			'  ios-game-controller-a-outline' =>	'ion-ios-game-controller-a-outline',
			'  ios-game-controller-b' =>	'ion-ios-game-controller-b',
			'  ios-game-controller-b-outline' =>	'ion-ios-game-controller-b-outline',
			'  ios-gear' =>	'ion-ios-gear',
			'  ios-gear-outline' =>	'ion-ios-gear-outline',
			'  ios-glasses' =>	'ion-ios-glasses',
			'  ios-glasses-outline' =>	'ion-ios-glasses-outline',
			'  ios-grid-view' =>	'ion-ios-grid-view',
			'  ios-grid-view-outline' =>	'ion-ios-grid-view-outline',
			'  ios-heart' =>	'ion-ios-heart',
			'  ios-heart-outline' =>	'ion-ios-heart-outline',
			'  ios-help' =>	'ion-ios-help',
			'  ios-help-empty' =>	'ion-ios-help-empty',
			'  ios-help-outline' =>	'ion-ios-help-outline',
			'  ios-home' =>	'ion-ios-home',
			'  ios-home-outline' =>	'ion-ios-home-outline',
			'  ios-infinite' =>	'ion-ios-infinite',
			'  ios-infinite-outline' =>	'ion-ios-infinite-outline',
			'  ios-information' =>	'ion-ios-information',
			'  ios-informatempty' =>	'ion-ios-information-empty',
			'  ios-informatoutline' =>	'ion-ios-information-outline',
			'  ios-ionic-outline' =>	'ion-ios-ionic-outline',
			'  ios-keypad' =>	'ion-ios-keypad',
			'  ios-keypad-outline' =>	'ion-ios-keypad-outline',
			'  ios-lightbulb' =>	'ion-ios-lightbulb',
			'  ios-lightbulb-outline' =>	'ion-ios-lightbulb-outline',
			'  ios-list' =>	'ion-ios-list',
			'  ios-list-outline' =>	'ion-ios-list-outline',
			'  ios-location' =>	'ion-ios-location',
			'  ios-locatoutline' =>	'ion-ios-location-outline',
			'  ios-locked' =>	'ion-ios-locked',
			'  ios-locked-outline' =>	'ion-ios-locked-outline',
			'  ios-loop' =>	'ion-ios-loop',
			'  ios-loop-strong' =>	'ion-ios-loop-strong',
			'  ios-medical' =>	'ion-ios-medical',
			'  ios-medical-outline' =>	'ion-ios-medical-outline',
			'  ios-medkit' =>	'ion-ios-medkit',
			'  ios-medkit-outline' =>	'ion-ios-medkit-outline',
			'  ios-mic' =>	'ion-ios-mic',
			'  ios-mic-off' =>	'ion-ios-mic-off',
			'  ios-mic-outline' =>	'ion-ios-mic-outline',
			'  ios-minus' =>	'ion-ios-minus',
			'  ios-minus-empty' =>	'ion-ios-minus-empty',
			'  ios-minus-outline' =>	'ion-ios-minus-outline',
			'  ios-monitor' =>	'ion-ios-monitor',
			'  ios-monitor-outline' =>	'ion-ios-monitor-outline',
			'  ios-moon' =>	'ion-ios-moon',
			'  ios-moon-outline' =>	'ion-ios-moon-outline',
			'  ios-more' =>	'ion-ios-more',
			'  ios-more-outline' =>	'ion-ios-more-outline',
			'  ios-musical-note' =>	'ion-ios-musical-note',
			'  ios-musical-notes' =>	'ion-ios-musical-notes',
			'  ios-navigate' =>	'ion-ios-navigate',
			'  ios-navigate-outline' =>	'ion-ios-navigate-outline',
			'  ios-nutrition' =>	'ion-ios-nutrition',
			'  ios-nutritoutline' =>	'ion-ios-nutrition-outline',
			'  ios-paper' =>	'ion-ios-paper',
			'  ios-paper-outline' =>	'ion-ios-paper-outline',
			'  ios-paperplane' =>	'ion-ios-paperplane',
			'  ios-paperplane-outline' =>	'ion-ios-paperplane-outline',
			'  ios-partlysunny' =>	'ion-ios-partlysunny',
			'  ios-partlysunny-outline' =>	'ion-ios-partlysunny-outline',
			'  ios-pause' =>	'ion-ios-pause',
			'  ios-pause-outline' =>	'ion-ios-pause-outline',
			'  ios-paw' =>	'ion-ios-paw',
			'  ios-paw-outline' =>	'ion-ios-paw-outline',
			'  ios-people' =>	'ion-ios-people',
			'  ios-people-outline' =>	'ion-ios-people-outline',
			'  ios-person' =>	'ion-ios-person',
			'  ios-person-outline' =>	'ion-ios-person-outline',
			'  ios-personadd' =>	'ion-ios-personadd',
			'  ios-personadd-outline' =>	'ion-ios-personadd-outline',
			'  ios-photos' =>	'ion-ios-photos',
			'  ios-photos-outline' =>	'ion-ios-photos-outline',
			'  ios-pie' =>	'ion-ios-pie',
			'  ios-pie-outline' =>	'ion-ios-pie-outline',
			'  ios-pint' =>	'ion-ios-pint',
			'  ios-pint-outline' =>	'ion-ios-pint-outline',
			'  ios-play' =>	'ion-ios-play',
			'  ios-play-outline' =>	'ion-ios-play-outline',
			'  ios-plus' =>	'ion-ios-plus',
			'  ios-plus-empty' =>	'ion-ios-plus-empty',
			'  ios-plus-outline' =>	'ion-ios-plus-outline',
			'  ios-pricetag' =>	'ion-ios-pricetag',
			'  ios-pricetag-outline' =>	'ion-ios-pricetag-outline',
			'  ios-pricetags' =>	'ion-ios-pricetags',
			'  ios-pricetags-outline' =>	'ion-ios-pricetags-outline',
			'  ios-printer' =>	'ion-ios-printer',
			'  ios-printer-outline' =>	'ion-ios-printer-outline',
			'  ios-pulse' =>	'ion-ios-pulse',
			'  ios-pulse-strong' =>	'ion-ios-pulse-strong',
			'  ios-rainy' =>	'ion-ios-rainy',
			'  ios-rainy-outline' =>	'ion-ios-rainy-outline',
			'  ios-recording' =>	'ion-ios-recording',
			'  ios-recording-outline' =>	'ion-ios-recording-outline',
			'  ios-redo' =>	'ion-ios-redo',
			'  ios-redo-outline' =>	'ion-ios-redo-outline',
			'  ios-refresh' =>	'ion-ios-refresh',
			'  ios-refresh-empty' =>	'ion-ios-refresh-empty',
			'  ios-refresh-outline' =>	'ion-ios-refresh-outline',
			'  ios-reload' =>	'ion-ios-reload',
			'  ios-reverse-camera' =>	'ion-ios-reverse-camera',
			'  ios-reverse-camera-outline' =>	'ion-ios-reverse-camera-outline',
			'  ios-rewind' =>	'ion-ios-rewind',
			'  ios-rewind-outline' =>	'ion-ios-rewind-outline',
			'  ios-rose' =>	'ion-ios-rose',
			'  ios-rose-outline' =>	'ion-ios-rose-outline',
			'  ios-search' =>	'ion-ios-search',
			'  ios-search-strong' =>	'ion-ios-search-strong',
			'  ios-settings' =>	'ion-ios-settings',
			'  ios-settings-strong' =>	'ion-ios-settings-strong',
			'  ios-shuffle' =>	'ion-ios-shuffle',
			'  ios-shuffle-strong' =>	'ion-ios-shuffle-strong',
			'  ios-skipbackward' =>	'ion-ios-skipbackward',
			'  ios-skipbackward-outline' =>	'ion-ios-skipbackward-outline',
			'  ios-skipforward' =>	'ion-ios-skipforward',
			'  ios-skipforward-outline' =>	'ion-ios-skipforward-outline',
			'  ios-snowy' =>	'ion-ios-snowy',
			'  ios-speedometer' =>	'ion-ios-speedometer',
			'  ios-speedometer-outline' =>	'ion-ios-speedometer-outline',
			'  ios-star' =>	'ion-ios-star',
			'  ios-star-half' =>	'ion-ios-star-half',
			'  ios-star-outline' =>	'ion-ios-star-outline',
			'  ios-stopwatch' =>	'ion-ios-stopwatch',
			'  ios-stopwatch-outline' =>	'ion-ios-stopwatch-outline',
			'  ios-sunny' =>	'ion-ios-sunny',
			'  ios-sunny-outline' =>	'ion-ios-sunny-outline',
			'  ios-telephone' =>	'ion-ios-telephone',
			'  ios-telephone-outline' =>	'ion-ios-telephone-outline',
			'  ios-tennisball' =>	'ion-ios-tennisball',
			'  ios-tennisball-outline' =>	'ion-ios-tennisball-outline',
			'  ios-thunderstorm' =>	'ion-ios-thunderstorm',
			'  ios-thunderstorm-outline' =>	'ion-ios-thunderstorm-outline',
			'  ios-time' =>	'ion-ios-time',
			'  ios-time-outline' =>	'ion-ios-time-outline',
			'  ios-timer' =>	'ion-ios-timer',
			'  ios-timer-outline' =>	'ion-ios-timer-outline',
			'  ios-toggle' =>	'ion-ios-toggle',
			'  ios-toggle-outline' =>	'ion-ios-toggle-outline',
			'  ios-trash' =>	'ion-ios-trash',
			'  ios-trash-outline' =>	'ion-ios-trash-outline',
			'  ios-undo' =>	'ion-ios-undo',
			'  ios-undo-outline' =>	'ion-ios-undo-outline',
			'  ios-unlocked' =>	'ion-ios-unlocked',

			'  ios-unlocked-outline' =>	'ion-ios-unlocked-outline',
			'  ios-upload' =>	'ion-ios-upload',
			'  ios-upload-outline' =>	'ion-ios-upload-outline',
			'  ios-videocam' =>	'ion-ios-videocam',
			'  ios-videocam-outline' =>	'ion-ios-videocam-outline',
			'  ios-volume-high' =>	'ion-ios-volume-high',
			'  ios-volume-low' =>	'ion-ios-volume-low',
			'  ios-wineglass' =>	'ion-ios-wineglass',
			'  ios-wineglass-outline' =>	'ion-ios-wineglass-outline',
			'  ios-world' =>	'ion-ios-world',
			'  ios-world-outline' =>	'ion-ios-world-outline',
			'  ipad' =>	'ion-ipad',
			'  iphone' =>	'ion-iphone',
			'  ipod' =>	'ion-ipod',
			'  jet' =>	'ion-jet',
			'  key ' =>	'ion-key',
			'  knife' =>	'ion-knife',
			'  laptop ' =>	'ion-laptop',
			'  leaf ' =>	'ion-leaf',
			'  levels' =>	'ion-levels',
			'  lightbulb' =>	'ion-lightbulb',
			'  link ' =>	'ion-link',
			'  load-a' =>	'ion-load-a',
			'  load-b' =>	'ion-load-b',
			'  load-c' =>	'ion-load-c',
			'  load-d' =>	'ion-load-d',
			'  location' =>	'ion-location',
			'  lock-combination' =>	'ion-lock-combination',
			'  locked' =>	'ion-locked',
			'  log-in' =>	'ion-log-in',
			'  log-out' =>	'ion-log-out',
			'  loop' =>	'ion-loop',
			'  magnet ' =>	'ion-magnet',
			'  male ' =>	'ion-male',
			'  man' =>	'ion-man',
			'  map' =>	'ion-map',
			'  medkit ' =>	'ion-medkit',
			'  merge' =>	'ion-merge',
			'  mic-a' =>	'ion-mic-a',
			'  mic-b' =>	'ion-mic-b',
			'  mic-c' =>	'ion-mic-c',
			'  minus ' =>	'ion-minus',
			'  minus-circled' =>	'ion-minus-circled',
			'  minus-round' =>	'ion-minus-round',
			'  model-s' =>	'ion-model-s',
			'  monitor' =>	'ion-monitor',
			'  more' =>	'ion-more',
			'  mouse' =>	'ion-mouse',
			
			'  music-note' =>	'ion-music-note',
			'  navicon ' =>	'ion-navicon',
			'  navicon-round' =>	'ion-navicon-round',
			'  navigate' =>	'ion-navigate',
			'  network' =>	'ion-network',
			'  no-smoking' =>	'ion-no-smoking',
			'  nuclear' =>	'ion-nuclear',
			'  outlet' =>	'ion-outlet',
			'  paintbrush' =>	'ion-paintbrush',
			'  paintbucket' =>	'ion-paintbucket',
			'  paper-airplane' =>	'ion-paper-airplane',
			'  paperclip ' =>	'ion-paperclip',
			'  pause ' =>	'ion-pause',
			'  person' =>	'ion-person',
			'  person-add' =>	'ion-person-add',
			'  person-stalker' =>	'ion-person-stalker',
			'  pie-graph' =>	'ion-pie-graph',
			'  pin' =>	'ion-pin',
			'  pinpoint' =>	'ion-pinpoint',
			'  pizza' =>	'ion-pizza',
			'  plane ' =>	'ion-plane',
			'  planet' =>	'ion-planet',
			'  play ' =>	'ion-play',
			'  playstation' =>	'ion-playstation',
			'  plus ' =>	'ion-plus',
			'  plus-circled' =>	'ion-plus-circled',
			'  plus-round' =>	'ion-plus-round',
			'  podium' =>	'ion-podium',
			'  pound' =>	'ion-pound',
			'  power' =>	'ion-power',
			'  pricetag' =>	'ion-pricetag',
			'  pricetags' =>	'ion-pricetags',
			'  printer' =>	'ion-printer',
			'  pull-request' =>	'ion-pull-request',
			'  qr-scanner' =>	'ion-qr-scanner',
			'  quote' =>	'ion-quote',
			'  radio-waves' =>	'ion-radio-waves',
			'  record ' =>	'ion-record',
			'  refresh ' =>	'ion-refresh',
			'  reply ' =>	'ion-reply',
			'  reply-all ' =>	'ion-reply-all',
			'  ribbon-a' =>	'ion-ribbon-a',
			'  ribbon-b' =>	'ion-ribbon-b',
			'  sad' =>	'ion-sad',
			'  sad-outline' =>	'ion-sad-outline',
			'  scissors ' =>	'ion-scissors',
			'  search ' =>	'ion-search',
			'  settings' =>	'ion-settings',
			'  share ' =>	'ion-share',
			'  shuffle' =>	'ion-shuffle',
			'  skip-backward' =>	'ion-skip-backward',
			'  skip-forward' =>	'ion-skip-forward',
			'  social-android' =>	'ion-social-android',
			'  social-android-outline' =>	'ion-social-android-outline',
			'  social-angular' =>	'ion-social-angular',
			'  social-angular-outline' =>	'ion-social-angular-outline',
			'  social-apple' =>	'ion-social-apple',
			'  social-apple-outline' =>	'ion-social-apple-outline',
			'  social-bitcoin' =>	'ion-social-bitcoin',
			'  social-bitcoin-outline' =>	'ion-social-bitcoin-outline',
			'  social-buffer' =>	'ion-social-buffer',
			'  social-buffer-outline' =>	'ion-social-buffer-outline',
			'  social-chrome' =>	'ion-social-chrome',
			'  social-chrome-outline' =>	'ion-social-chrome-outline',
			'  social-codepen' =>	'ion-social-codepen',
			'  social-codepen-outline' =>	'ion-social-codepen-outline',
			'  social-css3' =>	'ion-social-css3',
			'  social-css3-outline' =>	'ion-social-css3-outline',
			'  social-designernews' =>	'ion-social-designernews',
			'  social-designernews-outline' =>	'ion-social-designernews-outline',
			'  social-dribbble' =>	'ion-social-dribbble',
			'  social-dribbble-outline' =>	'ion-social-dribbble-outline',
			'  social-dropbox' =>	'ion-social-dropbox',
			'  social-dropbox-outline' =>	'ion-social-dropbox-outline',
			'  social-euro' =>	'ion-social-euro',
			'  social-euro-outline' =>	'ion-social-euro-outline',
			'  social-facebook' =>	'ion-social-facebook',
			'  social-facebook-outline' =>	'ion-social-facebook-outline',
			'  social-foursquare' =>	'ion-social-foursquare',
			'  social-foursquare-outline' =>	'ion-social-foursquare-outline',
			'  social-freebsd-devil' =>	'ion-social-freebsd-devil',
			'  social-github' =>	'ion-social-github',
			'  social-github-outline' =>	'ion-social-github-outline',
			'  social-google' =>	'ion-social-google',
			'  social-google-outline' =>	'ion-social-google-outline',
			'  social-googleplus' =>	'ion-social-googleplus',
			'  social-googleplus-outline' =>	'ion-social-googleplus-outline',
			'  social-hackernews' =>	'ion-social-hackernews',
			'  social-hackernews-outline' =>	'ion-social-hackernews-outline',
			'  social-html5' =>	'ion-social-html5',
			'  social-html5-outline' =>	'ion-social-html5-outline',
			'  social-instagram' =>	'ion-social-instagram',
			'  social-instagram-outline' =>	'ion-social-instagram-outline',
			'  social-javascript' =>	'ion-social-javascript',
			'  social-javascript-outline' =>	'ion-social-javascript-outline',
			'  social-linkedin' =>	'ion-social-linkedin',
			'  social-linkedin-outline' =>	'ion-social-linkedin-outline',
			'  social-markdown' =>	'ion-social-markdown',
			'  social-nodejs' =>	'ion-social-nodejs',
			'  social-octocat' =>	'ion-social-octocat',
			'  social-pinterest' =>	'ion-social-pinterest',
			'  social-pinterest-outline' =>	'ion-social-pinterest-outline',
			'  social-python' =>	'ion-social-python',
			'  social-reddit' =>	'ion-social-reddit',
			'  social-reddit-outline' =>	'ion-social-reddit-outline',
			'  social-rss' =>	'ion-social-rss',
			'  social-rss-outline' =>	'ion-social-rss-outline',
			'  social-sass' =>	'ion-social-sass',
			'  social-skype' =>	'ion-social-skype',
			'  social-skype-outline' =>	'ion-social-skype-outline',
			'  social-snapchat' =>	'ion-social-snapchat',
			'  social-snapchat-outline' =>	'ion-social-snapchat-outline',
			'  social-tumblr' =>	'ion-social-tumblr',
			'  social-tumblr-outline' =>	'ion-social-tumblr-outline',
			'  social-tux' =>	'ion-social-tux',
			'  social-twitch' =>	'ion-social-twitch',
			'  social-twitch-outline' =>	'ion-social-twitch-outline',
			'  social-twitter' =>	'ion-social-twitter',
			'  social-twitter-outline' =>	'ion-social-twitter-outline',
			'  social-usd' =>	'ion-social-usd',
			'  social-usd-outline' =>	'ion-social-usd-outline',
			'  social-vimeo' =>	'ion-social-vimeo',
			'  social-vimeo-outline' =>	'ion-social-vimeo-outline',
			'  social-whatsapp' =>	'ion-social-whatsapp',
			'  social-whatsapp-outline' =>	'ion-social-whatsapp-outline',
			'  social-windows' =>	'ion-social-windows',
			'  social-windows-outline' =>	'ion-social-windows-outline',
			'  social-wordpress' =>	'ion-social-wordpress',
			'  social-wordpress-outline' =>	'ion-social-wordpress-outline',
			'  social-yahoo' =>	'ion-social-yahoo',
			'  social-yahoo-outline' =>	'ion-social-yahoo-outline',
			'  social-yen' =>	'ion-social-yen',
			'  social-yen-outline' =>	'ion-social-yen-outline',
			'  social-youtube' =>	'ion-social-youtube',
			'  social-youtube-outline' =>	'ion-social-youtube-outline',
			'  soup-can' =>	'ion-soup-can',
			'  soup-can-outline' =>	'ion-soup-can-outline',
			'  speakerphone' =>	'ion-speakerphone',
			'  speedometer' =>	'ion-speedometer',
			'  spoon ' =>	'ion-spoon',
			'  star ' =>	'ion-star',
			'  stats-bars' =>	'ion-stats-bars',
			'  steam ' =>	'ion-steam',
			'  stop ' =>	'ion-stop',
			'  thermometer' =>	'ion-thermometer',
			'  thumbsdown' =>	'ion-thumbsdown',
			'  thumbsup' =>	'ion-thumbsup',
			'  toggle' =>	'ion-toggle',
			'  toggle-filled' =>	'ion-toggle-filled',
			'  transgender' =>	'ion-transgender',
			'  trash-a' =>	'ion-trash-a',
			'  trash-b' =>	'ion-trash-b',
			'  trophy ' =>	'ion-trophy',
			'  tshirt' =>	'ion-tshirt',
			'  tshirt-outline' =>	'ion-tshirt-outline',
			'  umbrella ' =>	'ion-umbrella',
			'  university ' =>	'ion-university',
			'  unlocked' =>	'ion-unlocked',
			'  upload ' =>	'ion-upload',
			'  usb' =>	'ion-usb',
			'  videocamera' =>	'ion-videocamera',
			'  volume-high' =>	'ion-volume-high',
			'  volume-low' =>	'ion-volume-low',
			'  volume-medium' =>	'ion-volume-medium',
			'  volume-mute' =>	'ion-volume-mute',
			'  wand' =>	'ion-wand',
			'  waterdrop' =>	'ion-waterdrop',
			'  wifi ' =>	'ion-wifi',
			'  wineglass' =>	'ion-wineglass',
			'  woman' =>	'ion-woman',
			'  wrench ' =>	'ion-wrench',
			'  xbox' =>	'ion-xbox',


		);
		
		$font_awesome = array(
			'  glass' =>	'  fa fa-glass',
			'  music' =>	'  fa fa-music',
			'  search' =>	'  fa fa-search',
			'  envelope-o' =>	'  fa fa-envelope-o',
			'  heart' =>	'  fa fa-heart',
			'  star' =>	'  fa fa-star',
			'  star-o' =>	'  fa fa-star-o',
			'  user' =>	'  fa fa-user',
			'  film' =>	'  fa fa-film',
			'  th-large' =>	'  fa fa-th-large',
			'  th' =>	'  fa fa-th',
			'  th-list' =>	'  fa fa-th-list',
			'  check' =>	'  fa fa-check',
			'  remove' =>	'  fa fa-remove',
			'  close' =>	'  fa fa-close',
			'  times' =>	'  fa fa-times',
			'  search-plus' =>	'  fa fa-search-plus',
			'  search-minus' =>	'  fa fa-search-minus',
			'  power-off' =>	'  fa fa-power-off',
			'  signal' =>	'  fa fa-signal',
			'  gear' =>	'  fa fa-gear',
			'  cog' =>	'  fa fa-cog',
			'  trash-o' =>	'  fa fa-trash-o',
			'  home' =>	'  fa fa-home',
			'  file-o' =>	'  fa fa-file-o',
			'  clock-o' =>	'  fa fa-clock-o',
			'  road' =>	'  fa fa-road',
			'  download' =>	'  fa fa-download',
			'  arrow-circle-o-down' =>	'  fa fa-arrow-circle-o-down',
			'  arrow-circle-o-up' =>	'  fa fa-arrow-circle-o-up',
			'  inbox' =>	'  fa fa-inbox',
			'  play-circle-o' =>	'  fa fa-play-circle-o',
			'  rotate-right' =>	'  fa fa-rotate-right',
			'  repeat' =>	'  fa fa-repeat',
			'  refresh' =>	'  fa fa-refresh',
			'  list-alt' =>	'  fa fa-list-alt',
			'  lock' =>	'  fa fa-lock',
			'  flag' =>	'  fa fa-flag',
			'  headphones' =>	'  fa fa-headphones',
			'  volume-off' =>	'  fa fa-volume-off',
			'  volume-down' =>	'  fa fa-volume-down',
			'  volume-up' =>	'  fa fa-volume-up',
			'  qrcode' =>	'  fa fa-qrcode',
			'  barcode' =>	'  fa fa-barcode',
			'  tag' =>	'  fa fa-tag',
			'  tags' =>	'  fa fa-tags',
			'  book' =>	'  fa fa-book',
			'  bookmark' =>	'  fa fa-bookmark',
			'  print' =>	'  fa fa-print',
			'  camera' =>	'  fa fa-camera',
			'  font' =>	'  fa fa-font',
			'  bold' =>	'  fa fa-bold',
			'  italic' =>	'  fa fa-italic',
			'  text-height' =>	'  fa fa-text-height',
			'  text-width' =>	'  fa fa-text-width',
			'  align-left' =>	'  fa fa-align-left',
			'  align-center' =>	'  fa fa-align-center',
			'  align-right' =>	'  fa fa-align-right',
			'  align-justify' =>	'  fa fa-align-justify',
			'  list' =>	'  fa fa-list',
			'  dedent' =>	'  fa fa-dedent',
			'  outdent' =>	'  fa fa-outdent',
			'  indent' =>	'  fa fa-indent',
			'  video-camera' =>	'  fa fa-video-camera',
			'  photo' =>	'  fa fa-photo',
			'  image' =>	'  fa fa-image',
			'  picture-o' =>	'  fa fa-picture-o',
			'  pencil' =>	'  fa fa-pencil',
			'  map-marker' =>	'  fa fa-map-marker',
			'  adjust' =>	'  fa fa-adjust',
			'  tint' =>	'  fa fa-tint',
			'  edit' =>	'  fa fa-edit',
			'  pencil-square-o' =>	'  fa fa-pencil-square-o',
			'  share-square-o' =>	'  fa fa-share-square-o',
			'  check-square-o' =>	'  fa fa-check-square-o',
			'  arrows' =>	'  fa fa-arrows',
			'  step-backward' =>	'  fa fa-step-backward',
			'  fast-backward' =>	'  fa fa-fast-backward',
			'  backward' =>	'  fa fa-backward',
			'  play' =>	'  fa fa-play',
			'  pause' =>	'  fa fa-pause',
			'  stop' =>	'  fa fa-stop',
			'  forward' =>	'  fa fa-forward',
			'  fast-forward' =>	'  fa fa-fast-forward',
			'  step-forward' =>	'  fa fa-step-forward',
			'  eject' =>	'  fa fa-eject',
			'  chevron-left' =>	'  fa fa-chevron-left',
			'  chevron-right' =>	'  fa fa-chevron-right',
			'  plus-circle' =>	'  fa fa-plus-circle',
			'  minus-circle' =>	'  fa fa-minus-circle',
			'  times-circle' =>	'  fa fa-times-circle',
			'  check-circle' =>	'  fa fa-check-circle',
			'  question-circle' =>	'  fa fa-question-circle',
			'  info-circle' =>	'  fa fa-info-circle',
			'  crosshairs' =>	'  fa fa-crosshairs',
			'  times-circle-o' =>	'  fa fa-times-circle-o',
			'  check-circle-o' =>	'  fa fa-check-circle-o',
			'  ban' =>	'  fa fa-ban',
			'  arrow-left' =>	'  fa fa-arrow-left',
			'  arrow-right' =>	'  fa fa-arrow-right',
			'  arrow-up' =>	'  fa fa-arrow-up',
			'  arrow-down' =>	'  fa fa-arrow-down',
			'  mail-forward' =>	'  fa fa-mail-forward',
			'  share' =>	'  fa fa-share',
			'  expand' =>	'  fa fa-expand',
			'  compress' =>	'  fa fa-compress',
			'  plus' =>	'  fa fa-plus',
			'  minus' =>	'  fa fa-minus',
			'  asterisk' =>	'  fa fa-asterisk',
			'  exclamation-circle' =>	'  fa fa-exclamation-circle',
			'  gift' =>	'  fa fa-gift',
			'  leaf' =>	'  fa fa-leaf',
			'  fire' =>	'  fa fa-fire',
			'  eye' =>	'  fa fa-eye',
			'  eye-slash' =>	'  fa fa-eye-slash',
			'  warning' =>	'  fa fa-warning',
			'  exclamation-triangle' =>	'  fa fa-exclamation-triangle',
			'  plane' =>	'  fa fa-plane',
			'  calendar' =>	'  fa fa-calendar',
			'  random' =>	'  fa fa-random',
			'  comment' =>	'  fa fa-comment',
			'  magnet' =>	'  fa fa-magnet',
			'  chevron-up' =>	'  fa fa-chevron-up',
			'  chevron-down' =>	'  fa fa-chevron-down',
			'  retweet' =>	'  fa fa-retweet',
			'  shopping-cart' =>	'  fa fa-shopping-cart',
			'  folder' =>	'  fa fa-folder',
			'  folder-open' =>	'  fa fa-folder-open',
			'  arrows-v' =>	'  fa fa-arrows-v',
			'  arrows-h' =>	'  fa fa-arrows-h',
			'  bar-chart-o' =>	'  fa fa-bar-chart-o',
			'  bar-chart' =>	'  fa fa-bar-chart',
			'  twitter-square' =>	'  fa fa-twitter-square',
			'  facebook-square' =>	'  fa fa-facebook-square',
			'  camera-retro' =>	'  fa fa-camera-retro',
			'  key' =>	'  fa fa-key',
			'  gears' =>	'  fa fa-gears',
			'  cogs' =>	'  fa fa-cogs',
			'  comments' =>	'  fa fa-comments',
			'  thumbs-o-up' =>	'  fa fa-thumbs-o-up',
			'  thumbs-o-down' =>	'  fa fa-thumbs-o-down',
			'  star-half' =>	'  fa fa-star-half',
			'  heart-o' =>	'  fa fa-heart-o',
			'  sign-out' =>	'  fa fa-sign-out',
			'  linkedin-square' =>	'  fa fa-linkedin-square',
			'  thumb-tack' =>	'  fa fa-thumb-tack',
			'  external-link' =>	'  fa fa-external-link',
			'  sign-in' =>	'  fa fa-sign-in',
			'  trophy' =>	'  fa fa-trophy',
			'  github-square' =>	'  fa fa-github-square',
			'  upload' =>	'  fa fa-upload',
			'  lemon-o' =>	'  fa fa-lemon-o',
			'  phone' =>	'  fa fa-phone',
			'  square-o' =>	'  fa fa-square-o',
			'  bookmark-o' =>	'  fa fa-bookmark-o',
			'  phone-square' =>	'  fa fa-phone-square',
			'  twitter' =>	'  fa fa-twitter',
			'  facebook' =>	'  fa fa-facebook',
			'  github' =>	'  fa fa-github',
			'  unlock' =>	'  fa fa-unlock',
			'  credit-card' =>	'  fa fa-credit-card',
			'  rss' =>	'  fa fa-rss',
			'  hdd-o' =>	'  fa fa-hdd-o',
			'  bullhorn' =>	'  fa fa-bullhorn',
			'  bell' =>	'  fa fa-bell',
			'  certificate' =>	'  fa fa-certificate',
			'  hand-o-right' =>	'  fa fa-hand-o-right',
			'  hand-o-left' =>	'  fa fa-hand-o-left',
			'  hand-o-up' =>	'  fa fa-hand-o-up',
			'  hand-o-down' =>	'  fa fa-hand-o-down',
			'  arrow-circle-left' =>	'  fa fa-arrow-circle-left',
			'  arrow-circle-right' =>	'  fa fa-arrow-circle-right',
			'  arrow-circle-up' =>	'  fa fa-arrow-circle-up',
			'  arrow-circle-down' =>	'  fa fa-arrow-circle-down',
			'  globe' =>	'  fa fa-globe',
			'  wrench' =>	'  fa fa-wrench',
			'  tasks' =>	'  fa fa-tasks',
			'  filter' =>	'  fa fa-filter',
			'  briefcase' =>	'  fa fa-briefcase',
			'  arrows-alt' =>	'  fa fa-arrows-alt',
			'  group' =>	'  fa fa-group',
			'  users' =>	'  fa fa-users',
			'  chain' =>	'  fa fa-chain',
			'  link' =>	'  fa fa-link',
			'  cloud' =>	'  fa fa-cloud',
			'  flask' =>	'  fa fa-flask',
			'  cut' =>	'  fa fa-cut',
			'  scissors' =>	'  fa fa-scissors',
			'  copy' =>	'  fa fa-copy',
			'  files-o' =>	'  fa fa-files-o',
			'  paperclip' =>	'  fa fa-paperclip',
			'  save' =>	'  fa fa-save',
			'  floppy-o' =>	'  fa fa-floppy-o',
			'  square' =>	'  fa fa-square',
			'  navicon' =>	'  fa fa-navicon',
			'  reorder' =>	'  fa fa-reorder',
			'  bars' =>	'  fa fa-bars',
			'  list-ul' =>	'  fa fa-list-ul',
			'  list-ol' =>	'  fa fa-list-ol',
			'  strikethrough' =>	'  fa fa-strikethrough',
			'  underline' =>	'  fa fa-underline',
			'  table' =>	'  fa fa-table',
			'  magic' =>	'  fa fa-magic',
			'  truck' =>	'  fa fa-truck',
			'  pinterest' =>	'  fa fa-pinterest',
			'  pinterest-square' =>	'  fa fa-pinterest-square',
			'  google-plus-square' =>	'  fa fa-google-plus-square',
			'  google-plus' =>	'  fa fa-google-plus',
			'  money' =>	'  fa fa-money',
			'  caret-down' =>	'  fa fa-caret-down',
			'  caret-up' =>	'  fa fa-caret-up',
			'  caret-left' =>	'  fa fa-caret-left',
			'  caret-right' =>	'  fa fa-caret-right',
			'  columns' =>	'  fa fa-columns',
			'  unsorted' =>	'  fa fa-unsorted',
			'  sort' =>	'  fa fa-sort',
			'  sort-down' =>	'  fa fa-sort-down',
			'  sort-desc' =>	'  fa fa-sort-desc',
			'  sort-up' =>	'  fa fa-sort-up',
			'  sort-asc' =>	'  fa fa-sort-asc',
			'  envelope' =>	'  fa fa-envelope',
			'  linkedin' =>	'  fa fa-linkedin',
			'  rotate-left' =>	'  fa fa-rotate-left',
			'  undo' =>	'  fa fa-undo',
			'  legal' =>	'  fa fa-legal',
			'  gavel' =>	'  fa fa-gavel',
			'  dashboard' =>	'  fa fa-dashboard',
			'  tachometer' =>	'  fa fa-tachometer',
			'  comment-o' =>	'  fa fa-comment-o',
			'  comments-o' =>	'  fa fa-comments-o',
			'  flash' =>	'  fa fa-flash',
			'  bolt' =>	'  fa fa-bolt',
			'  sitemap' =>	'  fa fa-sitemap',
			'  umbrella' =>	'  fa fa-umbrella',
			'  paste' =>	'  fa fa-paste',
			'  clipboard' =>	'  fa fa-clipboard',
			'  lightbulb-o' =>	'  fa fa-lightbulb-o',
			'  exchange' =>	'  fa fa-exchange',
			'  cloud-download' =>	'  fa fa-cloud-download',
			'  cloud-upload' =>	'  fa fa-cloud-upload',
			'  user-md' =>	'  fa fa-user-md',
			'  stethoscope' =>	'  fa fa-stethoscope',
			'  suitcase' =>	'  fa fa-suitcase',
			'  bell-o' =>	'  fa fa-bell-o',
			'  coffee' =>	'  fa fa-coffee',
			'  cutlery' =>	'  fa fa-cutlery',
			'  file-text-o' =>	'  fa fa-file-text-o',
			'  building-o' =>	'  fa fa-building-o',
			'  hospital-o' =>	'  fa fa-hospital-o',
			'  ambulance' =>	'  fa fa-ambulance',
			'  medkit' =>	'  fa fa-medkit',
			'  fighter-jet' =>	'  fa fa-fighter-jet',
			'  beer' =>	'  fa fa-beer',
			'  h-square' =>	'  fa fa-h-square',
			'  plus-square' =>	'  fa fa-plus-square',
			'  angle-double-left' =>	'  fa fa-angle-double-left',
			'  angle-double-right' =>	'  fa fa-angle-double-right',
			'  angle-double-up' =>	'  fa fa-angle-double-up',
			'  angle-double-down' =>	'  fa fa-angle-double-down',
			'  angle-left' =>	'  fa fa-angle-left',
			'  angle-right' =>	'  fa fa-angle-right',
			'  angle-up' =>	'  fa fa-angle-up',
			'  angle-down' =>	'  fa fa-angle-down',
			'  desktop' =>	'  fa fa-desktop',
			'  laptop' =>	'  fa fa-laptop',
			'  tablet' =>	'  fa fa-tablet',
			'  mobile-phone' =>	'  fa fa-mobile-phone',
			'  mobile' =>	'  fa fa-mobile',
			'  circle-o' =>	'  fa fa-circle-o',
			'  quote-left' =>	'  fa fa-quote-left',
			'  quote-right' =>	'  fa fa-quote-right',
			'  spinner' =>	'  fa fa-spinner',
			'  circle' =>	'  fa fa-circle',
			'  mail-reply' =>	'  fa fa-mail-reply',
			'  reply' =>	'  fa fa-reply',
			'  github-alt' =>	'  fa fa-github-alt',
			'  folder-o' =>	'  fa fa-folder-o',
			'  folder-open-o' =>	'  fa fa-folder-open-o',
			'  smile-o' =>	'  fa fa-smile-o',
			'  frown-o' =>	'  fa fa-frown-o',
			'  meh-o' =>	'  fa fa-meh-o',
			'  gamepad' =>	'  fa fa-gamepad',
			'  keyboard-o' =>	'  fa fa-keyboard-o',
			'  flag-o' =>	'  fa fa-flag-o',
			'  flag-checkered' =>	'  fa fa-flag-checkered',
			'  terminal' =>	'  fa fa-terminal',
			'  code' =>	'  fa fa-code',
			'  mail-reply-all' =>	'  fa fa-mail-reply-all',
			'  reply-all' =>	'  fa fa-reply-all',
			'  star-half-empty' =>	'  fa fa-star-half-empty',
			'  star-half-full' =>	'  fa fa-star-half-full',
			'  star-half-o' =>	'  fa fa-star-half-o',
			'  location-arrow' =>	'  fa fa-location-arrow',
			'  crop' =>	'  fa fa-crop',
			'  code-fork' =>	'  fa fa-code-fork',
			'  unlink' =>	'  fa fa-unlink',
			'  chain-broken' =>	'  fa fa-chain-broken',
			'  question' =>	'  fa fa-question',
			'  info' =>	'  fa fa-info',
			'  exclamation' =>	'  fa fa-exclamation',
			'  superscript' =>	'  fa fa-superscript',
			'  subscript' =>	'  fa fa-subscript',
			'  eraser' =>	'  fa fa-eraser',
			'  puzzle-piece' =>	'  fa fa-puzzle-piece',
			'  microphone' =>	'  fa fa-microphone',
			'  microphone-slash' =>	'  fa fa-microphone-slash',
			'  shield' =>	'  fa fa-shield',
			'  calendar-o' =>	'  fa fa-calendar-o',
			'  fire-extinguisher' =>	'  fa fa-fire-extinguisher',
			'  rocket' =>	'  fa fa-rocket',
			'  maxcdn' =>	'  fa fa-maxcdn',
			'  chevron-circle-left' =>	'  fa fa-chevron-circle-left',
			'  chevron-circle-right' =>	'  fa fa-chevron-circle-right',
			'  chevron-circle-up' =>	'  fa fa-chevron-circle-up',
			'  chevron-circle-down' =>	'  fa fa-chevron-circle-down',
			'  html5' =>	'  fa fa-html5',
			'  css3' =>	'  fa fa-css3',
			'  anchor' =>	'  fa fa-anchor',
			'  unlock-alt' =>	'  fa fa-unlock-alt',
			'  bullseye' =>	'  fa fa-bullseye',
			'  ellipsis-h' =>	'  fa fa-ellipsis-h',
			'  ellipsis-v' =>	'  fa fa-ellipsis-v',
			'  rss-square' =>	'  fa fa-rss-square',
			'  play-circle' =>	'  fa fa-play-circle',
			'  ticket' =>	'  fa fa-ticket',
			'  minus-square' =>	'  fa fa-minus-square',
			'  minus-square-o' =>	'  fa fa-minus-square-o',
			'  level-up' =>	'  fa fa-level-up',
			'  level-down' =>	'  fa fa-level-down',
			'  check-square' =>	'  fa fa-check-square',
			'  pencil-square' =>	'  fa fa-pencil-square',
			'  external-link-square' =>	'  fa fa-external-link-square',
			'  share-square' =>	'  fa fa-share-square',
			'  compass' =>	'  fa fa-compass',
			'  toggle-down' =>	'  fa fa-toggle-down',
			'  caret-square-o-down' =>	'  fa fa-caret-square-o-down',
			'  toggle-up' =>	'  fa fa-toggle-up',
			'  caret-square-o-up' =>	'  fa fa-caret-square-o-up',
			'  toggle-right' =>	'  fa fa-toggle-right',
			'  caret-square-o-right' =>	'  fa fa-caret-square-o-right',
			'  euro' =>	'  fa fa-euro',
			'  eur' =>	'  fa fa-eur',
			'  gbp' =>	'  fa fa-gbp',
			'  dollar' =>	'  fa fa-dollar',
			'  usd' =>	'  fa fa-usd',
			'  rupee' =>	'  fa fa-rupee',
			'  inr' =>	'  fa fa-inr',
			'  cny' =>	'  fa fa-cny',
			'  rmb' =>	'  fa fa-rmb',
			'  yen' =>	'  fa fa-yen',
			'  jpy' =>	'  fa fa-jpy',
			'  ruble' =>	'  fa fa-ruble',
			'  rouble' =>	'  fa fa-rouble',
			'  rub' =>	'  fa fa-rub',
			'  won' =>	'  fa fa-won',
			'  krw' =>	'  fa fa-krw',
			'  bitcoin' =>	'  fa fa-bitcoin',
			'  btc' =>	'  fa fa-btc',
			'  file' =>	'  fa fa-file',
			'  file-text' =>	'  fa fa-file-text',
			'  sort-alpha-asc' =>	'  fa fa-sort-alpha-asc',
			'  sort-alpha-desc' =>	'  fa fa-sort-alpha-desc',
			'  sort-amount-asc' =>	'  fa fa-sort-amount-asc',
			'  sort-amount-desc' =>	'  fa fa-sort-amount-desc',
			'  sort-numeric-asc' =>	'  fa fa-sort-numeric-asc',
			'  sort-numeric-desc' =>	'  fa fa-sort-numeric-desc',
			'  thumbs-up' =>	'  fa fa-thumbs-up',
			'  thumbs-down' =>	'  fa fa-thumbs-down',
			'  youtube-square' =>	'  fa fa-youtube-square',
			'  youtube' =>	'  fa fa-youtube',
			'  xing' =>	'  fa fa-xing',
			'  xing-square' =>	'  fa fa-xing-square',
			'  youtube-play' =>	'  fa fa-youtube-play',
			'  dropbox' =>	'  fa fa-dropbox',
			'  stack-overflow' =>	'  fa fa-stack-overflow',
			'  instagram' =>	'  fa fa-instagram',
			'  flickr' =>	'  fa fa-flickr',
			'  adn' =>	'  fa fa-adn',
			'  bitbucket' =>	'  fa fa-bitbucket',
			'  bitbucket-square' =>	'  fa fa-bitbucket-square',
			'  tumblr' =>	'  fa fa-tumblr',
			'  tumblr-square' =>	'  fa fa-tumblr-square',
			'  long-arrow-down' =>	'  fa fa-long-arrow-down',
			'  long-arrow-up' =>	'  fa fa-long-arrow-up',
			'  long-arrow-left' =>	'  fa fa-long-arrow-left',
			'  long-arrow-right' =>	'  fa fa-long-arrow-right',
			'  apple' =>	'  fa fa-apple',
			'  windows' =>	'  fa fa-windows',
			'  android' =>	'  fa fa-android',
			'  linux' =>	'  fa fa-linux',
			'  dribbble' =>	'  fa fa-dribbble',
			'  skype' =>	'  fa fa-skype',
			'  foursquare' =>	'  fa fa-foursquare',
			'  trello' =>	'  fa fa-trello',
			'  female' =>	'  fa fa-female',
			'  male' =>	'  fa fa-male',
			'  gittip' =>	'  fa fa-gittip',
			'  sun-o' =>	'  fa fa-sun-o',
			'  moon-o' =>	'  fa fa-moon-o',
			'  archive' =>	'  fa fa-archive',
			'  bug' =>	'  fa fa-bug',
			'  vk' =>	'  fa fa-vk',
			'  weibo' =>	'  fa fa-weibo',
			'  renren' =>	'  fa fa-renren',
			'  pagelines' =>	'  fa fa-pagelines',
			'  stack-exchange' =>	'  fa fa-stack-exchange',
			'  arrow-circle-o-right' =>	'  fa fa-arrow-circle-o-right',
			'  arrow-circle-o-left' =>	'  fa fa-arrow-circle-o-left',
			'  toggle-left' =>	'  fa fa-toggle-left',
			'  caret-square-o-left' =>	'  fa fa-caret-square-o-left',
			'  dot-circle-o' =>	'  fa fa-dot-circle-o',
			'  wheelchair' =>	'  fa fa-wheelchair',
			'  vimeo-square' =>	'  fa fa-vimeo-square',
			'  turkish-lira' =>	'  fa fa-turkish-lira',
			'  try' =>	'  fa fa-try',
			'  plus-square-o' =>	'  fa fa-plus-square-o',
			'  space-shuttle' =>	'  fa fa-space-shuttle',
			'  slack' =>	'  fa fa-slack',
			'  envelope-square' =>	'  fa fa-envelope-square',
			'  wordpress' =>	'  fa fa-wordpress',
			'  openid' =>	'  fa fa-openid',
			'  institution' =>	'  fa fa-institution',
			'  bank' =>	'  fa fa-bank',
			'  university' =>	'  fa fa-university',
			'  mortar-board' =>	'  fa fa-mortar-board',
			'  graduation-cap' =>	'  fa fa-graduation-cap',
			'  yahoo' =>	'  fa fa-yahoo',
			'  google' =>	'  fa fa-google',
			'  reddit' =>	'  fa fa-reddit',
			'  reddit-square' =>	'  fa fa-reddit-square',
			'  stumbleupon-circle' =>	'  fa fa-stumbleupon-circle',
			'  stumbleupon' =>	'  fa fa-stumbleupon',
			'  delicious' =>	'  fa fa-delicious',
			'  digg' =>	'  fa fa-digg',
			'  pied-piper' =>	'  fa fa-pied-piper',
			'  pied-piper-alt' =>	'  fa fa-pied-piper-alt',
			'  drupal' =>	'  fa fa-drupal',
			'  joomla' =>	'  fa fa-joomla',
			'  language' =>	'  fa fa-language',
			'  fax' =>	'  fa fa-fax',
			'  building' =>	'  fa fa-building',
			'  child' =>	'  fa fa-child',
			'  paw' =>	'  fa fa-paw',
			'  spoon' =>	'  fa fa-spoon',
			'  cube' =>	'  fa fa-cube',
			'  cubes' =>	'  fa fa-cubes',
			'  behance' =>	'  fa fa-behance',
			'  behance-square' =>	'  fa fa-behance-square',
			'  steam' =>	'  fa fa-steam',
			'  steam-square' =>	'  fa fa-steam-square',
			'  recycle' =>	'  fa fa-recycle',
			'  automobile' =>	'  fa fa-automobile',
			'  car' =>	'  fa fa-car',
			'  cab' =>	'  fa fa-cab',
			'  taxi' =>	'  fa fa-taxi',
			'  tree' =>	'  fa fa-tree',
			'  spotify' =>	'  fa fa-spotify',
			'  deviantart' =>	'  fa fa-deviantart',
			'  soundcloud' =>	'  fa fa-soundcloud',
			'  database' =>	'  fa fa-database',
			'  file-pdf-o' =>	'  fa fa-file-pdf-o',
			'  file-word-o' =>	'  fa fa-file-word-o',
			'  file-excel-o' =>	'  fa fa-file-excel-o',
			'  file-powerpoint-o' =>	'  fa fa-file-powerpoint-o',
			'  file-photo-o' =>	'  fa fa-file-photo-o',
			'  file-picture-o' =>	'  fa fa-file-picture-o',
			'  file-image-o' =>	'  fa fa-file-image-o',
			'  file-zip-o' =>	'  fa fa-file-zip-o',
			'  file-archive-o' =>	'  fa fa-file-archive-o',
			'  file-sound-o' =>	'  fa fa-file-sound-o',
			'  file-audio-o' =>	'  fa fa-file-audio-o',
			'  file-movie-o' =>	'  fa fa-file-movie-o',
			'  file-video-o' =>	'  fa fa-file-video-o',
			'  file-code-o' =>	'  fa fa-file-code-o',
			'  vine' =>	'  fa fa-vine',
			'  codepen' =>	'  fa fa-codepen',
			'  jsfiddle' =>	'  fa fa-jsfiddle',
			'  life-bouy' =>	'  fa fa-life-bouy',
			'  life-buoy' =>	'  fa fa-life-buoy',
			'  life-saver' =>	'  fa fa-life-saver',
			'  support' =>	'  fa fa-support',
			'  life-ring' =>	'  fa fa-life-ring',
			'  circle-o-notch' =>	'  fa fa-circle-o-notch',
			'  ra' =>	'  fa fa-ra',
			'  rebel' =>	'  fa fa-rebel',
			'  ge' =>	'  fa fa-ge',
			'  empire' =>	'  fa fa-empire',
			'  git-square' =>	'  fa fa-git-square',
			'  git' =>	'  fa fa-git',
			'  hacker-news' =>	'  fa fa-hacker-news',
			'  tencent-weibo' =>	'  fa fa-tencent-weibo',
			'  qq' =>	'  fa fa-qq',
			'  wechat' =>	'  fa fa-wechat',
			'  weixin' =>	'  fa fa-weixin',
			'  send' =>	'  fa fa-send',
			'  paper-plane' =>	'  fa fa-paper-plane',
			'  send-o' =>	'  fa fa-send-o',
			'  paper-plane-o' =>	'  fa fa-paper-plane-o',
			'  history' =>	'  fa fa-history',
			'  circle-thin' =>	'  fa fa-circle-thin',
			'  header' =>	'  fa fa-header',
			'  paragraph' =>	'  fa fa-paragraph',
			'  sliders' =>	'  fa fa-sliders',
			'  share-alt' =>	'  fa fa-share-alt',
			'  share-alt-square' =>	'  fa fa-share-alt-square',
			'  bomb' =>	'  fa fa-bomb',
			'  soccer-ball-o' =>	'  fa fa-soccer-ball-o',
			'  futbol-o' =>	'  fa fa-futbol-o',
			'  tty' =>	'  fa fa-tty',
			'  binoculars' =>	'  fa fa-binoculars',
			'  plug' =>	'  fa fa-plug',
			'  slideshare' =>	'  fa fa-slideshare',
			'  twitch' =>	'  fa fa-twitch',
			'  yelp' =>	'  fa fa-yelp',
			'  newspaper-o' =>	'  fa fa-newspaper-o',
			'  wifi' =>	'  fa fa-wifi',
			'  calculator' =>	'  fa fa-calculator',
			'  paypal' =>	'  fa fa-paypal',
			'  google-wallet' =>	'  fa fa-google-wallet',
			'  cc-visa' =>	'  fa fa-cc-visa',
			'  cc-mastercard' =>	'  fa fa-cc-mastercard',
			'  cc-discover' =>	'  fa fa-cc-discover',
			'  cc-amex' =>	'  fa fa-cc-amex',
			'  cc-paypal' =>	'  fa fa-cc-paypal',
			'  cc-stripe' =>	'  fa fa-cc-stripe',
			'  bell-slash' =>	'  fa fa-bell-slash',
			'  bell-slash-o' =>	'  fa fa-bell-slash-o',
			'  trash' =>	'  fa fa-trash',
			'  copyright' =>	'  fa fa-copyright',
			'  at' =>	'  fa fa-at',
			'  eyedropper' =>	'  fa fa-eyedropper',
			'  paint-brush' =>	'  fa fa-paint-brush',
			'  birthday-cake' =>	'  fa fa-birthday-cake',
			'  area-chart' =>	'  fa fa-area-chart',
			'  pie-chart' =>	'  fa fa-pie-chart',
			'  line-chart' =>	'  fa fa-line-chart',
			'  lastfm' =>	'  fa fa-lastfm',
			'  lastfm-square' =>	'  fa fa-lastfm-square',
			'  toggle-off' =>	'  fa fa-toggle-off',
			'  toggle-on' =>	'  fa fa-toggle-on',
			'  bicycle' =>	'  fa fa-bicycle',
			'  bus' =>	'  fa fa-bus',
			'  ioxhost' =>	'  fa fa-ioxhost',
			'  angellist' =>	'  fa fa-angellist',
			'  cc' =>	'  fa fa-cc',
			'  shekel' =>	'  fa fa-shekel',
			'  sheqel' =>	'  fa fa-sheqel',
			'  ils' =>	'  fa fa-ils',
			'  meanpath' =>	'  fa fa-meanpath',

		
		);		
		
		$icon_list_array = array_merge( $ionicons, $font_awesome );
		
		vc_map( array(
			'name' => esc_html( 'Icon', 'parada' ),
			'base' => 'parada_icon',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/computing.png",
			'category' => esc_html( 'Content', 'parada' ),
			'description' => esc_html( 'Icon( Ionicons, Fontawesome )', 'parada' ),
			'params' => array(
								
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Choose the icon', 'parada' ),
					'param_name' => 'icon',
					'value' => $icon_list_array,
					'description' => esc_html( 'Select the icon which you want ionicons, fonnt-awesome supported', 'parada' )
				),
				
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Icon Size', 'parada' ),
					'param_name' => 'size',
					'value' => array(
						 esc_html('Small', 'parada') => 'small',
						 esc_html( 'Large', 'parada' ) => 'large',	
						 esc_html( 'Huge', 'parada' ) => 'huge',	
						),
					'description' => esc_html( 'Select the icon size', 'parada' )
				),
				
				
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));		
		
		// service 1 vc_map 
		$service_categories = get_terms('service_type');
		$service_options = array("All" => "");
		foreach ($service_categories as $category) {
			$service_options[$category->name] = $category->slug;
		}
		
		vc_map( array(
			'name' => esc_html( 'Service', 'parada' ),
			'base' => 'parada_service',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/cpu.png",
			'category' => esc_html( 'Content', 'parada' ),
			'description' => esc_html( 'Service style 1', 'parada' ),
			'params' => array(
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Number of services to display', 'parada' ),
					'param_name' => 'posts',
					'description' => esc_html( 'Mention the number of posts that you want to display -1 for infinite posts', 'parada' )
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Service Categories', 'parada' ),
					'param_name' => 'service_categories',
					'value' => $service_options,
					'description' => esc_html( 'Categories of Services', 'parada' )
				),		
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
		vc_map( array(
			'name' => esc_html( 'Service 2', 'parada' ),
			'base' => 'parada_service_2',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/check.png",
			'category' => esc_html( 'Content', 'parada' ),
			'description' => esc_html( 'Service style 2', 'parada' ),
			'params' => array(
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'add icon', 'parada' ),
					'param_name' => 'icon_t',
					'description' => esc_html( 'Icon', 'parada' )
				),						
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Service class', 'parada' ),
					'param_name' => 'class_t',
					'description' => esc_html( 'Type title', 'parada' )
				),

				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Service Title', 'parada' ),
					'param_name' => 'title',
					'description' => esc_html( 'Type title', 'parada' )
				),
				
				array(
					'type' => 'textarea_html',
					'heading' => esc_html( 'content', 'parada' ),
					'param_name' => 'content',
					'value' => esc_html( 'add content here', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Linking', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'linking', 'parada' )
				),
			)
		
		));
		
		vc_map( array(
			'name' => esc_html( 'Pricing Table', 'parada' ),
			'base' => 'parada_pricingtable',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/dollar.png",
			'category' => esc_html( 'Content', 'parada' ),
			'description' => esc_html( 'Pricing column for many purpose', 'parada' ),
			'params' => array(
				
				
				array(
					'type' => 'textarea_html',
					'heading' => esc_html( 'Service description', 'parada' ),
					'param_name' => 'content',
					'value' => esc_html( 'Content', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
		vc_map( array(
			'name' => esc_html( 'Funfact', 'parada' ),
			'base' => 'parada_funfact',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/history.png",
			'category' => esc_html( 'Content', 'parada' ),
			'description' => esc_html( 'Funfact content', 'parada' ),
			'params' => array(
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'id', 'parada' ),
					'param_name' => 'icon',
					'description' => esc_html( 'add id for funfact', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Number count', 'parada' ),
					'param_name' => 'number',
					'description' => esc_html( 'Number count Ex: 98', 'parada' )
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Text', 'parada' ),
					'param_name' => 'title',
					'description' => esc_html( 'text for Funfact For Ex: AWARDED PROJECT', 'parada' )
				),	
			)
		
		));
		
		vc_map( array(
			'name' => esc_html( 'Progress Bar', 'parada' ),
			'base' => 'parada_progressbar',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/geometry.png",
			'category' => esc_html( 'Graphic', 'parada' ),
			'description' => esc_html( 'Progress bar for your site', 'parada' ),
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Percentage', 'parada' ),
					'param_name' => 'percentage',
					'description' => esc_html( 'Progress bar completion percentage <strong>for eg. 80</strong>', 'parada' )
				),				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Title', 'parada' ),
					'param_name' => 'title',
					'description' => esc_html( 'Progress bar title', 'parada' )
				),	
				
				array(
					'type' => 'colorpicker',
					'heading' => esc_html( 'Bar Color', 'parada' ),
					'param_name' => 'color',
					'description' => esc_html( 'select the progress bar color', 'parada' ),
				),
				
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Progress bar type', 'parada' ),
					'param_name' => 'type',
					'value' => array(	
						 esc_html( 'Bordered', 'parada') => '',
						 esc_html( 'Background colored', 'parada' ) => 'progress-bg',
					),
					'description' => esc_html( 'Select the progress bar type ', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
		
		vc_map( array(
			'name' => esc_html( 'List', 'parada' ),
			'base' => 'parada_list',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/list.png",
			'category' => esc_html( 'Content', 'parada' ),
			'description' => esc_html( 'List with icons ( Ionicons, Fontawesome )', 'parada' ),
			'params' => array(
								
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Choose the icon', 'parada' ),
					'param_name' => 'icon',
					'value' => $icon_list_array,
					'description' => esc_html( 'Select the icon which you want ionicons, fonnt-awesome supported', 'parada' )
				),
				
				array(
					'type' => 'textarea_html',
					'heading' => esc_html( 'List items', 'parada' ),
					'param_name' => 'content',
					'value' => esc_html( '<li>List item</li><li>List item</li><li>List item</li>', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
		vc_map( array(
			'name' => esc_html( 'Button', 'parada' ),
			'base' => 'parada_button',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/button.png",
			'category' => esc_html( 'Content', 'parada' ),
			'description' => esc_html( 'Various Button for eg. success, block', 'parada' ),
			'params' => array(
								
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Button Value', 'parada' ),
					'param_name' => 'value',
					'description' => esc_html( 'Value for the button', 'parada' )
				),
				array(
					'type' => 'href',
					'heading' => esc_html( 'Button URL', 'parada' ),
					'param_name' => 'url',
					'description' => esc_html( 'URL for the button', 'parada' )
				),
                array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Target', 'parada' ),
					'param_name' => 'tar_choice',
					'value' => array(	
						 esc_html( 'Same Tab', 'parada') => '_self',
						 esc_html( 'New Tab', 'parada') => '_blank',
					)
				),
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Choose button type', 'parada' ),
					'param_name' => 'choice',
					'value' => array(	
						 esc_html( 'Default', 'parada') => 'default',
						 esc_html( 'Primary', 'parada') => 'primary',
						 esc_html( 'White', 'parada') => 'white',
						 esc_html( 'Success', 'parada') => 'success',
						 esc_html( 'Warning', 'parada') => 'warning',
						 esc_html( 'Danger', 'parada') => 'danger',
						 esc_html( 'Info', 'parada') => 'info',
						 esc_html( 'Link', 'parada') => 'link',
					),
					'description' => esc_html( 'Select the button type...', 'parada' )
				),
				
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Choose the size of button', 'parada' ),
					'param_name' => 'size',
					'value' => array(	
						 esc_html( 'Default', 'parada') => '',
						 esc_html( 'Large', 'parada') => 'lg',
						 esc_html( 'Small', 'parada' ) => 'sm',
						 esc_html( 'Extra Small', 'parada' ) => 'xs',
						 esc_html( 'Block', 'parada' ) => 'block',
					),
					'description' => esc_html( 'Select the size of the button..', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Top margin', 'parada' ),
					'param_name' => 'margin_top',
					'description' => esc_html( 'You can use px, em, %, etc. or enter just number and it will use pixels.', 'parada' ),
					
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Bottom margin', 'parada' ),
					'param_name' => 'margin_bottom',
					'description' => esc_html( 'You can use px, em, %, etc. or enter just number and it will use pixels.', 'parada' ),
					
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
		vc_map( array(
			'name' => esc_html( 'Alerts', 'parada' ),
			'base' => 'parada_alerts',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/triangle.png",
			'category' => esc_html( 'Content', 'parada' ),
			'description' => esc_html( 'List with icons ( Ionicons, Fontawesome )', 'parada' ),
			'params' => array(
								
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Choose the icon', 'parada' ),
					'param_name' => 'choice',
					'value' => array(	
						 esc_html( 'Success', 'parada') => 'success',
						 esc_html( 'Danger', 'parada') => 'danger',
						 esc_html( 'Warning', 'parada' ) => 'warning',
						 esc_html( 'Info', 'parada' ) => 'info',
					),
					'description' => esc_html( 'Choose the releavant alert message type ', 'parada' )
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Dismissable alert', 'parada' ),
					'param_name' => 'dismissable',
					'description' => esc_html( 'if you want the close button..just check this', 'parada' ),
					'value' => array( esc_html( 'Yes', 'parada' ) => 'yes' )
				),
				
				array(
					'type' => 'textarea_html',
					'heading' => esc_html( 'Alert Message', 'parada' ),
					'param_name' => 'content',
					'value' => esc_html( 'Nam convallis velit ac nibh imperdiet, eget euismod eros consequat.', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
		vc_map( array(
			'name' => esc_html( 'Image', 'parada' ),
			'base' => 'parada_image',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/photography.png",
			'category' => esc_html( 'Media', 'parada' ),
			'description' => esc_html( 'Various type of image.. rounded, boxed, bordered', 'parada' ),
			'params' => array(
				
				array(
					'type' => 'attach_image',
					'heading' => esc_html( 'Select Image', 'parada' ),
					'param_name' => 'img_url',
					'description' => esc_html( 'Select the image', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Alt Text', 'parada' ),
					'param_name' => 'alt',
					'description' => esc_html( 'Alternative text in case of there is no image', 'parada' )
				),
				
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Bordered Image', 'parada' ),
					'param_name' => 'bordered',
					'description' => esc_html( 'if you want to use borders for your image tick yes', 'parada' ),
					'value' => array( esc_html( 'Yes', 'parada' ) => 'image-bordered' ),
					'edit_field_class' => 'vc_col-md-4 vc_column'
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Boxed Image', 'parada' ),
					'param_name' => 'boxed',
					'description' => esc_html( 'if you want to use box for your image tick it yes', 'parada' ),
					'value' => array( esc_html( 'Yes', 'parada' ) => 'image-boxed' ),
					'edit_field_class' => 'vc_col-md-4 vc_column'
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Rounded Image', 'parada' ),
					'param_name' => 'rounded',
					'description' => esc_html( 'make it yes for rounded image', 'parada' ),
					'value' => array( esc_html( 'Yes', 'parada' ) => 'img-circle' ),
					'edit_field_class' => 'vc_col-md-4 vc_column'
				),
				
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Image Link', 'parada' ),
					'param_name' => 'img_link',
					'description' => esc_html( 'If you have link behind the image then make it yes ', 'parada' ),
					'value' => array( esc_html( 'Yes', 'parada' ) => 'yes' )
				),
				array(
					'type' => 'href',
					'heading' => esc_html( 'Custom Image URL', 'parada' ),
					'param_name' => 'url',
					'description' => esc_html( 'If you want to use the custom image link instead of image link just type here', 'parada' ),
					'dependency' => array( 'element' => 'img_link', 'value' => 'yes' )
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Lightbox', 'parada' ),
					'param_name' => 'choice',
					'description' => esc_html( 'if you want the lightbox.. just enable this', 'parada' ),
					'value' => array( esc_html( 'Yes', 'parada' ) => 'yes' ),
					'dependency' => array( 'element' => 'img_link', 'value' => 'yes' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Data Lightbox', 'parada' ),
					'param_name' => 'lightbox',
					'description' => esc_html( 'lightbox identifier for image.. by using the same identifier you can make the gallery', 'parada' ),
					'dependency' => array( 'element' => 'choice', 'value' => 'yes' )
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Data Title', 'parada' ),
					'param_name' => 'title',
					'description' => esc_html( 'Image title in lightbox', 'parada' ),
					'dependency' => array( 'element' => 'choice', 'value' => 'yes' )
				),
				
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
		vc_map( array(
			'name' => esc_html( 'Video', 'parada' ),
			'base' => 'parada_video',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/video.png",
			'category' => esc_html( 'Media', 'parada' ),
			'description' => esc_html( 'Youtube, Vimeo, etc.. any embedded video', 'parada' ),
			'params' => array(
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Fullwidth BG video', 'parada' ),
					'param_name' => 'fullwidth',
					'description' => esc_html( 'if you want fullwidth video just check it', 'parada' ),
					'value' => array( esc_html( 'Yes', 'parada' ) => 'yes', esc_html( 'No', 'parada' ) => 'no' )
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'URL', 'parada' ),
					'param_name' => 'url',
					'description' => esc_html( 'Youtube URL of the Video', 'parada' ),
					'dependency' => array( 'element' => 'fullwidth', 'value' => 'yes' )
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Video Height', 'parada' ),
					'param_name' => 'height',
					'description' => esc_html( 'height of video container!.. for eg.450', 'parada' ),
					'dependency' => array( 'element' => 'fullwidth', 'value' => 'yes' )
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Auto Play', 'parada' ),
					'param_name' => 'auto_play',
					'description' => esc_html( 'video starts automatically..', 'parada' ),
					'value' => array( esc_html( 'Yes', 'parada' ) => 'true' ),
					'dependency' => array( 'element' => 'fullwidth', 'value' => 'yes' )
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Loop', 'parada' ),
					'param_name' => 'loop',
					'description' => esc_html( 'It repeat the video once completed!.', 'parada' ),
					'value' => array( esc_html( 'Yes', 'parada' ) => 'true' ),
					'dependency' => array( 'element' => 'fullwidth', 'value' => 'yes' )
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Volume level', 'parada' ),
					'param_name' => 'vol',
					'description' => esc_html( 'Set a default volume level of the video..for eg. 50', 'parada' ),
					'dependency' => array( 'element' => 'fullwidth', 'value' => 'yes' )
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Mute', 'parada' ),
					'param_name' => 'mute',
					'description' => esc_html( 'Muted video', 'parada' ),
					'value' => array( esc_html( 'Yes', 'parada' ) => 'true' ),
					'dependency' => array( 'element' => 'fullwidth', 'value' => 'yes' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Start at', 'parada' ),
					'param_name' => 'start_at',
					'description' => esc_html( 'Starting from N second.. for eg. 20 ', 'parada' ),
					'dependency' => array( 'element' => 'fullwidth', 'value' => 'yes' )
				),
				
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Choose the quality', 'parada' ),
					'param_name' => 'quality',
					'value' => array(	
						 esc_html( 'Default(small)', 'parada') => 'default',
						 esc_html( 'Medium', 'parada') => 'medium',
						 esc_html( 'Large', 'parada') => 'large',
						 esc_html( '720p', 'parada' ) => 'hd720',
						 esc_html( '1080p', 'parada' ) => 'hd1080',
						 esc_html( 'High', 'parada' ) => 'highres',
					),
					'description' => esc_html( 'Choose the releavant resolution quality ', 'parada' ),
					'dependency' => array( 'element' => 'fullwidth', 'value' => 'yes' )
				),
				
				
				array(
					'type' => 'textarea_safe',
					'heading' => esc_html( 'Video embed iframe', 'parada' ),
					'param_name' => 'embed',
					'description' => esc_html('Your embeded URL to display a video.. all video source supported', 'parada'),
					'dependency' => array( 'element' => 'fullwidth', 'value' => 'no' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
		vc_map( array(
			'name' => esc_html( 'Custom Slider', 'parada' ),
			'base' => 'parada_custom_slider',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/switch.png",
			'category' => esc_html( 'Media', 'parada' ),
			'description' => esc_html( 'Custom slider for making simple gallery and slider', 'parada' ),
			'params' => array(
				
				array(
					'type' => 'attach_images',
					'heading' => esc_html( 'Select Image', 'parada' ),
					'param_name' => 'source',
					'description' => esc_html( 'Select the image for slider', 'parada' )
				),
				
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
		vc_map( array(
			'name' => esc_html( 'Gmap', 'parada' ),
			'base' => 'parada_gmap',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/map.png",
			'category' => esc_html( 'Graphic', 'parada' ),
			'description' => esc_html( 'Google Map', 'parada' ),
			'params' => array(
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Height', 'parada' ),
					'param_name' => 'height',
					'description' => esc_html( 'Height of the map', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
			)
		
		));
		
		// team vc_map 
		$team_categories = get_terms('team_type');
		$team_options = array("All" => "");
		foreach ($team_categories as $category) {
			$team_options[$category->name] = $category->slug;
		}
		
		vc_map( array(
			'name' => esc_html( 'Team', 'parada' ),
			'base' => 'parada_team',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/add.png",
			'category' => esc_html( 'carousel', 'parada' ),
			'description' => esc_html( 'display team by getting the team member post type', 'parada' ),
			'params' => array(
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Number of members to display', 'parada' ),
					'param_name' => 'posts_per_page',
					'description' => esc_html( 'Mention the number of posts that you want to display -1 for infinite posts', 'parada' )
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Team Categories', 'parada' ),
					'param_name' => 'team_categories',
					'value' => $team_options,
					'description' => esc_html( 'Categories of Team', 'parada' )
				),
				
			)
		
		));
		
		// client vc_map 
		$client_categories = get_terms('client_type');
		$client_options = array("All" => "");
		foreach ($client_categories as $category) {
			$client_options[$category->name] = $category->slug;
		}
		
		vc_map( array(
			'name' => esc_html( 'Clients', 'parada' ),
			'base' => 'parada_clients',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/users.png",
			'category' => esc_html( 'carousel', 'parada' ),
			'description' => esc_html( 'display clients by getting the clients post type', 'parada' ),
			'params' => array(
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Number of clients to display', 'parada' ),
					'param_name' => 'posts',
					'description' => esc_html( 'Mention the number of posts that you want to display -1 for infinite posts', 'parada' )
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Client Categories', 'parada' ),
					'param_name' => 'client_categories',
					'value' => $client_options,
					'description' => esc_html( 'Categories of Clients', 'parada' )
				),
				
			)
		
		));
		
		
		// testimonial vc_map 
		$test_categories = get_terms('testi_type');
		$test_options = array("All" => "");
		foreach ($test_categories as $category) {
			$test_options[$category->name] = $category->slug;
		}
		
		vc_map( array(
			'name' => esc_html( 'Testimonials', 'parada' ),
			'base' => 'parada_testimonials',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/smiling.png",
			'category' => esc_html( 'carousel', 'parada' ),
			'description' => esc_html( 'display testimonials by getting the testimonials post type', 'parada' ),
			'params' => array(
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Number of testimonial to display', 'parada' ),
					'param_name' => 'posts',
					'description' => esc_html( 'Mention the number of testimonial that you want to display -1 for infinite posts', 'parada' )
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Extra Class', 'parada' ),
					'param_name' => 'class',
					'description' => esc_html( 'extra class for the element', 'parada' )
				),
				
			)
		
		));
		
		
		
		// Portfolio and Blog post
		$blog_categories = get_categories();

		$blog_options = array("All" => "");
		
		foreach ($blog_categories as $category) {
			$blog_options[$category->name] = $category->slug;
		}
		
		
		$portfolio_categories = get_terms('types');

		$portfolio_options = array("All" => "all");
		
		foreach ($portfolio_categories as $category) {
			$portfolio_options[$category->name] = $category->slug;
		}


		vc_map( array(
			'name' => esc_html( 'Posts / portfolio', 'parada' ),
			'base' => 'parada_posts',
			'icon' => get_template_directory_uri() . "/css/vc_style/img/note.png",
			'category' => esc_html( 'Content', 'parada' ),
			'description' => esc_html( 'Choose the post & portfolio post type to show the loop!!', 'parada' ),
			'params' => array(
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Select the post type', 'parada' ),
					'param_name' => 'posttype',
					'value' => array(	
						 esc_html( 'Posts', 'parada') => 'post',
						 esc_html( 'Portfolio', 'parada') => 'portfolio',
					),
					'description' => esc_html( 'Display the post from the various post types', 'parada' )
				),
				
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Categories', 'parada' ),
					'param_name' => 'blog_categories',
					'value' => $blog_options,
					'description' => esc_html( 'Categories of post typemultiple selction with <strong>\'all\' will ignore tha \'all\'</strong>', 'parada' ),
					'dependency' => array( 'element' => 'posttype', 'value' => 'post' )
				),
				
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Portfolio style', 'parada' ),
					'param_name' => 'portfolio_style',
					'value' => array(	
						 esc_html( 'Default', 'parada') => '',
						 esc_html( 'No slide', 'parada') => '1',
					),
					'description' => esc_html( 'Another layout style for Portfolio', 'parada' ),
					'dependency' => array( 'element' => 'posttype', 'value' => 'portfolio' )
				),
				
				array(
					'type' => 'checkbox',
					'heading' => esc_html( 'Portfolio Categories', 'parada' ),
					'param_name' => 'portfolio_categories',
					'value' => $portfolio_options,
					'description' => esc_html( 'Categories of portfolio post type', 'parada' ),
					'dependency' => array( 'element' => 'posttype', 'value' => 'portfolio' )
				),				
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Number of Posts to display', 'parada' ),
					'param_name' => 'posts_per_page',
					'description' => esc_html( 'Mention the number of posts that you want to display -1 for infinite posts', 'parada' )
				),
				
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Order', 'parada' ),
					'param_name' => 'order',
					'value' => array(	
						 esc_html( 'Descending ', 'parada') => 'DESC',
						 esc_html( 'Ascending', 'parada') => 'ASC',
					),
				),
				array(
					'type' => 'dropdown',
					'heading' => esc_html( 'Order by', 'parada' ),
					'param_name' => 'order_by',
					'value' => array(						
						 esc_html( 'None', 'parada') => 'none',
						 esc_html( 'Post ID', 'parada') => 'id',
						 esc_html( 'Post author', 'parada') => 'author',
						 esc_html( 'Post title', 'parada') => 'title',
						 esc_html( 'Post slug', 'parada') => 'name',
						 esc_html( 'Date', 'parada') => 'date',
						 esc_html( 'Last modified date', 'parada') => 'modified',
						 esc_html( 'Random', 'parada') => 'rand',
						 esc_html( 'Comments number', 'parada') => 'comment_count',
						 esc_html( 'Menu order', 'parada') => 'menu_order',
					),
				),
				
				array(
					'type' => 'textfield',
					'heading' => esc_html( 'Posts to exclude', 'parada' ),
					'param_name' => 'post_not_in',
					'description' => esc_html( 'Excludes the posts by id ex: 24', 'parada' )
				),
				
			)
		
		));
		
    }
    
    /*
    Shortcode logic how it should be rendered
    */
   	public static function parada_section_heading( $atts = null, $content = null ) {

		$atts = shortcode_atts( array(
				'choice'  => '1',
				'heading' => '',
				'additional' => '',
				'class'  => ''
			), $atts, 'parada_section_heading' );
		
		$output='
		       <div class="page-section">
				<div class="container">
					<h2 class="title bold text-center" data-bgtext="'.$atts['heading'].'">
						'.$atts['additional'].'
					</h2>
				</div>
			   </div>
		' ;
		
		return $output;
    }
	
	// heading
	public static function parada_heading( $atts = null, $content = null ) {
		$atts = shortcode_atts( array(
				'choice'  => '3',
				'heading' => '',
				'font_size' => '',
				'align' => 'left',
				'margin_bottom' => '',
				'class'  => ''
			), $atts, 'parada_heading' );
		
		
		if( $atts['choice'] != 'div' ){ 
			$output= '<h'.$atts['choice'].' class="' . $atts['class'] . ' text-'.$atts['align'].'" style=" margin-bottom: ' . ( preg_match( '/(px|em|\%|pt|cm)$/', $atts['margin_bottom'] ) ? $atts['margin_bottom'] : $atts['margin_bottom'] . 'px' ) . '; ">' . $atts['heading'] . '</h'.$atts['choice'].'>' ;	
		}
		else{
			$output= '<'.$atts['choice'].' class="' . $atts['class'] . ' text-'.$atts['align'].' primary-typo" style=" font-size:'.( preg_match( '/(px|em|\%|pt|cm)$/', $atts['font_size'] ) ? $atts['font_size'] : $atts['font_size'] . 'px' ).'; margin-bottom: ' . ( preg_match( '/(px|em|\%|pt|cm)$/', $atts['margin_bottom'] ) ? $atts['margin_bottom'] : $atts['margin_bottom'] . 'px' ) . '; ">' . $atts['heading'] . '</'.$atts['choice'].'>' ;	
		}
		return $output;
	}
	
	
	// Title page
	public static function parada_blockquote( $atts = null, $content = null ) {
		$atts = shortcode_atts( array(
				'title' => '',
				'class'=> ''
			), $atts, 'Title page' );
			
		$output = '
		<h3 class="title">'.$atts['title'].'</h3>
        <p class="description">' . wpb_js_remove_wpautop($content, true) . '</p>		
		';	
		
		return $output;
	}

	// intro service
	public static function parada_s_intro( $atts = null, $content = null ) {
		$atts = shortcode_atts( array(
				'img_url' => '',
				'icon' => '',
				'text' => '',
				'link' => '',
				'class' => ''
			), $atts, 'intro_s' );
			
		$img = wp_get_attachment_url( $atts['img_url'] );
		
		$output = '
		         <h4><span>'.$atts['icon'].'</span>'.$atts['text'].'</h4>
				  '.wpb_js_remove_wpautop($content, true).'
		    ';		
		
		return $output;
	}
	
	// separator
	public static function parada_separator( $atts = null, $content = null ) {
		$atts = shortcode_atts( array(		
				'choice' => '',
				'text' => '',
				'width' => '',
				'align' => '',
				'style' => '',
				'color' => '',
				'class' => ''
			), $atts, 'separator' );
		
		$text = '';
		
		if( $atts['text'] != '' ){
			$text = '<p style="color:'.$atts['color'].'">'.$atts['text'].'</p>';			
		}
		
		$output = '<div class="'.$atts['class'].' separator separator_'.$atts['align'].'" style="width:'.$atts['width'].'%; ">
					<span class="sep_holder sep_holder_l"><span style="border-top-style:'.$atts['style'].'; border-color:'.$atts['color'].'" class="sep_line"></span></span>
					'.$text.'
					<span class="sep_holder sep_holder_r"><span style="border-top-style:'.$atts['style'].'; border-color:'.$atts['color'].'" class="sep_line"></span></span>
				</div>';
		
		return $output;
	}
	
	// Quote
	
	public static function parada_quote( $atts, $content=null ){
		$atts=shortcode_atts(array(
			'quote' =>'Call to action',
			'color' => '',
			'button' =>'button',
			'choice' => '',
			'button_url' =>'#',
			'class'=>''
		), $atts, 'parada_quote');			
		
		$color = '';
		if( !empty($atts['color']) ){
			$color = 'style="color:'.$atts['color'].'; "';	
		}
			
		$output = '
		         '.$atts['quote'].'
				  <div class="clearfix"></div>
				  <!-- end clearfix --> 
				  <a href="'.$atts['button_url'].'">'.$atts['button'].' </a> ';
				
		return $output;
	}
	
	//icon
	public static function parada_icon($atts=null, $content=null ){
		$atts = shortcode_atts(array(
			'icon' => '',
			'size' =>'large-icon',
			'class'=>'',
		
		), $atts);
		
		$output = '<i class="'.$atts['class'].' '.$atts['icon'].' '.$atts['size'].'-icon"></i>';
		
		return $output;
		
	}
	
	
	//Service
	public static function parada_service($atts=null, $content=null){
		$atts = shortcode_atts( array(
				'posts' => '-1',
				'service_categories'	=> '',
				'class' => ''
			), $atts, 'services' );	
		
		global $service_cat, $no_posts ;
		$service_categories = $atts['service_categories'] ;
		if(!empty($service_categories)){
		$service_cat = array( array(
						'taxonomy' => 'service_type',
						'field' => 'slug',
						'terms' =>  explode( ',', $service_categories )  ) ) ;
		}
		
		$no_posts = $atts['posts'];
		$extra_class = $atts['class'];
		
		ob_start(); 
		
			get_template_part( 'content', 'services' );  
			
		$output = ob_get_contents();
        
        ob_end_clean();
		
		return $output ;
	}
	
	
	
	//service2
	public static function parada_service_2($atts=null, $content=null ){
		$atts = shortcode_atts(array(
			'icon_t' => '',
			'class_t' => '',
			'title' => 'Service',
			'class'=>'',
		
		), $atts, 'service_2' );
		
		$output= '
		    <div class="icon-box icon-top '.$atts['class_t'].'">
				<i class="pe-7s-'.$atts['icon_t'].'"></i>
				<p class="separator"></p>
				<div class="icon-box-details">
				   <h5 class="title bold">'.$atts['title'].'</h5>
				   <p>'.wpb_js_remove_wpautop($content, true).'</p>
				</div>
				</div>
	      ';
		
		return $output;
		
	}
	
	
	//pricing table
	public static function parada_pricingtable($atts = null, $content = null){
		$atts = shortcode_atts(array(
				'class' => ''
		
		), $atts, 'pricingtable' );		
		
			$output= '<div class="'.$atts['class'].'">
						
						'.wpb_js_remove_wpautop($content, true).'
						
					  </div>';
		
		return $output;
	}
	
	// Funfact
	public static function parada_funfact($atts = null, $content = null){
		$atts = shortcode_atts(array(
				'icon' => '',
				'title' => '',
				'number' => '',
				'class' => ''
		
		), $atts, 'funfact' );

		$output= '<span class="numbers odometer '.$atts['class'].'" id="'.$atts['icon'].'">'.$atts['number'].'</span><span class="symbol">%</span>
                 <h6>'.$atts['title'].'</h6>';
		
		return $output;
	}
	
	// Progress bar
	public static function  parada_progressbar($atts = null, $content = null){
		$atts = shortcode_atts(array(
				'percentage' => '',
				'title' => '',
				'color' => '',
				'type' => '',
				'class' => '',
		
		), $atts, 'circlebar' );
		
		
		$output= '<p class="progress-heading">'.$atts['title'].'<span>'.$atts['percentage'].'%</span> </p>
		<div class="progress '.$atts['type'].'" style=" border-color:'.$atts['color'].'">
			<div class="'.$atts['class'].'  progress-bar" style="width:'.$atts['percentage'].'%; background-color:'.$atts['color'].'" role="progressbar" aria-valuenow="'.$atts['percentage'].'" aria-valuemin="0" aria-valuemax="100">
				<span class="sr-only">'.$atts['percentage'].'% Complete</span>
			</div>
		</div>';
		
		return $output;
	}
	

	// list
	public static function parada_list( $atts = null, $content = null ) {
		$atts = shortcode_atts( array(
				'icon' => 'icon ion-ios-check',
				'class' => '',
			), $atts, 'lists' );
		
		$icon = '<span><i class="'.$atts['icon'].'"></i></span>';
				
		return '<div class="'.$atts['class'].' list-icon">' . str_replace( '<li>', '<li>' . $icon . ' ', wpb_js_remove_wpautop($content, true) ) . '</div>';
	}

	// button
	public static function parada_button( $atts = null, $content = null ) {
		$atts = shortcode_atts( array(
				'value'  => 'Button',
				'url'        => '',
                'tar_choice' => '_self',
				'choice'       => 'primary',
				'size'       => '',
				'margin_top'       => '',
				'margin_bottom'       => '',
				'class'  => ''
			), $atts, 'button' );
		
		
		$size = 'btn-'.$atts['size'].'';	
		if( $atts['size'] == '' ){
			$size = '';	
		}
		
		$output= '<a class=" '.$atts['class'].' btn btn-'.$atts['choice'].' '.$size.'" target="'.$atts['tar_choice'].'" style="margin-bottom: ' . ( preg_match( '/(px|em|\%|pt|cm)$/', $atts['margin_bottom'] ) ? $atts['margin_bottom'] : $atts['margin_bottom'] . 'px' ) . '; margin-top: ' . ( preg_match( '/(px|em|\%|pt|cm)$/', $atts['margin_top'] ) ? $atts['margin_top'] : $atts['margin_top'] . 'px' ) . ';" href="'.$atts['url'].'"> '.$atts['value'].'</a>';
		
		return $output;
	}
	
	// Alerts
	public static function parada_alerts( $atts = null, $content = null ) {
		$atts = shortcode_atts( array(
				'choice' => 'success',
				'dismissable' => '',
				'class' => ''
			), $atts, 'alerts' );
			
		if($atts['dismissable'] == 'yes'){
			$output = '<div class="'.$atts['class'].' alert alert-'.$atts['choice'].' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.wpb_js_remove_wpautop($content, true).'</div>';	
		}
		else{
			$output = '<div class="'.$atts['class'].' alert alert-'.$atts['choice'].'">'.wpb_js_remove_wpautop($content, true).'</div>';	
		}
		
		return $output;
	}
	
	// Image
	public static function parada_image( $atts = null, $content = null ) {
		$atts = shortcode_atts( array(
				'img_url' => '',
				'alt' => '',
				'bordered' => '',
				'boxed' => '',
				'rounded' => '',
				'img_link' => '',
				'url' => '',
				'choice' => '',
				'lightbox' => '',
				'title' => '',
				'class'  => ''
			), $atts, 'image' );
			
			
			$img = wp_get_attachment_url( $atts['img_url'] );
			$output = '<img src="'.$img.'" class="'. $atts['class'] .' '.$atts['boxed'].' '.$atts['rounded'].' '.$atts['bordered'].'" alt="'.$atts['alt'].'"/>' ;			
			if( $atts['img_link'] == 'yes' ){				
				$link = ( $atts['url'] != '' )? $atts['url'] :	$img;	
				$lightbox = '';
				if( $atts['choice'] == 'yes' ){
					$lightbox = 'data-lightbox="'.$atts['lightbox'].'" data-title="'.$atts['title'].'"';	
				}
				
				$output = '<a href="'.$link.'" '.$lightbox.' >'.$output.'</a>';
			}
				
		return $output;
	}
	
	
	// video
	public static function parada_video( $atts = null, $content = null ) {
		$atts = shortcode_atts( array(
				'fullwidth' => '',
				'height' => '',
				'url' => '#',
				'auto_play' => 'false',
				'loop' => 'false',
				'vol' => '50',
				'mute' => 'false',
				'start_at' => '0',
				'quality' => 'default',
				'embed' => '',
				'class'  => ''
			), $atts, 'video' );
			
			if( $atts['fullwidth'] != 'yes' ){
				$output = '<div class="'.$atts['class'].' custom-video">
						'.trim( vc_value_from_safe( $atts['embed'] ) ).'
					</div>	' ;	
			}
			else{
				$height = '';
				if( $atts['height'] != '' ){
					$height = 'style="height:'.$atts['height'].'px"';
				}
				$output = '<div class="'.$atts['class'].' section-video" '.$height.'>
						<div>
							<a id="bgndVideo" class="player" data-property="{videoURL:\''.$atts['url'].'\', containment:\'.section-video\', showControls:false, autoPlay:'.$atts['auto_play'].', loop:'.$atts['loop'].', vol:'.$atts['vol'].', mute:'.$atts['mute'].', startAt:'.$atts['start_at'].', opacity:1, addRaster:false, quality:\''.$atts['quality'].'\'}">My video</a>
						</div>
						<div class="section-video-bg-overlay"></div>
						<div class="video-nav-control">				
							<div class="section-video-controls">
								<div class="section-video-button">
									<a class="command command-play" href="#"><i class="icon ion-ios-play large-icon"></i></a>
									<a class="command command-pause" href="#"><i class="icon ion-ios-pause large-icon"></i></a>
									<a class="command-vol" href="#"><i class="icon ion-ios-volume-high large-icon"></i></a>
								</div>
							</div>
						</div>
					</div>' ;	
			}
		return $output;
	}
	
	
	// gmap
	public static function parada_gmap( $atts = null, $content = null ) {
		$atts = shortcode_atts( array(
				'height'     => 400,
				'class' => ''
			), $atts, 'gmap' );
			
		return '<div id="map" class="'.$atts['class'].'" style="height:'.$atts['height'].'px"></div>';
	}
	
	//team
	public static function parada_team($atts=null, $content=null){
		$atts = shortcode_atts( array(
				'posts_per_page' => get_option( 'posts_per_page' ),
				'team_categories'	=> ''
			), $atts, 'team' );			
		
			
		$team_categories = $atts['team_categories'] ;
		
		
		if(!empty($team_categories)){		
			$team_cat = array(array(
							'taxonomy' => 'team_types',
							'field' => 'slug',
							'terms' =>  explode( ',', $team_categories ) ) );
		}				
		global $posts_per_page;
		ob_start(); 
		
			get_template_part( 'content', 'team' );  
	
		$output = ob_get_contents();
		
		ob_end_clean();
		
		return $output ;
	}
	
	//Clients	
	public static function parada_clients($atts=null, $content=null){
		$atts = shortcode_atts( array(
				'posts' => '-1',
				'client_categories'	=> '',
			), $atts, 'clients' );
		
		$client_categories = $atts['client_categories'] ;
		if(!empty($client_categories)){
		$client_cat = array( array(
						'taxonomy' => 'client_types',
						'field' => 'slug',
						'terms' =>  explode( ',', $client_categories )  ) ) ;
			
		}
				
		$no_posts = $atts['posts'];
				
		ob_start(); 
		
    		get_template_part( 'content', 'clients' );
			
        $output = ob_get_contents();
        
        ob_end_clean();
		
		return $output ;
	}
	
	//Testimonials	
	public static function parada_testimonials($atts=null, $content=null){
		$atts = shortcode_atts( array(
				'posts' => '-1',
				'testimonial_categories'	=> '',
				'class' => ''
			), $atts, 'testimonials' );	
		
		$testimonial_categories = $atts['testimonial_categories'] ;
		if(!empty($testimonial_categories)){
		$quote_cat = array( array(
						'taxonomy' => 'testimonial_types',
						'field' => 'slug',
						'terms' =>  explode( ',', $testimonial_categories )  ) ) ;
		}
		
		$no_posts = $atts['posts'];
		$extra_class = $atts['class'];
		
		ob_start(); 
		
			get_template_part( 'content', 'testimonials' );  
			
		$output = ob_get_contents();
        
        ob_end_clean();
		
		return $output ;
	}
	

	// Post & portfolio post type
	public static function parada_posts( $atts = null, $content = null ) {
		// Prepare error var
		$error = null;
		// Parse attributes
		$atts = shortcode_atts( array(
				
				'posttype'	=> '',				
				'blog_categories'	=> '',
				'portfolio_categories'	=> '',
				'portfolio_style'	=> '',			
				'posts_per_page'	=> get_option( 'posts_per_page' ),
				'order'	=> 'DESC',
				'order_by'	=> 'date',
				'post_not_in'	=>'',
			), $atts, 'posts' );
		
		$tax_args = $carousel = $blog_cat = '';
		
		$order = sanitize_key( $atts['order'] );
		$orderby = sanitize_key( $atts['order_by'] );
		$post_type = $atts['posttype'] ;
		$posts_per_page = intval( $atts['posts_per_page'] );
		$blog_categories = $atts['blog_categories'] ;
		$portfolio_categories = $atts['portfoliocategory'] ;
		$exclude_ids = explode( ',', $atts['post_not_in'] );
		
		if( $post_type == 'portfolio' ){
			$category = $portfolio_categories;	
		}
		else{
			$category = $blog_categories;
		}
		
		// If taxonomy attributes, create a taxonomy query
		if ( !empty( $portfolio_categories ) && $post_type == 'portfolio' ) {
						
			$tax_args = array( array(
						'taxonomy' => 'types',
						'field' => 'slug',
						'terms' =>  explode( ',', $category )  ) ) ;
			
		}
		else{
		$blog_cat =  $category;
				
		}
		$args = array(
			'category_name'  => $blog_cat,
			'order'          => $order,
			'orderby'        => $orderby,
			'post_type'      => $post_type,
			'posts_per_page' => $posts_per_page,
			'post__not_in'   => $exclude_ids,	
			'tax_query' => $tax_args
		);
		
		// Save original posts
		$original_post = $parada_new_post;
		// Query posts
		$parada_new_post = new WP_Query( $args );
		// Buffer output
		ob_start();
		
		if( $post_type == 'portfolio' ){ ?>
			 
				<ul class="home-gallery">							
										<?php 
										
										// The Loop
										if ( $parada_new_post->have_posts() ) :
											while ( $parada_new_post->have_posts() ) : $parada_new_post->the_post(); 
											$postid = $parada_new_post->post->ID;
											$portfolio_add = get_post_meta( $postid, 'portfolio_add', true );
											$blogimageurl = wp_get_attachment_url( get_post_thumbnail_id($parada_post->ID) );
											$terms = get_the_terms( $parada_post->ID, 'types' );
											 
											if ( $terms && ! is_wp_error( $terms ) ) :
												$links = array();
							
												foreach ( $terms as $term )
												{
													$links[] = $term->name;
												}
												$links = str_replace(' ', '-', $links);
												$tax = join( " ", $links );    
											else : 
												$tax = ''; 
											endif;
											?>	
											<?php switch( $atts[ 'portfolio_style' ] ){	

		                                	case '1' :?>
											 <li class="<?php echo esc_attr($portfolio_add) ?>">
												<figure><img src="<?php echo esc_url($blogimageurl) ?>" alt="" class="image">
												  <figcaption>
													<div class="table-middle">
													  <div class="inner"> <a href="<?php echo esc_url($blogimageurl) ?>" class="fancybox">
														<h3><?php the_title(); ?></h3>
														<?php
																$terms = get_the_terms( $post->ID, 'types' );                         
																if ( $terms && ! is_wp_error( $terms ) ) :
																	foreach ( $terms as $term )
																	{	
																		echo '<small>'.$term->name.'</small>';
																	}   
																endif;
														?> <img src="<?php echo get_template_directory_uri(); ?>/images/shape-gray-wave.png" alt="" class="wave"> </a> </div>
													  <!-- end inner --> 
													</div>
													<!-- end table-middle --> 
												  </figcaption>
												</figure>
											  </li>
											<?php break; 
				                            default : ?> 
											  <li class="<?php echo esc_attr($portfolio_add) ?>">
												<figure><img src="<?php echo esc_url($blogimageurl) ?>" alt="" class="image">
												  <figcaption>
													<div class="table-middle">
													  <div class="inner"> <a href="<?php echo esc_url($blogimageurl) ?>" class="fancybox">
														<h3><?php the_title(); ?></h3>
														<?php
																$terms = get_the_terms( $post->ID, 'types' );                         
																if ( $terms && ! is_wp_error( $terms ) ) :
																	foreach ( $terms as $term )
																	{	
																		echo '<small>'.$term->name.'</small>';
																	}   
																endif;
														?> <img src="<?php echo get_template_directory_uri(); ?>/images/shape-gray-wave.png" alt="" class="wave"> </a> </div>
													  <!-- end inner --> 
													</div>
													<!-- end table-middle --> 
												  </figcaption>
												</figure>
											  </li>
											<?php break;} ?>
										<?php
										endwhile;
									endif;
												
									// Reset Post Data
									wp_reset_postdata();	?>	
								 
				</ul>
		
		<?php }
		else{ ?>        	
				<ul class="home_blog_wrapper">

							<?php if (  $parada_new_post->have_posts() ) : ?>
							<?php while (  $parada_new_post->have_posts() ) :  $parada_new_post->the_post(); ?>
								
									<?php
									/* Include the Post-Format-specific template for the content.
								    * If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'content', 'blog' );
									?>
								
							<?php endwhile; ?>								
							<?php endif; ?>
													
				</ul>				
		<?php }
				
		$output = ob_get_contents();
		ob_end_clean();
		// Return original posts
		$posts = $original_post;
		// Reset the query
		wp_reset_postdata();
		
		return $output;
	}
	

}
// Finally initialize code
new parada_vc_shortcodes();

?>