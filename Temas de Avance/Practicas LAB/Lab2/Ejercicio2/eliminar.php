<?php
// $resultado = explode(',', $_GET['resultado']); // obtener el array del query string
// echo "Elementos del array mayores o iguales a 'mayor': " . implode(', ', $resultado);



// if (isset($_GET["numero"]) && isset($_GET["arreglo"])) {
//     $numero = $_GET["numero"];
//     $arreglo = explode(",", $_GET["arreglo"]);
    
//     // Incluir la función eliminarmayores.php
//     include 'eliminarmayores.php';

//     // Llamar a la función eliminarmayores y obtener el resultado
//     $resultado = eliminarmayores($arreglo, $numero);
    
//     // Imprimir el resultado
//     echo "Arreglo original: " . implode(", ", $arreglo) . "<br>";
//     echo "Resultado: " . implode(", ", $resultado);
// } else {
//     echo "Los datos no fueron proporcionados correctamente.";
// }




$numeros = unserialize(urldecode($_GET['numeros']));
$mayor = $_GET['mayor'];

include("eliminarmayores.php");

$resultado = eliminarmayores($numeros, $mayor);

echo "El resultado después de eliminar los elementos menores a ".$mayor." es: ";
print_r($resultado);


?>

