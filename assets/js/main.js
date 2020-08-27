
(function($) {
    "use strict";
	
		  // Activate scrollspy to add active class to navbar items on scroll
		  $('body').scrollspy({
			target: '#mainNav',
			offset: 54
		  });
		/* =========================
            SCROLL MENU
        // =========================*/
		$(window).on('scroll', function () {
			if ($(window).scrollTop() > 50) {
				$('.header-block-top').addClass('fixed-menu');
			} else {
				$('.header-block-top').removeClass('fixed-menu');
			}
		});
		
		/* =========================
            NAV MENU
        =========================*/
		$('.navbar-nav li a').on("click", function(e) {
			$('.navbar-nav li').removeClass('active');
			var $parent = $(this).parent();
			if (!$parent.hasClass('active')) {
				$parent.addClass('active');
			}
		});
		
	
		    
		/* ==============================================
			SCROLL UP
		=============================================== */
			
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			}); 
			
			$('.scrollup').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
		
	
		 
	
})(jQuery);