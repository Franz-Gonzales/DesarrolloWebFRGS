<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = array('a', 'b', 'c', 'd');



    $letras2 = ['a', 'b', 'c', 'd'];
    echo "<br>";
    echo "<h1> Recorrer con el ciclo foreach indeces </h1>";
    foreach ($letras2 as $indece => $elemento){
        echo $indece . " - " . $elemento . "<br>";
    }

    ?>
</body>

</html>