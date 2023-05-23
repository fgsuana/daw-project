<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <title>Contacto</title>
</head>
<body>
    <?php include 'header.php'; ?>
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

        // Ejemplo de resultado
        echo "<p>Resultado 1</p>";
        echo "<p>Resultado 2</p>";
        echo "<p>Resultado 3</p>";
    }
    ?>
