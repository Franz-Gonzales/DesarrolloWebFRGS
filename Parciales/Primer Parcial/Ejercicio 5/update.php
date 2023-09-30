<?php
include('bd.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_c = "SELECT rol FROM usuario WHERE id = $id";
    // echo  $sql_c;

    $result = $connect->query($sql_c);

    if($result->num_rows > 0){

        while ($row = $result->fetch_assoc()) {
            $rol = $row['rol'];
        }
    }

    // $row = $result->fetch_assoc();

    if($rol == "Administrador"){

        $sql = "UPDATE usuario SET nombre = 'Usuario', rol = 'Usuario' WHERE id = $id" ;

        if ($connect->query($sql) === TRUE) {
            echo "Se modificó el usuario";
            header('Location:pregunta5.php');
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        $connect->close();
    }else{
        $sql = "UPDATE usuario SET nombre = 'Administrador', rol = 'Administrador' WHERE id = $id" ;

        if ($connect->query($sql) === TRUE) {
            echo "Se modificó el usuario";
            header('Location:pregunta5.php');
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        $connect->close();
    }

    
}

?>