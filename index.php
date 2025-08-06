<?php get_header(); ?>

<div class="site-content-wrapper">
  <main id="main" class="site-main" role="main">
    <?php if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <header class="entry-header">
            <h2><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
          </header>

          <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'large' ); ?>
              </a>
            </div>
          <?php endif; ?>

          <div class="entry-content">
            <a class="read-more-btn" href="<?php the_permalink(); ?>" aria-label="Read more about post"><?php the_excerpt(); ?></a>
          </div>         
        </article>
      <?php endwhile;

      get_template_part( 'template-parts/pagination' );

    else :
      get_template_part( 'template-parts/content', 'none' );
    endif; ?>
  </main>
</div>

<?php get_footer(); ?>
