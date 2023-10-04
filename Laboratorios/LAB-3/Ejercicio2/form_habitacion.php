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

    $sql = "SELECT id, descripcion, numero_camas FROM tipo_habitacion";
    $result = $connect->query($sql);
    ?>

    <h1>Tipo de Habitaciones</h1>
    <form action="create.php" method="post">
        <div>
            <label for="nro">Nro:</label>
            <input type="number" name="nro">
        </div>
        <div>
            <label for="id_tipo_habitacion">Tipo Habitacion: </label>
            <select name="id_tipo_habitacion" id="id_tipo_habitacion">
                <?php
                while ($row = $result->fetch_assoc()) { ?>
                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["id"]; ?></option>
                <?php } ?>

            </select>
        </div>
        <div>
            <label for="bano">Baño privado:</label>
            <input type="number" name="bano">
        </div>
        <div>
            <label for="espacio">Espacio:</label>
            <input type="number" name="espacio">
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio">
        </div>
        <input type="submit" value="Registrar">
    </form>
</body>

</html>