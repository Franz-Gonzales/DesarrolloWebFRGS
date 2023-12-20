<?php

include('db.php'); 

$sql = "SELECT l.id, imagen, titulo, autor, e.editorial, anio, u.nombrecompleto AS usuario, c.carrera 
        FROM libros l LEFT JOIN editoriales e ON l.ideditorial = e.id 
        LEFT JOIN usuarios u ON l.idusuario = u.id 
        LEFT JOIN carreras c ON l.idcarrera = c.id";

$result = $connect->query($sql);

if($result->num_rows > 0){
?>
    <div class="container-libros">
        <h2>Lista de Libros</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Año</th>
                <th>Usuario</th>
                <th>Carrera</th>
                <th>Operaciones</th>
            </tr>
            <?php while($row = $result->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><img src="./images/<?php echo $row['imagen'] ?>" alt="<?php echo $row['imagen'] ?>" width="50px"></td>
                    <td><?php echo $row['titulo'] ?></td>
                    <td><?php echo $row['autor'] ?></td>
                    <td><?php echo $row['editorial'] ?></td>
                    <td><?php echo $row['anio'] ?></td>
                    <td><?php echo $row['usuario'] ?></td>
                    <td><?php echo $row['carrera'] ?></td>
                    <td>
                        <a href="javascript:update(<?php echo $row['id'] ?>)"><button class="btn_editar">Editar</button></a>
                        <a href="javascript:deleteLibro(<?php echo $row['id'] ?>)"><button class="btn_eliminar">Eliminar</button></a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <a href="javascript:cargarContenido4('formInsertarLibro.php')"><button class="btn_registrar">Registrar libro</button></a>
    </div>

<?php
}
?>