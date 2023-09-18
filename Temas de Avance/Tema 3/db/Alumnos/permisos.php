<?php
if ($_SESSION['rol'] != "Administrador") 
{
    // header('Location:../index.php');
?>
    <meta http-equiv="refresh" content="3;url=read.php">
<?php
    die("No está autorizado para realizar esta operación");
}
?>