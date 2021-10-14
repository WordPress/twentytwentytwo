<?php
/**
 * About Me - Big Image and Buttons
 */
return array(
	'title'      => __( 'About Me - Big Image and Buttons', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-about-me' ),
	'content'    => '<!-- wp:group {"align":"full"} -->
					<div class="wp-block-group alignfull">
					<!-- wp:image {"align":"full","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image alignfull size-full"><img src="' . esc_url( get_stylesheet_directory_uri() ) . '/assets/img/patterns/hummingbird-flying.jpg" alt="" /></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"wideSize":"1000px"}} -->
					<div class="wp-block-group" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:buttons {"contentJustification":"space-between"} -->
					<div class="wp-block-buttons is-content-justification-space-between"><!-- wp:button {"width":25} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-25"><a class="wp-block-button__link">' . esc_html__( 'Purchase my work', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":25} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-25"><a class="wp-block-button__link">' . esc_html__( 'Support my studio', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":25} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-25"><a class="wp-block-button__link">' . esc_html__( 'Take a class', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->

					<!-- wp:buttons {"contentJustification":"space-between"} -->
					<div class="wp-block-buttons is-content-justification-space-between"><!-- wp:button {"width":25} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-25"><a class="wp-block-button__link">' . esc_html__( 'Read about me', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":25} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-25"><a class="wp-block-button__link">' . esc_html__( 'See my process', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":25} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-25"><a class="wp-block-button__link">' . esc_html__( 'Join my mailing list', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#1a4548","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org/","service":"wordpress"} /-->

					<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

					<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

					<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /--></ul>
					<!-- /wp:social-links --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
