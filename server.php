<?php
/*
 Author: Haron Gichuhi | business@hykartech.com
this script receives the user information submitted from 
the form and registers the user to the db
*/
session_start();

// initialize all the variables
$inputfirstname = "";
$inputlastname = "";
$inputgender = "";
$inputage = "";
$inputlocation = "";
$inputemail = "";
$inputpassword = "";

# create an empty array to hold the errors
  $errors = [];

// connect to the db
include_once('config.php');

// create a user account
if (isset($_POST['btn_register'])) {

  // check user inputs
  
    # define error messages
  $missingfirstname='<p><strong> Enter your first name</strong></p>';
  $missinglastname='<p><strong> Enter your last name</strong></p>';
  $missinggender='<p><strong> Select your gender</strong></p>';
  $missingage='<p><strong> Enter your age</strong></p>';
  $missinglocation='<p><strong> Enter your Location</strong></p>';
  $missingEmail='<p><strong> Enter your Email address</strong></p>';
  $missingPassword='<p><strong> Enter your password</strong></p>';
  $invalidPassword='<p><strong>Your password is invalid</strong></p>';
  $existingEmail='<p><strong>Your Account already exists</strong></p>';

  // Get firstname, lastname, phonenumber and password
  // Get the firstname from user input
  if(empty($_POST['inputfirstname'])){
    $errors .= $missingFirstname;
  } else{
    // store the filtered variable
    $firstname = filter_var($_POST["inputfirstname"], FILTER_SANITIZE_STRING);
  }
  # Get last name
  if(empty($_POST['inputlastname'])){
    $errors .= $missingLastname;
  } else{
    $lastname = filter_var($_POST['inputlastname'], FILTER_SANITIZE_STRING);
  }

  # Get gender
  if(empty($_POST['inputgender'])){
    $errors .= $missinggender;
  } else{
    $gender = filter_var($_POST['inputgender'], FILTER_SANITIZE_STRING);
  }

  # Get age
  if(empty($_POST['inputage'])){
    $errors .= $missingage;
  } else{
    $age = filter_var($_POST['inputage'], FILTER_SANITIZE_NUMBER_INT);
  }


  # Get location
  if(empty($_POST['inputlocation'])){
    $errors .= $missinglocation;
  } else{
    $location = filter_var($_POST['inputlocation'], FILTER_SANITIZE_STRING);
  }

  # Get the email
  if(empty($_POST['inputemail'])){
    array_push($errors, $missingEmail);
  } else {
    $email = filter_var($_POST['inputemail'], FILTER_SANITIZE_STRING);
  }
  #get the user password
  # use preg_match to utilize regex expressions
  if(empty($_POST['inputpassword'])){
   array_push($errors, $missingPassword);
  }else{
    $password = filter_var($_POST['inputpassword'], FILTER_SANITIZE_STRING);
  }
  
  // prepare variables to avoid sql injection
  $firstname = mysqli_real_escape_string($con, $firstname); 
  $lastname = mysqli_real_escape_string($con, $lastname);
  $gender = mysqli_real_escape_string($con,$gender);
  $age = mysqli_real_escape_string($con,$age);
  $location = mysqli_real_escape_string($con,$location);
  $email = mysqli_real_escape_string($con, $email);
  $password = mysqli_real_escape_string($con, $password);
 

  // First check the database to make sure the user does not exist with similar email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $user_check_result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($user_check_result);

  // check if user
  if ($user) {
  	# notify the user to login 
  	if ($user['email'] === $email) {
  		# push the error to array
  		array_push($errors, $missingEmail);
  	}
  }

  // register a user if no error exists
  if (count($errors) == 0) {
  	# prepare to register the user
  	 # create a hashed password using md5
  	 $password = md5($password);
  	 // convert the age into int
  	 //$int_age = int($age);

  	 # if no errors insert the user to the users table and redirect to login page
  	$sql = "INSERT INTO users (firstname, lastname, gender, age, location, email, password) VALUES ('$firstname','$lastname','$gender','$age','$location','$email','$password')";
  	$user_creation = mysqli_query($con, $sql);
      // Check results   
  	if (!$user_creation){
     	$msg = "Something went wrong, we could not create your account";  
    	} else {
    	// initiate a session
    	$_SESSION['email'] = $email;
    	$_SESSION['success'] = "You are now logged in";	
      	#redirect to the admin dashboard
      	 header("location: comm_screen.php");
     }
  }
}

