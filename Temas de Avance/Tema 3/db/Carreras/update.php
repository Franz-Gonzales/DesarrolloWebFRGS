<?php
    include('../db.php');

        if(isset($_POST['id_carrera']) and isset($_POST['nombre_carrera']) and isset($_POST['facultad'])){
    
            $ID_Carrera = $_POST['id_carrera'];
            $nombre_carrera = $_POST['nombre_carrera'];
            $facultad = $_POST['facultad'];
    
            $sql_carrera = "UPDATE carreras SET nombre = '$nombre_carrera', facultad = '$facultad' WHERE id_carrera = $ID_Carrera";
    
            if($connect->query($sql_carrera) === TRUE){
                echo "Se actualizó correctamente";
            }else{
                echo "Error: " . $sql_carrera . "<br>" . $connect->error;
            }
    
            $connect->close();
        }

?>

<meta http-equiv="refresh" content="3; url=read.php" />