jQuery(document).ready(function($) {
	
	// Body top padding relative to navbar
	$('body').css('padding-top', $('.navbar').outerHeight());
	
	// Initiailizing Animate on Scroll
	// AOS.init({
	// 	offset: 200,
	// 	delay: 200,
	// 	duration: 550,
	// });
	
	var $grid = $('.grid').isotope({
		percentPosition: true,
		layoutMode: 'fitRows',
		itemSelector: '.grid-item'
	})

	$(document).on('click', '.category-filter-link', function(){
		$('.category-filter-link').removeClass('active');
		$(this).addClass('active');
		
		var filterValue = $(this).attr('data-filter');
  		$grid.isotope({ filter: filterValue });
	})
}); /* end of as page load scripts */