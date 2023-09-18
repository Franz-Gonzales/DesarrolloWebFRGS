<?php session_start();

if(!isset($_SESSION['nombre'])){
    ?>
    <meta http-equiv="refresh" content="3;url=../index.php">
    <?php
    die("No está autorizado");
}
?>