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

    <div class="row text-center divscontact">
        <!-- Caja 1 = Telefono -->
        <div class="col-md-4 boxcontact d-flex flex-column justify-content-center align-items-center">
            <i class="fas fa-phone"></i>
            <h5 class="text-center">Teléfono</h5>
            <p class="text-center">+34 123456789</p>
        </div>


        <!-- Caja 2 = Correo -->
        <div class="col-md-4 boxcontact d-flex flex-column justify-content-center align-items-center">
            <i class="fas fa-envelope"></i>
            <h5>Correo</h5>
            <p>ejemplo@info.com</p>
        </div>

        <!-- Caja 3 = Dirección -->
        <div class="col-md-4 boxcontact d-flex flex-column justify-content-center align-items-center">
            <i class="fas fa-map-marker-alt"></i>
            <h5>Dirección</h5>
            <p>C. de Pelai, 7, 08001 Barcelona</p>
        </div>

    </div>

    <div class="padremapform">
        <!-- Caja 1 = Mapa -->
        <div class="imagencontact d-flex flex-column justify-content-center align-items-center">
            <h4>¡Contáctanos!</h4>
            <p>Si tienes dudas solo contáctanos y te atenderemos lo antes posible.</p>
        </div>



        
        <!-- Caja 2 = Formulario -->
        <div class="col-md-6 fromcontact">
            
            <div class="col-md-6">
                <h4>¡Contacta con nosotros!</h4>
            </div>

            <div class="form50">
                <div class="col-md-6">
                    <input type="text" class="form-control text-start" placeholder="Nombre">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control text-start" placeholder="Correo">
                </div>
            </div>
            <div class="form50">
                <div class="col-md-6">
                    <input type="text" class="form-control text-start" placeholder="Teléfono">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control text-start" placeholder="Asunto">
                </div>
            </div>
            <div>
                <div>
                    <textarea class="form-control text-start" cols="30" rows="15" placeholder="Mensaje"></textarea>
                </div>
            </div>
            <input type="submit" value="Enviar mensaje">
        </div>

    </div>
    


    <?php include_once './footer.php'; ?>
