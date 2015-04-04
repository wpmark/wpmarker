<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script>(function(){document.documentElement.className='js'})();</script>
	
	<?php
		
		/**
		 * @hook wp_head
		 * this runs the wp_head hooked used by plugin to add content here
		 * the themes css file style.css is hooked in here using wp_enqueue_style
		 */
		wp_head();
	
	?>
	
</head>

<body <?php body_class(); ?>>