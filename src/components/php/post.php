<?php
$server = 'localhost';
$username = 'root';
$password='';
$dbname ='vendor_finder';
$port = '3308';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers", "Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");
header("Access-Control-Allow-Methods", "GET,HEAD,OPTIONS,POST,PUT");
echo("Test");
$mysqli = new mysqli($server,$username,$password, $dbname, $port);

$data = json_decode(file_get_contents("php://input"));

$request = $data ->request;

if($request == 2){
    $name = $data->name;
    $email = $data->email;
    $phone = $data->phone;

    $insert = "INSERT INTO 'vendors'('Name', 'Email', 'Phone') VALUES ('".$name."','".$email."','".$phone."') ";
    $result = $mysqli->query($insert);

    if($result){
        $response[] = array('status'=>1);
    } else{
        $response[] = array('status'=>0);
    }
    echo json_encode($response);
    exit;


}



?>