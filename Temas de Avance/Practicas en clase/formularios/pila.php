<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // $numeros = range(1,20);
    // echo $numeros;
    class pila
    {
        public $max = 0;
        
        public $tope = 0;

        public function __construct($m){
            $this->max = $m;
        }

        public $datos = array();
        public function introducir($dato)
        {
            // if($tope == $max){
            //     return;
            // }
            $this->datos[] = $dato;
        }
        public function eliminar()
        {
            return array_pop($this->datos);
        }
        
    }

    ?>

</body>

</html>