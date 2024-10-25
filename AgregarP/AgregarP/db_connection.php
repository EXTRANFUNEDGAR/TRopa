<?php
function getDBConnection() {
    // Datos de conexión
    $host = 'localhost'; // XAMPP usa localhost
    $db = 'tienda_de_ropa'; // Nombre de la base de datos
    $user = 'root'; // Usuario por defecto de XAMPP
    $pass = ''; // Sin contraseña por defecto en XAMPP

    try {
        // Crear conexión
        $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
        exit(); // Salir si hay un error
    }
}
?>
