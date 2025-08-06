<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package dellaterrapro
 */

// Register widget areas
function bloglume_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'bloglume' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Main sidebar that appears on the right.', 'bloglume' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'bloglume_widgets_init' );

// Register a custom block style for the core/quote block
function bloglume_register_block_styles() {
    register_block_style(
        'core/quote',
        array(
            'name'  => 'fancy-quote',
            'label' => __( 'Fancy Quote', 'bloglume' ),
            'inline_style' => '.is-style-fancy-quote { font-style: italic; border-left: 4px solid #ccc; padding-left: 1em; }',
        )
    );
}
add_action( 'init', 'bloglume_register_block_styles' );


// Register a custom block pattern
function bloglume_register_block_patterns() {
    // Register a block pattern category (optional, but recommended)
    if ( function_exists( 'register_block_pattern_category' ) ) {
        register_block_pattern_category(
            'bloglume',
            array( 'label' => __( 'Bloglume Patterns', 'bloglume' ) )
        );
    }

    // Register the block pattern
    if ( function_exists( 'register_block_pattern' ) ) {
        register_block_pattern(
            'bloglume/hero-section',
            array(
                'title'       => __( 'Hero Section', 'bloglume' ),
                'description' => _x( 'A full-width hero section with text.', 'Block pattern description', 'bloglume' ),
                'categories'  => array( 'bloglume' ),
                'content'     => '<!-- wp:cover {"dimRatio":50,"minHeight":300,"align":"full"} -->
                    <div class="wp-block-cover alignfull" style="min-height:300px">
                        <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
                        <div class="wp-block-cover__inner-container">
                            <h2>Welcome to Bloglume</h2>
                        </div>
                    </div>
                <!-- /wp:cover -->',
            )
        );
    }
}
add_action( 'init', 'bloglume_register_block_patterns' );
