<?php
/**
 * Vassar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vassar
 */

/**
 * Enqueue scripts and styles.
 */
function local_scripts() {
	wp_enqueue_script( 'vassar-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'vassar-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_style( 'flickity-style' );
	wp_enqueue_script( 'flickity' );
	wp_enqueue_script( 'waypoints' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'local_scripts' );