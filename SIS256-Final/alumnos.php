<?php 

class Alumno{
    public $CU;
    public $nombre;
    public $apellido;

    public function __construct($CU, $nombre, $apellido){

        $this->CU = $CU;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
}

class ListaAlumnos {
    public $lista;

    public function __construct(){
        $this->lista = [];
    }

    public function insertarAlumno($CU, $nombre, $apellido){

        $alumno = new Alumno($CU, $nombre, $apellido);
        array_push($this->lista, $alumno);

    }

    public function eliminarAlumno(){

        array_pop($this->lista);
    }

    public function mostrarLista(){
        
        return $this->lista;
    }
}

?>