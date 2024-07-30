<?php
session_start();
if (!isset($_SESSION['name']) || !isset($_SESSION['file_data'])) {
    header("Location: ejercicioPracticaArchivo.php");
    exit;
}

$name = $_SESSION['name'];
$fileData = $_SESSION['file_data'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
</head>
<body>
    <h2>Datos del Formulario</h2>
    <p>Nombre: <?php echo $name; ?></p>
    <h3>Imagen Subida</h3>
    <img src="data:image/png;base64,<?php echo $fileData; ?>" alt="Imagen" style="max-width:600px;">
</body>
</html>