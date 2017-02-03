<?php
$output = $title = $tab_id = '';
extract(shortcode_atts( array( 'tab_id' => '', 'title' => '', 'active' => ''), $atts ));

$output .= "\n\t\t\t" . '<div id="tab-'. (empty($tab_id) ? sanitize_title( $title ) : $tab_id) .'" class="tab-pane fade '.$active.' in">';
$output .= ($content=='' || $content==' ') ? esc_html__("Empty tab. Edit page to add content here.", "parada") : "\n\t\t\t\t" . wpb_js_remove_wpautop($content);
$output .= "\n\t\t\t" . '</div> ' . $this->endBlockComment('.wpb_tab');

echo $output;


/*
extract(shortcode_atts( array( $this->predefined_atts, 'active' => ''), $atts));

if( $active ="yes" ){
	$active = 'active';	
}
else{
	$active ='';	
}
*/