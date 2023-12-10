
    <script src="ajax_fetch.js"></script>
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
