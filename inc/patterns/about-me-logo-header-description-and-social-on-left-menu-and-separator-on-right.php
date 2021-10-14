<?php
/**
 * About Me - Logo, header, description, and social on left, menu and separator on right
 */
return array(
	'title'      => __( 'About Me - Logo, header, description, and social on left, menu and separator on right', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-about-me' ),
	'content'    => '<!-- wp:cover {"overlayColor":"foreground","minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"4rem","right":"4rem","bottom":"4rem","left":"4rem"}}}} -->
					<div class="wp-block-cover alignfull has-foreground-background-color has-background-dim" style="padding-top:4rem;padding-right:4rem;padding-bottom:4rem;padding-left:4rem;min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:navigation {"itemsJustification":"right"} -->
					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"bottom","width":"45%","style":{"spacing":{"padding":{"top":"12rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
					<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:12rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;flex-basis:45%"><!-- wp:site-logo {"width":60} /-->

					<!-- wp:heading {"style":{"typography":{"fontWeight":"300","lineHeight":"1.115","fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
					<h2 style="font-size:clamp(3rem, 6vw, 4.5rem);font-weight:300;line-height:1.115"><em>' . wp_kses_post(  __( 'Jesús<br>Rodriguez', 'twentytwentytwo' ) ) . '</em></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}}} -->
					<p style="line-height:1.6">' . esc_html__( 'Oh hello. My name’s Jesús, and you’ve found your way to my website. I’m an avid bird watcher, and I also broadcast my own radio show on Tuesday evenings at 11PM EDT.', 'twentytwentytwo' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","iconBackgroundColor":"foreground","iconBackgroundColorValue":"#000000"} -->
					<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://wordpress.org/","service":"wordpress"} /-->

					<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

					<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /--></ul>
					<!-- /wp:social-links --></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"4rem","left":"4rem"}}}} -->
					<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0rem;padding-right:0rem;padding-bottom:4rem;padding-left:4rem"><!-- wp:separator {"color":"background","className":"is-style-wide"} -->
					<hr class="wp-block-separator has-text-color has-background has-background-background-color has-background-color is-style-wide"/>
					<!-- /wp:separator --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div></div>
					<!-- /wp:cover -->',
);
