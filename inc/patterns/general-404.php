<?php
/**
 * 404 content.
 */
return array(
	'title'      => __( '404 content', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-general' ),
	'content'    => '<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"200","lineHeight":"1","spacing":{"margin":{"top":"0","bottom":"0"}}}},"className":"has-text-align-center"} -->
					<h2 class="has-text-align-center" style="font-size:clamp(4rem, 40vw, 20rem);font-weight:200;line-height:1;margin-top:0;margin-bottom:0;">' . esc_html__( '404', 'twentytwentytwo' ) . '</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html__( 'This page could not be found. Maybe try a search?', 'twentytwentytwo' ) . '</p>
					<!-- /wp:paragraph -->
					<!-- wp:search {"label":"Search","showLabel":false,"width":50,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->
					<!-- wp:spacer {"height":128} -->
					<div style="height:128px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->',
);
