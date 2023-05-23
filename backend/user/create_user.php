<?php

require_once '../config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$nombre_usuario = $data['name'];
$apellidos_usuario = $data['lastName'];
$correo_electronico = $data['email'];
$telefono = $data['telephone'];
$password = $data['password'];

$sql = "INSERT INTO usuario (nombre_usuario, apellidos_usuario, correo_electronico, telefono, password)
VALUES 
('$nombre_usuario', '$apellidos_usuario', '$correo_electronico', '$telefono', '$password');";

if (mysqli_query($conn, $sql) === TRUE) {
  $insertedId = mysqli_insert_id($conn); 
  $response = array(
    'id' => $insertedId
  );
  
  echo json_encode($response);
} else {
  echo "Error al insertar registros en la tabla de proyectos: " . $conn->error;
}

$conn->close();

?>
