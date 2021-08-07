-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2021 a las 02:38:12
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
