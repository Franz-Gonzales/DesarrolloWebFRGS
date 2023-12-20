<?php

include('db.php');

if(isset($_GET['id'])){

    $id = $_GET['id'];
    // echo $id;

    $sql = "DELETE FROM libros WHERE id = $id";

    if($connect->query($sql)){
        
        echo "Se elimino correctamente";
    }else{
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    
    $connect->close();
}

?>