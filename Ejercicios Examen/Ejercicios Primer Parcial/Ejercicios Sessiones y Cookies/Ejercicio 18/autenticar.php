<?php session_start();

include('../db.php');

$usuario = $_POST['usuario'];
$password = sha1($_POST['password']);

$sql = "SELECT usuario FROM usuarios WHERE usuario = '$usuario' and password = '$password'";

// echo $sql;
$result = $connect->query($sql);

if($result->num_rows > 0){
    $fila = $result->fetch_assoc();

    $_SESSION['usuario'] = $fila['usuario'];

    
    if($_SESSION['usuario'] == 'admin'){

        echo "El usuario es: ".$fila['usuario'];
        echo "<meta http-equiv='refresh' content='3;url=acceso.php'>";
        // header('Location:inicio.html');
    }else{
        if($_SESSION['usuario'] == 'usuario'){
            echo "El usuario es: ".$fila['usuario'];
            echo "<meta http-equiv='refresh' content='3;url=acceso.php'>";
        }
    }
}else{
    echo "Usuario y Contraseñá son incorrectos";
    echo "<meta http-equiv='refresh' content='3;url=form_login.html'>";
}

?>