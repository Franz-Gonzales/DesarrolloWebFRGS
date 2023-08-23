
<?php
include("function.php");
$cadena = $_GET["cadena"];

echo "<h2>Encontrar la palabra más grande de una cadena</h2>";
echo "<br>";
echo "La cadena a procesar es: " . "<strong>$cadena</strong>";
$palabra_mas_larga = palabraMasLarga($cadena);
echo "<br>";
echo "La palabra más larga de la cadena es: " . "<strong>$palabra_mas_larga</strong>";
?>