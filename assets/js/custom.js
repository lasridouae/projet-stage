
jQuery(function($){


  /* ----------------------------------------------------------- */
  /*  1. FIXED NAVBAR 
  /* ----------------------------------------------------------- */
    
    
  jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() > 200) {
        jQuery('.mu-main-navbar').addClass('navbar-bg');
        jQuery('.navbar-brand').addClass('navbar-brand-small');        
      } else {
          jQuery('.mu-main-navbar').removeClass('navbar-bg');          
          jQuery('.navbar-brand').removeClass('navbar-brand-small');          
      }
  });
  
  /* ----------------------------------------------------------- */
  /*  2. TOP SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */    

    jQuery('.mu-top-slider').slick({
      dots: false,
      infinite: true,
      arrows: true,
      speed: 500,     
      autoplay: true,
      fade: true,
      cssEase: 'linear'
    });




//  

 
  /* ----------------------------------------------------------- */
  /*  12. SCROLL TOP BUTTON
  /* ----------------------------------------------------------- */

  //Check to see if the window is top if not then display button

    // jQuery(window).scroll(function(){
    //   if (jQuery(this).scrollTop() > 300) {
    //     jQuery('.scrollToTop').fadeIn();
    //   } else {
    //     jQuery('.scrollToTop').fadeOut();
    //   }
    // });
     
 
 
});

