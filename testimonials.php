<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Testimonials</title>
        <!-- Site Icons -->
        <link rel="shortcut icon" href="assets/img/logo.png" type="image/icon" />
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Main style sheet -->
    <link href="assets/css/testi.css" rel="stylesheet">    
  </head>

  <body>   
  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
           <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="index.html">Acceuil</a></li>
            <li class="active"><a href="testimonials.php">Testimonials</a></li>   
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section --> 

  <!-- Start Blog banner  -->
  <section id="mu-blog-banner">
    <div class="container">
      <div class="mu-blog-banner-area">
        <h2>Testimonials</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Acceuil</a></li>          
          <li class="active">Testimonials</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Blog banner -->  
  <?php
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
  <section>
    <!-- Start testimonials  -->
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

<div id="footer" class="footer-main">
    <!-- end footer-news -->
   <div class="footer-box pad-top-70">
   <div class="container">
    <div class="row">
        <div class="footer-in-main">
          <div class="footer-logo">
            <div class="text-center">
                <img src="assets/img/log.png" alt="" />
            </div>
        </div>
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
                    <p>retourner a la page d'accueil</p>
                    <ul>
                        <li><a href="index.php" class="btn"> Acceuil</a></li>
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
  
 
  
  <!-- jQuery library -->  
  <script src="assets/js/jquery.min.js"></script>  
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
  </body>
</html>