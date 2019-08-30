<?php 
/**
 * Plugins configuration example 
 *
 * @var array
 */
 $plugins = array(
	 
     'cherry-testi' => array(
		 'name' => esc_html__( 'Cherry Testimonials', 'freebook' ),
		 'access' => 'skins',
	 ),
     'cherry-sidebars' => array(
         'name' => esc_html__( 'Cherry Sidebars', 'freebook' ),
         'access' => 'skins',
     ),
     'power-builder' => array(
			 'name'   => esc_html__( 'Power Builder', 'freebook' ),
			 'source' => 'remote',
			 'path'   => 'http://cloud.cherryframework.com/downloads/free-plugins/power-builder-upd.zip',
			 'access' => 'skins',
		),
     'power-builder-integrator' => array(
         'name' => esc_html__( 'Power Builder Integrator', 'freebook' ),
         'source' => 'remote',
         'path' => 'http://cloud.cherryframework.com/downloads/free-plugins/power-builder-integrator.zip',
         'access' => 'skins',
     ),
     'cherry-data-importer' => array(
         'name' => esc_html__( 'Cherry Data Importer', 'freebook' ),
         'source' => 'remote',
         'path' => 'https://github.com/CherryFramework/cherry-data-importer/archive/master.zip',
         'access' => 'base',
     ),
     'cherry-search' => array(
         'name'      => esc_html__( 'Cherry Search', 'freebook' ),
         'access' => 'skins',
     ),
 );


/**
 * Skins configuration example
 *
 * @var array
 */

 $skins = array(
    'base' => array(
        'cherry-data-importer',
    ),
    'advanced' => array(
        'default' => array(
            'full'  => array(
                'cherry-testi',
                'cherry-search',
               	'cherry-sidebars',
                'power-builder-integrator',
                'power-builder',
            ),
            'lite'  => false,
            'demo'  => 'http://ld-wp2.template-help.com/wptheme/freebook/',
            'thumb' => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.png',
            'name'  => esc_html__( 'Freebook', 'freebook' ),
        ),
         
         
    ),
);


 $texts = array(
    'theme-name' => 'Freebook'
);