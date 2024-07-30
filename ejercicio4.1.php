<?php
// Obtención de los parámetros de la URL
$inferior = $_GET['i'];
$superior = $_GET['s'];
$c = 0;

// Bucle while para iterar desde $inferior hasta $superior
while ($inferior <= $superior) {
    echo $inferior . "<br>";  // Agregar salto de línea para mejor visualización
    if ($inferior % 7 == 0) {
        $c++;
    }
    $inferior++;
}

//foreach
$electrodomesticos=[
    ["nombre"=>"Televisor",
    "precio"=>400,
    "estado"=>true],
    [
     "nombre"=>"heladera",
     "precio"=>200,
     "estado"=>false],
    [
    "nombre"=>"bicicleta",
    "precio"=>100,
    "estado"=>true],
    ];
    foreach ($electrodomesticos as $productos) {
        # code...
        //mostramos cada uno de los productos
        echo $productos['nombre']."<br>";
        echo $productos['precio']."<br>";
        echo ($productos['estado'])? "Disponible" . "<br>": "No Disponible"."<br>";
    }
    echo"<pre>";
    var_dump($electrodomesticos);

?>




