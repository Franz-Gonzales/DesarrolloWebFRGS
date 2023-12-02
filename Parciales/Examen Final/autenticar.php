<?php session_start();

include('db.php');

$usuario = $_POST['usuario'];
$password = sha1($_POST['password']);
// $password = $_POST['password'];

echo $usuario; 
echo $password;

$sql = "SELECT id, usuario, nivel FROM usuarios WHERE usuario = '$usuario'";

echo $sql;

$result = $connect->query($sql);

if ($result->num_rows > 0) {
    $fila = $result->fetch_assoc();
    $_SESSION['id'] = $fila['id'];

    header('Location:index.php');
} else { ?>
    <p>Usuario o Contraseña incorrectos</p>
    <meta http-equiv="refresh" content="3;url=login.html">
<?php }

?>