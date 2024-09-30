<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <script src="assets/js/scripts.js" defer></script>
    <title>Encabezado con Notificaciones</title>
    <style type="text/css">
        .loader{
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('./assets/img/gif.gif') 50% 50% no-repeat rgb(249, 249, 249);
        }
        .loader:after{
            position: fixed;
            left: 45.5%;
            top: 60%;
        }
        @keyframes hide{
            0%{
                opacity: 1;
            }
            100%{
                opacity: 0;
            }
        }
    </style>
</head>

<div class="loader"></div>

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
<!--Falta que Sergio suba su vista
        <button class="carrito" href="">
            <img src="assets/img/carrito.svg" alt="Carrito" style="filter: invert(1);">
        </button>
-->
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


    <center><h1>Producto</h1></center>

    <div class="prod ">
        <img class="image" src="assets/img/rose.jpg">
        <div class="det">
            <h3>$999</h3>
            <p>Color</p>
            <select name="select">
  <option value="1">Rojo</option>
  <option value="2">Azul</option>
  <option value="3">Negro</option>
</select>
<br>
<br>
<p>Talla  </p> 
            <select name="select">
  <option value="1">30</option>
  <option value="2">32</option>
  <option value="3">34</option>
</select>
<br>
<br>
<div class="atrib">
<button class="carrito" style="width:50%">
    Agregar
            <img src="assets/img/carrito.svg" alt="Carrito" style="filter: invert(1);">
        </button>
        <button class="fav" style="width:50%">Favoritos</button>
        <br>
        <button class="buy" style="width:100%">Comprar ahora</button>

        </div>
    </div>
    </div>
    <script src="assets/js/scripts.js"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    $(window).load(function(){
        $(".loader").fadeOut("slow");
    })
</script>
</html>
