<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Programa en PHP que solicite mediante formulario por GET el valor de n (del 1 al 7) que
    llame a la página dia.php recupere el valor introducido y en base a ese al valor introducido
    muestre una lista de selección con los días de la semana mostrando seleccionado el dia
    seleccionado. ejemplo para n=3 -->

    <h2>Dias de la semana</h2>
    <form action="dia.php" method="get">
        <div>
            <label for="n">Introduce un número del 1 al 7</label>
            <input type="number" name="n" required>
        </div>
        <input type="submit" value="Mostrar">
    </form>
</body>

</html>