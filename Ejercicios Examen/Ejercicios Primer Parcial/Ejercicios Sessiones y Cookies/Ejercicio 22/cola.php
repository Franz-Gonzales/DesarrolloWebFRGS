<?php session_start();
/*Realizar un programa en php que implemente la clase cola, que tiene los siguientes 
Propiedades 
Tipo:string    que puede tener dos valores =’Normal’ ,’dobleentrada’ este valor debe de 
inicializarse en el constructor 
Metodos 
insertardelante 
insertardetras 
eliminar 
mostrar */

class cola
{
    private $tipo; // Tipo de cola
    private $elementos = [];

    public function __construct($tipo)
    {

        if ($tipo == "Normal" || $tipo == "dobleentrada") {
            $this->tipo = $tipo;
        } else {
            $this->tipo = "Nomal";
        }
    }

    // Metodos de la cola
    public function insertarDelante($elemento)
    {
        if ($this->tipo == 'dobleentrada') {
            array_unshift($this->elementos, $elemento);
            // $this->elementos[0] = $elemento;
        } else {
            $this->elementos[] = $elemento;
            // array_push($this->elementos, $elemento);
        }
    }

    public function insertarDetras($elemento)
    {
        if ($this->tipo == 'dobleentrada') {
            $this->elementos[] = $elemento;
        } else {
            array_push($this->elementos, $elemento);
        }
    }

    public function eliminar()
    {
        if (!$this->isVacia()) {
            if ($this->tipo == "dobleentrada") {
                array_shift($this->elementos);
            } else {
                array_pop($this->elementos);
            }
        } else {
            echo "La cola esta vacia";
        }
    }

    public function mostrar()
    {
        // if(!$this->isVacia()){
        //     foreach($this->elementos as $e){
        //         echo $e.' ';
        //     }
        // }else{
        //     echo "No hay elementos que mostrar";
        // }
        return $this->elementos;
    }

    public function isVacia()
    {
        return empty($this->elementos);
    }
}


// $tipo = isset($_GET['tipo']) ? $_GET['tipo'] : '';

if (!isset($_SESSION['cola'])) {
    // $_SESSION['cola'] = new cola($tipo);
    // echo "<meta http-equiv='refresh' content='2;url=menu.php'>";
    $_SESSION['cola'] = new cola('Normal');
    // $_SESSION['cola_d'] = new cola('dobleentrada');
}


// $cola_normal = new cola('Normal');
// $cola_dobleEntrada = new cola('dobleentrada');

// $cola_normal->insertarDetras(5);
// $cola_normal->insertarDetras(6);
// $cola_normal->insertarDetras(7);
// $cola_normal->insertarDetras(12);


// $cola_dobleEntrada->insertarDelante(1);
// $cola_dobleEntrada->insertarDelante(2);
// $cola_dobleEntrada->insertarDelante(3);
// $cola_dobleEntrada->insertarDelante(4);

// echo "Cola de Normal: " . implode(' ', $cola_normal->mostrar())."<br>";
// echo "Cola de Doble Entrada: " . implode(' ', $cola_dobleEntrada->mostrar())."<br>";

// $cola_normal->eliminar();
// $cola_dobleEntrada->eliminar();

// echo "Despúes de eliminar elementos de las colas: <br>";
// echo "Cola de Normal: " . implode(' ', $cola_normal->mostrar())."<br>";
// echo "Cola de Doble Entrada: " . implode(' ', $cola_dobleEntrada->mostrar());
