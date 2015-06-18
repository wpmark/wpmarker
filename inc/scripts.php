<?php
/**
 * function wpmarker_enqueue_scripts_styles()
 * enqueues the theme scripts and styles in the head or footer
 */
function wpmarker_enqueue_scripts_styles() {
	
	global $wp_styles;
	
	/* load the theme js file */
	wp_enqueue_script(
		'wpmarker_js',
		get_template_directory_uri(). '/assets/js/main-min.js',
		array( 'jquery' ), // require these to loaded before this
		false, // no version of this file
		true // enqueue in footer not <head>
		
	);
	
	/* load the themes styles */
	wp_enqueue_style(
		'wpmarker_styles',
		get_template_directory_uri(). '/assets/css/style.css',
		array( 'dashicons' ), // load dashicons before this
		array(), // no version
		'all' // for all media types
	);
	
	/* load the themes styles */
	wp_enqueue_style(
		'wpmarker_gridset',
		get_template_directory_uri(). '/assets/css/gridset.css',
		array( 'wpmarker_styles' ), // load theme styles first
		array(), // no version
		'all' // for all media types
	);
	
	/**
     * Load our IE 9 specific stylesheet:
     * <!--[if IE 9]> ... <![endif]-->
     */
	wp_enqueue_style( 'wpmarker_ie9_style', get_template_directory_uri(). '/assets/css/gridset-ie-9.css', array( 'wpmarker_styles' ) );
	$wp_styles->add_data( 'wpmarker_ie9_style', 'conditional', 'IE 9' );
	
	/**
     * Load our IE 8 specific stylesheet:
     * <!--[if lte IE 8]> ... <![endif]-->
     */
	wp_enqueue_style( 'wpmarker_ie8_style', get_template_directory_uri(). '/assets/css/gridset-ie-lte8.css', array( 'wpmarker_styles' ) );
	$wp_styles->add_data( 'wpmarker_ie8_style', 'conditional', 'lte IE 8' );
	
	/* add custom fonts */
	wp_enqueue_style(
		'wpmarker_fonts',
		wpmarker_fonts_url(),
		array(),
		null
	);
	
}

add_action( 'wp_enqueue_scripts', 'wpmarker_enqueue_scripts_styles' );