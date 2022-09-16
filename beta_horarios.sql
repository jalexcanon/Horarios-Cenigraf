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
  `id_instructor` int(11) NOT NULL,
  `fc_id_programa` int(11) NOT NULL,
  `estatus_trim` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


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
  `nivel_form` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id_program`, `Nom_program`, `nivel_form`) VALUES
(88524475, 'Impresión Digital I', 'Técnico'),
(88524476, 'Preprensa I', 'Tecnólogo'),
(88524477, 'Flexografia I', 'Tecnólogo'),
(88524478, 'Serigrafia I', 'Tecnólogo'),
(88524479, 'Serigrafia II a', 'Tecnólogo'),
(88524480, 'Serigrafia II b', 'Tecnólogo'),
(88524481, 'Postprensa I ', 'Tecnólogo'),
(88524482, 'INT CONT DIGITALES II', 'Tecnólogo'),
(88524483, 'E. AUDIOVISUALES I', 'Tecnólogo'),
(88524484, 'E. AUDIOVISUALES II', 'Tecnólogo'),
(88524485, 'E. AUDIOVISUALES I a', 'Tecnólogo'),
(88524486, 'DMGV I', 'Tecnólogo'),
(88524487, 'DMGV VII', 'Tecnólogo'),
(88524488, 'DMGV VII a', 'Tecnólogo'),
(88524489, 'DMGV VII b', 'Tecnólogo'),
(88524490, 'DMGV VI', 'Tecnólogo'),
(88524491, 'DMGV VI a', 'Tecnólogo'),
(88524492, ' FOTOGRAFIA VII', 'Tecnólogo'),
(88524493, 'FOTOGRAFIA VII a', 'Tecnólogo'),
(88524494, 'FOTOGRAFIA VI', 'Tecnólogo'),
(88524495, 'SPG I ', 'Tecnólogo'),
(88524496, 'SUPERVISIÓN PG VII', 'Tecnólogo'),
(88524497, 'SUPERVISION PG VII a', 'Tecnólogo'),
(88524498, 'SPG VI ', 'Tecnólogo'),
(88524499, 'P. MULTIMEDIA II ', 'Tecnólogo'),
(88524500, 'P. MULTIMEDIA II a', 'Tecnólogo'),
(88524501, 'P. MULTIMEDIA II b', 'Tecnólogo'),
(88524502, 'P. MULTIMEDIA VI ', 'Tecnólogo'),
(88524503, 'ANIMACION DIGITAL I', 'Tecnólogo'),
(88524504, ' ANIMACION DIGITAL I a', 'Tecnólogo'),
(88524505, 'ANIMACION 3D I', 'Tecnólogo'),
(88524506, 'ANIMACION DIGITAL II', 'Tecnólogo'),
(88524507, 'ANIMACION 3D II', 'Tecnólogo'),
(88524508, 'ADSO I ', 'Tecnólogo'),
(88524509, 'ADSI VI', 'Tecnólogo'),
(88524510, 'ADSI VI a', 'Tecnólogo'),
(88524511, 'SISTEMAS II', 'Tecnólogo'),
(88524512, 'P. SOFTWARE I ', 'Tecnólogo'),
(88524513, 'P. SOFTWARE II', 'Tecnólogo'),
(88524514, 'Esp Ilustración Creativa', 'Tecnólogo'),
(88524515, 'MEZCLA E IG. TINTAS', 'Tecnólogo'),
(88524516, 'MEZCLA E IG. TINTAS  a', 'Tecnólogo');

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

CREATE TABLE `trimestres` (
  `id` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `trimestre` int(11) DEFAULT NULL,
  `estatus_trim_H` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_trimestre`
--


--
-- Índices para tablas volcadas
--

CREATE TABLE `competencias` (
  `id` int(11) NOT NULL,
  `competencias` text DEFAULT NULL,
  `fecha_ini` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `instructor` varchar(25),
  `programas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `resultados` (
  `id` int(11) NOT NULL,
  `resultados` text DEFAULT NULL,
  `instructor_resultados` varchar(25),
  `programas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


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
  ADD KEY `relacion_prog` (`fc_id_programa`),
  ADD KEY `relacion_instructor` (`id_instructor`);
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

ALTER TABLE `competencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relacion_programas` (`programas_id`);

ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relacion_programas_resultados` (`programas_id`);

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
ALTER TABLE `trimestres`
  ADD PRIMARY KEY (`id`);

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
ALTER TABLE `trimestres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;


ALTER TABLE `competencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;


ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

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
  ADD CONSTRAINT `relacion_prog` FOREIGN KEY (`fc_id_programa`) REFERENCES `programa` (`id_program`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_instructor` FOREIGN KEY (`id_instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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


ALTER TABLE `competencias`
  ADD CONSTRAINT `relacion_programas` FOREIGN KEY (`programas_id`) REFERENCES `programa` (`id_program`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `resultados`
  ADD CONSTRAINT `relacion_programas_resultados` FOREIGN KEY (`programas_id`) REFERENCES `programa` (`id_program`) ON DELETE CASCADE ON UPDATE CASCADE;
  

--
-- Filtros para la tabla `tb_trimestre`
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
