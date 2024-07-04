<?php
include('alumnos.php');

session_start();


if(!isset($_SESSION['ListaAlumnos'])){

    $_SESSION['ListaAlumnos'] = new ListaAlumnos();

}


if ($_POST) {

    $CU = $_POST['CU'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    // echo 'Cu = '. $CU . '<br>';
    // echo 'Nombres = '. $nombre . '<br>';
    // echo 'Apellidos = '. $apellido . '<br>';

    $_SESSION['ListaAlumnos']->insertarAlumno($CU, $nombre, $apellido);

}

if($_GET){

    $CU = $_GET['CU'];

    // $_SESSION['ListaAlumnos']->eliminarAlumno($CU);
    $_SESSION['ListaAlumnos']->eliminarAlumno();
}

$alumnos = $_SESSION['ListaAlumnos']->mostrarLista();

?>


<script src="./script.js"></script>
<div class="container-alumnos">
    <h1>Lista de Alumnos</h1>
    <table class="tabla-alumnos" border="1">
        <tr>
            <th>CU</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Operaciones</th>
        </tr>

        <?php foreach ($alumnos as $alumno){ ?>
            <tr>
                <td><?php echo $alumno->CU ?></td>
                <td><?php echo $alumno->nombre ?></td>
                <td><?php echo $alumno->apellido ?></td>
                <td><a href="javascript:eliminar('<?php echo $alumno->CU ?>')">Eliminar</a></td>
            </tr>
        <?php } ?>
    </table>

    <a href="javascript:cargarContenido2('alumnos.html')"><button class="btn_insertar">Insertar Alumno</button></a>
</div>
