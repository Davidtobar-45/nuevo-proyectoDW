-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2025 a las 21:53:49
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
(7, 'John', 'klover@pucesi.edu.ec', '$2y$10$zxOMPugkolv9OPgAPDnXFOEC84nAHv.P3boEQG0MD0a', '1003785431', 'Activo'),
(10, 'admin', 'admin@1', 'admin', '10044625', 'activo'),
(11, 'NuevoUsuario1', 'nuevo1@pucesi.edu.ec', 'contraseña1', '1234567890', 'Activo'),
(12, 'NuevoUsuario2', 'nuevo2@pucesi.edu.ec', 'contraseña2', '0987654321', 'Inactivo'),
(13, 'Maria Lopez', 'maria@pucesi.edu.ec', 'pass123', '1003785432', 'Activo'),
(14, 'Carlos Ruiz', 'carlos@pucesi.edu.ec', 'pass456', '1003785433', 'Activo'),
(15, 'Ana Garcia', 'ana@pucesi.edu.ec', 'pass789', '1003785434', 'Inactivo'),
(16, 'Pedro Sanchez', 'pedro@pucesi.edu.ec', 'pass101', '1003785435', 'Activo'),
(17, 'Laura Martinez', 'laura@pucesi.edu.ec', 'pass202', '1003785436', 'Activo'),
(18, 'Juan Perez', 'juan@pucesi.edu.ec', 'pass303', '1003785437', 'Inactivo'),
(19, 'Sofia Hernandez', 'sofia@pucesi.edu.ec', 'pass404', '1003785438', 'Activo'),
(20, 'Diego Torres', 'diego@pucesi.edu.ec', 'pass505', '1003785439', 'Activo'),
(21, 'Camila Ortiz', 'camila@pucesi.edu.ec', 'pass606', '1003785440', 'Inactivo'),
(22, 'Jose Vargas', 'jose@pucesi.edu.ec', 'pass707', '1003785441', 'Activo'),
(23, 'Fernanda Diaz', 'fernanda@pucesi.edu.ec', 'pass808', '1003785442', 'Activo'),
(24, 'Luis Castro', 'luis@pucesi.edu.ec', 'pass909', '1003785443', 'Inactivo'),
(25, 'Paula Gomez', 'paula@pucesi.edu.ec', 'pass111', '1003785444', 'Activo'),
(26, 'Ricardo Flores', 'ricardo@pucesi.edu.ec', 'pass222', '1003785445', 'Activo'),
(27, 'Valeria Ramos', 'valeria@pucesi.edu.ec', 'pass333', '1003785446', 'Inactivo'),
(28, 'Andres Morales', 'andres@pucesi.edu.ec', 'pass444', '1003785447', 'Activo'),
(29, 'Isabel Nunez', 'isabel@pucesi.edu.ec', 'pass555', '1003785448', 'Activo'),
(30, 'Hugo Jimenez', 'hugo@pucesi.edu.ec', 'pass666', '1003785449', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_nombre` varchar(50) DEFAULT NULL,
  `usu_correo` varchar(100) DEFAULT NULL,
  `usu_pass` varchar(100) DEFAULT NULL,
  `usu_cedula` int(11) DEFAULT NULL,
  `usu_estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_nombre`, `usu_correo`, `usu_pass`, `usu_cedula`, `usu_estado`) VALUES
(5, '', '', '$2y$10$cO9YRx3u0BERes62cHtOIGZ3EJU0NfvPml10aXq', 0, ''),
(6, 'John', 'klover@pucesi.edu.ec', '$2y$10$c7ZRSbH9mMolyVFROS/icuDuJXuV2djbFe3zn', 1003785431, 'Activo'),
(7, 'John', 'klover@pucesi.edu.ec', '$2y$10$xOMPugkolV9OgAPDnXF0EC84nHvP3b0EQGM0Da', 1003785431, 'Activo'),
(10, 'admin', 'admin@1', 'admin', 10044625, 'activo'),
(11, 'Maria', 'maria@example.com', '$2y$10$x1Y2Z3aBcDeFgHiJkLmNoP', 1003785442, 'Activo'),
(12, 'Pedro', 'pedro@pucesi.edu.ec', '$2y$10$a1B2c3D4e5F6g7H8i9J0k', 1003785443, 'Inactivo'),
(13, 'Ana', 'ana@gmail.com', '$2y$10$l1M2n3O4p5Q6r7S8t9U0v', 1003785444, 'Activo'),
(14, 'Luis', 'luis@yahoo.com', '$2y$10$x1Y2z3A4b5C6d7E8f9G0h', 1003785445, 'Activo'),
(15, 'Sofia', 'sofia@pucesi.edu.ec', '$2y$10$a1B2c3D4e5F6g7H8i9J0k', 1003785446, 'Activo'),
(16, 'Carlos', 'carlos@example.com', '$2y$10$l1M2n3O4p5Q6r7S8t9U0v', 1003785447, 'Inactivo'),
(17, 'Laura', 'laura@gmail.com', '$2y$10$x1Y2z3A4b5C6d7E8f9G0h', 1003785448, 'Activo'),
(18, 'Juan', 'juan@pucesi.edu.ec', '$2y$10$a1B2c3D4e5F6g7H8i9J0k', 1003785449, 'Activo'),
(19, 'Elena', 'elena@yahoo.com', '$2y$10$l1M2n3O4p5Q6r7S8t9U0v', 1003785450, 'Activo'),
(20, 'Diego', 'diego@example.com', '$2y$10$x1Y2z3A4b5C6d7E8f9G0h', 1003785451, 'Activo'),
(21, 'Camila', 'camila@pucesi.edu.ec', '$2y$10$a1B2c3D4e5F6g7H8i9J0k', 1003785452, 'Inactivo'),
(22, 'Pablo', 'pablo@gmail.com', '$2y$10$l1M2n3O4p5Q6r7S8t9U0v', 1003785453, 'Activo'),
(23, 'Fernanda', 'fernanda@yahoo.com', '$2y$10$x1Y2z3A4b5C6d7E8f9G0h', 1003785454, 'Activo'),
(24, 'Jorge', 'jorge@example.com', '$2y$10$a1B2c3D4e5F6g7H8i9J0k', 1003785455, 'Activo'),
(25, 'Isabel', 'isabel@pucesi.edu.ec', '$2y$10$l1M2n3O4p5Q6r7S8t9U0v', 1003785456, 'Activo');

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
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
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
