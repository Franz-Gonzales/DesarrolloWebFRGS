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
        }

        .contaniner-usuarios {
            border: 1px solid black;
            width: 800px;
        }

        table {
            width: 100%;
        }

        table tr th {
            border: 1px solid black;
            padding: 5px;
            background: #2f1c5c;
            color: white;
        }

        table tr td {
            border: 1px solid black;
            padding: 5px;
            background: #95B3D7;

        }

        .btn-1{
            background: #62af4b;
            padding: 5px;
        }

        .btn-2{
            background: red;
            padding: 5px;
        }
    </style>
</head>

<body>

    <?php
    include('bd.php');

    $sql = "SELECT id, nombre, correo, rol FROM usuario";
    // echo $sql;
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
    ?>
        <div class="contaniner-usuarios">
            <table>
                <tr>
                    <th>Correo</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Operación</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <td><?php echo $row["correo"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["rol"]; ?></td>
                        <td>
                            <?php if ($row["rol"] == "Administrador") { ?>
                                <a href="update.php?id=<?php echo $row['id']; ?>"><button class="btn-1">Cambiar a Usuario</button></a>
                            <?php } else {
                            ?>
                                <a href="update.php?id=<?php echo $row['id']; ?>"><button class="btn-2">Cambiar a Administrador</button></a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        <?php
    } else {
        ?>
            <p>No existe registros que mostrar</p>
        <?php } ?>
        
        </div>
</body>

</html>