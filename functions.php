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
	wp_enqueue_style( 'vassar-style', get_stylesheet_uri() );
	wp_enqueue_script( 'vassar-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'vassar-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'site-js', get_stylesheet_uri() . 'assets/js/site.js', '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'local_scripts' );