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
		/* latin-ext */
		@font-face {
		  font-family: 'DM Sans';
		  font-style: italic;
		  font-weight: 400;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Fp2ywxg089UriCZa4ET-DJF4e8BH9.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'DM Sans';
		  font-style: italic;
		  font-weight: 400;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Fp2ywxg089UriCZa4Hz-DJF4e8A.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'DM Sans';
		  font-style: italic;
		  font-weight: 700;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Ap2ywxg089UriCZawpBqWB3wT2iv06JOy.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'DM Sans';
		  font-style: italic;
		  font-weight: 700;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Ap2ywxg089UriCZawpBqWCXwT2iv06A.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'DM Sans';
		  font-style: normal;
		  font-weight: 400;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Hp2ywxg089UriCZ2IHTWEBlwu8Q.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'DM Sans';
		  font-style: normal;
		  font-weight: 400;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Hp2ywxg089UriCZOIHTWEBlw.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* latin-ext */
		@font-face {
		  font-family: 'DM Sans';
		  font-style: normal;
		  font-weight: 700;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Cp2ywxg089UriASitCBamC3YU-CnE6Q.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'DM Sans';
		  font-style: normal;
		  font-weight: 700;
		  src: url(https://fonts.gstatic.com/s/dmsans/v6/rP2Cp2ywxg089UriASitCBimC3YU-Ck.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		";
	}
endif;

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

/**
 * TEMPORARY
 * Enqueue DM Sans Font
 */
function twentytwentytwo_enqueue_dm_sans_font() {
	// Enqueue Google fonts
	wp_enqueue_style( 'twentytwentytwo-dm-sans', '//fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700', array(), null );
}
add_action( 'wp_enqueue_scripts', 'twentytwentytwo_enqueue_dm_sans_font' );
