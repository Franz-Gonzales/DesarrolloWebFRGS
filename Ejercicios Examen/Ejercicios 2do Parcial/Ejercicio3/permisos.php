<?php
if ($_SESSION['nivel'] != 1) 
{
    // header('Location:../index.php');
?>
    <meta http-equiv="refresh" content="3;url=read.php">
<?php
    die("No está autorizado para realizar esta operación");
}
?>