<?php
$servername = "localhost";
$username = "root1";
$password = "rootroot";
$dbname = "devMatch";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM proyecto";
$result = $conn->query($sql);
$perfiles = array();

while($row = $result->fetch_assoc()) {
  $perfiles[] = $row;
}

echo json_encode($perfiles);

$conn->close();
?>
