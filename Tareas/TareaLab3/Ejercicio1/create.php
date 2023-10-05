<?php

include("./conexion.php");

if (isset($_POST["descrip"])) {


    $descripcion = (isset($_POST['descrip']))?$_POST['descrip']:'';
    $nro_camas = (isset($_POST['camas']))?$_POST['camas']:'';


    $sql = "INSERT INTO tipo_habitacion (id, descripcion, numero_camas) VALUES (NULL, '$descripcion', $nro_camas)";

    if ($connect->query($sql) === TRUE) {
        echo "Tipo de Habitacion registrado";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $connect->close();
}
?>

<meta http-equiv="refresh" content="3; url=read.php" />

