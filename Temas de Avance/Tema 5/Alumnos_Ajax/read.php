<?php
// include('verificar.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="ajax.js"></script>
    <link rel="stylesheet" href="./style.css">
    <style>
        a {
            text-decoration: none;
            margin-top: 5px;
        }

        .buscar {
            display: flex;
            justify-content: center;
            justify-content: space-evenly;
            flex-direction: column;
            background: var(--background-white);
            border-radius: 5px;
            margin-top: 10px;
            padding: 10px;
        }

        .buscar input {
            padding: 7px;
            border-radius: 5px;
            border: 1px solid black;
        }
    </style>
</head>

<body class="body">

    <h1>Facultad de Tecnología</h1>

    <div class="buscar">
        <form action="read.php" method="get">
            <label for="buscar">Buscar</label>
            <input type="text" name="buscar" placeholder="Nombre o Apellido">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <?php
    include('bd.php');

    $ordenar = isset($_GET['ordenar']) ? $_GET['ordenar'] : 'id';
    // $ordenar = in_array($ordenar, ['nombreA', 'apellido', 'CU', 'carrera']) ? $ordenar : 'id';

    $sql = "SELECT a.id, fotografia, a.nombres, apellidos, CU, c.nombre AS carrera FROM alumno a LEFT JOIN carrera c ON a.idcarrera = c.id";

    // Procedimiento para buscar alumnos
    if (isset($_GET['buscar'])) {
        $buscar = $_GET['buscar'];
        $sql .= " WHERE a.nombre LIKE '%$buscar%' OR a.apellido LIKE '%$buscar%'";
    }

    $sql .= " ORDER BY $ordenar";

    // echo $sql;
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
    ?>

        <div class="contaniner-alumnos">
            <h2>Lista de Alumnos</h2>
            <table>
                <tr>
                    <th>Fotografía</th>
                    <th><a href="read.php?ordenar=nombre" class="date">Nombres</a></th>
                    <th><a href="read.php?ordenar=apellido" class="date">Apellidos</a></th>
                    <th><a href="read.php?ordenar=CU" class="date">C.U.</a></th>
                    <th><a href="read.php?ordenar=carrera" class="date">Carrera</a></th>
                    <th>Operaciones</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <td><img src="./images/<?php echo $row["fotografia"]; ?>" alt="" width="50px"></td>
                        <td><?php echo $row["nombres"]; ?></td>
                        <td><?php echo $row["apellidos"]; ?></td>
                        <td><?php echo $row["CU"]; ?></td>
                        <td><?php echo $row["carrera"]; ?></td>
                        <td class="operaciones">
                        <a href="javascript:editarAlumno(<?php echo $row['id']; ?>)"><button class="button1">Editar</button></a>
                            <a href="javascript:deleteAlumno(<?php echo $row['id']; ?>)"><button class="button2">Eliminar</button></a>
                        </td>

                    </tr>
                <?php } ?>
            </table>

        <?php
    } else {
        ?>
            <p>No existe registros que mostrar</p>
        <?php } ?>
        <a href="javascript:cargarContenido('form_alumnos.php')"><button class="btn_cancelar">Registrar Alumno</button></a>

        </div>
</body>

</html>