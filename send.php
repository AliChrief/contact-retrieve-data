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
    
    
    $query = $mysqli->prepare("INSERT INTO contacts(name, email,number,message) VALUE (?, ?,?,?)");
    $query->bind_param("ssis", $name, $email,$number,$message);
    $query->execute();
}

?>