<?php
    include('../db.php');

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $CU = $_POST['CU'];
        $id_carrera = $_POST['id_carrera'];

        $sql = "UPDATE alumnos SET nombre = '$nombre', apellido = '$apellido', CU = '$CU', id_carrera = $id_carrera WHERE id = $id";

        // echo $sql;
        if($connect->query($sql) === TRUE){
            echo "Se actualizó correctamente";
        }else{
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        $connect->close();
    }

?>

<meta http-equiv="refresh" content="3; url=read.php" />