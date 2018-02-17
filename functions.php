<?php
/**
 * BsMyBoilerplateTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BsMyBoilerplateTheme
 * @since 0.1
 * @version 0.1
 */

/**
 * Enqueue scripts and styles
 */
function bs_boilerplate_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'bs_boilerplate_theme_scripts' );
