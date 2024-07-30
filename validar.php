<?php
// Lista de campos requeridos
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

function validarLongitud($valor, $min, $max) {
    $longitud = strlen($valor);
    return $longitud >= $min && $longitud <= $max;
}

function validarCaracteresEspeciales($valor) {
    return preg_match('/[*%&.@]/', $valor) === 0;
}

// Validar cada campo
foreach ($camposRequeridos as $campo => $nombreCampo) {
    if (empty($_POST[$campo])) {
        $errores[$campo] = "El campo '$nombreCampo' no puede estar vacío.";
    } else {
        $valor = $_POST[$campo];

        switch ($campo) {
            case 'nombre':
            case 'apellido':
                if (!validarLongitud($valor, 3, 20)) {
                    $errores[$campo] = "El $nombreCampo debe tener entre 3 y 20 caracteres.";
                }
                break;
            case 'correo':
                if (!filter_var($valor, FILTER_VALIDATE_EMAIL)) {
                    $errores[$campo] = "Por favor, ingresa un correo electrónico válido.";
                }
                break;
            case 'comentario':
                if (!validarLongitud($valor, 5, 50)) {
                    $errores[$campo] = "El comentario debe tener entre 5 y 50 caracteres.";
                }
                if (!validarCaracteresEspeciales($valor)) {
                    $errores[$campo] = "El comentario no puede contener caracteres especiales como * % & . @";
                }
                break;
            case 'idioma':
                // Puedes agregar validaciones específicas para el idioma si es necesario
                break;
            case 'musica':
            case 'pasatiempo':
                if (!is_array($valor) || count($valor) === 0) {
                    $errores[$campo] = "Por favor, selecciona al menos una opción para $nombreCampo.";
                }
                break;
            default:
                break;
        }
    }
}

// Mostrar errores o éxito
if (!empty($errores)) {
    echo "Se encontraron los siguientes errores:<br>";
    foreach ($errores as $error) {
        echo "<span style='color: red;'>$error</span><br>";
    }
} else {
    echo "Formulario enviado exitosamente.<br>";
    foreach ($camposRequeridos as $campo => $nombreCampo) {
        if (is_array($_POST[$campo])) {
            echo "$nombreCampo: " . implode(", ", array_map('htmlspecialchars', $_POST[$campo])) . "<br>";
        } else {
            echo "$nombreCampo: " . htmlspecialchars($_POST[$campo]) . "<br>";
        }
    }
}
?>
