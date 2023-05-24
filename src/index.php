<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de trabajo</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body>

    <?php include_once './header.php'; ?>
    <!-- Inicio banner --><section class="spikes">
    <div class="bannerimg">
    <h2 class="h2subtitlemain">Más oportunidades laborales, mejores condiciones</h3>
    <p class="subtitlemain">Conviértete en el profesional IT que tanto deseas</p>
        <div class="d-flex h-100 align-items-center justify-content-center">
            <div id="hero-image">
                <form method="get" action="buscar.php" class="buscadorhome">
                    <span class="iconoinput"><img src="./img/macbook.svg" alt="macbook" height="30px"/></span>
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
        <img src="https://d2gma3rgtloi6d.cloudfront.net/e930ee29/images/main/main-header-logos-mobile@2x.png" class="imghome"/>
    </div>




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

    <?php include_once './footer.php'; ?>
    <script src="./js/scripts.js"></script>
    <script type="module" src="./js/main.js"></script>

</body>

</html>
