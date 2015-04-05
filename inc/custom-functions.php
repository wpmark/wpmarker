<?php
/**
 * this file is used for theme specific template functions
 */

/**
 * function wpmarker_add_to_body_class()
 * adds a body class to activate the mobile menu
 * adds a no-js class which is removed with js if js is active
 * @param (array) $classes are the current body classes
 */
function wpmarker_add_to_body_class( $classes ) {
	
	/* add our class to the classes array */
	$classes[] = 'mobpush';
	$classes[] = 'no-js';
	
	/* return all the classes */
	return $classes;
	
}

add_filter( 'body_class', 'wpmarker_add_to_body_class' );

/**
 * function wpmarker_output_mobile_menu()
 * adds the menu icon used for smaller screens
 */
function wpmarker_output_mobile_menu( $html, $args ) {

	/* check this is the main menu location */
	if( $args->theme_location != 'primary_nav' ) {
		return $html;
	}
	
	/* add the menu icon */
	$html = '<div id="mobile-menu-icon" class="mobile-menu-icon"><span>Menu</span></div>' . $html;
	
	/* return the modified menu html */
	return $html;
	
}

add_filter( 'wp_nav_menu', 'wpmarker_output_mobile_menu', 10, 2 );

/**
 * function wpmarker_fonts_url()
 * register google fonts for this theme
 * @return string Google fonts URL for the theme.
 */
function wpmarker_fonts_url() {
	
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';
	
	/* add noto sans font */
	$fonts[] = 'Noto Serif:400italic,700italic,400,700';

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;

}