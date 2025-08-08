-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2025 a las 03:37:25
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
-- Base de datos: `bdd_code`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DELETE_USUARIO` (IN `VUSU_ID` INT)   DELETE FROM tbl_usuarios WHERE USU_ID = VUSU_ID$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_INSERT_USUARIO` (IN `VUSU_NOMBRE` VARCHAR(50), IN `VUSU_CORREO` VARCHAR(50), IN `VUSU_PASS` VARCHAR(50), IN `VUSU_CEDULA` VARCHAR(50), IN `VUSU_ESTADO` VARCHAR(15))   INSERT INTO tbl_usuarios(usu_nombre, usu_correo, usu_pass, usu_cedula, usu_estado)
VALUES (VUSU_NOMBRE, VUSU_CORREO, VUSU_PASS, VUSU_CEDULA, VUSU_ESTADO)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_SELECT_PRODUCTOS` ()   SELECT
pro_id AS ID,
pro_nombre as NOMBRE,
pro_costo as COSTO,
pro_estado as ESTADO
FROM
tbl_productos$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_SELECT_USUARIO` ()   SELECT * FROM tbl_usuarios$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `pro_id` int(11) NOT NULL,
  `pro_nombre` varchar(50) NOT NULL,
  `pro_costo` float(10,2) NOT NULL,
  `pro_estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`pro_id`, `pro_nombre`, `pro_costo`, `pro_estado`) VALUES
(1, 'Verduras', 5.25, '1'),
(2, 'Tomates', 1.00, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_nombre` varchar(50) NOT NULL,
  `usu_correo` varchar(50) NOT NULL,
  `usu_pass` varchar(50) NOT NULL,
  `usu_cedula` varchar(50) NOT NULL,
  `usu_estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`usu_id`, `usu_nombre`, `usu_correo`, `usu_pass`, `usu_cedula`, `usu_estado`) VALUES
(1, 'Johnny Aragón', 'jaragon@pucesi.edu.ec', '1234', '1003785431', '1'),
(2, 'Federico', 'f@paz.edu.ec', '123456', '1003785632', '1'),
(3, 'FEDERICO', 'J@PUCE', '1234', '15255', '1'),
(4, '', '', '$2y$10$KDj9wC3dtNnywtuKbPzjvOvG8VvmSojAuw1rTl7C6bH', '', ''),
(5, '', '', '$2y$10$cO9oYRz3uhOBERes52ChTOlGZX3EUU0NFvpaM10aAXq', '', ''),
(6, 'John', 'klover@pucesi.edu.ec', '$2y$10$/c7AZRSbBbfOmmoLfyVFrOS/icouDJxUrv2dJbFe3zn', '1003785431', 'Activo'),
(7, 'John', 'klover@pucesi.edu.ec', '$2y$10$zxOMPugkolv9OPgAPDnXFOEC84nAHv.P3boEQG0MD0a', '1003785431', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
