<?php
    if($_POST){

        $num = $_POST['num'];

        function isPar($n){
            if($n % 2 == 0){
                echo "El número $n es par";
            }else{
                echo "El número $n es impar";
            }
        }

        isPar($num);
    }
?>