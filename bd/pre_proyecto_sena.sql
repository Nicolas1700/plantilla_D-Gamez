-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2022 a las 05:55:05
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
CREATE DEFINER=`root`@`localhost` FUNCTION `nombreUsuario` (`cor` VARCHAR(50), `con` VARCHAR(12)) RETURNS VARCHAR(50) CHARSET utf8mb4  BEGIN
DECLARE nom varchar (50);
SELECT nombre INTO nom FROM usuario WHERE correo = cor AND contrasena = con;
RETURN nom;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Jean 1', 42000, './img/exposicion_de_jeans.jpg'),
(2, 'Jean 2', 45000, './img/exposicion_de_jeans.jpg'),
(3, 'Jean 3', 43000, './img/exposicion_de_jeans.jpg'),
(4, 'Jean 4', 42000, './img/exposicion_de_jeans.jpg');

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
-- Indices de la tabla `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
