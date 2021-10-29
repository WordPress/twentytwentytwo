<?php
/**
 * Powered by WordPress credit line
 */
return array(
	'title'      => __( 'Powered by WordPress', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-general' ),
	'content'    => '<!-- wp:paragraph {"align":"right"} -->
					<p class="has-text-align-right">' .
					sprintf(
						/* Translators: WordPress link. */
						esc_html__( 'Proudly powered by %s', 'twentytwentytwo' ),
						'<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentytwo' ) ) . '" rel="nofollow">WordPress</a>'
					) . '</p>',
);
