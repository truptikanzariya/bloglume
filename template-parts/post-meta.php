<?php
/**
 * Displays post metadata (date, author, categories)
 *
 * @package bloglume
 */
?>

<div class="post-meta">
    <span class="posted-on">
        <?php echo esc_html( get_the_date() ); ?>
    </span>
    <?php if ( get_the_author() ) : ?>
        , <span class="byline">
            <?php esc_html_e( 'by', 'bloglume' ); ?> <?php the_author_posts_link(); ?>
        </span>
    <?php endif; ?>
    <?php if ( get_the_category_list() ) : ?>
        , <span class="cat-links">
            <?php esc_html_e( 'in', 'bloglume' ); ?> <?php the_category( ', ' ); ?>
        </span>
    <?php endif; ?>
</div>
