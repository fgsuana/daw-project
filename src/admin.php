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

    <script>
        const isLogged = localStorage.getItem('isLogged');
        if (isLogged === 'false') {
            window.location.href = './index.php';
        }
    </script>

    <?php include 'header.php'; ?>
    <main class="mainbox">
    <div class="container-fluid mb-5">
        <h4 class="text-center mt-5">Bienvenido a tu Panel de Control <span style="color:black" id="user-name-admin"></span></h4>

        <div>
            <h2>Tus proyectos activos</h2>
            <section class="trabajos-activos"></section>
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
    
    <script type="module" src="./js/admin.js"></script>
    </main>
    <?php include_once './footer.php'; ?>
