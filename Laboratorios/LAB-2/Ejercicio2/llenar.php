<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numero = $_GET["numero"];
    $mayor = $_GET["mayor"];
    ?>
    <form action="eliminar.php" method="post">
        <?php
        echo "<h2>El numero mayor introducido es: $mayor</h2>";

        for ($i = 0; $i < $numero; $i++) { ?>

            <label for="">Introducir número <?php echo " " . $i + 1 ?></label>

            <input type="number" name="numeros[]">

        <?php } ?>
        
        <br>
        <input type="hidden" name="mayor" value="<?php echo $mayor ?>">
        <input type="submit" value="llenar">
    </form>

</body>

</html>