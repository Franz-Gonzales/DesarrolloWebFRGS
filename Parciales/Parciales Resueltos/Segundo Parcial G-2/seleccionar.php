<?php
    $meses = [
        1 => 'Enero',
        2 => 'Febrero',
        3 => 'Marzo',
        4 => 'Abril',
        5 => 'Mayo',
        6 => 'Junio',
        7 => 'Julio',
        8 => 'Agosto',
        9 => 'Septiembre',
        10 => 'Octubre',
        11 => 'Noviembre',
        12 => 'Diciembre'
    ];
?>


<div class="container-calendario">
    <div class="resultado" id="resultado" onchange="mostrarCalendario()">
        
    </div>

    <div class="seleccionar">
        <div>
            <label for="mes">Mes: </label>
            <select name="mes" id="mes" onchange="mostrarCalendario()">
                <?php foreach($meses as $mes => $nombre): ?>
                    <option value="<?php echo $mes ?>"><?php echo $nombre ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="anio">Año: </label>
            <select name="anio" id="anio" onchange="mostrarCalendario()">
                <?php for($i = 1975; $i <= 2020; $i++){ ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                <?php } ?>
            </select>
        </div>
    </div>

</div>