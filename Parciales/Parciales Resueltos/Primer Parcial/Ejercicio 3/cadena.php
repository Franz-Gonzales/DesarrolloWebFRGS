<?php

    
    $cadena1 = $_POST["cadena1"];
    $cadena2 = $_POST["cadena2"];

    function comprobar_cadenas($cadena1, $cadena2){

    
        if (strpos($cadena1, $cadena2) !== false) {

            $resultado = "<h2>".$cadena1 . " tiene la palabra " . $cadena2."</h2>" . "<br>";

            // $resultado .= "Cadena resultante: " . str_replace($cadena2, "", $cadena1);
        } else {
    
            $resultado = "<h2>".$cadena1 . " no tiene la palabra " . $cadena2."</h2>";
        }
    
        echo $resultado;
    }

    comprobar_cadenas($cadena1, $cadena2);

?>
