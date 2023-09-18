<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>

    <style>
        table {
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
    </style>
</head>
<body>
    <table>
        <?php
        $tablero = [
            [1,0,1,0,1,0,1,0],
            [0,1,0,1,0,1,0,1],
            [1,0,1,0,1,0,1,0],
            [0,1,0,1,0,1,0,1],
            [1,0,1,0,1,0,1,0],
            [0,1,0,1,0,1,0,1],
            [1,0,1,0,1,0,1,0],
            [0,1,0,1,0,1,0,1]
        ];

        foreach($tablero as $fila){
            echo "<tr>";
            foreach($fila as $colum){
                echo "<td class='color".$colum."'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <form action="3tableromodificado.php" method="get">
        <div>
            <label for="fila">Introduce el número de filas: </label>
            <input type="number" name="fila">
        </div>
        <div>
            <label for="colum">Introduce el número de columnas: </label>
            <input type="number" name="colum">
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>