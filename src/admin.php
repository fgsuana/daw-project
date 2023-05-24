<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <title>Panel de administración</title>
</head>
<body>
<?php include 'header.php'; ?>
    <script>
        const isLogged = localStorage.getItem('isLogged');
        if (isLogged === 'false') {
            window.location.href = './index.php';
        }


            // Obtener el valor de la variable del almacenamiento local
let iduser = localStorage.getItem('id');

// Verificar si el valor de iduser no está vacío o indefinido
if (iduser) {
  // Realizar la solicitud AJAX solo si el valor de iduser está presente
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      // La solicitud se ha completado correctamente
      console.log('Valor de iduser enviado al servidor');
    }
  };
  xhttp.open("GET", "admin.php?iduser=" + iduser, true);
  xhttp.send();
} else {
  console.log('El valor de iduser está vacío o indefinido');
}
    </script>

    
    <?php
// Obtener el valor de iduser enviado en la solicitud AJAX
$iduser = $_GET['iduser'];

// Ejemplo: imprimir el valor de iduser
echo $iduser;
?>
    <div class="container-fluid mb-5">
        <h4 class="text-center mt-5">Bienvenido a tu Panel de Control <span style="color:black" id="user-name-admin"></span></h4>

        <div>
            <h2>Tus proyectos activos</h2>

                            <?php
                // Datos de conexión a la base de datos
                $servername = "localhost:3307";
                $username = "root";
                $password = "";
                $dbname = "devMatch";

                // Crear la conexión a la base de datos
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verificar si hay errores en la conexión
                if ($conn->connect_error) {
                    die("Error de conexión: " . $conn->connect_error);
                }

                // Consulta SQL
                $sql = "SELECT p.id_proyecto, p.nombre_proyecto 
                        FROM proyecto p 
                        INNER JOIN usuario_proyecto up ON p.id_proyecto = up.id_proyecto 
                        WHERE up.id_usuario = 1";

                // Ejecutar la consulta
                $result = $conn->query($sql);

                // Verificar si hay resultados
                if ($result->num_rows > 0) {
                    // Imprimir la tabla
                    echo "<table class='activeprojects'>";
                    echo "<tr><th>ID Proyecto</th><th>Nombre Proyecto</th></tr>";
                    
                    // Imprimir los resultados
                    while ($row = $result->fetch_array()) {
                        echo "<tr><td>".$row['id_proyecto']."</td><td>".$row['nombre_proyecto']."</td></tr>";
                    }
                    
                    echo "</table>";
                } else {
                    echo "No se encontraron resultados.";
                }

                // Cerrar la conexión
                $conn->close();
?>
            <section class="tustrabajos"></section>
        </div>
        
        <div class="row">
            <div>
                <h2>Únete a otro proyecto</h2>
                <section class="trabajos"></section>
            </div>
            <div>
                <h2 class="mb-4">Visita el blog para enterarte de todo</h2>
   <p>En nuestro blog estarás informado sobre las últimas novedades en el sector IT y podrás encontrar consejos para ser un mejor profesional.</p>
         <a href="https://www.itcmadi.com/devmatch1/blog/"><img src="./img/blogbanner.png" class="blogimg"></a>
            </div>
        </div>

    </div>
    

    <script type="module" src="./js/main.js"></script>
    <?php include_once './footer.php'; ?>
