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

$result = mysqli_query($con, "SELECT * FROM vendors");

$response = array();
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['Name'];

    $response[] = array("id"=>$id, "Name"=>$name);
}

echo json_encode($response);
exit;



?>