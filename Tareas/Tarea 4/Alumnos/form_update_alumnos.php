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
    include("../db.php");

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "SELECT nombre, apellido, CU, id_carrera FROM alumnos WHERE id = $id";
        $result = $connect->query($sql);
        $row = $result->fetch_assoc();

        $sql_c = "SELECT id_carrera, nombre, facultad FROM carreras";
        $result_c = $connect->query($sql_c);
    }

    ?>
    <h1>FACULTAD DE TECNOLOGIA</h1>
    <div class="contaniner-alumno">
        <form action="update.php" method="post">
            <h2>Formulario para Editar los datos Alumnos</h2>
            <div class="datos-alumnos">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
            </div>
            <div class="datos-alumnos">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>">
            </div>
            <div class="datos-alumnos">
                <label for="CU">C.U.:</label>
                <input type="text" name="CU" value="<?php echo $row['CU']; ?>">
            </div>
            <div class="datos-alumnos">
                <label for="id_carrera">Carrera: </label>
                <select name="id_carrera" id="id_carrera">
                    <?php
                    while ($row_carrera = $result_c->fetch_assoc()) { ?>
                        <option value="<?php echo $row_carrera["id_carrera"]; ?>" <?php echo $row_carrera["id_carrera"] === $row["id_carrera"] ? "selected" : ''; ?>><?php echo $row_carrera['nombre']; ?></option>
                    <?php } ?>

                </select>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Actualizar" class="registrar">
        </form>
    </div>
    <a href="read.php"><button class="btn_cancelar">Cancelar Edición</button></a>

</body>

</html>