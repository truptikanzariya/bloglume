<?php if ( post_password_required() ) return; ?>
<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php printf( _n( 'One Comment', '%1$s Comments', get_comments_number(), 'bloglume' ), number_format_i18n( get_comments_number() ) ); ?>
		</h2>
		<ol class="comment-list">
			<?php wp_list_comments( array( 'style' => 'ol', 'short_ping' => true ) ); ?>
		</ol>
		<?php the_comments_navigation(); ?>
	<?php endif; ?>
	<?php if ( comments_open() ) : ?>
		<?php comment_form(); ?>
	<?php endif; ?>
</div>
