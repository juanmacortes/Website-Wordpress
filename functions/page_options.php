<?php
/*    Page Option  */

add_action('admin_init', 'parada_page_init');

function parada_page_init() {
	add_meta_box("page-options", esc_html( 'Page Options', 'parada' ), "parada_page_options", "page", "normal", "high");
	add_meta_box("page-options", esc_html( 'Page Options', 'parada' ), "parada_page_options", "post", "normal", "high");
	add_meta_box("page-options", esc_html( 'Page Options', 'parada' ), "parada_page_options", "portfolio", "normal", "high");
	add_action('save_post','update_page_data');
}

/*    Sidebar Select Box    */

function parada_sidebar_choose( $name = '', $current_value = false ) {

    if( empty( $wp_registered_sidebars ) )
        return;

    $name = ( empty( $name ) ) ? false : ' name="' . esc_attr( $name ) . '"';
    $current = ( $current_value ) ? esc_attr( $current_value ) : false;     
    $selected = '';
    ?>
    <select<?php echo balancetags($name); ?>>
    <?php foreach( $wp_registered_sidebars as $parada_sidebar ) : ?>
        <?php 
        if( $current ) 
            $selected = selected( $parada_sidebar['name'] == $current, true, false ); ?> 
        <option value="<?php echo balancetags($parada_sidebar['name']); ?>"<?php echo balancetags($selected); ?>><?php echo balancetags($parada_sidebar['name']); ?></option>
    <?php endforeach; ?>
    </select>
    <?php
}

function update_page_data(){
	global $post;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }
	if($post){
		if( isset($_POST["parada_header_title"]) ) {
			update_post_meta($post->ID, "parada_header_title", $_POST["parada_header_title"]);
		}
		if( isset($_POST["parada_header_sub_title"]) ) {
			update_post_meta($post->ID, "parada_header_sub_title", $_POST["parada_header_sub_title"]);
		}
		if( isset($_POST["parada_sidebar_type"]) ) {
			update_post_meta($post->ID, "parada_sidebar_type", $_POST["parada_sidebar_type"]);
		}else{
			update_post_meta($post->ID, "parada_sidebar_type", 0);
		}
		if( isset($_POST["parada_sidebar"]) ) {
			update_post_meta($post->ID, "parada_sidebar", $_POST["parada_sidebar"]);
		}
		if( isset($_POST["parada_image_bg"]) ) {
			update_post_meta($post->ID, "parada_image_bg", $_POST["parada_image_bg"]);
		}
	}
}

function parada_page_options(){
	global $post;
	$custom = get_post_custom($post->ID);
	
	if (isset($custom["parada_header_title"][0])){
		$parada_header_title = $custom["parada_header_title"][0];
	}else{
		$parada_header_title = "";
	}
	if (isset($custom["parada_header_sub_title"][0])){
		$parada_header_sub_title = $custom["parada_header_sub_title"][0];
	}else{
		$parada_header_sub_title = "";
	}
	if (isset($custom["parada_sidebar_type"][0])){
		$parada_sidebar_type = $custom["parada_sidebar_type"][0];
	}else{
		$parada_sidebar_type = 0;
		$custom["parada_sidebar_type"][0] = 0;
	}
	if (isset($custom["parada_sidebar"][0])){
		$parada_sidebar = $custom["parada_sidebar"][0];
	}else{
		$parada_sidebar = false;
	}
	if (isset($custom["parada_image_bg"][0])){
		$parada_image_bg = $custom["parada_image_bg"][0];
	}else{
		$parada_image_bg = "";
	}
?>

    <div id="page-options">
        <table cellpadding="10" cellspacing="10">

            <tr>
                <td style="width:160px;"><label><?php esc_html_e('Page & Post Title :','parada'); ?> <i style="color: #ff0000;"><br/><?php esc_html_e('Caution : Please leave it,if you do not want a title for a page or post Ex: About Our Company','parada'); ?></i></label></td><td><input name="parada_header_title" style="width:420px" value="<?php echo balancetags($parada_header_title); ?>" /></td>	
            </tr>
			<tr>
                <td style="width:160px;"><label><?php esc_html_e('Page & Post Sub Title : ','parada'); ?><i style="color: #ff0000;"><br/><?php esc_html_e('Caution : Please leave it,if you do not want a sub title for a page or post Ex:  &nbsp; - &nbsp;  Who we are and what we do ','parada'); ?></i></label></td><td><input name="parada_header_sub_title" style="width:420px" value="<?php echo balancetags($parada_header_sub_title); ?>" /></td>	
            </tr>
            <tr>
                <td><label><?php esc_html_e('Choose one of your sidebars','parada'); ?> <i style="color: #ff0000;"><br/><?php esc_html_e('Caution : Select Sidebar','parada'); ?></i></label></td>
                <td>
                <?php parada_sidebar_choose("sidebar",$parada_sidebar); ?>
                </td>	
            </tr>
			<tr>
                <td><label><?php esc_html_e('Sidebar Type:','parada'); ?> <i style="color: #ff0000;"><br/><?php esc_html_e('Caution : Select the sidebar bettween Left and Right','parada'); ?></i></label></td>
                <td>
                <input type="radio" name="parada_sidebar_type" value="1" <?php if( isset($parada_sidebar_type)){checked( '1', $custom[ 'parada_sidebar_type' ][0] ); } ?> /> <?php esc_html_e('Right','parada'); ?> </br></br>
                <input type="radio" name="parada_sidebar_type" value="0" <?php if( isset($parada_sidebar_type)){checked( '0', $custom[ 'parada_sidebar_type' ][0] ); } ?> /> <?php esc_html_e('Left','parada'); ?>
                </td>	
            </tr>
			<tr>
                <td style="width:220px;">
				<label><?php esc_html_e('Background Image URL: ','parada'); ?><i style="color: #ff0000;"><br/><?php esc_html_e('Caution : Put BG image link for individual page or post Title, if you do not want the bg just leave it blank','parada'); ?></i></label></td>
				<td>
				<input name="parada_image_bg" id="parada_image_bg" style="width:420px;" value="<?php echo esc_url($parada_image_bg); ?>" />
				</td>	
                
		   </tr>
			
        </table>
    </div>
      
<?php
}


