<?php
# author: Haron Gichuhi | business@hykartech.com

/*
This file returns the user data as json from the db*/
// set the header to json
header('Content-Type: application/json');

$con = mysqli_connect("localhost","root","","joydb");
//$con = mysqli_connect("localhost","hykartech_hykartech","Pi~Db&l,j4fX","joydb");

# check for errors
if (mysqli_connect_error()){
   die("Could not connect to the db " . mysqli_connect_error());
   echo "<script>window.alert('We cannot connect to db!')</script>";
}

// query the db for data
$comm_query = sprintf("SELECT * FROM communication_tbl");
// execute query
$result = $con->query($comm_query);

// loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

// free memory associated with result
$result->close();
// close the db connection
$con->close();

// print the returned data
print json_encode($data);

?>