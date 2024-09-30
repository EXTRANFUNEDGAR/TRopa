-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2024 a las 06:58:07
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
(10, 'edgar', 'prueba', '20111064@tecguanajuato.edu.mx', 'Correo enviado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
