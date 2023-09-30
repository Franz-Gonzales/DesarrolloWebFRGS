<?php

if ($_GET) {
    $b = $_GET['b'];
    $h = $_GET['h'];

    function calcularArea($b, $h)
    {
        $area = ($b * $h) / 2;
        return $area;
    }

    $area = calcularArea($b, $h);

    echo "<p>El Area del triangulo es: $area </p>";
}
