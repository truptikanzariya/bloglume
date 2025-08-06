<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( is_single() || is_page() ) : ?>
		<meta name="description" content="<?php echo esc_attr( get_the_excerpt() ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'bloglume' ); ?></a>

<header id="masthead" class="site-header" role="banner">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-12 col-md-6 site-branding d-flex align-items-center">
				<?php if ( has_custom_logo() ) {
					the_custom_logo();
				} else { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<p class="site-description mb-0"><?php bloginfo( 'description' ); ?></p>
				<?php } ?>
			</div>
			<div class="col-12 col-md-6 d-flex justify-content-end align-items-center">
				<!-- Hamburger icon without text -->
				<button class="menu-toggle" id="mobile-menu-toggle" aria-label="Toggle menu">
					<span class="hamburger"></span>
				</button>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class'     => 'primary-menu',
						'container'      => false,
					) );
					?>
				</nav>
			</div>
		</div>
	</div>
</header>

<?php wp_body_open(); ?>
