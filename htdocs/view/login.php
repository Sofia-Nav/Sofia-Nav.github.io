<?php session_start();
//validación para que al regresar y aun exista la sesión, nos permita regresar al sitio de inicio y evitar duplicidades en las sesiones.
if (isset($_COOKIE['logged'])) {
    require __DIR__ . '/../model/mdl_login.php';
    $obj = new access();
    $token = $_COOKIE['t_log'];
    $user = $_COOKIE['user']; 
    $result = $obj->validate_token($token, $user);
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    foreach($result as $row){
        $nombre = $row['user'];
        if($row['rol'] == 1){
            //VALIDAR URL
            if($request == "/admin"){
                //si esta en la url correcta no hará nada
            }else{
                //si esta en url diferente a admin lo regresará al inicio correcto
                header("Location: /admin");
            }
        }else{
            //VALIDAR URL
            if($request == "/user"){
                //si esta en la url correcta no hará nada
            }else{
                //si esta en url diferente a admin lo regresará al inicio correcto
                header("Location: /user");
            }
        }
    }
} else {
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESION</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="config/css/styles_1.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <header>
        <div class="logo">
            <img src="config/images/logo.png" alt="Logo del proyecto">
            <h1>MLogic</h1>
        </div>
    </header>
    <div id="container">
        <div id="login">
            <h2>Login</h2>
            <input type="email" id="loginemail" placeholder="Correo" required>
            <input type="password" id="loginPassword" placeholder="Contraseña" required>
            <button class="login_btn" onclick="login()">Iniciar sesión</button>
            <div class="switch">
                ¿No tienes cuenta? <a href="#" onclick="switchForm('register')">Regístrate aquí</a><br>
                Dudas o comentarios <a href="#" onclick="switchForm('comentarios')">Enviar aquí</a>
            </div>
        </div>

        <div id="register" style="display: none;">
            <h2>Registro</h2>
            <div>
                <input type="text" id="registerUsername" placeholder="Nombre de usuario" required>
                <input type="email" id="registerEmail" placeholder="Correo electrónico" required>
                <input type="password" id="regpass" placeholder="Contraseña" required>
                <select id="registerRole">
                    <option value="0">Seleccione Una Opción</option>
                    <option value="2">Cliente</option>
                    <option value="1">Administrador</option>
                </select>
                <button class="login_btn" onclick="registro()">Registrarse</button>
            </div>
            <div class="switch">
                ¿Ya tienes una? <a href="#" onclick="switchForm('login')">Inicia sesión aquí</a>
            </div>
        </div>
        <div id="comentarios" style="display: none;">
            <h2>Comentarios</h2>
            <div>
                <input type="text" id="nombre" placeholder="Nombre completo" >
                <input type="email" id="correo" placeholder="Correo electrónico" >
                <textarea class="textarea" id="mensaje" cols="40" maxlength="1300" rows="5" placeholder="Escriba aqui sus comentarios"></textarea>
                <button class="login_btn" onclick="comentarios()">Registrarse</button>
            </div>
            <div class="switch">
                <a href="#" onclick="switchForm('login')"><button class="back_btn">regresar</button></a>
            </div>
        </div>
    </div>
    <br>
    <script src="config/js/login.js"></script>
</body>

</html>