<?php

include('db.php');

$materia = $_GET['materia'];

echo 'La materia seleccionada es: ' . $materia . '<br>';

$dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];

$sql = "SELECT materia, dia, hora FROM horarios WHERE materia = '$materia'";
$result = $connect->query($sql);

$horarios = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($horarios, $row);
    }
}
?>

<div class="horarios">
    <h2>Horarios de la Materia</h2>
    <table class="tabla-horarios">
        <tr>
            <th>Hora</th>
            <?php foreach ($dias as $dia){ ?>
                <th><?php echo $dia; ?></th>
            <?php } ?>
        </tr>

        <?php for ($i = 7; $i <= 19; $i++){ ?>
            <tr>
                <td class="horas"><?php echo $i . ' - ' . ($i + 1); ?></td>
                <?php foreach ($dias as $dia){ ?>
                    <?php
                    $turno = '';
                    $asignatura = '';
                    foreach ($horarios as $horario) {
                        if ($i == $horario['hora'] && $dia == $horario['dia']) {
                            $turno = 'horario';
                            $asignatura = $materia;
                        }
                    }
                    ?>
                    <td class="<?php echo $turno; ?>"><?php echo $asignatura; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</div>

