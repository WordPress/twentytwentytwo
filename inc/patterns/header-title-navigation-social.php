<?php
/**
 * Title, Navigation, and Social Links Header block pattern
 */
return array(
	'title'       => __( 'Title, Navigation, and Social Links Header', 'twentytwentytwo' ),
	'categories'  => array( 'twentytwentytwo-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'     => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"8rem","top":"max(1.25rem, 5vw)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:max(1.25rem, 5vw);padding-bottom:8rem"><!-- wp:site-title {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} /-->

					<!-- wp:navigation {"itemsJustification":"right","isResponsive":true} -->
					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->

					<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","className":"is-style-logos-only"} -->
					<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

					<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
					<!-- /wp:social-links -->
					<!-- /wp:navigation --></div>
					<!-- /wp:group -->'
);