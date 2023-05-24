<?php
require_once '../config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$data = json_decode(file_get_contents('php://input'), true);
$nombre_proyecto = $data["projectName"];
$descripcion_proyecto = $data["projectDescription"];
$id_usuario_creador = $data["id"];

$sql = "INSERT INTO proyecto (nombre_proyecto, descripcion_proyecto, id_usuario_creador) VALUES ('$nombre_proyecto', '$descripcion_proyecto', '$id_usuario_creador');";

if (mysqli_query($conn, $sql) === TRUE) {
  $id_proyecto = $conn->insert_id;
  echo $id_proyecto;
} else {
  echo "Error al crear proyecto: " . $conn->error;
}

$conn->close();
?>
