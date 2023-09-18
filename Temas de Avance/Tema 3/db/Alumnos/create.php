<?php
include('verificar.php');
include('permisos.php');
include("../db.php");

if (isset($_POST["nombre"])) {

    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
    $apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
    $CU = (isset($_POST['CU'])) ? $_POST['CU'] : '';
    $id_carrera = (isset($_POST['id_carrera'])) ? $_POST['id_carrera'] : '';

    // Procedimineto para la fotografia
    $archivo_original = (isset($_FILES['fotografia']['name'])) ? $_FILES['fotografia']['name'] : '';
    $arreglo_img = explode(".", $archivo_original);
    $extension = $arreglo_img[1];
    $fotografia = uniqid() . '.' . $extension;

    // move_uploaded_file($_FILES['fotografia']['tmp_name'], '../img/' . $fotografia);
    copy($_FILES['fotografia']['tmp_name'], './images/' . $fotografia);

    $sql = "INSERT INTO alumnos (id, fotografia, nombre, apellido, CU, id_carrera) VALUES (NULL, '$fotografia', '$nombre', '$apellido', '$CU', $id_carrera)";

    if ($connect->query($sql) === TRUE) {
        echo "Alumno registrado";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $connect->close();
}
?>

<meta http-equiv="refresh" content="3; url=read.php" />