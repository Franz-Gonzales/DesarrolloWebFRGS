<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            border-collapse: collapse;

        }
        td{
            border: 1px solid black;
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;

        }
        .color0{
            background-color: white;
        }
        .color1{
            background-color: blue;
        }
        .color2{
            background-color: red;
        }
    </style>
</head>

<body>
    <table>
        <?php

        $fila = $_GET['fila'];
        $colum=$_GET["colum"];

        $tablero = [
            [1, 0, 1, 0, 1, 0, 1, 0],
            [0, 1, 0, 1, 0, 1, 0, 1],
            [1, 0, 1, 0, 1, 0, 1, 0],
            [0, 1, 0, 1, 0, 1, 0, 1],
            [1, 0, 1, 0, 1, 0, 1, 0],
            [0, 1, 0, 1, 0, 1, 0, 1],
            [1, 0, 1, 0, 1, 0, 1, 0],
            [0, 1, 0, 1, 0, 1, 0, 1]
        ];

        $tablero[$fila-1][$colum-1] = 2;

        foreach ($tablero as $i) {
            echo "<tr>";
            foreach ($i as $j) {
                echo "<td class='color" . $j . "'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>