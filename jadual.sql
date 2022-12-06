-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 10:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadual`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarguru`
--

CREATE TABLE `daftarguru` (
  `ndp` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jantina` varchar(9) NOT NULL,
  `kelas` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarguru`
--

INSERT INTO `daftarguru` (`ndp`, `nama`, `jantina`, `kelas`) VALUES
(23220001, 'Rosnidaini Binti Shudin', 'Perempuan', 'tpp'),
(23220002, 'Tg Muzlina Hanim Binti Tg Semara', 'Perempuan', 'tpp'),
(23220003, 'Nor Dahiyah Binti Ghazali', 'Perempuan', 'tpp');

-- --------------------------------------------------------

--
-- Table structure for table `daftarpelajar`
--

CREATE TABLE `daftarpelajar` (
  `ndp` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jantina` varchar(9) NOT NULL,
  `kelas` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarpelajar`
--

INSERT INTO `daftarpelajar` (`ndp`, `nama`, `jantina`, `kelas`) VALUES
(23220052, 'Muhammad Adli Hasif Bin Bahri', 'Lelaki', 'tkr'),
(23221082, 'Zul Afiq Bin Zukifli', 'Lelaki', 'tpm'),
(23221084, 'Aina Atikah Binti Mohd Azhar', 'Perempuan', 'tpp'),
(23221091, 'Muhammad Aqif Anas Aisy Binti Mohd Azhar', 'Lelaki', 'cadd');

-- --------------------------------------------------------

--
-- Table structure for table `loginguru`
--

CREATE TABLE `loginguru` (
  `ndp` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginguru`
--

INSERT INTO `loginguru` (`ndp`) VALUES
(23220001),
(23220002),
(23220003);

-- --------------------------------------------------------

--
-- Table structure for table `loginpelajar`
--

CREATE TABLE `loginpelajar` (
  `ndp` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginpelajar`
--

INSERT INTO `loginpelajar` (`ndp`) VALUES
(23220052),
(23221082),
(23221084),
(23221091);

-- --------------------------------------------------------

--
-- Table structure for table `mc`
--

CREATE TABLE `mc` (
  `tarikh1` timestamp NULL DEFAULT NULL,
  `tarikh2` timestamp NULL DEFAULT NULL,
  `hari` int(1) DEFAULT NULL,
  `sebab` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc`
--

INSERT INTO `mc` (`tarikh1`, `tarikh2`, `hari`, `sebab`) VALUES
('0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 'sakit'),
('0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 'kerana positive covid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarguru`
--
ALTER TABLE `daftarguru`
  ADD PRIMARY KEY (`ndp`);

--
-- Indexes for table `daftarpelajar`
--
ALTER TABLE `daftarpelajar`
  ADD PRIMARY KEY (`ndp`);

--
-- Indexes for table `loginguru`
--
ALTER TABLE `loginguru`
  ADD PRIMARY KEY (`ndp`);

--
-- Indexes for table `loginpelajar`
--
ALTER TABLE `loginpelajar`
  ADD PRIMARY KEY (`ndp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
