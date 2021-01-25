<?php
//header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'vendor_finder';
$port = '3308';




$conn = mysqli_connect($server, $username, $password, $dbname, $port) or die("Cant connect");

$data = json_decode(file_get_contents("php://input"), true);



$name = $data['name'];
$email = $data['email'];
$phone = $data['number'];


$insert = "INSERT INTO vendors(Name, Email, Phone) VALUES ('" . $name . "','" . $email . "','" . $phone . "')";

if (mysqli_query($conn, $insert)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
exit;
?>