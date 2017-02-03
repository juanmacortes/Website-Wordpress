<?php
/**
 * @package WordPress
 * @subpackage parada
 */
?>

<?php $parada_search_text = esc_html('Enter to search', 'parada'); ?>

<div id="search">   
    <form class="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input name="s" id="s" type="text" onFocus="if(this.value == '<?php echo esc_attr($parada_search_text) ?>') { this.value = ''; }" onBlur="if(this.value == '') { this.value = '<?php echo esc_attr($parada_search_text) ?>'; }" value="<?php echo esc_attr($parada_search_text) ?>" />
	</form>
</div>