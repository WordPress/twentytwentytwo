<?php
/**
 * About Me - Link in Bio - Dark
 */
return array(
	'title'      => __( 'About Me - Link in Bio - Dark', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-about-me' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"10rem","right":"0rem","bottom":"10rem","left":"0rem"}}},"backgroundColor":"primary","textColor":"background","layout":{"inherit":true,"contentSize":"480px"}} -->
					<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:10rem;padding-right:0rem;padding-bottom:10rem;padding-left:0rem"><!-- wp:group -->
					<div class="wp-block-group">

					<!-- wp:image {"width":100,"height":100,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="' . esc_url( get_stylesheet_directory_uri() ) . '/assets/img/patterns/swallow.png" alt="" width="100" height="100"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"48px"}}} -->
					<h2 class="has-text-align-left" style="font-size:48px">' . esc_html__( 'A trouble of hummingbirds', 'twentytwentytwo' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons {"contentJustification":"left"} -->
					<div class="wp-block-buttons is-content-justification-left"><!-- wp:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-outline"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'Watch our videos', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-outline"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'Listen on iTunes Podcasts', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-outline"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'Listen on Spotify', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-outline"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'Support the show', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-outline"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'About the hosts', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
