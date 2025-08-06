<?php
/**
 * 404 Template File
 * 
 * Displays when a page is not found.
 *
 * @package bloglume
 */

get_header(); // Load the header template.
?>

<main id="main" class="site-main" role="main">
	<section class="error-404 not-found">
		<header class="page-header">
			<h1><?php esc_html_e( 'Page Not Found', 'bloglume' ); ?></h1>
		</header>

		<div class="page-content">
			<p><?php esc_html_e( 'Sorry, the page you are looking for does not exist.', 'bloglume' ); ?></p>

			<?php
			// Display the search form to help users find content.
			get_search_form();
			?>
		</div>
	</section>
</main>

<?php
get_sidebar(); // Load the sidebar template.
get_footer();  // Load the footer template.
