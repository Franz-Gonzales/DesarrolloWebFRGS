<?php
include("../ejercicio1/conexion.php"); 

$sql = "SELECT alumnos.id, alumnos.fotografia, alumnos.nombres, alumnos.apellidos, alumnos.cu, alumnos.sexo, carreras.carrera 
        FROM alumnos 
        JOIN carreras ON alumnos.codigocarrera = carreras.codigo";
$resultado = $connect->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #1F4E79;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #EDEDED;
        }
        tr:nth-child(odd) {
            background-color: #BFBFBF;
        }
        img {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <h1>Lista de Alumnos</h1>
    <table>
        <tr>
            <th>Nro</th>
            <th>Fotografía</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>CU</th>
            <th>Sexo</th>
            <th>Carrera</th>
        </tr>

        <?php if ($resultado->num_rows > 0): ?>
            <?php $numero = 1; ?>
            <?php while($fila = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $numero++; ?></td>
                    <td><img src="../ejercicio1/images/<?php echo $fila['fotografia']; ?>" alt="Foto de <?php echo $fila['nombres']; ?>"></td>
                    <td><?php echo $fila['nombres']; ?></td>
                    <td><?php echo $fila['apellidos']; ?></td>
                    <td><?php echo $fila['cu']; ?></td>
                    <td><?php echo $fila['sexo']; ?></td>
                    <td><?php echo $fila['carrera']; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">No hay alumnos registrados.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>

<?php
$connect->close();
?>
