-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-02-2017 a las 19:09:49
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `propiedad` varchar(200) NOT NULL,
  `consecutivo` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `nombre_cliente` varchar(200) NOT NULL,
  `precio` double NOT NULL,
  `fraccionamiento` varchar(100) NOT NULL,
  `calle_num` varchar(100) NOT NULL,
  `numero_int` int(10) NOT NULL,
  `m2t` int(10) NOT NULL,
  `banos` int(2) NOT NULL,
  `plantas` int(2) NOT NULL,
  `caracteristicas` text NOT NULL,
  `m2c` int(10) NOT NULL,
  `recamaras` int(2) NOT NULL,
  `cocheras` int(2) NOT NULL,
  `observaciones` text NOT NULL,
  `forma_pago` varchar(50) NOT NULL,
  `asesor` varchar(200) NOT NULL,
  `tipo_inmueble` varchar(100) NOT NULL,
  `fecha_registro` date NOT NULL,
  `comentario_web` text NOT NULL,
  `operacion` varchar(50) NOT NULL,
  `foto_principal` varchar(200) NOT NULL,
  `mapa` varchar(200) NOT NULL,
  `marcado` varchar(2) NOT NULL,
  `estatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`propiedad`),
  ADD UNIQUE KEY `consecutivo` (`consecutivo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `consecutivo` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
