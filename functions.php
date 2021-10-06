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

if ( ! function_exists( 'twentytwentytwo_scripts' ) ) :
	/**
	 * Enqueue scripts and styles.
	 */
	function twentytwentytwo_scripts() {
		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}
	add_action( 'wp_enqueue_scripts', 'twentytwentytwo_scripts' );
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
