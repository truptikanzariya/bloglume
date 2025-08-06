<?php
/**
 * Template for displaying pages
 *
 * @package bloglume
 */

get_header();
?>

<div class="site-content-wrapper">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="page-<?php the_ID(); ?>" <?php post_class(); ?> aria-labelledby="page-title-<?php the_ID(); ?>">

					<!-- Page Title -->
					<header class="entry-header">
						<h1 id="page-title-<?php the_ID(); ?>">
							<?php echo esc_html( get_the_title() ); ?>
						</h1>
					</header>

					<!-- Page Content -->
					<div class="entry-content">
						<?php
						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bloglume' ),
								'after'  => '</div>',
							)
						);
						?>
					</div>

					<?php get_template_part( 'template-parts/post-meta' ); ?>

				</article>

			<?php endwhile; ?>
		<?php endif; ?>

	</main>
</div>

<?php get_footer(); ?>
