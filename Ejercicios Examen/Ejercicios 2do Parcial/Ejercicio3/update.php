<?php

include('conexion.php');

$id = $_GET['id'];
$nivel = $_GET['nivel'];

// echo $id;
// echo $nivel;

if($nivel == 1){
    $sql = "UPDATE usuarios SET nivel = 0, leyenda = 'usuario' WHERE id = $id";

    if ($connect->query($sql) === TRUE) {
        echo "Se actualizó correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();

}else{

    $sql = "UPDATE usuarios SET nivel = 1, leyenda = 'administrador' WHERE id = $id";
    if ($connect->query($sql) === TRUE) {
        echo "Se actualizó correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}




?>