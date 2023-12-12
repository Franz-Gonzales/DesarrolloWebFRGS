<?php
    include('bd.php');

    $sql = "SELECT l.id, imagen, titulo, autor, e.editorial, anio, u.nombrecompleto, c.carrera 
    FROM libros l LEFT JOIN editoriales e ON l.ideditorial = e.id 
    LEFT JOIN usuarios u ON l.idusuario = u.id 
    LEFT JOIN carreras c ON l.idcarrera = c.id";

    $result = $connect->query($sql);
    
    if($result->num_rows > 0){ ?>
    
        <div class="libros">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Títulos</th>
                    <th>Autor</th>
                    <th>Editotial</th>
                    <th>Año</th>
                    <th>Usuario</th>
                    <th>Carrera</th>
                </tr>
                <?php while($row = $result->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><img src="./images/<?php echo $row['imagen']; ?>" alt="<?php echo $row['imagen']; ?>" width="50px"></td>
                        <td><?php echo $row['titulo']; ?></td>
                        <td><?php echo $row['autor']; ?></td>
                        <td><?php echo $row['editorial']; ?></td>
                        <td><?php echo $row['anio']; ?></td>
                        <td><?php echo $row['nombrecompleto']; ?></td>
                        <td><?php echo $row['carrera']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    <?php }else{
        echo "No existen registros";
    } ?>