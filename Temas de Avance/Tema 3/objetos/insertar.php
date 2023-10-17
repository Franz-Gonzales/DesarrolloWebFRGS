<?php session_start();
include('pila.php');

$valor = $_GET['valor'];
// $p_serializado = $_COOKIE['p'];
// $p = unserialize($p_serializado);

// if(!isset($_SESSION['p'])){

//     $_SESSION['p'] = new Pila();
//     $pila = $_SESSION['p'];

//     $pila->insertar($valor);
// }else{
//     echo 'Ya pila ya existe';
// }



try {
    $_SESSION['p'] = new Pila();
    $_SESSION['p']->insertar($valor);
    $mensaje = 'Se insertó correctamente';
    echo $mensaje;

    // $pila->imprimir();
    // if($mensaje){
    // }else{
    //     echo 'error al mostrar';
    // }

} catch (PDOException $Error) {
    echo "No se insertó a la pila" . $Error->getMessage();
}




?>
<meta http-equiv="refresh" content="1;url=menu_pila.html">