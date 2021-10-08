<?php
/**
 * Twenty Twenty-Two: Block Patterns
 *
 * @since 1.0
 */

if ( ! function_exists( 'twentytwentytwo_register_block_patterns' ) ) :
	function twentytwentytwo_register_block_patterns() {
		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'twentytwentytwo-headers',
				array( 'label' => __( 'Twenty Twenty-Two Headers', 'twentytwentytwo' ) )
			);
		}
		if ( function_exists( 'register_block_pattern' ) ) {
			$block_patterns = array(
				'header-default',
				'header-with-tagline',
				'header-text-only',
				'header-text-only-with-tagline',
				'header-text-only-all-caps-with-tagline',
				'header-logo-navigation',
				'header-logo-navigation-social',
				'header-title-navigation-social',
				'header-logo-navigation-offset-tagline',
				'header-stacked',
				'header-large-dark'
			);

			foreach ( $block_patterns as $block_pattern ) {
				register_block_pattern(
					'twentytwentytwo/' . $block_pattern,
					require __DIR__ . '/patterns/' . $block_pattern . '.php'
				);
			}
		}
	}
endif;
add_action( 'init', 'twentytwentytwo_register_block_patterns', 9 );