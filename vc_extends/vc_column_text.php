<?php
$output = $el_class = $css_animation = '';

extract(shortcode_atts(array(
    'el_class' => '',
), $atts));

$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ' ' . $el_class , $this->settings['base'], $atts );
$css_class .= $this->getCSSAnimation($css_animation);
$output .= "\n\t".'<div class="'.$css_class.' wrapper">';
$output .= "\n\t\t".wpb_js_remove_wpautop($content, true);
$output .= "\n\t".'</div> ' . $this->endBlockComment('.wrapper');

echo $output;