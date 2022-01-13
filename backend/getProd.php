<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-Width, Content-Type, Accept*');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eva03";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

echo json_encode(

    array(
        'resp'=>true,
    )

)



?>