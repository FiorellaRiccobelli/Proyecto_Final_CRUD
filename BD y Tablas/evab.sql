-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2021 a las 02:38:38
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_area` int(3) NOT NULL,
  `nombre_area` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_area`, `nombre_area`) VALUES
(1, 'Marketing y Publicidad'),
(2, 'Ventas y Comercialización'),
(3, 'Administración'),
(4, 'Atención al cliente'),
(5, 'Mantenimiento, Instalación y Traslado'),
(6, 'Capacitación y Asesoramiento'),
(7, 'Servicio Integral'),
(8, 'Innovación y Diseño de productos'),
(9, 'Recursos Humanos'),
(10, 'Higiene y Seguridad'),
(11, 'Finanzas'),
(12, 'Calidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int(3) NOT NULL,
  `nombre_articulo` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `disponibilidad` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `nombre_articulo`, `tipo`, `marca`, `precio`, `disponibilidad`) VALUES
(1, 'Ecógrafo', 'Diagnóstico', 'Mindray', 10000000, 'stock'),
(2, 'Resonador ', 'Diagnóstico', 'Hitachi', 2000000000, 'stock'),
(3, 'Mamógrafo', 'Diagnóstico', 'Fugifilm', 50000000, 'vendido'),
(4, 'Tomógrafo', 'Diagnóstico', 'Hitachi', 70000000, 'stock'),
(5, 'Oxímetro', 'Diagnóstico', 'Coronet', 3450, 'stock'),
(6, 'Respirador', 'Tratamiento', 'Mindray', 30000000, 'vendido'),
(7, 'Bomba de infusión', 'Tratamiento', 'Mindray', 115000, 'stock'),
(8, 'Monitor multiparamétrico', 'Diagnóstico', 'Mindray', 500000000, 'stock'),
(9, 'Equipo de RX', 'Diagnóstico', 'Phillips', 50000000, 'vendido'),
(10, 'Desfibrilador', 'Tratamiento', 'Mindray', 10000000, 'stock'),
(11, 'Máquina de Anestesia', 'Tratamiento', 'Mindray', 20000000, 'stock'),
(12, 'Electrobisturí', 'Tratamiento', 'CEC', 825000, 'Stock'),
(13, 'Ondas de choque', 'Tratamiento', 'CEC', 684431, 'vendido'),
(14, 'Equipo de electroporación', 'Tratamiento', 'CEC', 59690, 'vendido'),
(15, 'Equipo de magnetoterapia', 'Tratamiento', 'CEC', 38600, 'stock'),
(17, 'Aspirador quirúrgico', 'Tratamiento', 'CEC', 325000, 'Stock');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales`
--

CREATE TABLE `profesionales` (
  `id_profesional` int(3) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `dni` int(9) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `especialidad` varchar(30) NOT NULL,
  `area` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesionales`
--

INSERT INTO `profesionales` (`id_profesional`, `nombre`, `apellido`, `dni`, `titulo`, `especialidad`, `area`) VALUES
(1, 'Juan', 'Riveros', 28123654, 'Bioingeniería', 'Diagnóstico por imagen', 6),
(2, 'Jimena', 'Zarabia', 31096675, 'Administración de Empresas', 'Management', 3),
(3, 'Jose', 'velez', 34269854, 'Lic. en Psicología', 'Contrataciones y despidos', 9),
(4, 'Paula', 'Mandariaga', 41369852, 'Bioingeniería', 'Mantenimiento preventivo', 5),
(5, 'Pedro', 'Perez', 33698521, 'Lic. en comunicaciones', 'Servicio al cliente', 4),
(6, 'Mariana', 'Lopez', 32698547, 'Bioingeniería', 'Desarrollo de nuevos productos', 8),
(7, 'Abril', 'Sanchez', 42369854, 'Relaciones públicas', 'Publicidad', 1),
(8, 'Marti', 'Juliani', 36125896, 'Administración de empresas', 'Ventas', 2),
(9, 'Omar', 'Diaz', 36985471, 'Bioingeniería', 'Instrumentación', 7),
(10, 'Guadalupe', 'Perez', 32145698, 'Bioingeniería', 'Gestión de calidad', 12),
(11, 'Paulina', 'Lopez', 31026678, 'Bioingeniería', 'Higiene y Seguridad', 10),
(12, 'Jimena', 'Ruiz', 31096175, 'Contador público', 'Administración', 11),
(13, 'Jorge', 'Silveira', 17123456, 'Ingeniería Electrónica', 'Gestión de Calidad', 12),
(15, 'Xamira', 'Godoy', 33336789, 'Lic. en Psicología', 'Contrataciones y despidos', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(3) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `contraseña` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `contraseña`) VALUES
(1, 'Prueba', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD PRIMARY KEY (`id_profesional`),
  ADD KEY `area` (`area`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_area` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  MODIFY `id_profesional` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD CONSTRAINT `profesionales_ibfk_1` FOREIGN KEY (`area`) REFERENCES `areas` (`id_area`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
