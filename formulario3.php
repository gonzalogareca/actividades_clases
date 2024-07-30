<?php
if (isset($_POST['bandera'])) {
    // Verifica si el archivo fue subido
    if (isset($_FILES['archivo'])) {
        $nombreArchivo = $_FILES['archivo']['name'];
        $tipoArchivo = $_FILES['archivo']['type'];
        $tamanoArchivo = $_FILES['archivo']['size'];
        $nombreTemporal = $_FILES['archivo']['tmp_name'];
        $errorArchivo = $_FILES['archivo']['error'];

        // Mostrar información del archivo
        echo "Filename  : " . htmlspecialchars($nombreArchivo) . "<br>";
        echo "Type  : " . htmlspecialchars($tipoArchivo) . "<br>";
        echo "Size  : " . htmlspecialchars($tamanoArchivo) . " bytes<br>";
        echo "Temp name  : " . htmlspecialchars($nombreTemporal) . "<br>";
        echo "Error  : " . htmlspecialchars($errorArchivo) . "<br>";
    } else {
        echo "No file uploaded.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" id="">
        <input type="submit" name="bandera" value="Enviar">
    </form>
</body>
</html>




