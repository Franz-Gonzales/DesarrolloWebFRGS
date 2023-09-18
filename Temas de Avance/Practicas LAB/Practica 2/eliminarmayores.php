<?php

    function eliminarMayores($mayor, $arr){
        $cont = count($arr);
        for ($i=0; $i < $cont; $i++) {
            if ($arr[$i] > $mayor) {
                unset($arr[$i]);
            }
        }
        foreach($arr as $valor){
            echo $valor.' ';
        }
    }

?>