<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $dataBase = 'db_tecnologia';

    try{
        $connect = new mysqli($server, $user, $password, $dataBase);
        // echo "Conexión existosa";
    } catch (PDOException $Error){
        echo "Error en la conexión" . $Error->getMessage();
    }

?>