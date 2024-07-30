<?php


function crearPagoMensual($mes, $cantidad) {
    return [
        'mes' => $mes,
        'cantidad' => $cantidad
    ];
}

function calcularPagos($meses) {
    $pagos = [];
    $totalPagado = 0;

    // Calcular 
    for ($i = 0; $i < $meses; $i++) {
        $cantidad = 10 * pow(2, $i);  
        $pagos[] = crearPagoMensual($i + 1, $cantidad);
        $totalPagado += $cantidad;
    }

    return [$pagos, $totalPagado];
}

//Llama a la función calcularPagos con el argumento 20
$MESES = 20;
list($pagos, $totalPagado) = calcularPagos($MESES);

// Mostrar los pagos mensuales
echo "Pagos mensuales:\n";
foreach ($pagos as $pago) {
    echo "Mes {$pago['mes']}: {$pago['cantidad']} bs\n";
}

// Mostrar el total pagado
echo "\nTotal pagado después de {$MESES} meses: {$totalPagado} bs\n";

?>
