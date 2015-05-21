<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Sassy Underscores
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function sassyu_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'sassyu_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function sassyu_jetpack_setup
add_action( 'after_setup_theme', 'sassyu_jetpack_setup' );

function sassyu_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function sassyu_infinite_scroll_render