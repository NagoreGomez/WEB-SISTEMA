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
  `Izen_abizenak` varchar(50) NOT NULL,
  `Telefonoa` int(9) NOT NULL,
  `Jaiotze_data` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pasahitza` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `erabiltzaileak`
--

INSERT INTO `erabiltzaileak` (`NAN`, `Izen_abizenak`, `Telefonoa`, `Jaiotze_data`, `Email`, `Pasahitza`) VALUES
('12345678A', 'Nagore Gomez', 698876543, '2002-11-05', 'a@gmail.com', '$2y$10$iZf7uxPFmNAJ9oyvbdarM.epJhn80Bx88IWlP.DH.ZkLOxPKq35yu'),
('12345678B', 'Jonas Martinez', 634768598, '2002-04-14', 'b@gmail.com', '$2y$10$4d/.UuVkk6nBaDPr2Is/BOm3TTvkPThAZeCMyHE12ZTgknXWkLpjO');

-- --------------------------------------------------------

--
-- Table structure for table `ibilbideak`
--

CREATE TABLE `ibilbideak` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Ibilbidearen_izena` varchar(50) NOT NULL,
  `Zailtasuna` varchar(50) NOT NULL,
  `Distantzia_m` int(11) NOT NULL,
  `Desnibela_m` int(11) NOT NULL,
  `Link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ibilbideak`
--

INSERT INTO `ibilbideak` (`Id`, `Email`, `Ibilbidearen_izena`, `Zailtasuna`, `Distantzia_m`, `Desnibela_m`, `Link`) VALUES
(1, 'a@gmail.com', 'Bilbo-Ganekogorta', 'Ertaina', 13580, 845, 'https://es.wikiloc.com/rutas-senderismo/la-ruta-clasica-al-ganeko-pagasarri-lapurzulogana-ganekondo-ganekogorta-y-biderdi-22205574'),
(2, 'a@gmail.com', 'Monte Perdido-Goriz', 'Zaila', 8950, 1161, 'https://es.wikiloc.com/rutas-alpinismo/monte-perdido-3355-m-desde-goriz-55472416'),
(3, 'b@gmail.com', 'Errekatxo-Eretza', 'Ertaina', 16410, 956, 'https://es.wikiloc.com/rutas-senderismo/circular-el-regato-eretza-el-regato-67087851'),
(4, 'b@gmail.com', 'Peñas Negras-Pico La Cruz', 'Erraza', 14390, 591, 'https://es.wikiloc.com/rutas-senderismo/6cimas-pena-pastor-675m-alto-de-galdames-713m-pico-mayor-747m-ganeran-822m-gasterantz-801m-pico-la-73578515');

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
