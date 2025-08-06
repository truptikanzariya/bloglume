<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package bloglume
 */
?>

<section class="no-results not-found">
  <header class="page-header">
    <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'bloglume' ); ?></h1>
  </header>

  <div class="page-content">
    <p><?php esc_html_e( 'It seems we can’t find what you’re looking for. Perhaps searching can help.', 'bloglume' ); ?></p>
    <?php get_search_form(); ?>
  </div>
</section>
