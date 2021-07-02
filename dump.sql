-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Dec 05, 2019 at 02:12 PM
-- Server version: 8.0.18
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL,
  `SURNAME` varchar(20) DEFAULT NULL,
  `FATHERNAME` varchar(20) DEFAULT NULL,
  `MOBILENUMBER` varchar(10) DEFAULT NULL,
  `BIRTHDAY` date DEFAULT NULL,
  `GRADE` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`ID`, `NAME`, `SURNAME`, `FATHERNAME`, `MOBILENUMBER`, `BIRTHDAY`, `GRADE`) VALUES
(1, 'Antonios', 'Chamarousios', 'Eratosthenis', '6945774747', '2019-12-03', '6.00'),
(2, 'Giannhs', 'Karamanos', 'George', '6912345678', '2019-12-10', '8.00'),
(3, 'Tolis', 'Zacharopoulos', 'Ntinos', '6978455516', '2019-12-10', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `Teachers`
--

CREATE TABLE `Teachers` (
  `ID` varchar(10) NOT NULL,
  `NAME` varchar(10) DEFAULT NULL,
  `SURNAME` varchar(10) DEFAULT NULL,
  `USERNAME` varchar(15) DEFAULT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Teachers`
--

INSERT INTO `Teachers` (`ID`, `NAME`, `SURNAME`, `USERNAME`, `PASSWORD`, `EMAIL`) VALUES
('', 'Filos', 'touAdmin', 'adminfriend', 'filosadmin', 'emailadmin@fake.com'),
('1', 'Jim', 'ThePlayer', 'admin', 'admin', 'emailadmin@fake.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
