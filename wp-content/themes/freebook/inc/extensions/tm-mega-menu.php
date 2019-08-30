<?php
/**
 * Extends basic functionality for better TM Mega Menu compatibility
 *
 * @package FreeBook
 */

/**
 * Check if Mega Menu plugin is activated.
 *
 * @return bool
 */
function freebook_is_mega_menu_active() {
	return class_exists( 'tm_mega_menu' );
}

add_filter( 'freebook_theme_script_variables', 'freebook_pass_mega_menu_vars' );

/**
 * Pass Mega Menu variables.
 *
 * @param  array  $vars Variables array.
 * @return array
 */
function freebook_pass_mega_menu_vars( $vars = array() ) {

	if ( ! freebook_is_mega_menu_active() ) {
		return $vars;
	}

	$vars['megaMenu'] = array(
		'isActive' => true,
		'location' => get_option( 'tm-mega-menu-location' ),
	);

	return $vars;
}
