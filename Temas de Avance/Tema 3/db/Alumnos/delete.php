<?php
include('verificar.php');
include('permisos.php');
include('../db.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM alumnos WHERE id = $id";

    if($connect->query($sql)){
        echo "Se elimino correctamente";
    }else{
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}
?>

<meta http-equiv="refresh" content="3; url=read.php" />