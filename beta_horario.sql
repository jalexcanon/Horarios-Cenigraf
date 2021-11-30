-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2021 a las 21:21:46
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
-- Base de datos: `beta_horario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE `ambiente` (
  `id_A` int(11) NOT NULL,
  `Nombre_ambiente` varchar(100) NOT NULL,
  `Capacidad_ambiente` varchar(100) NOT NULL,
  `No_equipos` int(11) NOT NULL,
  `id_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`id_A`, `Nombre_ambiente`, `Capacidad_ambiente`, `No_equipos`, `id_sede`) VALUES
(3, 'Multimedia  ', '30 personas ', 2, 1),
(4, 'ADSI ', '30 personas ', 30, 1),
(5, 'Simulación  ', '30 personas ', 30, 2),
(6, 'Encuadernación  ', '15 personas ', 6, 1);

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
  `Nº ficha` varchar(11) NOT NULL,
  `fc_cant_aprend` int(11) NOT NULL,
  `fc_jornada` varchar(45) NOT NULL,
  `fc_tipo_formacion` varchar(45) NOT NULL,
  `fic_date_I` date NOT NULL,
  `fic_date_F` date NOT NULL,
  `fc_id_programa` int(11) NOT NULL,
  `estatus_trim` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`ID_F`, `Nº ficha`, `fc_cant_aprend`, `fc_jornada`, `fc_tipo_formacion`, `fic_date_I`, `fic_date_F`, `fc_id_programa`, `estatus_trim`) VALUES
(19, '1234567', 50, 'Diurna', 'Presencial', '2021-11-03', '2021-11-12', 88524459, 1),
(20, '1234569', 10, 'Nocturna', 'Virtual', '2021-11-04', '2021-11-12', 88524463, 0),
(24, '2061628', 30, 'Diurna', 'Presencial', '2021-11-05', '2021-11-26', 88524459, 1),
(25, '2231454', 20, 'Diurna', 'Presencial', '2021-11-11', '2022-11-11', 88524464, 1),
(30, '2061589', 20, 'Diurna', 'Presencial', '2021-11-30', '2021-11-30', 88524465, 0);

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
  `id_ambiente` int(11) DEFAULT NULL,
  `horas_instructor` int(11) NOT NULL,
  `id_trim_fch` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_hora`, `dia`, `ficha`, `instructor`, `hora`, `id_ambiente`, `horas_instructor`, `id_trim_fch`) VALUES
(264, 1, 24, 2, 2, 3, 2, 20),
(266, 2, 25, 12, 5, 4, 2, 25),
(269, 6, 24, 3, 8, 4, 2, 19),
(271, 2, 24, 4, 3, 3, 2, 19),
(272, 1, 19, 1, 1, 3, 2, 31),
(273, 2, 25, 1, 1, 3, 2, 25);

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
(1, 'Jose', 'Ovalle', 2147483647, 'jose@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 1),
(2, 'Giovany', 'Ortiz', 123456788, 'gio@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 1),
(3, 'Andres', 'martinez', 123456799, 'and@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 2),
(4, 'Camilo', 'Ortiz', 3333333, 'camilo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(12, 'Saitama  ', 'Ortiz', 234556942, 'sai@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(13, 'Nicolás ', 'Tiusaba ', 1000774689, 'tiusabanicolas@gmail.com', '2c9b1d39508edf85487f012c53cd69a3', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id_program` int(11) NOT NULL,
  `Nom_program` varchar(100) NOT NULL,
  `nivel_form` varchar(45) NOT NULL,
  `competencias` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id_program`, `Nom_program`, `nivel_form`, `competencias`) VALUES
(88524459, 'Encuadernación ', 'Técnico', 'informática\r\n'),
(88524460, 'Ingles ', 'Técnico', '0'),
(88524463, 'Fotografía ', 'Técnico', 'Comunicación\r\ncultura física  '),
(88524464, 'ADSI-Análisis y desarrollo de sistemas de información ', 'Tecnólogo', 'Matemáticas '),
(88524465, 'Impresión offset ', 'Tecnólogo', '...');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id` int(11) NOT NULL,
  `nombre_sede` varchar(100) NOT NULL,
  `direccion_sede` varchar(200) DEFAULT NULL,
  `telefono_sede` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id`, `nombre_sede`, `direccion_sede`, `telefono_sede`) VALUES
(1, 'Cenigraf', 'Cl. 15 #31-42, Bogotá', 5960199),
(2, 'Fundación Universitaria Horizonte', ' Cl. 69 ## 14 - 30, Bogotá, Cundinamarca', 2147483647),
(4, 'Fundación Universitaria ', 'Cl. 15 #31-30, Bogotá', 244456);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_trimestre`
--

