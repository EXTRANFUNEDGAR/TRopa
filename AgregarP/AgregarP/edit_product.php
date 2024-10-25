<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style-agregarp.css">
    <script src="assets/js/scripts.js" defer></script>
    <title>Editar Producto</title>
  
</head>
<body>
    <header>
        <button class="open-btn" onclick="openSidebar()">☰</button>
        <form method="get" target="">
            <input class="buscar" type="search" name="q" placeholder="Buscar">
            <button type="submit" class="btnbuscar">
                <img src="assets/img/busqueda.svg" alt="Busqueda" style="filter: invert(1);">
            </button>
        </form>
        <button class="carrito">
            <img src="assets/img/carrito.svg" alt="Carrito" style="filter: invert(1);">
        </button>
        <button class="open-btn" onclick="openSidebar1()">
            <img src="assets/img/usuario.svg" alt="Usuario" style="filter: invert(1);">
        </button>
    </header>

    <div id="sidebar" class="sidebar left-sidebar">
        <a href="javascript:void(0)" class="close-btn" onclick="closeSidebar()">&times;</a>
        <a href="#inicio">Categoría 1</a>
        <a href="#servicios">Categoría 2</a>
        <a href="#nosotros">Categoría 3</a>
        <a href="#contacto">Categoría 4</a>
    </div>

    <div id="sidebar1" class="sidebar right-sidebar">
        <a href="javascript:void(0)" class="close-btn" onclick="closeSidebar1()">&times;</a>
        <center>
            <a href="javascript:void(0)" onclick="toggleNotifications()">Notificaciones</a>
            <a href="#">Mis Compras</a>
            <a href="#">Configuración</a>
            <a href="#">Cerrar Sesión</a>
        </center>
        <div id="notifications" class="notifications">
            <div class="notification-content">
                <p>Notificación 1</p>
                <p>Notificación 2</p>
                <p>Notificación 3</p>
            </div>
        </div>
    </div>


<?php
require 'db_connection.php';
$conn = getDBConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Obtener el producto
    $stmt = $conn->prepare("SELECT * FROM producto WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $producto = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Lógica de actualización al enviar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $genero = $_POST['genero'];
    $Talla = $_POST['Talla'];
    $price = $_POST['price'];
    $color = $_POST['color'];

    // Actualizar el producto
    $stmt = $conn->prepare("UPDATE producto SET name = :name, description = :description, genero = :genero, Talla = :Talla, price = :price, color = :color WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':Talla', $Talla);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':color', $color);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    echo "Producto actualizado exitosamente.";
}
?>

<!-- Formulario para editar producto -->
<form action="" method="post">
    <label for="name">Nombre del Producto:</label>
    <input type="text" id="name" name="name" value="<?= $producto['name'] ?>" required><br>

    <label for="description">Descripción:</label>
    <textarea id="description" name="description" rows="4" required><?= $producto['description'] ?></textarea><br>

    <label for="genero">Género:</label>
    <select id="genero" name="genero" required>
        <option value="Hombre" <?= $producto['genero'] == 'Hombre' ? 'selected' : '' ?>>Hombre</option>
        <option value="Mujer" <?= $producto['genero'] == 'Mujer' ? 'selected' : '' ?>>Mujer</option>
        <option value="Niño" <?= $producto['genero'] == 'Niño' ? 'selected' : '' ?>>Niño</option>
        <option value="Niña" <?= $producto['genero'] == 'Niña' ? 'selected' : '' ?>>Niña</option>
    </select><br>

    <label for="Talla">Categoría:</label>
    <select id="Talla" name="Talla" required>
        <option value="Chica" <?= $producto['talla'] == 'Chica' ? 'selected' : '' ?>>Chica</option>
        <option value="Mediana" <?= $producto['talla'] == 'Mediana' ? 'selected' : '' ?>>Mediana</option>
        <option value="Grande" <?= $producto['talla'] == 'Grande' ? 'selected' : '' ?>>Grande</option>
        <option value="XL" <?= $producto['talla'] == 'XL' ? 'selected' : '' ?>>XL</option>
    </select><br>

    <label for="color">color:</label>
    <select id="color" name="color" required>
        <option value="Blanco" <?= $producto['color'] == 'Blanco' ? 'selected' : '' ?>>Chica</option>
        <option value="Negro" <?= $producto['color'] == 'Negro' ? 'selected' : '' ?>>Mediana</option>
        <option value="Rojo" <?= $producto['color'] == 'Rojo' ? 'selected' : '' ?>>Grande</option>
        <option value="Azul" <?= $producto['color'] == 'Azul' ? 'selected' : '' ?>>XL</option>
    </select><br>
    <label for="price">Precio:</label>
    <input type="number" id="price" name="price" value="<?= $producto['price'] ?>" step="0.01" required><br>

    <button type="submit">Actualizar Producto</button>
</form>
