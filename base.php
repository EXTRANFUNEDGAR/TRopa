<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <script src="assets/js/scripts.js" defer></script>
    <title>Encabezado Simple</title>
</head>
<body>
    <header>
        <button class="open-btn" onclick="openSidebar()">☰</button>
       
        <form method="get" target="">
        <input class="buscar" type="search" name="q" placeholder="Buscar">
        <button type="submit" class="btnbuscar">
             <img src="assets/img/busqueda.svg" alt="Busqueda" style=" filter: invert(1);">
        </button>
        </form>
        


        <button class="carrito">
            <img src="assets/img/carrito.svg" alt="usuario" style=" filter: invert(1);">
        </button>

        <button class="open-btn" onclick="openSidebar1()">
            <img src="assets/img/usuario.svg" alt="usuario" style=" filter: invert(1);">
        </button>
    </header>

    <div id="sidebar" class="sidebar left-sidebar">
        <a href="javascript:void(0)" class="close-btn" onclick="closeSidebar()">&times;</a>
        <a href="#inicio">Categoria 1</a>
        <a href="#servicios">Categoria 2</a>
        <a href="#nosotros">Categoria 3</a>
        <a href="#contacto">Categoria 4</a>
    </div>

    <div id="sidebar1" class="sidebar right-sidebar">
        <a href="javascript:void(0)" class="close-btn" onclick="closeSidebar1()">&times;</a>
        <center>
        <a href="">Mis Compras</a>
        <a href="">Notificaciones</a>
        <a href="">Configuracion</a>
        <a href="">Cerrar Sesion</a>
        </center>
    </div>

</body>
</html>
