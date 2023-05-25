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
            <input type="submit" value="Enviar mensaje" onclick="sendMessage()">
        </div>
    </div>
    <p id="alert-message" class="register-message"></p>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.468020003329!2d2.1659432321837278!3d41.385641364352495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f363144023%3A0xf75eff2ca4d80986!2sC.%20de%20Pelai%2C%207%2C%2008001%20Barcelona!5e0!3m2!1ses!2ses!4v1684937470887!5m2!1ses!2ses" width="100%" height="450" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <?php include_once './footer.php'; ?>
    <script src="./js/contacto.js"></script>
    
