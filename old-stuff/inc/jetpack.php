<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package hm15
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function hm15_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'hm15_jetpack_setup' );
