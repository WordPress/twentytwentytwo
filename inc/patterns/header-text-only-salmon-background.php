<?php
/**
 * Text-only header with salmon background block pattern
 */
return array(
	'title'      => __( 'Text-only header with salmon background', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"max(1.25rem, 5vw)","bottom":"max(1.25rem, 5vw)","left":"max(1.25rem, 5vw)","right":"max(1.25rem, 5vw)"}}},"backgroundColor":"secondary","textColor":"foreground","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull has-foreground-color has-secondary-background-color has-text-color has-background has-link-color" style="padding-top:max(1.25rem, 5vw);padding-right:max(1.25rem, 5vw);padding-bottom:max(1.25rem, 5vw);padding-left:max(1.25rem, 5vw)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide"><!-- wp:site-title {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

					<!-- wp:navigation {"itemsJustification":"right","isResponsive":true} -->
					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
