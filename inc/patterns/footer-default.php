<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Default footer', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-title /-->

					<!-- wp:paragraph {"align":"right"} -->
					<p class="has-text-align-right">' . esc_html__( 'Proudly powered by ', 'twentytwentytwo' ) . '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">WordPress</a></p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group -->',
);
