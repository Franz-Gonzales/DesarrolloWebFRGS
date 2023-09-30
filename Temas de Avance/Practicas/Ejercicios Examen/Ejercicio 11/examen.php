<?php

class Examen {
    private $cadena1;
    private $cadena2;

    public function __construct($cadena1, $cadena2) {
        $this->cadena1 = $cadena1;
        $this->cadena2 = $cadena2;
    }

    public function cruzar() {
        $commonLetter = $this->findCommonLetter();
        
        if ($commonLetter !== false) {
            echo '<table border="1">';
            
            for ($i = 0; $i < strlen($this->cadena2); $i++) {
                echo '<tr>';
                for ($j = 0; $j < strlen($this->cadena1); $j++) {
                    $currentLetter = $this->cadena1[$j];
                    $cellContent = ($currentLetter === $commonLetter) ? $this->cadena2[$i] : '&nbsp;';
                    $cellColor = ($currentLetter === $commonLetter) ? 'background-color: blue;' : '';
                    
                    echo '<td style="width: 30px; height: 30px; text-align: center; ' . $cellColor . '">' . $cellContent . '</td>';
                }
                echo '</tr>';
            }
            
            echo '</table>';
        } else {
            echo 'No existen letras comunes.';
        }
    }

    private function findCommonLetter() {
        for ($i = 0; $i < strlen($this->cadena1); $i++) {
            $letter = $this->cadena1[$i];
            if (strpos($this->cadena2, $letter) !== false) {
                return $letter;
            }
        }
        return false;
    }
}

// Ejemplo de uso
$cadena1 = "Desarrollo";
$cadena2 = "Web";

$examen = new Examen($cadena1, $cadena2);
$examen->cruzar();
?>
