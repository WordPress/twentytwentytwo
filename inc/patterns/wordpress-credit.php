<?php
/**
 * WordPress Credit block pattern
 *
 */
return array(
	'title'       => __( 'WordPress Credit', 'twentytwentytwo' ),
	'categories'  => array( 'twentytwentytwo' ),
	'content'     => '<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right">' . __( 'Proudly powered by ', 'twentytwentytwo' ) . '<a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
<!-- /wp:paragraph -->'
);