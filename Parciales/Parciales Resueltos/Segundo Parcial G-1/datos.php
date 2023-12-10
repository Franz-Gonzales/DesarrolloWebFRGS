<?php
    include('conexion.php');

    $sql = "SELECT imagen, titulo FROM libros";
    $result = $connect->query($sql);

    $arrayLibros = [];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            array_push($arrayLibros, $row);
        }
    }else{
        $arrayLibros = [];
    }

    echo json_encode($arrayLibros, JSON_UNESCAPED_UNICODE);
?>


