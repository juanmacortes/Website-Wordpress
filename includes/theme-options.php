<?php
/**
 * Initialize the options before anything else.
 */
add_action( 'admin_init', 'custom_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'sections'        => array( 
	  array(
        'id'          => 'general_default',
        'title'       => esc_html__('Header', 'parada')
      ),	  
	  array(
        'id'          => 'footer',
        'title'       => esc_html__('Footer', 'parada')
      ),
      array(
        'id'          => 'background',
        'title'       => esc_html__('BG & Active areas', 'parada')
      ),
      array(
        'id'          => 'fonts',
        'title'       => esc_html__('Fonts', 'parada')
      ),
      array(
        'id'          => 'homepage_style1',
        'title'       => esc_html__('Homepage', 'parada')
      ),
	  array(
        'id'          => 'blog',
        'title'       => esc_html__('Blog Page', 'parada')
      ),
      array(
        'id'          => 'contactheadline',
        'title'       => esc_html__('Contact', 'parada')
      ),
	  array(
        'id'          => 'hightlight',
        'title'       => esc_html__('Highlight color', 'parada')
      )
    ),
    'settings'        => array( 
	  array(
        'id'          => 'favicon_setting',
        'label'       => esc_html__('Favicon Setting', 'parada'),
        'desc'        => esc_html__('Favicon Setting', 'parada'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'favicon',
        'label'       => esc_html__('Favicon', 'parada'),
        'desc'        => esc_html__('Upload your favicon logo for your website.', 'parada'),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'logo',
        'label'       => esc_html__('Logo Settings', 'parada'),
        'desc'        => esc_html__('Logo Setting', 'parada'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
      array(
        'id'          => 'parada_header_logo',
        'label'       => esc_html__('Logo image', 'parada'),
        'desc'        => esc_html__('If you would like to use image logo please upload here( Your company Logo ).', 'parada'),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'parada_mp4_link',
        'label'       => esc_html__('put mp4 link', 'parada'),
        'desc'        => esc_html__('add short video header', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'footer_settings',
        'label'       => esc_html__('Footer Settings', 'parada'),
        'desc'        => esc_html__('Footer Settings', 'parada'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'parada_footer',
        'label'       => esc_html__('Footer content', 'parada'),
        'desc'        => esc_html__('add here.', 'parada'),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'footer',
        'rows'        => '8',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	    array(
        'id'          => 'active_setting',
        'label'       => esc_html__('Active Settings', 'parada'),
        'desc'        => esc_html__('Active Settings', 'parada'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'background',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'comment_active',
        'label'       => esc_html__('Comment Active', 'parada'),
        'desc'        => esc_html__('Tick it if you would like to show the comment form for sing post page.', 'parada'),
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'background',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'Yes',
            'label'       => 'Yes',
            'src'         => ''
          )
        ),
      ),
	  array(
        'id'          => 'comment_page_active',
        'label'       => esc_html__('Comment Page Active', 'parada'),
        'desc'        => esc_html__('Tick it if you would like to show the comment form for Pages.', 'parada'),
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'background',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'Yes',
            'label'       => 'Yes',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'title_quote_font',
        'label'       => esc_html__('Header google font', 'parada'),
        'desc'        => esc_html__('Header Google Font', 'parada'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'text_block',
        'label'       => esc_html__('Google font link and font-family', 'parada'),
        'desc'        => esc_html__('<h3>You can check the google font <a href="http://www.google.com/webfonts#" target="_blank">here</a></h3>', 'parada'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'google_font_url',
        'label'       => esc_html__('Header Title Google Font', 'parada'),
        'desc'        => esc_html__('The font used for the header title.</br>
<strong>(Please Input the link URL here. ")<br /> 
Example :<br /> fonts.googleapis.com/css?family=Merriweather:300&subset=latin,latin-ext </strong>', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'google_font',
        'label'       => esc_html__('Google Font', 'parada'),
        'desc'        => esc_html__('The font used for the header title.</br>
<strong>(Please Input the font. ")<br />
Example :<br /> \'Merriweather\', serif
</strong>', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'general_headlines',
        'label'       => esc_html__('General Headlines', 'parada'),
        'desc'        => esc_html__('General Headlines', 'parada'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'font_h1',
        'label'       => esc_html__('H1 Font Size', 'parada'),
        'desc'        => esc_html__('H1 Font size Ex: 26 px.', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'font_h2',
        'label'       => esc_html__('H2 Font Size', 'parada'),
        'desc'        => esc_html__('H2 Font size Ex: 24px', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'font_h3',
        'label'       => esc_html__('H3 Font Size', 'parada'),
        'desc'        => esc_html__('H3 Font size Ex: 18px', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'font_h4',
        'label'       => esc_html__('H4 Font Size', 'parada'),
        'desc'        => esc_html__('H4 Font size Ex: 16px', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'font_h5',
        'label'       => esc_html__('H5 Font Size', 'parada'),
        'desc'        => esc_html__('H5 Font size Ex: 14px', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'font_h6',
        'label'       => esc_html__('H6 Font Size', 'parada'),
        'desc'        => esc_html__('H6 Font size Ex: 12px', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'body_text_settings',
        'label'       => esc_html__('Body Text Settings', 'parada'),
        'desc'        => esc_html__('Body Text Settings', 'parada'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'font_body_size',
        'label'       => esc_html__('Body Text Font Size', 'parada'),
        'desc'        => esc_html__('The font size of the main body. Ex: 12px', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'main_content_settings',
        'label'       => esc_html__('Main content settings', 'parada'),
        'desc'        => esc_html__('Main content settings', 'parada'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'homepage_style1',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'hp_1_section_1',
        'label'       => esc_html__('Revolution slider Homepage', 'parada'),
        'desc'        => esc_html__('<h3>1. Revolution slider Homepage</h3>', 'parada'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'homepage_style1',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'slider_h',
        'label'       => esc_html__('Slider', 'parada'),
        'desc'        => esc_html__('Add slider Alias here ( Revolution slider\'s Alias )', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'homepage_style1',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'Blog_settings',
        'label'       => esc_html__('Portfolioset', 'parada'),
        'desc'        => esc_html__('Blog Settings', 'parada'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'head_blog_read',
        'label'       => esc_html__('Button text', 'parada'),
        'desc'        => esc_html__('Ex: " READ MORE "', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	   array(
        'id'          => 'gmap-settings',
        'label'       => esc_html__('Google map settings', 'parada'),
        'desc'        => esc_html__('Google map settings', 'parada'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'contactheadline',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'goo_lat',
        'label'       => esc_html__('Google Latitude', 'parada'),
        'desc'        => esc_html__('Add Latitude.', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contactheadline',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'goo_long',
        'label'       => esc_html__('Google Longtitude', 'parada'),
        'desc'        => esc_html__('Add Longtitude.', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contactheadline',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'goomapzoom',
        'label'       => esc_html__('Google Maps Default Zoom', 'parada'),
        'desc'        => esc_html__('Zoom default.<br />Example: <strong>16</strong>', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contactheadline',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'goo_des',
        'label'       => esc_html__('Google pin description', 'parada'),
        'desc'        => esc_html__('Add description.', 'parada'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contactheadline',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'highlight_color',
        'label'       => esc_html__('Highlight color', 'parada'),
        'desc'        => esc_html__('Choose highlight color Ex : " Yellow color "', 'parada'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'hightlight',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'highlight_sub_color',
        'label'       => esc_html__('Sub Highlight color', 'parada'),
        'desc'        => esc_html__('Choose Sub highlight color Ex : " Red color "', 'parada'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'hightlight',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}