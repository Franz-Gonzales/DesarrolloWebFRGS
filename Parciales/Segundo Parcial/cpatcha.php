<?php

$captcha = '';

for ($i = 0; $i < 4; $i++) {

  $randomChar = chr(rand(65, 90)); 
  // $captcha = $randomChar; 
  $captcha .= $randomChar; 

}

// echo $captcha;

$image = imagecreate(120, 40);
$background_color = imagecolorallocate($image, 255, 255, 255);

$text_color = imagecolorallocate($image, 0, 0, 0); 

imagestring($image, 5, 40, 10, $captcha, $text_color); 

header('Content-type: "./images/png"');
// header('./images/png');

imagepng($image);

imagedestroy($image);

// echo imagedestroy($image);

?>
