<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dibujar tablero</title>
    <style>
        td{
            width: 70px;
            height: 40px;
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php

        $filas = $_GET["fila"];
        $columna = $_GET['columna'];
        $color = $_GET['color'];

        function imprimirTableroDamas($filas, $columnas, $colores)
        {
            echo "<table border='1'>";
            for ($i = 1; $i <= $filas; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $columnas; $j++) {

                    $color = ($i + $j) % 2 == 0 ? $colores : "white";
                    echo "<td style='background-color: $color;'></td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }

        imprimirTableroDamas($filas, $columna, $color);

        ?>
    </div>
</body>

</html>