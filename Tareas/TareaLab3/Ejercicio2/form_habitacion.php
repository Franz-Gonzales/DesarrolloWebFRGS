<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0;
            color: #333;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        select {
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            display: inline-block;
            text-decoration: none;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
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
                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["descripcion"]; ?></option>
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