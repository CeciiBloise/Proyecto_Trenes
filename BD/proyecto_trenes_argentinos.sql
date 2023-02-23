-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2023 a las 02:03:56
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_trenes_argentinos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_roles`
--

CREATE TABLE `asignacion_roles` (
  `id_asignacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manuales`
--

CREATE TABLE `manuales` (
  `id_manuales` int(11) NOT NULL,
  `carpeta` varchar(250) NOT NULL,
  `manuales` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planos_bosques`
--

CREATE TABLE `planos_bosques` (
  `id_plano_bosques` int(10) NOT NULL,
  `nombre_bosques` varchar(250) NOT NULL,
  `descripcion_bosques` varchar(250) NOT NULL,
  `categoria_bosques` varchar(250) NOT NULL,
  `plano_bosques` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planos_laplata`
--

CREATE TABLE `planos_laplata` (
  `id_plano_laPlata` int(10) NOT NULL,
  `nombre_laPlata` varchar(250) NOT NULL,
  `descripcion_laPlata` varchar(250) NOT NULL,
  `categoria_laPlata` varchar(250) NOT NULL,
  `fecha_laPlata` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `plano_laPlata` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planos_quilmes`
--

CREATE TABLE `planos_quilmes` (
  `id_plano_quilmes` int(10) NOT NULL,
  `nombre_quilmes` varchar(250) NOT NULL,
  `descripcion_quilmes` varchar(250) NOT NULL,
  `categoria_quilmes` varchar(250) NOT NULL,
  `fecha_quilmes` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `plano_quilmes` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_de_frecuencias`
--

CREATE TABLE `plan_de_frecuencias` (
  `id_plan_de_frecuencia` int(10) NOT NULL,
  `nombre_paso_nivel` varchar(250) NOT NULL,
  `frecuencia_asc` varchar(250) NOT NULL,
  `frecuencia_desc` varchar(250) NOT NULL,
  `señal_asc` varchar(250) NOT NULL,
  `señal_desc` varchar(250) NOT NULL,
  `tension_asc` varchar(250) NOT NULL,
  `tension_desc` varchar(250) NOT NULL,
  `filtro` varchar(250) NOT NULL,
  `ubicacion` varchar(250) NOT NULL,
  `plan_de_frecuencia` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_pan_años_tu`
--

CREATE TABLE `registros_pan_años_tu` (
  `id_pan_año_tu` int(11) NOT NULL,
  `id_pan_tu` int(11) NOT NULL,
  `pan_año_tu` varchar(250) NOT NULL,
  `registros_pan_tu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_pan_tu`
--

CREATE TABLE `registros_pan_tu` (
  `id_pan_tu` int(11) NOT NULL,
  `pan_tu` varchar(250) NOT NULL,
  `pan_año_tu` varchar(250) NOT NULL,
  `registros_pan_tu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registros_pan_tu`
--

INSERT INTO `registros_pan_tu` (`id_pan_tu`, `pan_tu`, `pan_año_tu`, `registros_pan_tu`) VALUES
(30, 'Diag 80', '', ''),
(31, 'Calle 44', '', ''),
(32, 'Calle 52', '', ''),
(33, 'Diag 80', '2010', ''),
(34, 'Calle 44', '', ''),
(35, 'Calle 52', '', ''),
(36, '', '2005', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador General'),
(2, 'Administrador Personal'),
(3, 'Mecanico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `legajo` int(6) NOT NULL,
  `apellido` text NOT NULL,
  `nombre` text NOT NULL,
  `alias` varchar(250) NOT NULL,
  `dni` int(8) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `celular` int(20) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `puesto` varchar(250) NOT NULL,
  `habilitaciones` varchar(400) NOT NULL,
  `supervisor_cargo` varchar(250) NOT NULL,
  `fecha_de_ingreso_a_la_empresa` date NOT NULL,
  `id_rol` int(11) NOT NULL,
  `contraseña` int(6) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `legajo`, `apellido`, `nombre`, `alias`, `dni`, `fecha_de_nacimiento`, `direccion`, `celular`, `mail`, `puesto`, `habilitaciones`, `supervisor_cargo`, `fecha_de_ingreso_a_la_empresa`, `id_rol`, `contraseña`, `imagen`) VALUES
(18, 29023, 'Bloise', 'María Cecilia', 'Ceci', 38325405, '1994-08-14', 'San Martín', 2147483647, 'cecilia.bloise@trenesargentinos.gob.ar', 'Pasante', '', 'Walter Ramirez', '2022-09-01', 1, 123, 'img_8409e85c6045225e74be0786af0d39c1.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion_roles`
--
ALTER TABLE `asignacion_roles`
  ADD PRIMARY KEY (`id_asignacion`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `manuales`
--
ALTER TABLE `manuales`
  ADD PRIMARY KEY (`id_manuales`);

--
-- Indices de la tabla `planos_bosques`
--
ALTER TABLE `planos_bosques`
  ADD PRIMARY KEY (`id_plano_bosques`);

--
-- Indices de la tabla `planos_laplata`
--
ALTER TABLE `planos_laplata`
  ADD PRIMARY KEY (`id_plano_laPlata`);

--
-- Indices de la tabla `planos_quilmes`
--
ALTER TABLE `planos_quilmes`
  ADD PRIMARY KEY (`id_plano_quilmes`);

--
-- Indices de la tabla `plan_de_frecuencias`
--
ALTER TABLE `plan_de_frecuencias`
  ADD PRIMARY KEY (`id_plan_de_frecuencia`);

--
-- Indices de la tabla `registros_pan_años_tu`
--
ALTER TABLE `registros_pan_años_tu`
  ADD PRIMARY KEY (`id_pan_año_tu`),
  ADD KEY `id_pan_tu` (`id_pan_tu`);

--
-- Indices de la tabla `registros_pan_tu`
--
ALTER TABLE `registros_pan_tu`
  ADD PRIMARY KEY (`id_pan_tu`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `manuales`
--
ALTER TABLE `manuales`
  MODIFY `id_manuales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `planos_bosques`
--
ALTER TABLE `planos_bosques`
  MODIFY `id_plano_bosques` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `planos_laplata`
--
ALTER TABLE `planos_laplata`
  MODIFY `id_plano_laPlata` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `planos_quilmes`
--
ALTER TABLE `planos_quilmes`
  MODIFY `id_plano_quilmes` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `plan_de_frecuencias`
--
ALTER TABLE `plan_de_frecuencias`
  MODIFY `id_plan_de_frecuencia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `registros_pan_años_tu`
--
ALTER TABLE `registros_pan_años_tu`
  MODIFY `id_pan_año_tu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registros_pan_tu`
--
ALTER TABLE `registros_pan_tu`
  MODIFY `id_pan_tu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registros_pan_años_tu`
--
ALTER TABLE `registros_pan_años_tu`
  ADD CONSTRAINT `registros_pan_años_tu_ibfk_1` FOREIGN KEY (`id_pan_tu`) REFERENCES `registros_pan_tu` (`id_pan_tu`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
