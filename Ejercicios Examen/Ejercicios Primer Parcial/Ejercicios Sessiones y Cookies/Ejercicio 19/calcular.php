<?php

$operacion = $_GET['operacion'];
$numero = $_COOKIE['numero'];

switch ($operacion) {
    case 'Sumatoria':
        $resultado = new funciones($numero);
        echo "La Sumatoria de los $numero números es: " . $resultado->sumatoria();
        break;
    case 'Factorial':
        $resultado = new funciones($numero);
        echo "El Factorial de $numero es: " . $resultado->factorial();
        break;
    case 'Fibonacci':
        $resultado = new funciones($numero);
        echo "El Fibonacci de $numero es: ". $resultado->fibonacci();
        break;
    case 'Dividir':
        $resultado = new funciones($numero);
        echo "Los divisores de $numero son: " . $resultado->dividir();
        break;
}


class funciones
{
    public $numero;
    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function sumatoria()
    {
        $sum = 0;
        for ($i = 1; $i <= $this->numero; $i++) {
            $sum = $sum + $i;
        }
        return $sum;
    }

    public function factorial()
    {
        $factorial = 1;
        for ($i = 1; $i <= $this->numero; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }

    public function fibonacci()
    {
        if ($this->numero == 1) {
            return 0;
        }
        if ($this->numero == 2) {
            return 1;
        }

        $fibonacci = [0, 1];
        for ($i = 2; $i <= $this->numero; $i++) {
            $fibonacci[$i] =  $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        return implode(', ', $fibonacci);
    }

    public function dividir()
    {
        $dividir = [];
        for ($i = 1; $i <= $this->numero; $i++) {
            if ($this->numero % $i == 0) {
                $dividir[] = $i;
            }
        }
        return implode(', ', $dividir);
    }
}
