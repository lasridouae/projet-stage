
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
  