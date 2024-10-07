<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/styleI.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.6.0-web/css/all.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form class="formulario" method="post" action="">
            <?php
            include("controlador.php");
            ?>
            <h2>Iniciar sesión</h2>
            <label class="label">Número de celular o correo electrónico</label>
            <input id="correo" type="text" name="correo" required>            
            <label class="label">Contraseña</label>            
            <input type="password" id="inputPassword" name="contrasena" required>         
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
            <button name="btningresar" type="submit" class="submit-btn">Ingresar</button>
        </form>
    </div>
</body>
</html>