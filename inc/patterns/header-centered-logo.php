<?php
/**
 * Header with centered Logo block pattern
 */
return array(
	'title'      => __( 'Header with centered Logo', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"wide","tagName":"header","style":{"spacing":{"padding":{"bottom":"8rem","top":"max(1.25rem, 5vw)"}}}} -->
					<header class="wp-block-group alignwide" style="padding-top:max(1.25rem, 5vw);padding-bottom:8rem"><!-- wp:columns {"verticalAlignment":"center"} -->
					<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}}} /--></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"64px"} -->
					<div class="wp-block-column" style="flex-basis:64px"><!-- wp:site-logo {"width":64} /--></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"itemsJustification":"right","isResponsive":true} -->
					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></header>
					<!-- /wp:group -->',
);
