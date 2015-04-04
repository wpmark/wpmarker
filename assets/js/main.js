( function( $ ) {
	
	/* activate fit vids for items inside .entry-content */
	var fitvids = function() {
	
		$(".entry-content").fitVids();
	
	};
	
	$(document).ready(fitvids);
	
	/* handle the mobile navigation */
	var mobilenav = function() {
		
		/* when the element with 'show-mobile-menu' id is clicked */
		$( ".mobile-menu-icon" ).click(function() {
			
			/* toggle the class 'mobile-menu-open' on the element with class 'mobile-menu' */
			$('.mobile-menu').toggleClass('mobile-menu-open');
			
			/* add a 'mobile-menu-push-toleft' body class */
			$('body').toggleClass('mobile-menu-push-toleft');
			
			/* add an 'active' class to the button */
			$('.mobile-menu-icon').toggleClass('active');
			
		});
		
	};
	
	$(document).ready(mobilenav);
	
} )( jQuery );