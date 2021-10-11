<?php
/**
 * Image grid Posts List block pattern
 */
return array(
	'title'      => __( 'Image grid posts list', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:query {"query":{"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":false},"tagName":"main","displayLayout":{"type":"flex","columns":3},"layout":{"inherit":true}} -->
					<main class="wp-block-query"><!-- wp:post-template {"align":"wide"} -->
					<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"200px"} /-->

					<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|system-font","fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->

					<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div>
					<!-- /wp:group -->
					<!-- /wp:post-template -->

					<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
					<hr class="wp-block-separator alignwide is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

					<!-- wp:query-pagination-numbers /-->

					<!-- wp:query-pagination-next {"fontSize":"small"} /-->
					<!-- /wp:query-pagination --></main>
					<!-- /wp:query -->',
);
