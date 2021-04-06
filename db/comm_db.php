<?php
include_once "..config.php";

        $sex = $_POST["sex"];
        $age = $_POST["age"];
        $relating = $_POST["relating"];
        $speech = $_POST["speech"];
        $phrases = $_POST["phrases"];
        $pronouns = $_POST["pronouns"];
        $unrelated_answers = $_POST["unrelated_answers"];
        $gesture = $_POST["gesture"];
        $talk = $_POST["talk"];
        $understand = $_POST["understand"];
        $imitate = $_POST["imitate"];
        $aloofness = $_POST["aloofness"];
        $emotional = $_POST["emotional"];
        $bizarre_gestures = $_POST["bizarre_gestures"];

        //sanitize the data//

        //save the data to db//

        // prepare variables to avoid sql injection
  $sex = mysqli_real_escape_string($con, $sex); 
  $age = mysqli_real_escape_string($con, $age);
  $relating = mysqli_real_escape_string($con, $relating);
  $speech = mysqli_real_escape_string($con, $speech);
  $phrases = mysqli_real_escape_string($con, $phrases);
  $pronouns = mysqli_real_escape_string($con, $pronouns);
  $unrelated_answers = mysqli_real_escape_string($con, $unrelated_answers);
  $gesture = mysqli_real_escape_string($con, $gesture);
  $talk = mysqli_real_escape_string($con, $talk);
  $understand = mysqli_real_escape_string($con, $understand);
  $imitate = mysqli_real_escape_string($con, $imitate);
  $aloofness = mysqli_real_escape_string($con, $aloofness);
  $emotional = mysqli_real_escape_string($con, $emotional);
  $bizarre_gestures = mysqli_real_escape_string($con, $bizarre_gestures);
  

  # if no errors insert the user to the users table and redirect to login page
  $sql = "INSERT INTO communication (sex, age, relating, speech,pronouns, unrelated_answers,gestures,talk, understand,imitate,aloofness,emotional, bizarre_gestures) VALUES ('$sex','$age','$relating','$speech', '$phrases', '$pronouns', '$unrelated_answers', '$gesture', '$talk', '$understand','$imitate', '$aloofness', '$emotional','$bizarre_gestures')";
  $comm_save = mysqli_query($con, $sql);
      // Check results   
  if (!$comm_save){
     $msg = "Something went wrong, we could not save the child progress"; 
     #redirect to the admin dashboard
       header("location: comm_test.php"); 
    } else {
      #redirect to the next page or dashboard
       header("location: play_test.php");
     }

        
        
    ?>
    