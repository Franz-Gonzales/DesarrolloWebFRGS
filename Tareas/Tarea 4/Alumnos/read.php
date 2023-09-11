<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body class="body">
    <?php
    include('../db.php');

    $sql = "SELECT a.id, a.nombre, apellido, CU, c.nombre AS carrera FROM alumnos a LEFT JOIN carreras c ON a.id_carrera = c.id_carrera";

    // echo $sql;
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
    ?>

        <h1>Facultad de Tecnología</h1>
        <div class="contaniner-alumnos">
            <h2>Lista de Alumnos</h2>
            <table>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>C.U.</th>
                    <th>Carrera</th>
                    <th>Operarciones</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["apellido"]; ?></td>
                        <td><?php echo $row["CU"]; ?></td>
                        <td><?php echo $row["carrera"]; ?></td>
                        <td class="operaciones"><a href="form_update_alumnos.php?id=<?php echo $row['id']; ?>"><button class="button1">Editar</button></a>
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
        <a href="form_alumnos.php"><button class="btn_registro">Regitrar Alumno</button></a>
        </div>
</body>

</html>