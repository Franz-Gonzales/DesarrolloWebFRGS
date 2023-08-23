<?php

/*Crea la función en php que permita recibir una cadena de caracteres que contenga palabras separadas por espacios, la funcion se debe llamar Palabra mas Larga que devuelve la palabra mas larga.
luego crear un formulario que solicite una cadena y llame a la pagina procesar.php que llama a la funcion antes mencionada e imprima la palabra mas larga*/


function palabraMasLarga($cadena_text)
{
    //explode permite dividir la cadena en palabras separados por espacios
    $cadena_palabras = explode(" ", $cadena_text);
    $palabra_mas_larga = " ";
    foreach ($cadena_palabras as $palabras) {
        //strlen encuentra la longitud de cada palabra de la cadena en caracteres
        if (strlen($palabras) > strlen($palabra_mas_larga)) {
            $palabra_mas_larga = $palabras;
        }
    }

    return $palabra_mas_larga;
}
