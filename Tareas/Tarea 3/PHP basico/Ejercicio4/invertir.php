<?php

/* 4.- Cree un programa  para solicitar una cadena por formularios y llame a  invertir.php que imprime  la cadena invertida. */

if($_SERVER["REQUEST_METHOD"] == "POST" ){
    if(isset($_POST["primeracadena"]) and isset($_POST["segundacadena"])){
        
        $cadena1 = $_POST["primeracadena"];
        $cadena2 = $_POST["segundacadena"];
    
        echo "<h2>Unir las dos cadenas obtenidas a una sola cadena e Invertir</h2>";
        function invertirCadena($cad1, $cad2){
            $cadena = $cad1." ".$cad2;
            $cadena_invertida = strrev($cadena);
            echo "<h3>La cadena obtenida es: {$cadena} </h3>";
            echo "<h3>La cadena invertida es: $cadena_invertida</h3";
        }
        invertirCadena($cadena1, $cadena2);
        // echo "La cadena invertida es: ".$cadena;

    }else{
        if(isset($_POST["cadena"])){

            /* Otra metodo de invertir una cadena con una sola cadena solicitado por el formulario  */
            $cadena_text = $_POST["cadena"];
            $cadena_invertida = strrev($cadena_text);
            echo "<h2>Invertir la cadena</h2>";
            echo "<h3>La cadena obtenida es: $cadena_text</h3>";
            echo "<h3>La cadena invertida es: $cadena_invertida</h3>";
        }
    }

}
