<?php
/**
 * Pagination template
 *
 * @package bloglume
 */

if ( get_the_posts_pagination() ) :
?>
  <nav class="pagination" role="navigation">
    <?php
      the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => __( '« Previous', 'bloglume' ),
        'next_text' => __( 'Next »', 'bloglume' ),
      ) );
    ?>
  </nav>
<?php endif; ?>
