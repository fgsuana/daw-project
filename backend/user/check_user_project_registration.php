<?php
require_once '../config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id_proyecto = $_POST["idProyecto"];
$id_usuario = $_POST["idUsuario"];

$sql = "SELECT * FROM usuario_proyecto WHERE id_proyecto = '$id_proyecto' AND id_usuario = '$id_usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $response = true;
} else {
    $response = false; 
}

$conn->close();
echo json_encode($response);
?>