<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotos de Habitación</title>

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

        form {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0;
            color: #333;
        }

        input[type="file"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="hidden"],
        input[type="submit"] {
            margin-top: 15px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            display: inline-block;
            text-decoration: none;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php
    $id_habitacion = $_GET['id'];
    ?>
    <h1>Fotos de Habitación</h1>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="fotografia">Fotografía:</label>
            <input type="file" name="fotografia" id="fotografia">
        </div>
        <input type="hidden" name="id_habitacion" value="<?php echo $id_habitacion; ?>">
        <input type="submit" value="Añadir foto">
    </form>
</body>

</html>
