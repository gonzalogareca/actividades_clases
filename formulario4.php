<?php

if (isset($_POST['bandera'])) {

    $name = $_POST['name'];
    $expediente = $_FILES['expediente'];
    $file = $_FILES['file'];

    $errors = [];

    if ($expediente['type'] !== 'application/pdf') {
        $errors[] = "El expediente debe ser un archivo PDF.";
    }

    $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if ($fileExtension !== 'png') {
        $errors[] = "El archivo debe ser una imagen PNG.";
    }
    if ($expediente['size'] > 10 * 1024 * 1024) { 
        $errors[] = "El tamaño del expediente debe ser menor a 10MB.";
    }
    if ($file['size'] > 22 * 1024 * 1024) {
        $errors[] = "El tamaño de la imagen debe ser menor a 2MB.";
    }


    // Mostrando datos
    if (empty($errors)) {
    
       
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['file_data'] = base64_encode(file_get_contents($file['tmp_name']));
        header("Location: mostrardatos.php");
    } else {
        
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Subida de Archivo</title>
</head>
<body>
    <h2>Subir un Archivo</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <br><br>

        <label for="expediente">Expediente (PDF):</label>
        <input type="file" name="expediente" id="expediente" accept="application/pdf" required>
        <br><br>

        <label for="file">Selecciona un archivo:</label>
        <input type="file" name="file" id="file" accept="image/png" required>
        <br><br>

        <input type="hidden" name="bandera">
        <input type="submit" value="Subir Archivo">
    </form>
</body>
</html>