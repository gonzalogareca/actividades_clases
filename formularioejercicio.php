<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="carrera">Carrera:</label><br>
        <input type="text" id="carrera" name="carrera" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $carrera = trim($_POST['carrera']);

        if (!empty($nombre) && !empty($apellido) && !empty($carrera)) {
            $archivo = "registro.txt";
            $datos = fopen($archivo, "a+");
            fwrite($datos, "Nombre: $nombre\nApellido: $apellido\nCarrera: $carrera\n\n");
            fclose($datos);
            echo "<p style='color: blue;'>Datos guardados correctamente.</p>";
        } else {
            echo "<p style='color: red;'>Por favor, complete todos los campos.</p>";
        }
    }
    ?>
</body>
</html>
