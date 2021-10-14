<?php
/**
 * Page layout with image, text and video.
 */
return array(
	'title'      => __( 'Page layout with image, text and video', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-pages' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem"}}},"backgroundColor":"primary","textColor":"background"} -->
	<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:8rem;padding-bottom:8rem"><!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide">
	<!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"72px"}}} -->
	<h1 class="alignwide" style="font-size:72px">' . wp_kses_post( __( '<em>Warble</em>, a film about <br>hobbyist bird watchers.', 'twentytwentytwo' ) ) . '</h1>
	<!-- /wp:heading -->
	
	<!-- wp:spacer {"height":50} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/img/patterns/warble.png","focalPoint":{"x":"0.89","y":"0.38"},"minHeight":900,"contentPosition":"top left","align":"wide"} -->
	<div class="wp-block-cover alignwide has-custom-content-position is-position-top-left" style="min-height:900px"><span aria-hidden="true" class="has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'TBD', 'twentytwentytwo' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/patterns/warble.png" style="object-position:89% 38%" data-object-fit="cover" data-object-position="89% 38%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"style":{"typography":{"fontSize":"32px"}}} -->
	<h2 style="font-size:32px">' . esc_html__( 'Screening', 'twentytwentytwo' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . wp_kses_post( __( 'May 14th, 2022 @ 7:00PM<br>The Vintagé Theater,<br>245 Arden Rd.<br>Gardenville, NH', 'twentytwentytwo' ) ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:spacer {"height":50} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"primary"} -->
	<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-secondary-background-color has-text-color has-background">' . esc_html__( 'Buy Tickets', 'twentytwentytwo' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	</div></div>
	<!-- /wp:cover -->
	
	<!-- wp:spacer {"height":50} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"style":{"typography":{"fontSize":"32px"}}} -->
	<h2 style="font-size:32px">' . esc_html__( 'Extended Trailer', 'twentytwentytwo' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Oh hello. My name’s Angelo, and you’ve found your way to my blog. I write about a range of topics, but lately I’ve been sharing my hopes for next year.', 'twentytwentytwo' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:video {"id":181} -->
	<figure class="wp-block-video"><video controls src="' . esc_url( get_template_directory_uri() ) . '/assets/img/patterns/tt2.mp4"></video></figure>
	<!-- /wp:video --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
