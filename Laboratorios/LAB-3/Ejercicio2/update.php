<?php
include('./conexion.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $nro = $_POST['nro'];
    $id_tipo_habitacion = $_POST['id_tipo_habitacion'];
    $bano_privado = $_POST['bano'];
    $espacio = $_POST['espacio'];
    $precio = $_POST['precio'];

    $sql = "UPDATE habitacion SET nro = $nro, id_tipo_habitacion = $id_tipo_habitacion, bano_privado = $bano_privado, espacio = $espacio, precio = $precio  WHERE id = $id";

    // echo $sql;
    if ($connect->query($sql) === TRUE) {
        echo "Se actualizó correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

?>

<meta http-equiv="refresh" content="3; url=read.php" />