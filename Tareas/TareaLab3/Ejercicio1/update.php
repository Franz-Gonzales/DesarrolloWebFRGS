<?php
    include('./conexion.php');

    if(isset($_POST['id'])){
        $id = $_POST['id'];

        $descripcion = $_POST['descrip'];
        $nro_camas = $_POST['camas'];

        $sql = "UPDATE tipo_habitacion SET descripcion = '$descripcion', numero_camas = $nro_camas WHERE id = $id";

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