<?php
//ENVIO DE CORREO POR SMTP
//USO DE PHP MAILER
//LISTADO DE LIBRERIAS PARA ENVIAR CORREOS
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//ATRIBUTOS NECESARIOS PARA PODER ENVIAR CORREOS
//REFRERENCIA https://github.com/PHPMailer/PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$mail = new PHPMailer(true);
try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '19390@virtual.utsc.edu.mx';                     //SMTP username
    $mail->Password   = 'JuanPabloMA21';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->setFrom('19390@virtual.utsc.edu.mx', 'Sistema de recuperacion');

    $mail->addAddress('19390@virtual.utsc.edu.mx');
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Dudas o comentarios';
    $mail->Body    = '<h1>correo de ' . $nombre . '</h1><br><p>' . $mensaje . '</p><br><p>Correo de contacto: '.$correo.'<p>';
    $mail->send();
    exit(json_encode([
        "result" => "1"
    ]));
} catch (Exception $e) {
    exit(json_encode([
        "result" => "2"
    ]));
}
