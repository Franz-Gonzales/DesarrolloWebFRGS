<?php
include("db.php");

$calificaciones = $_POST['calificaciones'];
$ide_alumnos = $_POST['ides'];

// echo$calificaciones;
foreach($calificaciones as $num){
    echo $num . '<br>';
}

foreach($ide_alumnos as $id){
    echo $id . '<br>';
}




// foreach($ide_alumnos as $id){

//     foreach($calificaciones as $calificacion){

//         $sql = "UPDATE alumnos SET nombre = '$nombre', apellido = '$apellido', CU = '$CU', id_carrera = $id_carrera WHERE id = $id";

//         if ($connect->query($sql) === TRUE) {
//             echo "Se actualizó correctamente";
//         } else {
//             echo "Error: " . $sql . "<br>" . $connect->error;
//         }
//         $connect->close();
//     }
// }


?>