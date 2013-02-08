-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-02-2013 a las 11:17:36
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proiektukobd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cif_cliente` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(15) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cif_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cif_cliente`, `nombre`, `apellido`, `telefono`) VALUES
(11111111, 'mikel', 'txurruka', '365487523');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coche`
--

CREATE TABLE IF NOT EXISTS `coche` (
  `cod_coche` int(11) NOT NULL,
  `marca` varchar(15) COLLATE utf8_bin NOT NULL,
  `modelo` varchar(15) COLLATE utf8_bin NOT NULL,
  `caracteristicas` varchar(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cod_coche`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `coche`
--

INSERT INTO `coche` (`cod_coche`, `marca`, `modelo`, `caracteristicas`) VALUES
(3333333, 'Renault', 'Clio', 'Sport'),
(4444444, 'fiat', 'uno', 'turbo'),
(11111111, 'nissan', 'almera', 'simple');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `num_venta` int(11) NOT NULL AUTO_INCREMENT,
  `cod_coche` varchar(15) COLLATE utf8_bin NOT NULL,
  `cif_cliente` varchar(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`num_venta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`num_venta`, `cod_coche`, `cif_cliente`) VALUES
(1, '2222222', '11111111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
