<?php
    include('db.php');

    $sql_editorial = "SELECT id, editorial FROM editoriales";
    $result_editorial = $connect->query($sql_editorial);

    $sql_usuario = "SELECT id, nombrecompleto FROM usuarios";
    $result_usuario = $connect->query($sql_usuario);

    $sql_carrera = "SELECT id, carrera FROM carreras";
    $result_carrera = $connect->query($sql_carrera);
?>


<div class="formulario-libros">
    <h2>Formulario Libros</h2>
    <form action="javascript:insertarLibro()" method="post" id="form-insert">
        <div>
            <label for="imagen">Imagen: </label>
            <input type="file" name="imagen">
        </div>
        <div>
            <label for="titulo">Título: </label>
            <input type="text" name="titulo">
        </div>
        <div>
            <label for="autor">Autor: </label>
            <input type="text" name="autor">
        </div>
        <div>
            <label for="editorial">Editorial: </label>
            <select name="editorial" id="editorial">
                <option value="">Seleccione un Editorial</option>
                <?php while($editorial = $result_editorial->fetch_assoc()){ ?>
                    <option value="<?php echo $editorial['id'] ?>"><?php echo $editorial['editorial'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="anio">Año: </label>
            <input type="number" name="anio">
        </div>
        <div>
            <label for="usuario">Usuario: </label>
            <select name="usuario" id="usuario">
                <option value="">Seleccione el Usuario</option>
                <?php while($usuario = $result_usuario->fetch_assoc()){ ?>
                    <option value="<?php echo $usuario['id'] ?>"><?php echo $usuario['nombrecompleto'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="carrera">Carrera: </label>
            <select name="carrera" id="carrera">
                <option value="">Seleccione una Carrera</option>
                <?php while($carrera = $result_carrera->fetch_assoc()){ ?>
                    <option value="<?php echo $carrera['id'] ?>"><?php echo $carrera['carrera'] ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn_registrar">Insertar libro</button>
    </form>
</div>