<?php
/**
 * The template for displaying comments
 *
 * @package bloglume
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

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
			printf(
				/* translators: 1: number of comments */
				esc_html( _n( 'One Comment', '%1$s Comments', get_comments_number(), 'bloglume' ) ),
				number_format_i18n( get_comments_number() )
			);
			?>
		</h3>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php if ( comments_open() ) : ?>
		<?php comment_form(); ?>
	<?php endif; ?>

</div><!-- #comments -->
