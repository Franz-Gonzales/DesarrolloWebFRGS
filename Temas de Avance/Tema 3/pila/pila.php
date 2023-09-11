
<?php

$elemento = $_GET['elemento'];
class Pila
{
    // private $tope;
    // private $datos;

    private $elementos_pila = [];

    // Constructor para inicializar la pila
    public function __construct()
    {
        $this->elementos_pila = [];
    }

    // Funcion insertar elemento en la pila
    public function push($elemento)
    {
        array_push($this->elementos_pila, $elemento);
    }

    // Funcion quitar y devolver el elemento de la parte superior de la pila
    public function pop()
    {
        if (!$this->isEmpty()) {
            return array_pop($this->elementos_pila);
        } else {
            return null;
        }
    }

    // Verificar si la pila esta vacia
    public function isEmpty()
    {
        return empty($this->elementos_pila);
    }

    // Para obtener el tamaño de la pila
    public function size()
    {
        return count($this->elementos_pila);
    }

    // Para obtener el elemento en la parte superior de la pila sin quitarlo
    public function cima()
    {
        // return end($this->elementos_pila);
        if (!$this->isEmpty()) {
            return $this->elementos_pila[count($this->elementos_pila) - 1];
        } else {
            return null;  //pila vacia
        }
    }
}

$pila = new Pila();

$pila->push($elemento);
// $pila->push(2);
// $pila->push(3);
// $pila->push(4);

echo "El elemento cima de la pila de la parte superior es: " . $pila->cima();
echo "<br>";

echo "El tamaño de la pila es: " . $pila->size();
echo "<br>";

// $elementoEliminado = $pila->pop();
// echo "El elemento eliminado de la pila es: " . $elementoEliminado;
echo "<br>";

echo "El tamaño de la pila despues de quitar el elemento es: " . $pila->size();

?>
