<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php session_start();

    if ($_SESSION['usuario'] == 'admin') {
        echo "El usuario es: " . $_SESSION['usuario'];
    ?>
        <h2>Menu de Opciones</h2>
        <div class="container">
            <ul>
                <li><a href="#">Crear</a></li>
                <li><a href="#">Listar</a></li>
                <li><a href="#">Borrar</a></li>
                <li><a href="#">Salir</a></li>
            </ul>
        </div>
        <?php
    } else {
        if ($_SESSION['usuario'] == 'usuario') {
            echo "El usuario es: " . $_SESSION['usuario'];
        ?>
            <h2>Menu de Opciones</h2>
            <div class="container">
                <ul>
                    <li><a href="#">Listar</a></li>
                </ul>
            </div>
    <?php
        }
    }
    ?>
</body>

</html>