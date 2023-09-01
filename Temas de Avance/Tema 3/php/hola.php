<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hola mundo";

        for ($i=0; $i < 10; $i++) { 
            # code...
            
            echo "linea".$i, "<br>";
        }

         // factorial de un numero 
         $n=6;
         $acum=1;
         
         for ($i=1; $i <= $n; $i++) {
            $acum*=$i;
        }

        echo "EL factorial del numero ".$n, "es: " .$acum;
    ?>
</body>
</html>