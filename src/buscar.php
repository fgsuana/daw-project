<?php

    // Verificar si se ha enviado una consulta
    if (isset($_GET['buscadortrabajo'])) {
        // Obtener la consulta del formulario
        $consulta = $_GET['buscadortrabajo'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <title>Resultados de la búsqueda: <?php echo $consulta; ?></title>
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- Inicio banner --><section class="spikes">
    <div class="bannerimg">
    <h2 class="h2subtitlemain">¿No te convence el resultado de la búsqueda?</h3>
    <p class="subtitlemain">Prueba otra vez</p>
        <div class="d-flex h-100 align-items-center justify-content-center">
            <div id="hero-image">
                <form method="get" action="./buscar.php" class="buscadorhome">
                    <span class="iconoinput"><img src="./img/macbook.svg" alt="macbook" height="30px"/></span>
                    <input type="text" name="buscadortrabajo" placeholder="Buscar proyecto...">
                    <input type="submit" value="Voy a tener suerte">
                </form>
            </div>
        </div>
    </div></section>
    <main class="mainbox">
<?php
    // Verificar si se ha enviado una consulta
    if (isset($_GET['buscadortrabajo'])) {
        // Obtener la consulta del formulario
        $consulta = $_GET['buscadortrabajo'];

        // Aquí puedes realizar la lógica de búsqueda según tus necesidades.
        // Por ejemplo, podrías ejecutar una consulta en una base de datos.

        // Mostrar los resultados
        echo "<h2>Resultados de búsqueda para: $consulta</h2>";

        // Aquí puedes mostrar los resultados obtenidos de la búsqueda.
        // Puedes utilizar un bucle para mostrar cada resultado.

    }



    // Establecer la conexión con la base de datos


$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "devMatch";


$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay un error de conexión
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

// Escapar caracteres especiales para evitar inyecciones SQL
$consulta = $conexion->real_escape_string($consulta);

// Realizar la consulta en la base de datos
$sql = "SELECT * FROM proyecto WHERE nombre_proyecto LIKE '%$consulta%'";
$resultado = $conexion->query($sql);

// Verificar si se encontraron resultados
if ($resultado->num_rows > 0) {
    // Mostrar los resultados
    while ($fila = $resultado->fetch_assoc()) {
                // Mostrar los datos relevantes de cada resultado

        echo "<div class='consultaresult'> <i class='fa-solid fa-diagram-project' style='color: #000000;'></i> ";
        echo $fila['nombre_proyecto'];
        echo "</div>";
    }
} else {
    echo "<div class='consultaresult'>";
    echo "❌ No se encontraron resultados";
    echo "</div>";
}

// Cerrar la conexión con la base de datos
$conexion->close();

    ?>



<h2>¿Te podría interesar algún proyecto?</h2>
        <section class="trabajos rama">
            <div class="trabajo dessoft"><div class="titlerama"><h3>Desarollo de software</h3></div></div>
            <div class="trabajo ingred"><div class="titlerama"><h3>Ingeniería de redes</h3></div></div>
            <div class="trabajo seginf"><div class="titlerama"><h3>Seguridad informática</h3></div></div>
            <div class="trabajo adbd"><div class="titlerama"><h3>Administración de BD</h3></div></div>
            <div class="trabajo andat"><div class="titlerama"><h3>Análisis de datos</h3></div></div>
            <div class="trabajo adsist"><div class="titlerama"><h3>Administrador de sistemas</h3></div></div>
        </section>

        </main>

        <?php include_once './footer.php'; ?>
