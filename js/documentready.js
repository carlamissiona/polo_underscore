jQuery(function($) {
  
         $("#wrapper").toggleClass("toggled");
         
         
           $("#menu-toggle").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("toggled");
        
	});
           
           	$('.sliderify-container').sliderify({
	    // default options
	    initialSlide: 0,
	    autoPlay: true,
	    autoPlayInterval: 3000,
	    onHoverStopAutoPlay: true,
	    slidingInterval: 500,
	    hidePagination: false,
	    hidePaginationButtons: false,
	    paginationButtonsText: 'arrow',
	    keyboardControl: true,
	    isDraggable: true
	});
});