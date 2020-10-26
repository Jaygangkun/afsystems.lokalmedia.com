jQuery(document).ready(function($) {
	
	// Body top padding relative to navbar
	$('body').css('padding-top', $('.navbar').outerHeight());
	
	// Initiailizing Animate on Scroll
	AOS.init({
		offset: 200,
		delay: 200,
		duration: 550,
	});
	
}); /* end of as page load scripts */