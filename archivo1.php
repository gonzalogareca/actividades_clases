<?php
// Validar archivos
$carpeta = "prueba/";
$archivo = "ejercicio1.php";
$rutaCompleta = $carpeta . $archivo;

// Verificar si el archivo existe
echo (file_exists($rutaCompleta)) ? "archivo existente" : "archivo no existe";
echo "<br>";

// Verificar si es un archivo
echo (is_file($rutaCompleta)) ? "archivo existente " : "no es un archivo existente";
echo "<br>";

// Verificar si el directorio existe
echo (is_dir($carpeta)) ? "carpeta existente" : "la carpeta no existe";
echo "<br>";

// Inicializar variables
$mb = 0;
$creado_fecha = '';
$modificado_fecha = '';

// Obtener información del archivo imagen1.jpeg
$archivo2 = "imagen1.jpeg";
$rutaArchivo2 = $carpeta . $archivo2;
if (file_exists($rutaArchivo2)) {
    $size = filesize($rutaArchivo2);
    $kb = $size / 1024;
    $mb = $kb / 1024;
    $creado = filectime($rutaArchivo2);
    $creado_fecha = date("d/m/y H:i:s", $creado);
    $modificado = filemtime($rutaArchivo2);
    $modificado_fecha = date("d/m/y H:i:s", $modificado);
} else {
    echo "archivo no existe";
}

echo "<br>";
echo "tamaño : " . $mb . " MB<br>";
echo "creado  : " . $creado_fecha . "<br>";
echo "modificado : " . $modificado_fecha . "<br>";
?>