CREATE TABLE `tb_trimestre` (
  `id_T` int(11) NOT NULL,
  `Trim_date_Inc` date DEFAULT NULL,
  `Trim_date_fin` date DEFAULT NULL,
  `Trimestre` varchar(20) DEFAULT NULL,
  `id_fch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_trimestre`
--

INSERT INTO `tb_trimestre` (`id_T`, `Trim_date_Inc`, `Trim_date_fin`, `Trimestre`, `id_fch`) VALUES
(19, '2021-11-25', '2021-11-26', 'I Trimestre', 24),
(20, '2021-11-27', '2021-11-28', 'II Trimestre', 24),
(21, '2021-11-29', '2021-11-30', 'III Trimestre', 24),
(22, '2021-12-01', '2021-12-02', 'IV Trimestre', 24),
(23, '2021-12-03', '2021-12-04', 'V Trimestre', 24),
(24, '2021-12-05', '2021-12-06', 'VI Trimestre', 24),
(25, '2021-11-25', '2021-11-26', 'I Trimestre', 25),
(26, '2021-11-27', '2021-11-28', 'II Trimestre', 25),
(27, '2021-11-29', '2021-11-30', 'III Trimestre', 25),
(28, '2021-12-01', '2021-12-02', 'IV Trimestre', 25),
(29, '2021-12-03', '2021-12-04', 'V Trimestre', 25),
(30, '2021-12-05', '2021-12-06', 'VI Trimestre', 25),
(31, '2021-11-30', '2021-12-01', 'I Trimestre', 19),
(32, '2021-12-01', '2021-12-02', 'II Trimestre', 19),
(33, '2021-12-03', '2021-12-04', 'III Trimestre', 19),
(34, '2021-12-05', '2021-12-06', 'IV Trimestre', 19),
(35, '2021-12-07', '2021-12-08', 'V Trimestre', 19),
(36, '2021-12-09', '2021-12-10', 'VI Trimestre', 19);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`id_A`),
  ADD KEY `relacion_sede` (`id_sede`);

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
  ADD PRIMARY KEY (`ID_F`),
  ADD KEY `relacion_prog` (`fc_id_programa`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_hora`),
  ADD KEY `dia` (`dia`) USING BTREE,
  ADD KEY `ficha` (`ficha`),
  ADD KEY `instructor` (`instructor`),
  ADD KEY `hora` (`hora`),
  ADD KEY `R` (`id_ambiente`),
  ADD KEY `Prueba_relacion` (`id_trim_fch`);

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
  ADD UNIQUE KEY `Cedula` (`Cedula`),
  ADD KEY `relacion_rol` (`rol`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id_program`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_trimestre`
--
ALTER TABLE `tb_trimestre`
  ADD PRIMARY KEY (`id_T`),
  ADD KEY `fk_TFCH` (`id_fch`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `id_A` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `ID_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_hora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT de la tabla `horas`
--
ALTER TABLE `horas`
  MODIFY `id_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88524466;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_trimestre`
--
ALTER TABLE `tb_trimestre`
  MODIFY `id_T` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD CONSTRAINT `relacion_sede` FOREIGN KEY (`id_sede`) REFERENCES `sede` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `relacion_prog` FOREIGN KEY (`fc_id_programa`) REFERENCES `programa` (`id_program`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `Prueba_relacion` FOREIGN KEY (`id_trim_fch`) REFERENCES `tb_trimestre` (`id_T`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `R` FOREIGN KEY (`id_ambiente`) REFERENCES `ambiente` (`id_A`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_H1` FOREIGN KEY (`dia`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_H2` FOREIGN KEY (`ficha`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_H3` FOREIGN KEY (`hora`) REFERENCES `horas` (`id_h`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_H4` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `relacion_rol` FOREIGN KEY (`rol`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `tb_trimestre`
--
ALTER TABLE `tb_trimestre`
  ADD CONSTRAINT `fk_TFCH` FOREIGN KEY (`id_fch`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
