<?php 

 # Author: Haron Gichuhi | business@hykartech.com
    # This script receives the user entered form data
    # try to print the POST function return
    #print_r($_POST);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Austism Screening application for children below 24 Months">
  <meta name="author" content="Haron Gichuhi">
  <title>Autism | Screening Application</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet"> 
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet"  href="css/floating-labels.css">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"> <img src="img/autism_logo.png" alt="" class="img-fluid"><span> A.S.A</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
         <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About ASD</a></li>
          <li class="drop-down"><a href="">Screening Domains</a>
            <ul>
              <li><a href="#">Communication Skills</a></li>
              <li><a href="#">Play &amp; Interaction Skills</a></li>
              <li><a href="#">Behavior Issues</a></li>
              <li><a href="#">Self-Help Activities</a></li>
              <li><a href="#">Motor &amp; Fine Skills</a></li>
            </ul>
          </li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="contact.php">Contact</a></li> 

          <li class="get-started"><a href="logout.php">Create Account</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        
    <form class="form-signin" method="POST" action="login.php">
    <div class="text-center mb-4">
      <img class="mb-4" src="img/autism_logo.png" alt="HT" width="150" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Autism Screening Application</h1>
      <p></p>
    </div>
    

    <div class="form-label-group">
      <input type="tel" id="inputEmail" name="inputemail" class="form-control" placeholder="Email Address" required autofocus>
      <label for="inputEmail">Email Address </label>
    </div>

    <div class="form-label-group">
      <input type="password" id="inputPassword" name="inputpassword" class="form-control" placeholder="Password" required>
      <label for="inputPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <label style="float: left" for="back_home"> <a href="index.php"><span style="color: blue; font-size: bold;">&lt; back to Homepage</span></a></label>
      </label>
      <label style="float: right" for="create_account"> <a href="register.php"><span style="color: blue; font-size: bold;">Forgot password</span></a></label>
    </div>
   
    <button class="btn btn-lg btn-primary btn-block" name="btn_login" type="submit">Sign in</button>
    
</form>
      
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Screening questions go here ======= -->
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>A.S.A</strong>. All Rights Reserved
          </div>
          <div class="credits">
            Crafted by <a href="https://www.hykartech.com" target="_blank">HykarTech</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
    <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>