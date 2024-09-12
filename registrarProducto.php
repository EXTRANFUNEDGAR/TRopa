<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/style-agregarp.css">
    <script src="assets/js/scripts.js" defer></script>
    <title>Encabezado con Notificaciones</title>
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

    <!-- Formulario de Registro de Producto -->
    <main>
        <h2>Registrar Nuevo Producto</h2>
        <form action="register_product.php" method="post" enctype="multipart/form-data">
            <div class="form-grid">
                <div class="image-container">
                    <label for="image">Imagen:</label>
                    <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)" required>
                    <div id="imagePreview" class="image-preview">
                        <p>Vista previa de la imagen</p>
                    </div>
                </div>
                <div class="data-container">
                    <label for="name">Nombre del Producto:</label>
                    <input type="text" id="name" name="name" required><br>

                    <label for="description">Descripción:</label>
                    <textarea id="description" name="description" rows="4" required></textarea><br>

                    <label for="category">Categoría:</label>
                    <select id="category" name="category" required>
                        <option value="">Seleccione una categoría</option>
                        <option value="categoria1">Hombre</option>
                        <option value="categoria2">Mujer</option>
                        <option value="categoria3">Niños</option>
                    </select><br>

                    <label for="price">Precio:</label>
                    <input type="number" id="price" name="price" step="0.01" required><br>

                    <button type="submit">Registrar Producto</button>
                </div>
            </div>
        </form>
    </main>

    <script src="assets/js/scripts.js"></script>
</body>
</html>
