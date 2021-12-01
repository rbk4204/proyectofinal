-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 10:36:52
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdhotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `IDempleado` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellidopat` varchar(20) NOT NULL,
  `Apellidomat` varchar(20) NOT NULL,
  `numtelef` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`IDempleado`, `Nombre`, `Apellidopat`, `Apellidomat`, `numtelef`) VALUES
(1, 'Rebeca', 'Rodriguez', 'Gaytan', '6564361165'),
(2, 'panchito', 'Rodriguez', 'perez', '6563457890'),
(3, 'maria', 'Rodriguez', 'Almaraz', '6562034567'),
(4, 'Luis', 'Hernandez', 'Lopez', '6567892345'),
(5, 'Karen', 'Mata', 'Ramos', '6568789334'),
(6, 'Rebeca', 'Rodriguez', 'Gaytan', '6564361165'),
(7, 'Rebeca', 'Rodriguez', 'Gaytan', '6564361165');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`IDempleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `IDempleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
