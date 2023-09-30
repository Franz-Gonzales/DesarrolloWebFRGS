<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="multiplicacion.php" method="get">
    <?php

    $n = $_POST['n'];

    for ($i = 1; $i <= $n; $i++) {
        echo "<label for='numeros'>Ingresa el número $i </label>";
        echo "<input type='number' name='numeros[]'>";
        echo "<br>";
    }

    ?>
    <button type="submit">Calcular</button>
    </form>
</body>

</html>