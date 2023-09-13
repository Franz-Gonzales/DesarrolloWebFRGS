<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container-carreras">
        <h1>Facultad de Tecnología</h1>
        <form action="create.php" method="post">
            <h2>Formulario para registrar Carrera</h2>
            <div class="datos-carrera">
                <label for="nombre_carrera">Carrera:</label>
                <input type="text" name="nombre_carrera" placeholder="Nombre">
            </div>
            <div class="datos-carrera">
                <label for="facultad">Faculdad:</label>
                <input type="text" name="facultad" placeholder="Facultad">
            </div>
            <input type="submit" value="Registrar Carrera" class="registrar">
        </form>
        <a href="read.php"><button class="btn_cancelar">Cancelar</button></a>
    </div>
</body>

</html>