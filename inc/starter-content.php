<?php
/**
 * Twenty Twenty-Two Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since 1.0.0
 */

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `twentytwenty_starter_content` filter before returning.
 *
 * @since 1.0.0
 *
 * @return array A filtered array of args for the starter_content.
 */
function twentytwentytwo_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'     => array(
			'home' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Home', 'Theme starter content', 'twentytwentytwo' ),
				'post_content' => '<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
								<div class="wp-block-group alignwide"><!-- wp:paragraph -->
								<p>' . esc_html_x( 'LATEST POSTS', 'Theme starter content', 'twentytwentytwo' ) . '</p>
								<!-- /wp:paragraph -->

								<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
								<div class="wp-block-query"><!-- wp:post-template -->
								<!-- wp:post-featured-image {"isLink":true,"width":"","height":"310px"} /-->

								<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

								<!-- wp:post-excerpt /-->

								<!-- wp:post-date {"fontSize":"small"} /-->
								<!-- /wp:post-template --></div>
								<!-- /wp:query --></div>
								<!-- /wp:group -->

								<!-- wp:spacer {"height":64} -->
								<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
								<!-- /wp:spacer -->

								<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
								<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
								<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
								<h2>' . wp_kses_post( _x( 'Watch birds<br>from your inbox', 'Theme starter content', 'twentytwentytwo' ) ) . '</h2>
								<!-- /wp:heading -->

								<!-- wp:buttons -->
								<div class="wp-block-buttons"><!-- wp:button {"fontSize":"normal"} -->
								<div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link">' . esc_html_x( 'Join our mailing list', 'Theme starter content', 'twentytwentytwo' ) . '</a></div>
								<!-- /wp:button --></div>
								<!-- /wp:buttons --></div>
								<!-- /wp:column -->

								<!-- wp:column {"verticalAlignment":"center"} -->
								<div class="wp-block-column is-vertically-aligned-center"><!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
								<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
								<!-- /wp:separator --></div>
								<!-- /wp:column --></div>
								<!-- /wp:columns -->',
			),
			'blog',
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),
	);

	/**
	 * Filters the array of starter content.
	 *
	 * @since 1.0.0
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'twentytwentytwo_starter_content', $starter_content );
}
