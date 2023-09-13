<?php

include("../db.php");

    if(isset($_POST["nombre_carrera"])){
        
        // Para regstrar las carreras
        $nombre_carrera = (isset($_POST['nombre_carrera'])) ? $_POST['nombre_carrera'] : '';
        $facultad = (isset($_POST['facultad'])) ? $_POST['facultad'] : '';
    
        $sql = "INSERT INTO carreras (id_carrera, nombre, facultad) VALUES (NULL, '$nombre_carrera', '$facultad');";
    
        if($connect->query($sql) === TRUE){
            echo "Carrera registrado";
        }else{
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    
        $connect->close();
    }
?>

<meta http-equiv="refresh" content="3; url=read.php" />