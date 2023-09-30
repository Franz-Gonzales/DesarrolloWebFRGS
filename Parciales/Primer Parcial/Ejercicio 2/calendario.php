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

    $fecha = "2023-09-30"; // Cambia esta fecha a la que desees 
    // Utiliza la función date con "w" para obtener el día de la semana en formato numérico 
    $numeroDiaSemana = date("w", strtotime($fecha));
    echo "El día de la semana de $fecha es $numeroDiaSemana";

    $primerDia = date("w", strtotime("$anio-$mes-01"));
    $ultimoDia = date("t", strtotime("$anio-$mes-01"));

    echo '<table border="1" width="100%" height="150px">';
    echo '<tr>';

    $diasSemana = array('lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo');

    // $diasSemana = [
    //     'Lunes',

    // ];

    foreach ($diasSemana as $dia) {
        echo "<td style='background: orange; color: #fff;'>$dia</td>";
    }

    echo '</tr><tr>';

    for ($i = 1; $i < $primerDia; $i++) {
        echo '<td bgcolor="#FDE9D9"></td>';
    }

    for ($dia = 1; $dia <= $ultimoDia; $dia++) {

        echo '<td bgcolor="#FDE9D9">' . $dia . '</td>';
        
        if (($dia + $primerDia - 1) % 7 == 0) {
            echo '</tr><tr>';
        }
    }

    echo '</tr></table>';
    ?>
</body>

</html>