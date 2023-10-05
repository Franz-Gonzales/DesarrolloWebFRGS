<?php

include('../conexion.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $fotografia = $_GET['fotografia'];
    $id_habitacion = $_GET['id_habitacion'];

    $sql = "DELETE FROM fotos_habitacion WHERE id = $id";

    if ($connect->query($sql)) {

        // Para eliminar la foto
        unlink(("./images/$fotografia")); 
        echo "Se elimino correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}
?>

<meta http-equiv="refresh" content="3; url=read.php?id_habitacion=<?php echo $id_habitacion; ?>" />