<?php
include('verificar.php');
include('permisos.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
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
    include("../db.php");

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql_alumno = "SELECT fotografia, nombre, apellido, CU, id_carrera FROM alumnos WHERE id = $id";
        $result_alumno = $connect->query($sql_alumno);
        $row = $result_alumno->fetch_assoc();

        $sql_carrera = "SELECT id_carrera, nombre, facultad FROM carreras";
        $result_carrera = $connect->query($sql_carrera);
    }

    ?>
    <h1>FACULTAD DE TECNOLOGIA</h1>
    <div class="contaniner-alumno">
        <form action="update.php" method="post" enctype="multipart/form-data">
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
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
            </div>
            <div class="datos-alumnos">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>">
            </div>
            <div class="datos-alumnos">
                <label for="CU">C.U.:</label>
                <input type="text" name="CU" value="<?php echo $row['CU']; ?>">
            </div>
            <div class="datos-alumnos">
                <label for="id_carrera">Carrera: </label>
                <select name="id_carrera" id="id_carrera">
                    <?php
                    while ($row_carrera = $result_carrera->fetch_assoc()) { ?>
                        <option value="<?php echo $row_carrera["id_carrera"]; ?>" <?php echo $row_carrera["id_carrera"] === $row["id_carrera"] ? "selected" : ''; ?>><?php echo $row_carrera['nombre']; ?></option>
                    <?php } ?>

                </select>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Actualizar" class="registrar">
        </form>
    </div>
    <a href="read.php"><button class="btn_cancelar">Cancelar Edición</button></a>

</body>

</html>