<?php

include("./conexion.php");

if (isset($_POST["nro"])) {

    $nro = (isset($_POST['nro']))?$_POST['nro']:'';
    $id_tipo_habitacion = (isset($_POST['id_tipo_habitacion']))?$_POST['id_tipo_habitacion']:'';
    $bano_privado = (isset($_POST['bano']))?$_POST['bano']:'';
    $espacio = (isset($_POST['espacio']))?$_POST['espacio']:'';
    $precio = (isset($_POST['precio']))?$_POST['precio']:'';


    $sql = "INSERT INTO habitacion (id, nro, id_tipo_habitacion, bano_privado, espacio, precio) VALUES (NULL, $nro, $id_tipo_habitacion, $bano_privado
    , $espacio, $precio)";

    // Para insertar fotografias por habitacion
    // if($sql){
    //     $result = $connect->query($sql);
    //     $row = $result->fetch_assoc();

    //     $id_habitacion = $row['id'];

    //     $sql_fotos = "INSERT INTO fotos_habitacion (NULL, id_habitacion, fotografia) VALUES (NULL, $id_habitacion, $fotografia) WHERE id_habitacion = $id_habitacion";
    // }


    if ($connect->query($sql) === TRUE) {
        echo "La Habitacion se registró correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $connect->close();
}
?>

<meta http-equiv="refresh" content="3; url=read.php" />

