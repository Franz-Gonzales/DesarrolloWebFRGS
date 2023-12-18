<?php

    include('db.php');

    $materia = $_GET['materia'];

    echo 'La materia seleccionanda es: ' . $materia . '<br>';

    $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];

    $sql = "SELECT materia, dia, hora FROM horarios WHERE materia = '$materia'" ;
    $result = $connect->query($sql);

    $horarios = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($horarios, $row);
        }    
    }

    // foreach($horarios as $horario){
    //     echo $horario['materia'] . ' ' . $horario['dia'] . ' ' . $horario['hora'] . '<br>';
    // }
?>


<div class="horarios">
    <h2>Horarios de la Materia</h2>
    <table class="tabla-horarios">
        <tr>
            <th>Hora</th>
            <?php foreach($dias as $d){ ?>
                <th><?php echo $d ?></th>
            <?php } ?>
        </tr>

        <?php

            for($j = 0; $j < count($horarios); $j++){

                if($j == 0){
                    $dia = $horarios[$j]['dia'];
                    $hora = $horarios[$j]['hora'];
                }else{
                    if($j == 1){
                        $dia = $horarios[$j]['dia'];
                        $hora1 = $horarios[$j]['hora'];
                    }else{
                        if($j == 2){
                            $dia2 = $horarios[$j]['dia'];
                            $hora2 = $horarios[$j]['hora'];
                        }else{
                            if($j == 3){
                                $dia2 = $horarios[$j]['dia'];
                                $hora3 = $horarios[$j]['hora'];
                            }
                        }
                    }
                }
            }

            // echo 'dia = '.$dia . '<br>';
            // echo 'hora = '.$hora . '<br>';
            // echo 'dia2 = '.$dia2 . '<br>';
            // echo 'hora2 = '.$hora2 . '<br>';

            $lunes = 'Lunes';
            $martes = 'Martes';
            $miercoles = 'Miércoles';
            $jueves = 'Jueves';
            $viernes = 'Viernes';

            for($i = 7; $i <= 19; $i++){
                
                foreach($dias as $d){

                    if(($i == $hora || $i == $hora1) && $d == $dia){ 
                        $turno = 'horario';
                        $dia_ = $d;
                    }
    
                    if(($i == $hora2 || $i == $hora3) && $d == $dia2){ 
                        $turno2 = 'horario2';
                        $dia_2 = $d; 
                    }
                }
                ?>
                <tr>
                    <td class="horas"><?php echo $i . ' - ' . $i + 1 ?></td>
                    <td class="<?php if($dia_ == $lunes && ($i == $hora || $i == $hora1)){ echo $turno; }else{ echo ''; } ?> <?php if($dia_2 == $lunes && ($i == $hora2 || $i == $hora3)){ echo $turno2; }else{ echo ''; } ?>"></td>
                    <td class="<?php if($dia_ == $martes && ($i == $hora || $i == $hora1)){ echo $turno;}else{ echo ''; } ?> <?php if($dia_2 == $martes && ($i == $hora2 || $i == $hora3)){ echo $turno2; }else{ echo ''; } ?>"></td> 
                    <td class="<?php if($dia_ == $miercoles && ($i == $hora || $i == $hora1)){ echo $turno; }else{ echo ''; } ?> <?php if($dia_2 == $miercoles && ($i == $hora2 || $i == $hora3)){ echo $turno2; }else{ echo ''; } ?>"></td>
                    <td class="<?php if($dia_ == $jueves && ($i == $hora || $i == $hora1)){ echo $turno;}else{ echo ''; } ?> <?php if($dia_2 == $jueves && ($i == $hora2 || $i == $hora3)){ echo $turno2; }else{ echo ''; } ?>"></td> 
                    <td class="<?php if($dia_ == $viernes && ($i == $hora || $i == $hora1)){ echo $turno; }else{ echo ''; } ?> <?php if($dia_2 == $viernes && ($i == $hora2 || $i == $hora3)){ echo $turno2; }else{ echo ''; } ?>"></td>
                </tr>
            <?php } ?>

    </table>

</div>
