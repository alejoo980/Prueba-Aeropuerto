-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2022 a las 09:10:52
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aeropuerto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llegadas`
--

CREATE TABLE `llegadas` (
  `id` int(11) NOT NULL,
  `time` varchar(100) DEFAULT NULL,
  `fromcity` varchar(150) DEFAULT NULL,
  `flightno` varchar(100) DEFAULT NULL,
  `remarks` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `llegadas`
--

INSERT INTO `llegadas` (`id`, `time`, `fromcity`, `flightno`, `remarks`) VALUES
(1, '19:35', 'Glasgow', 'LY4488', 'BAGS DELIVERED'),
(2, '19:40', 'ROME', 'TH7252', 'BAGS DELIVERED'),
(3, '1', '2', '3', '4'),
(4, '123', '123', '123', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `id` int(11) NOT NULL,
  `time` varchar(100) DEFAULT NULL,
  `destiny` varchar(250) DEFAULT NULL,
  `flightno` varchar(150) DEFAULT NULL,
  `gate` varchar(20) DEFAULT NULL,
  `remarks` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`id`, `time`, `destiny`, `flightno`, `gate`, `remarks`) VALUES
(1, '07:35', 'LOS ANGELES', 'TK3946', 'A1', 'ON TIME'),
(2, '07:40', 'FRANKFURT', 'LN3211', 'C3', 'ON TIME'),
(3, '1', '2', '3', '4', '5'),
(4, '123', '123', '123', '123', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `documento_user` int(100) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `passwordd` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`documento_user`, `name`, `passwordd`) VALUES
(1234, 'ALEJANDRO ZAPATA', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `llegadas`
--
ALTER TABLE `llegadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`documento_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `llegadas`
--
ALTER TABLE `llegadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
