<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('bd.php');

    $id_departamento = $_GET['id_departamento'];
    $sql = "SELECT id, provincia, iddepartamento FROM provincias WHERE iddepartamento = $id_departamento";

    $result = $connect->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            ?>
            <option value="<?php echo $row['id'] ?>">
                <?php echo $row['provincia'] ?>
            </option>
        <?php } ?>
    <?php } else { ?>
        <div>No existen registros que mostrar</div>
    <?php } ?>
</body>

</html>