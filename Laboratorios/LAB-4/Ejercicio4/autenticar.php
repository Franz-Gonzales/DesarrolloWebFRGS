<?php 

$sesion_nivel = "Autenticado Correctamente"; 

$usuario = $_POST['usuario'];
$contrasena = $_POST['password'];


if($usuario == 'admin' and $contrasena == 123){
    echo $sesion_nivel;
}else{
    echo "No autenticado";
}

?>
