-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2022 a las 16:41:34
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
(18, '101 -M1 ', '30', 30, 9),
(19, '102 M2 ', '30', 30, 9),
(20, '103 M3 ', '30', 30, 9),
(21, '302 ', '30', 30, 9),
(22, '303 ', '30', 30, 9),
(23, '304 ', '30', 30, 9),
(24, '305 ', '30', 30, 9),
(25, '104 ILUSTRACION ', '30', 30, 9),
(26, '105 IMPRESION DIGITAL ', '30', 30, 9),
(27, '106 DISEÑO MAC ', '30', 30, 9),
(28, '107 DISEÑO PC ', '30', 30, 9),
(29, '109 PLM ', '30', 30, 9),
(30, '301 MULTIMEDIA 3 ', '30', 30, 9),
(31, '401A MULTIMEDIA  ', '30', 30, 9),
(32, '401B MULTIMEDIA 2 ', '30', 30, 9),
(33, '402 ANIMACION 1 ', '30', 30, 9),
(34, '403 ANIMACION 2 ', '30', 30, 9),
(35, 'FOTOGRAFIA ', '30', 30, 9),
(36, 'SIMULADORES ', '30', 30, 9),
(37, '108 SALON OFFSET ', '30', 30, 9),
(38, 'TALLER OFFSET ', '30', 30, 9),
(39, 'ENCUADERNACION ', '30', 30, 9),
(40, 'FLEXOGRAFIA ', '30', 30, 9),
(41, 'SERIGRAFIA ', '30', 30, 9),
(42, 'LAB METROLOGIA ', '30', 30, 9),
(43, 'Espacio Libre ', '30', 30, 9),
(44, 'Desarrollo de Cursos Virtuales ', '30', 30, 9),
(45, 'Proyecto Formativo ', '30', 30, 9),
(46, 'Sin Ambiente  ', '30', 30, 9),
(47, 'Taller Virtual ', '30', 30, 9);

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
(1, 'Lunes'),
(2, 'Martes'),
(3, 'Miercoles'),
(4, 'Jueves'),
(5, 'Viernes'),
(6, 'Sabado');

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
(40, '2502217', 30, 'Nocturna', 'Presencial', '2022-04-18', '2022-12-18', 88524475, 1),
(41, '2502227', 30, 'Diurna', 'Presencial', '2022-04-18', '2022-07-02', 88524476, 1),
(43, '2530039', 30, 'Nocturna', 'Presencial', '2022-06-10', '2022-06-11', 88524477, 1),
(44, '2502223', 30, 'Nocturna', 'Presencial', '2022-06-11', '2022-06-12', 88524478, 1),
(45, '2469474', 30, 'Mixta', 'Presencial', '2022-06-09', '2022-06-17', 88524479, 1),
(46, '2469475', 30, 'Mixta', 'Presencial', '2022-06-10', '2022-06-11', 88524480, 1),
(47, '2530038', 30, 'Nocturna', 'Presencial', '2022-06-08', '2022-06-16', 88524481, 1),
(48, '2469491', 30, 'Mixta', 'Presencial', '2022-06-09', '2022-06-17', 88524482, 1),
(49, '2502202', 30, 'Mixta', 'Presencial', '2022-03-02', '2022-05-03', 88524483, 1),
(50, '2469486', 30, 'Mixta', 'Presencial', '2022-06-09', '2022-06-17', 88524484, 1),
(51, '2502199', 30, 'Nocturna', 'Presencial', '2022-06-10', '2022-06-17', 88524485, 1),
(52, '2525170', 30, 'Diurna', 'Presencial', '2022-06-16', '2022-06-25', 88524486, 1),
(53, '2203242', 30, 'Diurna', 'Presencial', '2022-06-08', '2022-06-24', 88524487, 1),
(54, '2203235', 30, 'Mixta', 'Presencial', '2022-06-09', '2022-06-17', 88524488, 1),
(55, '2203238', 30, 'Nocturna', 'Presencial', '2022-06-09', '2022-06-25', 88524489, 1),
(56, '2247684', 30, 'Diurna', 'Presencial', '2022-06-14', '2022-06-23', 88524490, 1),
(57, '2249984', 30, 'Diurna', 'Presencial', '2022-06-09', '2022-06-25', 88524491, 1),
(58, '2203239', 30, 'Nocturna', 'Presencial', '2022-06-17', '2022-06-29', 88524492, 1),
(59, '2229620', 30, 'Mixta', 'Presencial', '2022-06-16', '2022-06-30', 88524493, 1),
(60, '2242405', 30, 'Mixta', 'Presencial', '2022-06-08', '2022-06-24', 88524494, 1),
(61, '2532156', 30, 'Mixta', 'Presencial', '2022-06-10', '2022-06-18', 88524495, 1),
(62, '2203241', 30, 'Mixta', 'Presencial', '2022-06-09', '2022-06-24', 88524496, 1),
(63, '2203243', 30, 'Nocturna', 'Presencial', '2022-06-13', '2022-06-21', 88524497, 1),
(64, '2250712', 30, 'Mixta', 'Presencial', '2022-06-06', '2022-06-15', 88524498, 1),
(65, '2532157', 30, 'Mixta', 'Presencial', '2022-06-15', '2022-06-29', 88524499, 1),
(66, '2450052', 30, 'Mixta', 'Presencial', '2022-06-14', '2022-06-24', 88524500, 1),
(67, '2469489', 30, 'Nocturna', 'Presencial', '2022-06-13', '2022-06-29', 88524501, 1),
(68, '2242449', 30, 'Nocturna', 'Presencial', '2022-06-20', '2022-06-30', 88524502, 1),
(69, '2525168', 30, 'Nocturna', 'Presencial', '2022-06-14', '2022-06-23', 88524503, 1),
(70, '2502187', 30, 'Mixta', 'Presencial', '2022-06-16', '2022-06-24', 88524504, 1),
(71, '2502196', 30, 'Nocturna', 'Presencial', '2022-06-16', '2022-06-24', 88524505, 1),
(72, '2450072', 30, 'Mixta', 'Presencial', '2022-06-23', '2022-06-30', 88524506, 1),
(73, '2450019', 30, 'Mixta', 'Presencial', '2022-06-21', '2022-06-29', 88524507, 1),
(74, '2532155', 30, 'Mixta', 'Presencial', '2022-06-14', '2022-06-30', 88524508, 1),
(75, '2247675', 30, 'Mixta', 'Presencial', '2022-06-14', '2022-06-23', 88524509, 1),
(76, '2249983', 30, 'Mixta', 'Presencial', '2022-06-22', '2022-06-24', 88524510, 1),
(77, '2450049', 30, 'Mixta', 'Presencial', '2022-06-14', '2022-06-24', 88524511, 1),
(78, '2526800', 30, 'Nocturna', 'Presencial', '2022-06-21', '2022-06-30', 88524512, 1),
(79, '2450025', 30, 'Mixta', 'Presencial', '2022-06-14', '2022-06-30', 88524513, 1),
(80, '2440655', 30, 'Diurna', 'Presencial', '2022-06-15', '2022-06-29', 88524514, 1),
(81, '2440666', 30, 'Nocturna', 'Presencial', '2022-06-23', '2022-06-30', 88524515, 1),
(82, '2440667', 30, 'Mixta', 'Presencial', '2022-06-22', '2022-06-21', 88524516, 1);

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
  `horas_instructor` int(11) NOT NULL DEFAULT 2,
  `id_trim_fch` int(11) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_hora`, `dia`, `ficha`, `instructor`, `hora`, `id_ambiente`, `horas_instructor`, `id_trim_fch`, `descripcion`) VALUES
(347, 1, 40, 90, 7, 21, 2, 104, 'Razonar cuantitativamente '),
(348, 2, 40, 45, 7, 26, 2, 104, 'Taller acompañamiento directo'),
(349, 3, 40, 45, 7, 26, 2, 104, 'Taller acompañamiento directo'),
(350, 4, 40, 45, 7, 26, 2, 104, 'Taller acompañamiento directo'),
(351, 5, 40, 58, 7, 42, 2, 104, ''),
(352, 1, 40, 87, 8, 21, 2, 104, 'Desarrollar procesos de comunicación'),
(353, 2, 40, 45, 8, 26, 2, 104, 'Taller acompañamiento directo'),
(354, 3, 40, 45, 8, 26, 2, 104, 'Taller acompañamiento directo'),
(355, 4, 40, 45, 8, 26, 2, 104, 'Taller acompañamiento directo'),
(356, 5, 40, 45, 8, 26, 2, 104, 'Taller acompañamiento directo'),
(357, 1, 41, 41, 1, 26, 2, 110, 'Taller acompañamiento presencial'),
(358, 2, 41, 41, 1, 26, 2, 110, 'Taller acompañamiento presencial'),
(359, 3, 41, 41, 1, 26, 2, 110, 'Taller acompañamiento presencial'),
(360, 5, 41, 41, 1, 26, 2, 110, 'Taller acompañamiento presencial'),
(361, 1, 41, 41, 2, 26, 2, 110, 'Taller acompañamiento presencial'),
(362, 2, 41, 41, 2, 26, 2, 110, 'Taller acompañamiento presencial'),
(363, 3, 41, 41, 2, 26, 2, 110, 'Taller acompañamiento presencial'),
(364, 5, 41, 41, 2, 26, 2, 110, 'Taller acompañamiento presencial'),
(365, 3, 41, 102, 3, 43, 2, 110, 'Cultura Fisica'),
(366, 4, 41, 41, 3, 26, 2, 110, 'Taller acompañamiento presencial'),
(367, 1, 41, 103, 4, 21, 2, 110, 'Ingles I'),
(368, 3, 41, 100, 4, 21, 2, 110, 'Salud Ocupacional'),
(369, 4, 41, 41, 4, 26, 2, 110, 'Taller acompañamiento presencial'),
(370, 4, 41, 103, 5, 21, 2, 110, 'Ingles I'),
(371, 4, 41, 97, 6, 21, 2, 110, 'Etica'),
(373, 1, 43, 95, 8, 23, 2, 116, 'interactuar en el contexto productivo y social'),
(374, 4, 43, 97, 7, 18, 2, 116, 'Ejercer derechos fundamentales del trabajo'),
(375, 4, 43, 47, 8, 42, 2, 116, 'Aplicación de conocimientos de las ciencias naturales'),
(376, 2, 43, 52, 7, 43, 2, 116, 'Taller Acompañamiento Directo'),
(377, 3, 43, 52, 7, 43, 2, 116, 'Taller Acompañamiento Directo'),
(378, 5, 43, 52, 7, 43, 2, 116, 'Taller Acompañamiento Directo'),
(379, 2, 43, 52, 8, 43, 2, 116, 'Taller Acompañamiento Directo'),
(380, 3, 43, 52, 8, 43, 2, 116, 'Taller Acompañamiento Directo'),
(381, 5, 43, 52, 8, 43, 2, 116, 'Taller Acompañamiento Directo'),
(382, 1, 44, 87, 7, 22, 2, 122, 'Desarrollar procesos de comunicación'),
(383, 2, 44, 62, 7, 41, 2, 122, 'Taller Acompañamiento Directo'),
(384, 3, 44, 62, 7, 41, 2, 122, 'Taller Acompañamiento Directo'),
(385, 4, 44, 62, 7, 41, 2, 122, 'Taller Acompañamiento Directo'),
(386, 5, 44, 95, 7, 21, 2, 122, 'interactuar en el contexto productivo y social'),
(387, 1, 44, 90, 8, 22, 2, 122, 'Razonar cuantitativamente '),
(388, 6, 40, 125, 2, 44, 2, 104, ''),
(389, 6, 40, 125, 3, 44, 2, 104, ''),
(390, 2, 44, 62, 8, 41, 2, 122, 'Taller Acompañamiento Directo'),
(391, 3, 44, 62, 8, 41, 2, 122, 'Taller Acompañamiento Directo'),
(392, 4, 44, 62, 8, 41, 2, 122, 'Taller Acompañamiento Directo'),
(393, 5, 44, 47, 8, 42, 2, 122, 'Aplicación de conocimientos de las ciencias naturales'),
(394, 1, 45, 68, 3, 21, 2, 128, 'Desarrollar procesos de comunicación'),
(395, 2, 45, 102, 3, 43, 2, 128, 'Generar hábitos saludables de vida'),
(396, 3, 45, 97, 3, 21, 2, 128, 'Ejercer derechos fundamentales del trabajo'),
(397, 1, 45, 47, 4, 42, 2, 128, 'Aplicación de conocimientos de las ciencias naturales'),
(398, 2, 45, 99, 4, 21, 2, 128, 'Aplicar prácticas de protección ambiental, seguridad y salud en el trabajo'),
(399, 3, 45, 90, 4, 22, 2, 128, 'Razonar cuantitativamente '),
(400, 4, 45, 95, 4, 21, 2, 128, 'interactuar en el contexto productivo y social'),
(401, 5, 45, 103, 4, 21, 2, 128, 'Interactuar en lengua inglesa'),
(402, 1, 45, 61, 5, 46, 2, 128, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(403, 2, 45, 61, 5, 46, 2, 128, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(404, 3, 45, 61, 5, 46, 2, 128, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(405, 4, 45, 61, 5, 46, 2, 128, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(406, 5, 45, 62, 5, 46, 2, 128, 'Actividades de Producción de Centro'),
(407, 5, 45, 62, 6, 46, 2, 128, 'Actividades de Producción de Centro'),
(408, 1, 45, 61, 6, 46, 2, 128, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(409, 2, 45, 61, 6, 46, 2, 128, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(410, 3, 45, 61, 6, 46, 2, 128, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(411, 4, 45, 61, 6, 46, 2, 128, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(412, 1, 46, 61, 3, 46, 2, 134, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(413, 2, 46, 61, 3, 46, 2, 134, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(414, 3, 46, 61, 3, 46, 2, 134, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(415, 4, 46, 61, 3, 46, 2, 134, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(416, 5, 46, 62, 3, 46, 2, 134, 'Actividades de Producción de Centro'),
(417, 5, 46, 62, 4, 46, 2, 134, 'Actividades de Producción de Centro'),
(418, 1, 46, 61, 4, 46, 2, 134, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(419, 2, 46, 61, 4, 46, 2, 134, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(420, 3, 46, 61, 4, 46, 2, 134, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(421, 4, 46, 61, 4, 46, 2, 134, 'Taller acompañamiento Presencial PROYECTO FORMATIVO'),
(422, 1, 46, 47, 5, 42, 2, 134, 'Aplicación de conocimientos de las ciencias naturales'),
(423, 2, 46, 99, 5, 21, 2, 134, 'Aplicar prácticas de protección ambiental, seguridad y salud en el trabajo'),
(424, 3, 46, 104, 5, 21, 2, 134, 'Interactuar en lengua inglesa de forma oral y escrita'),
(425, 4, 46, 97, 5, 22, 2, 134, 'Ejercer derechos fundamentales del trabajo'),
(426, 5, 46, 102, 5, 43, 2, 134, 'Generar hábitos saludables de vida'),
(427, 1, 46, 87, 6, 21, 2, 134, 'Desarrollar procesos de comunicación'),
(428, 2, 46, 95, 6, 21, 2, 134, 'interactuar en el contexto productivo y social'),
(429, 3, 46, 90, 6, 21, 2, 134, 'Razonar cuantitativamente '),
(430, 1, 47, 54, 7, 39, 2, 140, 'Taller Acompañamiento Directo'),
(431, 2, 47, 54, 7, 39, 2, 140, 'Taller Acompañamiento Directo'),
(432, 3, 47, 93, 7, 23, 2, 140, 'Gestionar procesos propios de la cultura emprendedora'),
(433, 4, 47, 47, 7, 42, 2, 140, 'Ap de conocimientos de las ciencias naturales'),
(434, 5, 47, 54, 7, 39, 2, 140, 'Taller acompañamiento directo'),
(435, 1, 47, 54, 8, 39, 2, 140, 'Taller Acompañamiento Directo'),
(436, 2, 47, 54, 8, 39, 2, 140, 'Taller Acompañamiento Directo'),
(438, 4, 47, 95, 8, 18, 2, 140, 'Interactuar en el contexto productivo y social'),
(439, 5, 47, 54, 8, 39, 2, 140, 'Taller Acompañamiento Directo'),
(440, 2, 48, 90, 2, 21, 2, 146, 'Razonar cuantitativamente '),
(441, 4, 48, 105, 2, 21, 2, 146, 'Interactuar en lengua inglesa'),
(442, 5, 48, 117, 2, 21, 2, 146, ' Desarrollar procesos comunicativos'),
(443, 1, 48, 73, 3, 32, 2, 146, 'Taller acompañamiento presencial'),
(444, 2, 48, 67, 3, 32, 2, 146, 'Taller acompañamiento presencial'),
(445, 3, 48, 73, 3, 32, 2, 146, 'Taller acompañamiento presencial'),
(446, 4, 48, 73, 3, 32, 2, 146, 'Taller acompañamiento presencial'),
(447, 5, 48, 73, 3, 32, 2, 146, 'Taller acompañamiento presencial'),
(448, 1, 48, 73, 4, 32, 2, 146, 'Taller acompañamiento presencial'),
(449, 2, 48, 67, 4, 32, 2, 146, 'Taller acompañamiento presencial'),
(450, 3, 48, 73, 4, 32, 2, 146, 'Taller acompañamiento presencial'),
(451, 4, 48, 73, 4, 32, 2, 146, 'Taller acompañamiento presencial'),
(452, 5, 48, 73, 4, 32, 2, 146, 'Taller acompañamiento presencial'),
(453, 2, 48, 95, 5, 22, 2, 146, 'Interactuar en el contexto productivo y social'),
(454, 3, 48, 91, 5, 22, 2, 146, 'Gestionar procesos propios de la cultura emprendedora'),
(455, 4, 48, 99, 5, 23, 2, 146, 'Aplicar prácticas de protección ambiental'),
(456, 3, 48, 97, 6, 22, 2, 146, 'Ejercer derechos fundamentales del trabajo'),
(457, 1, 48, 102, 5, 43, 2, 146, 'Generar hábitos saludables de vida'),
(458, 2, 49, 99, 3, 22, 2, 152, 'Aplicar prácticas de protección ambiental'),
(459, 3, 49, 86, 3, 23, 2, 152, 'Desarrollar procesos de comunicación eficaces'),
(461, 1, 49, 104, 4, 23, 2, 152, 'Interactuar en lengua inglesa de forma oral y escrita'),
(462, 2, 49, 90, 4, 22, 2, 152, 'Aplicación de conocimientos de las ciencias naturales'),
(463, 3, 49, 95, 4, 23, 2, 152, 'interactuar en el contexto productivo y social'),
(465, 5, 49, 102, 4, 43, 2, 152, 'Generar hábitos saludables de vida'),
(466, 1, 49, 59, 5, 31, 2, 152, 'Taller acompañamiento presencial'),
(467, 2, 49, 64, 5, 31, 2, 152, 'Taller acompañamiento presencial'),
(468, 3, 49, 64, 5, 31, 2, 152, 'Taller acompañamiento presencial'),
(469, 5, 49, 64, 5, 31, 2, 152, 'Taller acompañamiento presencial'),
(470, 1, 49, 59, 6, 31, 2, 152, 'Taller acompañamiento presencial'),
(471, 2, 49, 64, 6, 31, 2, 152, 'Taller acompañamiento presencial'),
(472, 3, 49, 64, 6, 31, 2, 152, 'Taller acompañamiento presencial'),
(473, 5, 49, 64, 6, 31, 2, 152, 'Taller acompañamiento presencial'),
(474, 1, 51, 95, 7, 24, 2, 164, 'interactuar en el contexto productivo y social '),
(475, 2, 51, 59, 7, 31, 2, 164, 'Taller acompañamiento presencial'),
(476, 3, 51, 59, 7, 31, 2, 164, 'Taller acompañamiento presencial'),
(477, 4, 51, 102, 7, 43, 2, 164, 'Generar hábitos saludables de vida'),
(478, 5, 51, 59, 7, 31, 2, 164, 'Taller acompañamiento presencial'),
(479, 1, 51, 105, 8, 24, 2, 164, 'Interactuar en lengua inglesa de forma oral y escrita'),
(480, 2, 51, 59, 8, 31, 2, 164, 'Taller acompañamiento presencial'),
(481, 3, 51, 59, 8, 31, 2, 164, 'Taller acompañamiento presencial'),
(482, 4, 51, 117, 8, 24, 2, 164, 'Desarrollar procesos de comunicación'),
(483, 5, 51, 59, 8, 31, 2, 164, 'Taller acompañamiento presencial'),
(484, 1, 52, 46, 1, 30, 2, 170, 'Taller Acompañamiento Directo'),
(485, 2, 52, 46, 1, 30, 2, 170, 'Taller Acompañamiento Directo'),
(486, 3, 52, 46, 1, 30, 2, 170, 'Taller Acompañamiento Directo'),
(487, 4, 52, 46, 1, 30, 2, 170, 'Taller Acompañamiento Directo'),
(488, 5, 52, 46, 1, 30, 2, 170, 'Taller Acompañamiento Directo'),
(489, 2, 52, 46, 2, 30, 2, 170, 'Taller Acompañamiento Directo'),
(490, 1, 52, 46, 2, 30, 2, 170, 'Taller Acompañamiento Directo'),
(491, 3, 52, 46, 2, 30, 2, 170, 'Taller Acompañamiento Directo'),
(492, 4, 52, 46, 2, 30, 2, 170, 'Taller Acompañamiento Directo'),
(493, 5, 52, 46, 2, 30, 2, 170, 'Taller Acompañamiento Directo'),
(494, 1, 52, 103, 3, 19, 2, 170, 'Interactuar en lengua inglesa'),
(496, 3, 52, 95, 3, 18, 2, 170, 'Interactuar en el contexto productivo y social'),
(497, 1, 52, 49, 4, 40, 2, 170, 'Aplicación de conocimientos de las ciencias naturales'),
(499, 2, 53, 105, 3, 23, 2, 176, 'Interactuar en lengua inglesa'),
(500, 3, 53, 99, 3, 22, 2, 176, 'Aplicar prácticas de protección ambiental'),
(501, 4, 53, 117, 3, 24, 2, 176, 'Desarrollar procesos de comunicación eficaces'),
(502, 5, 53, 91, 3, 21, 2, 176, 'Emprendimiento'),
(503, 2, 53, 105, 4, 23, 2, 176, 'Interactuar en lengua inglesa'),
(504, 3, 53, 97, 4, 24, 2, 176, 'Ejercer derechos fundamentales del trabajo'),
(505, 4, 53, 117, 4, 24, 2, 176, 'Desarrollar procesos de comunicación eficaces'),
(506, 1, 53, 44, 5, 27, 2, 176, 'Taller acompañamiento presencial'),
(507, 2, 53, 44, 5, 27, 2, 176, 'Taller acompañamiento presencial'),
(508, 3, 53, 65, 5, 28, 2, 176, 'Elaborar productos editoriales multimedia'),
(509, 4, 53, 44, 5, 27, 2, 176, 'Taller acompañamiento presencial'),
(510, 5, 53, 44, 5, 27, 2, 176, 'Taller acompañamiento presencial'),
(511, 1, 53, 44, 6, 27, 2, 176, 'Taller acompañamiento presencial'),
(512, 2, 53, 44, 6, 27, 2, 176, 'Taller acompañamiento presencial'),
(513, 3, 53, 65, 6, 28, 2, 176, 'Taller acompañamiento presencial'),
(514, 4, 53, 44, 6, 27, 2, 176, 'Taller acompañamiento presencial'),
(515, 5, 53, 44, 6, 27, 2, 176, 'Taller acompañamiento presencial'),
(516, 1, 54, 117, 1, 22, 2, 182, 'Desarrollar procesos de comunicación eficaces'),
(518, 3, 54, 103, 2, 22, 2, 182, 'Interactuar en lengua Inglesa'),
(519, 1, 54, 117, 2, 22, 2, 182, 'Desarrollar procesos de comunicación eficaces'),
(520, 2, 54, 99, 2, 22, 2, 182, 'Aplicar prácticas de protección ambiental'),
(521, 5, 54, 91, 2, 22, 2, 182, 'Gestionar procesos propios de la cultura emprendedora'),
(522, 1, 54, 65, 3, 28, 2, 182, 'Elaborar productos Editoriales multimedia'),
(523, 2, 54, 43, 3, 28, 2, 182, 'Taller Acompañamiento Directo'),
(524, 3, 54, 43, 3, 28, 2, 182, 'Taller Acompañamiento Directo'),
(525, 4, 54, 43, 3, 28, 2, 182, 'Taller Acompañamiento Directo'),
(526, 5, 54, 43, 3, 28, 2, 182, 'Taller Acompañamiento Directo'),
(527, 1, 54, 65, 4, 28, 2, 182, 'Elaborar productos editoriales multimedia'),
(528, 2, 54, 43, 4, 28, 2, 182, 'Taller Acompañamiento Directo'),
(529, 3, 54, 43, 4, 28, 2, 182, 'Taller Acompañamiento Directo'),
(530, 4, 54, 43, 4, 28, 2, 182, 'Taller Acompañamiento Directo'),
(531, 5, 54, 43, 4, 28, 2, 182, 'Taller Acompañamiento Directo'),
(532, 3, 54, 97, 5, 24, 2, 182, 'Ejercer derechos fundamentales del trabajo'),
(533, 5, 54, 103, 5, 22, 2, 182, 'Interactuar en lengua inglesa'),
(534, 6, 55, 46, 2, 27, 2, 188, 'Taller Acompañamiento Directo'),
(535, 6, 55, 46, 3, 27, 2, 188, 'Taller Acompañamiento Directo'),
(536, 1, 55, 40, 7, 27, 2, 188, 'Taller Acompañamiento Directo'),
(537, 2, 55, 63, 7, 28, 2, 188, 'Elaborar productos editoriales multimedia'),
(538, 3, 55, 40, 7, 27, 2, 188, 'Taller acompañamiento presencial'),
(539, 4, 55, 117, 7, 22, 2, 188, 'Desarrollar Procesos Comunicativos'),
(540, 5, 55, 40, 7, 27, 2, 188, 'Taller Acompañamiento Directo'),
(541, 1, 55, 40, 8, 27, 2, 188, 'Taller Acompañamiento Directo'),
(542, 2, 55, 63, 8, 28, 2, 188, 'Elaborar productos editoriales multimedia'),
(543, 3, 55, 40, 8, 27, 2, 188, 'Taller acompañamiento presencial'),
(544, 4, 55, 93, 8, 22, 2, 188, 'Gestionar procesos propios de la cultura emprendedora'),
(545, 5, 55, 40, 8, 27, 2, 188, 'Taller Acompañamiento Directo'),
(546, 1, 56, 42, 1, 27, 2, 194, 'Taller acompañamiento presencial'),
(547, 2, 56, 66, 1, 27, 2, 194, 'Elaborar productos editoriales multimedia'),
(548, 3, 56, 42, 1, 27, 2, 194, 'Taller acompañamiento presencial'),
(549, 4, 56, 42, 1, 27, 2, 194, 'Taller acompañamiento presencial'),
(550, 5, 56, 42, 1, 27, 2, 194, 'Taller acompañamiento presencial'),
(552, 2, 56, 66, 2, 27, 2, 194, 'Elaborar productos editoriales multimedia'),
(553, 3, 56, 42, 2, 27, 2, 194, 'Taller acompañamiento presencial'),
(554, 4, 56, 42, 2, 27, 2, 194, 'Taller acompañamiento presencial'),
(555, 5, 56, 42, 2, 27, 2, 194, 'Taller acompañamiento presencial'),
(558, 2, 56, 91, 3, 18, 2, 194, 'Gestionar procesos propios de la cultura emprendedora'),
(559, 3, 56, 100, 3, 24, 2, 194, 'Aplicar prácticas de protección ambiental'),
(560, 4, 56, 102, 3, 43, 2, 194, 'Generar hábitos saludables de vida'),
(561, 5, 56, 103, 3, 24, 2, 194, 'Interactuar en lengua inglesa de forma oral y escrita'),
(562, 3, 56, 103, 4, 18, 2, 194, 'Interactuar en lengua inglesa de forma oral y escrita'),
(563, 5, 56, 97, 4, 24, 2, 194, 'Ejercer derechos fundamentales del trabajo'),
(565, 1, 57, 91, 2, 23, 2, 200, 'Gestionar procesos propios de la cultura emprendedora'),
(567, 3, 57, 104, 2, 24, 2, 200, 'Interactuar en lengua inglesa'),
(568, 4, 57, 102, 2, 43, 2, 200, 'Generar hábitos saludables de vida'),
(569, 1, 57, 42, 3, 27, 2, 200, 'Taller acompañamiento presencial'),
(570, 2, 57, 65, 3, 27, 2, 200, 'Elaborar productos Editoriales multimedia'),
(571, 3, 57, 42, 3, 27, 2, 200, 'Taller acompañamiento presencial'),
(572, 4, 57, 42, 3, 27, 2, 200, 'Taller Acompañamiento Directo'),
(573, 5, 57, 42, 3, 27, 2, 200, 'Taller acompañamiento presencial'),
(574, 1, 57, 42, 4, 27, 2, 200, 'Taller acompañamiento presencial'),
(575, 2, 57, 65, 4, 27, 2, 200, 'Elaborar productos editoriales multimedia'),
(576, 3, 57, 42, 4, 27, 2, 200, 'Taller acompañamiento presencial'),
(577, 4, 57, 42, 4, 27, 2, 200, 'Taller acompañamiento presencial'),
(578, 5, 57, 42, 4, 27, 2, 200, 'Taller acompañamiento presencial'),
(579, 3, 57, 100, 5, 18, 2, 200, 'Aplicar prácticas de protección ambiental'),
(580, 5, 57, 97, 5, 24, 2, 200, 'Ejercer derechos fundamentales del trabajo'),
(581, 6, 58, 70, 2, 35, 2, 206, 'Taller acompañamiento presencial'),
(582, 6, 58, 70, 3, 35, 2, 206, 'Taller acompañamiento presencial'),
(583, 1, 58, 70, 7, 35, 2, 206, 'Taller Presencia'),
(584, 2, 58, 97, 7, 22, 2, 206, 'Ejercer derechos fundamentales del trabajo'),
(585, 3, 58, 70, 7, 35, 2, 206, 'Taller acompañamiento presencial'),
(586, 4, 58, 70, 7, 35, 2, 206, 'Taller acompañamiento presencial'),
(587, 5, 58, 70, 7, 35, 2, 206, 'Taller acompañamiento presencial'),
(588, 1, 58, 70, 8, 35, 2, 206, 'Taller Presencia'),
(589, 2, 58, 87, 8, 23, 2, 206, 'Desarrollar procesos de comunicación eficaces'),
(590, 3, 58, 70, 8, 35, 2, 206, 'Taller acompañamiento presencial'),
(591, 4, 58, 70, 8, 35, 2, 206, 'Taller acompañamiento presencial'),
(592, 5, 58, 70, 8, 35, 2, 206, 'Taller acompañamiento presencial'),
(594, 1, 56, 42, 2, 27, 2, 194, 'Taller acompañamiento presencial'),
(595, 1, 59, 97, 2, 24, 2, 212, 'Ejercer derechos fundamentales del trabajo'),
(596, 2, 59, 102, 2, 43, 2, 212, 'Generar hábitos saludables de vida'),
(598, 5, 59, 105, 2, 23, 2, 212, 'Interactuar en lengua inglesa de forma oral y escrita'),
(599, 1, 59, 71, 3, 35, 2, 212, 'Taller Acompañamiento Directo'),
(600, 2, 59, 71, 3, 35, 2, 212, 'Taller Acompañamiento Directo'),
(601, 3, 59, 71, 3, 35, 2, 212, 'Taller Acompañamiento Directo'),
(602, 4, 59, 71, 3, 35, 2, 212, 'Taller Acompañamiento Directo'),
(603, 5, 59, 71, 3, 35, 2, 212, 'Taller Acompañamiento Directo'),
(604, 1, 59, 71, 4, 35, 2, 212, 'Taller Acompañamiento Directo'),
(605, 2, 59, 71, 4, 35, 2, 212, 'Taller Acompañamiento Directo'),
(606, 3, 59, 71, 4, 35, 2, 212, 'Taller Acompañamiento Directo'),
(607, 4, 59, 71, 4, 35, 2, 212, 'Taller Acompañamiento Directo'),
(608, 5, 59, 71, 4, 35, 2, 212, 'Taller Acompañamiento Directo'),
(609, 1, 59, 91, 5, 22, 2, 212, 'Gestionar procesos propios de la cultura emprendedora'),
(610, 2, 59, 105, 5, 18, 2, 212, 'Interactuar en lengua inglesa de forma oral y escrita'),
(611, 1, 60, 71, 1, 35, 2, 218, 'Taller acompañamiento presencial'),
(612, 2, 60, 71, 1, 35, 2, 218, 'Taller acompañamiento presencial'),
(613, 3, 60, 71, 1, 35, 2, 218, 'Taller acompañamiento presencial'),
(614, 4, 60, 71, 1, 35, 2, 218, 'Taller acompañamiento presencial'),
(615, 5, 60, 71, 1, 35, 2, 218, 'Taller acompañamiento presencial'),
(616, 2, 60, 71, 2, 35, 2, 218, 'Taller acompañamiento presencial'),
(617, 1, 60, 71, 2, 35, 2, 218, 'Taller acompañamiento presencial'),
(618, 3, 60, 71, 2, 35, 2, 218, 'Taller acompañamiento presencial'),
(619, 4, 60, 71, 2, 35, 2, 218, 'Taller acompañamiento presencial'),
(620, 5, 60, 71, 2, 35, 2, 218, 'Taller acompañamiento presencial'),
(621, 1, 60, 97, 3, 22, 2, 218, 'Ejercer derechos fundamentales del trabajo'),
(622, 2, 60, 90, 3, 21, 2, 218, 'Fisica'),
(623, 3, 60, 103, 3, 43, 2, 218, 'Interactuar en lengua inglesa'),
(624, 1, 60, 91, 4, 18, 2, 218, 'Gestionar procesos propios de la cultura emprendedora'),
(625, 2, 60, 117, 4, 18, 2, 218, 'Comunicacion'),
(626, 3, 60, 102, 4, 43, 2, 218, 'Generar hábitos saludables de vida'),
(627, 3, 61, 49, 1, 42, 2, 224, 'Coordinar los procesos de impresión'),
(628, 4, 61, 49, 1, 42, 2, 224, 'Coordinar los procesos de impresión'),
(629, 5, 61, 49, 1, 42, 2, 224, 'Coordinar los procesos de impresión'),
(630, 1, 61, 85, 2, 42, 2, 224, 'Orientar investigación formativa'),
(631, 2, 61, 105, 2, 20, 2, 224, 'Interactuar en lengua inglesa'),
(632, 3, 61, 49, 2, 42, 2, 224, 'Coordinar los procesos de impresión'),
(633, 4, 61, 49, 2, 42, 2, 224, 'Coordinar los procesos de impresión'),
(634, 5, 61, 49, 2, 42, 2, 224, 'Coordinar los procesos de impresión'),
(635, 1, 61, 58, 3, 38, 2, 224, 'Coordinar los procesos de impresión'),
(636, 2, 61, 58, 3, 38, 2, 224, 'Coordinar los procesos de impresión'),
(637, 5, 61, 102, 3, 43, 2, 224, 'Generar hábitos saludables de vida'),
(638, 1, 61, 58, 4, 38, 2, 224, 'Coordinar los procesos de impresión'),
(639, 2, 61, 58, 4, 38, 2, 224, 'Coordinar los procesos de impresión'),
(640, 1, 62, 104, 3, 23, 2, 230, 'Interactuar en lengua inglesa de forma oral y escrita'),
(641, 3, 62, 49, 3, 42, 2, 230, 'Taller acompañamiento presencial'),
(642, 1, 62, 85, 4, 20, 2, 230, 'Orientar investigación formativa'),
(643, 3, 62, 49, 4, 42, 2, 230, 'Taller acompañamiento presencial'),
(644, 4, 62, 104, 4, 20, 2, 230, 'Interactuar en lengua inglesa de forma oral y escrita'),
(645, 1, 62, 48, 5, 28, 2, 230, 'Taller acompañamiento presencial'),
(646, 2, 62, 48, 5, 28, 2, 230, 'Taller acompañamiento presencial'),
(647, 3, 62, 99, 5, 20, 2, 230, 'Ejercer derechos fundamentales del trabajo'),
(648, 4, 62, 48, 5, 28, 2, 230, 'Taller acompañamiento presencial'),
(649, 5, 62, 48, 5, 28, 2, 230, 'Taller acompañamiento presencial'),
(650, 1, 62, 48, 6, 28, 2, 230, 'Taller acompañamiento presencial'),
(651, 2, 62, 48, 6, 28, 2, 230, 'Taller acompañamiento presencial'),
(652, 3, 62, 91, 6, 24, 2, 230, 'Gestionar procesos propios de la cultura emprendedora'),
(653, 4, 62, 48, 6, 28, 2, 230, 'Taller acompañamiento presencial'),
(654, 5, 62, 48, 6, 28, 2, 230, 'Taller acompañamiento presencial'),
(655, 1, 63, 48, 7, 42, 2, 236, 'Taller acompañamiento presencial'),
(656, 2, 63, 48, 7, 42, 2, 236, 'Taller acompañamiento presencial'),
(657, 3, 63, 99, 7, 24, 2, 236, 'Ejercer derechos fundamentales del trabajo'),
(658, 4, 63, 48, 7, 28, 2, 236, 'Taller acompañamiento presencial'),
(659, 5, 63, 85, 7, 24, 2, 236, 'Orientar investigación formativa'),
(660, 1, 63, 48, 8, 42, 2, 236, 'Taller acompañamiento presencial'),
(661, 2, 63, 48, 8, 42, 2, 236, 'Taller acompañamiento presencial'),
(662, 3, 63, 93, 8, 24, 2, 236, 'Gestionar procesos propios de la cultura emprendedora'),
(663, 4, 63, 48, 8, 28, 2, 236, 'Taller acompañamiento presencial'),
(664, 5, 63, 85, 8, 24, 2, 236, 'Orientar investigación formativa'),
(665, 1, 64, 62, 1, 41, 2, 242, 'Coordinar los procesos de impresión'),
(666, 1, 64, 62, 2, 41, 2, 242, 'Coordinar los procesos de impresión'),
(667, 2, 64, 85, 2, 42, 2, 242, 'Orientar investigación formativa'),
(668, 4, 64, 99, 2, 22, 2, 242, 'Ejercer derechos fundamentales del trabajo'),
(669, 5, 64, 93, 2, 24, 2, 242, 'Gestionar procesos propios de la cultura emprendedora'),
(670, 1, 64, 62, 3, 42, 2, 242, 'Desarrollar procesos de comunicación'),
(671, 2, 64, 54, 3, 39, 2, 242, 'Coordinar procesos de postimpresión'),
(673, 4, 64, 49, 3, 42, 2, 242, 'Taller acompañamiento presencial'),
(674, 5, 64, 49, 3, 26, 2, 242, 'Taller acompañamiento presencial'),
(675, 2, 64, 54, 4, 39, 2, 242, 'Coordinar procesos de postimpresión'),
(676, 3, 64, 48, 4, 26, 2, 242, 'Taller acompañamiento virtual'),
(677, 4, 64, 49, 4, 42, 2, 242, 'Taller acompañamiento presencial'),
(678, 5, 64, 49, 4, 26, 2, 242, 'Taller acompañamiento presencial'),
(679, 3, 64, 48, 3, 26, 2, 242, 'Taller acompañamiento virtual'),
(680, 1, 65, 102, 3, 43, 2, 248, 'Cultura Fisica'),
(681, 2, 65, 103, 3, 24, 2, 248, 'Ingles'),
(682, 4, 65, 99, 3, 22, 2, 248, 'Salud Ocupacional I'),
(683, 5, 65, 86, 3, 22, 2, 248, 'Comunicación'),
(684, 1, 65, 95, 4, 22, 2, 248, 'Etica'),
(685, 2, 65, 103, 4, 24, 2, 248, 'Ingles'),
(686, 4, 65, 91, 4, 22, 2, 248, 'Emprendimiento'),
(687, 5, 65, 86, 4, 22, 2, 248, 'Comunicacion'),
(688, 1, 65, 65, 5, 32, 2, 248, 'Taller acompañamiento presencial'),
(689, 2, 65, 59, 5, 32, 2, 248, 'Taller Acompañamiento Directo'),
(690, 3, 65, 59, 5, 32, 2, 248, 'Taller Acompañamiento Directo'),
(691, 4, 65, 65, 5, 32, 2, 248, 'Taller acompañamiento presencial'),
(692, 5, 65, 59, 5, 32, 2, 248, 'Taller Acompañamiento Directo'),
(693, 1, 65, 65, 6, 32, 2, 248, 'Taller Acompañamiento Directo'),
(694, 2, 65, 59, 6, 32, 2, 248, 'Taller Acompañamiento Directo'),
(695, 3, 65, 59, 6, 32, 2, 248, 'Taller Acompañamiento Directo'),
(696, 4, 65, 65, 6, 32, 2, 248, 'Taller acompañamiento presencial'),
(697, 5, 65, 59, 6, 32, 2, 248, 'Taller Acompañamiento Directo'),
(698, 3, 66, 99, 2, 23, 2, 254, 'Salud Ocupacional II'),
(699, 1, 66, 66, 3, 30, 2, 254, 'Taller Acompañamiento Directo'),
(700, 2, 66, 66, 3, 30, 2, 254, 'Taller Acompañamiento Directo'),
(701, 3, 66, 67, 3, 30, 2, 254, 'Taller Acompañamiento Directo'),
(702, 4, 66, 67, 3, 30, 2, 254, 'Taller Acompañamiento Directo'),
(703, 5, 66, 67, 3, 30, 2, 254, 'Taller Acompañamiento Directo'),
(704, 1, 66, 66, 4, 30, 2, 254, 'Taller Acompañamiento Directo'),
(705, 2, 66, 66, 4, 30, 2, 254, 'Taller Acompañamiento Directo'),
(706, 3, 66, 67, 4, 30, 2, 254, 'Taller Acompañamiento Directo'),
(707, 4, 66, 67, 4, 30, 2, 254, 'Taller Acompañamiento Directo'),
(708, 5, 66, 67, 4, 30, 2, 254, 'Taller Acompañamiento Directo'),
(709, 1, 66, 72, 5, 35, 2, 254, 'Fotografía I'),
(710, 1, 66, 72, 6, 35, 2, 254, 'Fotografía I'),
(712, 3, 66, 102, 5, 43, 2, 254, 'Cultura Fisica'),
(713, 4, 66, 91, 5, 24, 2, 254, 'Emprendimiento'),
(714, 5, 66, 95, 5, 21, 2, 254, 'Etica'),
(716, 6, 67, 63, 2, 30, 2, 260, 'Taller acompañamiento presencial'),
(717, 6, 67, 63, 3, 30, 2, 260, 'Taller acompañamiento presencial'),
(718, 1, 67, 63, 7, 30, 2, 260, 'Taller acompañamiento presencial'),
(719, 2, 67, 102, 7, 46, 2, 260, 'Cultura Fisica'),
(720, 3, 67, 87, 7, 22, 2, 260, 'Comunicaciones'),
(721, 4, 67, 63, 7, 30, 2, 260, 'Taller acompañamiento presencial'),
(722, 5, 67, 63, 7, 30, 2, 260, 'Taller acompañamiento presencial'),
(723, 1, 67, 63, 8, 30, 2, 260, 'Taller acompañamiento presencial'),
(724, 2, 67, 97, 8, 22, 2, 260, 'Etica'),
(725, 3, 67, 91, 8, 22, 2, 260, 'Emprendimiento'),
(726, 4, 67, 63, 8, 30, 2, 260, 'Taller acompañamiento presencial'),
(727, 5, 67, 63, 8, 30, 2, 260, 'Taller acompañamiento presencial'),
(728, 6, 68, 59, 2, 31, 2, 266, 'Taller acompañamiento presencial'),
(729, 6, 68, 59, 3, 31, 2, 266, 'Taller acompañamiento presencial'),
(730, 1, 68, 59, 7, 32, 2, 266, 'Taller acompañamiento presencial'),
(731, 1, 68, 59, 8, 32, 2, 266, 'Taller acompañamiento presencial'),
(732, 2, 68, 86, 7, 21, 2, 266, 'Comunicacion'),
(733, 2, 68, 86, 8, 21, 2, 266, 'Comunicacion'),
(734, 3, 68, 65, 7, 32, 2, 266, 'Taller acompañamiento presencial'),
(735, 3, 68, 65, 8, 32, 2, 266, 'Taller acompañamiento presencial'),
(736, 4, 68, 91, 7, 21, 2, 266, 'Emprendimiento'),
(737, 4, 68, 97, 8, 21, 2, 266, 'Derechos fundamentales y del trabajo'),
(738, 5, 68, 65, 7, 32, 2, 266, 'Taller acompañamiento presencial'),
(739, 5, 68, 65, 8, 32, 2, 266, 'Taller acompañamiento presencial'),
(740, 1, 69, 77, 7, 34, 2, 272, 'Taller acompañamiento presencial'),
(741, 2, 69, 77, 7, 34, 2, 272, 'Taller acompañamiento presencial'),
(742, 3, 69, 76, 7, 34, 2, 272, 'Taller acompañamiento presencial'),
(743, 1, 69, 77, 8, 34, 2, 272, 'Taller acompañamiento presencial'),
(744, 2, 69, 77, 8, 34, 2, 272, 'Taller acompañamiento presencial'),
(745, 3, 69, 76, 8, 34, 2, 272, 'Taller acompañamiento presencial'),
(746, 4, 69, 77, 7, 34, 2, 272, 'Taller acompañamiento presencial'),
(747, 4, 69, 77, 8, 34, 2, 272, 'Taller acompañamiento presencial'),
(748, 5, 69, 86, 8, 22, 2, 272, 'Desarrollar procesos de comunicación'),
(749, 5, 69, 86, 7, 22, 2, 272, 'Desarrollar procesos de comunicación'),
(750, 1, 70, 78, 1, 33, 2, 278, 'Taller acompañamiento presencial'),
(751, 3, 70, 78, 1, 33, 2, 278, 'Taller acompañamiento presencial'),
(752, 4, 70, 78, 1, 33, 2, 278, 'Taller acompañamiento presencial'),
(753, 5, 70, 76, 1, 33, 2, 278, 'Taller acompañamiento presencial'),
(754, 1, 70, 78, 2, 33, 2, 278, 'Taller acompañamiento presencial'),
(755, 3, 70, 78, 2, 33, 2, 278, 'Taller acompañamiento presencial'),
(756, 4, 70, 78, 2, 33, 2, 278, 'Taller acompañamiento presencial'),
(757, 5, 70, 76, 2, 33, 2, 278, 'Taller acompañamiento presencial'),
(758, 2, 70, 76, 3, 33, 2, 278, 'Taller acompañamiento presencial'),
(759, 2, 70, 76, 4, 33, 2, 278, 'Taller acompañamiento presencial'),
(760, 2, 70, 86, 5, 19, 2, 278, 'Desarrollar procesos de comunicación eficaces'),
(761, 2, 70, 86, 6, 19, 2, 278, 'Desarrollar procesos de comunicación eficaces'),
(762, 1, 71, 86, 7, 18, 2, 284, 'Desarrollar procesos de comunicación'),
(763, 2, 71, 79, 7, 33, 2, 284, 'Taller acompañamiento presencial'),
(764, 3, 71, 79, 7, 33, 2, 284, 'Taller acompañamiento presencial'),
(765, 4, 71, 76, 7, 33, 2, 284, 'Taller acompañamiento presencial'),
(766, 5, 71, 79, 7, 33, 2, 284, 'Taller acompañamiento presencial'),
(767, 1, 71, 86, 8, 18, 2, 284, 'Desarrollar procesos de comunicación'),
(768, 2, 71, 79, 8, 33, 2, 284, 'Taller acompañamiento presencial'),
(769, 3, 71, 79, 8, 33, 2, 284, 'Taller acompañamiento presencial'),
(770, 4, 71, 76, 8, 33, 2, 284, 'Taller acompañamiento presencial'),
(771, 5, 71, 79, 8, 33, 2, 284, 'Taller acompañamiento presencial'),
(772, 2, 72, 104, 3, 42, 2, 290, 'Interactuar en lengua inglesa'),
(773, 3, 72, 78, 3, 34, 2, 290, 'Taller acompañamiento presencial'),
(774, 4, 72, 78, 3, 34, 2, 290, 'Taller acompañamiento presencial'),
(775, 5, 72, 76, 3, 34, 2, 290, 'Taller acompañamiento presencial'),
(776, 1, 72, 82, 4, 19, 2, 290, 'Razonar cuantitativamente '),
(777, 2, 72, 104, 4, 42, 2, 290, 'Interactuar en lengua inglesa'),
(778, 3, 72, 78, 4, 34, 2, 290, 'Taller acompañamiento presencial'),
(779, 4, 72, 78, 4, 34, 2, 290, 'Taller acompañamiento presencial'),
(780, 5, 72, 76, 4, 34, 2, 290, 'Taller acompañamiento presencial'),
(781, 1, 72, 77, 5, 34, 2, 290, 'Taller acompañamiento presencial'),
(782, 2, 72, 77, 5, 34, 2, 290, 'Taller acompañamiento presencial'),
(783, 3, 72, 86, 5, 42, 2, 290, 'Desarrollar procesos de comunicación BRIEF'),
(784, 1, 72, 77, 6, 34, 2, 290, 'Taller acompañamiento presencial'),
(785, 2, 72, 77, 6, 34, 2, 290, 'Taller acompañamiento presencial'),
(786, 3, 72, 86, 6, 42, 2, 290, 'Desarrollar procesos de comunicación BRIEF'),
(787, 1, 73, 105, 3, 18, 2, 296, 'Interactuar en lengua inglesa'),
(788, 4, 73, 86, 3, 18, 2, 296, 'Desarrollar procesos de comunicación eficaces y efectivos'),
(789, 2, 73, 102, 4, 43, 2, 296, 'Generar hábitos saludables de vida'),
(790, 4, 73, 86, 4, 18, 2, 296, 'Desarrollar procesos de comunicación eficaces y efectivos'),
(791, 1, 73, 79, 5, 33, 2, 296, 'Taller acompañamiento presencial'),
(792, 2, 73, 79, 5, 33, 2, 296, 'Taller acompañamiento presencial'),
(793, 3, 73, 79, 5, 33, 2, 296, 'Taller acompañamiento presencial'),
(794, 4, 73, 76, 5, 33, 2, 296, 'Taller acompañamiento presencial'),
(795, 5, 73, 79, 5, 33, 2, 296, 'Taller acompañamiento presencial'),
(796, 1, 73, 79, 6, 33, 2, 296, 'Taller acompañamiento presencial'),
(797, 2, 73, 79, 6, 33, 2, 296, 'Taller acompañamiento presencial'),
(798, 3, 73, 79, 6, 33, 2, 296, 'Taller acompañamiento presencial'),
(799, 4, 73, 76, 6, 33, 2, 296, 'Taller acompañamiento presencial'),
(800, 5, 73, 79, 6, 33, 2, 296, 'Taller acompañamiento presencial'),
(801, 1, 74, 80, 7, 28, 2, 302, 'Taller Acompañamiento Directo'),
(802, 1, 74, 80, 8, 28, 2, 302, 'Taller Acompañamiento Directo'),
(803, 2, 74, 126, 7, 47, 2, 302, 'Utilizar herramientas informáticas'),
(804, 2, 74, 126, 8, 47, 2, 302, 'Utilizar herramientas informáticas'),
(805, 3, 74, 80, 7, 28, 2, 302, 'Taller Acompañamiento Directo'),
(806, 3, 74, 80, 8, 28, 2, 302, 'Taller Acompañamiento Directo'),
(807, 4, 74, 86, 7, 24, 2, 302, 'Desarrollar procesos de comunicación eficaces'),
(808, 4, 74, 94, 8, 23, 2, 302, 'interactuar en el contexto productivo y social '),
(809, 5, 74, 80, 7, 28, 2, 302, 'Taller Acompañamiento Directo'),
(810, 5, 74, 80, 8, 28, 2, 302, 'Taller Acompañamiento Directo'),
(811, 1, 75, 81, 1, 29, 2, 308, 'Taller Acompañamiento Directo'),
(812, 1, 75, 81, 2, 29, 2, 308, 'Taller Acompañamiento Directo'),
(813, 2, 75, 81, 1, 29, 2, 308, 'Taller Acompañamiento Directo'),
(814, 3, 75, 81, 1, 29, 2, 308, 'Taller Acompañamiento Directo'),
(815, 5, 75, 81, 1, 29, 2, 308, 'Taller Acompañamiento Directo'),
(816, 4, 75, 81, 1, 29, 2, 308, 'Taller Acompañamiento Directo'),
(817, 2, 75, 81, 2, 29, 2, 308, 'Taller Acompañamiento Directo'),
(818, 3, 75, 81, 2, 29, 2, 308, 'Taller Acompañamiento Directo'),
(819, 4, 75, 81, 2, 29, 2, 308, 'Taller Acompañamiento Directo'),
(820, 5, 75, 81, 2, 29, 2, 308, 'Taller Acompañamiento Directo'),
(821, 1, 75, 91, 3, 20, 2, 308, 'Emprendimiento'),
(822, 2, 75, 87, 3, 20, 2, 308, 'Comunicacion'),
(823, 3, 75, 105, 3, 20, 2, 308, 'Ingles '),
(824, 1, 75, 102, 4, 43, 2, 308, 'Cultura Fisica'),
(825, 2, 75, 95, 4, 20, 2, 308, 'Etica'),
(826, 3, 75, 105, 4, 20, 2, 308, 'Ingles'),
(827, 1, 76, 103, 2, 21, 2, 314, 'Ingles'),
(828, 2, 76, 103, 2, 18, 2, 314, 'Ingles'),
(829, 3, 76, 102, 2, 46, 2, 314, 'Cultura Fisica'),
(830, 1, 76, 81, 3, 29, 2, 314, 'Taller Acompañamiento Directo'),
(831, 2, 76, 81, 3, 29, 2, 314, 'Taller Acompañamiento Directo'),
(832, 3, 76, 81, 3, 29, 2, 314, 'Taller Acompañamiento Directo'),
(833, 4, 76, 81, 3, 29, 2, 314, 'Taller Acompañamiento Directo'),
(834, 5, 76, 81, 3, 29, 2, 314, 'Taller Acompañamiento Directo'),
(835, 1, 76, 81, 4, 29, 2, 314, 'Taller Acompañamiento Directo'),
(836, 2, 76, 81, 4, 29, 2, 314, 'Taller Acompañamiento Directo'),
(837, 3, 76, 81, 4, 29, 2, 314, 'Taller Acompañamiento Directo'),
(838, 4, 76, 81, 4, 29, 2, 314, 'Taller Acompañamiento Directo'),
(839, 5, 76, 81, 4, 29, 2, 314, 'Taller Acompañamiento Directo'),
(840, 2, 76, 87, 5, 20, 2, 314, 'Comunicacion'),
(841, 5, 76, 91, 5, 23, 2, 314, 'Emprendimiento'),
(842, 1, 77, 80, 3, 26, 2, 320, 'Taller acompañamiento presencial'),
(843, 2, 77, 95, 3, 19, 2, 320, 'Interactuar en el contexto productivo y social'),
(844, 4, 77, 103, 3, 19, 2, 320, 'Interactuar en lengua inglesa'),
(845, 1, 77, 80, 4, 26, 2, 320, 'Taller acompañamiento presencial'),
(846, 2, 77, 91, 4, 19, 2, 320, 'Gestionar procesos propios de la cultura emprendedora '),
(847, 3, 77, 86, 4, 19, 2, 320, 'Desarrollar procesos de comunicación'),
(848, 4, 77, 102, 4, 43, 2, 320, 'Generar hábitos saludables de vida I'),
(849, 1, 77, 97, 5, 24, 2, 320, 'Ejercer derechos fundamentales del trabajo'),
(850, 2, 77, 80, 5, 26, 2, 320, 'Taller acompañamiento presencial'),
(851, 3, 77, 80, 5, 26, 2, 320, 'Taller acompañamiento presencial'),
(852, 5, 77, 80, 5, 26, 2, 320, 'Taller acompañamiento presencial'),
(853, 4, 77, 80, 5, 26, 2, 320, 'Taller acompañamiento presencial'),
(854, 2, 77, 80, 6, 26, 2, 320, 'Taller acompañamiento presencial'),
(855, 3, 77, 80, 6, 26, 2, 320, 'Taller acompañamiento presencial'),
(856, 4, 77, 80, 6, 26, 2, 320, 'Taller acompañamiento presencial'),
(857, 5, 77, 80, 6, 26, 2, 320, 'Taller acompañamiento presencial'),
(858, 1, 78, 126, 7, 47, 2, 326, 'Utilizar herramientas informáticas'),
(859, 1, 78, 126, 8, 47, 2, 326, 'Utilizar herramientas informáticas'),
(860, 2, 78, 80, 7, 29, 2, 326, 'Taller Acompañamiento Directo'),
(861, 2, 78, 80, 8, 29, 2, 326, 'Taller Acompañamiento Directo'),
(862, 3, 78, 82, 7, 29, 2, 326, 'Taller Acompañamiento Directo'),
(863, 3, 78, 82, 8, 29, 2, 326, 'Taller Acompañamiento Directo'),
(864, 4, 78, 94, 7, 23, 2, 326, 'interactuar en el contexto productivo y social'),
(865, 4, 78, 86, 8, 20, 2, 326, 'Desarrollar procesos de comunicación eficaces'),
(866, 5, 78, 82, 7, 29, 2, 326, 'Taller Acompañamiento Directo'),
(867, 5, 78, 82, 8, 29, 2, 326, 'Taller Acompañamiento Directo'),
(868, 4, 79, 91, 3, 20, 2, 332, 'Gestionar procesos propios de la cultura emprendedora'),
(869, 5, 79, 104, 3, 42, 2, 332, 'Interactuar en lengua inglesa de forma oral y escrita'),
(870, 4, 79, 127, 4, 19, 2, 332, 'Desarrollar procesos de comunicación'),
(871, 5, 79, 104, 4, 42, 2, 332, 'Interactuar en lengua inglesa de forma oral y escrita '),
(872, 1, 79, 83, 5, 29, 2, 332, 'Taller Acompañamiento Directo'),
(873, 2, 79, 83, 5, 29, 2, 332, 'Taller Acompañamiento Directo'),
(874, 3, 79, 83, 5, 29, 2, 332, 'Taller Acompañamiento Directo'),
(875, 4, 79, 83, 5, 42, 2, 332, 'Taller Acompañamiento Directo'),
(876, 5, 79, 83, 5, 29, 2, 332, 'Taller Acompañamiento Directo'),
(877, 1, 79, 83, 6, 29, 2, 332, 'Taller Acompañamiento Directo'),
(878, 2, 79, 83, 6, 29, 2, 332, 'Taller Acompañamiento Directo'),
(879, 3, 79, 83, 6, 29, 2, 332, 'Taller Acompañamiento Directo'),
(880, 4, 79, 83, 6, 29, 2, 332, 'Taller Acompañamiento Directo'),
(881, 5, 79, 83, 6, 29, 2, 332, 'Taller Acompañamiento Directo'),
(882, 1, 80, 75, 1, 25, 2, 338, 'Taller acompañamiento presencial'),
(883, 2, 80, 75, 1, 25, 2, 338, 'Taller acompañamiento presencial'),
(884, 3, 80, 117, 1, 23, 2, 338, 'Conceptualizar el sentido y el significado de la ilustración'),
(885, 4, 80, 74, 1, 28, 2, 338, 'Taller acompañamiento presencial'),
(886, 5, 80, 74, 1, 28, 2, 338, 'Taller acompañamiento presencial'),
(887, 1, 80, 75, 2, 25, 2, 338, 'Taller acompañamiento presencial'),
(888, 2, 80, 75, 2, 25, 2, 338, 'Taller acompañamiento presencial'),
(889, 4, 80, 74, 2, 28, 2, 338, 'Taller acompañamiento presencial'),
(890, 5, 80, 74, 2, 28, 2, 338, 'Taller acompañamiento presencial'),
(891, 1, 81, 56, 5, 47, 2, 344, ''),
(892, 1, 81, 56, 6, 47, 2, 344, ''),
(893, 2, 81, 58, 5, 47, 2, 344, ''),
(894, 2, 81, 58, 6, 47, 2, 344, ''),
(895, 3, 81, 56, 5, 38, 2, 344, 'Taller acompañamiento presencial'),
(896, 4, 81, 56, 5, 38, 2, 344, 'Taller acompañamiento presencial'),
(897, 5, 81, 56, 5, 38, 2, 344, 'Taller acompañamiento presencial'),
(898, 3, 81, 56, 6, 38, 2, 344, 'Taller acompañamiento presencial'),
(899, 4, 81, 56, 6, 38, 2, 344, 'Taller acompañamiento presencial'),
(900, 5, 81, 56, 6, 38, 2, 344, 'Taller acompañamiento presencial'),
(901, 3, 82, 56, 3, 38, 2, 350, 'Taller acompañamiento presencial'),
(902, 4, 82, 56, 3, 38, 2, 350, 'Taller acompañamiento presencial'),
(903, 5, 82, 56, 3, 38, 2, 350, 'Taller acompañamiento presencial'),
(904, 3, 82, 56, 4, 38, 2, 350, 'Taller acompañamiento presencial'),
(905, 4, 82, 56, 4, 38, 2, 350, 'Taller acompañamiento presencial'),
(906, 5, 82, 56, 4, 38, 2, 350, 'Taller acompañamiento presencial'),
(907, 1, 43, 127, 7, 23, 2, 116, 'Desarrollar procesos de comunicación eficaces y efectivos'),
(908, 3, 47, 127, 8, 23, 2, 140, 'Desarrollar procesos de comunicación'),
(909, 4, 49, 126, 3, 31, 2, 152, 'Utilizar herramientas informáticas'),
(910, 2, 52, 126, 3, 26, 2, 170, 'Utilizar herramientas informáticas'),
(911, 2, 52, 126, 4, 26, 2, 170, 'Utilizar herramientas informáticas'),
(912, 1, 56, 127, 3, 24, 2, 194, 'Desarrollar procesos de comunicación eficaces'),
(913, 1, 56, 127, 4, 24, 2, 194, 'Desarrollar procesos de comunicación eficaces'),
(914, 2, 57, 127, 1, 24, 2, 200, 'Desarrollar procesos de comunicación eficaces'),
(915, 2, 57, 127, 2, 24, 2, 200, 'Desarrollar procesos de comunicación eficaces'),
(916, 4, 57, 127, 1, 24, 2, 200, 'Desarrollar procesos de comunicación eficaces'),
(917, 2, 66, 127, 5, 24, 2, 254, 'Comunicacion'),
(918, 2, 66, 127, 6, 24, 2, 254, 'Comunicacion');

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
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `horas_inst` int(11) DEFAULT NULL,
  `rol` int(11) NOT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`ID`, `Nombre`, `Apellido`, `email`, `contrasena`, `horas_inst`, `rol`, `token`) VALUES
(2, 'Giovany', 'Ortiz', 'gio@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 20, 1, NULL),
(40, 'Jose ', 'Ovalle', 'jose@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'f6e923d8d07e7dd55d3849079b18cf95'),
(41, 'Diana ', 'Cufiño', 'diana@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'e99bffeced251ac80eeef670c445b885'),
(42, 'Ana Maria', 'Sastre', 'Ana@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '1b8f3684896d15a052b000d99d01e522'),
(43, 'Jorge Enrique', 'Villafradez', 'jorge@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'ff88d6ff379711c3cd151052a2881724'),
(44, 'Eliana', 'Garnica', 'eliana@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'e9eb7c0a2b600994654df506908dcd61'),
(45, 'Nelson', 'Prieto', 'nelson@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'cd5468fd0170d5c297a5cabb0b651917'),
(46, 'Diego', 'Murillo', 'diego@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '73e0d115668e233299f0a0441bb4cd0c'),
(47, 'Karin Adriana', 'Rodriguez', 'karin@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '54e2dea29dbcc28a59c56341d98aee34'),
(48, 'Gustavo', 'Siabato', 'gustabo@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '50d197edaaec07ed5a9b8f2cd84e9518'),
(49, 'Marcela', 'Plata', 'marcela@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'ab0486c71fd43438637f53da93f57f25'),
(50, 'Omar', 'Valderrama', 'omar@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '2a949f6a30014d86eaf15d15dfd6a902'),
(51, 'Angelica', 'Herrera', 'angelica@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '0e8d63c58a163bc22996113a349c335d'),
(52, 'Javier', 'Carreño', 'javier@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '1c4bbb95bb53b9565c65b4d43b7dc127'),
(53, 'Nemesio', 'Moreno', 'nemesio@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '6c51a80b512320bb814b799d37182619'),
(54, 'Hector Fabio', 'Sanchez', 'hector@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '66a329a7c94b8c32af60898fc0c717a6'),
(55, 'Claudia', 'Sabogal', 'claudia@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'd1b06a1c4c29cd16c514b0be7d5af01d'),
(56, 'Gustavo', 'Lopez', 'gustavo@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '443bd409c6df2e9d0e9cf7cef912ba5e'),
(57, 'Carlos Daniel', 'Hurtado', 'carlos@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '4cb292816eb2be6b64991adbe1c7a227'),
(58, 'Luz Myriam', 'Torres', 'luz@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'c9f92b109e727552a9474fdf4422a507'),
(59, 'Camilo', 'Moreno', 'camilomoreno@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'b2b9d01f95c3e72e43d9ef20f8ac19f0'),
(60, 'Fabio', 'Ramirez', 'fabioramirez@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'bf654fc048d7199de261945364309ab1'),
(61, 'Ricardo', 'Caicedo', 'ricardo@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '610f568c340c2ed25b33402e22aa11ab'),
(62, 'Henry', 'Bello', 'henry@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'b0c134f1da2a45fb9332902f418a2420'),
(63, 'Juan Francisco ', 'Lopez', 'juanfranciscolopez@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '62861e6203add409afeb6a852fd6f46b'),
(64, 'Nicolas', 'Martinez', 'nicolas@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '1e35d7ac85801a29c5df105d574368b4'),
(65, 'Andres ', 'Fonseca', 'andresfonseca@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '0181827213b3a63bb24c35373420ec8c'),
(66, 'Veronica', 'Suarez', 'veronicasuarez@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '76d1822c38c5a543fe81b55811c87eee'),
(67, 'Jorge Ivan ', 'Cabrera', 'jorgeivancabrera@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '067d2a23937efa2a0d20680c480a3f26'),
(68, 'Nelson Gabriel ', 'Chavez', 'nelsongabriel@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '27d8c45105f6961a9f7e2743aecb9fd8'),
(69, 'Jorge Alberto', 'Garcia', 'jorgealberto@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'bdc678ebf8f4ae483891ac13434b0a3d'),
(70, 'Camilo', 'Rodriguez', 'camilorodriguez@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'c6cf2e0cc6e062486e8b565dfc11b839'),
(71, 'Ricardo', 'Mantilla', 'ricardomantilla@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '5d8f9da563551eb860a375ed65e7a813'),
(72, 'Tomas ', 'Moreno', 'tomasmoreno@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '882161b7bfd2dcad574c8fe7919bd04d'),
(73, 'Octavio', 'Cajamarca', 'octavio@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'b2d6ac595d971694f0a4249e3ccf033f'),
(74, 'Katherine', 'Sanchez', 'katherine@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '7d740aca7425f3aad81464f7b8377d16'),
(75, 'Fabian', 'Silva', 'fabiansilva@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '7bc02b27a1a29643960651dcff45c4b9'),
(76, 'Nicolas ', 'Garcia', 'nicolasgarcia@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '776c8ccfbc4904ba59a8bece8d8f74bd'),
(77, 'Juan Carlos ', 'Marin', 'juancarlosmarin@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '1fe0777c71bea81e50042446b1583853'),
(78, 'Julieth', 'Gamez', 'julieth@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'a065be4f8c3ac620de493d5dcdbef0f1'),
(79, 'Oscar', 'Rodriguez', 'oscar@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '5073a58096a2016725cb97b42d9bcfa5'),
(80, 'Jhon Mauricio', 'Moreno', 'jhonmauricio@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'db34d391d96550514e559cec7ee8d7b2'),
(81, 'Johana', 'Cifuentes', 'johana@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '461b19147d5ca476bd7d5e02955db58e'),
(82, 'Oswaldo', 'Perez', 'oswaldoperez@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '1541516a54010ac833626770fdc0248b'),
(83, 'Javier ', 'Luna', 'javierluna@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'b3bfe2d36c65646e27072ec00e2c98e9'),
(85, 'Dilian', 'Querubin', 'dilian@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '7abb4757b9c6beb95f333d14608c79f8'),
(86, 'Stefanny', 'Callejas', 'stefanny@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '4e4097e83fb076a5816bbd14173d8046'),
(87, 'Diana', 'Herrera ', 'dianaherrera@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '7685c878085222a0c1f15c52776db8df'),
(88, 'Sandra Liliana', 'Zabala', 'Sandra@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '6bdeeabf96c4901c1a4699a3880811ff'),
(89, 'Diana Constanza', 'Herrera Alvarez', 'dianaconstanzaherrera@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '1db0244468b07f3c83ae9446d986f441'),
(90, 'Armando', 'Castro', 'armandocastro@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'e39242311054d57510b56f21d743d998'),
(91, 'Luz Dary', 'Collazos', 'luzdary@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'b3a5fa42f33fae02076a828fd4d33319'),
(92, 'Zulman', 'Roldan', 'zulmanroldan@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'a79847ebea5aa11a3fbde618ba3c79e4'),
(93, 'Luis Fernando ', 'Rojas', 'luisfernando@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'ce63f8c357bbebc2e72c0c0d370c4a25'),
(94, 'Johan', 'Lloreda', 'johanlloreda@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'a4b2bb0d7035bd01c2f89ea26aa8e644'),
(95, 'Jorge', 'Bernal', 'jorgebernal@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '4c935989b195734ddf3f7ea696098f38'),
(96, 'Maria de Jesus', 'Lopez', 'mariadejesus@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '9ef971cb3d417b5c4ccd8596fae353b2'),
(97, 'Maria', 'Calle', 'mariacalle@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '541f2d45cba9198c0edbd010c602bd9d'),
(98, 'Sonia', 'Moreno', 'soniamoreno@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '411e69070774919d515bc7616d305482'),
(99, 'Henry', 'Cordoba', 'henrycordoba@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '48600a14a9606b56e9952c06bc644cf7'),
(100, 'Pedro', 'Riaño', 'pedroriano@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, '6812d442ac220e365dc8a07ececb2cc6'),
(101, 'Diana', 'Ferla', 'dianaferla@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'e7f49ec38f23325ce6e7280497d3a834'),
(102, 'Edwin', 'Marentes', 'edwin@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'f44cf49a68215de424bc3077a64b0c8d'),
(103, 'Camilo', 'Zamudio', 'camilozamudio@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'c3d8f21f2d124d9bf8abadd6242d05f5'),
(104, 'German', 'Argaez', 'german@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '3defc7d36c8f666202da3fcaca1bf87a'),
(105, 'Lady ', 'Salas', 'lady@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'dc621b43fa5e4d2ff60671501ebbde97'),
(106, 'Orlando', 'Numpaque', 'orlando@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'd1a93f3c09b7b12a35c9d9552451316b'),
(107, 'Gloria', 'Loaiza', 'gloria@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '27f0b29b8c79b905e298c14439c48b47'),
(108, 'Yuly', 'Ayure', 'yuly@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '36822355d6f59b546cf3856112f3c637'),
(109, 'Nury', 'Godoy', 'nury@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '9d236bf1a66fac1adf24a8f63ac93f11'),
(110, 'Diana', 'Caballero', 'dianacaballero@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'aca4b5ec92cd4b1f4b664615773bbaea'),
(111, 'Monica', 'Bonilla', 'monicabonilla@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '2ab55b7052cefee9173727fbac91d1ae'),
(112, 'Diana', 'Vargas Garay', 'Dianavargas@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '47253e6fbad6c7e86070e5a11648fa13'),
(113, 'Ivan', 'Torres', 'ivantorres@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'd77efe34518d7cfc86bafb419b0d6a3e'),
(114, 'Daniel', 'Roa', 'danielroa@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '0e485402bee063e37e35cb411e51dbdc'),
(115, 'Mauricio', 'Taylor', 'mauricio@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '30c608392ba8bcf476c8a0b8881d9b0b'),
(116, 'Javier', 'Gomez Paez', 'javiergomez@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '11cc21046570ac54ef56cfc8095cf9f4'),
(117, 'Liliana', 'Roa', 'Lilianaroa@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '5c5e5e7578594d1ca34e3e80989476c9'),
(118, 'Nestor', 'Chacon', 'nestorchacon@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, 'a1e89a55732b5a53b483f9558bb7bf09'),
(119, 'Juan Fernando', 'Mera Lagos', 'juanmera@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '4275687438f8c0566d30b66e17ac8368'),
(120, 'Pablo Yesid ', 'Leon', 'pabloleon@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '9b4c9973246530eb9cfcf275869a0b72'),
(121, 'Mario Fernando', 'Angel Estepa', 'marioangel@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '8bd9903d2a71421739d55f514fa9ac88'),
(122, 'Andres Gabriel', 'Vargas Castro', 'andresvargas@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '9a4e960e8f2853524332409fb6278781'),
(123, 'Teresa ', 'Rodriguez Tovar', 'teresarodriguez@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '195976d600dcedd088e5f768aef21790'),
(124, 'Julian Rodolfo', 'Rodriguez Martin', 'julianrodriguez@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '2d2d9b489a9d6efa6c2ddd67dac66c7a'),
(125, 'Desarollo Cursos ', 'Virtuales', 'desarrollo@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 40, 2, '50895379db5fe7424f34542ecbe515d4'),
(126, 'Martha', 'Gordillo', 'marthagordillo@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'd8953027fe792be85b22ea9f2bb2facb'),
(127, 'Martha', 'Perez', 'marthaperez@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', 43, 2, 'd4e1d5a41572ee49b9f4146fa86bbf5c');

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
(88524475, 'Impresión Digital I', 'Técnico', ''),
(88524476, 'Preprensa I', 'Tecnólogo', ''),
(88524477, 'Flexografia I', 'Tecnólogo', ''),
(88524478, 'Serigrafia I', 'Tecnólogo', ''),
(88524479, 'Serigrafia II a', 'Tecnólogo', ''),
(88524480, 'Serigrafia II b', 'Tecnólogo', ''),
(88524481, 'Postprensa I ', 'Tecnólogo', ''),
(88524482, 'INT CONT DIGITALES II', 'Tecnólogo', ''),
(88524483, 'E. AUDIOVISUALES I', 'Tecnólogo', ''),
(88524484, 'E. AUDIOVISUALES II', 'Tecnólogo', ''),
(88524485, 'E. AUDIOVISUALES I a', 'Tecnólogo', ''),
(88524486, 'DMGV I', 'Tecnólogo', ''),
(88524487, 'DMGV VII', 'Tecnólogo', ''),
(88524488, 'DMGV VII a', 'Tecnólogo', ''),
(88524489, 'DMGV VII b', 'Tecnólogo', ''),
(88524490, 'DMGV VI', 'Tecnólogo', ''),
(88524491, 'DMGV VI a', 'Tecnólogo', ''),
(88524492, ' FOTOGRAFIA VII', 'Tecnólogo', ''),
(88524493, 'FOTOGRAFIA VII a', 'Tecnólogo', ''),
(88524494, 'FOTOGRAFIA VI', 'Tecnólogo', ''),
(88524495, 'SPG I ', 'Tecnólogo', ''),
(88524496, 'SUPERVISIÓN PG VII', 'Tecnólogo', ''),
(88524497, 'SUPERVISION PG VII a', 'Tecnólogo', ''),
(88524498, 'SPG VI ', 'Tecnólogo', ''),
(88524499, 'P. MULTIMEDIA II ', 'Tecnólogo', ''),
(88524500, 'P. MULTIMEDIA II a', 'Tecnólogo', ''),
(88524501, 'P. MULTIMEDIA II b', 'Tecnólogo', ''),
(88524502, 'P. MULTIMEDIA VI ', 'Tecnólogo', ''),
(88524503, 'ANIMACION DIGITAL I', 'Tecnólogo', ''),
(88524504, ' ANIMACION DIGITAL I a', 'Tecnólogo', ''),
(88524505, 'ANIMACION 3D I', 'Tecnólogo', ''),
(88524506, 'ANIMACION DIGITAL II', 'Tecnólogo', ''),
(88524507, 'ANIMACION 3D II', 'Tecnólogo', ''),
(88524508, 'ADSO I ', 'Tecnólogo', ''),
(88524509, 'ADSI VI', 'Tecnólogo', ''),
(88524510, 'ADSI VI a', 'Tecnólogo', ''),
(88524511, 'SISTEMAS II', 'Tecnólogo', ''),
(88524512, 'P. SOFTWARE I ', 'Tecnólogo', ''),
(88524513, 'P. SOFTWARE II', 'Tecnólogo', ''),
(88524514, 'Esp Ilustración Creativa', 'Tecnólogo', ''),
(88524515, 'MEZCLA E IG. TINTAS', 'Tecnólogo', ''),
(88524516, 'MEZCLA E IG. TINTAS  a', 'Tecnólogo', '');

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
(9, 'Cenigraf', 'Calle 75 N 40 - 58', 545456465);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_trimestre`
--

