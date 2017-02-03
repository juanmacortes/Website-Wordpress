<?php
$output = $title = '';

extract(shortcode_atts(array(
	'title' => esc_html__("Section", "parada"),
	'active' => '',
	'border' => ''
), $atts));
global $acc_id;


$output .= "\n\t\t\t" . '<div class="panel '.$border.' panel-default">';
    $output .= "\n\t\t\t\t" . '<div class="panel-heading"><h6 class="panel-title"><a data-toggle="collapse" data-parent="#'.$acc_id.'" href="#'.sanitize_title($title).'-'.$acc_id.'">'.$title.'<i class="icon ion-android-add panel-icon pull-right"></i></a></h6></div>';
    $output .= "\n\t\t\t\t" . '<div id="'.sanitize_title($title).'-'.$acc_id.'" class="panel-collapse collapse '.$active.'"><div class="panel-body">';
        $output .= ($content=='' || $content==' ') ? esc_html__("Empty section. Edit page to add content here.", "parada") : "\n\t\t\t\t" . wpb_js_remove_wpautop($content);
        $output .= "\n\t\t\t\t" . '</div></div>';
    $output .= "\n\t\t\t" . '</div> ' . $this->endBlockComment('.wpb_accordion_section') . "\n";

echo $output;