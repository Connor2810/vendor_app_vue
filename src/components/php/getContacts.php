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



$data = file_get_contents("php://input");

$vendor_id = $data['vendorID'];

$sql = mysqli_query($con,"select * from Vendor_Contacts WHEREVendor_id = '$vendor_id'" );

$response = array();

while($row = mysqli_fetch_assoc($sql)){

   $response[] = $row;
}
?>