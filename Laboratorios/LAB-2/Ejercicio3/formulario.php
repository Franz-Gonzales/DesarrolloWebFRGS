<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h2>Formulario</h2>
    <h3>Ingrese el número de filas y columnas para dibujar el tablero</h3>

    <form action="tablero.php" method="get">
        <div>
            <label for="fila">Número de filas: </label>
            <input type="number" name="fila" id="fila" required>
        </div>
        <div>
            <label for="columna">Número de columnas: </label>
            <input type="number" name="columna" id="columna" required>
        </div>
        <div>
            <label for="color">Elegir un color: </label>
            <select name="color" id="color">
                <?php
                $colores = [
                    "white" => "blanco",
                    "blue" => "azul",
                    "red" => "rojo",
                    "yellow" => "amarillo",
                    "green" => "verde",
                    "orange" => "naranja",
                    "skyblue" => "celeste",
                    "purple" => "purpura"
                ];

                foreach ($colores as $color => $c) {
                    echo "<option value='$color'>$c</option>";
                }

                ?>
            </select>
        </div>
        <input type="submit" value="Ir a tablero">
    </form>

</body>

</html>