<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <title>Sobre Nosotros</title>
</head>
<body>
<?php include 'header.php'; ?>

<body class="body-registro">

    <section>

        <div class="principalregistro row d-flex justify-content-center align-items-center">

            <div class="col-xl-6 mitad color1">


                <div class="text-center textoregistro mt-5">
                    <h2>Únete a la mejor red de Desarrolladores del mundo.</h2>
                    <p>Conecta con otros profesionales del sector, empresas y proyectos.</p>
                </div>

                <div class="iconoregistro2 text-center">
                    <i class="fa-solid fa-people-group"></i>
                </div>
            </div>            

            <div class="col-xl-6 mitad color2">
                <div class="text-end m-3">
                    <a href="login.html"><button class="boton-inicio d-inline-block">Iniciar Sesión</button></a><a href="registro.html"><button class="me-3 boton-registro d-inline-block">Regístrate</button></a>
                </div>
                <div class="text-start">
                    <div class="content-regis">
                        <label for="nombre">NOMBRE COMPLETO</label>
                        <input type="text" class="form-control text-start" placeholder="Introduce tu nombre">

                        <label class="mt-5" for="apellidos">Apellidos</label>
                        <input type="text" class="form-control text-start" placeholder="Introduce tus apellidos">

                        <label class="mt-5" for="nombre">CONTRASEÑA</label>
                        <input type="password" class="form-control text-start" placeholder="*********">

                        <label class="mt-5" for="nombre">E-MAIL</label>
                        <input type="email" class="form-control text-start" placeholder="Introduce tu correo electrónico">
                        
                        <label class="mt-5" for="nombre">TELÉFONO</label>
                        <input type="tel" class="form-control text-start" placeholder="Introduce tu número de teléfono">

                        <div class="mt-5" id="checkbox-container"></div>

                        <label class="mt-5 form-check-label">
                            <input class="form-check-input me-2" type="checkbox" name="checkbox" id="politicas">
                            Aceptar los <a href="TerminosCondiciones.html">Términos y Condiciones</a>
                        </label>
                          
                        <div>
                        <button type="submit" class="btn botonacepreg mt-5">Regístrame</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script type="module" src="js/registro.js"></script>

    <?php include_once './footer.php'; ?>
