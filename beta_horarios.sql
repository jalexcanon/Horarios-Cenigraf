-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2021 a las 17:42:43
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `beta_horarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `id` int(11) NOT NULL,
  `dia_s` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`id`, `dia_s`) VALUES
(4, 'Jueves'),
(1, 'Lunes'),
(2, 'Martes'),
(3, 'Miercoles'),
(6, 'Sabado'),
(5, 'Viernes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `ID_F` int(11) NOT NULL,
  `Nº ficha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`ID_F`, `Nº ficha`) VALUES
(1, '2061628'),
(2, '2025329'),
(3, '2023563');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_hora` int(11) NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `ficha` int(11) DEFAULT NULL,
  `instructor` int(11) DEFAULT NULL,
  `hora` int(11) DEFAULT NULL,
  `horas_instructor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_hora`, `dia`, `ficha`, `instructor`, `hora`, `horas_instructor`) VALUES
(114, 2, 2, 1, 2, 2),
(115, 6, 1, 1, 1, 2),
(118, 1, 1, 1, 2, 2),
(119, 1, 1, 1, 1, 2),
(120, 2, 1, 1, 1, 2),
(121, 3, 1, 1, 1, 2),
(122, 4, 1, 1, 1, 2),
(124, 6, 1, 1, 3, 2),
(125, 5, 1, 1, 3, 2),
(126, 4, 1, 1, 3, 2),
(127, 3, 1, 1, 3, 2),
(128, 2, 1, 1, 3, 2),
(129, 1, 1, 1, 3, 2),
(130, 1, 1, 1, 5, 2),
(131, 2, 1, 1, 5, 2),
(132, 3, 1, 1, 5, 2),
(133, 4, 1, 1, 5, 2),
(149, 1, 1, 3, 1, 2),
(150, 2, 1, 3, 1, 2),
(151, 2, 1, 3, 2, 2),
(152, 2, 1, 3, 4, 2),
(153, 2, 1, 3, 5, 2),
(154, 2, 1, 3, 7, 2),
(156, 3, 1, 3, 1, 2),
(157, 3, 1, 3, 2, 2),
(159, 3, 1, 3, 4, 2),
(160, 3, 1, 3, 6, 2),
(161, 4, 2, 3, 1, 2),
(162, 4, 2, 3, 2, 2),
(163, 4, 2, 3, 3, 2),
(164, 4, 2, 3, 4, 2),
(165, 4, 2, 3, 5, 2),
(166, 4, 3, 3, 6, 2),
(167, 4, 2, 3, 6, 2),
(168, 5, 3, 3, 6, 2),
(169, 2, 1, 2, 1, 2),
(170, 6, 1, 2, 8, 2),
(172, 2, 1, 1, 3, 2),
(173, 3, 1, 2, 4, 2),
(174, 6, 1, 1, 2, 2),
(175, 6, 2, 3, 8, 2),
(177, 6, 3, 1, 8, 2),
(178, 1, 1, 7, 1, 2),
(179, 2, 2, 7, 2, 2),
(180, 3, 3, 7, 3, 2),
(181, 4, 1, 7, 4, 2),
(182, 5, 1, 7, 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas`
--

CREATE TABLE `horas` (
  `id_h` int(11) NOT NULL,
  `hora` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horas`
--

INSERT INTO `horas` (`id_h`, `hora`) VALUES
(1, '6:00-7:40'),
(2, '8:00-9:40'),
(3, '10:00-11:40'),
(4, '12:00-13:40'),
(5, '14:20-16:00'),
(6, '16:20-18:00'),
(7, '18:15-19:45'),
(8, '20:00-21:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Cedula` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`ID`, `Nombre`, `Apellido`, `Cedula`, `email`, `contrasena`, `rol`) VALUES
(1, 'Jose', 'Ovalle', 123456789, 'jose@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 1),
(2, 'Giovany', 'Ortiz', 123456788, 'gio@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 1),
(3, 'Andres', 'martinez', 123456799, 'and@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 2),
(7, 'Camilo', 'Ortiz', 3333333, 'camilo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'ADMIN'),
(2, 'Instructor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dia_s` (`dia_s`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`ID_F`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_hora`),
  ADD KEY `dia` (`dia`) USING BTREE,
  ADD KEY `ficha` (`ficha`),
  ADD KEY `instructor` (`instructor`),
  ADD KEY `hora` (`hora`);

--
-- Indices de la tabla `horas`
--
ALTER TABLE `horas`
  ADD PRIMARY KEY (`id_h`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `relacion_rol` (`rol`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `ID_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_hora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT de la tabla `horas`
--
ALTER TABLE `horas`
  MODIFY `id_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `relacion_H1` FOREIGN KEY (`dia`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_H2` FOREIGN KEY (`ficha`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_H3` FOREIGN KEY (`hora`) REFERENCES `horas` (`id_h`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_H4` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `relacion_rol` FOREIGN KEY (`rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
