<?php

session_start();

$conexion = new mysqli("localhost", "root", "", "rt");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registrar"])) {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $confirmar_contrasena = $_POST["confirmar_contrasena"];
    
    if ($contrasena != $confirmar_contrasena) {
        echo '<div class="alert alert-danger">Las contraseñas no coinciden. Por favor, intenta de nuevo.</div>';
        exit;
    } else {
        $hash_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$correo', '$hash_contrasena')";
        
        if ($conexion->query($query) === TRUE) {
            echo '<div class="alert alert-success">Usuario registrado exitosamente.</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar usuario: ' . $conexion->error . '</div>';
        }
    }
}

// Inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btningresar"])) {
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    
    $sql = $conexion->prepare("SELECT contrasena FROM usuarios WHERE email=?");
    $sql->bind_param("s", $correo);
    $sql->execute();
    $sql->bind_result($hash_contrasena, );
    
    if ($sql->fetch()) {
        if (password_verify($contrasena, $hash_contrasena)) {
                header("location: vistaProductos.php");
                exit; 
        } else {
            echo '<div class="alert alert-danger">Contraseña incorrecta</div>';
        }
    } else {
        echo '<div class="alert alert-danger">Usuario no encontrado</div>';
    }
    
    $sql->close();
}

$conexion->close();
?>
