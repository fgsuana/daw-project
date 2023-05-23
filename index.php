<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de trabajo</title>
    <link rel="stylesheet" href="src/css/estilos.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- <link rel="import" href="header.html"> -->
</head>

<body>

    <?php include 'src/header.php'; ?>
    <!-- Inicio banner --><section class="spikes">
    <div class="bannerimg">
    <h2 class="h2subtitlemain">Más oportunidades laborales, mejores condiciones</h3>
    <p class="subtitlemain">Conviértete en el profesional IT que tanto deseas</p>
        <div class="d-flex h-100 align-items-center justify-content-center">
            <div id="hero-image">
                <form method="get" action="./src/buscar.php" class="buscadorhome">
                    <span class="iconoinput"><img src="./src/img/macbook.svg" alt="macbook" height="30px"/></span>
                    <input type="text" name="buscadortrabajo" placeholder="Buscar proyecto...">
                    <input type="submit" value="Voy a tener suerte">
                </form>
            </div>
        </div>
    </div></section>
    <!-- Fin banner -->

    <main class="mainbox">
        <div class="mainhomejobs">
            <div class="cajahomejobs">
                <div><span class="mainhomejobtitle">¿Te gustaría crecer como profesional en IT?</span></div>
                <div><span class="mainhomejobsubtitle">Desarrolla tus habilidades profesionales con el proyecto que más se adapte a tus inquietudes.</span></div> 

                    <div class="steps">
                        <div class="step"><img src="https://detallesorballo.com/wp-content/uploads/2020/09/imagen-de-prueba-320x240-1.jpg"></div>
                        <div class="step"><img src="https://detallesorballo.com/wp-content/uploads/2020/09/imagen-de-prueba-320x240-1.jpg"></div>
                        <div class="step"><img src="https://detallesorballo.com/wp-content/uploads/2020/09/imagen-de-prueba-320x240-1.jpg"></div>
                    </div>
            </div>   
        </div>
        
        <h2>Últimos proyectos publicados</h2>


        <section class="trabajos">

        </section>

        <h2>¿En qué rama te gustaría participar?</h2>
        <section class="trabajos rama">
            <div class="trabajo dessoft"><div class="titlerama"><h3>Desarollo de software</h3></div></div>
            <div class="trabajo ingred"><div class="titlerama"><h3>Ingeniería de redes</h3></div></div>
            <div class="trabajo seginf"><div class="titlerama"><h3>Seguridad informática</h3></div></div>
            <div class="trabajo adbd"><div class="titlerama"><h3>Administración de BD</h3></div></div>
            <div class="trabajo andat"><div class="titlerama"><h3>Análisis de datos</h3></div></div>
            <div class="trabajo adsist"><div class="titlerama"><h3>Administrador de sistemas</h3></div></div>
        </section>
    
        <h3>Entérate de las últimas novedades del sector IT en nuestro blog</h3>
         
    </main>
    <div class="prefooter spikes">
        <h3 class="prefooterh3">Trabajamos con las mejores marcas</h3>
        <img src="https://d2gma3rgtloi6d.cloudfront.net/e930ee29/images/main/main-header-logos-mobile@2x.png" />
    </div>


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

<!-- Banner de cookies -->
<div class="fixed-bottom py-2 cookiesbanner" id="cookieBanner">
    <div class="container d-flex justify-content-center align-items-center flex-wrap">
        <span class="text-center m-2 colorspan">En nuestro sitio web utilizamos cookies para brindarle una experiencia más personalizada y eficiente. Estas cookies nos permiten recordar sus preferencias y hábitos de navegación para que podamos ofrecerle contenido y servicios relevantes para usted.</span>
        <div class="mt-2">
            <button type="button" class="masinfocookies me-2" data-bs-toggle="modal" data-bs-target="#cookieModal">Más Información</button>
            <button type="button" class="aceptarcookies" id="acceptCookies">Aceptar</button>
        </div>
    </div>
</div>

<!-- Modal de configuración de cookies -->
<div class="modal fade" id="cookieModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cookieModalLabel">INFORMACIÓN ADICIONAL</h5>
            </div>
            <div class="modal-body">
                <p>Las cookies son pequeños archivos de texto que se almacenan en su dispositivo cuando utiliza nuestro sitio web. Utilizamos cookies necesarias para el correcto funcionamiento del sitio y para mejorar su experiencia de navegación. También utilizamos cookies de análisis para recopilar información sobre cómo utiliza nuestro sitio web y para mejorar nuestros servicios. Puede elegir si desea permitir o no el uso de cookies no esenciales. Tenga en cuenta que el bloqueo de ciertos tipos de cookies puede afectar su experiencia de navegación en nuestro sitio web. Para obtener más información sobre cómo utilizamos las cookies, consulte nuestra Política de cookies.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="botoncerrar" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


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
