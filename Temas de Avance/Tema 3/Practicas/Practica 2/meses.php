<?php

$mes = $_GET['numero'];

$meses = array(
    1 => 'Enero',
    2 => 'Febrero',
    3 => 'Marzo',
    4 => 'Abril',
    5 => 'Mayo',
    6 => 'Junio',
    7 => 'Julio',
    8 => 'Agosto',
    9 => 'Septiembre',
    10 => 'Octubre',
    11 => 'Noviembre',
    12 => 'Diciembre'
);

$selection = $meses[$mes];
?>

<select>
    <?php
    foreach($meses as $m => $valor){
        // echo "<option value='$m'>$valor</option>";

        $select = '';
        if($valor == $selection){
            $select = 'selected';
        }
        echo '<option value="'.$m.'" '.$select.'>'.$valor.'</option>';
    }
    ?>
</select>