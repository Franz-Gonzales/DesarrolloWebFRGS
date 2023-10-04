<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        table {
            border: 1px solid black;
            width: 500px;
        }

        table tr th {
            border: 1px solid black;
        }

        table tr td {
            border: 1px solid black;
        }
    </style>
</head>

<body class="body">

    <div class="buscar">
        <form action="read.php" method="get">
            <label for="buscar">Buscar</label>
            <input type="number" name="buscar" placeholder="Tipo de habitacion">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <?php
    include('./conexion.php');

    $sql = "SELECT id, nro, id_tipo_habitacion, bano_privado, espacio, precio FROM habitacion";

     // Procedimiento para tipo de habitaciones
     if (isset($_GET['buscar'])) {
        $buscar = $_GET['buscar'];
        $sql .= " WHERE id_tipo_habitacion LIKE '%$buscar%'";
    }

    // echo $sql;
    $result = $connect->query($sql);

    if ($result->num_rows > 0) { ?>

        <h1>Tipo de Habitaciones</h1>
        <div class="container">
            <h2>Lista de tipo de habitaciones</h2>
            <table>
                <tr>
                    <th>Nro</th>
                    <th>Tipo de Habitacion</th>
                    <th>Baño privado</th>
                    <th>Espacio</th>
                    <th>Precio</th>
                    <th>Operaciones</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <td><?php echo $row["nro"]; ?></td>
                        <td><?php echo $row["id_tipo_habitacion"]; ?></td>
                        <td><?php echo $row["bano_privado"]; ?></td>
                        <td><?php echo $row["espacio"]; ?></td>
                        <td><?php echo $row["precio"]; ?></td>
                        <td><a href="form_update_habitacion.php?id=<?php echo $row['id']; ?>"><button>Editar</button></a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>"><button>Eliminar</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        <?php
    } else {
        ?>
            <p>No existe registros que mostrar</p>
        <?php } ?>
        <a href="form_habitacion.php"><button>Regitrar Habitacion</button></a>
        </div>
</body>

</html>