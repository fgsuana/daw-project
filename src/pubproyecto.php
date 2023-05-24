<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de trabajo</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body>
    <header>
    <?php include 'header.php'; ?>
    </header>
    
    <div class="inputformproyecto d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="container">
            <h1 class="colorwhite text-center">Formulario para crear un proyecto</h1>
            <form action="#" method="POST">
            <div class="form-group text-center">
                <label class="colorwhite mt-3" for="nombre-proyecto">Nombre del proyecto</label>
                <input type="text" class="form-control" id="nombre-proyecto" name="nombre-proyecto" required>
            </div>
        
            <div class="form-group text-center">
                <label class="colorwhite mt-3" for="puestos-libres">Puestos libres o desarrolladores necesarios</label>
                <input type="text" class="form-control" id="puestos-libres" name="puestos-libres" required>
            </div>
        
            <div class="form-group text-center">
                <label class="colorwhite mt-3" for="categoria-proyecto">Categoría del proyecto</label>
                <select class="form-control" id="categoria-proyecto" name="categoria-proyecto" required>
                <option class="text-center" value="" selected>Seleccione una categoría</option>
                <option class="text-center" value="Front-end">Front-end</option>
                <option class="text-center" value="Back-end">Back-end</option>
                </select>
            </div>
        
            <div class="form-group text-center">
                <label class="colorwhite mt-3" for="descripcion-proyecto">Descripción del proyecto</label>
                <textarea class="form-control" id="descripcion-proyecto" name="descripcion-proyecto" rows="5" required></textarea>
            </div>
            
            <div class="text-center">
                <button type="submit" class="botonenviar mt-3">Crear proyecto</button>
            </div>
            </form>
        </div>
    </div>

    </main>

    <?php include_once './footer.php'; ?>
