<?php

if ( ! function_exists( 'twentytwentytwo_support' ) ) :
	function twentytwentytwo_support()  {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-Two, use a find and replace
		 * to change 'twentytwentytwo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentytwentytwo' );

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
	add_action( 'after_setup_theme', 'twentytwentytwo_support' );
endif;

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :
	/**
	 * Enqueue scripts and styles.
	 */
	function twentytwentytwo_styles() {
		// Enqueue theme stylesheet.
		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style( 'twentytwentytwo-style', get_template_directory_uri() . '/style.css', array(), $version_string );
	}
	add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );
endif;

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