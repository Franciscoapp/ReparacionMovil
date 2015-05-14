-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2015 a las 09:50:47
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `yoloarreglocore`
--
CREATE DATABASE IF NOT EXISTS `yoloarreglocore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yoloarreglocore`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shipping`
--

DROP TABLE IF EXISTS `shipping`;
CREATE TABLE IF NOT EXISTS `shipping` (
  `pkshipping` int(15) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `movil` int(20) NOT NULL,
  `calle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numExterior` int(15) NOT NULL,
  `colonia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pkshipping`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(12) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `apellidoPaterno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoMaterno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` enum('INTERNO','EXTERNO') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'EXTERNO',
  `genero` enum('masculino','femenino') COLLATE utf8_unicode_ci NOT NULL,
  `pkshipping` int(12) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
