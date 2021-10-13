<?php
/**
 * Page layout with image and text.
 */
return array(
	'title'      => __( 'Page layout with image and text', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-pages' ),
	'content'    => '<!-- wp:heading {"align":"wide","style":{"typography":{"fontSize":"120px","lineHeight":"1.15","fontWeight":"300"}}} -->
	<h2 class="alignwide" style="font-size:120px;font-weight:300;line-height:1.15">' . wp_kses_post( __( '<em>Watching Birds </em><br><em>in the Garden</em>', 'twentytwentytwo' ) ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:image {"align":"full","style":{"color":{}}} -->
	<figure class="wp-block-image alignfull"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/patterns/watching-birds.png" alt="' . esc_attr__( 'TBD', 'twentytwentytwo' ) . '"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"bottom":"1em"}}}} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="padding-bottom:1em"><!-- wp:site-logo {"width":60} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"bottom"} -->
	<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph -->
	<p>' . wp_kses_post( __( 'Oh hello. My name’s Angelo, and I operate this blog. I was born in Portland, but I currently live in upstate New York. You may recognize me from publications with names like <a href="#">Eagle Beagle</a> and <a href="#">Mourning Dive</a>. I write for a living.<br><br>I usually use this blog to catalog extensive lists of birds and other things that I find interesting. If you find an error with one of my lists, please keep it to yourself.<br><br>If that’s not your cup of tea, <a href="#">I definitely recommend this tea</a>. It’s my favorite.', 'twentytwentytwo' ) ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
