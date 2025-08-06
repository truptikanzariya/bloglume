<?php get_header(); ?>

<div class="content-wrapper">
	<main id="main" class="content-area" role="main">
		<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> aria-labelledby="post-title-<?php the_ID(); ?>">
					<header class="entry-header">
						<h1 id="post-title-<?php the_ID(); ?>"><?php the_title(); ?></h1>
					</header>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

					<?php
					$tags_list = get_the_tag_list( '', ', ' );
					if ( $tags_list ) {
						echo '<div class="post-tags"><strong>' . esc_html__( 'Tags:', 'bloglume' ) . '</strong> ' . $tags_list . '</div>';
					}
					get_template_part( 'template-parts/post-meta' ); ?>
					<?php comments_template(); ?>
				</article>
			<?php endwhile;
		endif; ?>
	</main>

	<aside class="sidebar-area">
		<?php get_sidebar(); ?>
	</aside>
</div>

<?php get_footer(); ?>
