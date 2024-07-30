<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <style>
       
        html, body {
            font-family: Arial, sans-serif;
            background-color: #333; 
            margin: 0;
            padding: 0;
            color: #fff; 
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #444; /* Fondo gris más oscuro */
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: grid;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: calc(100% - 16px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 14px;
        }

        input[type="submit"] {
            width: auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            font-size: 14px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: -8px;
            margin-bottom: 10px;
        }

        .input-error {
            background-color: #ff3936; 
            border: 1px solid #ff0000; 
        }
    </style>
</head>
<body>

<?php
if (isset($_POST['bandera'])) {
    $camposRequeridos = [
        "nombre" => "Nombre",
        "apellido" => "Apellido",
        "correo" => "Correo",
        "comentario" => "Comentario",
        "idioma" => "Idioma",
        "musica" => "Música",
        "pasatiempo" => "Pasatiempo"
    ];

    $errores = [];

    function validarLongitudComentario($comentario) {
        return strlen($comentario) >= 5 && strlen($comentario) <= 50;
    }

    function validarCaracteresEspeciales($comentario) {
        return preg_match('/[*%&.@]/', $comentario) === 0;
    }

    function validarLongitudNombreApellido($valor) {
        return strlen($valor) > 3 && strlen($valor) < 20;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($camposRequeridos as $campo => $nombreCampo) {
            if (empty($_POST[$campo])) {
                $errores[$campo] = "El campo '$nombreCampo' no puede estar vacío.";
            } else {
                if ($campo === 'comentario') {
                    $comentario = $_POST[$campo];
                    if (!validarLongitudComentario($comentario)) {
                        $errores[$campo] = "El comentario debe tener entre 5 y 50 caracteres.";
                    }
                    if (!validarCaracteresEspeciales($comentario)) {
                        $errores[$campo] = "El comentario no puede contener /[*%&.@]/";
                    }
                }

                if ($campo === 'nombre' || $campo === 'apellido') {
                    $valor = $_POST[$campo];
                    if (!validarLongitudNombreApellido($valor)) {
                        $errores[$campo] = "El $nombreCampo debe tener entre 3 y 20 caracteres.";
                    }
                }
            }
        }

        if (empty($errores)) {
            echo "Formulario enviado exitosamente.<br>";
            foreach ($camposRequeridos as $campo => $nombreCampo) {
                if (is_array($_POST[$campo])) {
                    echo "$nombreCampo: " . implode(", ", array_map('htmlspecialchars', $_POST[$campo])) . "<br>";
                } else {
                    echo "$nombreCampo: " . htmlspecialchars($_POST[$campo]) . "<br>";
                }
            }
        }
    }
}
?>

<div class="container">
    <h2>Formulario</h2>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>" class="<?php echo isset($errores['nombre']) ? 'input-error' : ''; ?>">
        <?php if (isset($errores['nombre'])) echo '<p class="error">' . $errores['nombre'] . '</p>'; ?>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo isset($_POST['apellido']) ? htmlspecialchars($_POST['apellido']) : ''; ?>" class="<?php echo isset($errores['apellido']) ? 'input-error' : ''; ?>">
        <?php if (isset($errores['apellido'])) echo '<p class="error">' . $errores['apellido'] . '</p>'; ?>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" placeholder="Correo" value="<?php echo isset($_POST['correo']) ? htmlspecialchars($_POST['correo']) : ''; ?>" class="<?php echo isset($errores['correo']) ? 'input-error' : ''; ?>">
        <?php if (isset($errores['correo'])) echo '<p class="error">' . $errores['correo'] . '</p>'; ?>

        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" placeholder="Comentario" class="<?php echo isset($errores['comentario']) ? 'input-error' : ''; ?>"><?php echo isset($_POST['comentario']) ? htmlspecialchars($_POST['comentario']) : ''; ?></textarea>
        <?php if (isset($errores['comentario'])) echo '<p class="error">' . $errores['comentario'] . '</p>'; ?>

        <label for="idioma">Idioma:</label>
        <select id="idioma" name="idioma" class="<?php echo isset($errores['idioma']) ? 'input-error' : ''; ?>">
            <option value="">Selecciona un idioma</option>
            <option value="español" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'español') ? 'selected' : ''; ?>>Español</option>
            <option value="ingles" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'ingles') ? 'selected' : ''; ?>>Inglés</option>
            <option value="frances" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'frances') ? 'selected' : ''; ?>>Francés</option>
        </select>
        <?php if (isset($errores['idioma'])) echo '<p class="error">' . $errores['idioma'] . '</p>'; ?>

        <label>Música:</label>
        <div>
            <input type="radio" id="rock" name="musica" value="rock" <?php echo (isset($_POST['musica']) && $_POST['musica'] == 'rock') ? 'checked' : ''; ?>>
            <label for="rock">Rock</label>
            <input type="radio" id="pop" name="musica" value="pop" <?php echo (isset($_POST['musica']) && $_POST['musica'] == 'pop') ? 'checked' : ''; ?>>
            <label for="pop">Pop</label>
            <input type="radio" id="jazz" name="musica" value="jazz" <?php echo (isset($_POST['musica']) && $_POST['musica'] == 'jazz') ? 'checked' : ''; ?>>
            <label for="jazz">Jazz</label>
        </div>
        <?php if (isset($errores['musica'])) echo '<p class="error">' . $errores['musica'] . '</p>'; ?>

        <label>Pasatiempos:</label>
        <div>
            <input type="checkbox" id="leer" name="pasatiempo[]" value="leer" <?php echo (isset($_POST['pasatiempo']) && in_array('leer', $_POST['pasatiempo'])) ? 'checked' : ''; ?>>
            <label for="leer">Leer</label>
            <input type="checkbox" id="deportes" name="pasatiempo[]" value="deportes" <?php echo (isset($_POST['pasatiempo']) && in_array('deportes', $_POST['pasatiempo'])) ? 'checked' : ''; ?>>
            <label for="deportes">Deportes</label>
            <input type="checkbox" id="musica" name="pasatiempo[]" value="musica" <?php echo (isset($_POST['pasatiempo']) && in_array('musica', $_POST['pasatiempo'])) ? 'checked' : ''; ?>>
            <label for="musica">Música</label>
        </div>
        <?php if (isset($errores['pasatiempo'])) echo '<p class="error">' . $errores['pasatiempo'] . '</p>'; ?>

        <input type="submit" name="bandera" value="Enviar">
    </form>
</div>

</body>
</html>
