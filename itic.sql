-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-10-2022 a las 23:13:02
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_news`
--

DROP TABLE IF EXISTS `admin_news`;
CREATE TABLE IF NOT EXISTS `admin_news` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin_news`
--

INSERT INTO `admin_news` (`id`, `user_id`, `status`, `content`, `name`, `img`, `content2`) VALUES
(1, 3, '1', 'content', 'asdsad', 'user.png', 'xd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_info`
--

DROP TABLE IF EXISTS `app_info`;
CREATE TABLE IF NOT EXISTS `app_info` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `footer` varchar(255) NOT NULL,
  `aboutus` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `app_info`
--

INSERT INTO `app_info` (`id`, `nombre`, `img`, `description`, `footer`, `aboutus`) VALUES
(1, 'proectoxddd', '2205242_college_course_degree_education_university_icon.png', 'pag de proyecto', 'copyrycisaidjaidajids', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

DROP TABLE IF EXISTS `carrera`;
CREATE TABLE IF NOT EXISTS `carrera` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(255) NOT NULL,
  `coste_incrip` int(11) NOT NULL,
  `coste_semes` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `carrera`, `coste_incrip`, `coste_semes`) VALUES
(1, 'informatica', 30, 40),
(2, 'administracion', 30, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cod_act`
--

DROP TABLE IF EXISTS `cod_act`;
CREATE TABLE IF NOT EXISTS `cod_act` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `status` int(255) NOT NULL,
  `code` int(255) DEFAULT NULL,
  `type` int(255) NOT NULL DEFAULT '2',
  `carerra` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cod_act`
--

INSERT INTO `cod_act` (`id`, `status`, `code`, `type`, `carerra`) VALUES
(36, 1, 67, 1, 0),
(37, 1, 37, 3, NULL),
(38, 1, 38, 1, NULL),
(39, 1, 39, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `color` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `active_slider` varchar(255) NOT NULL,
  `color_gradient` varchar(255) NOT NULL,
  `color_gradient2` varchar(255) NOT NULL,
  `color_gradient3` varchar(255) NOT NULL,
  `coin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`id`, `color`, `header`, `content`, `active`, `active_slider`, `color_gradient`, `color_gradient2`, `color_gradient3`, `coin`) VALUES
(1, '#5761e5', 'Bienvenido!', 'Bienvenido al sistema estudiantil ... mucho texto asi que ZZZ', 'on', 'on', '#484ddb', '#6a51e6', '#8593d5', 'bs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `passadmin` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL DEFAULT '1',
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'user.png',
  `lastname` varchar(255) NOT NULL,
  `cedula` int(255) NOT NULL,
  `carrera` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `email`, `passadmin`, `user`, `rol`, `password`, `img`, `lastname`, `cedula`, `carrera`) VALUES
(3, 'admin@admin.com', 'admin', 'admin', '1', 'admin', 'meme.png', 'admion', 0, 0),
(4, 'user@user.com', '', 'user@user.com', '2', 'Contraseña0', 'pet4.png', 'nick', 0, 0),
(32, 'profesor@gmail.com', '', 'profesor@gmail.com', '3', 'Profesor0', 'user2.png', 'nick', 9989, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `materia` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `materia`) VALUES
(1, 'programacion'),
(2, 'matematica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestres`
--

DROP TABLE IF EXISTS `semestres`;
CREATE TABLE IF NOT EXISTS `semestres` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `num` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `semestres`
--

INSERT INTO `semestres` (`id`, `num`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(255) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id_slider`, `img`, `price`, `description`, `title`) VALUES
(1, '3.jpg', '34', 'pone descripcionessss', 'the title of the captions'),
(2, '2.jpg', '34', 'description', 'title');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
