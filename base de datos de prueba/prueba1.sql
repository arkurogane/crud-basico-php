-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2017 a las 03:58:58
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba1`
--
CREATE DATABASE `prueba1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prueba1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numeros`
--

CREATE TABLE IF NOT EXISTS `numeros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uno` varchar(40) NOT NULL,
  `dos` varchar(40) NOT NULL,
  `tres` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `numeros`
--

INSERT INTO `numeros` (`id`, `uno`, `dos`, `tres`) VALUES
(1, 'uno', 'dos', 'tres'),
(2, '1', '2', '3'),
(3, 'I', 'II', 'III'),
(4, 'one', 'two', 'three'),
(5, 'eins', 'zwei', 'drei'),
(6, 'un', 'deux', 'trois');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
