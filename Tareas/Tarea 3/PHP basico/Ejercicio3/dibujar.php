<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dibujar tablero</title>
    <link rel="stylesheet" href="./tablero.css">
</head>

<body>

    <div class="container">
        <?php
        //isset es para verificar que el numero introducido este definida o no tenga valor nula, existe y tiene un valor definido
        if (isset($_GET["numero"])) {

            //intval es un metodo para convertir cualquier tipo de variable a un valor entero
            $numero = intval($_GET["numero"]);
            function dibujarTablero($num)
            {
                echo "<div class='ajedrez'>";
                echo "<h2>Tablero de Ajedrez $num por $num :</h2>";
                echo "<table class='tablero'>";

                for ($fila = 1; $fila <= $num; $fila++) {

                    echo "<tr>";
                    for ($columna = 1; $columna <= $num; $columna++) {
                        //todos los elementos pares de la matriz seran de color negro 
                        $items = ($fila + $columna) % 2 == 0 ? 'negro' : 'blanco';
                        echo "<td class='items $items'></td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }

            dibujarTablero($numero);
        }
        ?>

    </div>
</body>

</html>