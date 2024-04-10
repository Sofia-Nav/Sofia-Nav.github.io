<?php
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//ROUTER PARA DIRECCIONES DENTRO DEL MVC SOLO APLICA VISTA Y CONTROLADOR
switch ($request) {
    case '':
        require __DIR__ . '/view/login.php';
        break;
    case '/':
        require __DIR__ . '/view/login.php';
        break;
    case '/admin':
        require __DIR__ . '/view/inicio_admin.php';
        break;
        break;
    case '/user':
        require __DIR__ . '/view/inicio_user.php';
        break;
    case '/ctrl_login':
        require __DIR__ . '/controller/ctrl_login.php';
        break;
    case '/ctrl_correo':
        require __DIR__ . '/controller/ctrl_correo.php';
        break;
    case '/ctrl_register':
        require __DIR__ . '/controller/ctrl_register.php';
        break;
}
