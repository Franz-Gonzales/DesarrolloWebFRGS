<?php

include('../db.php');

if($_POST){

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT nombre, email, rol FROM usuarios WHERE email = ;'$email' AND password = '$password'";
}

?>