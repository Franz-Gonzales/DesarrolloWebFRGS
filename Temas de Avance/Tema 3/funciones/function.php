<?php

function primera_letra($cadena){

    return substr($cadena, 0, 1);
}

function palabraMasLarga($cadena){
    $palabras = explode(" ", $cadena);
    $palabra_mas_larga = '';
    foreach ($palabras as $palabra){
        if(strlen($palabra) > strlen($palabra_mas_larga)){
            $palabra_mas_larga = $palabra;
        }
    }
    return $palabra_mas_larga;
}

function invertirCadena($cadena){
    return strrev($cadena);
}

?>