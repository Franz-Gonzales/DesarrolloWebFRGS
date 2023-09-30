<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            background: green;
        }
        table tr th{
            border: 1px solid black;
            padding: 5px;
            width: 20px;
        }
    </style>
</head>
<body>
    <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
    ?>

    <table>
        <tr>
            <th><?php echo $num1 ?></th>
            <th>+</th>
            <th><?php echo $num2 ?></th>
            <th>=</th>
            <th><?php echo $num1 + $num2 ?></th>
        </tr>
    </table>
</body>
</html>