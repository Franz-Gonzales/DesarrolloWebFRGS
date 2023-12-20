<?php
include('verificar.php');
include('permisos.php');
include('../db.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    // $fotografia = $_POST['fotografia']['name'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $CU = $_POST['CU'];
    $id_carrera = $_POST['id_carrera'];

    
    // Para actualizar la imagen
    if (!isset($_FILES['fotografia'])) {
        $archivo_original = (isset($_FILES['fotografia']['name'])) ? $_FILES['fotografia']['name'] : '';
        $arreglo_img = explode(".", $archivo_original);
        $extension = $arreglo_img[1];
        $fotografia = uniqid() . '.' . $extension;
        move_uploaded_file($_FILES['fotografia']['tmp_name'], './images/' . $fotografia);
        // copy($_FILES['fotografia']['tmp_name'], './images/' . $fotografia);

        $sql = "UPDATE alumnos SET fotografia = '$fotografia', nombre = '$nombre', apellido = '$apellido', CU = '$CU', id_carrera = $id_carrera WHERE id = $id";
    }else{
        $sql = "UPDATE alumnos SET nombre = '$nombre', apellido = '$apellido', CU = '$CU', id_carrera = $id_carrera WHERE id = $id";
    }
    

    // $sql = "UPDATE alumnos SET nombre = '$nombre', apellido = '$apellido', CU = '$CU', id_carrera = $id_carrera WHERE id = $id";

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