<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        table{
            border: 1px solid black;
            width: 400px;
        }

        table tr th{
            border: 1px solid black;
        }

        table tr td{
            border: 1px solid black;
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
        <a href="form_tipo_habitaciones.php"><button>Regitrar Tipo de Habitacion</button></a>
        </div>
</body>

</html>