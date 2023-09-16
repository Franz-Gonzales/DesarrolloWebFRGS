<?php
$numeros = $_POST["numeros"];
$mayor = $_POST["mayor"];


function eliminar($numeros, $mayor)
{

    foreach ($numeros as $numero) {

        if ($numero < $mayor) {
            $numeros_menores[] = $numero;
        }
    }
    return $numeros_menores;
}

?>
<h1>Los numeros menores al número <?php echo $mayor ?> es:</h1>
<?php

$numeros_m = eliminar($numeros, $mayor);
foreach ($numeros_m as $num) {
    echo $num . "<br>";
}

?>