<?php
include_once("server.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A machine learning application for diabetes prediction">
    <meta name="author" content="Haron Gichuhi">
    <title>Autism | Screening Application</title>
    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet"> 
   <link href="assets/css/style.css" rel="stylesheet">
    <!-- Favicons -->
   <link rel="stylesheet"  href="css/floating-labels.css">


<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>  
  </head>

  <body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"> <img src="img/autism_logo.png" alt="" class="img-fluid"><span> A.S.A</span></a></h1>
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
         <li class="active"><a href="index.php"><span style="font-weight: bolder;">Back to Home Page</span></a></li>
          <li class="get-started"><a href="login.php">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
</br>
 <form class="form-signin" method="POST" action="register.php">
  <?php include('errors.php'); ?>
    <div class="text-center mb-4">
      <img class="mb-4" src="img/autism_logo.png" alt="HT" width="150" height="100">
      <h6>Create an Account to use Autism Screening Application</h6>
    </div>
    <!--signup errors-->
    <div id="signuperrors"></div>
    <div class="form-label-group">
      <input type="text" id="inputFirstName" name="inputfirstname" value="<?php echo $inputfirstname; ?>" class="form-control" placeholder="First Name" required autofocus>
      <label for="inputFirstName">First Name</label>
    </div>
    <div class="form-label-group">
      <input type="text" id="inputLastName" name="inputlastname"  value="<?php echo $inputlastname; ?>" class="form-control" placeholder="Last Name" required autofocus>
      <label for="inputLastName">Last Name</label>
    </div>
    <div class="form-label-group">
     
      <select class="form-control" id="inputGender" name="inputgender">
              <option value="Male">Female</option>
              <option value="Female">Male</option>
      </select>
    </div>
     <div class="form-label-group">
      <input type="number" min="1" max="75" id="inputAge" name="inputage" value="<?php echo $inputage; ?>" class="form-control" placeholder="Your Age" required autofocus>
      <label for="inputage">Age</label>
    </div>
      <div class="form-label-group">
      <input type="text" id="inputLocation" name="inputlocation" value="<?php echo $inputlocation; ?>" class="form-control" placeholder="Your Location" required autofocus>
      <label for="inputLocation">Location</label>
    </div>
    <div class="form-label-group">
      <input type="email" id="inputEmail" name="inputemail" value="<?php echo $inputemail; ?>" class="form-control"  min="10" max="10" placeholder="Email Address" required autofocus>
      <label for="inputPhone">Email Address</label>
    </div>

    <div class="form-label-group">
      <input type="password" id="inputPassword" name="inputpassword" value="<?php echo $inputpassword; ?>" class="form-control" placeholder="Password" required>
      <label for="inputPassword">Password</label>
    </div> 
    <button class="btn btn-lg btn-primary btn-block" name="btn_register" type="submit">Create Account</button>
  </br>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 Autism Screening Application</p>
  </form>

 <!---->

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
</body>
</html>
