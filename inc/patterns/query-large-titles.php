<?php
/**
 * Large post titles block pattern
 */
return array(
	'title'      => __( 'Large post titles', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
					<div class="wp-block-query alignwide"><!-- wp:post-template -->
					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"160px"} -->
					<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:160px"><!-- wp:post-date {"fontSize":"small"} /--></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":""} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"clamp(3rem, 6vw, 4rem)"}}} /--></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator is-style-wide"/>
					<!-- /wp:separator -->
					<!-- /wp:post-template --></div>
					<!-- /wp:query -->',
);
