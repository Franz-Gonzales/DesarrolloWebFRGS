<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $dataBase = 'bd_biblioteca';

    try{
        $connect = new mysqli($server, $user, $password, $dataBase);
        // echo 'Conexion exitosa';
    } catch (PDOException $Error){
        echo "Error en la conexión" . $Error->getMessage();
    }

?>