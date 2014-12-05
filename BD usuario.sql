-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-10-2014 a las 23:23:12
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuario`
--
CREATE DATABASE `usuario` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `usuario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_grupo`
--

CREATE TABLE IF NOT EXISTS `alumno_grupo` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(6) DEFAULT NULL,
  `id_grupo` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `alumno_grupo`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `nombre`) VALUES
(1, 'TIC 71'),
(2, 'TIC 72'),
(3, 'TIC 73');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro_materia`
--

CREATE TABLE IF NOT EXISTS `maestro_materia` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_maestro` int(6) DEFAULT NULL,
  `id_materia` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `maestro_materia`
--

INSERT INTO `maestro_materia` (`id`, `id_maestro`, `id_materia`) VALUES
(2, 3, 2),
(6, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `avatar` varchar(250) DEFAULT NULL,
  `orden` varchar(250) DEFAULT NULL,
  `estatus` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `nombre`, `avatar`, `orden`, `estatus`) VALUES
(1, 'Matemáticas', NULL, NULL, 1),
(2, 'Español', NULL, NULL, 1),
(3, 'Inglés', NULL, NULL, 1),
(4, 'POO', NULL, NULL, 1),
(5, 'Admin. del tiempo', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(250) DEFAULT NULL,
  `ApellidoPaterno` varchar(250) DEFAULT NULL,
  `ApellidoMaterno` varchar(250) DEFAULT NULL,
  `Telefono` varchar(250) DEFAULT NULL,
  `Calle` varchar(250) DEFAULT NULL,
  `NumeroExterior` int(5) DEFAULT NULL,
  `NumeroInterior` int(5) DEFAULT NULL,
  `Colonia` varchar(250) DEFAULT NULL,
  `Municipio` varchar(250) DEFAULT NULL,
  `Estado` varchar(250) DEFAULT NULL,
  `CP` int(6) DEFAULT NULL,
  `Correo` varchar(250) DEFAULT NULL,
  `Usuario` varchar(250) DEFAULT NULL,
  `Contrasena` varchar(250) DEFAULT NULL,
  `Nivel` varchar(250) DEFAULT NULL,
  `Estatus` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Telefono`, `Calle`, `NumeroExterior`, `NumeroInterior`, `Colonia`, `Municipio`, `Estado`, `CP`, `Correo`, `Usuario`, `Contrasena`, `Nivel`, `Estatus`) VALUES
(1, 'Luis', 'Puebla', 'Mendoza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '1'),
(2, 'Cresenciano', 'Jose', 'Jimenez', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '1'),
(3, 'Raúl', 'García', 'Martínez', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '1'),
(4, 'Alberto', 'Gonzalez', 'Ramirez', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', '1'),
(5, 'Miriam', 'Castro', 'Pérez', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', '1'),
(6, 'Karla', 'Puebla', 'Mendoza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', '1'),
(7, 'Jose', 'López', 'Reyes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
