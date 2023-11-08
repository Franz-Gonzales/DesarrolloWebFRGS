<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $dataBase = 'bd_alumnos';
    // $dataBase = 'bd_biblioteca';

    try{
        $connect = new mysqli($server, $user, $password, $dataBase);
        // echo "Conexión existosa";
    } catch (PDOException $Error){
        echo "Error en la conexión" . $Error->getMessage();
    }

?>