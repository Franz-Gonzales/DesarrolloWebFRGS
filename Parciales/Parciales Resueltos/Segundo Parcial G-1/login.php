<script src="ajax_fetch.js"></script>

<div class="container-login">
    <h2>Iniciar Sesión</h2>
    <form action="javascript:autenticar()" method="post" id="form_login">
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

            <img src="captcha.php" alt="Captcha">
            <label for="captcha">Captcha</label>
            <input type="text" name="captcha" id="captcha" placeholder="captcha">
        </div>
        <!-- <input type="submit" value="Loguearse" class="btn_login"> -->
        <button type="submit" class="btn_login">Loguearse</button>
        <input type="reset" value="Limpiar" class="btn_login">
    </form>
</div>