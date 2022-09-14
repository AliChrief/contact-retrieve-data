<?php
header('Access-Control-Allow-Origin: http://localhost/');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Access-Control-Allow-Credentials: true');

include("connection.php");
if ((isset($_GET["fullname"])) && isset($_GET["email"]) && isset($_GET["phone"]) && isset($_GET["message"])){


    $name = $_GET["fullname"];
    $email = $_GET["email"];
    $number = $_GET["phone"];
    $message = $_GET["message"];
    
    
    $insert_query = $mysqli->prepare("INSERT INTO contacts(name, email,number,message) VALUE (?, ?,?,?)");
    $insert_query->bind_param("ssis", $name, $email,$number,$message);
    $insert_query->execute();
}

$retrieve_query = $mysqli->prepare("SELECT name, email,number,message FROM contacts");
$retrieve_query->execute();
$array = $retrieve_query->get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
}

$json = json_encode($response);
echo $json;
?>