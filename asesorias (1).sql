-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2018 a las 22:57:03
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asesorias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `matricula` varchar(9) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido_paterno` varchar(15) NOT NULL,
  `apellido_materno` varchar(15) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `id_grupo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`matricula`, `nombre`, `apellido_paterno`, `apellido_materno`, `carrera`, `id_grupo`) VALUES
('015015963', 'Rivas', 'Rvas', 'Bonilla', 'Sistemas Computacionales', 'S123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesoria`
--

CREATE TABLE `asesoria` (
  `id_asesoria` int(11) NOT NULL,
  `materia` varchar(40) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `dia` varchar(15) DEFAULT NULL,
  `aula` varchar(30) DEFAULT NULL,
  `id_maestro` int(11) DEFAULT NULL,
  `carrera` varchar(45) NOT NULL,
  `cupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asesoria`
--

INSERT INTO `asesoria` (`id_asesoria`, `materia`, `hora`, `dia`, `aula`, `id_maestro`, `carrera`, `cupo`) VALUES
(2, 'Álgebra Lineal', '12:00:00', 'Martes', 'C203', 1, 'Sistemas Computacionales', 25),
(3, 'Cálculo Integral', '01:40:00', 'Jueves', 'N203', 1, 'Negocios Internacionales', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`) VALUES
('S123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `id_maestro` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido_paterno` varchar(15) DEFAULT NULL,
  `apellido_materno` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`id_maestro`, `nombre`, `apellido_paterno`, `apellido_materno`) VALUES
(1, 'Adela ', 'Becerra', 'Chávez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrar`
--

CREATE TABLE `registrar` (
  `id_registro` int(11) NOT NULL,
  `matricula_alumno` varchar(9) DEFAULT NULL,
  `id_asesoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrar`
--

INSERT INTO `registrar` (`id_registro`, `matricula_alumno`, `id_asesoria`) VALUES
(1, '015015963', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` tinyint(1) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'administrador'),
(2, 'profesor'),
(3, 'alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tipo_usuario` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Usuario`, `password`, `tipo_usuario`) VALUES
(1, 'Daniel', '54321', 1),
(7, 'Sergio', '12345', 2),
(8, 'Rivas', '12345', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `asesoria`
--
ALTER TABLE `asesoria`
  ADD PRIMARY KEY (`id_asesoria`),
  ADD KEY `id_maestro` (`id_maestro`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id_maestro`);

--
-- Indices de la tabla `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `matricula_alumno` (`matricula_alumno`),
  ADD KEY `id_asesoria` (`id_asesoria`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_usuario` (`tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesoria`
--
ALTER TABLE `asesoria`
  MODIFY `id_asesoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registrar`
--
ALTER TABLE `registrar`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`);

--
-- Filtros para la tabla `asesoria`
--
ALTER TABLE `asesoria`
  ADD CONSTRAINT `asesoria_ibfk_1` FOREIGN KEY (`id_maestro`) REFERENCES `maestro` (`id_maestro`);

--
-- Filtros para la tabla `registrar`
--
ALTER TABLE `registrar`
  ADD CONSTRAINT `registrar_ibfk_1` FOREIGN KEY (`matricula_alumno`) REFERENCES `alumno` (`matricula`),
  ADD CONSTRAINT `registrar_ibfk_2` FOREIGN KEY (`id_asesoria`) REFERENCES `asesoria` (`id_asesoria`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
