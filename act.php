<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rt";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$nombre = $_GET['nombre'];
$email = $_GET['email'];
$password = $_GET['password'];
$genero = $_GET['genero'];


$nombre = $conn->real_escape_string($nombre);
$email = $conn->real_escape_string($email);
$password = $conn->real_escape_string($password);
$genero = $conn->real_escape_string($genero);


$sql = "UPDATE `usuarios` SET `Nombre`='$nombre', `Email`='$email', `Contrasena`='$password', `Genero`='$genero' WHERE `Nombre`='$nombre'";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
