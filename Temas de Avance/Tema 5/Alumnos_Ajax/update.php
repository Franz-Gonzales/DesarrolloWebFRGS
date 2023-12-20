<?php

include('bd.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    // $fotografia = $_POST['fotografia']['name'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $CU = $_POST['CU'];
    $idcarrera = $_POST['idcarrera'];

    
    // Para actualizar la imagen
    if (!isset($_FILES['fotografia'])) {
        $archivo_original = (isset($_FILES['fotografia']['name'])) ? $_FILES['fotografia']['name'] : '';
        $arreglo_img = explode(".", $archivo_original);
        $extension = $arreglo_img[1];
        $fotografia = uniqid() . '.' . $extension;
        move_uploaded_file($_FILES['fotografia']['tmp_name'], './images/' . $fotografia);
        // copy($_FILES['fotografia']['tmp_name'], './images/' . $fotografia);

        $sql = "UPDATE alumno SET fotografia = '$fotografia', nombres = '$nombres', apellidos = '$apellidos', CU = '$CU', idcarrera = $idcarrera WHERE id = $id";
    }else{
        $sql = "UPDATE alumno SET nombres = '$nombres', apellidos = '$apellidos', CU = '$CU', idcarrera = $idcarrera WHERE id = $id";
    }
    

    // $sql = "UPDATE alumnos SET nombres = '$nombres', apellidos = '$apellidos', CU = '$CU', idcarrera = $idcarrera WHERE id = $id";

    // echo $sql;
    if ($connect->query($sql) === TRUE) {
        echo "Se actualizó correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

?>

<!-- <meta http-equiv="refresh" content="3; url=read.php" /> -->