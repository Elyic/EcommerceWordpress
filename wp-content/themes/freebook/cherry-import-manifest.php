<?php
/**
 * Default manifest file
 *
 * @var array
 *
 * @package Freebook
 */
$settings = array(
	'xml' => false,
	'advanced_import' => array(
		'default' => array(
			'label'    => esc_html__( 'Freebook', 'freebook' ),
			'full'     => get_template_directory() . '/assets/demo-content/default/default-full.xml',
			'lite'     => false,
			'thumb'    => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.png',
			'demo_url' => 'https://ld-wp.template-help.com/wordpress_64057/',
		),
	),
	'import' => array(
		'chunk_size' => 3,
	),
	'slider' => array(
		'path' => 'https://raw.githubusercontent.com/templatemonster/tm-wizard-slider/default/slides.json',
	),
	'export' => array(
		'options' => array(
			'shop_catalog_image_size',
			'shop_single_image_size',
			'shop_thumbnail_image_size',
			'cherry_projects_options',
			'cherry_projects_options_default',
			'cherry-team',
			'cherry-team_default',
			'cherry-services',
			'cherry-services_default',
			'revslider-global-settings',
		),
		'tables' => array(),
	),
);
