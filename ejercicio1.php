<?php
// Datos personales
$nombre = "Gonzalo";
$talla = "1.72";
$peso = "68";
$musica = array("rock", "electronica");
$bandera = true;

print("nombre: " . $nombre . "<br>");
printf("talla: " . $talla . "<br>");
print_r("peso: " . $peso . "<br>");
echo("bandera: " . $bandera . "<br>");
var_dump($musica);

//operadores
$a=$_GET['a'];
$b=$_GET['b'];

$a=4;
$b=3;
echo ("el resultado de la suma es:".$a+$b);
echo ("el resultado de la suma es:".$a-$b);
echo ("el resultado de la suma es:".$a*$b);
echo ("el resultado de la suma es:".$a/$b);
echo ("el resultado de la suma es:".$a%$b);

//comparativos


var_dump($a>$b);
echo "<br>";
var_dump($a<$b);
echo "<br>";
var_dump($a<=$b);
echo "<br>";
var_dump($a>=$b);
echo "<br>";
var_dump($a==$b);
echo "<br>";
var_dump($a===$b);;
echo "<br>";
var_dump($a<=>$b);
echo "<br>";


// Ejercicio de clase
echo "<br>Ejercicio de clase<br>";

// Crear dos arrays
$array1 = array('A', 'B', 'C');

// Recibir valores del navegador
$array2 = array();
if (isset($_GET['A']) && isset($_GET['B']) && isset($_GET['C'])) {
    $array2[0] = $_GET['A'];
    $array2[1] = $_GET['B'];
    $array2[2] = $_GET['C'];
} else {
    echo "Por favor, proporciona los valores de A, B, y C en la URL.";
    exit;
}

// Imprimir arrays
echo "Array1: ";
print_r($array1);
echo "<br>";
echo "Array2: ";
print_r($array2);
echo "<br>";

// Comparativas
echo "<br>Comparativas:<br>";

// Comparar A y B
echo "Comparando A y B:<br>";
echo $array1[0] . " > " . $array1[1] . ": ";
var_dump($array2[0] > $array2[1]);
echo "<br>";
echo $array1[0] . " < " . $array1[1] . ": ";
var_dump($array2[0] < $array2[1]);
echo "<br>";
echo $array1[0] . " == " . $array1[1] . ": ";
var_dump($array2[0] == $array2[1]);
echo "<br>";

// Comparar A y C
echo "<br>Comparando A y C:<br>";
echo $array1[0] . " > " . $array1[2] . ": ";
var_dump($array2[0] > $array2[2]);
echo "<br>";
echo $array1[0] . " < " . $array1[2] . ": ";
var_dump($array2[0] < $array2[2]);
echo "<br>";
echo $array1[0] . " == " . $array1[2] . ": ";
var_dump($array2[0] == $array2[2]);
echo "<br>";

// Comparar B y A
echo "<br>Comparando B y A:<br>";
echo $array1[1] . " > " . $array1[0] . ": ";
var_dump($array2[1] > $array2[0]);
echo "<br>";
echo $array1[1] . " < " . $array1[0] . ": ";
var_dump($array2[1] < $array2[0]);
echo "<br>";
echo $array1[1] . " == " . $array1[0] . ": ";
var_dump($array2[1] == $array2[0]);
echo "<br>";

// Comparar B y C
echo "<br>Comparando B y C:<br>";
echo $array1[1] . " > " . $array1[2] . ": ";
var_dump($array2[1] > $array2[2]);
echo "<br>";
echo $array1[1] . " < " . $array1[2] . ": ";
var_dump($array2[1] < $array2[2]);
echo "<br>";
echo $array1[1] . " == " . $array1[2] . ": ";
var_dump($array2[1] == $array2[2]);
echo "<br>";

// Comparar C y A
echo "<br>Comparando C y A:<br>";
echo $array1[2] . " > " . $array1[0] . ": ";
var_dump($array2[2] > $array2[0]);
echo "<br>";
echo $array1[2] . " < " . $array1[0] . ": ";
var_dump($array2[2] < $array2[0]);
echo "<br>";
echo $array1[2] . " == " . $array1[0] . ": ";
var_dump($array2[2] == $array2[0]);
echo "<br>";

// Comparar C y B
echo "<br>Comparando C y B:<br>";
echo $array1[2] . " > " . $array1[1] . ": ";
var_dump($array2[2] > $array2[1]);
echo "<br>";
echo $array1[2] . " < " . $array1[1] . ": ";
var_dump($array2[2] < $array2[1]);
echo "<br>";
echo $array1[2] . " == " . $array1[1] . ": ";
var_dump($array2[2] == $array2[1]);



?>

