<?php
$archivo = "prueba.txt";
echo (touch($archivo)) ? "Archivo existe" : "Archivo no existe";

$datos = fopen($archivo, "w");
var_dump($datos);
fclose($datos);

if (touch($archivo)) {
    $datos = fopen($archivo, "a+");
    fwrite($datos, "hoy es lunes\n");
    fwrite($datos, "hoy es lunes de clases\n");
    fclose($datos);
}

$datos = fopen($archivo, "r");
while (!feof($datos)) {
    $linea = fgets($datos, 1024);
    echo $linea . "<br>";
}
fclose($datos);
?>
