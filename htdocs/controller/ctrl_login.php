<?php
include __DIR__.'/../model/mdl_login.php';

include 'ctrl_token.php';
//SE CREA EL OBJETO A NUESTRA CLASE ACCESS PARA PODER ACCEDDER A NUESTRAS FUNCIONES PUBLICAS DENTRO DE LA CLASE
$obj = new access();
 
$usuario = $_POST['user'];
$password = $_POST['pwd'];

$validate_user = $obj->validate_user($usuario);

if(empty($validate_user)){
    exit(json_encode([
        "result"=>"2"
    ]));
}else{
    //CICLO PARA OBTENER LA INFORMACIÓN DE LA BASE DE DATOS
   foreach($validate_user as $row){
        $id = $row['id'];
        $nombre = $row['user'];
        $pass = $row['password'];
        $rol = $row['rol'];
   }
if(password_verify($password, $pass)){

    //genera cookies de 2 minutos
setcookie('logged', "true", time()+60*2);
setcookie('user', $id);
setcookie('t_log', $token);
//ASIGNACIÓN DE RUTA SEGÚN TIPO USUARIO
    $nombre = $row['user'];
    if($rol == 1){
        $url= "admin";
    }else{
        $url = "user";
    }

$obj_tok = new access();
$insert = $obj_tok->insert_token($id,$token);
if($insert == "FALSE"){
    exit(json_encode([
        "result"=>"2"
    ]));
}else{
    exit(json_encode([
        "result"=>"1",
        "nombre"=>$nombre,
        "url" => $url
    ]));
}
}else{
    exit(json_encode([
        "result"=>"2"
    ]));
}
}