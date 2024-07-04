<?php
include("db.php");

$calificaciones = $_POST['calificaciones'];
$ides = $_POST['ides'];

// echo$calificaciones;
// foreach($calificaciones as $num){
//     echo 'calificaciones = '. $num . '<br>';
// }

// foreach($ides as $id){
//     echo 'Ides = '. $id . '<br>';
// }


if(count($calificaciones) == count($ides)){
    
    for($i = 0; $i < count($calificaciones); $i++){

        $sql = "UPDATE alumnos SET calificacion = $calificaciones[$i] WHERE id = $ides[$i]";
        $connect->query($sql);

        if ($connect->query($sql) === TRUE) {
            echo "Se actualizó correctamente";
            // header('Location: editarCalificaciones.php');
        }else{
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    }

}else{
    echo 'Las calificaciones y los ides no tienen la misma cantidad';
}

$connect->close();

?>
