<?php
/* template: front-page.php
 * used to load the sites home page or font page
 * best used in conjunction with setting static page for your home page in settings > reading
 */

/* get the header template */
get_header();

	?>
	
	<div class="container">
	 	
	 	<div style="border: 1px solid #333333; padding: 16px">
		 	
		 	<div class="ms-hide m-hide t-hide d-all">
			 	
			 	<h1>Large Desktops</h1>
			 	
		 	</div>
		 	
		 	<div class="ms-hide m-hide t-all d-hide">
			 	
			 	<h1>Smaller Desktops</h1>
			 	
		 	</div>
		 	
		 	<div class="ms-hide m-all t-hide d-hide">
			 	
			 	<h1>Tablets</h1>
			 	
		 	</div>
		 	
		 	<div class="ms-all m-hide t-hide d-hide">
			 	
			 	<h1>Phones</h1>
			 	
		 	</div>
		 	
		 	<div style="clear: both;"></div>
		 	
	 	</div>
	 	
 	</div>
	
	<?php

/* get the footer template */
get_footer();