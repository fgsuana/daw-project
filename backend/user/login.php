<?php

require_once '../config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'];
$password = $data['password'];

$sql = "SELECT * FROM usuario WHERE correo_electronico = '$username' AND password = '$password';";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  echo 'success';
} 

$conn->close();

?>
