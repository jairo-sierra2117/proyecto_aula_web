-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2023 a las 20:45:00
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
  `duracion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `descripcion`, `fecha_reg`, `duracion`) VALUES
(7, 'Curso de baloncesto', 'Junto a la cancha amarilla, de lunes a viernes', '25/05/23', '12 semanas'),
(8, 'clases de costura', 'aprenderemos todo lo relacionado con costuras', '25/05/23', '2 meses'),
(17, 'Curso de uñas', 'Aprende a hacer manicure y pedicure', '27/05/23', '48 horas');

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
(4, 'Maiken Pala', 'Maik@gmail.com', 'Maikenpau', 'maiken');

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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `login_usuario`
--
ALTER TABLE `login_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
