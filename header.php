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
	
	<header class="header">
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			
			<?php
				
				wp_nav_menu(
					array(
						'theme_location' 	=> 'main_menu',
						'menu_id' 			=> 'main-menu',
						'container_class'	=> 'largescreen-menu'
					)
				);
			?>
			
		</nav><!-- #site-navigation -->
		
	</header>