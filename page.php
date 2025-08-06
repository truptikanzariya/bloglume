<?php get_header(); ?>

<div class="site-content-wrapper">
	<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>
				<article id="page-<?php the_ID(); ?>" <?php post_class(); ?> aria-labelledby="page-title-<?php the_ID(); ?>">
					<header class="entry-header">
						<h1 id="page-title-<?php the_ID(); ?>"><?php the_title(); ?></h1>
					</header>
					<div class="entry-content">
						<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'bloglume' ),
							'after'  => '</div>',
						) );
						?>
					</div>

					<?php get_template_part( 'template-parts/post-meta' ); ?>
					
				</article>
			<?php endwhile;
		endif; ?>
	</main>
</div>

<?php get_footer(); ?>
