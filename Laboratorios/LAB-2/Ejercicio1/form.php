<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 300px;
            margin: 0 auto;
            width: 300px;
            padding: 20px;
            border: 2px solid yellow;
            background-color: gray;
            text-align: center;
            font-family: sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            height: 150px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Conversor de numero en Unidades</h2>
        <form method="post" action="unidadmedida.php">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" required>

            <label for="unidad_inicio">Unidad de Medida:</label>
            <select name="unidad_inicio" id="unidad_inicio">
                <?php

                $unidad = [
                    'Milimetros',
                    'Centimetros',
                    'Decimetros',
                    'Metros',
                    'Kilometros'
                ];

                foreach ($unidad as $m) { ?>
                    <option value="<?php echo $m; ?>"><?php echo $m; ?></option>
                <?php } ?>
            </select>


            <label for="unidad_destino">Unidad de Medida de Destino:</label>
            <select name="unidad_destino" id="unidad_destino">
                <?php

                $unidad_destino = [
                    'Milimetros',
                    'Centimetros',
                    'Decimetros',
                    'Metros',
                    'Kilometros'
                ];

                // foreach ($unidad_destino as $m_d => $valor_d) { 
                foreach ($unidad_destino as $m_d) { ?>
                    <option value="<?php echo $m_d; ?>"><?php echo $m_d; ?></option>
                <?php } ?>
            </select>

            <input type="submit" name="convertir" value="Convertir">
        </form>
    </div>
</body>

</html>