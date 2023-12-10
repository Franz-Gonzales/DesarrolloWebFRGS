<?php
session_start();
// session_unset();
// session_destroy();
// session_start();


$captcha = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdfghijklmnopqrstuvwxyz"), 0, 4);

// Guardar el captcha en la sesión para la verificación
$_SESSION['captcha'] = $captcha;

$font = 8;
$width = 100; 
$height = 30; 

// Crear una imagen con el captcha
$image = imagecreatetruecolor($width, $height);
$backgroundColor = imagecolorallocate($image, 140, 245, 218);
$textColor = imagecolorallocate($image, 0, 0, 0);

imagefill($image, 0, 0, $backgroundColor);
imagestring($image, $font, 20, 10, $captcha, $textColor);


// Mostrar la imagen como tipo de contenido de la imagen
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);


?>