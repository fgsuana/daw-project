<?php
require_once '../config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nombre_proyecto = $_POST["projectName"];
$descripcion_proyecto = $_POST["projectDescription"];
$id_usuario_creador = $_POST["id"];

$sql = "INSERT INTO proyecto (nombre_proyecto, descripcion_proyecto, id_usuario_creador) VALUES ('$nombre_proyecto', '$descripcion_proyecto', '$id_usuario_creador');";

if (mysqli_query($conn, $sql) === TRUE) {
  echo "Proyecto creado";
} else {
  echo "Error al crear proyecto" . $conn->error;
}

$conn->close();
?>
