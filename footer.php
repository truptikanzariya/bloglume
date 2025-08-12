<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package bloglume
 */

?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info container">
		<div class="row">
			<div class="col-md-6">
				&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> &middot;
				<?php
				$link = sprintf(
					'<a href="%1$s" title="%2$s" rel="%3$s">%4$s</a>',
					esc_url( 'https://profiles.wordpress.org/truptikanzariya' ), 
					esc_attr__( 'WordPress Profile', 'bloglume' ),
					'nofollow',
					'Trupti Kanzariya'
				);
				printf(
					/* translators: 1: theme name, 2: author link */
					esc_html__( '%1$s Theme by %2$s', 'bloglume' ),
					'Bloglume',
					$link
				);
				?>
			</div>
			<div class="col-md-6 text-md-end">
				<?php
				printf(
					/* translators: %s: WordPress */
					esc_html__( 'Proudly powered by %s', 'bloglume' ),
					'WordPress'
				);
				?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
