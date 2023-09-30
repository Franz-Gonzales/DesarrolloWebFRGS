<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = $_GET['numero'];
    ?>

    <div class="container">
        <ul>
            <li><a href="calcular.php?operacion=Sumatoria">Sumatoria</a></li>
            <li><a href="calcular.php?operacion=Factorial">Factorial</a></li>
            <li><a href="calcular.php?operacion=Fibonacci">Fibonacci</a></li>
            <li><a href="calcular.php?operacion=Dividir">Dividir</a></li>
        </ul>
    </div>

    <?php
        setcookie('numero', $numero, 0);
    ?>
</body>
</html>