<?php
/*Realizar un programa en php llamado funciones.php que contiene la función fibonaci(n) 
que calcula la sumatoria de un numero n  dado. 
Ejemplo para n=5 el fibonci  es 5, serie 0,1,1,2,3,5 */


function fibonacci($n)
{

    $suma = 0;
    $fibonacci = [0, 1];
    $resultado = [];
    $max = 0;

    if ($n == 0) {
        return 0;
    }
    if ($n == 1) {
        return 1;
    }

    // return fibonacci($n - 1) + fibonacci($n - 2);

    for ($i = 2; $i <= $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    echo "La serie de números es: ";
    for ($i = 0; $i <= $n; $i++) {
        echo $fibonacci[$i] . ", ";
        array_push($resultado, $fibonacci[$i]);
        $suma += $fibonacci[$i];
    }

    $max = max($resultado);
    echo "<br>";
    echo "El Fibonacci de $n es: $max";
    echo "<br>";

    return $suma;
}

