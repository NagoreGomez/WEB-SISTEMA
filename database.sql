-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Oct 14, 2022 at 10:19 AM
-- Server version: 10.8.2-MariaDB-1:10.8.2+maria~focal
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `erabiltzaileak`
--

CREATE TABLE `erabiltzaileak` (
  `NAN` varchar(9) NOT NULL,
  `Izen abizenak` varchar(50) NOT NULL,
  `Telefonoa` int(9) NOT NULL,
  `Jaiotze data` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pasahitza` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `erabiltzaileak`
--

INSERT INTO `erabiltzaileak` (`NAN`, `Izen abizenak`, `Telefonoa`, `Jaiotze data`, `Email`, `Pasahitza`) VALUES
('12345678A', 'Nagore Gomez', 698876543, '2002-11-05', 'a@gmail.com', '123456'),
('12345678B', 'Jonas Martinez', 634768598, '2002-04-14', 'b@gmail.com', '98765'),
('12345678C', 'Sergio Martin', 665289605, '2002-06-24', 'c@gmail.com', 'Contra0');

-- --------------------------------------------------------

--
-- Table structure for table `ibilbideak`
--

CREATE TABLE `ibilbideak` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Ibilbidearen izena` varchar(50) NOT NULL,
  `Zailtasuna` varchar(50) NOT NULL,
  `Distantzia (m)` int(11) NOT NULL,
  `Desnibela (m)` int(11) NOT NULL,
  `Link-a` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ibilbideak`
--

INSERT INTO `ibilbideak` (`Id`, `Email`, `Ibilbidearen izena`, `Zailtasuna`, `Distantzia (m)`, `Desnibela (m)`, `Link-a`) VALUES
(1, 'a@gmail.com', 'Bilbo-Ganekogorta', 'Ertaina', 1400, 900, 'linka'),
(2, 'a@gmail.com', 'Monte Perdido-Goriz', 'Zaila', 32000, 2600, 'https://github.com/anderra57/2maila'),
(3, 'b@gmail.com', 'Barakaldo-Eretza', 'Zaila', 1800, 800, 'linka'),
(4, 'c@gmail.com', 'Trapaga-Peñas Negras', 'Zaila', 1000, 1900, 'linkc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `erabiltzaileak`
--
ALTER TABLE `erabiltzaileak`
  ADD PRIMARY KEY (`NAN`);

--
-- Indexes for table `ibilbideak`
--
ALTER TABLE `ibilbideak`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ibilbideak`
--
ALTER TABLE `ibilbideak`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
