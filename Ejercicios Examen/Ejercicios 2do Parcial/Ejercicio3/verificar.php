<?php session_start();

if(!isset($_SESSION['usuario'])){
   
    // sleep(2);

    // Redirigir después de dormir
    header("Location: ./Ejercicio3/form_login.html");
    die("No está autorizado");
    // exit(); 
    // header("Location: ./Ejercicio3/form_login.html");
}
?>