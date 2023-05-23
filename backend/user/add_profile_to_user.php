<?php
require_once '../config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$id_usuario = $data['idUsuario'];
$id_perfil = $data['idPerfil'];

$sql = "INSERT INTO usuario_perfil (id_usuario, id_perfil)
VALUES 
('$id_usuario', '$id_perfil');";

$response = array(); 

if (mysqli_query($conn, $sql) === TRUE) {
  $response['success'] = true;
  $response['message'] = "Registros insertados correctamente en la tabla de usuario_perfil";
} else {
  $response['success'] = false;
  $response['message'] = "Error al insertar registros en la tabla de usuario_perfil: " . $conn->error;
}

echo json_encode($response);
$conn->close();
?>