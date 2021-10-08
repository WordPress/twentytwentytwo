<?php
/**
 * Text-only Header with Tagline and all-caps Title block pattern
 */
return array(
	'title'       => __( 'Text-only Header with Tagline and all-caps Title', 'twentytwentytwo' ),
	'categories'  => array( 'twentytwentytwo-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'     => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"8rem","top":"max(1.25rem, 5vw)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:max(1.25rem, 5vw);padding-bottom:8rem"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
					<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase"}}} /-->

					<!-- wp:site-tagline {"fontSize":"small","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} /--></div>
					<!-- /wp:group -->

					<!-- wp:navigation {"itemsJustification":"right","isResponsive":true} -->
					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:group -->'
);