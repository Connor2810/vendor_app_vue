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

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];
$job = $data['job'];
$vendor_id = $data['id'];

$insert = "INSERT INTO vendor_contacts(Name, Email, Phone, Job_title, Vendor_id) VALUES('" . $name . "','" . $email . "','" . $phone . "','" . $job . "','" . $vendor_id . "')";



if (mysqli_query($con, $insert)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert . "<br>" . mysqli_error($con);
}
mysqli_close($con);

exit;
?>