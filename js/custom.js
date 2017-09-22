jQuery(document).ready(function($) {
	
	var $winWidth = $( window ).width(),
		$winHeight = $( window ).height(),
		$mainHeader = $( '.main-header' ),
		$headerBlock = $( '.main-header' ).outerHeight(),
		$mobileBtn = $mainHeader.find( '.mobile-nav-btn' ),
		$mobileMenu = $( '.mobile-nav' ),
		$mobileNavHeight = $mobileMenu.outerHeight(),
		$mobileClose = $mobileMenu.find( '#close-this' );

	// If window is smaller than 1024px
	if ( $winWidth < 1024 )
	{
		// Pull menu left of viewport
		$mobileMenu.css( 'left', -$winWidth );

		// Open mobile menu
		$mobileBtn.on( 'click', function()
		{
			$mobileMenu.css( 'left', 0 );

			$mobileClose.on( 'click', function(){
				$mobileMenu.css( 'left', -$winWidth );
			});
		});
	}

	// Smooth Scroll for Back To Top Button *Thank you CSS-TRICKS*
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
				return false;
			}
		}
	});

	// Show/Hide Back to Top button on scroll
	$( window ).on( 'scroll', function()
	{
		var $scrolled = $( window ).scrollTop(),
			$btt = $( '.back-to-top' );

		if ( $scrolled > 100 )
		{
			$btt.addClass( 'visible' );
		} else if ( $scrolled < 100 )
		{
			$btt.removeClass( 'visible' );
		}
	});

	// Parallax effect on secondary page header images
	$( window ).scroll( function(){

		var $headerImage = $( '.header-image' ),
			wScroll = $( this ).scrollTop();

		$headerImage.css({
			'background-position-y' : -wScroll /8,
		});
	});
});