<?php
/**
 * WPCoder Blank Theme functions
 *
 * @package WordPress
 * @subpackage wpcoder-blank
 */

if ( ! function_exists( 'wp_coder_blank_setup' ) ) :
	/**
	 * Sets up theme defaults and registers the various WordPress features that
	 * this theme supports.
	 */
	function wp_coder_blank_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
	}
endif; // end function_exists blank_setup.
add_action( 'after_setup_theme', 'wp_coder_blank_setup' );

if ( ! is_admin() ) {
	add_action(
		'wp_enqueue_scripts',
		function() {
			wp_dequeue_style( 'global-styles' );
			wp_dequeue_style( 'classic-theme-styles' );
			wp_dequeue_style( 'wp-block-library' );
		}
	);
}