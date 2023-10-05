<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotografías de la Habitación</title>

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

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        img {
            height: 250px;
            width: 250px;
            object-fit: cover;
        }

        .images {
            margin-top: 20px;
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

        .delete-button {
            background-color: #f44336;
            color: white;
        }

        .add-button {
            margin-top: 10px;
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
    include('../conexion.php');

    $id_habitacion = $_GET['id_habitacion'];

    echo "El Id es: " . $id_habitacion . "<br>";

    $sql = "SELECT id, fotografia FROM fotos_habitacion WHERE id_habitacion = $id_habitacion";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) { ?>
        <h1>Fotografías de la Habitación</h1>
        <div class="images">
            <table>
                <tr>
                    <th>Fotografía</th>
                    <th>Operaciones</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><img src="./images/<?php echo $row['fotografia']; ?>"></td>
                        <td>
                            <a href="delete.php?id=<?php echo $row['id']; ?>&
                            fotografia=<?php echo $row['fotografia']; ?>&
                            id_habitacion=<?php echo $id_habitacion; ?>">
                                <button class="delete-button">Eliminar Foto</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
    <?php
    } else {
        echo "No hay imágenes que mostrar<br>";
    }
    ?>
    <p>Subir Fotos para la Habitación: </p>
    <a href="./form_fotos_habitacion.php?id=<?php echo $id_habitacion; ?>">
        <button class="add-button">Subir Fotos</button>
    </a>
</body>

</html>
