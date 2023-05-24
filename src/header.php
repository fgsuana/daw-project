<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <link rel="icon" type="image/png" href="./img/logo.png">
</head>

<body>
  <header>
    <!-- Inicio Navbar-->

    <nav class="navbar navbar-expand-xl navbar navcontrol fixed-top triangle">
      <div class="container-fluid">
        <!-- Logo -->
        <a href="./index.php"><img id="logo" class="logonav ms-5" alt="Dev Match" src="./img/logo.png"></a>

        <!-- Boton para ver menu en formato movil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Elementos del menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item mx-5">
              <a class="nav-link text-white" href="./index.php"><i class="fa-solid fa-house" style="color: #ffffff;"></i>
                Inicio</a>
            </li>
            <li id="publish-project" class="nav-item mx-5">
              <a class="nav-link text-white" href="./pubproyecto.php"><i class="fa-solid fa-folder" style="color: #ffffff;"></i>
                Publicar proyecto</a>
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link text-white" href="./contacto.php"><i class="fa-solid fa-circle-info" style="color: #ffffff;"></i> Contacto</a>
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link text-white" href="./sobre-nosotros.php"><i class="fa-solid fa-circle-info" style="color: #ffffff;"></i> Sobre nosotros</a>
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link text-white" href="https://www.itcmadi.com/devmatch1/blog/" target="_blank"><i class="fas fa-book" style="color: #ffffff;"></i> Blog</a>
            </li>
          </ul>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li id="login-text" class="nav-item mx-5">
              <a class="nav-link text-white" href="./login.php"><i class="fa-solid fa-user"
                  style="color: #ffffff;"></i> Login</a>
            </li>
            <li id="user-name-text" class="nav-item mx-5">
              <a class="nav-link text-white" href="./admin.php"><i class="fa-solid fa-user" style="color: #ffffff;"></i> Panel Administración <span id="user-name"></span></a>
            </li>
            <li style="cursor:pointer;" id="logout-text" class="nav-item mx-5" onclick="logout()">
              <a class="nav-link text-white"><i class="fa-solid fa-user" style="color: #ffffff;"></i> Logout</a>
            </li>
            <li id="idregistro" class="nav-item mx-5">
              <a class="nav-link text-white" href="./registro.php"><i class="fa-solid fa-user-pen"
                  style="color: #ffffff;"></i> Registro</a>
            </li>
        </div>

      </div>
    </nav>
  </header>
  <script src="./js/header.js"></script>

</body>

</html>
