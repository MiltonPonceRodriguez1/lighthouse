-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-03-2022 a las 20:02:53
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lighthouse`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `wwid` int(255) NOT NULL AUTO_INCREMENT,
  `folio` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `ape_paterno` varchar(100) DEFAULT NULL,
  `ape_materno` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `turno` varchar(100) DEFAULT NULL,
  `planta` varchar(100) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `vigilancias` int(50) DEFAULT NULL,
  `creado_en` datetime DEFAULT NULL,
  `actualizado_en` datetime DEFAULT NULL,
  PRIMARY KEY (`wwid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`wwid`, `folio`, `nombre`, `ape_paterno`, `ape_materno`, `fecha_nacimiento`, `turno`, `planta`, `departamento`, `vigilancias`, `creado_en`, `actualizado_en`) VALUES
(7, NULL, 'hector', 'ponce', 'rodriguez', NULL, 'matutino', 'planta poniente', NULL, 1, '2022-03-24 04:15:16', '2022-03-16 04:10:11'),
(8, 'porng', 'milton', 'ponce', 'rodriguez', '2022-03-10', 'vespertino', 'sur', 'dulces', 4, '2022-03-20 04:15:16', '2022-03-17 04:10:11'),
(9, 'porng', 'test', 'test', 'test', '2022-03-08', 'test', 'test', 'test', 4, '2022-03-24 04:15:16', '2022-03-17 04:10:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
