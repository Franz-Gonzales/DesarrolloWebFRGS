<?php
// $n = $_POST['n'];
// $mayor = $_POST['mayor'];
// $array = array();
// for ($i = 0; $i < $n; $i++) {
//     $array[] = rand(1, 100); // llenar el vector con números aleatorios entre 1 y 100
// }

// require 'eliminarmayores.php';
// $resultado = eliminarmayores($array, $mayor);

// // Redirecciona a eliminar.php
// header("Location: eliminar.php?resultado=" . implode(',', $resultado));



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $numero = $_POST["numero"];
//     $arreglo = array();

//     // Llenar el arreglo con valores aleatorios entre 1 y 100
//     for ($i = 0; $i < $numero; $i++) {
//         $arreglo[] = rand(1, 100);
//     }

//     // Redirigir a eliminar.php con los datos
//     header("Location: eliminar.php?numero=$numero&arreglo=" . implode(",", $arreglo));
//     exit();
// }




$n = $_POST['n'];
$numero = $_POST['numero'];
$mayor = $_POST['mayor'];

$numeros = array();

for($i = 0; $i < $n; $i++) {
   $numeros[] = $numero;
}

// Redireccionar a eliminar.php con los datos introducidos
header("Location: eliminar.php?numeros=".urlencode(serialize($numeros))."&mayor=".$mayor);


?>

