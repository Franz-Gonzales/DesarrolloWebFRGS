<?php
/* Genera un arreglo de números del 1 al 20. Luego, utiliza un ciclo foreach para separar los números en dos arreglos diferentes: uno para los números pares y otro para los números impares. Imprime ambos arreglos al final. */

// $array_numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

$array_numeros = range(1, 20);

$array_pares = [];
$array_impares = [];

foreach ($array_numeros as $numero) {
    if ($numero % 2 == 0) {
        array_push($array_pares, $numero);
    } else {
        array_push($array_impares, $numero);
    }
}

echo "<h2>Recorrer un arreglo de numeros de 1-20</h2>";
echo "<h3>Los números del Array son: [";
foreach ($array_numeros as $numeros) {
    // echo "Número: {$numeros} <br>";
    echo $numeros . " ";
}
echo "]</h3>";

// Mostrar los pares en un nuevo arreglo
echo "<h3>Arreglo de Pares: [ ";
foreach ($array_pares as $numeros_pares) {
    echo $numeros_pares . " ";
}
echo "]</h3><hr/>";

echo "<br>";

// Mostrar los impares en un nuevo arreglo
echo "<h3>Arreglo de Impares: [ ";
foreach ($array_impares as $numeros_impares) {
    echo $numeros_impares . " ";
}
echo "]</h3><hr/>";
echo "<br>";




/* OTRA FORMA DE HACER */
/*$arrayNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

$arrayPares = [];
$arrayImmpares = [];

foreach ($arrayNumeros as $numeros) {
    if ($numeros % 2 !== 0){
        $arrayImmpares[] = $numeros;
    }else{
        $arrayPares[] = $numeros;
    }
}

echo "Números Pares son: ";
foreach ($arrayPares as $num_par){
    echo $num_par . " ";
}

echo "<br>";

echo "Números Impares son: ";
foreach ($arrayImmpares as $num_impar){
    echo $num_impar . " ";
}*/
