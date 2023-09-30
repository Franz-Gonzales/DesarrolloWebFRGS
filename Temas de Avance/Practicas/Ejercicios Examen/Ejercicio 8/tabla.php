<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <style>
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            font-weight: bold;
            color: gray;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la cantidad de filas y columnas introducidas
    $filas = isset($_POST["filas"]) ? (int)$_POST["filas"] : 0;
    $columnas = isset($_POST["columnas"]) ? (int)$_POST["columnas"] : 0;

    // Imprimir la tabla
    echo '<table>';
    for ($i = 0; $i <= $filas; $i++) {
        echo '<tr>';
        for ($j = 0; $j <= $columnas; $j++) {
            if ($i === 0 && $j === 0) {
                // Esquina superior izquierda con números de fila y columna en negrita y gris
                echo '<th style="background-color: gray;"></th>';
            } elseif ($i === 0) {
                // Primera fila con números de columna en negrita y gris
                echo '<th style="background-color: gray;">' . $j . '</th>';
            } elseif ($j === 0) {
                // Primera columna con números de fila en negrita y gris
                echo '<th style="background-color: gray;">' . $i . '</th>';
            } else {
                // Resto de las celdas con valores de multiplicación
                $resultado = $i * $j;
                echo '<td>' . $resultado . '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>

</body>
</html>
