<?php

if ( ! function_exists( 'twentytwentytwo_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'twentytwentytwo', get_template_directory() . '/languages' );

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
	wp_enqueue_style( 'twentytwentytwo-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'twentytwentytwo_scripts' );

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
