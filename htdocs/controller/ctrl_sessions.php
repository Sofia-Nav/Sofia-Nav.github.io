<?php
session_start();
//SI LOGGED NO EXISTE NO INICIA SESIÓN
if($_COOKIE['logged']=="true"){
require __DIR__.'/../model/mdl_login.php';
$obj = new access();
$user = $_COOKIE['user'];
$token = $_COOKIE['t_log'];
$result = $obj -> validate_token($token,$user);
//SI EL TOKEN NI EL USUARIO COINCIDEN NO INICIA SESIÓN
if(empty($result)){
    header('Location: /');
}else{
    //OBTENER URL PARA VALIDAD QUE UN USUARIO NO PUEDA ENTRAR COMO ADMINISTRADOR
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
}
}else{
    header('Location: /');
}