<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package nucleare
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<div class="comments-title"><h2>
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'nucleare' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2></div>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => '50',
					'reply_text'        =>  '<span>' .__( 'Reply'  , 'nucleare' ) . '<i class="fa fa-reply spaceLeft"></i></span>',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'nucleare' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( '<i class="fa fa-lg fa-angle-left spaceRight"></i><span class="smallPart">' . __( 'Older Comments', 'nucleare' ) .'</span>' ); ?></div>	
			<div class="nav-next"><?php next_comments_link( '<span class="smallPart">' . __( 'Newer Comments', 'nucleare' ) .'</span><i class="fa fa-lg fa-angle-right spaceLeft"></i>' ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'nucleare' ); ?></p>
	<?php endif; ?>

	<?php
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields =  array(
		'author' => '<p class="comment-form-author"><label for="author"><i class="fa fa-user"></i><span class="screen-reader-text">' . __( 'Name *'  , 'nucleare' ) . '</span></label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' placeholder="' . __( 'Name *'  , 'nucleare' ) . '"/></p>',
		'email'  => '<p class="comment-form-email"><label for="email"><i class="fa fa-envelope"></i><span class="screen-reader-text">' . __( 'Email *'  , 'nucleare' ) . '</span></label><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' placeholder="' . __( 'Email *'  , 'nucleare' ) . '"/></p>',
		'url'    => '<p class="comment-form-url"><label for="url"><i class="fa fa-link"></i><span class="screen-reader-text">' . __( 'Website *'  , 'nucleare' ) . '</span></label><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . __( 'Website'  , 'nucleare' ) . '"/></p>',
	);
	$required_text = __(' Required fields are marked ', 'nucleare').' <span class="required">*</span>';
	?>
	<?php comment_form( array(
		'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' , 'nucleare' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
		'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'  , 'nucleare' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
		'comment_notes_before' => '<p class="comment-notes smallPart">' . __( 'Your email address will not be published.'  , 'nucleare' ) . ( $req ? $required_text : '' ) . '</p>',
		'title_reply' => __( 'Leave a Reply'  , 'nucleare' ),
		'title_reply_to' => __( 'Leave a Reply to %s'  , 'nucleare' ),
		'cancel_reply_link' => __( 'Cancel reply'  , 'nucleare' ) . '<i class="fa fa-times spaceLeft"></i>',
		'label_submit' => __( 'Post Comment'  , 'nucleare' ),
		'comment_field' => '<div class="clear"></div><p class="comment-form-comment"><label for="comment"><i class="fa fa-comments"></i><span class="screen-reader-text">' . __( 'Comment *'  , 'nucleare' ) . '</span></label><textarea id="comment" name="comment" rows="8" aria-required="true" placeholder="' . __( 'Comment *'  , 'nucleare' ) . '"></textarea></p>',
		'comment_notes_after' => '<p class="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' , 'nucleare'),' <code>' . allowed_tags() . '</code>') . '</p>',
	)); 
	?>

</div><!-- #comments -->
