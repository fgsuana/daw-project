<?php
$servername = "localhost";
$username = "root1";
$password = "rootroot";
$dbname = "devMatch";

// Crea conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Consulta todos los perfiles
$sql = "SELECT * FROM perfil";
$result = $conn->query($sql);

$perfiles = array();

// Agrega cada perfil al array
while($row = $result->fetch_assoc()) {
  $perfiles[] = $row;
}

// Convierte el array a JSON y lo imprime
echo json_encode($perfiles);

$conn->close();
?>
