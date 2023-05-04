<?php

require_once '../config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];
$password = $data['password'];

$sql = "SELECT * FROM usuario WHERE correo_electronico = '$email' AND password = '$password';";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  $row = $result->fetch_assoc();
  $name = $row['nombre_usuario'];
  $response = [
    'success' => true,
    'message' => 'Login successful',
    'name' => $name,
  ];
} else {
  $response = [
    'success' => false,
    'message' => 'Invalid email or password',
  ];
}

echo json_encode($response);
$conn->close();

?>
