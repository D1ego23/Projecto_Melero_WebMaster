-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 23:04:39
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbwebmaster`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(255) NOT NULL,
  `nombre` text NOT NULL,
  `apellidomat` text NOT NULL,
  `apellidopat` text NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidomat`, `apellidopat`, `direccion`, `correo`, `telefono`, `fecha`) VALUES
(1, 'Eduardo Salvador', 'Ayala', 'Melero', 'Oasis de Tunez', 'lalodiego@hotmail.com', '6567312466', '2001-06-23'),
(2, 'Eduardo Salvador', 'Ayala', 'Melero', 'Oasis de Tunez', 'lalodiego@hotmail.com', '6567312466', '2001-06-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` text NOT NULL,
  `experiencia` varchar(255) NOT NULL,
  `fechanac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellidos`, `correo`, `telefono`, `experiencia`, `fechanac`) VALUES
(4585, 'Diego', 'Melero Ayala', 'diegomeleroayala@hotmail.com', '6564848812', 'Buena', '2004-07-23'),
(4586, 'Diego', 'Melero Ayala', 'diegomeleroayala@hotmail.com', '6564848812', 'Buena', '2004-07-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE `paginas` (
  `id` int(255) NOT NULL,
  `nompagina` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `fechacreacion` date NOT NULL,
  `propietario` varchar(255) NOT NULL,
  `correopropietario` varchar(50) NOT NULL,
  `numactualizaciones` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`id`, `nompagina`, `url`, `fechacreacion`, `propietario`, `correopropietario`, `numactualizaciones`) VALUES
(6585, '', 'crosscheckgames.com', '2021-10-02', 'Diego Melero Ayala', 'diegomeleroayala@hotmail.com', 1),
(6595, 'CrossCheckGames', 'crosscheckgames.com', '2021-10-02', 'Diego Melero Ayala', 'diegomeleroayala@hotmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `cliente` text NOT NULL,
  `metodopago` varchar(255) NOT NULL,
  `factura` varchar(255) NOT NULL,
  `total` int(255) NOT NULL,
  `productos` text NOT NULL,
  `fecha` date NOT NULL,
  `vendedor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `cliente`, `metodopago`, `factura`, `total`, `productos`, `fecha`, `vendedor`) VALUES
(1, 'Eduardo Salvador Melero', 'PayPal', 'Test', 3500, 'Pagina Web', '2021-12-02', 'Diego Melero Ayala'),
(2, 'Eduardo Salvador Melero', 'PayPal', 'Test', 45000, 'Pagina Web', '2021-12-03', 'Diego Melero Ayala');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
