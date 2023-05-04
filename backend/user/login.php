<?php

require_once '../config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuario WHERE nombre_usuario = '$username' AND contrasena = '$password'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
echo 'success';
} else {
echo 'failure';
}

$conn->close();

?>
