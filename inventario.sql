-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2021 a las 18:36:21
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo_movimiento`
--

CREATE TABLE `articulo_movimiento` (
  `id` int(11) NOT NULL,
  `id_mov` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(8) NOT NULL,
  `valor` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_producto`
--

CREATE TABLE `datos_producto` (
  `id` int(11) NOT NULL,
  `codigo_producto` int(15) NOT NULL,
  `id_linea` int(11) NOT NULL,
  `id_sublinea` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `costo_ultimo` int(7) NOT NULL,
  `stock` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `id` int(11) NOT NULL,
  `codigo` int(15) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `linea`
--

INSERT INTO `linea` (`id`, `codigo`, `descripcion`) VALUES
(1, 111, 'prueba'),
(2, 222, 'prueba'),
(3, 1, 'prueba1'),
(4, 3232, 'aaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `id` int(11) NOT NULL,
  `tipo_mov` int(2) NOT NULL,
  `cedula_mov` int(15) NOT NULL,
  `nombre_mov` varchar(20) NOT NULL,
  `fecha_mov` date NOT NULL,
  `valor_total_mov` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id`, `tipo_mov`, `cedula_mov`, `nombre_mov`, `fecha_mov`, `valor_total_mov`) VALUES
(1, 1, 1212, 'asaas', '2021-08-31', 121212);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sublinea`
--

CREATE TABLE `sublinea` (
  `id` int(11) NOT NULL,
  `codigo` int(15) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sublinea`
--

INSERT INTO `sublinea` (`id`, `codigo`, `descripcion`) VALUES
(2, 1234, 'sublinea');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo_movimiento`
--
ALTER TABLE `articulo_movimiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mov` (`id_mov`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `datos_producto`
--
ALTER TABLE `datos_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datos_producto_ibfk_1` (`id_linea`),
  ADD KEY `datos_producto_ibfk_2` (`id_sublinea`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sublinea`
--
ALTER TABLE `sublinea`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo_movimiento`
--
ALTER TABLE `articulo_movimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_producto`
--
ALTER TABLE `datos_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sublinea`
--
ALTER TABLE `sublinea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo_movimiento`
--
ALTER TABLE `articulo_movimiento`
  ADD CONSTRAINT `articulo_movimiento_ibfk_1` FOREIGN KEY (`id_mov`) REFERENCES `movimientos` (`id`),
  ADD CONSTRAINT `articulo_movimiento_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `datos_producto` (`id`);

--
-- Filtros para la tabla `datos_producto`
--
ALTER TABLE `datos_producto`
  ADD CONSTRAINT `datos_producto_ibfk_1` FOREIGN KEY (`id_linea`) REFERENCES `linea` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_producto_ibfk_2` FOREIGN KEY (`id_sublinea`) REFERENCES `sublinea` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
