<?php
/**
 * function wpmarker_enqueue_scripts_styles()
 * enqueues the theme scripts and styles in the head or footer
 */
function wpmarker_enqueue_scripts_styles() {
	
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
		array( 'dashicons' ), // no dependencies
		array(), // no version
		'all' // for all media types
	);
	
	/* add custom fonts */
	wp_enqueue_style(
		'wpmarker_fonts',
		wpmarker_fonts_url(),
		array(),
		null
	);
	
}

add_action( 'wp_enqueue_scripts', 'wpmarker_enqueue_scripts_styles' );