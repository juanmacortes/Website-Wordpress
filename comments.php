<?php
/*
 * @package WordPress
 * @subpackage parada
 */
?>

<?php

	$name = esc_html__( 'Name *', 'parada' );
	$email = esc_html__( 'Email *', 'parada' );
	$website = esc_html__( 'Website', 'parada' );
	$message = esc_html__( 'Message *', 'parada' );
	$login = esc_html__( 'You are logged in as', 'parada' ); 
	$click = esc_html__( 'Click here to', 'parada' );
	$logout = esc_html__( 'Log out', 'parada' );
	$addreply = esc_html__( 'Post Comment', 'parada' );
?>


	
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php esc_html__( 'This post is password protected. Enter the password to view any comments.', 'parada' ); ?></p>

<?php
		return;
	endif;
?>
<?php if ( have_comments() ) : ?>
			<h4 class="comments_title">	<i class="fa fa-comments"></i>		
			<?php
			printf( _n( '1 Comment', '%1$s Comments', get_comments_number(), 'parada' ),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?></h4>

			<ol class="commentlist">
				<?php
					wp_list_comments( array( 'callback' => 'parada_comment' ) );
				?>
			</ol>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php previous_comments_link( esc_html__( '<span class="meta-nav">&laquo;</span> Older Comments', 'parada' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments <span class="meta-nav">&raquo;</span>', 'parada'  ) ); ?></div>
			</div>
			
<?php endif;  ?>

<?php else : 
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php esc_html__( 'Comments are closed.', 'parada' ); ?></p>
<?php endif; ?>

<?php endif; ?>
<?php if ( comments_open() ) : ?>

 <!-- Comment Form -->
    <div id="respond" class="">
        <h4><?php comment_form_title(esc_html__( 'Leave a comment', 'parada' ), esc_html__( 'Leave a reply To ', 'parada' ).' %s'); ?></h4>
        <form id="replyform" method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">
            <?php if ($user_ID) : ?>
            <p><?php echo esc_attr($login) ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo esc_attr($user_identity); ?></a>. <?php echo esc_attr($click) ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>"><?php echo esc_attr($logout) ?></a>.</p><br/>
            <?php else : ?>
		<div class="input_cm_wrapper">
			<h5 for="commentName"><?php esc_html_e( 'Name *', 'parada' ); ?></h5>
            <input type="text" name="author" id="reply_name" class="requiredfield"/>
        </div>
		<div class="input_cm_wrapper">	
            <h5 for="email"><?php esc_html_e( 'Email Address *', 'parada' ); ?></h5>			
            <input type="text" name="email" id="reply_email" class="requiredfield"/>
		</div>	
		<div class="input_cm_wrapper last">	
			<h5 for="website"><?php esc_html_e( 'Website', 'parada' ); ?></h5>	
            <input type="text" name="url" id="reply_website" class="last"/>
		</div>	
			
            <?php endif; ?>
			<span class="clear"></span>
			<h5 for="commentsText"><?php esc_html_e( 'Comment *', 'parada' ); ?></h5>
            <textarea name="comment" id="reply_message" class="requiredfield"></textarea>
			<button class="button" type="submit" name="send"><?php echo esc_attr($addreply) ?></button><?php comment_id_fields(); ?><?php do_action('comment_form', $post->ID); ?>
        </form>
    </div>
<?php endif; ?>