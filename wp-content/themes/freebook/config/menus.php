<?php
/**
 * Menus configuration.
 *
 * @package FreeBook
 */

add_action( 'after_setup_theme', 'freebook_register_menus', 5 );
/**
 * Register menus.
 */
function freebook_register_menus() {

	register_nav_menus( array(
		'top'          => esc_html__( 'Top', 'freebook' ),
		'main'         => esc_html__( 'Main', 'freebook' ),
		'main_landing' => esc_html__( 'Landing Main', 'freebook' ),
		'footer'       => esc_html__( 'Footer', 'freebook' ),
		'social'       => esc_html__( 'Social', 'freebook' ),
	) );
}
