<?php
/**
 * Small header with dark background block pattern
 */
return array(
	'title'      => __( 'Small header with dark background', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"},"margin":{"bottom":"8rem"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="margin-bottom:8rem;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"max(1.25rem, 5vw)","left":"max(1.25rem, 5vw)","top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:max(1.25rem, 5vw);padding-bottom:0px;padding-left:max(1.25rem, 5vw)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"max(1.25rem, 5vw)","bottom":"8rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:max(1.25rem, 5vw);padding-bottom:8rem"><!-- wp:group {"layout":{"type":"flex"}} -->
					<div class="wp-block-group"><!-- wp:site-logo {"width":64} /-->

					<!-- wp:site-title {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} /--></div>
					<!-- /wp:group -->

					<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- wp:page-list /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->

					<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image alignwide size-full"><img src="' . esc_url( get_stylesheet_directory_uri() ) . '/assets/images/flight-path-on-transparent-d.png" alt="' . esc_attr__( 'Illustration of a bird flying.', 'twentytwentytwo' ) . '"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:group -->',
);
