<?php
$output = $bg_color = $el_class = $width = $offset = $mar_bottom = $mar_top = $style = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'width' => '1/1',
	'offset' => '',
	'align' => 'left',
	'bg_color'      => '',
	'no_margin'      => '',
    'margin_top'	=> '',
	'margin_bottom'	=> '',
    'animation'	=> '',
	'animation_delay'	=> '0.5',
	'animation_duration'	=> '1'
), $atts));

$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$width = vc_column_offset_class_merge($offset, $width);
$el_class .= ' '.$no_margin.' ';

if( !empty( $align ) ){	
	$align = 'text-'.$align;
}
$el_class .= ' '.$align.' ';

if( !empty($margin_bottom) ){
	$mar_bottom = 'margin-bottom: ' . ( preg_match( '/(px|em|\%|pt|cm)$/', $margin_bottom ) ? $margin_bottom : $margin_bottom . 'px' ) . '; ';
}

if( !empty($margin_top) ){
	$mar_top = 'margin-top: ' . ( preg_match( '/(px|em|\%|pt|cm)$/', $margin_top ) ? $margin_top : $margin_top . 'px' ) . '; ';
}

if( !empty($margin_bottom) || !empty($margin_top) || !empty($bg_color) ){
	
	if( !empty($bg_color) ){
		$bg_color = 'background-color:'.$bg_color.'; ';
	}
	$style = 'style="'.$bg_color.$mar_top.$mar_bottom.'"';
}

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width . $el_class  , $this->settings['base'], $atts );


$output .= "\n\t".'<div class="'.$css_class.'" '.$style.'>';
$output .= "\n\t\t".'<div class="content-inner">';
if( !empty($animation) && $this->settings('base') != 'vc_column_inner'  ){
	$output .= '<div class="animate '.$animation.'" data-animation="'.$animation.'" style="animation-duration: '.$animation_duration.'s; 	animation-delay: '.$animation_delay.'s; 	-moz-animation-duration: '.$animation_duration.'s; 	-moz-animation-delay: '.$animation_delay.'s; 	-webkit-animation-duration: '.$animation_duration.'s; 	-webkit-animation-delay: '.$animation_delay.'s; ">';	
}
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
if( !empty($animation) && $this->settings('base') != 'vc_column_inner'  ){
	$output .= '</div>';	
}
$output .= "\n\t\t".'</div> '.$this->endBlockComment('.content-inner');
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";

echo $output;