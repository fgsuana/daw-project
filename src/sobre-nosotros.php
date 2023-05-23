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

    <header class="py-5">
    <div class="container">
      <h1 class="text-center">Sobre nosotros</h1>
    </div>
  </header>

  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>Nuestra historia</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim auctor mauris, id hendrerit nunc mattis ac. Nulla laoreet gravida purus, eget eleifend velit. Sed sed arcu non turpis tristique hendrerit nec a ante. Aliquam quis augue vel tellus pulvinar rutrum vel a turpis.</p>
        </div>
        <div class="col-lg-6">
          <h2>Nuestro equipo</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim auctor mauris, id hendrerit nunc mattis ac. Nulla laoreet gravida purus, eget eleifend velit. Sed sed arcu non turpis tristique hendrerit nec a ante. Aliquam quis augue vel tellus pulvinar rutrum vel a turpis.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h2>Nuestra misión</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim auctor mauris, id hendrerit nunc mattis ac. Nulla laoreet gravida purus, eget eleifend velit. Sed sed arcu non turpis tristique hendrerit nec a ante. Aliquam quis augue vel tellus pulvinar rutrum vel a turpis.</p>
        </div>
        <div class="col-lg-6">
          <h2>Nuestros valores</h2>
          <ul>
            <li>Compromiso</li>
            <li>Innovación</li>
            <li>Colaboración</li>
            <li>Integridad</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
    


    <footer>

        <div class="social-icons"><i class="ejemplo fa-brands fa-facebook"></i> <i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-youtube"></i> <i class="fa-brands fa-linkedin"></i> </div>
        <div class="legalfooter">
            <span>2023 Proyecto</span>
            <span><a href="./src/aviso-legal.php">Aviso legal</a></span>
            <span><a href="./src/politica-cookies.php">Política de cookies</a></span>
            <span><a href="./src/politica-privacidad.php">Política de privacidad</a></span>
        </div>

    </footer>


    <button class="fas fa-arrow-up" onclick="goToTop()" id="myButton" title="Ir arriba"></button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>