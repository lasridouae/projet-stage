<?php include 'db.php' ?>
<?php
	$sql = "SELECT * from `testimonial`";
     $result = mysqli_query($conn, $sql);  
     
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>KAFOOD</title>
    

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo1.jpg" type="image/icon" />
   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/inst.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/apropos.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/gallerie.css">
    <link rel="stylesheet" href="css/testimonials.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <!--  <link rel="stylesheet" href="css/owl.carousel.css"> -->

    <!-- color -->
    <link rel="stylesheet" href="css/colors/red.css" />

    <!-- Modernizer -->
    <!-- <script src="js/modernizer.js"></script> -->

   

</head>

<body>
  
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
            <!-- navbar -->
            <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="images/logo2.png" alt="">
                                        </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Acceuil</a></li>
                                    <li><a href="#about">A propos</a></li>
                                    <li><a href="#services">Nos services</a></li>
                                    <li><a href="#menu-list">Menu</a></li>
                                    <li><a href="#testimonial">Testimonials</a></li>
                                    <li><a href="#contact">Contactez-nous</a></li>
 
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->
	
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Société de restauration collective <br><span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="KAFOOD" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                        
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> Qui sommes nous </h2>
                        <h3>La vie d’aujourd’hui nous presse, nous stresse...</h3>
                        <p> L’heure
                        du déjeuner est un moment de rupture attendu par les
                        convives, proposer chaque jour un repas plaisir, convivial
                        et équilibré est la mission que relèvent au quotidien les
                        professionnels de la gestion directe. KAFFOD partage
                        avec vous cet objectif : renforcer la qualité des repas
                        servis en collectivité pour une meilleure satisfaction de
                        nos convives. </p>

                        <p>Personnes âgées, adultes, enfants, jeunes, personnes
                        handicapés, malades, à chaque moment de sa vie une
                        personne peut croiser une assiette préparée par un
                        restaurant de collectivité en gestion directe. Les repas
                        sont préparés chaque jour par une équipe inteégrant
                        conjointement conscience et compétentes, qui inventent
                        des nouveautés pour améliorer le quotidien des
                        personnes. </p>

                       
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="img/about-main.jpg" alt="About Main Image">
                            <img class="about-inset" src="img/about-inset.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

  <!--------------------- Services Section --------------------->
  <div id="services" class="site-section ">
      <div class="container">
        <div class="row mb-5">
        <div class="col-md-12 text-center marb-35">
        <h2 class="block-title"> Nos Services </h2>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
                <span class="icon-desktop_mac"></span>
              </span>
              <h3>Web Design</h3>
              <p>Lorem ipsum dolor sit amet. Consectetur adipisicing elit Eaque commodi.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
                <span class="icon-desktop_mac"></span>
              </span>
              <h3>Graphic Design</h3>
              <p>Lorem ipsum dolor sit amet. Consectetur adipisicing elit Eaque commodi.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
                <span class="icon-desktop_mac"></span>
              </span>
              <h3>Web Apps</h3>
              <p>Lorem ipsum dolor sit amet. Consectetur adipisicing elit Eaque commodi.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-29128 text-center">
              <span class="d-block wrap-icon">
                <span class="icon-desktop_mac"></span>
              </span>
              <h3>Ecommerce</h3>
              <p>Lorem ipsum dolor sit amet. Consectetur adipisicing elit Eaque commodi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Service -->

