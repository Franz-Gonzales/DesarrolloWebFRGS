<?php

    $operacion = $_GET['operacion'];
    $a = $_GET['a'];
    $b = $_GET['b'];

    switch ($operacion) {
        case 'suma':
            $c = $a + $b;
            break;
        case 'resta':
            $c = $a - $b;
            break;
        case 'multiplicacion':
            $c = $a * $b;
            break;
        case 'division':
            $c = $a / $b;
            break;
        default:
            $c = 0;
            break;
    }

    echo "El resultado de operacion es: " . $c;

?>