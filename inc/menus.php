<?php
/**
 * Registers nav menus locations
 */
function wpmarker_register_nav_menus() {
	register_nav_menus(
		array(
			'main_menu' 	=> __( 'Main Menu', 'wpmarker_textdomain' )
		)
	);
}