-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2023 a las 15:15:47
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(9) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `fecha_reg` varchar(15) NOT NULL,
  `duracion` varchar(50) NOT NULL,
  `certificado` varchar(10) NOT NULL,
  `inicio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `descripcion`, `fecha_reg`, `duracion`, `certificado`, `inicio`) VALUES
(7, 'Curso de baloncesto', 'Junto a la cancha amarilla, de lunes a viernes', '25/05/23', '12 semanas', '1', '2023/10/05'),
(17, 'Curso de uñas', 'Aprende a hacer manicure y pedicure', '27/05/23', '48 dias', '0', '2023/09/07'),
(29, 'Natación', 'Piscina olímpica', '13/06/23', '2 meses', '1', '2023/12/06'),
(30, 'Curso de informatica', 'Aprende lo básico de programación', '13/06/23', '2 años', '1', '2023/10/09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) NOT NULL,
  `evento` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `hora` varchar(50) NOT NULL,
  `lugar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `evento`, `descripcion`, `fecha`, `hora`, `lugar`) VALUES
(1, 'Fiesta en los patios', 'Perreo a lo galactic', '01/02/2023', '22:10', 'Plazoleta'),
(2, 'Pachanga', 'pachanga en la casa de maiken con la nona', '01/02/2023', '22:10', 'casa de maiken');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_evento`
--

CREATE TABLE `inscripcion_evento` (
  `cedula` int(10) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `evento` text NOT NULL,
  `comentarios` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscripcion_evento`
--

