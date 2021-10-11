<?php
/**
 * Logo, Navigation, and offset Tagline Header block pattern
 */
return array(
	'title'      => __( 'Logo, Navigation, and offset Tagline Header', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"wide","tagName":"header","style":{"spacing":{"padding":{"bottom":"8rem"}}}} -->
					<header class="wp-block-group alignwide" style="padding-bottom:8rem"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"max(1.25rem, 5vw)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:max(1.25rem, 5vw)"><!-- wp:site-logo {"width":64} /-->

					<!-- wp:navigation {"itemsJustification":"right","isResponsive":true} -->
					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:group -->

					<!-- wp:columns {"isStackedOnMobile":false,"align":"wide"} -->
					<div class="wp-block-columns alignwide is-not-stacked-on-mobile"><!-- wp:column {"width":"64px"} -->
					<div class="wp-block-column" style="flex-basis:64px"></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"380px"} -->
					<div class="wp-block-column" style="flex-basis:380px"><!-- wp:site-tagline {"fontSize":"small"} /--></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></header>
					<!-- /wp:group -->',
);
