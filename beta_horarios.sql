-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2021 a las 21:18:57
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
-- Estructura de tabla para la tabla `6:00-7:40`
--

CREATE TABLE `6:00-7:40` (
  `id` int(11) NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `ficha` int(11) DEFAULT NULL,
  `instructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `6:00-7:40`
--

INSERT INTO `6:00-7:40` (`id`, `dia`, `ficha`, `instructor`) VALUES
(247, 1, 1, 2),
(248, 6, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `8:00-9:40`
--

CREATE TABLE `8:00-9:40` (
  `id` int(11) NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `ficha` int(11) DEFAULT NULL,
  `instructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `8:00-9:40`
--

INSERT INTO `8:00-9:40` (`id`, `dia`, `ficha`, `instructor`) VALUES
(86, 6, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `10:00-11:40`
--

CREATE TABLE `10:00-11:40` (
  `id` int(11) NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `ficha` int(11) DEFAULT NULL,
  `instructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `10:00-11:40`
--

INSERT INTO `10:00-11:40` (`id`, `dia`, `ficha`, `instructor`) VALUES
(77, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `12:00-13:40`
--

CREATE TABLE `12:00-13:40` (
  `id` int(11) NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `ficha` int(11) DEFAULT NULL,
  `instructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `12:00-13:40`
--

INSERT INTO `12:00-13:40` (`id`, `dia`, `ficha`, `instructor`) VALUES
(11, 3, 1, 2),
(10, 4, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `14:20-16:00`
--

CREATE TABLE `14:20-16:00` (
  `id` int(11) NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `ficha` int(11) DEFAULT NULL,
  `instructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `16:20-18:00`
--

CREATE TABLE `16:20-18:00` (
  `id` int(11) NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `ficha` int(11) DEFAULT NULL,
  `instructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `18:15-19:45`
--

CREATE TABLE `18:15-19:45` (
  `id` int(11) NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `ficha` int(11) DEFAULT NULL,
  `instructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `20:00-21:40`
--

CREATE TABLE `20:00-21:40` (
  `id` int(11) NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `ficha` int(11) DEFAULT NULL,
  `instructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `20:00-21:40`
--

INSERT INTO `20:00-21:40` (`id`, `dia`, `ficha`, `instructor`) VALUES
(9, 6, 1, 2);

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
(113, 6, 3, 1, 8, 2),
(114, 2, 2, 1, 2, 2),
(115, 5, 1, 1, 1, 2),
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
(155, 2, 1, 3, 8, 2),
(156, 3, 1, 3, 1, 2),
(157, 3, 1, 3, 2, 2),
(158, 3, 1, 3, 3, 2),
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
(171, 6, 2, 1, 2, 2),
(172, 2, 1, 1, 3, 2),
(173, 3, 1, 2, 4, 2);

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
  `Cedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`ID`, `Nombre`, `Apellido`, `Cedula`) VALUES
(1, 'Jose', 'Ovalle', 123456789),
(2, 'Giovany', 'Ortiz', 123456788),
(3, 'Andres', 'martinez', 123456799);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `6:00-7:40`
--
ALTER TABLE `6:00-7:40`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relacion` (`ficha`),
  ADD KEY `relacion2` (`instructor`),
  ADD KEY `dia` (`dia`) USING BTREE;

--
-- Indices de la tabla `8:00-9:40`
--
ALTER TABLE `8:00-9:40`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relacion_i` (`instructor`),
  ADD KEY `relacion_f` (`ficha`),
  ADD KEY `dia` (`dia`,`ficha`,`instructor`) USING BTREE;

--
-- Indices de la tabla `10:00-11:40`
--
ALTER TABLE `10:00-11:40`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor` (`instructor`),
  ADD KEY `ficha` (`ficha`),
  ADD KEY `dia` (`dia`,`ficha`,`instructor`) USING BTREE;

--
-- Indices de la tabla `12:00-13:40`
--
ALTER TABLE `12:00-13:40`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor` (`instructor`),
  ADD KEY `ficha` (`ficha`),
  ADD KEY `dia` (`dia`,`ficha`,`instructor`) USING BTREE;

--
-- Indices de la tabla `14:20-16:00`
--
ALTER TABLE `14:20-16:00`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor` (`instructor`),
  ADD KEY `ficha` (`ficha`),
  ADD KEY `dia` (`dia`,`ficha`,`instructor`) USING BTREE;

--
-- Indices de la tabla `16:20-18:00`
--
ALTER TABLE `16:20-18:00`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ficha` (`ficha`),
  ADD KEY `instructor` (`instructor`),
  ADD KEY `dia` (`dia`,`ficha`,`instructor`) USING BTREE;

--
-- Indices de la tabla `18:15-19:45`
--
ALTER TABLE `18:15-19:45`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor` (`instructor`),
  ADD KEY `ficha` (`ficha`),
  ADD KEY `dia` (`dia`,`ficha`,`instructor`) USING BTREE;

--
-- Indices de la tabla `20:00-21:40`
--
ALTER TABLE `20:00-21:40`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ficha` (`ficha`),
  ADD KEY `instructor` (`instructor`),
  ADD KEY `dia` (`dia`,`ficha`,`instructor`) USING BTREE;

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
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `6:00-7:40`
--
ALTER TABLE `6:00-7:40`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT de la tabla `8:00-9:40`
--
ALTER TABLE `8:00-9:40`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `10:00-11:40`
--
ALTER TABLE `10:00-11:40`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `12:00-13:40`
--
ALTER TABLE `12:00-13:40`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `14:20-16:00`
--
ALTER TABLE `14:20-16:00`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `16:20-18:00`
--
ALTER TABLE `16:20-18:00`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `18:15-19:45`
--
ALTER TABLE `18:15-19:45`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `20:00-21:40`
--
ALTER TABLE `20:00-21:40`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id_hora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT de la tabla `horas`
--
ALTER TABLE `horas`
  MODIFY `id_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `6:00-7:40`
--
ALTER TABLE `6:00-7:40`
  ADD CONSTRAINT `relacion` FOREIGN KEY (`ficha`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion2` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion3` FOREIGN KEY (`dia`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `8:00-9:40`
--
ALTER TABLE `8:00-9:40`
  ADD CONSTRAINT `relacion_d` FOREIGN KEY (`dia`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_f` FOREIGN KEY (`ficha`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_i` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `10:00-11:40`
--
ALTER TABLE `10:00-11:40`
  ADD CONSTRAINT `10:00-11:40_ibfk_1` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `10:00-11:40_ibfk_2` FOREIGN KEY (`ficha`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `10:00-11:40_ibfk_3` FOREIGN KEY (`dia`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `12:00-13:40`
--
ALTER TABLE `12:00-13:40`
  ADD CONSTRAINT `12:00-13:40_ibfk_1` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `12:00-13:40_ibfk_2` FOREIGN KEY (`ficha`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `12:00-13:40_ibfk_3` FOREIGN KEY (`dia`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `14:20-16:00`
--
ALTER TABLE `14:20-16:00`
  ADD CONSTRAINT `14:20-16:00_ibfk_1` FOREIGN KEY (`dia`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `14:20-16:00_ibfk_2` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `14:20-16:00_ibfk_3` FOREIGN KEY (`ficha`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `16:20-18:00`
--
ALTER TABLE `16:20-18:00`
  ADD CONSTRAINT `16:20-18:00_ibfk_1` FOREIGN KEY (`dia`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `16:20-18:00_ibfk_2` FOREIGN KEY (`ficha`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `16:20-18:00_ibfk_3` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `18:15-19:45`
--
ALTER TABLE `18:15-19:45`
  ADD CONSTRAINT `18:15-19:45_ibfk_1` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `18:15-19:45_ibfk_2` FOREIGN KEY (`ficha`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `18:15-19:45_ibfk_3` FOREIGN KEY (`dia`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `20:00-21:40`
--
ALTER TABLE `20:00-21:40`
  ADD CONSTRAINT `20:00-21:40_ibfk_1` FOREIGN KEY (`ficha`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `20:00-21:40_ibfk_2` FOREIGN KEY (`dia`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `20:00-21:40_ibfk_3` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `relacion_H1` FOREIGN KEY (`dia`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_H2` FOREIGN KEY (`ficha`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_H3` FOREIGN KEY (`hora`) REFERENCES `horas` (`id_h`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_H4` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
