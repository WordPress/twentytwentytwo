<?php
/**
 * Centered header with navigation, social links, and salmon background block pattern
 */
return array(
	'title'      => __( 'Centered header with navigation, social links, and salmon background', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"max(1.25rem, 5vw)","bottom":"max(1.25rem, 5vw)","left":"max(1.25rem, 5vw)","right":"max(1.25rem, 5vw)"}}},"backgroundColor":"secondary","textColor":"primary","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull has-primary-color has-secondary-background-color has-text-color has-background has-link-color" style="padding-top:max(1.25rem, 5vw);padding-right:max(1.25rem, 5vw);padding-bottom:max(1.25rem, 5vw);padding-left:max(1.25rem, 5vw)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
					<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"}} -->
					<!-- wp:page-list /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":""} -->
					<div class="wp-block-column"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} /--></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--custom--color--primary)","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
					<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /wp:social-links --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group -->',
);