/*  Post Options  */

add_action('admin_init', 'parada_add_post_options');

function parada_add_post_options() {
	add_meta_box("postformat-options", esc_html( 'Post Options', 'parada' ), "parada_postformat_options", "post", "normal", "high");
	add_action('save_post','update_post_data');
}

function update_post_data(){
	global $post;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }
	if($post){
		if( isset($_POST["postformat_type"]) ) {
			update_post_meta($post->ID, "postformat_type", $_POST["postformat_type"]);
		}else{
			update_post_meta($post->ID, "postformat_type", 0);
		}
		if( isset($_POST["postformat_slider"]) ) {
			update_post_meta($post->ID, "postformat_slider", $_POST["postformat_slider"]);
		}
		if( isset($_POST["postformat_video"]) ) {
			update_post_meta($post->ID, "postformat_video", $_POST["postformat_video"]);
		}
	}
}

function parada_postformat_options(){
	global $post;
	$custom = get_post_custom($post->ID);
	
	if (isset($custom["postformat_type"][0])){
		$postformat_type = $custom["postformat_type"][0];
	}else{
		$postformat_type = 0;
		$custom["postformat_type"][0] = 0;
	}
	
	if (isset($custom["postformat_slider"][0])){
		$postformat_slider = $custom["postformat_slider"][0];
	}else{
		$postformat_slider = "";
	}
	
	if (isset($custom["postformat_video"][0])){
		$postformat_video = $custom["postformat_video"][0];
	}else{
		$postformat_video = "";
	}
?>

    <div id="postformat-options">
        <table cellpadding="15" cellspacing="15">
            <tr>
                <td style="width:150px;"><label><?php esc_html_e('Post Format Type:','parada'); ?> <i style="color: #ff0000;"><br/><?php esc_html_e('Caution : The thumbnail image for the post is always specified via "Set featured image" on the right','parada'); ?></i></label></td>
                <td>             
                <input type="radio" name="postformat_type" value="0" <?php if( isset($postformat_type)){checked( '0', $custom[ 'postformat_type' ][0] ); } ?> /> <?php esc_html_e('Image','parada'); ?> &nbsp; &nbsp;</br></br>
                <input type="radio" name="postformat_type" value="1" <?php if( isset($postformat_type)){checked( '1', $custom[ 'postformat_type' ][0] ); } ?> /> <?php esc_html_e('Slide show','parada'); ?> &nbsp; &nbsp;</br></br>
                <input type="radio" name="postformat_type" value="2" <?php if( isset($postformat_type)){checked( '2', $custom[ 'postformat_type' ][0] ); } ?> /> <?php esc_html_e('Vimeo Video','parada'); ?> &nbsp; &nbsp;</br></br>
                <input type="radio" name="postformat_type" value="3" <?php if( isset($postformat_type)){checked( '3', $custom[ 'postformat_type' ][0] ); } ?> /> <?php esc_html_e('Youtube Video','parada'); ?>
                </td>	
            </tr>
            <tr>
                <td style="width:210px;"><label><?php esc_html_e('Slide show Image URL :','parada'); ?> <i style="color: #ff0000;"><br/><?php esc_html_e('Caution : Separate each url by hit enter on the keyboard after each url','parada'); ?></i></label></td><td><textarea name="postformat_slider" style="width:300px;height:100px;"/><?php echo balancetags($postformat_slider); ?></textarea></td>	
            </tr>
            <tr>
                <td style="width:210px;"><label><?php esc_html_e('Vimeo or Youtube Video ID :','parada'); ?> <i style="color: #ff0000;"><br/><?php esc_html_e('Example for Vimeo video id: 28284313 <br/> Example for Youtube video id : BO3N6VdYCjY ','parada'); ?></i></label></td><td><input name="postformat_video" style="width:300px" value="<?php echo balancetags($postformat_video); ?>" /></td>	
            </tr> 			
        </table>
    </div>
      
<?php
}
?>