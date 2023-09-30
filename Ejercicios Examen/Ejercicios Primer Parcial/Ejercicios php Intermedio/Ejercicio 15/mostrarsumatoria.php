<?php
    include('funciones.php');

    $n = $_GET['n'];

    echo "La suma de los primeros $n términos de la serie de Fibonacci es: " . fibonacci($n);
?>