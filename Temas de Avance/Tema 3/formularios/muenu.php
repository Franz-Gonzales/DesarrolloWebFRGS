<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $num_a = $_GET['a'];
    $num_b = $_GET['b'];

    ?>

    <ul>
        <li><a href="operaciones.php?operacion=suma&a=<?php echo $num_a ?>&b=<?php echo $num_b ?>">Sumar</a></li>
        <li><a href="operaciones.php?operacion=resta&a=<?php echo $num_a ?>&b=<?php echo $num_b ?>">Restar</a></li>
        <li><a href="operaciones.php?operacion=multiplicacion&a=<?php echo $num_a ?>&b=<?php echo $num_b ?>">Multiplicar</a></li>
        <li><a href="operaciones.php?operacion=division&a=<?php echo $num_a ?>&b=<?php echo $num_b ?>">Dividir</a></li>
    </ul>
</body>

</html>