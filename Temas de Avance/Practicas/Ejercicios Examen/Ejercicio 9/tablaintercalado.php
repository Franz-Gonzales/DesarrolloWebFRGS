<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Intercalada</title>
    <style>
        .rojo {
            background-color: red;
        }

        .amarillo {
            background-color: yellow;
        }

        .verde {
            background-color: green;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la cantidad de filas y columnas introducidas
    $filas = isset($_POST["filas"]) ? (int)$_POST["filas"] : 0;
    $columnas = isset($_POST["columnas"]) ? (int)$_POST["columnas"] : 0;

    // Imprimir la tabla intercalada
    echo '<table border="1">';
    for ($i = 1; $i <= $filas; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $columnas; $j++) {
            $numero = $i * $j;
            $claseColor = '';

            // Aplicar colores intercalados entre múltiplos de tres
            if ($numero % 3 === 0) {
                if ($numero % 6 === 0) {
                    $claseColor = 'amarillo';
                } else {
                    $claseColor = 'rojo';
                }
            } else {
                $claseColor = 'verde';
            }

            echo '<td class="' . $claseColor . '"></td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>

</body>
</html>