INSERT INTO `inscripcion_evento` (`cedula`, `nombre`, `apellido`, `correo`, `telefono`, `evento`, `comentarios`) VALUES
(392818318, 'Diego Andres', 'Alvarez', 'dal@gmail.com', '3001212121', 'Fiesta en los patios', 'comentarios'),
(1005027350, 'Diego', 'Alvarez', 'Diegolon@perreo.com', '2147483647', 'Perreo a lo galactic', 'comentarios'),
(1005027351, 'Diego', 'Rigaud', 'marquezrigauddiego@gmail.com', '3007415013', 'Perreo a lo galactic', 'comentarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_usuario`
--

CREATE TABLE `login_usuario` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login_usuario`
--

INSERT INTO `login_usuario` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
(2, 'Diego Armando Marquez', 'Diegolon@perreo.com', 'vggvhk', '123456789'),
(3, 'Diego Armando Marquez', 'marquezrigauddiego@gmail.com', 'diego5830', 'contraseña'),
(4, 'Maiken Pala', 'Maik@gmail.com', 'Maikenpau', 'maiken'),
(5, 'Diego Alvarez', 'Da@gmail.com', 'da', 'diego'),
(6, 'pepe', 'dsacsda@gmail.com', '1341109', 'dsacsda@gmail.com'),
(7, 'pato nel', 'cuackcuack@patomil.com', 'donal', '123456'),
(8, 'bambino', 'bambi@bambino.com', 'jfdnasibcia', 'con'),
(9, 'Fredy vera', 'freve9@gmail.com', 'fredy99', '2865'),
(10, 'pepe', 'aaaaaa@aaa.com', 'aaaaa', ''),
(11, 'pepe', 'aaaaaa@aaa.com', 'aaaaa', 'aaaaaaaaa'),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, 'Maiken lulo', 'lelomaiken@gmail.com', '9091', '2865'),
(15, 'Maiken lulo', 'lelomaiken@gmail.com', '9091', '8777'),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, '', '', '', ''),
(35, '', '', '', ''),
(36, '', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', '', '', ''),
(48, '', '', '', ''),
(49, '', '', '', ''),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', ''),
(59, '', '', '', ''),
(60, '', '', '', ''),
(61, '', '', '', ''),
(62, '', '', '', ''),
(63, '', '', '', ''),
(64, '', '', '', ''),
(65, '', '', '', ''),
(66, '', '', '', ''),
(67, '', '', '', ''),
(68, '', '', '', ''),
(69, '', '', '', ''),
(70, '', '', '', ''),
(71, '', '', '', ''),
(72, 'Maiken lulo', 'lelomaiken@gmail.com', '9091', '8777'),
(73, '', '', '', ''),
(74, '', '', '', ''),
(75, '', '', '', ''),
(76, '', '', '', ''),
(77, '', '', '', ''),
(78, '', '', '', ''),
(79, '', '', '', ''),
(80, '', '', '', ''),
(81, '', '', '', ''),
(82, '', '', '', ''),
(83, '', '', '', ''),
(84, '', '', '', ''),
(85, '', '', '', ''),
(86, '', '', '', ''),
(87, '', '', '', ''),
(88, '', '', '', ''),
(89, '', '', '', ''),
(90, '', '', '', ''),
(91, '', '', '', ''),
(92, '', '', '', ''),
(93, '', '', '', ''),
(94, '', '', '', ''),
(95, '', '', '', ''),
(96, '', '', '', ''),
(97, '', '', '', ''),
(98, '', '', '', ''),
(99, '', '', '', ''),
(100, '', '', '', ''),
(101, '', '', '', ''),
(102, '', '', '', ''),
(103, '', '', '', ''),
(104, '', '', '', ''),
(105, '', '', '', ''),
(106, '', '', '', ''),
(107, '', '', '', ''),
(108, '', '', '', ''),
(109, '', '', '', ''),
(110, '', '', '', ''),
(111, '', '', '', ''),
(112, '', '', '', ''),
(113, '', '', '', ''),
(114, '', '', '', ''),
(115, '', '', '', ''),
(116, '', '', '', ''),
(117, '', '', '', ''),
(118, '', '', '', ''),
(119, '', '', '', ''),
(120, '', '', '', ''),
(121, '', '', '', ''),
(122, '', '', '', ''),
(123, '', '', '', ''),
(124, '', '', '', ''),
(125, '', '', '', ''),
(126, '', '', '', ''),
(127, '', '', '', ''),
(128, '', '', '', ''),
(129, '', '', '', ''),
(130, '', '', '', ''),
(131, '', '', '', ''),
(132, '', '', '', ''),
(133, '', '', '', ''),
(134, '', '', '', ''),
(135, '', '', '', ''),
(136, '', '', '', ''),
(137, '', '', '', ''),
(138, '', '', '', ''),
(139, '', '', '', ''),
(140, '', '', '', ''),
(141, '', '', '', ''),
(142, '', '', '', ''),
(143, '', '', '', ''),
(144, '', '', '', ''),
(145, '', '', '', ''),
(146, '', '', '', ''),
(147, '', '', '', ''),
(148, '', '', '', ''),
(149, '', '', '', ''),
(150, '', '', '', ''),
(151, '', '', '', ''),
(152, '', '', '', ''),
(153, '', '', '', ''),
(154, '', '', '', ''),
(155, '', '', '', ''),
(156, '', '', '', ''),
(157, '', '', '', ''),
(158, '', '', '', ''),
(159, '', '', '', ''),
(160, '', '', '', ''),
(161, '', '', '', ''),
(162, '', '', '', ''),
(163, '', '', '', ''),
(164, '', '', '', ''),
(165, '', '', '', ''),
(166, '', '', '', ''),
(167, '', '', '', ''),
(168, '', '', '', ''),
(169, '', '', '', ''),
(170, '', '', '', ''),
(171, '', '', '', ''),
(172, '', '', '', ''),
(173, '', '', '', ''),
(174, '', '', '', ''),
(175, '', '', '', ''),
(176, '', '', '', ''),
(177, '', '', '', ''),
(178, '', '', '', ''),
(179, '', '', '', ''),
(180, '', '', '', ''),
(181, '', '', '', ''),
(182, '', '', '', ''),
(183, '', '', '', ''),
(184, '', '', '', ''),
(185, '', '', '', ''),
(186, '', '', '', ''),
(187, '', '', '', ''),
(188, '', '', '', ''),
(189, '', '', '', ''),
(190, '', '', '', ''),
(191, '', '', '', ''),
(192, '', '', '', ''),
(193, '', '', '', ''),
(194, '', '', '', ''),
(195, '', '', '', ''),
(196, '', '', '', ''),
(197, '', '', '', ''),
(198, '', '', '', ''),
(199, '', '', '', ''),
(200, '', '', '', ''),
(201, '', '', '', ''),
(202, '', '', '', ''),
(203, '', '', '', ''),
(204, '', '', '', ''),
(205, '', '', '', ''),
(206, '', '', '', ''),
(207, '', '', '', ''),
(208, '', '', '', ''),
(209, '', '', '', ''),
(210, '', '', '', ''),
(211, '', '', '', ''),
(212, '', '', '', ''),
(213, '', '', '', ''),
(214, '', '', '', ''),
(215, '', '', '', ''),
(216, '', '', '', ''),
(217, '', '', '', ''),
(218, '', '', '', ''),
(219, '', '', '', ''),
(220, '', '', '', ''),
(221, '', '', '', ''),
(222, 'Diego', 'Maik@gmail.com', '1341109', 'hola'),
(223, '', '', '', ''),
(224, '', '', '', ''),
(225, '', '', '', ''),
(226, 'Diego', 'Maik@gmail.com', '1341109', 'hola'),
(227, 'Diego', 'Maik@gmail.com', '1341109', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `num_celular` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `nombre`, `apellido`, `titulo`, `descripcion`, `fecha`, `num_celular`) VALUES
(7, 'Maiken', 'Pico', 'Maiken', 'Estudioso y veloz', '121213', '300000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` enum('M','F','O') NOT NULL,
  `curso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `cedula`, `direccion`, `edad`, `sexo`, `curso`) VALUES
(1, 'Diego Armando Marquez Rigaud', '1005059677', 'AVENIDA 11 CALLE 26 # 25 B- 01 PATIO ANTIGUO', 21, 'M', 'Curso de baloncesto'),
(2, 'Nelson Rosas', '123456', 'AVENIDA 11 CALLE 26 # 25 B- 01 PATIO ANTIGUO', 17, 'M', 'Curso de baloncesto'),
(8, 'Jairo Espinoza', '1235543', 'Maracay', 32, 'M', 'Curso de baloncesto'),
(9, 'AndreaLopez', '1352790', 'Atalaya', 21, 'F', 'Curso de informatica'),
(10, 'Diego Marquez ', '10050509677', 'Los Patios', 21, 'M', 'Natación');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcion_evento`
--
ALTER TABLE `inscripcion_evento`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `login_usuario`
--
ALTER TABLE `login_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `login_usuario`
--
ALTER TABLE `login_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
