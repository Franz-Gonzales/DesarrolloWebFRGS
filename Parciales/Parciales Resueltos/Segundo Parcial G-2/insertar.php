<?php
include('bd.php');

$n = $_POST['n'];
// echo $n;

for($i = 1; $i <= $n; $i++){

    $titulo = $_POST['titulo'.$i];
    $autor = $_POST['autor'.$i];
    $id_editorial = $_POST['editorial'.$i];
    $anio = $_POST['anio'.$i];
    $id_usuario = $_POST['usuario'.$i];
    $id_carrera = $_POST['carrera'.$i];


    $archivo_original = (isset($_FILES['imagen'.$i]['name'])) ? $_FILES['imagen'.$i]['name'] : '';
    $arreglo_img = explode(".", $archivo_original);
    $extension = $arreglo_img[1];
    $imagen = uniqid() . '.' . $extension;

    copy($_FILES['imagen'.$i]['tmp_name'], './images/' . $imagen);

    $sql = "INSERT INTO libros (id, imagen, titulo, autor, ideditorial, anio, idusuario, idcarrera) VALUES (NULL, '$imagen', '$titulo', '$autor', $id_editorial, $anio, $id_usuario, $id_carrera)";

    if ($connect->query($sql) === TRUE) {
        echo "Libros registrados";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();

?>