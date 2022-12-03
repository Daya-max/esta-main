-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 02:03:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `safeme`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emociones`
--

CREATE TABLE `emociones` (
  `id_emocion` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emociones`
--

INSERT INTO `emociones` (`id_emocion`, `nombre`) VALUES
(5, 'desagrado'),
(1, 'felicidad'),
(4, 'ira'),
(3, 'miedo'),
(2, 'sorpresa'),
(6, 'tristeza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emocion_desagrado`
--

CREATE TABLE `emocion_desagrado` (
  `id_emc_desagrado` int(11) NOT NULL,
  `id_emocion` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emocion_desagrado`
--

INSERT INTO `emocion_desagrado` (`id_emc_desagrado`, `id_emocion`, `nombre`) VALUES
(1, 5, 'disconforme'),
(2, 5, 'decepcionado'),
(3, 5, 'horrible'),
(4, 5, 'abstinencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emocion_felicidad`
--

CREATE TABLE `emocion_felicidad` (
  `id_emc_felicidad` int(11) NOT NULL,
  `id_emocion` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emocion_felicidad`
--

INSERT INTO `emocion_felicidad` (`id_emc_felicidad`, `id_emocion`, `nombre`) VALUES
(1, 1, 'alegre'),
(2, 1, 'interesado'),
(3, 1, 'orgulloso'),
(4, 1, 'aceptado'),
(5, 1, 'poderoso'),
(6, 1, 'pacifico'),
(7, 1, 'intimo'),
(8, 1, 'optimista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emocion_ira`
--

CREATE TABLE `emocion_ira` (
  `id_emc_ira` int(11) NOT NULL,
  `id_emocion` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emocion_ira`
--

INSERT INTO `emocion_ira` (`id_emc_ira`, `id_emocion`, `nombre`) VALUES
(1, 4, 'critico'),
(2, 4, 'distante'),
(3, 4, 'frustrado'),
(4, 4, 'agresivo'),
(5, 4, 'loco'),
(6, 4, 'lleno de odio'),
(7, 4, 'amenazado'),
(8, 4, 'herido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emocion_miedo`
--

CREATE TABLE `emocion_miedo` (
  `id_emc_miedo` int(11) NOT NULL,
  `id_emocion` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emocion_miedo`
--

INSERT INTO `emocion_miedo` (`id_emc_miedo`, `id_emocion`, `nombre`) VALUES
(1, 3, 'humillado'),
(2, 3, 'rechazado'),
(3, 3, 'sumiso'),
(4, 3, 'inseguro'),
(5, 3, 'ansioso'),
(6, 3, 'asustado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emocion_sorpresa`
--

CREATE TABLE `emocion_sorpresa` (
  `id_emc_sorpresa` int(11) NOT NULL,
  `id_emocion` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emocion_sorpresa`
--

INSERT INTO `emocion_sorpresa` (`id_emc_sorpresa`, `id_emocion`, `nombre`) VALUES
(1, 2, 'sorprendido'),
(2, 2, 'confundido '),
(3, 2, 'asombrado'),
(4, 2, 'entusiasmado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emocion_tristeza`
--

CREATE TABLE `emocion_tristeza` (
  `id_emc_tristeza` int(11) NOT NULL,
  `id_emocion` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emocion_tristeza`
--

INSERT INTO `emocion_tristeza` (`id_emc_tristeza`, `id_emocion`, `nombre`) VALUES
(1, 6, 'culpable'),
(2, 6, 'abandonado'),
(3, 6, 'desesperado'),
(4, 6, 'deprimido'),
(5, 6, 'solo'),
(6, 6, 'aburrido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(50) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `startt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `descrip`, `startt`) VALUES
(11, 'Powerful', '#FFD700', '', '2022-11-27 06:00:00'),
(19, 'Playful', '#FFD700', '', '2022-11-10 06:00:00'),
(28, 'sadness', '#40E0D0', '', '2022-11-10 06:00:00'),
(29, 'Frustrated', '#FF0000', '', '2022-11-29 06:00:00'),
(71, '', '', '', '2022-11-09 06:00:00'),
(72, '', '', '', '2022-11-09 06:00:00'),
(73, '', '', '', '2022-11-30 06:01:08'),
(74, '5', '', '', '2022-11-29 23:11:29'),
(75, '5', '', 'ssadasd', '2022-11-29 23:12:58'),
(76, '5', '#FFD700', 'asdasdg', '2022-11-29 23:16:27'),
(77, 'asadasd', '#40E0D0', '', '0000-00-00 00:00:00'),
(78, 'asadasd', '#40E0D0', '', '0000-00-00 00:00:00'),
(79, 'asadasd', '#40E0D0', '', '0000-00-00 00:00:00'),
(80, 'asadasd', '#40E0D0', '', '0000-00-00 00:00:00'),
(81, 'asadasd', '#40E0D0', '', '2022-11-01 06:00:00'),
(82, 'asadasd', '#40E0D0', '', '2022-11-01 06:00:00'),
(83, 'asdad', '#0071c5', '', '2022-11-01 06:00:00'),
(84, 'asdad', '#0071c5', '', '2022-11-01 06:00:00'),
(85, '', '#008000', '', '2022-11-29 06:00:00'),
(86, '', '#008000', '', '2022-11-29 06:00:00'),
(87, '', '', '', '2022-11-29 06:00:00'),
(88, '', '', '', '2022-11-29 06:00:00'),
(89, '', '', '', '2022-11-29 06:00:00'),
(90, '', '', '', '2022-11-29 06:00:00'),
(91, '', '', '', '2022-11-29 06:00:00'),
(92, '', '', '', '2022-11-29 06:00:00'),
(93, '', '', '', '2022-11-29 06:00:00'),
(94, '', '', '', '2022-11-29 06:00:00'),
(95, '', '', '', '2022-11-29 06:00:00'),
(96, '', '', '', '2022-11-29 06:00:00'),
(97, '', '', '', '2022-11-29 06:00:00'),
(98, '', '', '', '2022-11-29 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_feels`
--

CREATE TABLE `log_feels` (
  `id_log` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_emocion` int(11) NOT NULL,
  `nombre_emocion` varchar(255) NOT NULL,
  `id_emc_desagrado` int(11) NOT NULL,
  `id_emc_felicidad` int(11) NOT NULL,
  `id_emc_ira` int(11) NOT NULL,
  `id_emc_miedo` int(11) NOT NULL,
  `id_emc_sorpresa` int(11) NOT NULL,
  `id_emc_tristeza` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `log_feels`
--

INSERT INTO `log_feels` (`id_log`, `id`, `id_emocion`, `nombre_emocion`, `id_emc_desagrado`, `id_emc_felicidad`, `id_emc_ira`, `id_emc_miedo`, `id_emc_sorpresa`, `id_emc_tristeza`, `descripcion`, `created_at`) VALUES
(1, 1, 1, 'feliz', 0, 6, 0, 0, 0, 0, 'ai aiula', '2022-11-29 14:21:39'),
(2, 1, 1, 'feliz', 0, 4, 0, 0, 0, 0, 'soy josueeee', '2022-11-29 14:55:49'),
(3, 1, 1, 'feliz', 0, 9, 0, 0, 0, 0, 'YA COMPILO TUUUU', '2022-11-29 16:34:56'),
(5, 1, 1, 'feliz', 0, 2, 0, 0, 0, 0, 'aaaaaaaaaaaaa', '2022-11-29 16:52:54'),
(6, 1, 1, 'feliz', 0, 2, 0, 0, 0, 0, 'aaaaaaaaaaaaa', '2022-11-29 16:54:36'),
(7, 1, 1, 'feliz', 0, 2, 0, 0, 0, 0, 'aaaaaaaaaaaaa', '2022-11-29 16:55:40'),
(8, 1, 1, 'feliz', 0, 2, 0, 0, 0, 0, 'aaaaaaaaaaaaa', '2022-11-29 16:57:01'),
(9, 1, 1, 'feliz', 0, 2, 0, 0, 0, 0, 'aaaaaaaaaaaaa', '2022-11-29 16:58:57'),
(10, 1, 1, 'feliz', 0, 4, 0, 0, 0, 0, 'aaaaaaaaaaaaa', '2022-11-29 16:59:20'),
(11, 1, 1, 'feliz', 0, 8, 0, 0, 0, 0, 'ssadasd', '2022-11-29 17:00:31'),
(12, 1, 1, 'feliz', 0, 8, 0, 0, 0, 0, 'ssadasd', '2022-11-29 17:05:48'),
(13, 9, 1, 'feliz', 0, 8, 0, 0, 0, 0, 'ssadasd', '2022-11-29 17:05:48'),
(14, 1, 1, 'feliz', 0, 5, 0, 0, 0, 0, 'ssadasd', '2022-11-29 17:08:53'),
(15, 1, 1, 'feliz', 0, 5, 0, 0, 0, 0, 'ssadasd', '2022-11-29 17:10:16'),
(16, 1, 1, 'feliz', 0, 5, 0, 0, 0, 0, 'ssadasd', '2022-11-29 17:11:29'),
(17, 1, 1, 'feliz', 0, 5, 0, 0, 0, 0, 'ssadasd', '2022-11-29 17:11:59'),
(18, 1, 1, 'feliz', 0, 5, 0, 0, 0, 0, 'ssadasd', '2022-11-29 17:12:36'),
(19, 1, 1, 'feliz', 0, 5, 0, 0, 0, 0, 'ssadasd', '2022-11-29 17:12:58'),
(20, 1, 1, 'feliz', 0, 3, 0, 0, 0, 0, 'asdasda', '2022-11-29 17:15:18'),
(21, 1, 1, 'feliz', 0, 5, 0, 0, 0, 0, 'asdasdg', '2022-11-29 17:16:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`) VALUES
(1, 'Dayana', 'Cruz Garza', 'yaya@gmail.com', '2ff8798276dab2199c3bbf8fbf232d36c9680ac5');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `emociones`
--
ALTER TABLE `emociones`
  ADD PRIMARY KEY (`id_emocion`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `emocion_desagrado`
--
ALTER TABLE `emocion_desagrado`
  ADD PRIMARY KEY (`id_emc_desagrado`),
  ADD KEY `id_emocion` (`id_emocion`);

--
-- Indices de la tabla `emocion_felicidad`
--
ALTER TABLE `emocion_felicidad`
  ADD PRIMARY KEY (`id_emc_felicidad`),
  ADD KEY `id_emocion` (`id_emocion`);

--
-- Indices de la tabla `emocion_ira`
--
ALTER TABLE `emocion_ira`
  ADD PRIMARY KEY (`id_emc_ira`),
  ADD KEY `id_emocion` (`id_emocion`);

--
-- Indices de la tabla `emocion_miedo`
--
ALTER TABLE `emocion_miedo`
  ADD PRIMARY KEY (`id_emc_miedo`),
  ADD KEY `id_emocion` (`id_emocion`);

--
-- Indices de la tabla `emocion_sorpresa`
--
ALTER TABLE `emocion_sorpresa`
  ADD PRIMARY KEY (`id_emc_sorpresa`),
  ADD KEY `id_emocion` (`id_emocion`);

--
-- Indices de la tabla `emocion_tristeza`
--
ALTER TABLE `emocion_tristeza`
  ADD PRIMARY KEY (`id_emc_tristeza`),
  ADD KEY `id_emocion` (`id_emocion`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `log_feels`
--
ALTER TABLE `log_feels`
  ADD PRIMARY KEY (`id_log`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `emocion_desagrado`
--
ALTER TABLE `emocion_desagrado`
  MODIFY `id_emc_desagrado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `emocion_felicidad`
--
ALTER TABLE `emocion_felicidad`
  MODIFY `id_emc_felicidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `emocion_ira`
--
ALTER TABLE `emocion_ira`
  MODIFY `id_emc_ira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `emocion_miedo`
--
ALTER TABLE `emocion_miedo`
  MODIFY `id_emc_miedo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `emocion_sorpresa`
--
ALTER TABLE `emocion_sorpresa`
  MODIFY `id_emc_sorpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `emocion_tristeza`
--
ALTER TABLE `emocion_tristeza`
  MODIFY `id_emc_tristeza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de la tabla `log_feels`
--
ALTER TABLE `log_feels`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `emocion_desagrado`
--
ALTER TABLE `emocion_desagrado`
  ADD CONSTRAINT `emocion_desagrado_ibfk_1` FOREIGN KEY (`id_emocion`) REFERENCES `emociones` (`id_emocion`);

--
-- Filtros para la tabla `emocion_felicidad`
--
ALTER TABLE `emocion_felicidad`
  ADD CONSTRAINT `emocion_felicidad_ibfk_1` FOREIGN KEY (`id_emocion`) REFERENCES `emociones` (`id_emocion`);

--
-- Filtros para la tabla `emocion_ira`
--
ALTER TABLE `emocion_ira`
  ADD CONSTRAINT `emocion_ira_ibfk_1` FOREIGN KEY (`id_emocion`) REFERENCES `emociones` (`id_emocion`);

--
-- Filtros para la tabla `emocion_miedo`
--
ALTER TABLE `emocion_miedo`
  ADD CONSTRAINT `emocion_miedo_ibfk_1` FOREIGN KEY (`id_emocion`) REFERENCES `emociones` (`id_emocion`);

--
-- Filtros para la tabla `emocion_sorpresa`
--
ALTER TABLE `emocion_sorpresa`
  ADD CONSTRAINT `emocion_sorpresa_ibfk_1` FOREIGN KEY (`id_emocion`) REFERENCES `emociones` (`id_emocion`);

--
-- Filtros para la tabla `emocion_tristeza`
--
ALTER TABLE `emocion_tristeza`
  ADD CONSTRAINT `emocion_tristeza_ibfk_1` FOREIGN KEY (`id_emocion`) REFERENCES `emociones` (`id_emocion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
