<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    ?>

    <h2>Menu de Operaciones</h2>
    <div class="menu">
        <ul>
            <li><a href="calculadora.php?operacion=Sumar">Sumar</a></li>
            <li><a href="calculadora.php?operacion=Restar">Restar</a></li>
            <li><a href="calculadora.php?operacion=Multiplicar">Multiplicar</a></li>
            <li><a href="calculadora.php?operacion=Dividir">Dividir</a></li>
        </ul>
    </div>
    <?php
        setcookie('a', $a, 0);
        setcookie('b', $b, 0);
    ?>
</body>
</html>