<?php
include('../db.php');

    if(isset($_GET['id_carrera'])){
        $ID_Carrera = $_GET['id_carrera'];

        $sql_carrera = "DELETE FROM carreras WHERE id_carrera = $ID_Carrera";

        if($connect->query($sql_carrera)){
            echo "Se elimino correctamente";
        }else{
            echo "Error: " . $sql_carrera . "<br>" . $connect->error;
        }
        $connect->close();
    }
?>

<meta http-equiv="refresh" content="3; url=read.php" />