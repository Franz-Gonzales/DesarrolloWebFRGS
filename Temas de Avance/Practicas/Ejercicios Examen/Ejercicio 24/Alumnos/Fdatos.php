<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 950px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    include('../db.php');

    $numero = $_GET['numero'];

    $sql = "SELECT codigocarrera, carrera FROM carreras";
    // echo $sql;
    $result = $connect->query($sql);
    // $row = $result->fetch_assoc();

    ?>

    <div class="container">
        <form action="create.php" method="post">

            <table>
                <tr>
                    <th></th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>CU</th>
                    <th>Sexo</th>
                    <th>Carrera</th>
                </tr>
                <?php for ($i = 1; $i <= $numero; $i++) { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><input type="text" name="nombre[]" /></td>
                        <td><input type="text" name="apellido[]" /></td>
                        <td><input type="text" name="CU[]" /></td>
                        <td>
                            <!-- <input type="text" name="sexo[]" /> -->
                            <input type="radio" name="sexo<?php echo $i; ?>[]" value="Masculino" required>
                            <label>Masculino</label>

                            <input type="radio" name="sexo<?php echo $i; ?>[]" value="Femenino" required>
                            <label>Femenino</label>
                        </td>
                        <td>
                            <select name="codigocarrera[]" id="codigocarrera">
                                <?php foreach ($result as $row_carrera) { ?>
                                    <option value="<?php echo $row_carrera["codigocarrera"] ?>"><?php echo $row_carrera["carrera"] ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                <?php } ?>

            </table>
            <input type="hidden" name="numero" value="<?php echo $numero ?>">
            <input type="submit" value="Insertar">
        </form>

        <form action="Fdatos.php" method="get">
            <input type="hidden" name="numero" value="<?php echo $numero -= 1; ?>">
            <input type="submit" value="Borrar">
        </form>
    </div>

</body>

</html>