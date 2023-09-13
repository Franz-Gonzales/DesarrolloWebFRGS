<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <?php
    include('../db.php');

    if (isset($_GET['id_carrera'])) {

        $ID_Carrera = $_GET['id_carrera'];

        $sql_carrera = "SELECT nombre, facultad FROM carreras WHERE id_carrera = $ID_Carrera";
        $result_carrera = $connect->query($sql_carrera);
        $row_c = $result_carrera->fetch_assoc();
    }
    ?>

    <div class="container-carreras">
        <h1>Facultad de Tecnología</h1>
        <form action="update.php" method="post">
            <h2>Formulario para Editar datos de Carrera</h2>
            <div class="datos-carrera">
                <label for="nombre_carrera">Carrera:</label>
                <input type="text" name="nombre_carrera" value="<?php echo $row_c['nombre']; ?>">
            </div>
            <div class="datos-carrera">
                <label for="facultad">Faculdad:</label>
                <input type="text" name="facultad" value="<?php echo $row_c['facultad']; ?>">
            </div>
            <input type="hidden" name="id_carrera" value="<?php echo $ID_Carrera; ?>">
            <input type="submit" value="Actualizar" class="registrar">
        </form>
        <a href="read.php"><button class="btn_cancelar">Cancelar</button></a>
    </div>
</body>

</html>