<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $mes = $_POST['mes'];
    $anio = $_POST['anio'];

    $fecha = "2023-09-30";
    // $fecha = date("Y-m-d");

    // $anio = date("Y"); // Obtiene el año actual
    // $mes = date("m"); // Obtiene el mes actual
    // $dia = date("d"); // Obtiene el día actual

    // echo $anio. '/'.$mes.'/'.$dia."<br>";


    $numero_dias_semana = date("w", strtotime($fecha));
    echo "El dia de la semana de $fecha es $numero_dias_semana";

    $primer_dia = date("w", strtotime("$anio-$mes-01"));
    $ultimo_dia = date("t", strtotime("$anio-$mes-01"));

    $dias_semana = [
        'Lunes',
        'Martes',
        'Miércoles',
        'Jueves',
        'Viernes',
        'Sábado',
        'Domingo'
    ];

    ?>

    <table border="1" width="100%" height="150px">
        <tr>
            <?php
            foreach ($dias_semana as $dia) { ?>
                <td style="background: orange; color: #fff;"><?php echo $dia; ?></td>
            <?php } ?>
        </tr>

        <tr>
            <?php for ($i = 1; $i <= $primer_dia; $i++) { ?>
                <td bgcolor="#FDE9D9"></td>
            <?php } ?>

            <?php for ($j = 1; $j < $ultimo_dia; $j++) { ?>
                <td bgcolor="#fde9d9"><?php echo $j; ?></td>

                <?php if (($j + $primer_dia - 1) % 7 == 0) { ?>
        </tr>
        <tr>
    <?php }
            } ?>

        </tr>

    </table>
</body>

</html>


<?php
    
?>