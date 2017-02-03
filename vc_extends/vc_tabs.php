<?php
$output = $title = $interval = $el_class = $active = $choice = $nav_tabs = $tab_content = '';
extract( shortcode_atts( array(
	'title' => '',
	'choice' => '',
	'el_class' => ''
), $atts ) );


$el_class = $this->getExtraClass( $el_class );

$element = 'wpb_tabs';

// Extract tab titles
preg_match_all( '/vc_tab([^\]]+)/i', $content, $matches, PREG_OFFSET_CAPTURE );
$tab_titles = array();
/**
 * vc_tabs
 *
 */
if ( isset( $matches[1] ) ) {
	$tab_titles = $matches[1];
}

if( $choice != '' ){
	$nav_tabs = 'nav-tabs-'.$choice.'';
	$tab_content = 'tab-content-'.$choice.'';
}

$tabs_nav = '';
$tabs_nav .= '<ul class="nav nav-tabs '.$nav_tabs.' h6">';
foreach ( $tab_titles as $tab ) {
	$tab_atts = shortcode_parse_atts($tab[0]);
	if(isset($tab_atts['title']) ) {
		if( isset( $tab_atts['active'] ) ){
			$active = $tab_atts['active'];	
		}
		else{
			$active = '';	
		}
		
		$tabs_nav .= '<li class="'.$active.'" ><a  data-toggle="tab" href="#tab-' . ( isset( $tab_atts['tab_id'] ) ? $tab_atts['tab_id'] : sanitize_title( $tab_atts['title'] ) ) . '">' . $tab_atts['title'] . '</a></li>';
	}
}
$tabs_nav .= '</ul>' . "\n";

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, trim( $element . ' wpb_content_element ' . $el_class ), $this->settings['base'], $atts );

$output .= "\n\t" . '<div class="' . $css_class . '" data-interval="' . $interval . '">';
$output .= wpb_widget_title( array( 'title' => $title, 'extraclass' => $element . '_heading' ) );
$output .= "\n\t\t\t" . $tabs_nav;
$output .= "\n\t\t\t" . '<div class=" tab-content '.$tab_content.'">'.wpb_js_remove_wpautop( $content );


$output .= "\n\t\t" . '</div>' . $this->endBlockComment( '.wpb_wrapper' );
$output .= "\n\t" . '</div> ' . $this->endBlockComment( $element );

echo $output;