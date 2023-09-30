<?php

$cola = $_SESSION['cola'];

if(isset($_POST['operacion'])){
    $operacion = $_POST['operacion'];
    $elemento = $_POST['elemento'];

    switch($operacion){
        case 'insertarDelante':
            $cola->insertarDelante($elemento);
            break;
        case 'insertarDetras':
            $cola->insertarDetras($elemento);
            break;
        case 'eliminar':
            $cola->eliminar();
            break;
        default:
            echo "Operacion no encontrada";
            break;
    }
}

// Actualizar la cola en la sesión
$_SESSION['cola'] = $cola;


?>