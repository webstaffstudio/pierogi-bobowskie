<?php
/**
 * Register navigation menus
 *
 * @link https://codex.wordpress.org/Function_Reference/register_nav_menus
 * @package pierogi_bobowskie
 */

add_action( 'after_setup_theme', 'register_theme_menus' );

/**
 * register_theme_menus
 *
 * @return void
 */
function register_theme_menus() {
	register_nav_menus(
		array(
			'left_header_menu'     => __( 'Left Header Menu', 'wp_dev' ),
			'right_header_menu'     => __( 'Right Header Menu', 'wp_dev' ),
			'footer_menu' => __( 'Footer Menu', 'wp_dev' ),
		)
	);
}
