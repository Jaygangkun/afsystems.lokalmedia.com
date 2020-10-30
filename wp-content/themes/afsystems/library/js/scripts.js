jQuery(document).ready(function($) {
	
	// Body top padding relative to navbar
	$('body').css('padding-top', $('.navbar').outerHeight());
	
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
	
	// Initiailizing Animate on Scroll
	AOS.init({
		offset: 200,
		delay: 200,
		duration: 550,
	});
	
	// Navbar drop shadow toggle
	$(document).ready(function(){
	    $(window).scroll(function(){
			if ($(window).scrollTop() <= 0) {
				$('.navbar').removeClass('shadow');
			} else {
				$('.navbar').addClass('shadow');
			}
		});
	});
	
	// Animate on Scroll Initialization
	AOS.init();
	
}); /* end of as page load scripts */