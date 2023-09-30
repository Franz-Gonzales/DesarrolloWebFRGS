<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-size: 1.3rem;

        }
        strong{
            color: red
        }
    </style>
</head>

<body>

    <?php
    /* 14.  Elaborar un programa en php que implemente la clase examen con  las propiedades n, cadena, a, b, c inicie las propiedades en el constructor e implemente los siguientes métodos:
    a. Calcularfibonaci que permite rellenar y mostrar en un  control de selección los números fibonaci hasta n 
    b. Calcular mayor que obtiene y muestra los tres números y el numero mayor 
    resaltado con negrita  
    c. Piramide que muestra la cadena como una pirámide. Ej cadena=’EXAMEN’ 
    Muestra: 
                E 
               XAM 
               EXAME 
              EXAMEN 
    */

    $n = isset($_GET['n']) ? $_GET['n'] : '';
    $cadena = isset($_GET['cadena']) ? $_GET['cadena'] : '';
    $a = isset($_GET['a']) ? $_GET['a'] : '';
    $b = isset($_GET['b']) ? $_GET['b'] : '';
    $c = isset($_GET['c']) ? $_GET['c'] : '';



    class examen
    {
        private $n;
        private $cadena;
        private $a;
        private $b;
        private $c;

        function __construct($n, $cadena, $a, $b, $c)
        {
            $this->n = $n;
            $this->cadena = $cadena;
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        public function calcularFibonacci()
        {
            echo "<select>";
            $fibonacci = [0, 1];
            for ($i = 2; $i <= $this->n; $i++) {
                $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }
            for ($i = 1; $i <= $this->n; $i++) {
                echo "<option>" . $fibonacci[$i] . "</option>";
            }
            echo "</select>";

            // $fibonacci_d = [];
            // for($i = 1; $i <= $this->n; $i++){
            //     array_push($fibonacci_d, $fibonacci[$i]);
            // }
            // return $fibonacci_d;
        }

        public function calcular_mayor()
        {

            $numeros = [$this->a, $this->b, $this->c];
            $mayor = max($numeros);

            if ($this->a == $mayor) {
                echo "<p>Los números son: <strong>" . $this->a . "</strong>" . " " . $this->b, " " . $this->c . "</p>";
            } else {
                if ($this->b == $mayor) {
                    echo "<p>Los números son: " . $this->a . " " . "<strong>" . $this->b . "</strong>" . " " . $this->c . "</p>";
                } else {
                    echo "<p>Los números son: " . $this->a, " " . $this->b, " " . "<strong>" . $this->c . "</strong>" . "</p>";
                }
            }
        }


        public function mostrarPiramide()
        {
            $cadena = $this->cadena;

            for ($i = 0; $i < strlen($cadena); $i++) {
                for ($j = strlen($cadena) - $i; $j > 1; $j--) {
                    echo "&nbsp;&nbsp;";
                }

                //Imprimir la parte de la cadena
                for ($j = 0; $j <= $i; $j++) {
                    echo $cadena[$j];
                }
                echo "<br>";
            }
        }
    }

    $examen1 = new examen($n, $cadena, $a, $b, $c);

    if (isset($_GET['n'])) {
        echo "<h2>Calcular Fibonacci</h2>";
        $examen1->calcularFibonacci();
    } else {
        if (isset($_GET['a']) or isset($_GET['b']) or isset($_GET['c'])) {
            echo "<h2>Calcular mayor</h2>";
            $examen1->calcular_mayor();
        } else {
            echo "<h2>Piramide</h2>";
            $examen1->mostrarPiramide();
        }
    }

    ?>

</body>

</html>