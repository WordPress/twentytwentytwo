<?php

if ( ! function_exists( 'twentytwentytwo_support' ) ) :
	function twentytwentytwo_support()  {

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
	}
	add_action( 'after_setup_theme', 'twentytwentytwo_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function twentytwentytwo_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'twentytwentytwo-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

/**
 * Enqueue editor styles.
 */
function twentytwentytwo_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap',
		)
	);
}
add_action( 'admin_init', 'twentytwentytwo_editor_styles' );

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_scripts' );
