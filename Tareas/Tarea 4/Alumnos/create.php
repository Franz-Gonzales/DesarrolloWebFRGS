<?php

include("../db.php");

if(isset($_POST["nombre"])){

    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
    $apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
    $CU = (isset($_POST['CU'])) ? $_POST['CU'] : '';
    $id_carrera = (isset($_POST['id_carrera'])) ? $_POST['id_carrera'] : '';

    $sql = "INSERT INTO alumnos (id, nombre, apellido, CU, id_carrera) VALUES (NULL, '$nombre', '$apellido', '$CU', $id_carrera)";

    if($connect->query($sql) === TRUE){
        echo "Alumno registrado";
    }else{
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $connect->close();
}
?>

<meta http-equiv="refresh" content="3; url=read.php" />
