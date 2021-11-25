-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2021 a las 23:40:23
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quesoyo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotes`
--

CREATE TABLE `lotes` (
  `lote` int(4) NOT NULL,
  `fecha` date DEFAULT current_timestamp(),
  `litros` float DEFAULT NULL,
  `cantFermentos` float DEFAULT NULL,
  `temperatura` float DEFAULT NULL,
  `humedad` float DEFAULT NULL,
  `tipoQueso` varchar(100) DEFAULT NULL,
  `sal` float DEFAULT NULL,
  `cacl2` float DEFAULT NULL,
  `cuajo` float DEFAULT NULL,
  `acidoLactico` float DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `patente` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `localidad` varchar(255) NOT NULL,
  `empresa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcionleche`
--

CREATE TABLE `recepcionleche` (
  `id_leche` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `litros` float NOT NULL,
  `pH` float NOT NULL,
  `temperatura` float NOT NULL,
  `densidad` float NOT NULL,
  `alcohol` float NOT NULL,
  `sensorial` varchar(255) NOT NULL,
  `responsable` varchar(255) NOT NULL,
  `observacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_fermentos`
--

CREATE TABLE `tabla_fermentos` (
  `id_fermento` int(20) NOT NULL,
  `fermento` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `envase` varchar(30) NOT NULL,
  `acidificacion` varchar(30) NOT NULL,
  `productor_Gas` varchar(10) NOT NULL,
  `aroma` varchar(10) NOT NULL,
  `aplicacion` varchar(200) NOT NULL,
  `litros` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_fermentos`
--

INSERT INTO `tabla_fermentos` (`id_fermento`, `fermento`, `tipo`, `envase`, `acidificacion`, `productor_Gas`, `aroma`, `aplicacion`, `litros`) VALUES
(1, 'TMB', 'Termofilo', 'Sobre de 10U', 'Media', 'No', 'No', 'Quesos semi-duros, Quesos blancos.', 2000),
(2, 'SME', 'Mesofilo', 'Sobre de 10U', 'Media-Baja', 'Si', 'Si', 'Crema agria, Quesos frescos, Quesos semi-duros.', 2000),
(3, 'TL', 'Termofilo', 'Sobres de 10U', 'Media-Rapida', 'No', 'Si', 'Queso azul, Quesos suaves, Queso mantecoso.', 2000),
(4, 'PDF', 'Termofilo', 'Sobres de 10U', 'Rapida', 'No', 'No', 'Pastas hiladas, Quesos mozzarella.', 2000),
(5, 'PCS', 'Termofilo', 'Sobres de 10U', 'Rapida', 'No', 'Si', 'Quesos duros y semi-duros, Quesos de oveja o larga maduracion.', 2000),
(6, 'YO-Y9', 'Termofilo', 'Sobres de 10U', 'Muy rapida', '-', 'Dulce', 'Yogurt', 1000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lotes`
--
ALTER TABLE `lotes`
  ADD PRIMARY KEY (`lote`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recepcionleche`
--
ALTER TABLE `recepcionleche`
  ADD PRIMARY KEY (`id_leche`,`id_proveedor`);

--
-- Indices de la tabla `tabla_fermentos`
--
ALTER TABLE `tabla_fermentos`
  ADD PRIMARY KEY (`id_fermento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lotes`
--
ALTER TABLE `lotes`
  MODIFY `lote` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recepcionleche`
--
ALTER TABLE `recepcionleche`
  MODIFY `id_leche` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_fermentos`
--
ALTER TABLE `tabla_fermentos`
  MODIFY `id_fermento` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
