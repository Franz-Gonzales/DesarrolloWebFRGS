<?php

include('function.php');

if (isset($_GET['cadena'])) {

    $cadena = $_GET["cadena"];

    echo '<div class="container" style="background: #ff3;">';
    echo "<h3>La primera letra de la cadena es: " . primera_letra($cadena) . "</h3>";
    echo '<br>';
    echo "La palaba mas larga es: " . palabraMasLarga($cadena);
    echo '<br>';
    echo 'cadena en mayusculas: '. strtoupper($cadena);
    echo '<br>';
    echo 'cadena en mayusculas: '. strtolower($cadena);

    $palabras = explode(" ", $cadena);
    echo '<br>';
    echo "Palabras en la cadena: ". count($palabras);

    echo '<br>';
    echo "La cantidad de caracteres en la cadena son: " . strlen($cadena);

    // recorre la cadena de palabras que se aplicó con explode
    foreach($palabras as $palabra){
        echo '<br>';
        echo $palabra;
    }

    echo '<br>';
    echo 'La cadena invertida es: '.invertirCadena($cadena);

    $separa_comas = implode('-', $palabras);
    echo "<br> Las palabras separados con '-' : ".$separa_comas;

    echo '<br>';
    $resultado = sprintf('8x4 = %d <br> ', 8*4);
    echo $resultado."<br>";


    echo "Caracteres a sacar de la cadena: ". substr($cadena, 2, 5), "<br>";

    if(chop("Cadena \n\n") == "Cadena")
        echo "Iguales<br><br>";
        else
            echo "No iguales<br><br>";

    
    echo strpos($cadena, "web"), "<br><br>"; 
    
    //remplaza un caracter por otro caracter
    echo str_replace('b','y',$cadena),"<br>";      


    echo "</div>";

}
