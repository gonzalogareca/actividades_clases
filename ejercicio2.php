<?php
$cliente="Gonzalo Gareca";

//saber tamaño de la cadena
print(strlen($cliente));
echo "<br>";
var_dump($cliente);

//limpiar espacios en blanco
$texto="Gonzalo Gareca";
var_dump($texto);
$texto2=strlen(trim($texto));
echo $texto2."<br>";

//convertir mayusculas a minusculas
echo (strtolower($cliente));
echo "<br>";
echo (strtoupper($texto));
var_dump(strtolower($cliente)===strtolower($texto));

//reemplazar

echo "<br>";
echo str_replace("Juan","Jose",$cliente);

//buscar posicion

echo "<br>";
echo strpos($cliente,"Pedro");

//Buscar

echo substr_count($cliente,"e");

//dividir cadena
$cadena = explode(" ", $texto);
var_dump($cadena);

//unir cadena

echo "<br>";
$cadena=implode("e",$cadena);
var_dump($cadena);

//ejercicio de clase martes

$usuario = "administrador";
$contraseña = "75141619";
$Repetir = "75141619";
echo "<br>";
// Mostrar las variables
echo "Usuario: " . $usuario . "<br>";
echo "Contraseña: " . $contraseña . "<br>";
echo "Repetir Contraseña: " . $Repetir . "<br>";
////
//dividir cadena
$cadena=explode("i",$usuario);
var_dump($cadena);
//unir cadena
//echo "<br>";
//$cadena=implode("e",$cadena);
//var_dump($cadena);
//True o False
echo "<br>";
var_dump($contraseña===$Repetir);
//Buscar posicion
echo "<br>";
echo substr_count($cadena[0],"m");
echo "<br>";
echo substr_count($cadena[1],"m");
echo "<br>";
echo substr_count($cadena[2],"m");

?>


