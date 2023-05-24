<?php
require_once '../config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$data = json_decode(file_get_contents('php://input'), true);
$id_proyecto = $data["idProyecto"];
$id_usuario = $data["idUsuario"];

$sql = "SELECT * FROM usuario_proyecto WHERE id_proyecto = '$id_proyecto' AND id_usuario = '$id_usuario'";
$result = $conn->query($sql);
$conn->close();

if ($result->num_rows > 0) {
    $response = true;
} else {
    $response = false; 
}

echo json_encode($response);
?>