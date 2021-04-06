<?php include_once('server.php'); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Austism Screening application for children below 24 Months">
    <meta name="author" content="Haron Gichuhi">
    <title>Autism | Screening Application</title>
    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet"> 
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <!-- Favicons -->
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
         <li class="active"><a href="index.php"><span style="font-weight: bolder;">Back to Home Page</span></a></li>
          <li class="get-started"><a href="register.php">Create Account</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

<form class="form-signin" method="POST" action="login.php">
    
  <p>
      We sent an email to  <b><?php echo $_GET['email'] ?></b> to help you recover your account. 
    </p>
      <p>Please login into your email account and click on the link we sent to reset your password</p>
    
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 Autism Screening Application</p>
</form>
 <!---->

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
</body>
</html>
