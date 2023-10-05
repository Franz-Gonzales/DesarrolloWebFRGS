<?php
include('../conexion.php');


if ($_POST) {

    $id_habitacion = $_POST['id_habitacion'];

    // Procedimineto para la fotografia
    $archivo_original = (isset($_FILES['fotografia']['name'])) ? $_FILES['fotografia']['name'] : '';
    $arreglo_img = explode(".", $archivo_original);
    $extension = $arreglo_img[1];
    $fotografia = uniqid() . '.' . $extension;

    copy($_FILES['fotografia']['tmp_name'], './images/' . $fotografia);

    $sql = "INSERT INTO fotos_habitacion (id, id_habitacion, fotografia) VALUES (NULL, $id_habitacion, '$fotografia')";

    if ($connect->query($sql) === TRUE) {
        echo "Se registró correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $connect->close();
}

?>

<meta http-equiv="refresh" content="3; url=read.php?id_habitacion=<?php echo $id_habitacion; ?>" />