<?php
$producto = $_GET['nombre'];
$monto = $_GET['cantidad'];
$edad = $_GET['edad'];
$iva = $_GET['iva'];
$monto_iva = 0;

// funciones
/*function mostrar($mensaje)
{
    //$mensaje="Hola Buen Dia";
    echo $mensaje;
}
mostrar(1);*/
// compra 13%
// venta 3%
function ConIva($monto) {
    // echo $mensaje;
    $monto_iva = $monto + ($monto * 0.13);
    return $monto_iva;
}
// mostrar(1);
function SinIva($monto) {
    $monto_iva = $monto - ($monto * 0.13);
    return $monto_iva;
}

// Usando el operador ternario correctamente
echo "Resultado: " . ($iva ? ConIva($monto) : SinIva($monto));
echo "<br>";
echo "Edad: " . ($edad >= 18 ? "Puedes realizar la compra" : "No puedes realizar la compra");


//EJERCICIO NRO2
//ARRAY DE NOTAS Y CLACULAR EL PROMEDIO DE 10 ESTUDIANTES

function promedio(int ...$notas) {
    $suma = 0;
    foreach ($notas as $nota) {
        $suma += $nota;
    }
    return $suma / count($notas);
    //yield $suma;
    //yield $nota;
}

$promedioNotas = promedio(45, 57, 34, 23, 69); // Se redondearon los valores decimales para cumplir con la declaración de enteros
echo "El promedio de notas es: " . $promedioNotas;


//ejercicio de clase viernes

// Recibir el texto a analizar
$texto = $_GET['texto'];

// Función para contar palabras
function contarPalabras($texto) {
    $palabras = str_word_count($texto, 1);
    return count($palabras);
}

// Función para contar caracteres
function contarCaracteres($texto) {
    return strlen($texto);
}

// Función para contar frecuencia de palabras
function frecuenciaLetras($texto) {
    $texto = preg_replace('/[^a-záéíóúüñ]/iu', '', strtolower($texto));
    $letras = str_split($texto);
    $frecuencia = array_count_values($letras);
    ksort($frecuencia);
    return $frecuencia;
}

// Mostrar resultados
echo "Texto: " . $texto . "<br>";
echo "Número de palabras: " . contarPalabras($texto) . "<br>";
echo "Número de caracteres: " . contarCaracteres($texto) . "<br>";
echo "Frecuencia de palabras:<br>";

$frecuencia = frecuenciaLetras($texto);
foreach ($frecuencia as $palabra => $count) {
    echo $palabra . ": " . $count . "<br>";
}
?>

