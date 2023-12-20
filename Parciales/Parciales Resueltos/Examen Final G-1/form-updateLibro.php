<?php
    include('db.php');

    $id = $_GET['id'];
    // echo $id;

    $sql = "SELECT * FROM libros WHERE id = $id";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();

    $sql_editorial = "SELECT id, editorial FROM editoriales";
    $result_editorial = $connect->query($sql_editorial);

    $sql_usuario = "SELECT id, nombrecompleto FROM usuarios";
    $result_usuario = $connect->query($sql_usuario);

    $sql_carrera = "SELECT id, carrera FROM carreras";
    $result_carrera = $connect->query($sql_carrera);

?>


<div class="formulario-libros">
    <h2>Form Update Libros</h2>
    <form action="javascript:updateLibro()" method="post" id="form-update">
        <div class="perfil">
            <p>Imagen</p>
            <img src="./images/<?php echo $row['imagen'] ?>" alt="<?php echo $row['imagen'] ?>" width="60px"> 
            <label for="imagen">Elige una imagen: </label>
            <input type="file" name="imagen">
        </div>
        <div>
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" value="<?php echo $row['titulo'] ?>">
        </div>
        <div>
            <label for="autor">Autor: </label>
            <input type="text" name="autor" value="<?php echo $row['autor'] ?>">
        </div>
        <div>
            <label for="editorial">Editorial: </label>
            <select name="editorial" id="editorial">
                <?php while($editorial = $result_editorial->fetch_assoc()){ ?>
                    <option value="<?php echo $editorial['id'] ?>" <?php echo $editorial['id'] == $row['ideditorial'] ? "selected" : ""; ?> ><?php echo $editorial['editorial'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="anio">Año: </label>
            <input type="number" name="anio" value="<?php echo $row['anio'] ?>">
        </div>
        <div>
            <label for="usuario">Usuario: </label>
            <select name="usuario" id="usuario">
                <?php while($usuario = $result_usuario->fetch_assoc()){ ?>
                    <option value="<?php echo $usuario['id'] ?>" <?php echo $usuario['id'] == $row['idusuario'] ? "selected" : ""; ?> ><?php echo $usuario['nombrecompleto'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="carrera">Carrera: </label>
            <select name="carrera" id="carrera">
                <?php while($carrera = $result_carrera->fetch_assoc()){ ?>
                    <option value="<?php echo $carrera['id'] ?>" <?php echo $carrera['id'] == $row['idcarrera'] ? "selected" : ""; ?> ><?php echo $carrera['carrera'] ?></option>
                <?php } ?>
            </select>
        </div>
        
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="imagen_actual" value="<?php echo $row['imagen']; ?>">
        <button type="submit" class="btn_registrar">Actualizar libro</button>
    </form>
</div>