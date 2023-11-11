
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="ajax_fetch.js"></script>
</head>
<body>
     <div class="container-login">
        <h2>Iniciar Sesión</h2>
        <form action="javascript:autenticarUsuario()" method="post" id="form-login">
            <div class="credenciales">
                <label for="usuario">Usuario</label>
                <input type="email" name="usuario" id="usuario" placeholder="correo">
            </div>
            <div class="credenciales">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <div class="credenciales">
                <label for="captcha">Captcha</label>
                <!-- <input type="text" name="captcha" id="captcha" placeholder="captcha"> -->
                <img src="cpatcha.php" alt="captcha">
                <label for="captcha">Captcha</label>
                <input type="text" name="captcha" id="captcha" placeholder="captcha">
            </div>
            <input type="reset" value="Limpiar">
            <input type="submit" value="Loguearse">
           
            <!-- <button type="submit">Loguearse</button> -->
        </form>
    </div>
</body>
</html>