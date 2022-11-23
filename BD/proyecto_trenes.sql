-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2022 a las 14:54:21
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
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id_archivo` int(10) NOT NULL,
  `nombre_archivo` varchar(1024) NOT NULL,
  `subestacion` varchar(250) NOT NULL,
  `categoria` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `archivo` longblob NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id_archivo`, `nombre_archivo`, `subestacion`, `categoria`, `descripcion`, `fecha_creacion`, `archivo`, `type`) VALUES
INSERT INTO `archivos` (`id_archivo`, `nombre_archivo`, `subestacion`, `categoria`, `descripcion`, `fecha_creacion`, `archivo`, `type`) VALUES

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_de_pdf`
--

CREATE TABLE `carga_de_pdf` (
  `id_archivo` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `carga_de_pdf`
--
ALTER TABLE `carga_de_pdf`
  ADD PRIMARY KEY (`id_archivo`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id_archivo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `carga_de_pdf`
--
ALTER TABLE `carga_de_pdf`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT;

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