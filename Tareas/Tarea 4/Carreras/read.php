<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body class="body">
    <!-- Para las carreras  -->
    <?php

    include('../db.php');

    $sql_carerras = "SELECT id_carrera, nombre, facultad FROM carreras";
    $result_carerras = $connect->query($sql_carerras);

    if ($result_carerras->num_rows > 0) {
    ?>
        <h1>Facultad de Tecnología</h1>
        <div class="container-carrera">
            <h2>Lista de Carreras de la Facultad</h2>
            <table>
                <tr>
                    <th>Nombre Carrera</th>
                    <th>Facultad</th>
                    <th>Operaciones</th>
                </tr>
                <?php while ($row_c = $result_carerras->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row_c['nombre']; ?></td>
                        <td><?php echo $row_c['facultad']; ?></td>
                        <td class="operaciones"><a href="form_update_carreras.php?id_carrera=<?php echo $row_c['id_carrera']; ?>"><button class="button1">Editar</button></a>
                            <a href="delete.php?id_carrera=<?php echo $row_c['id_carrera']; ?>"><button class="button2">Eliminar</button></a>
                        </td>

                    </tr>
                <?php } ?>
            </table>
        <?php } else {
        ?> <p>No existe registros que mostrar</p>
        <?php } ?>

        <a href="form_carreras.php"><button class="btn_registro">Registrar Carrera</button></a>
        </div>
</body>

</html>