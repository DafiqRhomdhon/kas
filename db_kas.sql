-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 04:10 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasmasuk`
--

CREATE TABLE `kasmasuk` (
  `Kode` varchar(50) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Tgl` date NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Jenis` varchar(15) NOT NULL,
  `Keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasmasuk`
--

INSERT INTO `kasmasuk` (`Kode`, `Keterangan`, `Tgl`, `Jumlah`, `Jenis`, `Keluar`) VALUES
('1', 'kaskelas', '2018-04-23', 39000, 'Masuk', 0),
('1232', 'donatur', '2018-04-27', 2545500, 'Masuk', 0),
('2', 'infaq jum''at', '2018-04-20', 150000, 'Masuk', 0),
('2111', 'beli beton', '2018-04-28', 0, 'Keluar', 1572000),
('2321', 'kas rumah tangga', '2018-04-29', 89000, 'Masuk', 0),
('3', 'kas osis', '2018-04-27', 59000, 'Masuk', 0),
('4', 'kas IT club', '2018-04-26', 34000, 'Masuk', 0),
('5', 'kas paskibra', '2018-04-25', 45000, 'Masuk', 0),
('6', 'bayar besi', '2018-04-21', 0, 'Keluar', 200000),
('7', 'beli semen', '2018-04-26', 0, 'Keluar', 45000),
('8', 'sapu injuk', '2018-04-19', 0, 'Keluar', 12000),
('9', 'pengki', '2018-04-19', 0, 'Keluar', 14000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_pass`, `user_level`) VALUES
(1, 'Dafiq', 'rhomdhon', 'Admin'),
(4, 'Ibu', 'mamah12', 'User'),
(5, 'ayah', 'bapak12', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasmasuk`
--
ALTER TABLE `kasmasuk`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
