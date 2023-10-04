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

        $sql = "SELECT nro, id_tipo_habitacion, bano_privado, espacio, precio FROM habitacion WHERE id = $id";
        $result = $connect->query($sql);
        $row = $result->fetch_assoc();

        $sql_tipoH = "SELECT id, descripcion, numero_camas FROM tipo_habitacion";
        $result_th = $connect->query($sql_tipoH);
    }

    ?>
    <h1>Habitaciones</h1>
    <div>
        <form action="update.php" method="post">
            <h2>Formulario para Editar Habitaciones</h2>
            <div>
                <label for="nro">Nro:</label>
                <input type="number" name="nro" value="<?php echo $row['nro']; ?>">
            </div>
            <div>
                <label for="id_tipo_habitacion">Tipo Habitacion: </label>
                <select name="id_tipo_habitacion" id="id_tipo_habitacion">
                    <?php
                    while ($row_th = $result_th->fetch_assoc()) { ?>
                        <option value="<?php echo $row_th["id"]; ?>"><?php echo $row_th["id"]; ?></option>
                    <?php } ?>

                </select>
            </div>
            <div>
                <label for="bano">Baño privado:</label>
                <input type="number" name="bano" value="<?php echo $row['bano_privado']; ?>">
            </div>
            <div>
                <label for="espacio">Espacio:</label>
                <input type="number" name="espacio" value="<?php echo $row['espacio']; ?>">
            </div>
            <div>
                <label for="precio">Precio:</label>
                <input type="number" name="precio" value="<?php echo $row['precio']; ?>">
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Actualizar">
        </form>
    </div>
    <a href="read.php"><button>Cancelar</button></a>

</body>

</html>