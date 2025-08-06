<?php
/**
 * The template for displaying all single posts
 *
 * @package bloglume
 */

get_header();
?>

<div class="content-wrapper">
	<main id="main" class="content-area" role="main">
		<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> aria-labelledby="post-title-<?php the_ID(); ?>">
					
					<!-- Post title -->
					<header class="entry-header">
						<h1 id="post-title-<?php the_ID(); ?>"><?php echo esc_html( get_the_title() ); ?></h1>
					</header>

					<!-- Post content -->
					<div class="entry-content">
						<?php
						the_content();

						// Add pagination support for multi-page posts
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bloglume' ),
								'after'  => '</div>',
							)
						);
						?>
					</div>

					<!-- Tags -->
					<?php
					$tags_list = get_the_tag_list( '', ', ' );
					if ( $tags_list ) :
						?>
						<div class="post-tags">
							<strong><?php esc_html_e( 'Tags:', 'bloglume' ); ?></strong>
							<?php echo wp_kses_post( $tags_list ); ?>
						</div>
					<?php endif; ?>

					<!-- Post meta -->
					<?php get_template_part( 'template-parts/post-meta' ); ?>

					<!-- Comments -->
					<?php comments_template(); ?>
				
				</article>

			<?php endwhile;
		endif; ?>
	</main>

	<!-- Sidebar -->
	<aside class="sidebar-area" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'bloglume' ); ?>">
		<?php get_sidebar(); ?>
	</aside>
</div>

<?php get_footer(); ?>
