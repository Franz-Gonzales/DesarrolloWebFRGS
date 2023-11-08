
<?php
include ('bd.php');


if (isset($_POST["nombres"])) {

    $nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : '';
    $apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : '';
    $CU = (isset($_POST['CU'])) ? $_POST['CU'] : '';
    $idcarrera = (isset($_POST['idcarrera'])) ? $_POST['idcarrera'] : '';

    // Procedimineto para la fotografia
    $archivo_original = (isset($_FILES['fotografia']['name'])) ? $_FILES['fotografia']['name'] : '';
    $arreglo_img = explode(".", $archivo_original);
    $extension = $arreglo_img[1];
    $fotografia = uniqid() . '.' . $extension;

    // move_uploaded_file($_FILES['fotografia']['tmp_name'], '../img/' . $fotografia);
    copy($_FILES['fotografia']['tmp_name'], './images/' . $fotografia);

    $sql = "INSERT INTO alumno (id, fotografia, nombres, apellidos, CU, idcarrera) VALUES (NULL, '$fotografia', '$nombres', '$apellidos', '$CU', $idcarrera)";

    if ($connect->query($sql) === TRUE) {
        echo "Alumno registrado";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $connect->close();

}
?>
<script>
    setTimeout(function(){
        cargarContenido('read.php');
    }, 3000);
</script>

<!-- <meta http-equiv="refresh" content="3; url=javascript:cargarContenido('read.php')" />; -->