<?php
include("conexion.php"); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    for ($i = 0; $i < 4; $i++) {

        $nombre = isset($_POST['alumnos'][$i]['nombre']) ? $_POST['alumnos'][$i]['nombre'] : '';
        $apellido = isset($_POST['alumnos'][$i]['apellido']) ? $_POST['alumnos'][$i]['apellido'] : '';
        $CU = isset($_POST['alumnos'][$i]['cu']) ? $_POST['alumnos'][$i]['cu'] : '';
        $carrera = isset($_POST['alumnos'][$i]['carrera']) ? $_POST['alumnos'][$i]['carrera'] : '';
        $sexo = isset($_POST['alumnos'][$i]['sexo']) ? $_POST['alumnos'][$i]['sexo'] : '';

        $archivo_original = isset($_FILES['fotografia' . $i]['name']) ? $_FILES['fotografia' . $i]['name'] : '';
        $arreglo_img = explode(".", $archivo_original);
        $extension = end($arreglo_img); 
        $fotografia = uniqid() . '.' . $extension; 

        if (!empty($archivo_original)) {
            copy($_FILES['fotografia' . $i]['tmp_name'], './images/' . $fotografia);
        } else {
            $fotografia = ''; 
        }

        // Imprimir los datos para verificar que se están enviando correctamente
        // echo "Alumno " . ($i + 1) . ":<br>";
        // echo "Nombre: " . $nombre . "<br>";
        // echo "Apellido: " . $apellido . "<br>";
        // echo "CU: " . $CU . "<br>";
        // echo "Sexo: " . $sexo . "<br>";
        // echo "Carrera: " . $carrera . "<br>";
        // echo "Fotografía: " . $fotografia . "<br><br>";

        $sql = "INSERT INTO alumnos (id, fotografia, nombres, apellidos, cu, sexo, codigocarrera) 
                VALUES (NULL, '$fotografia', '$nombre', '$apellido', '$CU', '$sexo', '$carrera')";

        
        if ($connect->query($sql) === TRUE) {
            echo "Alumno " . ($i + 1) . " registrado con éxito.<br>";
        } else {
            echo "Error al registrar al alumno " . ($i + 1) . ": " . $connect->error . "<br>";
        }
    }

    $connect->close();

} else {
    echo "No se han enviado datos.";
}
?>

<meta http-equiv="refresh" content="2; url=../ejercicio2/listar_alumnos.php" />
