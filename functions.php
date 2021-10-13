<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since 1.0.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Add support for core block visual styles.
	 * Styles load in both the editor and the front end.
	 *
	 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#default-block-styles
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		add_theme_support( 'wp-block-styles' );

	}
	add_action( 'after_setup_theme', 'twentytwentytwo_support' );

endif;

if ( function_exists( 'wp_register_webfonts' ) ) :
	wp_register_webfonts(
		array(
			array(
				'fontFamily'  => 'Source Serif Pro',
				'fontWeight'  => '200 900',
				'fontStyle'   => 'normal',
				'fontStretch' => 'normal',
				'src'         => get_theme_file_uri( 'assets/fonts/source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2' ),
				'provider'    => 'local',
			),
			array(
				'fontFamily'  => 'Source Serif Pro',
				'fontWeight'  => '200 900',
				'fontStyle'   => 'italic',
				'fontStretch' => 'normal',
				'src'         => get_theme_file_uri( 'assets/fonts/source-serif-pro/SourceSerif4Variable-Italic.ttf.woff2' ),
				'provider'    => 'local',
			),
		)
	);
endif;

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
