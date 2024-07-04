<?php

include('db.php');

$sql = "SELECT materia FROM usuarios_materias";
$result = $connect->query($sql);

$meses = [
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'
];

?>

<div class="informes">
    <h2>Formulario informes</h2>
    <form action="javascript:registrarInforme()" method="post" id="form-informe">
        <div>
            <label for="mes">Mes: </label>
            <select name="mes" id="mes">
                <option value="">Seleccione el mes</option>
                <?php foreach($meses as $mes){ ?>
                    <option value="<?php echo $mes ?>"><?php echo $mes ?></option>
                <?php } ?>
            </select>
        </div>
        <?php while($row = $result->fetch_assoc()){ ?>
        <div>
            <label for="materia"><?php echo $row['materia'] ?> :</label>
            <input type="number" name="porcentajes[]">
        </div>
        <input type="hidden" name="materias[]" value="<?php echo $row['materia'] ?>">
        <?php } ?>

        <button type="submit" class="btn_insertar">Registrar</button>
    </form>
</div>
