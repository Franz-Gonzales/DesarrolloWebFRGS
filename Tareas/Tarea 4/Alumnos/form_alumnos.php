<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body class="body">
    <?php include("../db.php");

    $sql = "SELECT id_carrera, nombre, facultad FROM carreras";
    $result = $connect->query($sql);

    ?>

    <h1>FACULTAD DE TECNOLOGIA</h1>
    <div class="contaniner-alumno">
        <form action="create.php" method="post">
        <h2>Formulario para registrar Alumnos</h2>
            <div class="datos-alumnos">
                <label for="nombre">Introduce el nombre:</label>
                <input type="text" name="nombre" placeholder="Nombre">
            </div>
            <div class="datos-alumnos">
                <label for="apellido">Introduce el apellido:</label>
                <input type="text" name="apellido" placeholder="Apellido">
            </div>
            <div class="datos-alumnos">
                <label for="CU">Introduce C.U.:</label>
                <input type="text" name="CU" placeholder="C.U.">
            </div>
            <div class="datos-alumnos">
                <label for="id_carrera">Carrera: </label>
                <select name="id_carrera" id="id_carrera">
                    <?php
                    while ($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row["id_carrera"]; ?>"><?php echo $row["nombre"]; ?></option>
                    <?php } ?>

                </select>
            </div>

            <input type="submit" value="Registrar" class="registrar">
        </form>
    </div>
    <a href="read.php"><button class="btn_cancelar">Cancelar Registro</button></a>

</body>

</html>