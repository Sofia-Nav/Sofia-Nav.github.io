document.getElementById('loginBtn').addEventListener('click', function(event) {
    event.preventDefault();
    
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert('Por favor, introduce un correo electrónico válido.');
      return;
    }
    

    if (!email.endsWith('.com')) {
      alert('El correo electrónico debe tener un dominio ".com".');
      return;
    }
    

    if (password.length < 8) {
      alert('La contraseña debe tener al menos 8 caracteres.');
      return;
    }
    

    alert('¡Inicio de sesión exitoso!');
  });
