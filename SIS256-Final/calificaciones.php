<?php

include('db.php');

 $sql = "SELECT materia FROM usuarios_materias";


 $result = $connect->query($sql);
 if ($result->num_rows > 0) {

?>
        <div class="sub-menu" id="sub-menu">
            <h5>Elegir materia</h5>
            <br>
                <?php  while ($row = $result->fetch_assoc()) { ?>
                        
                <a href="javascript:editarCalificaciones('<?php echo $row['materia'] ?>')"><div class="detalle"><?php echo $row['materia'] ?></div></a>
                <br>
            <?php } ?>
        </div>
<?php } ?>