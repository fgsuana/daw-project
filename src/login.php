<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <title>Panel de usuarios</title>
</head>
<?php include 'header.php'; ?>
<body>
    
    <section class="principal d-flex justify-content-center align-items-center">

        <div class="container containerlogin">

            <div class="row">
                <div class="col-md-6">
                    <div class="text-center p-5">
                        <h2 class="mb-5">Panel de usuarios</h2>
                        <input id="email" type="email" class="form-control text-center" placeholder="Introduce tu correo: correo@gmail.com" required>
                        <input id="password" type="password" class="form-control text-center mt-5" placeholder="Introduce tu contraseña" required>
                        <button type="submit" class="btn color mt-5" onclick="doLogin()">Login</button>
                    </div>
                </div>
                <div class="col-md-6 bloque2">
                    <div class="text-center p-5">
                        <h2 class="text-white">¿No tienes una cuenta todavía?</h2>
                        <h4 class="mt-5">Proyectos, profesionales y más<s></s></h4>
                        <p class="mt-5">Conecta con otras personas para conseguir trabajar en equipo de forma eficaz y rentable.</p>
                        <a href="registro.php"><button type="submit" class="btn color mt-5">Regístrate</button></a>
                    </div>

                </div>

            </div>
            <p id="alert-message"></p>
            <p id="alert-message2"></p>
        </div>
        <style>
        p#alert-message {
            display: none;
            background-color: #7AA874;
            color: white;
            font-size: 15px;
            width: 30%;
            text-align: center;
            margin: 3% auto;
            padding: 1%;
            border-radius: 3px;
        }

        p#alert-message2 {
            display: none;
            background-color: red;
            color: white;
            font-size: 15px;
            width: 30%;
            text-align: center;
            margin: 3% auto;
            padding: 1%;
            border-radius: 3px;
        }


    </style>
    <p id="alert-message" class="register-message"></p>

    </section>
    <section class="ramaslogin">
    <h2>¿En qué rama te gustaría participar?</h2>
        <section class="trabajos rama">
            <div class="trabajo dessoft"><div class="titlerama"><h3>Desarollo de software</h3></div></div>
            <div class="trabajo ingred"><div class="titlerama"><h3>Ingeniería de redes</h3></div></div>
            <div class="trabajo seginf"><div class="titlerama"><h3>Seguridad informática</h3></div></div>
            <div class="trabajo adbd"><div class="titlerama"><h3>Administración de BD</h3></div></div>
            <div class="trabajo andat"><div class="titlerama"><h3>Análisis de datos</h3></div></div>
            <div class="trabajo adsist"><div class="titlerama"><h3>Administrador de sistemas</h3></div></div>
        </section>
</section>
    <script type="module" src="./js/login.js"></script>
    <?php include_once './footer.php'; ?>
