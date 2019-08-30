<?php
/**
 * Thumbnails configuration.
 *
 * @package FreeBook
 */

add_action( 'after_setup_theme', 'freebook_register_image_sizes', 5 );
/**
 * Register image sizes.
 */
function freebook_register_image_sizes() {
	set_post_thumbnail_size( 418, 315, true );

	// Registers a new image sizes.
	add_image_size( 'freebook-thumb-s', 150, 150, true );
	add_image_size( 'freebook-slider-thumb', 158, 88, true );
	add_image_size( 'freebook-thumb-m', 400, 400, true );
	add_image_size( 'freebook-thumb-masonry', 418, 9999 );
	add_image_size( 'freebook-thumb-l', 886, 668, true );
	add_image_size( 'freebook-thumb-l-2', 886, 315, true );
	add_image_size( 'freebook-thumb-xl', 1920, 1080, true );
	add_image_size( 'freebook-author-avatar', 512, 512, true );
	add_image_size( 'freebook-thumb-1355-1020', 1355, 1020, true );
}
