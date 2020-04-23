-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: database
-- Tiempo de generación: 23-04-2020 a las 21:17:54
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
(30, 'Portatil DELL', 4, 230000, 'computadoras', 'fotos/dell.jpg', 'Portatil dell 1TB disco duro 6 GB de ram Procesador intel core i5'),
(31, 'Teclado Dragon', 2, 8000, 'accesorios', 'fotos/descarga.jpg', 'Teclado Reddragon'),
(32, 'Monitor', 3, 250000, 'accesorios', 'fotos/dos-monitores.jpg', 'Monitores dobles'),
(33, 'Disco Duro', 10, 65000, 'accesorios', 'fotos/HD_externo.webp', 'Disco duro externo 3 TB'),
(34, 'Disco Duro', 5, 100000, 'partes', 'fotos/HD1.jpg', 'Disco duro 6 TB toshiba'),
(35, 'Disco Duro', 4, 30000, 'partes', 'fotos/HD2.jpg', 'Disco duro 1TB'),
(36, 'Portatil', 3, 320000, 'computadoras', 'fotos/hp.jpg', 'Portatil HP 256 SSD 8GB ram intel core i7'),
(37, 'Impresora', 15, 120000, 'accesorios', 'fotos/impresora.png', 'Impresora epson economica'),
(38, 'Portatil', 15, 450000, 'computadoras', 'fotos/lenovo.jpg', 'Lenovo disco 2TB ram 12GB intel core i7'),
(39, 'Monitor', 20, 100000, 'accesorios', 'fotos/monitor.jpg', 'monitor dell 15 pulgadas'),
(40, 'Monitor', 50, 98000, 'accesorios', 'fotos/monitor2.jpg', 'mobitor ttl 12 pulgadas'),
(41, 'Mouse', 30, 6500, 'accesorios', 'fotos/mouse.jpg', 'Mouse escritorio lector optico'),
(42, 'Mouse', 45, 8500, 'accesorios', 'fotos/mouse_gamer.png', 'Mouse gaming'),
(43, 'Mouse', 40, 9800, 'accesorios', 'fotos/mouse2.png', 'mouse gaming red dragon'),
(44, 'PC', 7, 650000, 'computadoras', 'fotos/pc1.jpg', 'pc gaming 500 SSD 12GB ram interl core i7 nvidia 4GB'),
(45, 'PC', 9, 500, 'computadoras', 'fotos/pc2.png', 'pc 256GB 8GB Ram intel core i5 nvidia 2GB'),
(46, 'PC', 12, 320000, 'computadoras', 'fotos/pc3.jpg', 'pc gaming 1TB HDD 6 Ram intel core i3 nvidia 1GB'),
(47, 'RAM', 125, 12500, 'partes', 'fotos/raam4.jpg', 'Ram 4GB DDR4'),
(48, 'RAM', 40, 15840, 'partes', 'fotos/ram.jpg', 'Ram DDR4 6GB'),
(49, 'RAM', 5, 30000, 'partes', 'fotos/ram2.jpg', 'Ram 8GB DDR3'),
(50, 'RAM', 20, 28000, 'partes', 'fotos/ram3.jpg', 'Ram HyperX 12GB DDR4'),
(51, 'SD', 26, 6500, 'accesorios', 'fotos/sd.jpg', 'SD 256GB'),
(52, 'Camaras', 5, 350000, 'accesorios', 'fotos/seguridad.jpg', 'Camaras de seguridad set 8 piezas'),
(54, 'Teclado', 15, 15000, 'accesorios', 'fotos/teclado3.jpg', 'Teclado tornasol');

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
(14, 'stephanie', 'Nova', 'nova2015', 'stephanienova97@hotmail.com', 'U'),
(18, 'rosibel', 'navarrete', '123456', 'rosi@hotmail.com', 'U');

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
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
