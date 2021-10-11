<?php
/**
 * Simple blog posts list block pattern
 */
return array(
	'title'      => __( 'Simple blog posts list', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:query {"query":{"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":false,"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
					<div class="wp-block-query alignwide"><!-- wp:post-template -->
					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"huge"} /-->

					<!-- wp:post-featured-image {"isLink":true} /-->

					<!-- wp:post-excerpt /-->

					<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->

					<!-- wp:spacer {"height":128} -->
					<div style="height:128px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					<!-- /wp:post-template -->

					<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

					<!-- wp:query-pagination-numbers /-->

					<!-- wp:query-pagination-next {"fontSize":"small"} /-->
					<!-- /wp:query-pagination --></div>
					<!-- /wp:query -->',
);
