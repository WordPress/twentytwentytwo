<?php

if ( ! function_exists( 'twentytwentytwo_support' ) ) :
	function twentytwentytwo_support()  {

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
	add_action( 'after_setup_theme', 'twentytwentytwo_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function twentytwentytwo_scripts() {
	// Enqueue theme stylesheet.
	$theme_version  = wp_get_theme()->get( 'Version' );
	$version_string = is_string( $theme_version ) ? $theme_version : false;
	wp_enqueue_style( 'twentytwentytwo-style', get_template_directory_uri() . '/style.css', array(), $version_string );
}
add_action( 'wp_enqueue_scripts', 'twentytwentytwo_scripts' );

if ( ! function_exists( 'twentytwentytwo_editor_styles' ) ) :
	/**
	 * Enqueue editor styles.
	 */
	function twentytwentytwo_editor_styles() {
		// Enqueue editor styles.
		add_editor_style(
			array(
				get_stylesheet_uri(),
			)
		);
	}
	add_action( 'admin_init', 'twentytwentytwo_editor_styles' );
endif;