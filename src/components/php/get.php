<?php
$server = 'localhost';
$username = 'root';
$password='';
$dbname ='vendor_finder';
$port = '3308';

$con = mysqli_connect($server, $username, $password,$dbname,$port);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = mysqli_query($con,"select Name, Email, Phone from vendors");

$response = array();

while($row = mysqli_fetch_assoc($sql)){

   $response[] = $row;
}

echo json_encode($response);
exit;