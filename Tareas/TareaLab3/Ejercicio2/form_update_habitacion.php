<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitacion</title>
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

        .container{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
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

        .add-button {
            padding: 8px 15px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 20px;
            background: blue;
            color: white;
        }

    </style>
</head>

<body>
    <?php
    include("./conexion.php");

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "SELECT nro, id_tipo_habitacion, bano_privado, espacio, precio FROM habitacion WHERE id = $id";
        $result = $connect->query($sql);
        $row = $result->fetch_assoc();

        $sql_tipoH = "SELECT id, descripcion, numero_camas FROM tipo_habitacion";
        $result_th = $connect->query($sql_tipoH);
    }

    ?>
    <h1>Habitaciones</h1>
    <div class="container">
        <form action="update.php" method="post">
            <h2>Formulario para Editar Habitaciones</h2>
            <div>
                <label for="nro">Nro:</label>
                <input type="number" name="nro" value="<?php echo $row['nro']; ?>">
            </div>
            <div>
                <label for="id_tipo_habitacion">Tipo Habitacion: </label>
                <select name="id_tipo_habitacion" id="id_tipo_habitacion">
                    <?php
                    while ($row_th = $result_th->fetch_assoc()) { ?>
                        <option value="<?php echo $row_th["id"]; ?>"><?php echo $row_th["id"]; ?></option>
                    <?php } ?>

                </select>
            </div>
            <div>
                <label for="bano">Baño privado:</label>
                <input type="number" name="bano" value="<?php echo $row['bano_privado']; ?>">
            </div>
            <div>
                <label for="espacio">Espacio:</label>
                <input type="number" name="espacio" value="<?php echo $row['espacio']; ?>">
            </div>
            <div>
                <label for="precio">Precio:</label>
                <input type="number" name="precio" value="<?php echo $row['precio']; ?>">
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Actualizar">
        </form>
        <a href="read.php"><button class="add-button">Cancelar</button></a>
    </div>

</body>

</html>