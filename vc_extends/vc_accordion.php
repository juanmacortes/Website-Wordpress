<?php

$output = $title = $el_class = '';
//
extract(shortcode_atts(array(
    'title' => '',
    'el_class' => '',
    'choice' => ''
), $atts));

$el_class = $this->getExtraClass($el_class);
global $acc_id;
$acc_id = 'accordion-'.rand();
$output = '<div id="'.$acc_id.'" class="'.$el_class.' panel-group">'.wpb_js_remove_wpautop($content).'</div>';

if( $choice == 'yes' ){
	$output = '<div class="'.$el_class.'">'.wpb_js_remove_wpautop($content).'</div>';	
}

echo $output;