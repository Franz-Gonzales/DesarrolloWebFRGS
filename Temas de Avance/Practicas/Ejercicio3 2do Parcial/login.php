<?php
session_start();
require 'captcha.php';

echo '
    <label for="captcha">Captcha:</label><br>
    <input type="text" id="captcha" name="captcha"><br>
    <button type="button" onclick="validateLogin()">Loguearse</button>
';
?>