<?php get_header(); ?>
<main id="main" class="site-main" role="main">
	<section class="error-404 not-found">
		<header class="page-header">
			<h1><?php esc_html_e( 'Page Not Found', 'bloglume' ); ?></h1>
		</header>
		<div class="page-content">
			<p><?php esc_html_e( 'Sorry, the page you are looking for does not exist.', 'bloglume' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
