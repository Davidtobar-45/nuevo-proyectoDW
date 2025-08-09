-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2025 a las 23:15:08
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
-- Base de datos: `bddproyecto`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ACTUALIZAR_RESERVA` (IN `p_id` INT, IN `p_nombre` VARCHAR(100), IN `p_tipo_vehiculo` VARCHAR(50), IN `p_placa` VARCHAR(20), IN `p_fecha` DATE, IN `p_hora_ingreso` TIME, IN `p_hora_salida` TIME, IN `p_lugar` VARCHAR(50), IN `p_piso` VARCHAR(50))   BEGIN
    UPDATE reservas
    SET nombre = p_nombre,
        tipo_vehiculo = p_tipo_vehiculo,
        placa = p_placa,
        fecha = p_fecha,
        hora_ingreso = p_hora_ingreso,
        hora_salida = p_hora_salida,
        lugar = p_lugar,
        piso = p_piso
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ELIMINAR_RESERVA` (IN `p_id` INT)   BEGIN
    DELETE FROM reservas WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_INSERT_PAGO` (IN `p_metodo_pago` VARCHAR(50), IN `p_nombre_titular` VARCHAR(100), IN `p_numero_tarjeta` VARCHAR(20), IN `p_fecha_expiracion` DATE, IN `p_cvv` VARCHAR(5))   BEGIN
    INSERT INTO pagos (metodo_pago, nombre_titular, numero_tarjeta, fecha_expiracion, cvv)
    VALUES (p_metodo_pago, p_nombre_titular, p_numero_tarjeta, p_fecha_expiracion, p_cvv);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_INSERT_RESERVA` (IN `p_nombre` VARCHAR(100), IN `p_tipo_vehiculo` VARCHAR(50), IN `p_placa` VARCHAR(20), IN `p_fecha` DATE, IN `p_hora_ingreso` TIME, IN `p_hora_salida` TIME, IN `p_lugar` VARCHAR(50), IN `p_piso` VARCHAR(50))   BEGIN  
    INSERT INTO reservas (nombre, tipo_vehiculo, placa, fecha, hora_ingreso, hora_salida, lugar, piso)  
    VALUES (p_nombre, p_tipo_vehiculo, p_placa, p_fecha, p_hora_ingreso, p_hora_salida, p_lugar, p_piso);  
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int(11) NOT NULL,
  `metodo_pago` varchar(50) DEFAULT NULL,
  `nombre_titular` varchar(100) DEFAULT NULL,
  `numero_tarjeta` varchar(20) DEFAULT NULL,
  `fecha_expiracion` date DEFAULT NULL,
  `cvv` varchar(10) DEFAULT NULL,
  `fecha_pago` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `metodo_pago`, `nombre_titular`, `numero_tarjeta`, `fecha_expiracion`, `cvv`, `fecha_pago`) VALUES
(9, 'Tarjeta Crédito', 'David Tobar', '6011 5555 6666 7', '0000-00-00', '123', '2025-08-09 21:13:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo_vehiculo` varchar(50) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `hora_ingreso` time NOT NULL,
  `hora_salida` time NOT NULL,
  `lugar` varchar(10) NOT NULL,
  `piso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `nombre`, `tipo_vehiculo`, `placa`, `fecha`, `hora_ingreso`, `hora_salida`, `lugar`, `piso`) VALUES
(1, 'Luis Herrera', 'Auto', 'QTO-1234', '2025-08-09', '08:10:00', '11:45:00', 'Centro His', '1'),
(3, 'Carlos Vega', 'Camioneta', 'QTO-9012', '2025-08-08', '07:30:00', '13:00:00', 'Parque La ', '3'),
(4, 'Ana López', 'Auto', 'QTO-3456', '2025-08-08', '14:15:00', '16:00:00', 'Centro His', '1'),
(5, 'José Martínez', 'Moto', 'QTO-7890', '2025-08-07', '10:00:00', '11:30:00', 'Centro Com', '2'),
(7, 'Pedro Sánchez', 'Camioneta', 'QTO-3344', '2025-08-06', '13:30:00', '17:15:00', 'Centro His', '1'),
(8, 'Carla Díaz', 'Auto', 'QTO-5566', '2025-08-06', '09:00:00', '12:30:00', 'Centro Com', '2'),
(9, 'Miguel Torres', 'Moto', 'QTO-7788', '2025-08-05', '11:15:00', '13:00:00', 'Parque La ', '3'),
(10, 'Elena Rojas', 'Auto', 'QTO-9900', '2025-08-05', '07:50:00', '10:15:00', 'Centro His', '1'),
(33, 'tobar', 'Auto', 'QTO-1234', '2025-08-09', '22:00:00', '05:00:00', 'A1', 'Piso 1'),
(35, 'Olives', 'Moto', 'QTO-1234', '2025-08-09', '06:00:00', '10:00:00', 'M5', 'Piso 1'),
(39, 'manobanda', '4x4', 'QTO-1234', '2025-08-09', '17:58:00', '18:00:00', 'A1', 'Piso 1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
