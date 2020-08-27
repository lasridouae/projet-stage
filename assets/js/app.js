
(function($) {
    

	/* ..............................................
	   Owl Carousel Instagram Feed
	   ................................................. */

	$('.main-instagram').owlCarousel({
		loop: true,
		margin: 0,
		dots: false,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
		responsive: {
			0: {
				items: 2,
				nav: true
			},
			600: {
				items: 3,
				nav: true
			},
			1000: {
				items: 5,
				nav: true,
				loop: true
			}
		}
	});



}(jQuery));


(function($) {

  // Menu filer
  $("#menu-flters li a").click(function() {
    $("#menu-flters li a").removeClass('active');
    $(this).addClass('active');

    var selectedFilter = $(this).data("filter");
    //  $("#menu-wrapper").fadeTo(100, 0);

    $(".menu-restaurant").fadeOut();

    setTimeout(function() {
      $(selectedFilter).slideDown();
      //$("#menu-wrapper").fadeTo(300, 1);
    }, 300);
  });

  
  })(jQuery);

  (function ($) {
/* ..............................................
	   TESTIMONIALS
	   ................................................. */
	   // SLIDER
	   $('.owl-carousel').owlCarousel({
		animateOut: 'fadeOut',
		items:1,
		loop:true,
		autoplayHoverPause: false,
		autoplay: true,
		smartSpeed: 1000,
	  })
  
  
	  // WOW ANIMATION
	  new WOW({ mobile: false }).init();
  
  })(jQuery);
  