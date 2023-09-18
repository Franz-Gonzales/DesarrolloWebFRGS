<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $colores = [];
    $colores["red"] = "rojo";
    $colores["yellow"] = "amarillo";
    $colores["green"] = "verde";
    $colores["blue"] = "azul ";
    $colores["orange"] = "naranja";
    $colores["skyblue"] = "celeste";
    $colores["purple"] = "purpura";



    ?>
    <form action="tablero.php" method="get">
        <div>
            <h1>tablero de color: </h1>
        </div>
        <div><label for="fila">Introduzca una cantidad de fila: </label></div>
        <br>
        <div><input type="number" name="fila"></div>
        <br>
        <div><label for="columna">Introduzca una cantidad de coolumna: </label></div>
        <br>
        <div><input type="number" name="columna"></div>
        <br>

        <select name="color" id="">
        <?php
        foreach ($colores as $indice=>$color) { ?>

            <option value="<?php echo $indice ?>"><?php echo "color: ". $color ?></option>

        <?php }
        ?>
        </select> 

        <br>
        <br>
        <div>
        <input type="submit" value="dibujar">
        </div>
        
        </div>
    </form>
</body>
</html>