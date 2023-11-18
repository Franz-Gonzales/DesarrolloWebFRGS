<?php
session_start();
require 'captcha.php';

$user = $_POST['user'];
$pass = $_POST['pass'];
$captcha = $_POST['captcha'];

if($user == "user" && $pass == "pass" && verifyCaptcha($captcha)) {
    echo "success";
} else {
    echo "Usuario no valido";
}
?>