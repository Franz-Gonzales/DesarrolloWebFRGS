<?php

$numeros = $_GET['numeros'];

function multiplicar($numeros){
    $result_mul = 1;
    foreach ($numeros as $numero) {
        $result_mul *= $numero;
    }
    return $result_mul;
}

echo "El resultado de la Multiplicación es: " . multiplicar($numeros);


?>