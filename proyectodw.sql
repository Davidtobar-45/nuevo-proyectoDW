-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 02-08-2025 a las 04:16:03
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
-- Base de datos: `proyectodw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`, `cedula`, `estado`) VALUES
(1, 'david', 'datobar@pucesi.edu.ec', '$2y$10$iJ9fqM9vUWvrc/0zx06IhOPyiUz/N5buloiA5TFn3jv9oURI7VLWq', '1234567891', '1'),
(2, 'marcos', 'marcos@pucesi.edu.ec', '$2y$10$xQc7aos8fbCHyOpgOHDGneoHt4maVILPsocHOk2nL2LUDo7ZFWJ6q', '1987654321', '1'),
(3, 'hector', 'hector@pucesi.edu.ec', '$2y$10$HwGTLHq6oxY.KSeLtcQ2Huhb0zH8BLE/DOFzTfaiZQbd/nuxHeM22', '1004349740', '1'),
(4, 'lenin', 'lenin@pucesi.edu.ec', '$2y$10$TaZe.TB8Nw9Vh7OKuo24GuJRJp.DmTpy1MIzYmYvVI1WoqjM4rvEa', '1001005899', '1'),
(9, 'david012', 'datobar@gmail.com', '$2y$10$8Z24vrMOIN13jmRnHoxqFuJJ3hs.qja6ZcwDSf9.t7Xx.Kui9GkaO', '1234567821', '1'),
(10, 'david', 'datobar231231@pucesi.edu.ec', '$2y$10$I6Zvv5Q88Fcg1USE0cZD0uu.N722wJZ9Y8pnpyuiot5ljx11bmsS6', '232131232131', '2'),
(11, 'pepe', 'pepito@gmial.com', '$2y$10$G8Y2tEGo0LuVvp5g2ViT3uCL/rO6HjqFnQ8qCjEIB7pO6x23G8JwW', '1233333333', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
