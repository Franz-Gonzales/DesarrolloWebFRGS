<?php
include('bd.php');

$n = $_POST['n'];
// echo $n;

$sql_editorial = "SELECT id, editorial FROM editoriales";
$editoriales = $connect->query($sql_editorial);

$sql_usuario = "SELECT id, nombrecompleto FROM usuarios";
$usuarios = $connect->query($sql_usuario);

$sql_carrera = "SELECT id, carrera FROM carreras";
$carreras = $connect->query($sql_carrera);


$lista_editoriales = '';
while($editorial = $editoriales->fetch_assoc()){
    $lista_editoriales .= '<option value="'.$editorial['id'].'">'.$editorial['editorial'].'</option>';
}

$lista_usuarios = '';
while($usuario = $usuarios->fetch_assoc()){
    $lista_usuarios .= '<option value="'.$usuario['id'].'">'.$usuario['nombrecompleto'].'</option>';
}

$lista_carreras = '';
while($carrera = $carreras->fetch_assoc()){
    $lista_carreras .= '<option value="'.$carrera['id'].'">'.$carrera['carrera'].'</option>';
}


?>

<form action="javascript:insertar()" method="post" id="form-masivo">

    <?php for($i = 1; $i <= $n; $i++){ ?>
        <div class="datos">
            <h2>Formulario Masivo <?php echo $i ?></h2>
            <div>
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen<?php echo $i ?>" id="imagen">
            </div>
            <div>
                <label for="titulo">Título</label>
                <input type="text" name="titulo<?php echo $i ?>" id="titulo">
            </div>
            <div>
                <label for="autor">Autor</label>
                <input type="text" name="autor<?php echo $i ?>" id="autor">
            </div>
            <div>
                <label for="editorial">Editorial</label>
                <select name="editorial<?php echo $i ?>" id="editorial">
                    <?php echo $lista_editoriales; ?>
                </select>
            </div>
            <div>
                <label for="anio">Año</label>
                <input type="number" name="anio<?php echo $i ?>" id="anio">
            </div>
            <div>
                <label for="usuario">Usuario</label>
                <select name="usuario<?php echo $i ?>" id="usuario">
                    <?php echo $lista_usuarios; ?>
                </select>
            </div>
            <div>
                <label for="carrera">carrera</label>
                <select name="carrera<?php echo $i ?>" id="carrera">
                    <?php echo $lista_carreras; ?>
                </select>
            </div>
        </div>
    <?php } ?>

    <input type="hidden" name="n" value="<?php echo $n ?>">
    <button type="submit" class="btn_insertar">Insertar</button>
    
</form>