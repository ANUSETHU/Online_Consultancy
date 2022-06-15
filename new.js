//Initialize Masonry inside Bootstrap 3 Tab component 

(function( $ ) {

	var $container = $('.masonry-container');
	$container.imagesLoaded( function () {
		$container.masonry({
			columnWidth: '.card',
			itemSelector: '.card'
		});
	});
	
	//Reinitialize masonry inside each panel after the relative tab link is clicked - 
	$('a[data-toggle=tab]').each(function () {
		var $this = $(this);

		$this.on('shown.bs.tab', function () {
		
			$container.imagesLoaded( function () {
				$container.masonry({
					columnWidth: '.card',
					itemSelector: '.card'
				});
			});

		}); //end shown
	});  //end each
	
})(jQuery);