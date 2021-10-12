<?php
/**
 * Large Header block pattern
 */
return array(
	'title'      => __( 'Large Header', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0px","right":"max(1.25rem, 5vw)","bottom":"max(1.25rem, 5vw)","left":"max(1.25rem, 5vw)"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
					<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:0px;padding-right:max(1.25rem, 5vw);padding-bottom:max(1.25rem, 5vw);padding-left:max(1.25rem, 5vw)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"8rem","top":"max(1.25rem, 5vw)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:max(1.25rem, 5vw);padding-bottom:8rem"><!-- wp:group {"layout":{"type":"flex"}} -->
					<div class="wp-block-group">
					<!-- wp:site-logo {"width":64} /-->

					<!-- wp:site-title {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} /--></div>
					<!-- /wp:group -->

					<!-- wp:navigation {"itemsJustification":"right","isResponsive":true} -->
					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:group -->

					<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:site-tagline {"style":{"typography":{"fontFamily":"var:preset|font-family|source-serif-pro","fontWeight":"300","fontSize":"clamp(4rem, 8vw, 6.25rem)","lineHeight":"1.15"}}} /--></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group -->',
);
