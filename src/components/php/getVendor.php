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

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];
$job = $data['job'];
$vendor_id = $row['id'];

$insert = "INSERT INTO vendor contacts(Name, Email, Phone, Job_title, Vendor_id) VALUES('" . $name . "','" . $email . "','" . $phone . "','" . $job . "','" . $vendor_id . "')";



if (mysqli_query($conn, $insert)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

exit;
?>