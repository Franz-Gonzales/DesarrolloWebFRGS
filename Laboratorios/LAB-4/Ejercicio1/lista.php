<?php

// $lista_estudiante = [

//     [1, $nombre => 'Juan Perez',$edad => 25, $materia => 'SIS-256',$nota => 83],
//     [2, $nombre => 'Ricardo Luna',$edad => 30, $materia => 'SIS-258',$nota => 70],
//     [3, $nombre => 'Teresa Tomasa',$edad => 26, $materia => 'SIS-256',$nota => 84],
//     [4, $nombre => 'Favian Umbre',$edad => 24, $materia => 'SIS-258',$nota => 70]
// ];


// echo $lista_estudiante;


$lista_estudiante = [
    ['nro' => 1, 'nombre' => 'Juan Perez', 'edad' => 25, 'materia' => 'SIS-256', 'nota' => 83],
    ['nro' => 2, 'nombre' => 'Ricardo Luna', 'edad' => 30, 'materia' => 'SIS-258', 'nota' => 70],
    ['nro' => 3, 'nombre' => 'Teresa Tomasa', 'edad' => 26, 'materia' => 'SIS-256', 'nota' => 84],
    ['nro' => 4, 'nombre' => 'Favian Umbre', 'edad' => 24, 'materia' => 'SIS-258', 'nota' => 70]
];

// echo json_encode($lista_estudiante, JSON_PRETTY_PRINT);

// echo $lista_estudiante;

// header('Content-Type: application/json');

echo json_encode($lista_estudiante, JSON_PRETTY_PRINT);

// echo json_encode($provincias, JSON_UNESCAPED_UNICODE);


?>