CREATE TABLE `tb_trimestre` (
  `id_T` int(11) NOT NULL,
  `Trim_date_Inc` date DEFAULT NULL,
  `Trim_date_fin` date DEFAULT NULL,
  `Trimestre` varchar(20) DEFAULT NULL,
  `id_fch` int(11) NOT NULL,
  `estatus_trim_H` int(11) NOT NULL DEFAULT 1,
  `instructor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_trimestre`
--

INSERT INTO `tb_trimestre` (`id_T`, `Trim_date_Inc`, `Trim_date_fin`, `Trimestre`, `id_fch`, `estatus_trim_H`,`instructor_id`) VALUES
(103, '2022-06-09', '2022-06-09', 'I Trimestre', 40, 1,40),
(104, '2022-04-18', '2022-07-02', 'II Trimestre', 40, 0,41),
(105, '2022-06-16', '2022-06-07', 'III Trimestre', 40, 1,42),
(106, '2022-06-25', '2022-06-14', 'IV Trimestre', 40, 1,43),
(107, '2022-06-23', '2022-06-29', 'V Trimestre', 40, 1,44),
(108, '2022-06-21', '2022-06-28', 'VI Trimestre', 40, 1,45),
(109, '2022-06-08', '2022-06-07', 'I Trimestre', 41, 1,46),
(110, '2022-04-18', '2022-07-02', 'II Trimestre', 41, 0,47),
(111, '2022-06-08', '2022-06-16', 'III Trimestre', 41, 1,48),
(112, '2022-06-21', '2022-06-22', 'IV Trimestre', 41, 1,49),
(113, '2022-06-23', '2022-06-24', 'V Trimestre', 41, 1,50),
(114, '2022-06-27', '2022-06-29', 'VI Trimestre', 41, 1,51),
(115, '2022-06-06', '2022-06-07', 'I Trimestre', 43, 1,52),
(116, '2022-04-18', '2022-07-02', 'II Trimestre', 43, 0,53),
(117, '2022-06-08', '2022-06-09', 'III Trimestre', 43, 1,54),
(118, '2022-06-10', '2022-06-11', 'IV Trimestre', 43, 1,55),
(119, '2022-06-12', '2022-06-13', 'V Trimestre', 43, 1,56),
(120, '2022-06-14', '2022-06-15', 'VI Trimestre', 43, 1,57),
(121, '2022-06-13', '2022-06-08', 'I Trimestre', 44, 1,58),
(122, '2022-04-18', '2022-07-02', 'II Trimestre', 44, 0,59),
(123, '2022-06-09', '2022-06-10', 'III Trimestre', 44, 1,60),
(124, '2022-06-11', '2022-06-12', 'IV Trimestre', 44, 1,61),
(125, '2022-06-13', '2022-06-14', 'V Trimestre', 44, 1,62),
(126, '2022-06-23', '2022-06-24', 'VI Trimestre', 44, 1,63),
(127, '2022-06-08', '2022-06-09', 'I Trimestre', 45, 1,64),
(128, '2022-04-18', '2022-07-02', 'II Trimestre', 45, 0,65),
(129, '2022-06-10', '2022-06-11', 'III Trimestre', 45, 1,66),
(130, '2022-06-12', '2022-06-13', 'IV Trimestre', 45, 1,67),
(131, '2022-06-14', '2022-06-15', 'V Trimestre', 45, 1,68),
(132, '2022-06-16', '2022-06-17', 'VI Trimestre', 45, 1,69),
(133, '2022-06-06', '2022-06-07', 'I Trimestre', 46, 1,70),
(134, '2022-04-18', '2022-07-02', 'II Trimestre', 46, 0,78),
(135, '2022-06-08', '2022-06-09', 'III Trimestre', 46, 1,79),
(136, '2022-06-10', '2022-06-11', 'IV Trimestre', 46, 1,80),
(137, '2022-06-12', '2022-06-13', 'V Trimestre', 46, 1,81),
(138, '2022-06-14', '2022-06-15', 'VI Trimestre', 46, 1,82),
(139, '2022-06-06', '2022-06-07', 'I Trimestre', 47, 1,83),
(140, '2022-04-18', '2022-07-07', 'II Trimestre', 47, 0,84),
(141, '2022-06-08', '2022-06-09', 'III Trimestre', 47, 1,85),
(142, '2022-06-10', '2022-06-11', 'IV Trimestre', 47, 1,86),
(143, '2022-06-12', '2022-06-13', 'V Trimestre', 47, 1,87),
(144, '2022-06-14', '2022-06-15', 'VI Trimestre', 47, 1,88),
(145, '2022-06-06', '2022-06-07', 'I Trimestre', 48, 1,90),
(146, '2022-04-18', '2022-07-02', 'II Trimestre', 48, 0,91),
(147, '2022-06-08', '2022-06-09', 'III Trimestre', 48, 1,92),
(148, '2022-06-10', '2022-06-11', 'IV Trimestre', 48, 1,93),
(149, '2022-06-12', '2022-06-13', 'V Trimestre', 48, 1,94),
(150, '2022-06-14', '2022-06-15', 'VI Trimestre', 48, 1,95),
(151, '2022-06-06', '2022-06-07', 'I Trimestre', 49, 1,96),
(152, '2022-04-18', '2022-07-02', 'II Trimestre', 49, 0,97),
(153, '2022-06-07', '2022-06-08', 'III Trimestre', 49, 1,98),
(154, '2022-06-09', '2022-06-10', 'IV Trimestre', 49, 1,99),
(155, '2022-06-11', '2022-06-12', 'V Trimestre', 49, 1,100),
(156, '2022-06-13', '2022-06-14', 'VI Trimestre', 49, 1,101),
(157, '2022-06-06', '2022-06-07', 'I Trimestre', 50, 1,102),
(158, '2022-04-18', '2022-07-02', 'II Trimestre', 50, 1,103),
(159, '2022-06-08', '2022-06-09', 'III Trimestre', 50, 1,104),
(160, '2022-06-10', '2022-06-11', 'IV Trimestre', 50, 1,105),
(161, '2022-06-12', '2022-06-13', 'V Trimestre', 50, 1,106),
(162, '2022-06-14', '2022-06-15', 'VI Trimestre', 50, 1,107),
(163, '2022-06-06', '2022-06-07', 'I Trimestre', 51, 1,108),
(164, '2022-04-18', '2022-07-07', 'II Trimestre', 51, 0,109),
(165, '2022-06-08', '2022-06-09', 'III Trimestre', 51, 1,110),
(166, '2022-06-10', '2022-06-11', 'IV Trimestre', 51, 1,111),
(167, '2022-06-12', '2022-06-13', 'V Trimestre', 51, 1,112),
(168, '2022-06-14', '2022-06-15', 'VI Trimestre', 51, 1,113),
(169, '2022-06-06', '2022-06-07', 'I Trimestre', 52, 1,114),
(170, '2022-04-18', '2022-07-07', 'II Trimestre', 52, 0,115),
(171, '2022-06-08', '2022-06-09', 'III Trimestre', 52, 1,116),
(172, '2022-06-10', '2022-06-11', 'IV Trimestre', 52, 1,117),
(173, '2022-06-12', '2022-06-13', 'V Trimestre', 52, 1,118),
(174, '2022-06-14', '2022-06-15', 'VI Trimestre', 52, 1,119),
(175, '2022-06-06', '2022-06-07', 'I Trimestre', 53, 1,120),
(176, '2022-04-18', '2022-07-02', 'II Trimestre', 53, 0,121),
(177, '2022-06-08', '2022-06-09', 'III Trimestre', 53, 1,122),
(178, '2022-06-10', '2022-06-11', 'IV Trimestre', 53, 1,123),
(179, '2022-06-12', '2022-06-13', 'V Trimestre', 53, 1,124),
(180, '2022-06-14', '2022-06-15', 'VI Trimestre', 53, 1,125),
(181, '2022-06-06', '2022-06-07', 'I Trimestre', 54, 1,126),
(182, '2022-04-18', '2022-07-02', 'II Trimestre', 54, 0,127),
(183, '2022-06-08', '2022-06-09', 'III Trimestre', 54, 1,128),
(184, '2022-06-10', '2022-06-11', 'IV Trimestre', 54, 1,49),
(185, '2022-06-12', '2022-06-13', 'V Trimestre', 54, 1,50),
(186, '2022-06-14', '2022-06-15', 'VI Trimestre', 54, 1,51),
(187, '2022-06-06', '2022-06-07', 'I Trimestre', 55, 1,52),
(188, '2022-04-18', '2022-07-02', 'II Trimestre', 55, 0,2),
(189, '2022-06-08', '2022-06-09', 'III Trimestre', 55, 1,53),
(190, '2022-06-10', '2022-06-11', 'IV Trimestre', 55, 1,54),
(191, '2022-06-12', '2022-06-13', 'V Trimestre', 55, 1,55),
(192, '2022-06-14', '2022-06-15', 'VI Trimestre', 55, 1,60),
(193, '2022-06-06', '2022-06-07', 'I Trimestre', 56, 1,79),
(194, '2022-04-18', '2022-07-02', 'II Trimestre', 56, 0,60),
(195, '2022-06-08', '2022-06-09', 'III Trimestre', 56, 1,54),
(196, '2022-06-10', '2022-06-11', 'IV Trimestre', 56, 1,43),
(197, '2022-06-12', '2022-06-13', 'V Trimestre', 56, 1,49),
(198, '2022-06-14', '2022-06-15', 'VI Trimestre', 56, 1,41),
(199, '2022-06-06', '2022-06-07', 'I Trimestre', 57, 1,83),
(200, '2022-04-18', '2022-07-02', 'II Trimestre', 57, 0,74),
(201, '2022-06-08', '2022-06-09', 'III Trimestre', 57, 1,73),
(202, '2022-06-10', '2022-06-11', 'IV Trimestre', 57, 1,82),
(203, '2022-06-12', '2022-06-13', 'V Trimestre', 57, 1,54),
(204, '2022-06-14', '2022-06-15', 'VI Trimestre', 57, 1,56),
(205, '2022-06-06', '2022-06-07', 'I Trimestre', 58, 1,100),
(206, '2022-04-18', '2022-07-02', 'II Trimestre', 58, 0,99),
(207, '2022-06-08', '2022-06-09', 'III Trimestre', 58, 1,92),
(208, '2022-06-10', '2022-06-11', 'IV Trimestre', 58, 1,95),
(209, '2022-06-12', '2022-06-13', 'V Trimestre', 58, 1,93),
(210, '2022-06-14', '2022-06-15', 'VI Trimestre', 58, 1,101),
(211, '2022-06-06', '2022-06-07', 'I Trimestre', 59, 1,102),
(212, '2022-04-18', '2022-07-02', 'II Trimestre', 59, 0,104),
(213, '2022-06-08', '2022-06-09', 'III Trimestre', 59, 1,83),
(214, '2022-06-10', '2022-06-11', 'IV Trimestre', 59, 1,76),
(215, '2022-06-12', '2022-06-13', 'V Trimestre', 59, 1,84),
(216, '2022-06-14', '2022-06-15', 'VI Trimestre', 59, 1,85),
(217, '2022-06-06', '2022-06-07', 'I Trimestre', 60, 1,100),
(218, '2022-04-18', '2022-07-07', 'II Trimestre', 60, 0,101),
(219, '2022-06-08', '2022-06-09', 'III Trimestre', 60, 1,102),
(220, '2022-06-10', '2022-06-11', 'IV Trimestre', 60, 1,65),
(221, '2022-06-12', '2022-06-13', 'V Trimestre', 60, 1,56),
(222, '2022-06-14', '2022-06-15', 'VI Trimestre', 60, 1,86),
(223, '2022-06-06', '2022-06-07', 'I Trimestre', 61, 1,87),
(224, '2022-04-18', '2022-07-02', 'II Trimestre', 61, 0,95),
(225, '2022-06-08', '2022-06-09', 'III Trimestre', 61, 1,94),
(226, '2022-06-10', '2022-06-11', 'IV Trimestre', 61, 1,44),
(227, '2022-06-12', '2022-06-13', 'V Trimestre', 61, 1,49),
(228, '2022-06-14', '2022-06-15', 'VI Trimestre', 61, 1,50),
(229, '2022-06-06', '2022-06-07', 'I Trimestre', 62, 1,53),
(230, '2022-04-18', '2022-07-02', 'II Trimestre', 62, 0,54),
(231, '2022-06-08', '2022-06-09', 'III Trimestre', 62, 1,55),
(232, '2022-06-10', '2022-06-11', 'IV Trimestre', 62, 1,65),
(233, '2022-06-12', '2022-06-13', 'V Trimestre', 62, 1,75),
(234, '2022-06-14', '2022-06-15', 'VI Trimestre', 62, 1,73),
(235, '2022-06-06', '2022-06-07', 'I Trimestre', 63, 1,72),
(236, '2022-04-18', '2022-07-02', 'II Trimestre', 63, 0,81),
(237, '2022-06-08', '2022-06-09', 'III Trimestre', 63, 1,93),
(238, '2022-06-10', '2022-06-11', 'IV Trimestre', 63, 1,92),
(239, '2022-06-12', '2022-06-13', 'V Trimestre', 63, 1,92),
(240, '2022-06-14', '2022-06-15', 'VI Trimestre', 63, 1,100),
(241, '2022-06-06', '2022-06-07', 'I Trimestre', 64, 1,102),
(242, '2022-04-18', '2022-07-02', 'II Trimestre', 64, 0,104),
(243, '2022-06-08', '2022-06-09', 'III Trimestre', 64, 1,103),
(244, '2022-06-10', '2022-06-11', 'IV Trimestre', 64, 1,99),
(245, '2022-06-12', '2022-06-13', 'V Trimestre', 64, 1,95),
(246, '2022-06-14', '2022-06-15', 'VI Trimestre', 64, 1,94),
(247, '2022-06-06', '2022-06-07', 'I Trimestre', 65, 1,92),
(248, '2022-04-18', '2022-07-02', 'II Trimestre', 65, 0,90),
(249, '2022-06-08', '2022-06-09', 'III Trimestre', 65, 1,57),
(250, '2022-06-10', '2022-06-11', 'IV Trimestre', 65, 1,58),
(251, '2022-06-12', '2022-06-13', 'V Trimestre', 65, 1, 49),
(252, '2022-06-14', '2022-06-15', 'VI Trimestre', 65, 1,41),
(253, '2022-06-06', '2022-06-07', 'I Trimestre', 66, 1,59),
(254, '2022-04-18', '2022-07-02', 'II Trimestre', 66, 0,50),
(255, '2022-06-08', '2022-06-09', 'III Trimestre', 66, 1,48),
(256, '2022-06-10', '2022-06-11', 'IV Trimestre', 66, 1,76),
(257, '2022-06-12', '2022-06-13', 'V Trimestre', 66, 1,127),
(258, '2022-06-14', '2022-06-15', 'VI Trimestre', 66, 1,126),
(259, '2022-06-06', '2022-06-07', 'I Trimestre', 67, 1,125),
(260, '2022-04-18', '2022-07-02', 'II Trimestre', 67, 0,124),
(261, '2022-06-08', '2022-06-09', 'III Trimestre', 67, 1,123),
(262, '2022-06-10', '2022-06-11', 'IV Trimestre', 67, 1,122),
(263, '2022-06-12', '2022-06-13', 'V Trimestre', 67, 1,121),
(264, '2022-06-14', '2022-06-15', 'VI Trimestre', 67, 1,120),
(265, '2022-06-06', '2022-06-07', 'I Trimestre', 68, 1,119),
(266, '2022-04-18', '2022-07-02', 'II Trimestre', 68, 0,118),
(267, '2022-06-08', '2022-06-09', 'III Trimestre', 68, 1,117),
(268, '2022-06-10', '2022-06-11', 'IV Trimestre', 68, 1,115),
(269, '2022-06-12', '2022-06-13', 'V Trimestre', 68, 1,110),
(270, '2022-06-14', '2022-06-15', 'VI Trimestre', 68, 1,109),
(271, '2022-06-06', '2022-06-07', 'I Trimestre', 69, 1,108),
(272, '2022-04-18', '2022-07-02', 'II Trimestre', 69, 0,107),
(273, '2022-06-08', '2022-06-09', 'III Trimestre', 69, 1,100),
(274, '2022-06-10', '2022-06-11', 'IV Trimestre', 69, 1,99),
(275, '2022-06-12', '2022-06-13', 'V Trimestre', 69, 1,98),
(276, '2022-06-14', '2022-06-15', 'VI Trimestre', 69, 1,94),
(277, '2022-06-06', '2022-06-07', 'I Trimestre', 70, 1,76),
(278, '2022-04-18', '2022-07-02', 'II Trimestre', 70, 0,54),
(279, '2022-06-08', '2022-06-09', 'III Trimestre', 70, 1,45),
(280, '2022-06-10', '2022-06-11', 'IV Trimestre', 70, 1,87),
(281, '2022-06-12', '2022-06-13', 'V Trimestre', 70, 1,92),
(282, '2022-06-14', '2022-06-15', 'VI Trimestre', 70, 1,94),
(283, '2022-06-06', '2022-06-07', 'I Trimestre', 71, 1,100),
(284, '2022-04-18', '2022-07-02', 'II Trimestre', 71, 0,101),
(285, '2022-06-08', '2022-06-09', 'III Trimestre', 71, 1,102),
(286, '2022-06-10', '2022-06-11', 'IV Trimestre', 71, 1,127),
(287, '2022-06-12', '2022-06-13', 'V Trimestre', 71, 1,124),
(288, '2022-06-14', '2022-06-15', 'VI Trimestre', 71, 1,130),
(289, '2022-06-06', '2022-06-07', 'I Trimestre', 72, 1,54),
(290, '2022-04-18', '2022-07-02', 'II Trimestre', 72, 0,43),
(291, '2022-06-10', '2022-06-11', 'III Trimestre', 72, 1,42),
(292, '2022-06-12', '2022-06-13', 'IV Trimestre', 72, 1,100),
(293, '2022-06-14', '2022-06-15', 'V Trimestre', 72, 1,123),
(294, '2022-06-16', '2022-06-17', 'VI Trimestre', 72, 1,43),
(295, '2022-06-06', '2022-06-07', 'I Trimestre', 73, 1,42),
(296, '2022-04-18', '2022-07-02', 'II Trimestre', 73, 0,48),
(297, '2022-06-08', '2022-06-09', 'III Trimestre', 73, 1,49),
(298, '2022-06-10', '2022-06-11', 'IV Trimestre', 73, 1,50),
(299, '2022-06-12', '2022-06-13', 'V Trimestre', 73, 1,52),
(300, '2022-06-14', '2022-06-15', 'VI Trimestre', 73, 1,53),
(301, '2022-06-06', '2022-06-07', 'I Trimestre', 74, 1,54),
(302, '2022-04-18', '2022-07-02', 'II Trimestre', 74, 0,55),
(303, '2022-06-08', '2022-06-09', 'III Trimestre', 74, 1,56),
(304, '2022-06-10', '2022-06-11', 'IV Trimestre', 74, 1,56),
(305, '2022-06-12', '2022-06-13', 'V Trimestre', 74, 1,57),
(306, '2022-06-14', '2022-06-15', 'VI Trimestre', 74, 1,58),
(307, '2022-06-06', '2022-06-07', 'I Trimestre', 75, 1,59),
(308, '2022-04-18', '2022-07-02', 'II Trimestre', 75, 0,60),
(309, '2022-06-08', '2022-06-09', 'III Trimestre', 75, 1,63),
(310, '2022-06-10', '2022-06-11', 'IV Trimestre', 75, 1,62),
(311, '2022-06-12', '2022-06-13', 'V Trimestre', 75, 1,64),
(312, '2022-06-14', '2022-06-15', 'VI Trimestre', 75, 1,65),
(313, '2022-06-06', '2022-06-07', 'I Trimestre', 76, 1,75),
(314, '2022-04-18', '2022-07-02', 'II Trimestre', 76, 0,85),
(315, '2022-06-08', '2022-06-09', 'III Trimestre', 76, 1,90),
(316, '2022-06-10', '2022-06-11', 'IV Trimestre', 76, 1,93),
(317, '2022-06-12', '2022-06-13', 'V Trimestre', 76, 1,94),
(318, '2022-06-14', '2022-06-15', 'VI Trimestre', 76, 1,95),
(319, '2022-06-06', '2022-06-07', 'I Trimestre', 77, 1,97),
(320, '2022-04-18', '2022-07-02', 'II Trimestre', 77, 0,98),
(321, '2022-06-08', '2022-06-09', 'III Trimestre', 77, 1,75),
(322, '2022-06-10', '2022-06-11', 'IV Trimestre', 77, 1,43),
(323, '2022-06-12', '2022-06-13', 'V Trimestre', 77, 1,54),
(324, '2022-06-14', '2022-06-15', 'VI Trimestre', 77, 1,65),
(325, '2022-06-06', '2022-06-07', 'I Trimestre', 78, 1,76),
(326, '2022-04-18', '2022-07-02', 'II Trimestre', 78, 0,56),
(327, '2022-06-08', '2022-06-09', 'III Trimestre', 78, 1,87),
(328, '2022-06-10', '2022-06-11', 'IV Trimestre', 78, 1,98),
(329, '2022-06-12', '2022-06-13', 'V Trimestre', 78, 1,100),
(330, '2022-06-14', '2022-06-15', 'VI Trimestre', 78, 1,2),
(331, '2022-06-06', '2022-06-07', 'I Trimestre', 79, 1,43),
(332, '2022-04-18', '2022-07-02', 'II Trimestre', 79, 0,54),
(333, '2022-06-08', '2022-06-09', 'III Trimestre', 79, 1,60),
(334, '2022-06-10', '2022-06-11', 'IV Trimestre', 79, 1,64),
(335, '2022-06-12', '2022-06-13', 'V Trimestre', 79, 1,67),
(336, '2022-06-14', '2022-06-15', 'VI Trimestre', 79, 1,68),
(337, '2022-06-06', '2022-06-07', 'I Trimestre', 80, 1,70),
(338, '2022-04-18', '2022-07-02', 'II Trimestre', 80, 0,95),
(339, '2022-06-08', '2022-06-09', 'III Trimestre', 80, 1,100),
(340, '2022-06-10', '2022-06-11', 'IV Trimestre', 80, 1,102),
(341, '2022-06-12', '2022-06-13', 'V Trimestre', 80, 1,104),
(342, '2022-06-14', '2022-06-15', 'VI Trimestre', 80, 1,125),
(343, '2022-06-06', '2022-06-07', 'I Trimestre', 81, 1,126),
(344, '2022-04-18', '2022-07-02', 'II Trimestre', 81, 0,104),
(345, '2022-06-08', '2022-06-09', 'III Trimestre', 81, 1,45),
(346, '2022-06-10', '2022-06-11', 'IV Trimestre', 81, 1,59),
(347, '2022-06-12', '2022-06-13', 'V Trimestre', 81, 1,60),
(348, '2022-06-14', '2022-06-15', 'VI Trimestre', 81, 1,70),
(349, '2022-06-06', '2022-06-07', 'I Trimestre', 82, 1,64),
(350, '2022-04-18', '2022-07-02', 'II Trimestre', 82, 0,85),
(351, '2022-06-08', '2022-06-09', 'III Trimestre', 82, 1,90),
(352, '2022-06-10', '2022-06-11', 'IV Trimestre', 82, 1,69),
(353, '2022-06-12', '2022-06-13', 'V Trimestre', 82, 1,70),
(354, '2022-06-14', '2022-06-15', 'VI Trimestre', 82, 1,80);

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
  ADD KEY `fk_TFCH` (`id_fch`),
  ADD KEY `relacion_instructor` (`instructor_id`);


--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `id_A` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `ID_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_hora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=919;

--
-- AUTO_INCREMENT de la tabla `horas`
--
ALTER TABLE `horas`
  MODIFY `id_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88524517;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tb_trimestre`
--
ALTER TABLE `tb_trimestre`
  MODIFY `id_T` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

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
  ADD CONSTRAINT `fk_TFCH` FOREIGN KEY (`id_fch`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_instructor` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
