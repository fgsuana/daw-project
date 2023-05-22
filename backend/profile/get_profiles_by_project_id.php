<?php
require_once '../config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$proyectoId = $data["id"];

$proyectoId = $conn->real_escape_string($proyectoId);

$sql = "SELECT perfil.nombre_perfil
FROM proyecto_perfil
INNER JOIN perfil ON proyecto_perfil.id_perfil = perfil.id_perfil
WHERE proyecto_perfil.id_proyecto = $proyectoId";

$result = $conn->query($sql);
$roles = array();

while($row = $result->fetch_assoc()) {
  $roles[] = $row;
}

echo json_encode($roles);

$conn->close();
?>
