<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rt";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$password = $_GET['password'];
$genero = $_GET['genero'];

// Escapar valores para evitar SQL injection
$nombre = $conn->real_escape_string($nombre);
$email = $conn->real_escape_string($email);
$password = $conn->real_escape_string($password);
$genero = $conn->real_escape_string($genero);

// Actualizar datos en la base de datos
$sql = "UPDATE `usuarios` SET `Nombre`='$nombre', `Email`='$email', `Contrasena`='$password', `Genero`='$genero' WHERE `Nombre`='$nombre'";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
