<?php
include __DIR__.'/../model/mdl_register.php';

$obj = new register();

$nombre =$_POST['nombre'];
$pass =$_POST['paswd'];
//ENCRIPTA PASSWORD
$contra = password_hash($pass,PASSWORD_BCRYPT);
$tipo =$_POST['rol'];
$correo =$_POST['correo'];


//VALIDAR QUE NO EXISTA EL USUARIO
$objv = new register();
$validate = $objv ->validate_user($correo);
if(empty($validate)){
    //insertar datos a la bd

$insert = $obj->insert_user($nombre,$contra,$tipo,$correo);

if($insert == "FALSE"){
    //SE CREA UN JSON PARA ENVIAR UN RESULTADO
    exit(json_encode([
        "result" => "2"
    ]));
}else{
    exit(json_encode([
        "result" => "1"
    ]));
}
}else{
    exit(json_encode([
        "result" => "3"
    ]));
}
