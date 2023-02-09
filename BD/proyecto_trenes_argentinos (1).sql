-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2023 a las 16:49:41
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

--
-- Volcado de datos para la tabla `asignacion_roles`
--

INSERT INTO `asignacion_roles` (`id_asignacion`, `id_usuario`, `id_rol`) VALUES
(0, 5, 1),
(1, 4, 1);

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

--
-- Volcado de datos para la tabla `manuales`
--

INSERT INTO `manuales` (`id_manuales`, `carpeta`, `manuales`, `url`) VALUES
(15, 'Carpeta 1', '', ''),
(17, 'Carpeta 2', '', ''),
(18, 'Carpeta 3', '', ''),
(19, 'Carpeta 4', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planos_bosques`
--

CREATE TABLE `planos_bosques` (
  `id_plano_bosques` int(10) NOT NULL,
  `nombre_bosques` varchar(250) NOT NULL,
  `descripcion_bosques` varchar(250) NOT NULL,
  `categoria_bosques` varchar(250) NOT NULL,
  `fecha_bosques` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `plano_bosques` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `planos_bosques`
--

INSERT INTO `planos_bosques` (`id_plano_bosques`, `nombre_bosques`, `descripcion_bosques`, `categoria_bosques`, `fecha_bosques`, `plano_bosques`) VALUES
(1, 'prueba1', 'Acá iría una breve descripción del contenido del archivo', 'Categoría 1', '2022-12-06 03:00:00', '60a8c415119ed804d03aa788fa206cad_prueba1.pdf'),
(2, 'prueba1', 'Acá iría una breve descripción del contenido del archivo', 'Categoría 1', '2022-12-06 03:00:00', '9cf021e439c597ad7a796b400911a299_prueba1.pdf');

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

--
-- Volcado de datos para la tabla `planos_laplata`
--

INSERT INTO `planos_laplata` (`id_plano_laPlata`, `nombre_laPlata`, `descripcion_laPlata`, `categoria_laPlata`, `fecha_laPlata`, `plano_laPlata`) VALUES
(2, 'prueba1', 'Esto es una prueba de funcionamiento', 'Categoria1', '2022-12-06 03:00:00', 'e747e314ccff595124b158948bbb1bb6_prueba1.pdf');

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

--
-- Volcado de datos para la tabla `planos_quilmes`
--

INSERT INTO `planos_quilmes` (`id_plano_quilmes`, `nombre_quilmes`, `descripcion_quilmes`, `categoria_quilmes`, `fecha_quilmes`, `plano_quilmes`) VALUES
(1, 'prueba1', 'Aca iria una breve descripcion de lo que contiene el plano', 'Categoria1', '2022-12-06 03:00:00', 'bace176a1329d21e130eab9d2501186a_prueba1.pdf'),
(2, 'prueba1', 'Aqui va una breve descripcion de lo que tiene el archivo', 'Categoria1', '2022-12-07 03:00:00', '9ec0d5d4f156aeeab85e67c3b693e371_prueba1.pdf'),
(4, 'prueba2', 'Aqui va una breve descripcion de lo que tiene el archivo', 'Categoria2', '2022-12-07 03:00:00', 'b113c450c57b28e539b72985c2110179_prueba2.pdf');

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

--
-- Volcado de datos para la tabla `plan_de_frecuencias`
--

INSERT INTO `plan_de_frecuencias` (`id_plan_de_frecuencia`, `nombre_paso_nivel`, `frecuencia_asc`, `frecuencia_desc`, `señal_asc`, `señal_desc`, `tension_asc`, `tension_desc`, `filtro`, `ubicacion`, `plan_de_frecuencia`) VALUES
(28, 'ter', 'ter', 'ter', 'ter', '', '', '', '', '', ''),
(29, 'ertr', '', '', '', '', '', '', '', 'ter', ''),
(30, 'rtytrytr', '', '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', '', 'ewr', '');

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
(1, 'admi_general'),
(2, 'admi_personal'),
(3, 'mecanico');

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
  `contraseña` int(6) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `legajo`, `apellido`, `nombre`, `alias`, `dni`, `fecha_de_nacimiento`, `direccion`, `celular`, `mail`, `puesto`, `habilitaciones`, `supervisor_cargo`, `fecha_de_ingreso_a_la_empresa`, `contraseña`, `imagen`) VALUES
(4, 1, '1', '1', '1', 0, '0000-00-00', '', 0, '', '1', '', '1', '0000-00-00', 1, ''),
(5, 2, 'Bloise', 'Cecilia', 'Ceci', 0, '0000-00-00', '', 0, '', 'Pasante', '', 'Walter Ramirez', '0000-00-00', 1, 'img_a32c7ea83c3fb4d257304a3ff2a28939.jpg'),
(6, 4, '4', '4', '4', 0, '0000-00-00', '', 0, '', '4', '', '4', '0000-00-00', 4, 'img_8dbd44fc85a7ded68b19d6bd61e21a8e.jpg'),
(7, 5, '4', '4', '4', 0, '0000-00-00', '', 0, '', '4', '', '4', '0000-00-00', 5, 'img_f405078f389d130c6b39acc3432d9e0e.jpg'),
(8, 2922, 'Bloise', 'Claudio', '', 0, '0000-00-00', '', 0, '', 'Pasante', '', 'Walter Ramirez', '0000-00-00', 123, 'img_56abddf3c581e7f2c1aef5b496d58e9a.jpg'),
(9, 12, '21', '21', '', 0, '0000-00-00', '', 0, '', '21', '', '21', '0000-00-00', 12, 'img_dc90a216df1248db9661053f22a35c7a.jpg');

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
  ADD PRIMARY KEY (`id_usuario`);

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
  MODIFY `id_plano_bosques` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `planos_laplata`
--
ALTER TABLE `planos_laplata`
  MODIFY `id_plano_laPlata` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `planos_quilmes`
--
ALTER TABLE `planos_quilmes`
  MODIFY `id_plano_quilmes` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `plan_de_frecuencias`
--
ALTER TABLE `plan_de_frecuencias`
  MODIFY `id_plan_de_frecuencia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion_roles`
--
ALTER TABLE `asignacion_roles`
  ADD CONSTRAINT `asignacion_roles_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_roles_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registros_pan_años_tu`
--
ALTER TABLE `registros_pan_años_tu`
  ADD CONSTRAINT `registros_pan_años_tu_ibfk_1` FOREIGN KEY (`id_pan_tu`) REFERENCES `registros_pan_tu` (`id_pan_tu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
