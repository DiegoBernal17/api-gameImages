-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-11-2018 a las 13:54:27
-- Versión del servidor: 5.7.22
-- Versión de PHP: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gamedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico_usuarios`
--

CREATE TABLE `historico_usuarios` (
  `id_partida` int(11) NOT NULL,
  `P1` tinyint(1) NOT NULL,
  `P1_audio` varchar(20) NOT NULL,
  `P1_intentos` int(2) NOT NULL DEFAULT '1',
  `P2` tinyint(1) NOT NULL,
  `P2_audio` varchar(20) NOT NULL,
  `P2_intentos` int(2) NOT NULL DEFAULT '1',
  `P3` tinyint(1) NOT NULL,
  `P3_audio` varchar(20) NOT NULL,
  `P3_intentos` int(2) NOT NULL DEFAULT '1',
  `P4` tinyint(1) NOT NULL,
  `P4_audio` varchar(20) NOT NULL,
  `P4_intentos` int(2) NOT NULL DEFAULT '1',
  `P5` tinyint(1) NOT NULL,
  `P5_audio` varchar(20) NOT NULL,
  `P5_intentos` int(2) NOT NULL DEFAULT '1',
  `P6` tinyint(1) NOT NULL,
  `P6_audio` varchar(20) NOT NULL,
  `P6_intentos` int(2) NOT NULL DEFAULT '1',
  `P7` tinyint(1) NOT NULL,
  `P7_audio` varchar(20) NOT NULL,
  `P7_intentos` int(2) NOT NULL DEFAULT '1',
  `P8` tinyint(1) NOT NULL,
  `P8_audio` varchar(20) NOT NULL,
  `P8_intentos` int(2) NOT NULL DEFAULT '1',
  `P9` tinyint(1) NOT NULL,
  `P9_audio` varchar(20) NOT NULL,
  `P9_intentos` int(2) NOT NULL DEFAULT '1',
  `fecha_partida` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historico_usuarios`
--
ALTER TABLE `historico_usuarios`
  ADD PRIMARY KEY (`id_partida`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historico_usuarios`
--
ALTER TABLE `historico_usuarios`
  MODIFY `id_partida` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
