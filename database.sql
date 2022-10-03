-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 16-09-2020 a las 16:37:17
-- Versión del servidor: 10.5.5-MariaDB-1:10.5.5+maria~focal
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `Erabiltzaileak` (
  `NAN` varchar(9) NOT NULL,
  `Izen abizenak` text NOT NULL,
  `Telefonoa` int(9) NOT NULL,
  `Jaiotze data` date NOT NULL,
  `Email` text NOT NULL,
  `Pasahitza` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `Erabiltzaileak` (`NAN`, `Izen abizenak`,`Telefonoa`,`Jaiotze data`,`Email`) VALUES
('12345678A', 'Nagore Gomez', '698876543','2002-11-05', 'a@gmail.com'),
('12345678B', 'Jonas Martinez','634768598','2002-04-14', 'b@gmail.com'),
('12345678C', 'Sergio Martin','665289605','2002-06-24', 'c@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `Erabiltzaileak`
  ADD PRIMARY KEY (`NAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
