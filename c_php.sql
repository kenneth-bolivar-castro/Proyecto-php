-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: database
-- Tiempo de generación: 12-04-2020 a las 20:13:35
-- Versión del servidor: 5.7.29
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `c_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `precio` int(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `nombre`, `cantidad`, `precio`, `estado`, `foto`, `descripcion`) VALUES
(23, 'papa', 3, 500, 'accesorios', 'fotos/Code.jpeg', 'papa rica'),
(24, 'Teclado', 2, 5000, 'accesorios', 'fotos/descarga.jpg', 'Teclado Reddragon'),
(25, 'teclado', 2, 300, 'accesorios', 'fotos/depu.jpg', 'ufff'),
(27, 'arbol', 40, 4000, 'accesorios', 'fotos/images.jpg', 'aaaa'),
(28, 'bb', 1, 1200, 'partes', 'fotos/descarga (1).png', 'dfg'),
(29, 'com', 4, 400, 'computadoras', 'fotos/qr_img.png', 'dfsd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre`, `apellido`, `clave`, `correo`, `tipo`) VALUES
(1, 'Ariel', 'Nova', '123456', 'arielnovan@hotmail.com', 'A'),
(3, 'Andres', 'Hernandez', '123456', 'chiri@gmail.com', 'U'),
(14, 'stephanie', 'Nova', 'nova2015', 'stephanienova97@hotmail.com', 'U');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
