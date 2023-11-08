<?php
    include('conexion.php');

    $id_departamento = $_GET['id_departamento'];
    $sql = "SELECT id, provincia, iddepartamento FROM provincias WHERE iddepartamento = $id_departamento";

    $result = $connect->query($sql);

    $provincias = array();
    while($row = $result->fetch_assoc()){
        $provincias[] = $row;
    }

    echo json_encode($provincias, JSON_UNESCAPED_UNICODE);

?>
