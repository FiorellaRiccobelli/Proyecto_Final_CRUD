-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2021 a las 02:38:20
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD PRIMARY KEY (`id_profesional`),
  ADD KEY `area` (`area`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  MODIFY `id_profesional` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
