<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"], button {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            display: inline-block;
            text-decoration: none;
            font-size: 16px;
        }

        input[type="submit"]:hover, button:hover {
            background-color: #45a049;
        }

        button {
            background-color: #ccc;
            margin-left: 10px;
            
        }

        button:hover {
            background-color: blue;
        }
    </style>
</head>

<body>
    <?php
    include("./conexion.php");

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "SELECT descripcion, numero_camas FROM tipo_habitacion WHERE id = $id";
        $result = $connect->query($sql);

        $row = $result->fetch_assoc();
    }

    ?>
    <h1>Tipo de Habitaciones</h1>
    <div class="container">
        <form action="update.php" method="post">
            <h2>Formulario para Editar Tipo de Habitaciones</h2>
            <div>
                <label for="descrip">Descripcion:</label>
                <input type="text" name="descrip" value="<?php echo $row['descripcion']; ?>">
            </div>
            <div>
                <label for="camas">Numero Camas:</label>
                <input type="number" name="camas" value="<?php echo $row['numero_camas']; ?>">
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Actualizar">
        </form>
        <a href="read.php"><button>Cancelar</button></a>
    </div>

</body>

</html>