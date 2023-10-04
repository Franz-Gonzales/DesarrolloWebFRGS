<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("./conexion.php");

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "SELECT descripcion, numero_camas FROM tipo_habitacion WHERE id = $id";
        $result = $connect->query($sql);

        $row = $result->fetch_assoc();
    }

    ?>
    <h1>Tipo de Habitaciones</h1>
    <div>
        <form action="update.php" method="post">
            <h2>Formulario para Editar Tipo de Habitaciones</h2>
            <div>
                <label for="descrip">Descripcion:</label>
                <input type="text" name="descrip" value="<?php echo $row['descripcion']; ?>">
            </div>
            <div>
                <label for="camas">Numero Camas:</label>
                <input type="number" name="camas" value="<?php echo $row['numero_camas']; ?>">
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Actualizar">
        </form>
    </div>
    <a href="read.php"><button>Cancelar</button></a>

</body>

</html>