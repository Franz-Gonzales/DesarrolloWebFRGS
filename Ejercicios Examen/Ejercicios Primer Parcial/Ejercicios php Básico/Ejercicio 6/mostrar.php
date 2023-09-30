<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $nombre = $_GET['nombre'];
        $ciudad = $_GET['ciudad'];
    ?>

    <p>Nombre: <b><?php echo $nombre?></b></p>
    <p>Ciudad: <span><?php echo $ciudad?></span></p>
</body>
</html>