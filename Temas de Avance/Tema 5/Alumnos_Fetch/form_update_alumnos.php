<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="fetch.js"></script>
    <style>
        .contaniner-alumno form {
            display: flex;
            justify-content: center;
            justify-content: space-evenly;
            flex-direction: column;
            background: var(--background-white);
            border-radius: 5px;
            height: 480px;
            width: 550px;
            margin-top: 10px;
            padding: 10px;
        }

        .contaniner-alumno form .datos-alumnos .photo{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        img{
            width: 80px;
            border-radius: 5px;
        }
    </style>
</head>

<body class="body">
    <?php
    include("bd.php");

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql_alumno = "SELECT fotografia, nombres, apellidos, CU, idcarrera FROM alumno WHERE id = $id";
        $result_alumno = $connect->query($sql_alumno);
        $row = $result_alumno->fetch_assoc();

        $sql_carrera = "SELECT id, nombre FROM carrera";
        $result_carrera = $connect->query($sql_carrera);
    }

    ?>
    <h1>FACULTAD DE TECNOLOGIA</h1>
    <div class="contaniner-alumno">
        <form action="javascript:update()" method="post" enctype="multipart/form-data" id="form-update">
            <h2>Formulario para Editar los datos Alumnos</h2>
            <div class="datos-alumnos">
                <div class="photo">
                    <label for="fotografia">Fotografía:</label>
                    <img src="./images/<?php echo $row['fotografia']; ?>" alt="" width="80px">
                </div>
                <div>
                    <input type="file" name="fotografia">
                </div>
            </div>
            <div class="datos-alumnos">
                <label for="nombres">Nombre:</label>
                <input type="text" name="nombres" value="<?php echo $row['nombres']; ?>">
            </div>
            <div class="datos-alumnos">
                <label for="apellidos">Apellido:</label>
                <input type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>">
            </div>
            <div class="datos-alumnos">
                <label for="CU">C.U.:</label>
                <input type="text" name="CU" value="<?php echo $row['CU']; ?>">
            </div>
            <div class="datos-alumnos">
                <label for="idcarrera">Carrera: </label>
                <select name="idcarrera" id="idcarrera">
                    <?php
                    while ($row_carrera = $result_carrera->fetch_assoc()) { ?>
                        <option value="<?php echo $row_carrera["id"]; ?>" <?php echo $row_carrera["id"] === $row["idcarrera"] ? "selected" : ''; ?> ><?php echo $row_carrera['nombre']; ?></option>
                    <?php } ?>

                </select>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Actualizar" class="registrar">
        </form>
    </div>
    <a href="javascript:cargarContenido('read.php')"><button class="btn_cancelar">Cancelar Edición</button></a>

</body>

</html>