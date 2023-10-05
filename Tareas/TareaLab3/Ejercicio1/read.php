<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            border: 1px solid black;
            width: 500px;
        }

        table tr th{
            border: 1px solid black;
        }

        table tr td{
            border: 1px solid black;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            flex-direction: column;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1, h2 {
            color: #333;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            /* width: 80%; */
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .container {
            margin-top: 20px;
            text-align: center;
        }

        .button1, .button2, .add-button {
            padding: 8px 15px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .button1 {
            background-color: #4caf50;
            color: white;
        }

        .button2 {
            background-color: #f44336;
            color: white;
        }

        button:hover {
            opacity: 0.8;
        }

        .add-button {
            margin-top: 20px;
            background: blue;
            color: white;
        }
    </style>
</head>

<body class="body">
    <?php
    include('./conexion.php');

    $sql = "SELECT id, descripcion, numero_camas FROM tipo_habitacion";

    // echo $sql;
    $result = $connect->query($sql);

    if ($result->num_rows > 0) { ?>

        <h1>Tipo de Habitaciones</h1>
        <div class="container">
            <h2>Lista de tipo de habitaciones</h2>
            <table>
                <tr>
                    <th>Descripcion</th>
                    <th>Numero Camas</th>
                    <th>Operaciones</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <td><?php echo $row["descripcion"]; ?></td>
                        <td><?php echo $row["numero_camas"]; ?></td>
                        <td><a href="form_update_tipoHabitacion.php?id=<?php echo $row['id']; ?>"><button class="button1">Editar</button></a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>"><button class="button2">Eliminar</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        <?php
    } else {
        ?>
            <p>No existe registros que mostrar</p>
        <?php } ?>
        <a href="form_tipo_habitaciones.php"><button class="add-button">Regitrar Tipo de Habitacion</button></a>
        </div>
</body>

</html>