// login user
// First Check if the post is set to login
if (isset($_POST['btn_login'])) {
  // define error messages
  $missingEmail='<p><strong> Enter your Email address</strong></p>';
  $missingPassword='<p><strong> Enter your password</strong></p>';
	// get the user email and password
	$email = mysqli_real_escape_string($con, $_POST['inputemail']);
	$password = mysqli_real_escape_string($con, $_POST['inputpassword']);

	// check if empty email or password
	if (empty($email)) {
		# add the error to the array
		array_push($errors, $missingEmail);
	}

	if (empty($password)) {
		# add the password error to the array
		array_push($errors, $missingPassword);
	}

	// if no errors proceed to sign in the user
	if (count($errors) == 0) {
		# hash the password
		 $hashedpassword = md5($password);
		  // Create a query to db
         $user_query = "SELECT * FROM users WHERE email='$email' AND password='$hashedpassword'";
         $user_result = mysqli_query($con, $user_query);
         if (mysqli_num_rows($user_result) == 1) {
         	# create a session and login in user
         	$_SESSION['email'] = $email;
         	$_SESSION['success'] = "You are now logged in";
         	// redirect the user to testing page
         	 header("location: comm_screen.php");
         } else {
         	array_push($errors, "Wrong username/password combination");
         }
	}
}

// use this script to reset the password by accepting the user email and sending them reset link
if (isset($_POST['btn_reset_password'])) {
  # get user email
  $email = mysqli_real_escape_string($con, $_POST['inputemail']);
  # check whether the user exists in the db
  $user_check = "SELECT email FROM users WHERE email='$email'";
  $results = mysqli_query($con, $user_check);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  } else if (mysqli_num_rows($results) <=0) {
    # the user does not exist
    array_push($errors, "Sorry, no user exists on our system with that email address");
  }

  // generate a unique token of length 100
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    # store the token in the password-reset db table against the user's email
    $sql = "INSERT INTO password_reset(email,token) VALUES ('$email', '$token')";
    $results = mysqli_query($con, $sql);

    // send email to the user with token link to click on to reset password
    $to = $email;
    $subject = "Reset your password on Autism Screening Application";
    $message = "Hello there, click on this <a href=\"new_password.php?token=" . $token . "\">link</a> to reset your password on our site";
    $message = wordwrap($message,70);
    $headers = "From: Autism Screening Application";
    $mail($to,$subject, $message, $headers);
    header('location: pending.php?email=' . $email);
  }
}

// Set new password
if (isset($_POST['btn_new_password'])) {
  # get new password from the form
  $password = mysqli_real_escape_string($con, $_POST['inputpassword']);
  $password1 = mysqli_real_escape_string($con, $_POST['inputpassword1']);

  // Grab the token from the email link
  $token = $_SESSION['token'];

  // check if the passwords are empty or not
  if (empty($password) || empty($password1)) array_push($errors, "Password is required"); 
    # compare the passwords
  if ($password !== $password1) array_push($errors, "Password do not match!");

  if (count($errors) == 0) {
    # get the user email from the password reset_table 
    $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
    $result = mysqli_query($con, $sql);
    $email = mysqli_fetch_assoc($result)['email'];

    if ($email) {
      # update the password and redirect the user to login
      $new_password = md5($password);
      $sql = "UPDATE users SET password='$new_password' WHERE email = '$email'";
      $results = mysqli_query($con, $sql);
      header('location: index.php');
    }
  }
  

}

?>