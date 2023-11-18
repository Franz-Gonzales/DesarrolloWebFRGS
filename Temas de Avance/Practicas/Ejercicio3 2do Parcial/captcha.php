<?php
function generateRandomString($length = 4) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function verifyCaptcha($captcha) {
    $originalCaptcha = $_SESSION['captcha'];
    if($originalCaptcha === $captcha) {
        return true;
    } else {
        return false;
    }
}

function generateCaptcha() {
    $randomCaptcha = generateRandomString();
    $_SESSION['captcha'] = $randomCaptcha;
    return $randomCaptcha;
}
?>