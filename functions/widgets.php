<?php


/* parada vimeo sidebar widget  */


class parada_vimeo_widget extends WP_Widget {

	function parada_vimeo_widget() {
		$widget_ops = array('classname' => 'vimeo_widget', 'description' => 'vimeo widget for sidebar');
    	$this->WP_Widget('vimeo_widget', 'parada vimeo widget', $widget_ops);
	}
	
	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance ); ?>
        
        <p><label for="<?php echo esc_html($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','parada'); ?> <input class="widefat" id="<?php echo esc_html($this->get_field_id('title')); ?>" name="<?php echo esc_html($this->get_field_name('title')); ?>" type="text" value="<?php if( isset($instance['title']) ) echo esc_html($instance['title']); ?>" /></label></p>
        
        <p><label for="<?php echo esc_html($this->get_field_id( 'vimeo_id' )); ?>"><?php esc_html_e('Vimeo Video ID:','parada'); ?></label><br /><input class="widefat" id="<?php echo esc_html($this->get_field_id( 'vimeo_id' )); ?>" name="<?php echo esc_html($this->get_field_name( 'vimeo_id' )); ?>" value="<?php if( isset($instance['vimeo_id']) ) echo esc_html($instance['vimeo_id']); ?>" /></p> 
        
	<?php
	}

	function widget( $args, $instance ) {
		extract( $args );

		$title = apply_filters('widget_title', $instance['title'] );
		if ( isset($instance['id']) ) $id = $instance['id'];
		$vimeoid = $instance['vimeo_id'];

		echo esc_html($before_widget);
		
	   	if ( $title ) echo esc_html($before_title . $title . $after_title);

		echo '
		  <div class="four columns alpha top10">   
			 <div class="scale_vid">
				    <iframe src="http://player.vimeo.com/video/'.$vimeoid.'?title=0&amp;byline=0&amp;portrait=0" width="220" height="124"></iframe>
			 </div>
		  </div> 
			 ';
	
		echo esc_html($after_widget);
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['vimeo_id'] = $new_instance['vimeo_id'];
		return $instance;
	}
}
add_action( 'widgets_init', create_function('', 'return register_widget("parada_vimeo_widget");') );


/* parada Categories Widget */


