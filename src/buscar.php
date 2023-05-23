    <?php
    // Verificar si se ha enviado una consulta
    if (isset($_GET['consulta'])) {
        // Obtener la consulta del formulario
        $consulta = $_GET['consulta'];

        // Aquí puedes realizar la lógica de búsqueda según tus necesidades.
        // Por ejemplo, podrías ejecutar una consulta en una base de datos.

        // Mostrar los resultados
        echo "<h2>Resultados de búsqueda para: $consulta</h2>";

        // Aquí puedes mostrar los resultados obtenidos de la búsqueda.
        // Puedes utilizar un bucle para mostrar cada resultado.

        // Ejemplo de resultado
        echo "<p>Resultado 1</p>";
        echo "<p>Resultado 2</p>";
        echo "<p>Resultado 3</p>";
    }
    ?>
