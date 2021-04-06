<?php
$con = mysqli_connect("localhost","root","","joydb");
//$con = mysqli_connect("localhost","hykartech_hykartech","Pi~Db&l,j4fX","joydb");

# check for errors
if (mysqli_connect_error()){
   die("Could not connect to the db " . mysqli_connect_error());
   echo "<script>window.alert('We cannot connect to db!')</script>";
}
?>