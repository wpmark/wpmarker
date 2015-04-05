<?php
/* template: front-page.php
 * used to load the sites home page or font page
 * best used in conjunction with setting static page for your home page in settings > reading
 */

 /* get the header template */
 get_header();
 
 	?>
 	<div class="container">
	 	
	 	<form>
		 	
		 	<div class="select-wrapper">
			 	<select name="something">
				 	<option value="1">Something</option>
				 	<option value="2">Something Else</option>
			 	</select>
			 	<span class="select-arrow dashicons dashicons-arrow-down-alt2"></span>
		 	</div>
		 	
		 	<input type="text" placeholder="Placeholder" value="ffff" />
		 	
		 	<textarea name="textarea"></textarea>
		 	
	 	</form>
	 	
 	</div>
 	
 	<?php
 
 /* get the footer template */
 get_footer();