<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="eliminar.php" method="get">
        <?php
        $n = $_GET['n'];
        for ($i=0; $i < $n; $i++) {
            echo "<input type='number' name='valor[]' value='$i'><br>";
            // echo "<input type='number' name='valor[]' value='$i'><br>";
        }
        ?>
        <input type="hidden" name="n" value="<?php echo $n; ?>">
        <br>

        <div>
            <label for="mayor">Introduce el número mayor:</label>
            <input type="number" name="mayor">
        </div>
        <input type="submit" value="Eliminar mayores">
    </form>
</body>
</html>