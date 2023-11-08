
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form alumnos</title>
    <script src="ajax.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body">
    <?php include("bd.php");

    $sql = "SELECT id, nombre FROM carrera";
    $result = $connect->query($sql);

    ?>

    <h1>FACULTAD DE TECNOLOGIA</h1>
    <div class="contaniner-alumno">
        <!-- PARA AGREGAR UNA FOTO SE REQUIERE EL ATRIBUTO enctype -->
        <form action="javascript:registrarAlumno()" method="POST" enctype="multipart/form-data" id="form-registro">
            <h2>Formulario para registrar Alumnos</h2>
            <div class="datos-alumnos">
                <label for="fotografia">Fotografía</label>
                <input type="file" name="fotografia" id="fotografia">
            </div>
            <div class="datos-alumnos">
                <label for="nombres">Introduce el nombre:</label>
                <input type="text" name="nombres" placeholder="Nombre">
            </div>
            <div class="datos-alumnos">
                <label for="apellidos">Introduce el apellido:</label>
                <input type="text" name="apellidos" placeholder="Apellido">
            </div>
            <div class="datos-alumnos">
                <label for="CU">Introduce C.U.:</label>
                <input type="text" name="CU" placeholder="C.U.">
            </div>
            <div class="datos-alumnos">
                <label for="idcarrera">Carrera: </label>
                <select name="idcarrera" id="idcarrera">
                    <?php
                    while ($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row["id"]; ?>"><?php echo $row["nombre"]; ?></option>
                    <?php } ?>

                </select>
            </div>

            <input type="submit" value="Registrar" class="registrar">
        </form>
        <a href="javascript:cargarContenido('read.php')"><button class="btn_cancelar">Cancelar Registro</button></a>
    </div>

</body>

</html>