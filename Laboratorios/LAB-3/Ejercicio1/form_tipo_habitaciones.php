<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('./conexion.php');

    ?>

    <h1>Tipo de Habitaciones</h1>
    <form action="create.php" method="post">
        <div>
            <label for="descrip">Descripcion:</label>
            <input type="text" name="descrip">
        </div>
        <div>
            <label for="camas">Número de camas:</label>
            <input type="number" name="camas">
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>