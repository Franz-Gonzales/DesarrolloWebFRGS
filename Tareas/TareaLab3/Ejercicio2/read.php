<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Habitaciones</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .buscar {
            margin-bottom: 20px;
        }

        form {
            display: flex;
            align-items: center;
            
        }

        label {
            margin-right: 10px;
            color: #333;
        }

        input[type="text"] {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .container {
            margin-top: 20px;
            text-align: center;
            width: 900px;
        }

        button {
            padding: 8px 15px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            opacity: 0.8;
        }

        .edit-button {
            background-color: #2196F3;
            color: white;
        }

        .delete-button {
            background-color: #f44336;
            color: white;
        }

        .photos-button {
            background-color: #FF9800;
            color: white;
        }

        .add-button {
            margin-top: 20px;
            background-color: blue;
            color: white;
        }

        .add-button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php
    include('./conexion.php');

    $sql = "SELECT h.id, h.nro, h.id_tipo_habitacion, h.bano_privado, h.espacio, h.precio, t.descripcion FROM habitacion h LEFT JOIN tipo_habitacion t ON h.id_tipo_habitacion = t.id";

    // Procedimiento para buscar tipo de habitaciones
    if (isset($_GET['buscar'])) {
        $buscar = $_GET['buscar'];
        $sql .= " WHERE t.descripcion LIKE '%$buscar%'";
    }

    $result = $connect->query($sql);
    ?>

    <h1>Tipo de Habitaciones</h1>

    <div class="buscar">
        <form action="read.php" method="get">
            <label for="buscar">Buscar</label>
            <input type="text" name="buscar" placeholder="Tipo de habitacion">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <?php if ($result->num_rows > 0) { ?>
        <div class="container">
            <h2>Lista de habitaciones</h2>
            <table>
                <tr>
                    <th>Nro</th>
                    <th>Tipo de Habitacion</th>
                    <th>Baño privado</th>
                    <th>Espacio</th>
                    <th>Precio</th>
                    <th>Operaciones</th>
                    <th>Fotografias</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row["nro"]; ?></td>
                        <td><?php echo $row["descripcion"]; ?></td>
                        <td><?php echo $row["bano_privado"]; ?></td>
                        <td><?php echo $row["espacio"]; ?></td>
                        <td><?php echo $row["precio"]; ?></td>
                        <td>
                            <a href="form_update_habitacion.php?id=<?php echo $row['id']; ?>">
                                <button class="edit-button">Editar</button>
                            </a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>">
                                <button class="delete-button">Eliminar</button>
                            </a>
                        </td>
                        <td>
                            <a href="./Fotos_habitacion/read.php?id_habitacion=<?php echo $row['id']; ?>">
                                <button class="photos-button">Ver fotos</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <a href="form_habitacion.php">
                <button class="add-button">Registrar Habitacion</button>
            </a>
        </div>

    <?php } else { ?>
        <p>No existen registros que mostrar.</p>
    <?php } ?>
</body>

</html>
