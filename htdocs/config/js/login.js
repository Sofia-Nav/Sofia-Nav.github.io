function validarEmail(email) {
    // Expresión regular para validar un correo electrónico
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return regex.test(email);
}


function login() {
    //validar campos vacios
    if ($('#loginemail').val() == '') {
        Swal.fire({
            title: "Atención!",
            text: "Favor de ingresar correo electrónico!",
            icon: "warning"
        });
    } else if (!validarEmail($('#loginemail').val())) {
        Swal.fire({
            title: "Atención!",
            text: "Formato de correo no valido.",
            icon: "warning"
        });
    } else if ($('#loginPassword').val() == '') {
        Swal.fire({
            title: "Atención!",
            text: "Favor de ingresar su contraseña!",
            icon: "warning"
        });
    } else {
        //AJAX PARA ENVIAR EN TIEMPO REAL DATOS Y RECIBIR RESPUESTAS SIN MOVERNOS DE LA PÁGINA ORIGINAL
        $.ajax({
            type: "POST",
            url: "ctrl_login",
            data: { user: $('#loginemail').val(), pwd: $('#loginPassword').val() }
        }).done(function(data) {
            var response = JSON.parse(data);
            if (response.result == 1) {
                Swal.fire({
                    title: "Bienvenido",
                    text: 'hola ' + response.nombre,
                    icon: "success",
                    showCancelButton: false,
                    backdrop: false,
                    confirmButtonText: "Ingresar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.replace(response.url)
                    }
                });
            } else {
                Swal.fire({
                    title: "Atención!",
                    text: "Usuario y contraseña incorrectos",
                    icon: "error"
                });
            }
        });
    }
}


function switchForm(type) {
    if (type == 'login') {
        document.getElementById('login').style.display = 'inline';
        document.getElementById('register').style.display = 'none';
        document.getElementById('comentarios').style.display = 'none';
    } else if (type == 'comentarios') {

        document.getElementById('comentarios').style.display = 'inline';
        document.getElementById('login').style.display = 'none';
        document.getElementById('register').style.display = 'none';
    } else {
        document.getElementById('register').style.display = 'inline';
        document.getElementById('login').style.display = 'none';
        document.getElementById('comentarios').style.display = 'none';
    }
}

function registro() {
    var passwd = $('#regpass').val();
    if ($('#registerUsername').val() == '') {
        Swal.fire({
            title: "Atención!",
            text: "Favor de ingresar su nombre!",
            icon: "warning"
        });
    } else if ($('#registerEmail').val() == '') {
        Swal.fire({
            title: "Atención!",
            text: "Favor de ingresar su correo electrónico.",
            icon: "warning"
        });
    } else if (!validarEmail($('#registerEmail').val())) {
        Swal.fire({
            title: "Atención!",
            text: "Formato de correo no valido.",
            icon: "warning"
        });
    } else if ($('#registerPassword').val() == '') {
        Swal.fire({
            title: "Atención!",
            text: "Favor de ingresar su contraseña!",
            icon: "warning"
        });
    } else if (passwd.length <= 8) {
        Swal.fire({
            title: "Atención!",
            text: "Favor de ingresar una contraseña mayo a 8 dígitos!",
            icon: "warning"
        });
    } else if ($('#registerRole').val() == 0) {
        Swal.fire({
            title: "Atención!",
            text: "Favor de seleccionar un tipo de usuario!",
            icon: "warning"
        });
    } else {
        //mandar datos de formulario mediante ajax
        var datos = new FormData();
        //datos.append("variable", dato a enviar);
        datos.append("nombre", $('#registerUsername').val());
        datos.append("correo", $('#registerEmail').val());
        datos.append("paswd", passwd);
        datos.append("rol", $('#registerRole').val());
        $.ajax({
            type: "POST",
            url: "ctrl_register",
            processData: false, //EVITA CONVERCIONES DENTRO DEL AJAX
            contentType: false, //IGNORA EL CONTENIDO ENVIADO
            data: datos
        }).done(function(data) {
            var result = JSON.parse(data);
            if (result.result == 1) {
                Swal.fire({
                    title: "Atención!",
                    text: "Usuario registrado exitosamente!",
                    icon: "success"
                });
            } else if (result.result == 2) {
                Swal.fire({
                    title: "Atención!",
                    text: "Error Al registrar al usuario!",
                    icon: "warning"
                });
            } else {
                Swal.fire({
                    title: "Atención!",
                    text: "El usuario ya ha sido registrado anteriormente!",
                    icon: "error"
                });
            }
        });
    }
}


function comentarios() {
    if ($('#nombre').val() == "") {
        Swal.fire({
            title: "Atención!",
            text: "Favor de ingresar su nombre!",
            icon: "warning"
        });
    } else if ($('#correo').val() == "") {
        Swal.fire({
            title: "Atención!",
            text: "Favor de ingresar su correo!",
            icon: "warning"
        });
    } else if (!validarEmail($('#correo').val())) {
        Swal.fire({
            title: "Atención!",
            text: "Formato de correo incorrecto!",
            icon: "warning"
        });
    } else if ($('#mensaje').val() == "") {
        Swal.fire({
            title: "Atención!",
            text: "Favor de ingresar su duda o mensaje!",
            icon: "warning"
        });
    } else {
        var datos = new FormData();
        datos.append("nombre", $('#nombre').val());
        datos.append("correo", $('#correo').val());
        datos.append("mensaje", $('#mensaje').val());
        $.ajax({
            type: "POST",
            url: "ctrl_correo",
            processData: false, //EVITA CONVERCIONES DENTRO DEL AJAX
            contentType: false, //IGNORA EL CONTENIDO ENVIADO
            data: datos
        }).done(function(data) {
            var result = JSON.parse(data);
            if (result.result == 1) {
                Swal.fire({
                    title: "Atención!",
                    text: "Mensaje enviado exitosamente!",
                    icon: "success"
                });
            } else {
                Swal.fire({
                    title: "Atención!",
                    text: "Error al enviar el mensaje, verifique su correo electrónico!",
                    icon: "error"
                });
            }
        });
    }
}