<?php

$operaciones = $_GET['operacion'];
$a = $_COOKIE['a'];
$b = $_COOKIE['b'];

switch($operaciones){
    case 'Sumar':
        $resultado = new calculadora($a, $b);
        echo "La Suma de los números es: " . $resultado->sumar();
        break;
    case 'Restar':
        $resultado = new calculadora($a, $b);
        echo "La Resta de los números es: " . $resultado->restar();
        break;
    case 'Multiplicar':
        $resultado = new calculadora($a, $b);
        echo "La Multiplicación de los números es: " . $resultado->multiplicar();
        break;
    case 'Dividir':
        $resultado = new calculadora($a, $b);
        echo "La Division de los números es: " . $resultado->dividir();
        break;
}



    class calculadora{
        public $a;
        public $b;

        public function __construct($a, $b)
        {
            $this->a = $a;
            $this->b = $b;
        }

        public function sumar(){

            return $this->a + $this->b;
        }

        public function restar(){
            return $this->a - $this->b;
        }

        public function multiplicar(){
            return $this->a * $this->b;
        }

        public function dividir(){
            return $this->a / $this->b;
        }
    }

    // $a=10;
    // $b=5;

    // $calculadora1 = new calculadora($a, $b);

    // echo "La suma es :".$calculadora1->sumar();
?>