-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-03-2013 a las 12:15:37
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
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(20) COLLATE utf8_bin NOT NULL,
  `telefono` int(11) NOT NULL,
  PRIMARY KEY (`cif_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cif_cliente`, `nombre`, `apellido`, `telefono`) VALUES
(13565946, 'javier', 'bañado', 2147483647),
(223666666, 'antonio ', 'ortuño', 666666666),
(368549624, 'Maria', 'domingez', 956854721),
(555555555, 'javier', 'bañado', 666666666),
(654892156, 'Rita', 'Madariaga', 946258795),
(1646518169, 'antonio', 'ortuño', 51981618);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coche`
--

CREATE TABLE IF NOT EXISTS `coche` (
  `cod_coche` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(20) COLLATE utf8_bin NOT NULL,
  `modelo` varchar(20) COLLATE utf8_bin NOT NULL,
  `caracteristicas` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cod_coche`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2147483647 ;

--
-- Volcado de datos para la tabla `coche`
--

INSERT INTO `coche` (`cod_coche`, `marca`, `modelo`, `caracteristicas`) VALUES
(362458752, 'Fiat', 'Stylo', 'do todo'),
(555555555, 'Renault', 'Megane', 'full equipe'),
(635246854, 'Ford', 'Focus', 'simple'),
(2147483647, 'peugeot', '207', 'gt hdi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piezas`
--

CREATE TABLE IF NOT EXISTS `piezas` (
  `num_pedido` int(11) NOT NULL,
  `ref_pieza` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`num_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `piezas`
--

INSERT INTO `piezas` (`num_pedido`, `ref_pieza`, `cantidad`, `precio`) VALUES
(36, 3622452, 2, 100),
(562, 132164, 1, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `num_venta` int(11) NOT NULL,
  `cod_coche` int(11) NOT NULL,
  `cif_cliente` int(11) NOT NULL,
  PRIMARY KEY (`num_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`num_venta`, `cod_coche`, `cif_cliente`) VALUES
(1, 555555555, 368549624),
(2, 362458752, 654892156);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
