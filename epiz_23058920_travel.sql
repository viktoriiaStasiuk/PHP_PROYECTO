-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql110.byetcluster.com
-- Generation Time: Nov 27, 2018 at 03:05 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_23058920_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `idTour` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `foto` varchar(11) NOT NULL,
  PRIMARY KEY (`idTour`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2147483648 ;

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

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(8) NOT NULL,
  `password` varchar(33) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `password`, `email`, `nombre`, `apellidos`) VALUES
(1, 'usuario', 'f8032d5cae3de20fcec887f395ec9a6a', 'usr@gmail.com', 'Usuario', 'Usuario Usuario'),
(15, 'sara', '127', 'sara@gmail.com', 'sara', 'murcia'),
(22, 'victoria', '319e59bf60230eefbed737f5870f268c7', 'stasiuk@gmail.com', 'Victoria', 'Stasiuk'),
(30, 'name', 'b068931cc450442b63f5b3d276ea4297', 'name@gmail.com', 'Name', 'Surname');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
