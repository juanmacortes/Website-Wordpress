<?php
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $parallax = $margin_bottom = $container_class = $mar_bottom = $mar_top = $style_check = $section_style = $row_style = '';
extract(shortcode_atts(array(
    'el_class'	=> '',
    'el_id'	=> '',
	'fullwidth'	=> '',
    'bg_color'	=> '',
	'bg_image'	=> '',
	'bg_image_size'	=> '',
    'bg_image_repeat' => '',
	'bg_image_attachment'	=> '',
    'no_margin'	=> '',
	'margin_top'	=> '',
    'margin_bottom'	=> '',
), $atts));

// wp_enqueue_style( 'js_composer_front' );
wp_enqueue_script( 'wpb_composer_front_js' );
// wp_enqueue_style('js_composer_custom_css');

$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'row '. ( $this->settings('base')==='vc_row_inner' ? 'row_inner ' : ' ' ) . get_row_css_class(), $this->settings['base'], $atts );


if( $bg_image_attachment == 'parallax' ){
	$parallax = 'parallax';
	$bg_image_attachment = 'fixed';
}

$style_bg_color = ( !empty($bg_color) ? 'background-color:'.$bg_color.'; ' : ''  );
$style_bg_image = ( !empty($bg_image) ? 'background-image:url('.wp_get_attachment_url($bg_image).'); ' : ''  );
$style_bg_image_repeat = ( !empty($bg_image_repeat) ? 'background-repeat:'.$bg_image_repeat.'; ' : ''  );
$style_bg_image_attachment = ( !empty($bg_image_attachment) ? 'background-attachment:'.$bg_image_attachment.'; ' : ''  );
$style_bg_image_size = ( !empty($bg_image_size) ? 'background-size:'.$bg_image_size.'; ' : ''  );

$style_check = $style_bg_color.$style_bg_image.$style_bg_image_repeat.$style_bg_image_attachment.$style_bg_image_size;
if ( $style_check != '' ){
	$section_style = 'style="'.$style_bg_color.$style_bg_image.$style_bg_image_repeat.$style_bg_image_attachment.$style_bg_image_size.'"';
}

if( $fullwidth == 'yes' ){
	$container_class = '-fluid';	
}

if( !empty($margin_bottom) ){
	$mar_bottom = 'margin-bottom: ' . ( preg_match( '/(px|em|\%|pt|cm)$/', $margin_bottom ) ? $margin_bottom : $margin_bottom . 'px' ) . '; ';
}

if( !empty($margin_top) ){
	$mar_top = 'margin-top: ' . ( preg_match( '/(px|em|\%|pt|cm)$/', $margin_top ) ? $margin_top : $margin_top . 'px' ) . '; ';
}

if( !empty($margin_bottom) || !empty($margin_top) ){
	$row_style = 'style="'.$mar_top.$mar_bottom.'"';
}

if( $this->settings('base')!='vc_row_inner' ){
	
	if( !empty($el_id) ){
		$el_id = 'id="'.$el_id.'"';
	}
	
	$output = '<section '.$el_id.' class="'.$parallax.' '.$el_class.'" '.$section_style.'>
	<div class="container'.$container_class.'">
	<div class="'.$css_class.' '.$no_margin.'"  '.$row_style.'>';
	
	$output .= wpb_js_remove_wpautop($content);
	$output .= '</div></div></section>'.$this->endBlockComment('row');

}
else{
	$output = '<div class="'.$el_class.' '.$css_class.' '.$no_margin.'" style="'.$mar_top.' '.$mar_bottom.'">';
	
	$output .= wpb_js_remove_wpautop($content);
	$output .= '</div>'.$this->endBlockComment('row');
}

echo $output;