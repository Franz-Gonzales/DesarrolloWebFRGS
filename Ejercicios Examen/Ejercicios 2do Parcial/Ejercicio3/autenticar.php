
<?php session_start();

    include('conexion.php');

    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);
   

    // echo $password;
    // echo $usuario;


    $sql = "SELECT id, usuario, nombrecompleto, cu, idcarrera, nivel, leyenda FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
   
    // echo $sql;
    // $sql = "SELECT *  FROM usuarios";

    $result = $connect->query($sql);

    if ($result->num_rows > 0) {

        $fila = $result->fetch_assoc();
        // echo $fila['usuario'];

        $_SESSION['id'] = $fila['id'];
        $_SESSION['usuario'] = $fila['usuario'];
        $_SESSION['nombrecompleto'] = $fila['nombrecompleto'];
        $_SESSION['cu'] = $fila['cu'];
        $_SESSION['idcarrera'] = $fila['idcarrera'];
        $_SESSION['nivel'] = $fila['nivel'];
        $_SESSION['leyenda'] = $fila['leyenda'];

        echo "Loqueado correctamente";
        header('Location:listar.php');
    }else{
        echo "Credenciales Inconrrectas";
    }
    ?>