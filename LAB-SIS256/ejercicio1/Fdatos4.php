<?php
include ("conexion.php");

$sql = "SELECT codigo, carrera FROM carreras"; 
$resultado = $connect->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Alumnos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="create.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Fotografía</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>CU</th>
                <th>Sexo</th>
                <th>Carrera</th>
            </tr>
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <tr>
                    <!-- Nombres únicos para los inputs -->
                    <td><input type="file" name="fotografia<?php echo $i; ?>"></td>
                    <td><input type="text" name="alumnos[<?php echo $i; ?>][nombre]"></td>
                    <td><input type="text" name="alumnos[<?php echo $i; ?>][apellido]"></td>
                    <td><input type="text" name="alumnos[<?php echo $i; ?>][cu]"></td>
                    <td>
                        <input type="radio" name="alumnos[<?php echo $i; ?>][sexo]" value="Masculino"> Masculino
                        <input type="radio" name="alumnos[<?php echo $i; ?>][sexo]" value="Femenino"> Femenino
                    </td>
                    <td>
                        <select name="alumnos[<?php echo $i; ?>][carrera]">
                            <?php
                            $resultado->data_seek(0);
                            if ($resultado->num_rows > 0) {
                                while ($fila = $resultado->fetch_assoc()) {
                                    echo "<option value='" . $fila['codigo'] . "'>" . $fila['carrera'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
            <?php endfor; ?>
        </table>
        <input type="submit" value="Insertar">
        <input type="reset" value="Borrar">
    </form>

</body>
</html>
