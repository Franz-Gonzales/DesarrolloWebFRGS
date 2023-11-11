<?php 
    include('verificar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../ajax.js"></script>
    <style>
        .table-container{
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        table tr th{
            background: blue;
        }

        .btn-1{
            background: green;
        }

        .btn-2{
            background: orange;
        }
    </style>
</head>
<body>

    <?php
       include('conexion.php');
       
       $sql = "SELECT id, usuario, nombrecompleto, cu, idcarrera, nivel, leyenda FROM usuarios";
       $result = $connect->query($sql);

       if($result->num_rows > 0){
            ?>
            <div class="table-container">
        <table border="1">
            <tr>
                <th>Correos</th>
                <th>Nombre Completo</th>
                <th>Nivel</th>
                <th>Operacion</th>
            </tr>
            <?php while($row = $result->fetch_assoc()){  
                ?>
                <tr>
                    <td><?php echo $row['usuario']; ?></td>
                    <td><?php echo $row['nombrecompleto']; ?></td>
                    <td><?php echo $row['leyenda'] ?></td>
                    <td>
                        <?php if($row['nivel'] == 1){ ?>
                            <a href="javascript:actualizar(<?php echo $row['id']; ?>, <?php echo $row['nivel']; ?>)"><button class="btn-1">Cambiar a Usuario</button></a>
                            <?php }else{ ?>
                                <a href="javascript:actualizar(<?php echo $row['id']; ?>, <?php echo $row['nivel']; ?>)"><button class="btn-2">Cambiar a Administrador</button></a>
                            <?php } ?>
                    </td>
                </tr>
                <?php
            } ?>
        </table>
    </div>
    <?php }else 
        echo "No hay registros que mostrar";
    ?>

</body>
</html>