<?php
include 'db.php';

if(isset($_POST['submit'])){
  if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comment'])) {
    die("Forget to fill something in?");
  }
  $_POST['comment'] = addslashes($_POST['comment']);
  $sql="INSERT INTO testimonials
  (`name`,`email`,`text`,`date`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['comment']."', '".time()."')";
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
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Testimonials</title>
        <!-- Site Icons -->
        <link rel="shortcut icon" href="assets/img/logo.png" type="image/icon" />
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"> 
    <!-- Main style sheet -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/util.css" rel="stylesheet"> 
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
           <a class="navbar-brand" href="testimonials.php"><img src="assets/img/logo.png" alt="Logo img"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="index.php">Acceuil</a></li>
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
  <section>
    <!-- Start testimonials  -->

	<div class="container-contact100">
	
		<div class="wrap-contact100">
			

                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"class="contact100-form validate-form flex-sb flex-w">
                                    <span class="contact100-form-title">
                                    laisser vos témoignages
				</span>

                                    <div class="wrap-input100 rs1 validate-input" data-validate = "Name is required">
                      <input class="input100" type="text" name="name"placeholder="Name">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 rs1 validate-input" data-validate = "Email is required: e@a.z">
<input class="input100"  type="text" name="email"placeholder="Email Address">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input" data-validate = "Message is required">
<textarea class="input100"  name="comment"placeholder=" Comment"></textarea><br />
<span class="focus-input100"></span>
</div>
<div class="container-contact100-form-btn">
<button type="submit"  class="contact100-form-btn" name="submit">Send testimonials</button>
</div>
</form>	
            <!-- </div> -->
        </div>
    </div>
    <!-- End Cart -->
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
                    <p>Retourner a la page d'accueil</p>
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