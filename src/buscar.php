<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <title>Resultados de búsqueda</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- Inicio banner --><section class="spikes">
    <div class="bannerimg">
    <h2 class="h2subtitlemain">Más oportunidades laborales, mejores condiciones</h3>
    <p class="subtitlemain">Conviértete en el profesional IT que tanto deseas</p>
        <div class="d-flex h-100 align-items-center justify-content-center">
            <div id="hero-image">
                <form method="get" action="./src/buscar.php" class="buscadorhome">
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

        // Ejemplo de resultado
        echo "<p>Resultado 1</p>";
        echo "<p>Resultado 2</p>";
        echo "<p>Resultado 3</p>";
    }
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

<footer>
        <div class="social-icons"><a href="https://www.facebook.com/devmatchweb"><i class="ejemplo fa-brands fa-facebook"></i></a> <i class="fa-brands fa-instagram"></i> <a href="https://www.youtube.com/@Devmatch-DesarolloWeb-sz2uj"><i class="fa-brands fa-youtube"></i></a> <a href="https://www.linkedin.com/company/devmatchweb/?original_referer="><i class="fa-brands fa-linkedin"></i></a> </div>
        <div class="legalfooter">
            <span>2023 Proyecto</span>
            <span><a href="./src/aviso-legal.php">Aviso legal</a></span>
            <span><a href="./src/politica-cookies.php">Política de cookies</a></span>
            <span><a href="./src/politica-privacidad.php">Política de privacidad</a></span>
        </div>

    </footer>

<!-- Inicio Cookies -->

<button class="fas fa-arrow-up" onclick="goToTop()" id="myButton" title="Ir arriba"></button>
<script>

</script>
<!-- Final Cookies -->

    <script src="src/js/scripts.js"></script>
    <script type="module" src="src/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>
