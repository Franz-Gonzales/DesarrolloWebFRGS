<?php
include('cola.php');
include('sesion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table tr th{
            border: 1px solid black;
            margin-left: 3px;
            width: 20px;
            background: yellow;
        }
    </style>
</head>

<body>
    <h2>Aplicar operaciones en la cola</h2>

    <form action="" method="post">
        <div>
            <label for="tipo">Tipo de Cola: </label>
            <select name="tipo" id="tipo">
                <option value="Normal <?php echo ($cola->isVacia() || $cola->isVacia()) ? 'selected' : ''; ?>">Normal</option>
                <option value="dobleentrada <?php echo ($cola->isVacia() && !$cola->isVacia()) ? 'selected' : ''; ?>">dobleentrada</option>
            </select>
            <input type="submit" value="Elegir">
        </div>
        <div>
            <label for="elemento">Elemento: </label>
            <input type="text" name="elemento" id="elemento">
        </div>

        <div>
            <button type="submit" name="operacion" value="insertarDelante">Insertar Adelante</button>
            <button type="submit" name="operacion" value="insertarDetras">Insertar Detras</button>
            <button type="submit" name="operacion" value="eliminar">Eliminar</button>
        </div>
    </form>

    <h2>Cola Actual:</h2>
    <table>
        <tr>
        <?php foreach ($cola->mostrar() as $elementos) { ?>
            
                <th><?php echo $elementos; ?></th>
        
        <?php } ?>
        </tr>
    </table>

</body>

</html>