<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $n = $_GET['n'];

    $dias = [
        1 => 'Lunes',
        2 => 'Martes',
        3 => 'Miercoles',
        4 => 'Jueves',
        5 => 'Viernes',
        6 => 'Sabado',
        7 => 'Domingo'
    ];

    $item = $dias[$n];

    ?>

    <p>El día Seleccionado es: </p>
    <select>
    <?php
        foreach($dias as $dia => $d){
            $select = '';
            if($d == $item){
                $select = 'selected';
            }
            echo "<option value=".$dia." ".$select.">".$d."</option>";
        }
        ?>
    </select>

</body>

</html>