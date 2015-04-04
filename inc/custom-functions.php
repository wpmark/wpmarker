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
 * function wpmarker_output_menu_button()
 * output the menu button in the wp_footer hook
 */
function wpmarker_output_menu_button() {
	
	?>
	
	<div id="mobile-menu-icon" class="mobile-menu-icon">
		<span>Menu</span>
	</div>
	
	<?php

}

add_action( 'wp_footer', 'wpmarker_output_menu_button', 20 );

/**
 * function wpmarker_output_menu()
 * output the menu in the wp_footer hook
 */
function wpmarker_output_menu() { 
			
	/* get the header menu */
	wp_nav_menu(
		array(
			'container' => 'nav',
			'theme_location' => 'mobile_menu',
			'container_id' => 'mobile-menu',
			'container_class' => 'mobile-menu',
			'menu_class' => 'menu-mobile-menu',
			'menu_id' => false,
		)
	);
	
}

add_action( 'wp_footer', 'wpmarker_output_menu', 30 );