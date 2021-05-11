-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2021 a las 00:16:59
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `savls`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id_formulario` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `etiqueta` varchar(30) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `estado` bit(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `id_usuario_creacion` int(11) DEFAULT NULL,
  `id_usuario_modificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id_formulario`, `descripcion`, `etiqueta`, `ubicacion`, `estado`, `fecha_creacion`, `fecha_modificacion`, `id_usuario_creacion`, `id_usuario_modificacion`) VALUES
(1, 'formulario administrador', 'aprendiz', '../prueba', b'1', '2021-04-19 16:43:46', '2021-04-19 16:43:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_rol`
--

CREATE TABLE `formulario_rol` (
  `id_formulario_rol` int(11) NOT NULL,
  `estado` bit(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `id_formulario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_usuario_creacion` int(11) DEFAULT NULL,
  `id_usuario_modificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario_rol`
--

INSERT INTO `formulario_rol` (`id_formulario_rol`, `estado`, `fecha_creacion`, `fecha_modificacion`, `id_formulario`, `id_rol`, `id_usuario_creacion`, `id_usuario_modificacion`) VALUES
(1, b'1', '2021-04-19 17:14:24', '2021-04-19 17:14:24', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `genero` enum('F','M') NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `id_usuario_creacion` int(11) DEFAULT NULL,
  `id_usuario_modificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `apellido`, `edad`, `genero`, `estado`, `fecha_creacion`, `fecha_modificacion`, `id_usuario_creacion`, `id_usuario_modificacion`) VALUES
(1, 'Juan ', 'Artunduaga', 15, 'M', 1, '2021-04-19 14:52:44', '2021-04-19 14:53:06', NULL, NULL),
(2, 'Cristian', 'Artunduaga', 18, 'M', 1, '2021-04-19 17:13:38', '2021-04-19 17:13:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `estado` bit(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `id_usuario_creacion` int(11) DEFAULT NULL,
  `id_usuario_modificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `descripcion`, `estado`, `fecha_creacion`, `fecha_modificacion`, `id_usuario_creacion`, `id_usuario_modificacion`) VALUES
(1, 'Administrador', b'1', '2021-04-19 17:13:48', '2021-04-19 17:13:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(150) NOT NULL,
  `fecha_activacion` datetime NOT NULL,
  `fecha_expiracion` datetime NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_usuario_creacion` int(11) DEFAULT NULL,
  `id_usuario_modificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `contrasena`, `fecha_activacion`, `fecha_expiracion`, `estado`, `fecha_creacion`, `fecha_modificacion`, `id_persona`, `id_usuario_creacion`, `id_usuario_modificacion`) VALUES
(1, 'izaan', '$2y$10$G/l6f0OCkbT.T5zs24oRO.ClfTv5RGJe8jMO1jKawvyxi87iWU12y', '2021-04-19 15:58:32', '2021-04-19 23:52:06', 1, '2021-04-19 15:58:32', '2021-04-19 16:52:06', 1, 0, 0),
(2, 'cristian23', '$2y$10$t1yy2NHJVORjleU2NpSihuUHum4c/cfDz4u2j9ZGkVAAjAeaw/U9K', '2021-04-19 17:14:12', '2021-04-19 17:14:12', 1, '2021-04-19 17:14:12', '2021-04-19 17:14:12', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_rol`
--

CREATE TABLE `usuario_rol` (
  `id_usuario_rol` int(11) NOT NULL,
  `estado` bit(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_usuario_creacion` int(11) DEFAULT NULL,
  `id_usuario_modificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_rol`
--

INSERT INTO `usuario_rol` (`id_usuario_rol`, `estado`, `fecha_creacion`, `fecha_modificacion`, `id_rol`, `id_usuario`, `id_usuario_creacion`, `id_usuario_modificacion`) VALUES
(1, b'1', '2021-04-19 17:14:33', '2021-04-19 17:14:33', 1, 1, NULL, NULL),
(2, b'1', '2021-04-19 17:14:42', '2021-04-19 17:14:42', 1, 2, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id_formulario`);

--
-- Indices de la tabla `formulario_rol`
--
ALTER TABLE `formulario_rol`
  ADD PRIMARY KEY (`id_formulario_rol`),
  ADD KEY `fk_formulario_rol_rol_idx` (`id_rol`),
  ADD KEY `fk_formulario_rol_formulario_idx` (`id_formulario`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuario_persona_idx` (`id_persona`);

--
-- Indices de la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD PRIMARY KEY (`id_usuario_rol`),
  ADD KEY `fk_usuario_rol_usuario_idx` (`id_usuario`),
  ADD KEY `fk_usuario_rol_rol_idx` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id_formulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `formulario_rol`
--
ALTER TABLE `formulario_rol`
  MODIFY `id_formulario_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  MODIFY `id_usuario_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `formulario_rol`
--
ALTER TABLE `formulario_rol`
  ADD CONSTRAINT `fk_formulario_rol_formulario` FOREIGN KEY (`id_formulario`) REFERENCES `formulario` (`id_formulario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_formulario_rol_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_persona` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD CONSTRAINT `fk_usuario_rol_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usuario_rol_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
