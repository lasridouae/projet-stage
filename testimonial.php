<?php
include 'db.php';

if(isset($_POST['submit'])){
  if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comment'])) {
    die("Forget to fill something in?");
  }
  $_POST['comment'] = addslashes($_POST['comment']);
  $sql="INSERT INTO testimonial
  (name,`email`,`text`,`norp`,`date`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['comment']."', '".$_POST['norp']."', '".time()."')";
  $result1=mysqli_query($conn,$sql);
  if(!$result1)
	{
		die('error'.mysqli_error($conn));
	}
  header("Location: ".$_SERVER['PHP_SELF']);
}
?>


<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Testimonials</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/colors/red.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/testform.css">
    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    
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
	
    <div id="testi-form" class="">
        <<div class="container">
            <div class="row">
            <div class="col-md-12 text-center marb-35">
        <h2 class="block-title"> Testimonials </h2>
        </div>
               </div>
           </div>
       </div>
    <!-- end banner -->
    <!-- End Main Top -->

    <!-- Start Main Top -->
  
    <!-- End Main Top -->

    
    <section>
   
    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET IN TOUCH</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusce in metus ac ex venenatis ultricies at cursus mauris.</p>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"></form>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">&nbsp;Name<br/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">&nbsp;Email<br/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select name="norp">
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                            </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control " id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
			</section>
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

   
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES
    
   
    
</body>

</html>