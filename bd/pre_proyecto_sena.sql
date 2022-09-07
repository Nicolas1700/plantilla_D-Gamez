-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2022 a las 03:23:47
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pre_proyecto_sena`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `reg_usuario` (IN `nombre` VARCHAR(25), `apellido` VARCHAR(25), `celular` INT(11), `correo` VARCHAR(50), `contrasena` VARCHAR(50))   BEGIN

INSERT INTO `usuario`(`nombre`, `apellido`, `celular`, `correo`, `contrasena`)
VALUES (nombre, apellido, celular, correo, contrasena);

END$$

--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `hash_pas` (`cor` VARCHAR(50)) RETURNS VARCHAR(65) CHARSET utf8mb4  BEGIN
DECLARE has varchar (65);
SELECT contrasena INTO has FROM usuario WHERE correo = cor ;
RETURN has;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `nombreUsuario` (`cor` VARCHAR(50), `con` VARCHAR(12)) RETURNS VARCHAR(50) CHARSET utf8mb4  BEGIN
DECLARE nom varchar (50);
SELECT nombre INTO nom FROM usuario WHERE correo = cor AND contrasena = con;
RETURN nom;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(15) NOT NULL,
  `talla` varchar(11) NOT NULL,
  `existencias` int(11) NOT NULL,
  `color` varchar(11) NOT NULL,
  `tipo_jean` varchar(11) NOT NULL,
  `precio` decimal(50,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `talla`, `existencias`, `color`, `tipo_jean`, `precio`) VALUES
(1, 'Jean', '30', 100, 'gris', 'slim', '45000'),
(2, 'Jean', '32', 200, 'blanco', 'slim', '45000'),
(3, 'Jean oscuro', '29', 150, 'negro', 'bootcut', '46000'),
(4, 'Jean', '34', 10, 'blanco', 'Flare', '46000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `celular` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `celular`, `correo`, `contrasena`) VALUES
(15, 'Nicolas', 'Parada Cuervo', 2147483647, 'a@a.a', 'aaaa'),
(16, 'Nicolas', 'Parada Cuervo', 2147483647, 'a@a.a', 'asas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