class parada_mpCategories extends WP_Widget
{
  function parada_mpCategories()
  {
    $widget_ops = array('classname' => 'mpCategories', 'description' => 'Displays a list of Blog Categories' );
    $this->WP_Widget('mpCategories', 'parada Categories', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
  <p><label for="<?php echo esc_html($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','parada'); ?> <input class="widefat" id="<?php echo esc_html($this->get_field_id('title')); ?>" name="<?php echo esc_html($this->get_field_name('title')); ?>" type="text" value="<?php if( isset($instance['title']) ) echo esc_html($instance['title']); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo esc_html($before_widget);
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo esc_html($before_title . $title . $after_title);
 
	echo '<ul class="categories">';
	$cats = get_categories();
	foreach ($cats as $cat) {
		$my_query = new WP_Query('category_name='.$cat->name.'&posts_per_page=1'); 
 		while ($my_query->have_posts()) : $my_query->the_post();
      		 $blogimageurl = wp_get_attachment_url( get_post_thumbnail_id() ); 
        endwhile; 
		echo '<li><a href="'.get_category_link( $cat->term_id ).'">'.$cat->name.' ('.$cat->count.')</a></li>';
	}
    echo '</ul>';
 
    echo esc_html($after_widget);
  }                             
}
add_action( 'widgets_init', create_function('', 'return register_widget("parada_mpCategories");') );


/* parada archives widget */


class parada_archives extends WP_Widget
{
  function parada_archives()
  {
    $widget_ops = array('classname' => 'parada_archives', 'description' => 'Displays the blog archives' );
    $this->WP_Widget('parada_archives', 'parada Archives', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
  <p><label for="<?php echo esc_html($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','parada'); ?> <input class="widefat" id="<?php echo esc_html($this->get_field_id('title')); ?>" name="<?php echo esc_html($this->get_field_name('title')); ?>" type="text" value="<?php if( isset($instance['title']) ) echo esc_html($instance['title']); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo esc_html($before_widget);
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
    echo esc_html($before_title . $title . $after_title);

	echo '<ul class="categories">';
	wp_get_archives(apply_filters('widget_archives_dropdown_args', array('type' => 'monthly', 'format' => 'html', 'before' => '', 'after' => '')));
    echo '</ul>';
    echo esc_html($after_widget);
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("parada_archives");') );



/*   parada Recent and Popular Post widget  */


class parada_post1 extends WP_Widget {

	function parada_post1() {
		$widget_ops = array('classname' => 'parada_post1', 'description' => 'A Recent and Popular posts widget');
    	$this->WP_Widget('parada_post1', 'parada Recent Posts', $widget_ops);
	}
	
	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance ); ?>

		<p><label for="<?php echo esc_html($this->get_field_id( 'title' )); ?>"><?php esc_html_e('Title:','parada'); ?></label><br /><input class="widefat" id="<?php echo esc_html($this->get_field_id( 'title' )); ?>" name="<?php echo esc_html($this->get_field_name( 'title' )); ?>" value="<?php if( isset($instance['title']) ) echo esc_html($instance['title']); ?>" /></p>

        <p><label for="<?php echo esc_html($this->get_field_id( 'postcount' )); ?>"><?php esc_html_e('Post Count:','parada'); ?></label><br /><input class="widefat" id="<?php echo esc_html($this->get_field_id( 'postcount' )); ?>" name="<?php echo esc_html($this->get_field_name( 'postcount' )); ?>" value="<?php if( isset($instance['postcount']) ) echo esc_html($instance['postcount']); ?>" /></p>
        
        <p><label for="<?php echo esc_html($this->get_field_id( 'poplatest' )); ?>"><?php esc_html_e('1 for Recent Posts or 2 Popular Posts:','parada'); ?></label><br /><input class="widefat" id="<?php echo esc_html($this->get_field_id( 'poplatest' )); ?>" name="<?php echo esc_html($this->get_field_name( 'poplatest' )); ?>" value="<?php if( isset($instance['poplatest']) ) echo esc_html($instance['poplatest']); ?>" /></p>
        
        <p><label for="<?php echo esc_html($this->get_field_id( 'posttype' )); ?>"><?php esc_html_e('Show this Post Type:','parada'); ?></label><br /><input class="widefat" id="<?php echo esc_html($this->get_field_id( 'posttype' )); ?>" name="<?php echo esc_html($this->get_field_name( 'posttype' )); ?>" value="<?php if( isset($instance['posttype']) ) echo esc_html($instance['posttype']); ?>" /></p>
        
        <p><label for="<?php echo esc_html($this->get_field_id( 'timeformat' )); ?>"><?php esc_html_e('Time Format (see <a href="http://codex.wordpress.org/Formatting_Date_and_Time">here</a>):','parada'); ?></label><br /><input class="widefat" id="<?php echo esc_html($this->get_field_id( 'timeformat' )); ?>" name="<?php echo esc_html($this->get_field_name( 'timeformat' )); ?>" value="<?php if( isset($instance['timeformat']) ) echo esc_html($instance['timeformat']); ?>" /></p>
        
        
	<?php
	}

	function widget( $args, $instance ) {
		extract( $args );

		$title = apply_filters('widget_title', $instance['title'] );
		if ( isset($instance['id']) ) $id = $instance['id'];
		$pcount = $instance['postcount'];
		$platest = $instance['poplatest'];
		$posttype = $instance['posttype'];
		$tformat = $instance['timeformat'];
		global $parada_comments;
		echo esc_html($before_widget);

		
	   	if ( $title ) echo esc_html($before_title . $title . $after_title);
		
		if($posttype==""){
			$posttype = 'post';
		}
		if($platest==1){
			$popargs = array( 'numberposts' => $pcount, 'orderby' => 'post_date', 'post_type' => $posttype );
		}else{
			$popargs = array( 'numberposts' => $pcount, 'orderby' => 'comment_count', 'post_type' => $posttype );
		}
		$poplist = get_posts( $popargs );
		
		echo '<div class="widget_blogposts"><ul>';
			foreach ($poplist as $poppost) :  setup_postdata($poppost);
            echo '<li class="p_widget_inner">';
				$category = get_the_category($poppost->ID);
				$first_category = $category[0]->cat_name;
				$repl = strtolower((preg_replace('/\s+/', '-', $first_category)));
				$base = home_url();  
            $num_comments = get_comments_number( $poppost->ID );
			if ( comments_open() ) {
	      if ( $num_comments == 0 ) {
		  $parada_comments = esc_html('No Comment','parada');
        	} elseif ( $num_comments > 1 ) {
	    	$parada_comments = $num_comments . esc_html(' Comments','parada');
    	} else {
	    	$parada_comments = esc_html('1 Comment','parada');
	    }
        	$write_comments = '<a href="' . get_comments_link() .'">'. $parada_comments.'</a>';
          } else {
	        $write_comments =  esc_html('Comments are off for this post.','parada');
         }				
                $blogimageurl = wp_get_attachment_url( get_post_thumbnail_id($poppost->ID) ); 
                if ($blogimageurl == "") {
                    $post_img_path = get_template_directory_uri().'/images/bp/bp1.jpg';
                } else {
                    $post_img_path = $blogimageurl;
                }
                $aq_image_b = aq_resize( $post_img_path, 70, 70, true );				
				if ($aq_image_b == "") {
			              echo ' <div class="post_wiget_holder">
								<div class="post_wiget_ti"><a href="'.$base.'/'.$repl.'/'.$poppost->post_name.'">'.$poppost->post_title.'</a></div>
								<div class="sub_date_wrapper">
                                  <span class="left sub_text3">'.date($tformat,strtotime($poppost->post_date_gmt)).'</span>								
								</div>
								</div>
								<div class="clear"></div>  
						  ';
                 } else {
					 
					  echo '	
						         <div class="post_wiget_holder">
								<div class="post_wiget_ti"><a href="'.$base.'/'.$repl.'/'.$poppost->post_name.'">'.$poppost->post_title.'</a></div>
								<div class="sub_date_wrapper">
                                  <span class="left sub_text3">'.date($tformat,strtotime($poppost->post_date_gmt)).'</span>								
								</div>
								</div>
								<div class="clear"></div>  
						  ';
					 
				  }
               						  
			endforeach;

		echo '</li></ul><div class="clear"></div></div>';
		echo esc_html($after_widget);
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['postcount'] = $new_instance['postcount'];
		$instance['poplatest'] = $new_instance['poplatest'];
		$instance['posttype'] = $new_instance['posttype'];
		$instance['timeformat'] = $new_instance['timeformat'];
		return $instance;
	}
}
add_action( 'widgets_init', create_function('', 'return register_widget("parada_post1");') );

?>