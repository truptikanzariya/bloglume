<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up until <div id="content">.
 *
 * @package bloglume
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php if ( is_single() || is_page() ) : ?>
		<meta name="description" content="<?php echo esc_attr( wp_strip_all_tags( get_the_excerpt() ) ); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main">
	<?php esc_html_e( 'Skip to content', 'bloglume' ); ?>
</a>

<header id="masthead" class="site-header" role="banner">
	<div class="header-inner">
		<div class="site-branding">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title">
					<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
				</a>
				<p class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
				<?php
			}
			?>
		</div>	
			
		<button class="menu-toggle" id="mobile-menu-toggle" aria-label="<?php echo esc_attr__( 'Toggle menu', 'bloglume' ); ?>" aria-expanded="false">
			<span class="icon-menu">&#9776;</span> <!-- Hamburger -->
			<span class="icon-close" style="display: none;">&times;</span> <!-- Close (×) -->
		</button>


		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'bloglume' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'primary-menu',
					'container'      => false,
				)
			);
			?>
		</nav>
	</div>
</header>
