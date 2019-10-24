-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2019 a las 15:19:17
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `programacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cp`
--

CREATE TABLE `cp` (
  `ID` int(11) NOT NULL,
  `FECHA` varchar(100) DEFAULT NULL,
  `EDAD` int(5) DEFAULT NULL,
  `GRADO` int(5) DEFAULT NULL,
  `ESTUDIANTE` varchar(255) DEFAULT NULL,
  `ASISTENTES` varchar(255) DEFAULT NULL,
  `MOTIVO` varchar(255) DEFAULT NULL,
  `DESCRIPCION` varchar(255) DEFAULT NULL,
  `COMP_DOCENTE` varchar(255) DEFAULT NULL,
  `COMP_PADRES` varchar(255) DEFAULT NULL,
  `CONCLUSIONES` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cp`
--

INSERT INTO `cp` (`ID`, `FECHA`, `EDAD`, `GRADO`, `ESTUDIANTE`, `ASISTENTES`, `MOTIVO`, `DESCRIPCION`, `COMP_DOCENTE`, `COMP_PADRES`, `CONCLUSIONES`) VALUES
(4, '2019-03-13', 15, 2, '35', 'NN', '', 'NN', 'NN', 'NN', 'NN'),
(6, '2018-12-12', 19, 6, 'JESUS PABLO', 'TU MAMA', 'NO TRABAJA', 'ES ENANO', 'AYUDAR A QUE MEJORE', 'apoyarlo ', 'compromiso para mejorar su actitud en el colegio'),
(7, '2019-03-22', 19, 11, 'Diego Fernando Salazar', 'nn', 'nn', 'nn', 'nnn', 'nn', 'nn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hs`
--

CREATE TABLE `hs` (
  `ID` int(11) NOT NULL,
  `ESTUDIANTE` varchar(255) DEFAULT NULL,
  `TIEMPO` varchar(255) DEFAULT NULL,
  `RELACIONES` varchar(255) DEFAULT NULL,
  `COMPORTAMIENTO` varchar(255) DEFAULT NULL,
  `EVENTOS` varchar(255) DEFAULT NULL,
  `PROYECTO` varchar(255) DEFAULT NULL,
  `SALUD` varchar(255) DEFAULT NULL,
  `PSICOLOGIA` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hs`
--

INSERT INTO `hs` (`ID`, `ESTUDIANTE`, `TIEMPO`, `RELACIONES`, `COMPORTAMIENTO`, `EVENTOS`, `PROYECTO`, `SALUD`, `PSICOLOGIA`) VALUES
(2, 'Jhon Haider Cano', '22', '22', '22', '22', '22', '22', '22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_pedagogico`
--

CREATE TABLE `perfil_pedagogico` (
  `ID` int(11) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `EDAD` int(5) DEFAULT NULL,
  `FECHA` varchar(100) DEFAULT NULL,
  `SOCIOAFECTIVA` varchar(255) DEFAULT NULL,
  `COGNITIVA` varchar(255) DEFAULT NULL,
  `COMUNICACION` varchar(255) DEFAULT NULL,
  `MORAL` varchar(255) DEFAULT NULL,
  `FORTALEZAS` varchar(255) DEFAULT NULL,
  `DEBILIDADES` varchar(255) DEFAULT NULL,
  `BARRERAS` varchar(255) DEFAULT NULL,
  `ESTRATEGIAS` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil_pedagogico`
--

INSERT INTO `perfil_pedagogico` (`ID`, `cedula`, `NOMBRE`, `EDAD`, `FECHA`, `SOCIOAFECTIVA`, `COGNITIVA`, `COMUNICACION`, `MORAL`, `FORTALEZAS`, `DEBILIDADES`, `BARRERAS`, `ESTRATEGIAS`) VALUES
(40, '1143878656', 'Juan Pablo Galeano Salguero', 19, '2019-01-07', 'Saludable', 'Saludable', 'Correcta', 'Correcta', 'Bien buena gente', 'Bien melosky', 'Ninguna', 'No necesita, prueba texto'),
(41, '98622', 'Jhon Haider Cano', 35, '1999-06-15', 'nn', 'nn', 'nn', 'nnn', 'nn', 'nn', 'nn', 'nn'),
(43, '98765', 'JESUS PABLO', 19, '2018-02-12', 'MAL', 'PEOR', 'LE FALTA', 'ATEO', 'BREVE', 'MALAS', 'NO SABE', 'NINGUNA'),
(44, '768', 'Diego Fernando Salazar', 20, '1998-09-15', 'nn', 'nn', 'nn', 'nn', 'nn', 'nn', 'nn', 'nn'),
(45, '123456', 'jesus', 13, '2011-12-09', 'bien', 'jesus', 'bien', 'excelente', 'aprendio rapido el input date', 'no hizo nada', 'todas', 'todas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sp`
--

CREATE TABLE `sp` (
  `ID` int(11) NOT NULL,
  `FECHA` varchar(100) DEFAULT NULL,
  `ESTUDIANTE` varchar(255) DEFAULT NULL,
  `CIUDAD_ORIGEN` varchar(255) DEFAULT NULL,
  `CURSO` varchar(255) DEFAULT NULL,
  `REPITENCIA` varchar(255) DEFAULT NULL,
  `O_NOMBRE` varchar(255) DEFAULT NULL,
  `O_EDAD` varchar(255) DEFAULT NULL,
  `O_ESCOLARIZACION` varchar(255) DEFAULT NULL,
  `O_OCUPACION` varchar(255) DEFAULT NULL,
  `O_DIRECCION` varchar(255) DEFAULT NULL,
  `O_TEL` varchar(255) DEFAULT NULL,
  `P_NOMBRE` varchar(255) DEFAULT NULL,
  `P_EDAD` varchar(255) DEFAULT NULL,
  `P_ESCOLARIZACION` varchar(255) DEFAULT NULL,
  `P_OCUPACION` varchar(255) DEFAULT NULL,
  `P_DIRECCION` varchar(255) DEFAULT NULL,
  `P_TEL` varchar(255) DEFAULT NULL,
  `M_NOMBRE` varchar(255) DEFAULT NULL,
  `M_EDAD` varchar(255) DEFAULT NULL,
  `M_ESCOLARIZACION` varchar(255) DEFAULT NULL,
  `M_OCUPACION` varchar(255) DEFAULT NULL,
  `M_DIRECCION` varchar(255) DEFAULT NULL,
  `M_TEL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sp`
--

INSERT INTO `sp` (`ID`, `FECHA`, `ESTUDIANTE`, `CIUDAD_ORIGEN`, `CURSO`, `REPITENCIA`, `O_NOMBRE`, `O_EDAD`, `O_ESCOLARIZACION`, `O_OCUPACION`, `O_DIRECCION`, `O_TEL`, `P_NOMBRE`, `P_EDAD`, `P_ESCOLARIZACION`, `P_OCUPACION`, `P_DIRECCION`, `P_TEL`, `M_NOMBRE`, `M_EDAD`, `M_ESCOLARIZACION`, `M_OCUPACION`, `M_DIRECCION`, `M_TEL`) VALUES
(4, '2019-03-20', 'Juan Pablo Galeano Salguero', 'Cali', 'n', 'n', 'n', '', 'n', 'n', '', 'n', 'n', 'n', 'n', 'n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipo_usuario` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `tipo_usuario`) VALUES
(1, 'juan.galeano', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'administrador'),
(2, 'juan.galeano2', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'administrador'),
(3, 'juan.galeano3', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'administrador'),
(4, 'juan.galeano5', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'administrador'),
(5, 'jesus.rivera', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'administrador'),
(6, 'jhon.haiden', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 'administrador'),
(7, 'jhonatan', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cp`
--
ALTER TABLE `cp`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `hs`
--
ALTER TABLE `hs`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `perfil_pedagogico`
--
ALTER TABLE `perfil_pedagogico`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `sp`
--
ALTER TABLE `sp`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cp`
--
ALTER TABLE `cp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `hs`
--
ALTER TABLE `hs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `perfil_pedagogico`
--
ALTER TABLE `perfil_pedagogico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `sp`
--
ALTER TABLE `sp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
