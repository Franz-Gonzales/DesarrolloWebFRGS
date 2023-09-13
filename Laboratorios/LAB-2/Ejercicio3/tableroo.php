<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dibujar tablero</title>
    <style>
        td{
            width: 50px;
            height: 30px;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php

            $filas = $_GET["fila"];
            $columna = $_GET['columna'];

        function imprimirTableroDamas($filas, $columnas)
        {
            echo "<table border='1'>";
            for ($i = 1; $i <= $filas; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $columnas; $j++) {
                    
                    $numeroCelda = ($i - 1) * $columnas + $j;

                    // Determina el color en función del número de celda (par o impar)
                    $color = ($numeroCelda % 2 == 0) ? "white" : "blue";

                    echo "<td style='background-color: $color;'></td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }


        imprimirTableroDamas($filas, $columna);
        ?>

    </div>
</body>

</html>