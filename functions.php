<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Theme setup
function bloglume_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'widgets' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	register_nav_menus( array( 'primary' => __( 'Primary Menu', 'bloglume' ) ) );
}
add_action( 'after_setup_theme', 'bloglume_setup' );

add_action( 'after_setup_theme', function() {
    add_editor_style( 'editor-style.css' );
});
// Enqueue styles and scripts
function bloglume_scripts() {

	 if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

	// Google Fonts
	wp_enqueue_style(
		'bloglume-google-fonts',
		'https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap',
		array(),
		null
	);

	// Bootstrap CSS
	wp_enqueue_style(
		'bootstrap-css',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
		array(),
		'5.3.3'
	);

	// Theme stylesheet
	wp_enqueue_style( 'bloglume-style', get_stylesheet_uri() );

	// Theme assets CSS
	wp_enqueue_style(
		'bloglume-assets-css',
		get_template_directory_uri() . '/assets/css/custom.css',
		array(),
		filemtime( get_template_directory() . '/assets/css/custom.css' )
	);

	// Bootstrap JS (with Popper)
	wp_enqueue_script(
		'bootstrap-js',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
		array(),
		'5.3.3',
		true
	);

	// Theme assets JS
	wp_enqueue_script(
		'bloglume-assets-js',
		get_template_directory_uri() . '/assets/js/custom.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/custom.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'bloglume_scripts' );

if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

