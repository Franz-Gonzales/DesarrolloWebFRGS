<?php
    include('db.php');

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $id_editorial = $_POST['editorial'];
    $anio = $_POST['anio'];
    $id_usuario = $_POST['usuario'];
    $id_carrera = $_POST['carrera'];


    $archivo_original = (isset($_FILES['imagen']['name'])) ? $_FILES['imagen']['name'] : '';
    $arreglo_img = explode(".", $archivo_original);
    $extension = $arreglo_img[1];
    $imagen = uniqid() . '.' . $extension;

    copy($_FILES['imagen']['tmp_name'], './images/' . $imagen);

    $sql = "INSERT INTO libros (id, imagen, titulo, autor, ideditorial, anio, idusuario, idcarrera) VALUES (NULL, '$imagen', '$titulo', '$autor', $id_editorial, $anio, $id_usuario, $id_carrera)";

    if ($connect->query($sql) === TRUE) {
        echo "Libro registrado";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $connect->close();
?>
