-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2020 at 06:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gemblak`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `status`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE `responden` (
  `nik` varchar(50) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` varchar(222) NOT NULL,
  `jenis_kelamin` varchar(23) NOT NULL,
  `pekerjaan` varchar(23) NOT NULL,
  `hasil_kuisioner` int(4) DEFAULT NULL,
  `hasil_akhir` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`nik`, `nama`, `alamat`, `jenis_kelamin`, `pekerjaan`, `hasil_kuisioner`, `hasil_akhir`) VALUES
('3522122305980005', 'maya', 'Bojonegoro', 'Perempuan', 'Mahasiswa', 1, '43.75'),
('3522122405980001', 'andi', 'Bojonegoro', 'Perempuan', 'Pns', 1, '43.75'),
('3522122405980004', 'winata', 'Bojonegoro', 'Laki-Laki', 'Mahasiswa', 1, '43.75'),
('3522122405980005', 'ANA', 'sumberrejo', 'Perempuan', 'swasta', 1, '43.75'),
('3522122405980006', 'rendy', 'bojonegoro', 'Laki-Laki', 'Mahasiswa', 1, '43.75'),
('3522122405980008', 'putra', 'bojonegoro', 'Laki-Laki', 'Mahasiswa', 1, '43.75'),
('3522122405980033', 'andri', 'Ngumpak Dalem', 'Laki-Laki', 'lainnya', 1, '43.75');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(10) NOT NULL,
  `pertanyaan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `pertanyaan`) VALUES
(1, 'Bagaimana prosedur pelayanan juru parkir berlangganan yang telah diberikan kepada masyarakat?'),
(2, 'bagaimana tanggung jawab pelayanan juru parkir berlangganan yang telah diberikan kepada masyarakat?'),
(3, 'Bagaimana kesopanan dan keramahan petugas pelayanan juru parkir berlangganan kepada masyarakat?'),
(4, 'Bagaimana keyamanan tempat yang telah diberikan juru parkir berlangganan ?'),
(5, 'Bagaimana keamanan lingkungan yang telah diberikan juru parkir berlangganan kepada masyarakat?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_pertanyaan` int(11) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `nik` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD KEY `username` (`username`),
  ADD KEY `username_3` (`username`);

--
-- Indexes for table `responden`
--
ALTER TABLE `responden`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_pertanyaan`),
  ADD UNIQUE KEY `nik_2` (`nik`),
  ADD KEY `id_alternatif` (`nik`),
  ADD KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD CONSTRAINT `tb_status_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `responden` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
