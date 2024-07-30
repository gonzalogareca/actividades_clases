<?php
/*
// Inicializa la variable $puntos
$puntos = 0;

// Sentencia if
$compra = $_GET['c'];

if ($compra > 50 && $compra <= 100) {
    $puntos += 50;
} elseif ($compra > 100 && $compra <= 200) {
    $puntos += 15;
} elseif ($compra > 200 && $compra <= 500) {
    $puntos += 30; // Asigna puntos en este rango, cambia 25 por el valor deseado
}
else {
    $puntos=$puntos+60;
}
echo "cantidad de puntos" .$puntos;
/*

//----------------------------------------------------------------------------------------------

/*
//ejercicio clase jueves 


// Inicializa la variable $puntos
$puntos = 0;

// Sentencia ternaria para asignar puntos
$compra = $_GET['c'];

$puntos = ($compra > 50 && $compra <= 100) ? 50 :
          (($compra > 100 && $compra <= 200) ? 15 :
          (($compra > 200 && $compra <= 500) ? 30 :
          (($compra > 500 )? 60 : 0)));
          echo ("cantidad de puntos".$puntos);
          

echo "Cantidad de puntos: " . $puntos; */




//----------------------------------------------------------------------------------
// Inicializa la variable $puntos
$puntos = 0;

// Obtener el valor de la compra
$compra = $_GET['c'];

// Determinar los puntos usando switch y case
switch (true) {
    case ($compra > 50 && $compra <= 100):
        $puntos += 50;
        break;
    case ($compra > 100 && $compra <= 200):
        $puntos += 15;
        break;
    case ($compra > 200 && $compra <= 500):
        $puntos += 30;
        break;
    case ($compra > 500):
        $puntos += 60;
        break;
    default:
        
        break;

}

echo "Cantidad de puntos: " . $puntos;

//--------------------------------------------------------------------------------------------------


?>
