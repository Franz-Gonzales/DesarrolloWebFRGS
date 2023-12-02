<script src="./script.js"></script>
<?php
include('db.php');

  $materia = $_GET['materia'];

//   echo $materia;

$sql = "SELECT id, nombres_apellidos, calificacion FROM alumnos WHERE materia = '$materia'";

// echo $sql;

$result = $connect->query($sql);
if ($result->num_rows > 0) {
?>


<div class="container-calificaciones">
    <h2>Materia: <?php echo $materia; ?></h2>
    <form action="javascript:update()" method="post" id="form-edit">
    <table border="1">
        <tr>
            <th>Nro</th>
            <th>Nombre y Apellido</th>
            <th>Calificación</th>
        </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombres_apellidos']; ?></td>
                    <td><input type="number" name="calificaciones[]" value="<?php echo $row['calificacion']; ?>"></td>
                    <input type="hidden" name="ides[]" value="<?php echo $row['id']; ?>">
                </tr>

            <?php } ?>
    </table>
    <input type="submit" value="Registar Cambios">
    
    </form>
</div>

<?php } ?>