<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../ajax.js"></script>
    <style>
        .libro-container{
            width: 95%;
            margin-top: 10px;
            margin-bottom: 10px;
            text-align: center;
        }

        table{
            width: 100%;
        }

        table th{
            background: yellowgreen;
        }
    </style>
</head>
<body>
    <?php
        include('conexion.php');

        $ordenar = isset($_GET['ordenar']) ? $_GET['ordenar'] : 'id';


        // echo $ordenar;


        $sql = 'SELECT id, imagen, titulo, autor, ideditorial, anio, idusuario, idcarrera FROM libros';
        
        $sql .= " ORDER BY $ordenar";

        $resultado = $connect->query($sql);

        if($resultado->num_rows > 0){
            ?>
            <div class="libro-container">
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th><a href="javascript:ordenarLibros()">Título</a></th>
                        <th>Autor</th>
                        <th>ID Editorial</th>
                        <th>Año</th>
                        <th>ID Usuario</th>
                        <th>ID Carrera</th>
                    </tr>
                    <?php while($row = $resultado->fetch_assoc()){  
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><img src="./img/<?php echo $row['imagen']; ?>" alt="img" width="50px"></td>
                            <td><?php echo $row['titulo']; ?></td>
                            <td><?php echo $row['autor']; ?></td>
                            <td><?php echo $row['ideditorial']; ?></td>
                            <td><?php echo $row['anio']; ?></td>
                            <td><?php echo $row['idusuario']; ?></td>
                            <td><?php echo $row['idcarrera']; ?></td>
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