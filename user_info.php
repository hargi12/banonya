<?php
 # Author: Haron Gichuhi | business@hykartech.com
    # This script receives the user entered form data
    # try to print the POST function return
    #print_r($_POST);
include_once("config.php");

print_r($_POST);
if (isset($_POST['play_interaction'])) {

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
        print_r($sex);
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
        

  # if no errors insert the user response to the communication table and redirect to next page
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
   }      
        
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Austism Screening application for children below 24 Months">
    <meta name="author" content="Haron Gichuhi">
    <title>Autism | Screening Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <style>
    body 
    {
        position: relative; 
        font-family: 'Kanit', sans-serif;
    }
    .col-sm-12
    {
        padding-bottom:70px;
        padding-top:32px;
    }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <a class="navbar-brand" href="#">
            <img src="img/autism_logo.png" alt="Logo" style="width:100px;">&nbsp;&nbsp;
        </a>
        Autism Screening Tool for Children below 24 Months
        
    </nav>
    <div id="section1" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
        <center>
            <h2>
                <b>
                    Use this tool for screening purposes only - This is not a diagnostic tool!
                </b>
            </h2>
            <p>
                Simply drag the slider to a scale of 1 to 4 as a response to the question
            </p>
        </center>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <form method="POST" action="comm_test.php">
            
             <div class="row">

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sel1">What is your Age :</label>
                        <input type="Text" name="age">
                    </div>
                </div>

                <div class="col-sm-6">            
                    <div class="form-group">
                        <select class="form-control" name="sex" id="sex">
                            <option value="Male">Female</option>
                            <option value="Female">Male</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">            
                    <div class="form-group">
                        <label for="sel1"> Respondent Gender :</label>
                        <select class="form-control" name="sex" id="sex">
                            <option value="Male">Female</option>
                            <option value="Female">Male</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sel1">Age in Months :</label>
                        <select class="form-control" name="age" id="age">
                            <option value="0-6Mths">0 - 6 Mths</option>
                            <option value=">6-12Mths">6-12 Mths</option>
                            <option value=">12-18Mths">12-18 Mths</option>
                            <option value=">18-24Mths">18-24 Mths</option>
                            <option value=">Above 24Mths">Above 24 Mths</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">            
                    <div class="form-group">
                        <label for="sel1"> Respondent Gender :</label>
                        <select class="form-control" name="sex" id="sex">
                            <option value="Male">Female</option>
                            <option value="Female">Male</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sel1">Age in Months :</label>
                        <select class="form-control" name="age" id="age">
                            <option value="0-6Mths">0 - 6 Mths</option>
                            <option value=">6-12Mths">6-12 Mths</option>
                            <option value=">12-18Mths">12-18 Mths</option>
                            <option value=">18-24Mths">18-24 Mths</option>
                            <option value=">Above 24Mths">Above 24 Mths</option>
                        </select>
                    </div>
                </div>
             </div>

                <div class="row">
                    <div class="col-md-4 offset-md-9">
                     <button class="btn btn-lg btn-primary" name="btn_proceed" type="submit">&nbsp;Go to Screening Test </button>
                    </div> 
                </div>
            </div>
          </form>
         </div>
        </div>
    </div>
    <script src='https://rawgit.com/andreruffert/rangeslider.js/develop/dist/rangeslider.min.js'></script>
    <script src="js/index.js"></script>
</body>
</html>