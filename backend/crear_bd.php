<?php

$servername = "localhost";
$username = "root1";
$password = "rootroot";
$dbname = "devMatch";

// Crea conexión
$conn = new mysqli($servername, $username, $password);

// Verifica conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Crea base de datos si no existe
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
  echo "Base de datos creada correctamente";
} else {
  echo "Error al crear la base de datos: " . $conn->error;
}

// Selecciona la base de datos
$conn->select_db($dbname);

// Crea tabla de usuarios
$sql = "CREATE TABLE IF NOT EXISTS usuario (
  id_usuario INT PRIMARY KEY AUTO_INCREMENT,
  nombre_usuario VARCHAR(50) NOT NULL,
  apellidos_usuario VARCHAR(50),
  correo_electronico VARCHAR(50),
  telefono VARCHAR(20)
)";
if ($conn->query($sql) === TRUE) {
  echo "Tabla de usuarios creada correctamente";
} else {
  echo "Error al crear la tabla de usuarios: " . $conn->error;
}

// Crea tabla de proyectos
$sql = "CREATE TABLE IF NOT EXISTS proyecto (
  id_proyecto INT PRIMARY KEY AUTO_INCREMENT,
  nombre_proyecto VARCHAR(50) NOT NULL,
  descripcion_proyecto TEXT,
  id_usuario_creador INT,
  FOREIGN KEY (id_usuario_creador) REFERENCES usuario(id_usuario)
)";
if ($conn->query($sql) === TRUE) {
  echo "Tabla de proyectos creada correctamente";
} else {
  echo "Error al crear la tabla de proyectos: " . $conn->error;
}



// Crea tabla de perfiles
$sql = "CREATE TABLE IF NOT EXISTS perfil (
  id_perfil INT PRIMARY KEY AUTO_INCREMENT,
  nombre_perfil VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
  echo "Tabla de perfiles creada correctamente";
} else {
  echo "Error al crear la tabla de perfiles: " . $conn->error;
}

// Crea tabla intermedia usuario-perfil
$sql = "CREATE TABLE IF NOT EXISTS usuario_perfil (
  id_usuario_perfil INT PRIMARY KEY AUTO_INCREMENT,
  id_usuario INT,
  id_perfil INT,
  FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
  FOREIGN KEY (id_perfil) REFERENCES perfil(id_perfil)
)";
if ($conn->query($sql) === TRUE) {
  echo "Tabla intermedia usuario-perfil creada correctamente";
} else {
  echo "Error al crear la tabla intermedia usuario-perfil: " . $conn->error;
}

// Crea tabla intermedia proyecto-perfil
$sql = "CREATE TABLE IF NOT EXISTS proyecto_perfil (
  id_proyecto_perfil INT PRIMARY KEY AUTO_INCREMENT,
  id_proyecto INT,
  id_perfil INT,
  FOREIGN KEY (id_proyecto) REFERENCES proyecto(id_proyecto),
  FOREIGN KEY (id_perfil) REFERENCES perfil(id_perfil)
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla proyecto_perfil creada correctamente";
} else {
  echo "Error al crear la tabla proyecto_perfil: " . $conn->error;
}

// Crea tabla intermedia usuario-proyecto
$sql = "CREATE TABLE IF NOT EXISTS usuario_proyecto (
  id_usuario_proyecto INT PRIMARY KEY AUTO_INCREMENT,
  id_proyecto INT,
  id_usuario INT,
  tipo_usuario ENUM('posible', 'candidato'),
  FOREIGN KEY (id_proyecto) REFERENCES proyecto(id_proyecto),
  FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla usuario_proyecto creada correctamente";
} else {
  echo "Error al crear la tabla usuario_proyecto: " . $conn->error;
}

$conn->close();

?>