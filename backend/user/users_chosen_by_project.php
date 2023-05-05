<?php

require_once '../config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$id_proyecto = $data['id'];


$sql = "SELECT u.* FROM usuario u
    INNER JOIN usuario_proyecto up ON u.id_usuario = up.id_usuario
    WHERE up.id_proyecto = $id_proyecto
    AND up.tipo_usuario = 'chosen'";

$result = mysqli_query($con, $sql);

// Recopilación de los resultados en un array
$usuarios = array();
while ($row = mysqli_fetch_assoc($result)) {
    $usuarios[] = $row;
}

// Devolución del array de usuarios como respuesta en formato JSON
echo json_encode($usuarios);
$conn->close();

?>
