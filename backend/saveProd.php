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

$nombreProducto=$_POST['nombreProducto'];
$descProducto=$_POST['descProducto'];
$codigo=$_POST['codigo'];
$urlIma=$_POST['urlIma'];

$insertQueryt = "insert into productos (nombrePr descPr codPr urlPr) values('".$nombreProducto."', '".$codigo."' , '".$descProducto."' , '".$urlIma."')";

if($conn->query($insertQueryt) === TRUE) {
    echo "se ingresó correctamente";
} else {
    echo "Error";
}

$conn->close();
echo json_encode(

    array(
        'resp'=>true,
        'POST'=>(object)$_POST,
    )

)



?>