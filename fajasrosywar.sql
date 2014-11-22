-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2014 a las 08:51:29
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fajasrosywar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE IF NOT EXISTS `archivo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `destino` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`id`, `nombre`, `destino`) VALUES
(1, 'Almanza2.jpg', 'archivo/Almanza2.jpg'),
(2, 'Almanza2.jpg', 'archivo/Almanza2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_factura`
--

CREATE TABLE IF NOT EXISTS `articulos_factura` (
  `id_factura` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cantidad` decimal(15,0) NOT NULL,
  `precio` decimal(15,0) NOT NULL,
  `total` varchar(20) NOT NULL,
  PRIMARY KEY (`id_factura`,`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `ciudad`, `Direccion`, `telefono`, `email`) VALUES
('106974122', 'Andres', 'Valencia', 'Fusa', 'Calle11', '313122', 'Javier@hot'),
('1069751356', 'Nestor', 'Fernando', 'Bogota', 'Calle 12', '3132212', 'fernando@hotm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `n_factura` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `cajero` varchar(20) NOT NULL,
  PRIMARY KEY (`n_factura`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`n_factura`, `cliente`, `fecha`, `cajero`) VALUES
(1, '2', '2014-11-04', '13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` varchar(20) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cantidad` decimal(15,0) NOT NULL,
  `precio` decimal(15,0) NOT NULL,
  `archivo` varchar(70) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `descripcion`, `nombre`, `cantidad`, `precio`, `archivo`) VALUES
('1394', 'Chaleco', 'Faja Cachetero', '50', '80000', 'archivo/w.jpg'),
('1398', 'Tiras', 'Faja Cachetero', '50', '80000', 'archivo/w2.jpg'),
('15031', 'Manga Corta', 'Faja Body Brasilero', '50', '70000', 'archivo/w.jpg'),
('15032', 'Chaleco', 'Faja Body Brasilero', '50', '60000', 'archivo/w2.jpg'),
('21571', 'Tiras', 'Faja Bicicletero', '50', '100000', 'archivo/w.jpg'),
('21572', 'Chaleco', 'Faja Bicicletero', '50', '100000', 'archivo/w.jpg'),
('39480', 'Tiras', 'Faja Prehormada', '40', '100000', 'archivo/w.jpg'),
('39481', 'Tiras', 'Faja Pesquero', '50', '100000', 'archivo/w2.jpg'),
('54963', 'Manga Corta', 'Faja Short', '50', '90000', 'archivo/w2.jpg'),
('59664', 'Chaleco', 'Faja Short', '50', '80000', 'archivo/w.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `nombre`, `apellido`, `pass`, `salt`) VALUES
('13', 'Nestor@hotmail.com', 'Nestor', 'Ricaurte', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510aea3c2edab01513f75f331dcdc6ae804e', 'ea3c2edab01513f75f331dcdc6ae804e'),
('22', 'Fernando@hotmail.com', 'Fernando', 'Ricaurte', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a0d978d0c139a3a6ac4824a493ff27ea9', '0d978d0c139a3a6ac4824a493ff27ea9');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
