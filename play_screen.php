<?php 

 # Author: Haron Gichuhi | business@hykartech.com
    # This script receives the user entered form data
    # try to print the POST function return
    #print_r($_POST);

 // start the session to ensure only logged people can see this page
 session_start();
  if (!isset($_SESSION['email'])) {
    # show the message that the user must log in or create an account
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

   if (isset($_GET['logout'])) {
    # log the user out and clear the session
    session_destroy();
    unset($_SESSION['email']);
    header("location: index.php");
   }

   // process the form from here

   // connect to the db
    include_once('config.php');
  // use this to clear the form 
   // $_POST = array();

   // handle btn results and go to play  and interaction page
    if (isset($_POST['btn_results'])) {

  // check user inputs
  
    # define error messages

  // Get the user inputs from the form
  $child_sex = $_POST['sex'];
  $child_age = $_POST['age'];
  $difficulty_relating = $_POST['difficulty_relating'];
  $difficulty_relating_option = $_POST['difficulty_relating_option'];
  $delayed_speech = $_POST['delayed_speech'];
  $delayed_speech_option = $_POST['delayed_speech_option'];
  $repeat_phrases = $_POST['repeat_phrases'];
  $repeat_phrases_option = $_POST['repeat_phrases_option'];
  $reverse_pronouns = $_POST['reverse_pronouns'];
  $reverse_pronouns_option = $_POST['reverse_pronouns_option'];
  $unrelated_answers = $_POST['unrelated_answers'];
  $unrelated_answers_option = $_POST['unrelated_answers_option'];
  $child_gestures = $_POST['gestures_use'];
  $child_gestures_option =$_POST['gestures_use_option'];
  $child_robot_talk = $_POST['robot-like'];
  $child_robot_talk_option = $_POST['robot_like_option'];
  $child_understand_react = $_POST['child_understand_react'];
  $child_understand_react_option = $_POST['understand_react_option'];
  $child_imitate_sounds = $_POST['sound_imitate'];
  $child_imitate_sounds_option = $_POST['sound_imitate_option'];
  $child_aloofness = $_POST['child_aloofness'];
  $child_aloofness_option = $_POST['child_aloofness_option'];
  $child_emotional = $_POST['child_emotional'];
  $child_emotional_option = $_POST['child_emotional_option'];
  $child_bizzare = $_POST['child_bizzare'];
  $child_bizzare_option = $_POST['child_bizarre_option'];

  // convert the responses
  if ($difficulty_relating == 'no') {
    $difficulty_relating_option = 0;
  }
   if ($delayed_speech == 'no') {
    $delayed_speech_option = 0;
  }
   if ($repeat_phrases == 'no') {
    $repeat_phrases_option = 0;
  }
   if ($delayed_speech == 'no') {
    $delayed_speech_option = 0;
  }
   if ($reverse_pronouns == 'no') {
    $reverse_pronouns_option = 0;
  }
   if ($unrelated_answers == 'no') {
    $unrelated_answers_option = 0;
  }
   if ($child_gestures == 'no') {
    $child_gestures_option = 0;
  }
   if ($child_robot_talk == 'no') {
    $child_robot_talk_option = 0;
  }
   if ($child_understand_react == 'no') {
    $child_understand_react_option = 0;
  }
   if ($child_imitate_sounds == 'no') {
    $child_imitate_sounds_option = 0;
  }
   if ($child_aloofness == 'no') {
    $child_aloofness_option = 0;
  }
   if ($child_emotional == 'no') {
    $child_emotional_option = 0;
  }
   if ($child_bizzare == 'no') {
    $child_bizzare_option = 0;
  }
   
     # if no errors insert the user to the users table and redirect to login page
    $sql = "INSERT INTO play_interact_tbl (child_sex, child_age, difficulty_relating, delayed_speech, repeat_phrases, reverse_pronouns, unrelated_answers, child_gestures, child_robot_talk, child_understand_react, child_imitate_sounds, child_aloofness, child_emotional, child_bizzare) VALUES ('$child_sex', '$child_age', '$difficulty_relating_option','$delayed_speech_option','$repeat_phrases_option','$reverse_pronouns_option','$unrelated_answers_option','$child_gestures_option','$child_robot_talk_option','$child_understand_react_option','$child_imitate_sounds_option','$child_aloofness_option','$child_emotional_option','$child_bizzare_option')";

    $comm_tbl = mysqli_query($con, $sql);
      // Check results   
    if (!$comm_tbl){
      $msg = "Something went wrong, we could not create your account";  
      } else {
     
        #redirect to the results dashboard
         //header("location: comm_results.php");
         //exit;
      }

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Autism Screening application for children below 24 Months">
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
  <link href="css/hide-show-fields-form.css" rel="stylesheet">
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

          <li class="get-started"><a href="logout.php">Log Out
           <?php
           // use this to welcome the user
          include_once('config.php');
          $get_user = "SELECT firstname FROM users WHERE email = '" . $_SESSION['email'] ."'";
          $user_result = mysqli_query($con, $get_user);
          while ($row = mysqli_fetch_object($user_result)) {
            # display the firstname
            echo "$row->firstname";
          }
          ?></a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center"> 
    <div class="container">
       <div class="jumbotron jumbotron-fluid">
            <div class="container">
             <center>
            <h2>
                <b>
                    Use this tool for screening purposes only - This is not a diagnostic tool!
                </b>
            </h2>
            <p>
                Use the sliders with a scale of 1 to 4 to respond to the screening questions.
            </p>
        </center>
            </div>
        </div>
    </div>
</section> 
 <!--  <main id="main"> -->
    <!-- ======= Screening questions go here ======= -->
<form class="p-3" method="POST">

   <div class="form-group alert alert-danger" style="background-color: #ffaec8; padding: 6px; border-radius: 10px;">
     <div class="row">
                <div class="col-sm-6">            
                    <div class="form-group ">
                        <label for="sel1">Child Gender :</label>
                        <select class="form-control" name="sex" id="sex" required="required" required>
                          <option value="" selected="selected" disabled="disabled" >Please Select</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sel1">Age in Months :</label>
                        <select class="form-control" name="age" id="age" required>
                           <option value="" selected="selected" disabled="disabled" >Please Select</option>
                            <option value="0-6Mths">0 - 6 Mths</option>
                            <option value=">6-12Mths">6-12 Mths</option>
                            <option value=">12-18Mths">12-18 Mths</option>
                            <option value=">18-24Mths">18-24 Mths</option>
                            <option value=">Above 24Mths">Above 24 Mths</option>
                        </select>
                    </div>
                </div>
              </div>
    </div>
  </br>
    <div style="background-color: #ffaec8;padding: 6px; border-radius: 10px;">
      <label><small><strong>Play &amp; Interaction Domain</strong></small></label>
    <div class="form-group">
    <label for="seeAnotherField"><strong>Qn 1. </strong><em> Does child respond to name by 12 months of age onwards?</em></label>

  <select class="form-control" id="seeObservedDifficulty" name="difficulty_relating" required>

       <option value="" selected="selected" disabled="disabled" >Please Select</option>
          <option value="no">No</option>
          <option value="yes">Yes</option>
    </select> 
    </div>
  <div class="form-group" id="observedDifficultyOption">
    <label for="otherField">On a scale of 1 - 4, rate the observed difficulty (1- worst and 4-is best).</label>
    <input type="range" id="option_difficulty_relating" name="difficulty_relating_option" min="1" max="4" step="1" labels="1, 3, 4"> 
    <!-- <select class="form-control" id="option_difficulty_relating" name="difficulty_relating_option" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select> -->
  </div>
  </div>
</br>
  <div style="background-color: #ffaec8;padding: 6px; border-radius: 10px;">
    <label><small><strong>Play &amp; Interaction Domain</strong></small></label>
   <div class="form-group">
    
    <label for="seeAnotherField"><strong>Qn 2. </strong> Does child share same or similar interests like other children of same age?</label>
    <select class="form-control" id="seeDelayedSpeech" name="delayed_speech" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
          <option value="no">No</option>
          <option value="yes">Yes</option>
    </select>
  </div>
  <div class="form-group" id="observedDelayedSpeech">
    <label for="otherField">On a scale of 1 - 4, rate the observed difficulty  (1- worst and 4-is best).</label>
     <input type="range" id="option_delayed_speech" name="delayed_speech_option" required min="1" max="4" step="1"> 
    <!-- <select class="form-control" id="option_delayed_speech" name="delayed_speech_option" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select> -->
  </div>
</div>
</br>
<div style="background-color: #ffaec8;padding: 6px; border-radius: 10px;">
  <label><small><strong>Play &amp; Interaction Domain</strong></small></label>
   <div class="form-group">
    <label for="seeAnotherField"><strong>Qn 3. </strong>Does child prefer playing alone?</label>
  <select class="form-control" id="seeRepeatPhrases" name="repeat_phrases" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
          <option value="no">No.</option>
          <option value="yes">Yes</option>
    </select>
  </div>
  <div class="form-group" id="observedRepeatPhrases">
    <label for="otherField">On a scale of 1 - 4, rate the observed difficulty  (1- worst and 4-is best).</label>
    <input type="range"  id="option_repeat_phrases" name="repeat_phrases_option" required min="1" max="4" step="1"> 
    <!-- <select class="form-control" id="option_repeat_phrases" name="repeat_phrases_option" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select> -->
  </div>
</div>
</br>
  <div style="background-color: #ffaec8;padding: 6px; border-radius: 10px;">
   <label><small><strong>Play &amp; Interaction Domain</strong></small></label>
   <div class="form-group">
    <label for="reverse pronouns"><strong>Qn 4. </strong>Does child make and maintain eye-contact with others?</label>
    <select class="form-control" id="seeReversePronouns" name="reverse_pronouns" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
          <option value="no">No.</option>
          <option value="yes">Yes</option>
    </select>
  </div>
  <div class="form-group" id="observedReversePronouns">
    <label for="otherField">On a scale of 1 - 4, rate the observed difficulty  (1- worst and 4-is best).</label>
     <input type="range"  id="option_reverse_pronouns" name="reverse_pronouns_option" required min="1" max="4" step="1">
    <!-- <select class="form-control" id="option_reverse_pronouns" name="reverse_pronouns_option" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select> -->
  </div>
</div>
</br>
<div style="background-color: #ffaec8;padding: 6px; border-radius: 10px;">
   <label><small><strong>Play &amp; Interaction Domain</strong></small></label>
   <div class="form-group">
    <label for="observed_unrelated_answers"><strong>Qn 5. </strong>Does child interact with others only to achieve certain desired goals?</label>
    <select class="form-control" id="seeUnrelatedAnswers" name="unrelated_answers" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
          <option value="no">No.</option>
          <option value="yes">Yes</option>
    </select>
  </div>
  <div class="form-group" id="observedUnrelatedAnswers">
    <label for="otherField">On a scale of 1 - 4, rate the observed difficulty  (1- worst and 4-is best).</label>
     <input type="range"   id="option_unrelated_answers" name="unrelated_answers_option" required min="1" max="4" step="1">
    <!-- <select class="form-control" id="option_unrelated_answers" name="unrelated_answers_option" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select> -->
  </div>
</div>
</br>
<div style="background-color: #ffaec8;padding: 6px; border-radius: 10px;">
  <label><small><strong>Play &amp; Interaction Domain</strong></small></label>
   <div class="form-group">
    <label for="gestures_use"><strong>Qn 6. </strong>Does your child show flat inappropriate facial expressions in various situations?</label>
    <select class="form-control" id="seeGesturesUse" name="gestures_use" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
          <option value="no">No.</option>
          <option value="yes">Yes</option>
    </select>
  </div>
  <div class="form-group" id="observedGesturesUse">
    <label for="observed_gestures_use">On a scale of 1 - 4, rate the observed difficulty  (1- worst and 4-is best).</label>
    <input type="range"   id="option_gestures_use" name="gestures_use_option" required min="1" max="4" step="1">
    <!-- <select class="form-control" id="option_gestures_use" name="gestures_use_option" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select> -->
  </div>
</div>
</br>
<div style="background-color: #ffaec8;padding: 6px; border-radius: 10px;">
  <label><small><strong>Play &amp; Interaction Domain</strong></small></label>
   <div class="form-group">
    <label for="seeAnotherField"><strong>Qn 7. </strong> Does child understand personal space boundaries?</label>
    <select class="form-control" id="seeRobotLike" name="robot_like" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
          <option value="no">No.</option>
          <option value="yes">Yes</option>
    </select>
  </div>
  <div class="form-group" id="observedRobotLike">
    <label for="otherField">On a scale of 1 - 4, rate the observed difficulty  (1- worst and 4-is best).</label>
    <input type="range" id="option_robot_like" name="robot_like_option" required min="1" max="4" step="1">
    <!-- <select class="form-control" id="option_robot_like" name="robot_like_option" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select> -->
  </div>
</div>
</br>
<div style="background-color: #ffaec8;padding: 6px; border-radius: 10px;">
  <label><small><strong>Play &amp; Interaction Domain</strong></small></label>
   <div class="form-group">
    <label for="seeAnotherField"><strong>Qn 8. </strong>Does child commonly avoid or resist physical contact?</label>
    <select class="form-control" id="seeUnderstandReact" name="child_understand_react" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
          <option value="no">No.</option>
          <option value="yes">Yes</option>
    </select>
  </div>
  <div class="form-group" id="observedUnderstandReact">
    <label for="otherField">On a scale of 1 - 4, rate the observed difficulty  (1- worst and 4-is best).</label>
    <input type="range" id="option_understand_react" name="child_understand_react_option" required min="1" max="4" step="1">
    <!-- <select class="form-control" id="option_understand_react" name="child_understand_react_option" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select> -->
  </div>
</div>
</br>
<div style="background-color: #ffaec8;padding: 6px; border-radius: 10px;">
  <label><small><strong>Play &amp; Interaction Domain</strong></small></label>
   <div class="form-group">
    <label for="seeAnotherField"><strong>Qn 9. </strong> Does child accept or feel comforted by others during distress?</label>
    <select class="form-control" id="seeSoundImitate" name="sound_imitate" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
          <option value="no">No.</option>
          <option value="yes">Yes</option>
    </select>
  </div>
  <div class="form-group" id="observedSoundImitate">
    <label for="otherField">On a scale of 1 - 4, rate the observed difficulty  (1- worst and 4-is best).</label>
    <input type="range" id="option_sound_imitate" name="sound_imitate_option" required min="1" max="4" step="1">
   <!--  <select class="form-control" id="option_sound_imitate" name="sound_imitate_option" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select> -->
  </div>
</div>
</br>
<div style="background-color: #ffaec8;padding: 6px; border-radius: 10px;">
   <label><small><strong>Play &amp; Interaction Domain</strong></small></label>
   <div class="form-group">
    <label for="seeAnotherField"><strong>Qn 10. </strong> Does child have trouble understanding other people's feelings or talking about own feelings?</label>
    <select class="form-control" id="seeAloofness" name="child_aloofness" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
          <option value="no">No.</option>
          <option value="yes">Yes</option>
    </select>
  </div>
  <div class="form-group" id="observedAloofness">
    <label for="otherField">On a scale of 1 - 4, rate the observed difficulty  (1- worst and 4-is best).</label>
    <input type="range" id="option_aloofness" name="child_aloofness_option" required min="1" max="4" step="1">
    <!-- <select class="form-control" id="option_aloofness" name="child_aloofness_option" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select> -->
  </div>
</div>
</br>
<div style="background-color: #ffaec8;padding: 6px; border-radius: 10px;">
  <label><small><strong>Play &amp; Interaction Domain</strong></small></label>
   <div class="form-group">
    <label for="seeAnotherField"><strong>Qn 11. </strong>Does child get upset by minor changes?</label>
    <select class="form-control" id="seeEmotionalResponse" name="child_emotional" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
          <option value="no">No.</option>
          <option value="yes">Yes</option>
    </select>
  </div>
  <div class="form-group" id="observedEmotionalResponse">
    <label for="otherField">On a scale of 1 - 4, rate the observed difficulty  (1- worst and 4-is best).</label>
    <input type="range" id="otherField" name="child_emotional_option" required min="1" max="4" step="1">
    <!-- <select class="form-control" id="otherField" name="child_emotional_option" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select> -->
  </div>
</div>
</br>
<div style="background-color: #ffaec8;padding: 6px; border-radius: 10px;">
  <label><small><strong>Play &amp; Interaction Domain</strong></small></label>
   <div class="form-group">
    <label for="seeAnotherField"><strong>Qn 12. </strong> Does child play "pretend" or "make believe" games e.g. pretend to feed a doll etc by 18 months?</label>
    <select class="form-control" id="seeBizarreGestures" name="child_bizzare" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
          <option value="no">No</option>
          <option value="yes">Yes</option>
    </select>
  </div>
  <div class="form-group" id="observedBizarreGestures">
    <label for="otherField">On a scale of 1 - 4, rate the observed difficulty  (1- worst and 4-is best).</label>
    <input type="range" id="option_bizarre_gestures" name="child_bizzare_option" required min="1" max="4" step="1">
   <!--  <select class="form-control" id="option_bizarre_gestures" name="child_bizzare_option" required>
       <option value="" selected="selected" disabled="disabled" >Please Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select> -->
  </div>
</div>
</br>
  <div class="form-group">
     <div class="row">
                <div class="col-sm-6">            
                  
                </div>
                <div class="col-sm-6">
                   <button name="btn_results" style="background-color: #ffaec8; height: 32px; margin-right: 40px; color: #000; border-style: none;">View Results</button>
                    <button name="btn_play_interaction_test">Go to Behavior Test</button>
                </div>
              </div>
    </div>


</form>
  
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
   <script src='js/rangeslider.min.js'></script>
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
  <script>
    // Qn1
    $("#seeObservedDifficulty").change(function() {
      if ($(this).val() == "yes") {
        $('#observedDifficultyOption').show();
        $('#option_difficulty_relating').attr('required','');
        $('#option_difficulty_relating').attr('data-error', 'This field is required.');
      } else {
        $('#observedDifficultyOption').hide();
        $('#option_difficulty_relating').removeAttr('required');
        $('#option_difficulty_relating').removeAttr('data-error');        
      }
    });
    $("#seeObservedDifficulty").trigger("change");
    //Qn2
     $("#seeDelayedSpeech").change(function() {
      if ($(this).val() == "yes") {
        $('#observedDelayedSpeech').show();
        $('#option_delayed_speech').attr('required','');
        $('#option_delayed_speech').attr('data-error', 'This field is required.');
      } else {
        $('#observedDelayedSpeech').hide();
        $('#option_delayed_speech').removeAttr('required');
        $('#option_delayed_speech').removeAttr('data-error');        
      }
    });
    $("#seeDelayedSpeech").trigger("change");

    //Qn3
     $("#seeRepeatPhrases").change(function() {
      if ($(this).val() == "yes") {
        $('#observedRepeatPhrases').show();
        $('#option_repeat_phrases').attr('required','');
        $('#option_repeat_phrases').attr('data-error', 'This field is required.');
      } else {
        $('#observedRepeatPhrases').hide();
        $('#option_repeat_phrases').removeAttr('required');
        $('#option_repeat_phrases').removeAttr('data-error');        
      }
    });
    $("#seeRepeatPhrases").trigger("change");

    //Qn4
     $("#seeReversePronouns").change(function() {
      if ($(this).val() == "yes") {
        $('#observedReversePronouns').show();
        $('#option_reverse_pronouns').attr('required','');
        $('#option_reverse_pronouns').attr('data-error', 'This field is required.');
      } else {
        $('#observedReversePronouns').hide();
        $('#option_reverse_pronouns').removeAttr('required');
        $('#option_reverse_pronouns').removeAttr('data-error');        
      }
    });
    $("#seeReversePronouns").trigger("change");
    
    //Qn5
     $("#seeUnrelatedAnswers").change(function() {
      if ($(this).val() == "yes") {
        $('#observedUnrelatedAnswers').show();
        $('#option_unrelated_answers').attr('required','');
        $('#option_unrelated_answers').attr('data-error', 'This field is required.');
      } else {
        $('#observedUnrelatedAnswers').hide();
        $('#option_unrelated_answers').removeAttr('required');
        $('#option_unrelated_answers').removeAttr('data-error');        
      }
    });
    $("#seeUnrelatedAnswers").trigger("change");
    //Qn6
     $("#seeGesturesUse").change(function() {
      if ($(this).val() == "yes") {
        $('#observedGesturesUse').show();
        $('#option_gestures_use').attr('required','');
        $('#option_gestures_use').attr('data-error', 'This field is required.');
      } else {
        $('#observedGesturesUse').hide();
        $('#option_gestures_use').removeAttr('required');
        $('#option_gestures_use').removeAttr('data-error');
      }
    });
    $("#seeGesturesUse").trigger("change");

    //Qn7
     $("#seeRobotLike").change(function() {
      if ($(this).val() == "yes") {
        $('#observedRobotLike').show();
        $('#option_robot_like').attr('required','');
        $('#option_robot_like').attr('data-error', 'This field is required.');
      } else {
        $('#observedRobotLike').hide();
        $('#option_robot_like').removeAttr('required');
        $('#option_robot_like').removeAttr('data-error');
      }
    });
    $("#seeRobotLike").trigger("change");

    //Qn8
     $("#seeUnderstandReact").change(function() {
      if ($(this).val() == "yes") {
        $('#observedUnderstandReact').show();
        $('#option_understand_react').attr('required','');
        $('#option_understand_react').attr('data-error', 'This field is required.');
      } else {
        $('#observedUnderstandReact').hide();
        $('#option_understand_react').removeAttr('required');
        $('#option_understand_react').removeAttr('data-error');
      }
    });
    $("#seeUnderstandReact").trigger("change");

     //Qn9
     $("#seeSoundImitate").change(function() {
      if ($(this).val() == "yes") {
        $('#observedSoundImitate').show();
        $('#option_sound_imitate').attr('required','');
        $('#option_sound_imitate').attr('data-error', 'This field is required.');
      } else {
        $('#observedSoundImitate').hide();
        $('#option_sound_imitate').removeAttr('required');
        $('#option_sound_imitate').removeAttr('data-error');
      }
    });
    $("#seeSoundImitate").trigger("change");

    //Qn10
     $("#seeAloofness").change(function() {
      if ($(this).val() == "yes") {
        $('#observedAloofness').show();
        $('#option_aloofness').attr('required','');
        $('#option_aloofness').attr('data-error', 'This field is required.');
      } else {
        $('#observedAloofness').hide();
        $('#option_aloofness').removeAttr('required');
        $('#option_aloofness').removeAttr('data-error');
      }
    });
    $("#seeAloofness").trigger("change");

    //Qn11
     $("#seeEmotionalResponse").change(function() {
      if ($(this).val() == "yes") {
        $('#observedEmotionalResponse').show();
        $('#option_emotional_response').attr('required','');
        $('#option_emotional_response').attr('data-error', 'This field is required.');
      } else {
        $('#observedEmotionalResponse').hide();
        $('#option_emotional_response').removeAttr('required');
        $('#option_emotional_response').removeAttr('data-error');
      }
    });
    $("#seeEmotionalResponse").trigger("change");

    //Qn12
     $("#seeBizarreGestures").change(function() {
      if ($(this).val() == "yes") {
        $('#observedBizarreGestures').show();
        $('#option_bizarre_gestures').attr('required','');
        $('#option_bizarre_gestures').attr('data-error', 'This field is required.');
      } else {
        $('#observedBizarreGestures').hide();
        $('#option_bizarre_gestures').removeAttr('required');
        $('#option_bizarre_gestures').removeAttr('data-error');
      }
    });
    $("#seeBizarreGestures").trigger("change");




    
  </script>

</body>

</html>