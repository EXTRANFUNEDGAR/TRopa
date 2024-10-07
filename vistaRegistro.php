<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/styleI.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.6.0-web/css/all.min.css">
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <form class="formulario needs-validation" action="controlador.php" method="post" novalidate>  
            <h2>Registro</h2>
            <label class="label">Número de celular o correo electrónico</label>
            <input type="text" class="form-control" id="correo" name="correo" required>  
            <label class="label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>          
            <label class="label">Contraseña</label>            
            <input type="password" class="form-control" id="contrasena" name="contrasena" required>   
            <label class="label">Confirmar contraseña</label>         
            <input type="password" class="form-control" id="confirmar_contrasena" name="confirmar_contrasena" required>            
            <center>
                <div class="social-login">
                    <button class="facebook">
                        <i class="fab fa-facebook-f"></i>
                        Continuar con Facebook
                    </button>
                    <button class="google">
                        <i class="fab fa-google"></i>
                        Continuar con Google
                    </button>
                </div>
            </center>
            <div class="terms">
                <input type="checkbox" id="terminos" required>
                <label for="terminos">Acepto los <a href="#">Términos y condiciones</a></label>
            </div>

            <button type="submit" class="submit-btn" type="submit" name="registrar">Registrarse</button>
        </form>
    </div>
</body>
</html>