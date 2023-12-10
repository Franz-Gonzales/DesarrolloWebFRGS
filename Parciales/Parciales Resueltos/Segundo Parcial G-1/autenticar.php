
<?php 
session_start();

    include('conexion.php');

    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);
    $captcha = $_POST['captcha'];


    // echo $usuario;
    // echo $password;
    // echo $captcha;

    $arrayDatos = array();
    if($_SESSION['captcha'] == $captcha){

        $sql = "SELECT id, usuario, nombrecompleto, nivel FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";

        $result = $connect->query($sql);

        if ($result->num_rows > 0) {

            $fila = $result->fetch_assoc();

            $_SESSION['id'] = $fila['id'];
            $_SESSION['usuario'] = $fila['usuario'];
            $_SESSION['nivel'] = $fila['nivel'];

            $arrayDatos = array(
                'id' => $fila['id'],
                'usuario' => $fila['usuario'],
                'nombrecompleto' => $fila['nombrecompleto'],
                'nivel' => $fila['nivel']
            );

            // echo json_encode($arrayDatos, JSON_UNESCAPED_UNICODE);

            // Enviar una respuesta JSON al cliente
            header('Content-Type: application/json'); 
            echo json_encode(['status' => 'success', 'message' => 'Login exitoso', 'usuario' => $arrayDatos]);
            exit;
            
        }else{
            // echo "Credenciales Inconrrectas";
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'Credenciales incorrectas']);
            exit;
        }

    }else{
        // echo 'Captcha incorrecto';
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Captcha incorrecto']);
        exit;
    }
?>
