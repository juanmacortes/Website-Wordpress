<?php
/**
 * @package parada
 */
?>
<?php
$time = get_post_time('j M Y', true,$newspost->ID,true); 
$onlyyear = get_post_time('Y', true,$newspost->ID);
$month = get_post_time('M', true,$newspost->ID);
$day = get_post_time('j', true,$newspost->ID); 
$blogimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$blog_crop = array( 'width' => 640, 'height' => 640, 'crop' => true );
$bfi_image_b = bfi_thumb( $blogimageurl, $blog_crop );
 ?>
  <?php  if($blogimageurl==""){ ?> 
	<li id="post-<?php the_ID(); ?>" <?php post_class(  ); ?>>
        <div class="blog_noi">
          <figcaption>
            <div class="table-middle">
              <div class="inner"> <small><?php echo esc_html($time) ?></small>
                <h4><a href="<?php echo get_permalink( ); ?>"><?php the_title(); ?></a></h4>
				<p><?php echo parada_excerpt(15); ?></p>
			  </div>
              <!-- end inner --> 
            </div>
            <!-- end table-middle --> 
          </figcaption>
        </div>
    </li>
  <?php } else {	?> 
    <li id="post-<?php the_ID(); ?>" <?php post_class(  ); ?>>
        <figure> <img src="<?php echo esc_url($bfi_image_b) ?>" alt="" class="image">
          <figcaption>
            <div class="table-middle">
              <div class="inner"> <small><?php echo esc_html($time) ?></small>
                <h4><a href="<?php echo get_permalink( ); ?>"><?php the_title(); ?></a></h4>
                <img src="<?php echo get_template_directory_uri(); ?>/images/shape-gray-wave.png" alt=""> </div>
              <!-- end inner --> 
            </div>
            <!-- end table-middle --> 
          </figcaption>
        </figure>
    </li>
  <?php } ?> 