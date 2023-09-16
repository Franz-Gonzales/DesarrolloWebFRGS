<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            font-family: sans-serif;
            width: 350px;
            margin: 0 auto;
            width: 500px;
            padding: 20px;
            border: 2px solid yellow;
            background-color: gray;
            text-align: center;
        }
        h1{
            color: red;
        }
    </style>
</head>

<body>

    <?php

    if (isset($_POST['convertir'])) {

        $cantidad = $_POST['cantidad'];
        $unidad_inicio = $_POST['unidad_inicio'];
        $unidad_destino = $_POST['unidad_destino'];

        $conversion = 0;

        switch ($unidad_inicio) {
            case 'Milimetros':
                $conversion = $cantidad * 0.001;
                break;
            case 'Centimetros':
                $conversion = $cantidad * 0.01;
                break;
            case 'Decimetros':
                $conversion = $cantidad * 0.1;
                break;
            case 'Metros':
                $conversion = $cantidad * 1;
                break;
            case 'Kilometros':
                $conversion = $cantidad * 1000;
                break;
        }

        switch ($unidad_destino) {
            case 'Milimetros':
                $conversion = $conversion / 0.001;
                break;
            case 'Centimetros':
                $conversion = $conversion / 0.01;
                break;
            case 'Decimetros':
                $conversion = $conversion / 0.1;
                break;
            case 'Metros':
                $conversion = $conversion / 1;
                break;
            case 'Kilometros':
                $conversion = $conversion / 1000;
                break;
        }

        // echo "<h2>El número introducido es: $cantidad</h2>";
        // echo "<h2>Resultado: $cantidad $unidad_inicio equivale a: $conversion $unidad_destino</h2>";
    }

    ?>

    <div class="container">
        <h1>Resultados</h1>
        <h2>El número introducido es: <?php echo $cantidad; ?></h2>
        <h2>Resultado: <?php echo $cantidad. ' '. $unidad_inicio; ?> equivale a: <?php echo $conversion.' '. $unidad_destino ?></h2>
    </div>
</body>

</html>