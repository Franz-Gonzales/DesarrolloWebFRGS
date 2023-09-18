<?php
// function eliminarmayores($array, $mayor) {
//     $nuevo_array = array();
//     foreach ($array as $valor) {
//         if ($valor >= $mayor) {
//             $nuevo_array[] = $valor;
//         }
//     }
//     return $nuevo_array;
// }



// function eliminarmayores($arreglo, $numero) {
//     $resultado = array();

//     foreach ($arreglo as $valor) {
//         if ($valor >= $numero) {
//             $resultado[] = $valor;
//         }
//     }

//     return $resultado;
// }


function eliminarmayores($numeros, $mayor)
{
    $resultado = array();

    foreach ($numeros as $numero) {
        if ($numero >= $mayor) {
            $resultado[] = $numero;
        }
    }

    return $resultado;
}
