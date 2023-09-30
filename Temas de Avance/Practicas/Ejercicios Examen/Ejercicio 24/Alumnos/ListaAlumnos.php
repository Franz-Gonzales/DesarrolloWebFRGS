<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            display: flex;
            justify-content: center;
        }

        .contaniner-alumnos{
            border: 1px solid black;
        }

        table tr th{
            border: 1px solid black;
            padding: 10px;
            background: #aaa;
            color: black;
        }

        table tr td{
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    include('../db.php');

    $sql = "SELECT a.nombre, a.apellido, a.CU, a.sexo, c.carrera FROM alumnos a LEFT JOIN carreras c ON a.codigo_carrera = c.codigocarrera";
    // echo $sql; 
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
    ?>

        <div class="contaniner-alumnos">
            <table>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>C.U.</th>
                    <th>Sexo</th>
                    <th>Carrera</th>
                </tr>
                <?php while ($row_alumno = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row_alumno['nombre']; ?></td>
                        <td><?php echo $row_alumno['apellido']; ?></td>
                        <td><?php echo $row_alumno['CU']; ?></td>
                        <td><?php echo $row_alumno['sexo']; ?></td>
                        <td><?php echo $row_alumno['carrera']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    <?php } else {
        echo "No existe registros que mostrar";
    } ?>
</body>

</html>