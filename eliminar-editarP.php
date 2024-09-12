<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/style-crud.css">
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
    <div class="parte3">
    <div class="textob3">
                ID
            </div>
            <div class="textob3">
                Nombre del
                producto
            </div>
            <div class="textob3">
                Imagen
            </div>
            <div class="textob3">
                Editar
            </div>
            <div class="textob3">
                Eliminar
            </div>
    </div>
        <div class="parte4">
            <div class="textob4">
                Texto
            </div>
            <div class="textob4">
                Texto
            </div>
            <div class="textob4">
                Imagen
            </div>
            <div class="img4">
            <center><img src="assets/img/32355.png" png style="width:20px; height: 20px;"><center>
            </div>
            <div class="img4">
            <center><img src="assets/img/146455.svg" svg style="width:20px; height: 20px;"><center>
            </div>
        </div>
        <div class="parte4">
            <div class="textob4">
                Texto
            </div>
            <div class="textob4">
                Texto
            </div>
            <div class="textob4">
                Imagen
            </div>
            <div class="img4">
            <center><img src="assets/img/32355.png" png style="width:20px; height: 20px;"><center>
            </div>
            <div class="img4">
            <center><img src="assets/img/146455.svg" svg style="width:20px; height: 20px;"><center>
            </div>
        </div>
        <div class="parte4">
            <div class="textob4">
                Texto
            </div>
            <div class="textob4">
                Texto
            </div>
            <div class="textob4">
                Imagen
            </div>
            <div class="img4">
            <center><img src="assets/img/32355.png" png style="width:20px; height: 20px;"><center>
            </div>
            <div class="img4">
            <center><img src="assets/img/146455.svg" svg style="width:20px; height: 20px;"><center>
            </div>
        </div>
        <div class="parte4">
            <div class="textob4">
                Texto
            </div>
            <div class="textob4">
                Texto
            </div>
            <div class="textob4">
                Imagen
            </div>
            <div class="img4">
            <center><img src="assets/img/32355.png" png style="width:20px; height: 20px;"><center>
            </div>
            <div class="img4">
            <center><img src="assets/img/146455.svg" svg style="width:20px; height: 20px;"><center>
            </div>
        </div>    
</body>
</html>
