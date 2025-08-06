<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info container">
		<div class="row">
			<div class="col-md-6">
				&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> &middot;
				<?php
				$link = sprintf(
					'<a href="%1$s" title="%2$s" rel="%3$s">%4$s</a>',
					esc_url( '' ),
					esc_attr__( 'WordPress Profile', 'bloglume' ),
					'nofollow',
					'Trupti Kanzariya'
				);
				printf( esc_html__( '%1$s Theme by %2$s', 'bloglume' ), 'Bloglume', $link );
				?>
			</div>
			<div class="col-md-6 text-md-end">
				<?php printf( esc_html__( 'Proudly powered by %s', 'bloglume' ), 'WordPress' ); ?>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
