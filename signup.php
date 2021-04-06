<?php
include_once("config.php");

// check user inputs
# create an empty array to hold the errors
$errors = [];
  # define error messages
$missingFirstname='<p><strong> Enter your first name</strong></p>';
$missingLastname='<p><strong> Enter your last name</strong></p>';
$missingPhonenumber='<p><strong> Enter your phone number</strong></p>';
$missingPassword='<p><strong> Enter your password</strong></p>';
$invalidPassword='<p><strong>Your password is invalid</strong></p>';

// Get firstname, lastname, phonenumber and password
// Get the firstname from user input
if(empty($_POST['inputfirstname'])){
  $errors .= $missingFirstname;
} else{
  // store the filtered variable
  $firstname = filter_var($_POST["inputfirstname"], FILTER_SANITIZE_STRING);
}
# Get email
if(empty($_POST['inputlastname'])){
  $errors .= $missingLastname;
} else{
  $lastname = filter_var($_POST['inputlastname'], FILTER_SANITIZE_STRING);
}

# Get the phonenumber
if(empty($_POST['inputphone'])){
  $errors .= $missingPhonenumber;
} else {
  $phonenumber = filter_var($_POST['inputphone'], FILTER_SANITIZE_STRING);
}
#get the user password
# use preg_match to utilize regex expressions
if(empty($_POST['inputpassword'])){
  $errors .= $missingPassword;
} elseif(!(strlen($_POST['inputpassword']) > 6 
    and preg_match('/[A-Z]/', $_POST['inputpassword'])
    and preg_match('/[0-9]/', $_POST['inputpassword'])
    )
){
  $errors .= $invalidPassword;
}else{
  $password = filter_var($_POST['inputpassword'], FILTER_SANITIZE_STRING);
}
# print errors if any
if ($errors) {
    $resultMessage = '<div class="alert alert-danger">' .$errors.'</div>';
    echo $resultMessage;
}
// prepare variables to avoid sql injection
$firstname = mysqli_real_escape_string($con, $firstname); 
$lastname = mysqli_real_escape_string($con, $lastname);
$phonenumber = mysqli_real_escape_string($con, $phonenumber);
$password = mysqli_real_escape_string($con, $password);

# check whether the phonenumber already exists in our db users table
$sql = "SELECT * FROM 'users' WHERE phonenumber = $phonenumber";
# run the  query to get the results from db
$query_results = mysqli_query($con, $sql);
# check if we get errors
if (!$query_results) {
  # return the errors
  echo '<div class="alert alert-danger"> Error running the query!</div>';
  exit;
}
$query_results = mysqli_num_rows($query_results);
if ($query_results) {
  # return the phone number exists
  echo '<div class="alert alert-danger">Your phone number already exists. Do you want to login?</div>';
  exit;
}
# if no errors insert the user to the users table and redirect to login page
$sql = "INSERT INTO users (`id`,`firstname`, `lastname`, `phonenumber`, `password`) VALUES ('',$firstname','$lastname','$phonenumber','$password')";
$user_creation = mysqli_query($con, $sql);
    // Check results   
if (!user_creation) {
   $msg = "Something went wrong, we could not create your account";  
    } else {
    #redirect to the admin dashboard
     header("location: predict.php");
    }

?>