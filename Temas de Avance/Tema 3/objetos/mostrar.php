<?php session_start();
include ('pila.php');

// $p_serializado = $_COOKIE['p'];

// $p = unserialize($p_serializado);
// $valor=$p->imprimir();







// if(!isset($_SESSION['p'])){

//     echo 'No existe la pila';
// }else{

//     $p = $_SESSION['p'];

//     $p->imprimir();
// }



if (isset($_SESSION['p']) && $_SESSION['p'] instanceof Pila) {
    $_SESSION['p']->imprimir();
} else {
    echo 'La pila no está definida.';

}



?>
<meta http-equiv="refresh" content="2;url=menu_pila.html">
