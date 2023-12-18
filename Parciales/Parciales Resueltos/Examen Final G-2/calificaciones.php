<?php
session_start();
include('db.php');

if(!isset($_SESSION['id'])){
    header('Location:login.html');
}

$id = $_SESSION['id'];
// echo 'El id es = '. $id;

$sql = "SELECT materia FROM usuarios_materias WHERE idusuario = $id";
$result = $connect->query($sql);

?>

<div class="contenido-calificaciones">
    <h3>Calificaciones</h3>
    <select name="calificaciones" id="materia" onchange="editarCalificaciones()">
        <option value="">Seleccionar materia</option>
        <?php  while ($row = $result->fetch_assoc()) { ?>
            <option value="<?php echo $row['materia'] ?>"><?php echo $row['materia'] ?></option>
        <?php } ?>
    </select>
</div>