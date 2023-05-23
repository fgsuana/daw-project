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

if (mysqli_query($conn, $sql) === TRUE) {
  echo "Error al insertar registros en la tabla de proyectos: ";

} else {
  echo "Error al insertar registros en la tabla de proyectos: " . $conn->error;
}
echo json_encode($response);

$conn->close();

?>
