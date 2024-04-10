<?php
//validar sesiones
include __DIR__.'/../controller/ctrl_sessions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Perfil de Usuario</title>
<link rel="stylesheet" href="config/css/pu.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="config/images/logo.png" alt="#">
        </div>
        <div class="logo-container1">
            <h1>PERFIL</h1>
        </div>
        <div class="logo-container2">
            <img src="config/images/aasa.png" alt="#"><br>
            <button class="logout-btn" onclick="cerrar_sesion()">Cerrar sesión</button>
        </div>
    </header>
<div class="container">
    <div class="profile-info">
        <h2>Datos Personales</h2>
        <p><strong>Nombre:</strong> Pablo Mota</p>
        <p><strong>Correo electrónico:</strong> pabloma@gmail.com</p>
        <!-- Agrega más información del perfil aquí -->
        <button id="showDetails">Ver detalles</button>
        <div id="additionalDetails" class="additional-details">
            <!-- Aquí puedes agregar detalles adicionales que se mostrarán al hacer clic -->
            <p><strong>Edad:</strong> 22 años</p>
            <p><strong>Ubicación:</strong> Monterrey, Mexico</p>
        </div>
    </div>
    <div class="profile-picture">
        <h2>Fotografía</h2>
        <img src="user_avatar.jpg" alt="User Avatar">
    </div>
</div>
<script src="script_p.js"></script>
<script>
function cerrar_sesion() {
    Swal.fire({
        title: "Estas a punto de cerrar sesión.",
        text: "estás seguro?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#CFCFCF",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Cerrar",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var cookies = document.cookie.split(";");
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            var eqPos = cookie.indexOf("=");
            var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
        location.replace('/');

        }
    });
}
    </script>

</body>
</html>