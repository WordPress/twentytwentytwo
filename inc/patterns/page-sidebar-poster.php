<?php
/**
 * Poster with right sidebar block pattern
 */
return array(
	'title'      => __( 'Poster with right sidebar', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-pages' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"max(1.25rem, 5vw)","right":"max(1.25rem, 5vw)"}}},"layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull" style="padding-right:max(1.25rem, 5vw);padding-left:max(1.25rem, 5vw)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"5%"}}} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} -->
					<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
					<h1 class="alignwide" id="warble-a-film-about-hobbyist-bird-watchers-1" style="font-size:clamp(3rem, 6vw, 4.5rem)">' . wp_kses_post( __( '<em>Flutter</em>, a collection of bird-related ephemera', 'twentytwentytwo' ) ) . '</h1>
					<!-- /wp:heading --></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":""} -->
					<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"20px","left":"20px"}}}} -->
					<div class="wp-block-group" style="padding-top:0px;padding-right:20px;padding-bottom:20px;padding-left:20px"></div>
					<!-- /wp:group --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"5%"}}} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"bottom":"32px"}}}} -->
					<div class="wp-block-column" style="padding-bottom:32px;flex-basis:70%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="' . esc_url( get_stylesheet_directory_uri() ) . '/assets/images/bird-on-salmon.jpg" alt="' . esc_attr__( 'Image of a bird on a branch', 'twentytwentytwo' ) . '"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":""} -->
					<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"20px","left":"20px"}}}} -->
					<div class="wp-block-group" style="padding-top:0px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:image {"width":100,"height":47,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-binoculars.png" alt="' . esc_attr__( 'An icon representing binoculars.', 'twentytwentytwo' ) . '" width="100" height="47"/></figure>
					<!-- /wp:image -->

					<!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {"level":3,"fontSize":"medium"} -->
					<h3 class="has-medium-font-size" id="screening-1"><em>' . esc_html__( 'Date', 'twentytwentytwo' ) . '</em></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>' . esc_html__( 'February, 12 2021', 'twentytwentytwo' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {"level":3,"fontSize":"medium"} -->
					<h3 class="has-medium-font-size" id="screening-1"><em>' . esc_html__( 'Location', 'twentytwentytwo' ) . '</em></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>' . wp_kses_post( __( 'The Grand Theater<br>154 Eastern Avenue<br>Maryland NY, 12345', 'twentytwentytwo' ) ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div>
					<!-- /wp:group --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group -->',
);
