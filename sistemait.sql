-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-03-2019 a las 14:07:29
-- Versión del servidor: 5.7.25-0ubuntu0.18.04.2
-- Versión de PHP: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemait`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `seriale` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `memoria` varchar(255) NOT NULL,
  `discod` varchar(255) NOT NULL,
  `monitor` varchar(255) NOT NULL DEFAULT '',
  `serialmon` varchar(255) NOT NULL DEFAULT '',
  `serialmous` varchar(255) NOT NULL DEFAULT '',
  `serialtec` varchar(255) NOT NULL DEFAULT '',
  `extras` varchar(255) NOT NULL DEFAULT '',
  `fechai` date NOT NULL,
  `fechaf` date NOT NULL,
  `asignado` varchar(255) NOT NULL DEFAULT '',
  `cedula` varchar(255) NOT NULL DEFAULT '',
  `departamento` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `equipo`, `seriale`, `marca`, `memoria`, `discod`, `monitor`, `serialmon`, `serialmous`, `serialtec`, `extras`, `fechai`, `fechaf`, `asignado`, `cedula`, `departamento`) VALUES
(4, 'laptop', 'prueba2', 'lenovo', '2gb', '500gb', 'lg 15', '', '', '', 'sadasd', '2019-03-14', '1969-12-31', '', '', ''),
(5, 'laptop', 'prueba2', 'lenovo', '2gb', '500gb', 'lg 15', '', '', '', 'sadasd', '2019-03-14', '1969-12-31', 'test  56', '272568522', 'el que sea'),
(6, 'Laptop', 'prueba3', 'lenovo', '4gb', '500gb', '', '1', '1', '1', 'bh', '2019-03-19', '1969-12-31', '', '', ''),
(7, 'Laptop', 'Asusprueba7', 'asus', '4gb', '500gb', '', '', '', '', '', '2019-03-13', '1969-12-31', '', '', ''),
(9, 'destop', 'desprueba', 'lenovo', '2gb', '500gb', 'Lg 22', 'lgprueba3', 'mouseprueba2', 'nprueba', 'extreas', '2019-03-13', '1969-12-31', '', '', ''),
(10, 'Laptop', 'tesasig1', 'asus', '4gb', '500gb', '', '', '', '', '', '2019-03-06', '2019-06-09', 'jhon doe', 'V123456', 'administracion'),
(11, 'Laptop', 'tesasig2', 'asus', '77gb', '550gb78', 'qwe', 'xdtyt', 'zxcrgfb', 'zxvgth', 'rtrgref', '2019-03-07', '2019-09-07', 'jhon doe2 ', 'V857824', 'administracion'),
(12, 'Laptop', 'testasign3', 'asus', '4gb', '500gb', '', '', '', '', '', '2019-02-25', '1969-12-31', 'jhon doe', 'v6854828', 'i+d'),
(13, 'desktop', 'tesdestop', 'lenovo', '4gb', '500gb', 'Lg 22', 'lgpruebades', 'mousepruebades', 'tecprueba5', 'extra', '2019-03-13', '1969-12-31', 'jhon doe', 'v789456', 'administracion'),
(14, 'Laptop', 'sinasigtest', 'asus', '4gb', '400gb', '', '', '', '', '', '2019-03-01', '2019-01-09', 'trtrh', '6tb', 'bgbyt'),
(15, 'desktop', 'Asuspruebasan', 'lenovo', '4gb', '500gb', '', '', '', '', '', '2019-02-27', '1969-12-31', '', '', ''),
(16, 'Laptop', 'conasigntesf', 'asus', '4gb', '500gb', '', '', '', '', '', '2019-02-28', '1969-12-31', 'jhon doe', 'x741852', 'Other'),
(17, 'desktop', 'destotesf', 'asus', '4gb', '250gb', '', '', '', '', '', '2019-02-28', '1969-12-31', 'jhon doe', 'c741852', 'asdr'),
(18, 'laptop', 'sadasfdwqdewfc', 'asus', '4gb', '400gb', '', '', '', '', '', '2019-03-29', '1969-12-31', '', '', ''),
(19, 'laptop 5000', 'asdfwefvfvjtrgkq', 'marca', '16gb', '1000gb', '', '', '', '', '', '2019-01-28', '1969-12-31', '', '', ''),
(21, 'Laptop 9882', 'laptop 9825', 'A349752gvsd', '7gb', '500bg', '', '', '', '', '', '2019-02-24', '2019-08-24', '234ed', '234edcf', 'wqeq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestos`
--

CREATE TABLE `repuestos` (
  `id` int(11) NOT NULL,
  `repuesto` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `seriale` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `repuestos`
--

INSERT INTO `repuestos` (`id`, `repuesto`, `descripcion`, `seriale`, `marca`) VALUES
(2, 'memoria', '4gb', 'asussinasig', 'asu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tusuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `cedula`, `correo`, `usuario`, `password`, `tusuario`) VALUES
(2, 'jhon doe edi', 'V-1478522', 'jhondoe2@prueba.com', 'JHDOE2', '25f9e794323b453885f5181f1b624d0b', 'administrador'),
(5, 'sadsatest', 'V-81851511', 'test3@test.com', 'TEST003', 'e10adc3949ba59abbe56e057f20f883e', 'administrador'),
(6, 'test 4', 'V-056625', 'test004@tes.com', 'TEST004', 'ead9403c7a7cd8467642761640540ac9d04e0f67', 'administrador'),
(7, 'testq', 'V-5871252', 'test5@test.com', 'TEST005', 'a346bc80408d9b2a5063fd1bddb20e2d5586ec30', 'administrador'),
(8, 'tst632', 'V-2104152', 'test@tesrt.com', 'TEST0006', 'b181f1f2f013a708b09ba6df972d8ba2', 'administrador'),
(9, 'Milton admin', 'V-1234567', 'milton@admin.com', 'ADMINPRINC', 'a346bc80408d9b2a5063fd1bddb20e2d5586ec30', 'administrador'),
(11, 'moka isa', 'V-28878278', 'moka@user.com', '1USUARIO', 'a346bc80408d9b2a5063fd1bddb20e2d5586ec30', 'usuario'),
(12, 'milton 3', 'V-25852865', 'admin@prueba.com', 'MILTON300', 'a346bc80408d9b2a5063fd1bddb20e2d5586ec30', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
