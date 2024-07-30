<?php
// Datos personales
$nombre = "Gonzalo";
$apellido = "Gareca";
$carrera = "Ing. Sistemas";
$ubicacion = "España";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Personal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 80px auto 0; 
            background-color: #333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        h1 {
            text-align: center;
        }
        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Información Personal</h1>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Apellido:</strong> <?php echo $apellido; ?></p>
        <p><strong>Carrera:</strong> <?php echo $carrera; ?></p>
        <p><strong>Ubicación:</strong> <?php echo $ubicacion; ?></p>
    </div>
</body>
</html>
