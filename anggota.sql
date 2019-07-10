-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 10:50 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isnu`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `dusun_desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `pt_univ` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `username`, `password`, `nama`, `no_ktp`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `dusun_desa`, `kecamatan`, `kota`, `no_telepon`, `jenjang`, `jurusan`, `pt_univ`, `img`) VALUES
(2, 'alfiantaufani', '81dc9bdb52d04dc20036dbd8313ed055', 'Ahmad Alfian Taufani, S.Kom M. Kom', '78028687830', 'Laki-Laki', 'Jombang', '2019-12-31', 'Dukuhklopo', 'Peterongan', 'Jombang', '081383167850', 'S1', 'Teknik Informatika', 'Universitas KH. A Wahab Hasbulloh', '10072019102855aku.jpg'),
(5, 'yasir', '81dc9bdb52d04dc20036dbd8313ed055', 'M. Yasyir Arafat. Si', '78025576897830', 'Laki-Laki', 'Gersik', '2000-07-02', 'Medaeng', 'Jombang', 'Jombang', '08138313784', 'S1', 'Sistem Informasi', 'Universitas KH. A Wahab Hasbulloh', '04072019073709person_3.jpg'),
(14, 'andini', '81dc9bdb52d04dc20036dbd8313ed055', 'Andini Dwi Andiana, S.Pdi', '7733628863', 'Perempuan', 'Jombang', '2019-12-31', 'Monoayu', 'Peterongan', 'Jombang', '081383167850', 'S2', 'Pendidikan Agama Islam', 'Universitas KH. A Wahab Hasbulloh', '04072019080707person_1.jpg'),
(15, 'alin', '81dc9bdb52d04dc20036dbd8313ed055', 'Alin Aliya', '29075757498', 'Perempuan', 'Tuban', '1997-12-29', 'Mbalong Ombo', 'Megaluh', 'Jombang', '08138313223', 'S2', 'Ekonomi Syariah', 'Universitas Negeri Islam Surabaya', '04072019081124person_1.jpg'),
(19, 'muuslim', '81dc9bdb52d04dc20036dbd8313ed055', 'Muslimin, SE', '7393792739', 'Laki-Laki', 'Jombang', '1997-04-20', 'Mungol', 'Jombang', 'Jombang', '081383137821', 'S1', 'Menenjemen', 'Universitas Diponegoro', '05072019075304avatar.png'),
(22, 'budi', '81dc9bdb52d04dc20036dbd8313ed055', 'Budi Wicaksono, SE', '29075757498', 'Laki-Laki', 'Majalengka', '1996-10-11', 'Mbalong Biru', 'Diwek', 'Jombang', '081383137826', 'S1', 'Ekonimi', 'STIE Dewantaara', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
