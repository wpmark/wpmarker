<?php
/**
 * this file is used for theme specific template functions
 */

/**
 * function wpmarker_add_body_class()
 * adds a body class to activate the menu
 * @param (array) $classes are the current body classes
 */
function wpmarker_mobile_menu_body_class( $classes ) {
	
	/* add our class to the classes array */
	$classes[] = 'mobile-menu-push';
	
	/* return all the classes */
	return $classes;
	
}

add_filter( 'body_class', 'wpmarker_mobile_menu_body_class' );

/**
 * function wpmarker_output_mobile_menu()
 * output the mobile menu after the main menu
 */
function wpmarker_output_mobile_menu( $html, $args ) {

	/* check this is the main menu */
	if( $args->theme_location != 'main_menu' ) {
		return $html;
	}
	
	/* add the menu icon */
	$html .= '<div id="mobile-menu-icon" class="mobile-menu-icon"><span>Menu</span></div>';
	
	/* add mobile menu to html */
	$html .= wp_nav_menu(
		array(
			'container' 		=> 'div',
			'theme_location' 	=> 'mobile_menu',
			'container_id'		=> 'mobile-menu',
			'container_class'	=> 'mobile-menu',
			'menu_class'		=> 'menu-mobile-menu',
			'menu_id'			=> 'mobile-menu-list',
			'echo' 				=> false
		)
	);
	
	return $html;
	
}

add_filter( 'wp_nav_menu', 'wpmarker_output_mobile_menu', 10, 2 );