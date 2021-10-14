<?php
/**
 * About Me - Link in Bio
 */
return array(
	'title'      => __( 'About Me - Link in Bio', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-about-me' ),
	'content'    => '<!-- wp:group -->
					<div class="wp-block-group"><!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() ) . '/assets/img/patterns/swallow.png" alt="" width="100" height="100"/></figure></div>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px"}}} -->
					<h2 class="has-text-align-center" style="font-size:48px">' . esc_html__( 'Swoop', 'twentytwentytwo' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html__( 'A podcast about birds', 'twentytwentytwo' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons {"contentJustification":"center"} -->
					<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"width":75,"style":{"border":{"radius":"6px"}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-75"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'Watch our videos', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":75,"style":{"border":{"radius":"6px"}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-75"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'Listen on iTunes Podcasts', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":75,"style":{"border":{"radius":"6px"}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-75"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'Listen on Spotify', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":75,"style":{"border":{"radius":"6px"}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-75"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'Support the show', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":75,"style":{"border":{"radius":"6px"}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-75"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'About the hosts', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->

					<!-- wp:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#1a4548","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org/","service":"wordpress"} /-->

					<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

					<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

					<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /--></ul>
					<!-- /wp:social-links --></div>
					<!-- /wp:group -->',
);
