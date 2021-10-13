<?php

if ( ! function_exists( 'twentytwentytwo_support' ) ) :
	function twentytwentytwo_support() {

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
		// Register theme stylesheet.
		wp_register_style( 'twentytwentytwo-style', '' );
		// Add styles inline.
		wp_add_inline_style( 'twentytwentytwo-style', twentytwentytwo_get_font_face_styles() );
		// Enqueue theme stylesheet.
		wp_style_add_data( 'twentytwentytwo-style', 'path', get_template_directory() . '/style.css' );
		wp_enqueue_style( 'twentytwentytwo-style' );
	}
	add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );
endif;

if ( ! function_exists( 'twentytwentytwo_editor_styles' ) ) :
	/**
	 * Enqueue editor styles.
	 */
	function twentytwentytwo_editor_styles() {
		wp_add_inline_style( 'wp-block-library', twentytwentytwo_get_font_face_styles() );
	}
	add_action( 'admin_init', 'twentytwentytwo_editor_styles' );
endif;

// Opt-in to only load styles for rendered blocks.
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

if ( ! function_exists( 'twentytwentytwo_get_font_face_styles' ) ) :
	/**
	 * Get font face styles.
	 *
	 * @return string
	 */
	function twentytwentytwo_get_font_face_styles() {
		return "
		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2' ) . "') format('woff2');
		}

		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/source-serif-pro/SourceSerif4Variable-Italic.ttf.woff2' ) . "') format('woff2');
		}
		";
	}
endif;

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

/**
 * TEMPORARY
 * Adds DM Sans Font
 */
function twentytwentytwo_add_dm_sans_font() {
	add_editor_style( '//fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700' );
}
add_action( 'admin_init', 'twentytwentytwo_add_dm_sans_font' );

/**
 * TEMPORARY
 * Enqueue DM Sans Font
 */
function twentytwentytwo_enqueue_dm_sans_font() {
	// Enqueue Google fonts
	wp_enqueue_style( 'twentytwentytwo-dm-sans', '//fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700', array(), null );
}
add_action( 'wp_enqueue_scripts', 'twentytwentytwo_enqueue_dm_sans_font' );
