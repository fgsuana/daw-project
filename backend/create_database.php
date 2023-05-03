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
  nombre_perfil TEXT NOT NULL
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

$conn->select_db($dbname);

$sql = "SELECT * FROM usuario WHERE correo_electronico = 'juan@gmail.com'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
  // Creacion de usuarios
  $sql = "INSERT INTO usuario (nombre_usuario, apellidos_usuario, correo_electronico, telefono)
    VALUES 
    ('Juan', 'Pérez', 'juan@gmail.com', '555-1234'),
    ('Ana', 'García', 'ana@gmail.com', '555-5678'),
    ('Pedro', 'López', 'pedro@gmail.com', '555-9012'),
    ('María', 'Fernández', 'maria@gmail.com', '555-3456'),
    ('Carlos', 'Gutiérrez', 'carlos@gmail.com', '555-7890'),
    ('Sofía', 'Martínez', 'sofia@gmail.com', '555-2345');";
  if (mysqli_query($conn, $sql) === TRUE) {
    echo "Registros insertados correctamente en la tabla de usuario";
  } else {
    echo "Error al insertar registros en la tabla de proyectos: " . $conn->error;
  }

  // Creacion de proyecto 
  $sql = "INSERT INTO proyecto ( nombre_proyecto, descripcion_proyecto, id_usuario_creador)
    VALUES 
    ('Realidad Virtual para smartTvs', 'La aplicación será para ver contenido de Realidad Virtual y aumentada en una televisión. Esta aplicación podrá funcionar con diferentes dispositivos de VR y AR, como gafas o cascos, y permitir a los usuarios disfrutar de una experiencia inmersiva en la comodidad de su hogar.
    La aplicación tendrá diferentes secciones, como una biblioteca de videos y juegos VR/AR, una sección de recomendaciones personalizadas basadas en los intereses del usuario, y una sección para comprar y descargar nuevos contenidos VR/AR.
    Además, podría incluir funciones para compartir la experiencia con amigos y familiares, como la posibilidad de transmitir la imagen en vivo a través de Internet para que otros puedan ver lo que el usuario está viendo. También podría incluir una opción de control por voz o por gestos, para que los usuarios puedan navegar por la aplicación sin necesidad de utilizar un control remoto.', '1'),
    ('Entrenamiento físico en casa', 'La aplicación podría proporcionar a los usuarios una variedad de rutinas de ejercicios y guías visuales para seguir, adaptadas a diferentes niveles de habilidad y objetivos de acondicionamiento físico. Además, la aplicación podría integrarse con dispositivos portátiles de fitness para monitorear el progreso y ofrecer recomendaciones personalizadas para cada usuario', '1'),
    ('Plataforma de tutorías en línea', 'Una plataforma en línea que conecta a tutores con estudiantes de todas partes del mundo. Los tutores pueden ofrecer sus servicios en línea a través de videoconferencias y compartir materiales educativos con los estudiantes. Los estudiantes pueden elegir el tutor que mejor se adapte a sus necesidades y programar sesiones de tutoría. Los pagos se pueden realizar a través de la plataforma, lo que hace que sea fácil para los tutores recibir su compensación.', '2'),
    ('HealthyPlate', 'HealthyPlate será una aplicación web y móvil que ayuda a los usuarios a planificar y llevar un seguimiento de su alimentación diaria para una dieta saludable. Los usuarios pueden establecer objetivos de calorías y macronutrientes, crear su plan de comidas diarias y realizar un seguimiento de su consumo de alimentos. La aplicación también proporciona información nutricional detallada sobre los alimentos y sugiere recetas saludables para el usuario en función de sus preferencias alimentarias.', '2'),
    ('Plataforma de gestión de proyectos en línea', 'Una plataforma en línea que permite a los equipos de trabajo colaborar y gestionar proyectos de manera efectiva. La plataforma permite crear tareas, asignarlas a diferentes miembros del equipo y realizar un seguimiento del progreso. También incluye herramientas de comunicación para que los miembros del equipo puedan mantenerse en contacto y compartir información relevante.', '3'),
    ('Aplicación de control de gastos personales', 'Una aplicación móvil que ayuda a los usuarios a controlar sus gastos diarios. Los usuarios pueden ingresar sus ingresos y gastos diarios, y la aplicación genera informes y estadísticas que les permiten conocer mejor sus hábitos de gasto. La aplicación también incluye herramientas para fijar objetivos de ahorro y para recibir notificaciones cuando se alcanzan o se exceden los límites de gasto establecidos.', '3');";
  if (mysqli_query($conn, $sql) === TRUE) {
    echo "Registros insertados correctamente en la tabla de proyectos";
  } else {
    echo "Error al insertar registros en la tabla de proyectos: " . $conn->error;
  }

  // Creacion de perfiles 
  $sql = "INSERT INTO perfil (nombre_perfil)
    VALUES 
    ('Desarrollador Web Frontend'),
    ('Desarrollador Web Backend'),
    ('Desarrollador Full stack'),
    ('Diseñador/a UX/UI'),
    ('Especialista en SEO'),
    ('Especialista en Marketing Digital'),
    ('Especialista en Análisis de Datos'),
    ('Especialista en Seguridad Informática'),
    ('Especialista en Integración y Despliegue Continuo (CI/CD)'),
    ('Especialista en Infraestructura de Servidores'),
    ('Especialista en Arquitectura de Sistemas'),
    ('Especialista en Automatización de Pruebas y QA'),
    ('Especialista en Gestión de Proyectos Ágiles'),
    ('Desarrollador Android'),
    ('Desarrollador IOS');";
  
  if (mysqli_query($conn, $sql) === TRUE) {
    echo "Registros insertados correctamente en la tabla de perfil";
  } else {
    echo "Error al insertar registros en la tabla de perfil: " . $conn->error;
  }

  // Creacion de usuario-perfil
  $sql = "INSERT INTO usuario_perfil (id_usuario, id_perfil)
  VALUES 
  ('4', '11'), ('5', '1'), ('5', '3'), ('6', '4');";
  
  if (mysqli_query($conn, $sql) === TRUE) {
    echo "Registros insertados correctamente en la tabla de usuario_perfil";
  } else {
    echo "Error al insertar registros en la tabla de usuario_perfil: " . $conn->error;
  }

  // Creacion de usuario-perfil
  $sql = "INSERT INTO proyecto_perfil (id_proyecto, id_perfil)
    VALUES 
    ('1', '3'), ('1', '4'), ('1', '5'), ('1', '9'),
    ('2', '1'), ('2', '2'), ('2', '4'), ('2', '8'), ('2', '11'),
    ('3', '3'), ('3', '5'),
    ('4', '1'), ('4', '2'), ('4', '4'), ('4', '5'),
    ('5', '3'), ('5', '4'), ('5', '5'), ('5', '6'),
    ('6', '3');";
  
  if (mysqli_query($conn, $sql) === TRUE) {
    echo "Registros insertados correctamente en la tabla de proyecto_perfil";
  } else {
    echo "Error al insertar registros en la tabla de proyecto_perfil: " . $conn->error;
  }
}

$conn->close();
?>