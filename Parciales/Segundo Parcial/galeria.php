<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="ajax_fetch.js"></script>
    <style>
        .imagen{
            width: 50px;
            height: 75px;
        }

        .btn_img{
            display: flex;
            margin-top: 10px;
            margin-bottom: 10px;
            flex-direction: column;
            gap: 5px;
            align-items: center;
            justify-content: center;
            border: 2px solid yellowgreen;
        }
    </style>
</head>
<body>
<?php

    include('conexion.php');


    $sql = "SELECT id, imagen, titulo FROM libros";

    $result = $connect->query($sql);
        
    $lista_imagen = array();

    if($result->num_rows > 0){
        ?>

    <div class="botones-img">
        <?php while($row = $result->fetch_assoc()){ 
            $lista_imagen[] = $row;
            ?>
            <button class="btn_img" onclick="mostrarFotos('<?php echo $row['imagen']; ?>')"><img src="./images/<?php echo $row['imagen'] ?>" alt="img" class="imagen"></button>
        <?php } ?>
        </div>
    <?php }?>

    
</body>
</html>