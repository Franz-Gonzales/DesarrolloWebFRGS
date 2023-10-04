<?php
include('./conexion.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM habitacion WHERE id = $id";
    
    if($connect->query($sql)){
        echo "Se elimino correctamente";
    }else{
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
    
}
?>

<meta http-equiv="refresh" content="3; url=read.php" />