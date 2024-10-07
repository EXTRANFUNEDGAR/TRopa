-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2024 a las 16:57:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `IdCompra` int(11) NOT NULL,
  `IdVenta` int(11) DEFAULT NULL,
  `IdProducto` int(11) DEFAULT NULL,
  `NumCompra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`IdCompra`, `IdVenta`, `IdProducto`, `NumCompra`) VALUES
(1, 1, 1, 123456);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `IdDomicilio` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `CodigoPostal` varchar(10) DEFAULT NULL,
  `Colonia` varchar(100) DEFAULT NULL,
  `Calle` varchar(100) DEFAULT NULL,
  `NumInt` varchar(10) DEFAULT NULL,
  `NumExt` varchar(10) DEFAULT NULL,
  `NumeroTelefonico` varchar(15) DEFAULT NULL,
  `Referencias` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `domicilio`
--

INSERT INTO `domicilio` (`IdDomicilio`, `IdUsuario`, `CodigoPostal`, `Colonia`, `Calle`, `NumInt`, `NumExt`, `NumeroTelefonico`, `Referencias`) VALUES
(1, 1, '12345', 'Centro', 'Av. Principal', '12', '34', '1234567890', 'Casa blanca con rejas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `asunto`, `correo`, `mensaje`) VALUES
(1, 'edgar', 'prueba', '20111064@tecguanajuato.edu.mx', 'Correo enviado'),
(2, 'edgar', 'prueba', 'edgar.delgado.a239@gmail.com', 'Correo enviado'),
(3, 'edgar', 'prueba', '20111064@tecguanajuato.edu.mx', 'Correo enviado'),
(4, 'edgar', 'prueba', '20111064@tecguanajuato.edu.mx', 'Correo enviado'),
(5, 'edgar', '20111064@tecguanajuato.edu.mx', 'prueba', 'mensaje'),
(6, 'edgar', '20111064@tecguanajuato.edu.mx', 'prueba', 'mensaje'),
(7, 'edgar', '20111064@tecguanajuato.edu.mx', 'prueba', 'mensaje'),
(8, 'edgar', '20111064@tecguanajuato.edu.mx', 'prueba', 'mensaje'),
(9, 'edgar', '20111064@tecguanajuato.edu.mx', 'prueba', 'mensaje'),
(10, 'edgar', 'prueba', '20111064@tecguanajuato.edu.mx', 'Correo enviado'),
(11, 'Emmanuel', 's', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(12, 'Emmanuel', 's', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(13, 'Emmanuel', 's', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(14, 'Emmanuel', 's', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(15, 'Emmanuel', 's', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(16, 'Emmanuel', 's', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(17, 'Emmanuel', 's', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(18, 'Emmanuel', 's', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(19, 'Emmanuel', 's', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(20, 'Edgar', 'S', '20111064@tecguanajuato.edu.mx', 'Correo enviado'),
(21, 'Edgar', 'S', '20111064@tecguanajuato.edu.mx', 'Correo enviado'),
(22, 'Edgar', 'S', '20111064@tecguanajuato.edu.mx', 'Correo enviado'),
(23, 'Emmanuel', '2', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(24, 'Emmanuel', '2', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(25, 'Emmanuel', '2', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(26, 'Emmanuel', '2', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(27, 'Emmanuel', '2', 'emmanueldiaz882@gmail.com', 'Correo enviado'),
(28, 'Emmanuel', '2', 'sergioconerlio226@gmail.com', 'Correo enviado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `IdProducto` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Descripcion` text DEFAULT NULL,
  `Talla` varchar(10) DEFAULT NULL,
  `Genero` enum('Masculino','Femenino','Unisex') DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `Imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`IdProducto`, `Nombre`, `Precio`, `Descripcion`, `Talla`, `Genero`, `Color`, `Imagen`) VALUES
(1, 'Camiseta Deportiva', 299.99, 'Camiseta para ejercicio', 'M', 'Unisex', 'Rojo', 'camiseta_roja.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `Genero` enum('Masculino','Femenino','Otro') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Nombre`, `Email`, `Contrasena`, `Genero`) VALUES
(1, 'Sergio', 'sergio@correo.com', 'contraseña123', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `IdVenta` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `MetodoPago` varchar(50) DEFAULT NULL,
  `Fecha` datetime DEFAULT current_timestamp(),
  `Paqueteria` varchar(100) DEFAULT NULL,
  `Referencia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`IdVenta`, `IdUsuario`, `MetodoPago`, `Fecha`, `Paqueteria`, `Referencia`) VALUES
(1, 1, 'Tarjeta de crédito', '2024-10-07 08:54:51', 'DHL', '12345ABC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`IdCompra`),
  ADD KEY `IdVenta` (`IdVenta`),
  ADD KEY `IdProducto` (`IdProducto`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`IdDomicilio`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IdProducto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`IdVenta`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `IdCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `IdDomicilio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `IdVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`IdVenta`) REFERENCES `venta` (`IdVenta`) ON DELETE CASCADE,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`) ON DELETE CASCADE;

--
-- Filtros para la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD CONSTRAINT `domicilio_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
