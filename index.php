<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme,
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package bloglume
 */

get_header();
?>

<div class="site-content-wrapper">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<h2 class="entry-title">
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<?php echo esc_html( get_the_title() ); ?>
							</a>
						</h2>
					</header>

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="post-thumbnail">
							<a href="<?php echo esc_url( get_permalink() ); ?>" aria-hidden="true" tabindex="-1">
								<?php the_post_thumbnail( 'large' ); ?>
							</a>
						</div>
					<?php endif; ?>

					<div class="entry-content">
						<?php the_excerpt(); ?>
						<a class="read-more-btn" href="<?php echo esc_url( get_permalink() ); ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Read more about %s', 'bloglume' ), get_the_title() ) ); ?>">
							<?php esc_html_e( 'Read More', 'bloglume' ); ?>
						</a>
					</div>

				</article>

			<?php endwhile; ?>

			<?php get_template_part( 'template-parts/pagination' ); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</main>
</div>

<?php get_footer(); ?>
