-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2018 at 08:09 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `idTour` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `foto` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`idTour`, `nombre`, `descripcion`, `fecha_inicio`, `fecha_fin`, `foto`) VALUES
(5, 'Prague Jewish Quarter Tour', 'https://go.sygic.com/travel/trip?id=5ad069fc0d16f', '2018-07-01', '2018-07-01', '1.jpg'),
(5820, 'Sculptures by David Černý', 'https://go.sygic.com/travel/trip?id=5820b3c4e8438', '2018-04-08', '2018-04-08', 'sc.jpg'),
(52693, 'Full Day Sightseeing Tour of Prague', 'https://go.sygic.com/travel/trip?id=52693a0e0fcdb', '2018-04-16', '2018-04-16', 'tercera.jpg'),
(5269424, 'Half-day Tour of Prague', 'https://go.sygic.com/travel/trip?id=5269424d71860', '2018-04-25', '2018-04-25', 'short.jpg'),
(526947996, 'Short Trip to Prague', 'https://go.sygic.com/travel/trip?id=526947996fc35', '2018-04-17', '2018-04-17', 'cinco.jpg'),
(2147483647, '3 Day Trip to Prague', 'https://go.sygic.com/travel/trip?id=4e8194a73ee6e', '2018-04-03', '2018-04-05', 'seis.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(8) NOT NULL,
  `password` varchar(33) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `password`, `email`, `nombre`, `apellidos`) VALUES
(1, 'usuario', 'f8032d5cae3de20fcec887f395ec9a6a', 'usr@gmail.com', 'Usuario', 'Usuario Usuario'),
(15, 'sara', '127', 'sara@gmail.com', 'sara', 'murcia'),
(22, 'victoria', '319e59bf60230eefbed737f5870f268c7', 'stasiuk@gmail.com', 'Victoria', 'Stasiuk'),
(30, 'name', 'b068931cc450442b63f5b3d276ea4297', 'name@gmail.com', 'Name', 'Surname');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`idTour`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `idTour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
