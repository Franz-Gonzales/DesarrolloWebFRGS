<?php
include('../db.php');

$numero = $_POST['numero'];

if (isset($_POST['nombre'])) {

    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
    $apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
    $CU = (isset($_POST['CU'])) ? $_POST['CU'] : '';

    for ($i = 1; $i <= $numero; $i++) {
        $sexo[$i - 1] = $_POST["sexo" . $i][0];
        //echo $_POST["sexo".$i][0];
    }

    $codigo_carrera = (isset($_POST['codigocarrera'])) ? $_POST['codigocarrera'] : '';

    for ($i = 0; $i <= $numero-1; $i++) {

        $sql = "INSERT INTO alumnos(id, nombre, apellido, CU, sexo, codigo_carrera) VALUES(NULL, '$nombre[$i]', '$apellido[$i]', '$CU[$i]', '$sexo[$i]', $codigo_carrera[$i])";
        // echo $sql."<br>";

        if ($connect->query($sql) === TRUE) {
            echo "Alumno registrado";
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    }

    $connect->close();
}
?>
<meta http-equiv="refresh" content="3; url=ListaAlumnos.php"/>;
