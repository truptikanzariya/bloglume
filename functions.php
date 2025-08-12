<?php
/**
 * Bloglume functions and definitions
 *
 * @package bloglume
 */

// Define theme version for cache busting.
if ( ! defined( 'BLOGLUME_VERSION' ) ) {
	define( 'BLOGLUME_VERSION', '1.0.0' );
}

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup.
 */
function bloglume_setup() {
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Support for custom logo.
	add_theme_support( 'custom-logo' );

	// Enable featured images.
	add_theme_support( 'post-thumbnails' );

	// Enable automatic feed links.
	add_theme_support( 'automatic-feed-links' );

	// Enable HTML5 markup.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	// Support custom background and header.
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );

	// Block editor enhancements.
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );

	// Register menu locations.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'bloglume' ),
		)
	);
}
add_action( 'after_setup_theme', 'bloglume_setup' );

/**
 * Load editor styles.
 */
add_action(
	'after_setup_theme',
	function() {
		add_editor_style( 'editor-style.css' );
	}
);

/**
 * Enqueue frontend scripts and styles.
 */
function bloglume_scripts() {
	// Enqueue comment reply script if needed.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Google Fonts.
	wp_enqueue_style(
		'bloglume-google-fonts',
		esc_url( 'https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap' ),
		array(),
		null
	);

	// Bootstrap CSS.
	wp_enqueue_style(
		'bootstrap-css',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
		array(),
		'5.3.0'
	);

	// Main theme stylesheet.
	wp_enqueue_style(
		'bloglume-style',
		get_stylesheet_uri(),
		array(),
		BLOGLUME_VERSION
	);

	// Custom theme CSS.
	wp_enqueue_style(
		'bloglume-assets-css',
		get_template_directory_uri() . '/assets/css/custom.css',
		array(),
		filemtime( get_template_directory() . '/assets/css/custom.css' )
	);

	// Bootstrap JS (includes Popper).
	wp_enqueue_script(
		'bootstrap-js',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
		array(),
		'5.3.0',
		true
	);

	// Custom theme JS.
	wp_enqueue_script(
		'bloglume-assets-js',
		get_template_directory_uri() . '/assets/js/custom.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/custom.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'bloglume_scripts' );

/**
 * Compatibility function for older versions of WordPress.
 */
if ( ! function_exists( 'wp_body_open' ) ) {
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

/**
 * Include additional theme functions.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
