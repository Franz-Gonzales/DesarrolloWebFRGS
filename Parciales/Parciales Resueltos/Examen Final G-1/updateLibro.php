<?php

include('db.php');

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $id_editorial = $_POST['editorial'];
    $anio = $_POST['anio'];
    $id_usuario = $_POST['usuario'];
    $id_carrera = $_POST['carrera'];
    $imagen_actual = $_POST['imagen_actual'];

    
    if (!isset($_FILES['imagen'])) {

        $archivo_original = (isset($_FILES['imagen']['name'])) ? $_FILES['imagen']['name'] : '';
        $arreglo_img = explode(".", $archivo_original);
        $extension = $arreglo_img[1];
        $imagen = uniqid() . '.' . $extension;

        copy($_FILES['imagen']['tmp_name'], './images/' . $imagen);

        unlink("./images/$imagen_actual");
    
        $sql = "UPDATE libros SET imagen = '$imagen', titulo = '$titulo', autor = '$autor', ideditorial = $id_editorial, anio = $anio, idusuario = $id_usuario, idcarrera = $id_carrera WHERE id = $id";
    }else{

        $sql = "UPDATE libros SET titulo = '$titulo', autor = '$autor', ideditorial = $id_editorial, anio = $anio, idusuario = $id_usuario, idcarrera = $id_carrera WHERE id = $id";
    }
    

    if ($connect->query($sql) === TRUE) {

        echo "Se actualizó correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}
?>