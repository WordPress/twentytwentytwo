<?php
/**
 * Header with centered Logo in Navigation block pattern
 */
return array(
	'title'      => __( 'Header with centered Logo in Navigation', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"tagName":"header","align":"wide","style":{"spacing":{"padding":{"bottom":"8rem","top":"max(1.25rem, 5vw)"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
					<header class="wp-block-group alignwide" style="padding-top:max(1.25rem, 5vw);padding-bottom:8rem"><!-- wp:navigation {"itemsJustification":"right","isResponsive":true} -->
					<!-- wp:navigation-link {"isTopLevelLink":true} /-->

					<!-- wp:navigation-link {"isTopLevelLink":true} /-->

					<!-- wp:site-logo {"width":90} /-->

					<!-- wp:navigation-link {"isTopLevelLink":true} /-->

					<!-- wp:navigation-link {"isTopLevelLink":true} /-->
					<!-- /wp:navigation --></header>
					<!-- /wp:group -->',
);
