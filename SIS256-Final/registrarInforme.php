<?php

include('db.php');

$mes = $_POST['mes'];
$porcentajes = $_POST['porcentajes'];
$materias = $_POST['materias'];

// echo 'Mes = ' . $mes . '<br>';
// foreach ($porcentajes as $porcentaje) {
//     echo 'Porcentajes = '. $porcentaje. '<br>';
// }

// foreach ($materias as $materia) {
//     echo 'Materias = '. $materia. '<br>';
// }

if(count($porcentajes) == count($materias)){

    for($i = 0; $i < count($porcentajes); $i++){

        $sql = "INSERT INTO informes (id, materia, mes, porcentaje) VALUE(NULL, '$materias[$i]', '$mes', $porcentajes[$i])";
        
        if ($connect->query($sql) === TRUE) {
            echo "Informe registrados correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    }
}

$connect->close();

?>
