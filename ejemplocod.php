<?php
// Inicializa la variable $puntos
$puntos = 0;

// Sentencia ternaria para asignar puntos
$compra = $_GET['c'];

$puntos = ($compra > 50 && $compra <= 100) ? 50 :
          (($compra > 100 && $compra <= 200) ? 15 :
          (($compra > 200 && $compra <= 500) ? 30 : 60));
          

echo "Cantidad de puntos: " . $puntos;
?>
