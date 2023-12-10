
    <?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        
        echo 'Debe loguearse';
        include('login.php');
    }else{

        include('conexion.php');
    
        $sql = 'SELECT l.id AS id, imagen, titulo, autor, ideditorial, anio, idusuario, l.idcarrera AS idcarrera, u.nivel AS nivel  FROM libros l LEFT JOIN usuarios u ON l.idusuario = u.id';
    
        $resultado = $connect->query($sql);
    
        if($resultado->num_rows > 0){
            ?>
            <div class="libro-container">
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>ID Editorial</th>
                        <th>Año</th>
                        <th>ID Usuario</th>
                        <th>ID Carrera</th>
                        <th>Operaciones</th>
                    </tr>
                    <?php while($row = $resultado->fetch_assoc()){  
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><img src="./images/<?php echo $row['imagen']; ?>" alt="img" width="50px"></td>
                            <td><?php echo $row['titulo']; ?></td>
                            <td><?php echo $row['autor']; ?></td>
                            <td><?php echo $row['ideditorial']; ?></td>
                            <td><?php echo $row['anio']; ?></td>
                            <td><?php echo $row['idusuario']; ?></td>
                            <td><?php echo $row['idcarrera']; ?></td>
                            <td>
                                <?php if($row['nivel'] == 1){ ?>
                                    <a href="javascript:update()"><button class="btn_editar">Editar</button></a>
                                    <a href="javascript:delete()"><button class="btn_eliminar">Eliminar</button></a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php
                    } ?>
                </table>
            </div>
    <?php }else{
        echo "No hay registros que mostrar";
    } 

}

