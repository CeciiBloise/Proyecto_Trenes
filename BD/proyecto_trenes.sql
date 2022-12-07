-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2022 a las 15:18:41
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_trenes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_de_usuarios`
--

CREATE TABLE `carga_de_usuarios` (
  `legajo` int(6) NOT NULL,
  `apellido` text NOT NULL,
  `nombre` text NOT NULL,
  `dni` int(8) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `celular` int(20) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `puesto` varchar(250) NOT NULL,
  `habilitaciones` varchar(400) NOT NULL,
  `supervisor_cargo` varchar(250) NOT NULL,
  `fecha_de_ingreso_a_la_empresa` date NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `contraseña` int(6) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carga_de_usuarios`
--

INSERT INTO `carga_de_usuarios` (`legajo`, `apellido`, `nombre`, `dni`, `fecha_de_nacimiento`, `direccion`, `celular`, `mail`, `puesto`, `habilitaciones`, `supervisor_cargo`, `fecha_de_ingreso_a_la_empresa`, `id_cargo`, `contraseña`, `imagen`) VALUES
(1, '1', '1', 0, '0000-00-00', '1', 0, '1@1', '', '', '', '0000-00-00', 3, 3, ''),
(2, '2', '2', 2, '2222-02-02', '2', 2, '2@2', '2', '2', '2', '0022-02-02', 2, 2, ''),
(1212, '', '', 0, '0000-00-00', '', 0, '', '', '', '', '0000-00-00', 3, 123, ''),
(12345, 'Perez', 'Fulanito1 ', 12345678, '1111-01-01', 'Avenida Siempreviva 742', 0, 'perez.fulanito@correo.com', 'Pasante', 'Habilitación de soldadura', 'Fulanito2', '2222-02-02', 1, 123, 'img_739a848eb6896d6c1e1a2da6396fd7cb.jpg'),
(98765, 'Lopez', 'Fulanito2', 98745612, '2222-02-02', 'Avenida Siempreviva 742', 22222222, 'lopez.fulanito2@correo.com', 'Pasante', 'Carnet de conducir, trabajo en altura', 'Fulanito3', '3333-03-03', 2, 123, 'img_d3df744c0cf1501ef497b420ce01b76c.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `descripcion`) VALUES
(1, 'admi_general'),
(2, 'admi_personal'),
(3, 'mecanico');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `nivel_señal` varchar(250) NOT NULL,
  `nivel_tension` varchar(250) NOT NULL,
  `filtro` varchar(250) NOT NULL,
  `ubicacion` varchar(250) NOT NULL,
  `plan_de_frecuencia` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plan_de_frecuencias`
--

INSERT INTO `plan_de_frecuencias` (`id_plan_de_frecuencia`, `nombre_paso_nivel`, `frecuencia_asc`, `frecuencia_desc`, `nivel_señal`, `nivel_tension`, `filtro`, `ubicacion`, `plan_de_frecuencia`) VALUES
(5, 'Quilmes', '', '', 'F', 'G', '', 'F', ''),
(11, 'XXX', 'X', 'Y', 'A', 'B', 'Si', 'F', ''),
(12, 'EEE', 'T', 'R', 'F', 'N', 'No', '', ''),
(13, 'XXX', 'X', 'Y', 'A', 'B', 'Si', 'F', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carga_de_usuarios`
--
ALTER TABLE `carga_de_usuarios`
  ADD PRIMARY KEY (`legajo`),
  ADD KEY `id_rol` (`id_cargo`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carga_de_usuarios`
--
ALTER TABLE `carga_de_usuarios`
  MODIFY `legajo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id_plan_de_frecuencia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carga_de_usuarios`
--
ALTER TABLE `carga_de_usuarios`
  ADD CONSTRAINT `carga_de_usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `permisos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
