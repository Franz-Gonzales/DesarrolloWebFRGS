<?php session_start();
include ('pila.php');
// $p=new Pila();
// $p_serializado = $_COOKIE['p'];
// $p = unserialize($p_serializado);
// $valor=$p->eliminar();

$valor = $_SESSION['p']->elimniar();
echo "el valor eliminado es ".$valor;
?>
<meta http-equiv="refresh" content="2;url=menu_pila.html">
