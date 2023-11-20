-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 00:42:16
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_futcalendar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_anuncio`
--

CREATE TABLE `tb_evento` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
ALTER TABLE `tb_evento`
  ADD PRIMARY KEY (`id`);

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_retornar_eventos`()
Select * from tb_evento$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_search_event`(IN `titulo` VARCHAR(300))
Select * from tb_evento where titulo like tb_evento.titulo$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_create_event`(IN `_titulo_param` VARCHAR(300), IN `_fecha_param` DATE)
insert into tb_evento (titulo,fecha) values (titulo_param,fecha_param)$$
DELIMITER ;

CREATE TABLE `tb_anuncio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tb_anuncio`
--

INSERT INTO `tb_anuncio` (`id`, `titulo`, `descripcion`, `fecha`) VALUES
(1, 'Mi primer anuncio', 'Este es el contenido de mi primer anuncio', '2023-11-12 16:30:24'),
(4, 'Prueba', 'Nuevo anuncio', '2023-11-12 17:16:10'),
(5, 'otro anuncio', 'vamos equipo', '2023-11-12 17:36:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `nombre_usuario` varchar(30) NOT NULL,
  `contrasenia` varchar(30) NOT NULL,
  `ultimo_ingreso` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `eliminado` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`nombre_usuario`, `contrasenia`, `ultimo_ingreso`, `eliminado`) VALUES
('1234', '1234', '2023-11-05 23:52:57', b'0'),
('brayan', '1234', '2023-11-06 00:17:09', b'0'),
('carlos', '1234', '2023-11-06 00:05:37', b'0'),
('usuario1', 'contra1', '2023-11-05 23:10:42', b'0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_anuncio`
--
ALTER TABLE `tb_anuncio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`nombre_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_anuncio`
--
ALTER TABLE `tb_anuncio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

-- ---------------------------------------------------------------

DELIMITER $$
--
-- Procedimientos
--
CREATE PROCEDURE `sp_create_advertisement` (IN `_title` VARCHAR(100), IN `_description` VARCHAR(500))   BEGIN
	INSERT INTO tb_anuncio (titulo, descripcion)
    VALUES (_title, _description);
END$$

CREATE PROCEDURE `sp_create_user` (IN `_nombre_usuario` VARCHAR(30), IN `_contrasenia` VARCHAR(30))   INSERT INTO `tb_usuario`  
	(nombre_usuario, contrasenia, ultimo_ingreso, eliminado)
VALUES
	(_nombre_usuario, _contrasenia, CURRENT_TIMESTAMP(), b'0')$$

CREATE PROCEDURE `sp_get_all_advertisement` ()   SELECT
	A.id AS "id",
    A.titulo AS "title",
    A.descripcion AS "description",
    A.fecha AS "date"
FROM tb_anuncio A$$

CREATE PROCEDURE `sp_get_all_user` ()   SELECT *
FROM tb_usuario$$

CREATE PROCEDURE `sp_get_user` (IN `_nombre_usuario` VARCHAR(30))   BEGIN
	SELECT * 
    FROM `tb_usuario` U
    WHERE U.nombre_usuario = _nombre_usuario;
END$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