<!-- menu -->
<section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
        <h2 class="block-title"> Nos Menu </h2>
          <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
            <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
            <li><a class="filter" data-filter=".breakfast">Nos Salades</a></li>
            <!-- <li><a class="filter" data-filter=".dinner">Nos Plats Maisons</a></li>
            <li><a class="filter" data-filter=".dinner">Boisson Et Jus</a></li> -->
            <li><a class="filter" data-filter=".lunch">Nos Plats</a></li>
            <li><a class="filter" data-filter=".dinner">Boisson Et Jus</a></li>
          </ul>
        </div>

        <div id="menu-wrapper">

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="">Salade Marocaine</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">16.00 DH</span>
            </span>
            <span class="menu-subtitle">Tomate, poivron vert assaisonné, laitue et olive </span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Salade italienne</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">18.00 DH</span>
            </span>
            <span class="menu-subtitle">Pâte, mais, thon et petit légumes assaisonné</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="">Salade Composé au fromage</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">20.00 DH</span>
            </span>
            <span class="menu-subtitle">Variétés de légumes, fromage blanc</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Salade KA FOOD (Menu Malin)</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">22.00 DH</span>
            </span>
            <span class="menu-subtitle">Variétés de légumes, cube de poulet et fromage</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="">Poulet Grillé</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">27.00 DH</span>
            </span>
            <span class="menu-subtitle">Poulet grillée, riz blanc garni & frites, sauce marocaine</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="">Tajine traditionnelle</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">30.00 DH</span>
            </span>
            <span class="menu-subtitle">Poulet, boeuf ou viande hachée fait maison et légumes du jour</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">20.99DH</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>
          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>
          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>
          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>
          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>
          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>
          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

      
          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="">Soda 25 cl</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">6.00 DH</span>
            </span>
            <!-- <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span> -->
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="">Soda 33 cl</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">10.00 DH</span>
            </span>
            <!-- <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span> -->
          </div>
          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="">Jus de friuts </a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">10.00 DH</span>
            </span>
            <span class="menu-subtitle">(selen arrivage)</span>
          </div>

        </div>

      </div>
    </div>
  </section>
  <!--/ menu -->

            <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2 class="block-title"> Testimonials </h2>
                         </div>
                    </div>  

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">
                              <div class="item">
                                   <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum ullamcorper nulla non.</p>
                                        <div class="tst-author">
                                             <h4>Digital Carlson</h4>
                                             
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed vestibulum orci quam.</p>
                                        <div class="tst-author">
                                             <h4>Johnny Stephen</h4>
                                            
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Vivamus aliquet felis eu diam ultricies congue. Morbi porta lorem nec consectetur porta quis dui elit habitant morbi.</p>
                                        <div class="tst-author">
                                             <h4>Jessie White</h4>
                                            
                                        </div>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>
      
  

     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
             <div class="row">
                  <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                       <div id="google-map">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4796.741596173356!2d-6.820526679859715!3d33.97538739476045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda71391d5af06e7%3A0x80f2981c133d870b!2sKA%20FOOD%20SARL!5e0!3m2!1sfr!2sma!4v1595619052905!5m2!1sfr!2sma"
                     width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" 
                       aria-hidden="false" tabindex="0"></iframe>
                       </div>
                  </div>    

                  <div class="col-md-6 col-sm-12">

                       <div class="col-md-12 col-sm-12">
                            <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="block-title"> Contactez nous </h2>
                            </div>
                       </div>

                       <!-- CONTACT FORM -->




                       <form action="contact.php" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                            <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                            <!-- <h6 class="text-success">Your message has been sent successfully.</h6> -->
                            
                            <!-- IF MAIL NOT SENT -->
                            <!-- <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6> -->

                            <div class="col-md-6 col-sm-6">
                                 <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                 <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                            </div>

                            <div class="col-md-12 col-sm-12">
                                 <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                                 <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                                 <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                            </div>
                       </form>
                  </div>

             </div>
        </div>
   </section>          

  <!-- Start Instagram Feed  -->
  <div  class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/1.jpg" alt="" />
                <div class="hov-in">
                    <a href="https://www.instagram.com/kafood_sarl/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/2.jpg" alt="" />
                <div class="hov-in">
                    <a href="https://www.instagram.com/kafood_sarl/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/3.jpg" alt="" />
                <div class="hov-in">
                    <a href="https://www.instagram.com/kafood_sarl/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/4.jpg" alt="" />
                <div class="hov-in">
                    <a href="https://www.instagram.com/kafood_sarl/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/6.jpg" alt="" />
                <div class="hov-in">
                    <a href="https://www.instagram.com/kafood_sarl/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/9.jpg" alt="" />
                <div class="hov-in">
                    <a href="https://www.instagram.com/kafood_sarl/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="img/7.jpg" alt="" />
                <div class="hov-in">
                    <a href="https://www.instagram.com/kafood_sarl/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/6.jpg" alt="" />
                <div class="hov-in">
                    <a href="https://www.instagram.com/kafood_sarl/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/9.jpg" alt="" />
                <div class="hov-in">
                    <a href="https://www.instagram.com/kafood_sarl/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/5.jpg" alt="" />
                <div class="hov-in">
                    <a href="https://www.instagram.com/kafood_sarl/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->
   <!-- FOOTER -->
   
   <div class="footer-box pad-top-70">
    <div class="container">
        <div class="row">
            <div class="footer-in-main">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box-a">
                        <h3>About Us</h3>
                        <p>Aenean commodo ligula eget dolor aenean massa. Cum sociis nat penatibu set magnis dis parturient montes.</p>
                        <ul class="socials-box footer-socials pull-left">
                            <li>
                                <a href="#">
                                    <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- end footer-box-a -->
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box-b">
                        <h3>New Menu</h3>
                        <ul>
                            <li><a href="#">Italian Bomba Sandwich</a></li>
                            <li><a href="#">Double Dose of Pork Belly</a></li>
                            <li><a href="#">Spicy Thai Noodles</a></li>
                            <li><a href="#">Triple Truffle Trotters</a></li>
                        </ul>
                    </div>
                    <!-- end footer-box-b -->
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box-c">
                        <h3>Contact Us</h3>
                        <p>
                            <i class="fa fa-map-signs" aria-hidden="true"></i>
                            <span>938 cité Grouppement AL Aahd, Rabat, Rabat 10050</span>
                        </p>
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <span>
                                0663-502070
                        </span>
                        </p>
                        <p>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span><a href="#">kafood@ymail.com </a></span>
                        </p>
                    </div>
                    <!-- end footer-box-c -->
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box-d">
                        <h3>Opening Hours</h3>

                        <ul>
                            <li>
                                <p>lundi - vendredi </p>
                                <span> 09:00 AM - 17:00 PM</span>
                            </li>
                            <li>
                                <p> Samedi </p>
                                <span>  09:00 AM - 16:00 PM</span>
                            </li>
                        </ul>
                    </div>
                    <!-- end footer-box-d -->
                </div>
                <!-- end col -->
            </div>
            <!-- end footer-in-main -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <div id="copyright" class="copyright-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h6 class="copy-title"> Copyright &copy; 2020 KAFOOD Sarl <a href="#" target="_blank"></a> </h6>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end copyright-main -->
<!-- </div> -->
<!-- end footer-box -->
<!-- </div> -->

    

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

  

   <!-- ALL JS FILES -->
   <script src="js/all.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.min.js"></script> 
   <script src="js/jquery-3.2.1.min.js"></script>
        <!-- ALL PLUGINS -->
        <script src="js/typer.js"></script>
        <script src="js/jquery.superslides.min.js"></script>
        <script src="js/inewsticker.js"></script>
        <script src="js/images-loded.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/baguetteBox.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/main.js"></script>
</body>

</html>