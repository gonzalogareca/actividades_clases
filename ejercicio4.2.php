<?php
// Obtener la fecha ingresada desde la URL
$fecha_ingresada = isset($_GET['fecha']) ? $_GET['fecha'] : '';

// Convertir la fecha ingresada en un objeto DateTime
$fecha = DateTime::createFromFormat('Y-m-d', $fecha_ingresada);

// Definir las fechas de inicio y fin del verano (en formato fijo para todos los años)
$inicio_verano = DateTime::createFromFormat('Y-m-d', date('Y') . '-06-21');
$fin_verano = DateTime::createFromFormat('Y-m-d', date('Y') . '-09-21');

// Verificar si la fecha está dentro del rango del verano
if ($fecha && $fecha >= $inicio_verano && $fecha <= $fin_verano) {
    echo "Es verano";
} else {
    echo "No es verano";
}
?>