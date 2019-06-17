-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jun 2019 pada 06.08
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isnu_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `dusun_desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `pt_univ` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `no_ktp`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `dusun_desa`, `kecamatan`, `kota`, `no_telepon`, `jenjang`, `jurusan`, `pt_univ`) VALUES
(5, 'qw', 'qw', 'qw', 'qw', '0000-00-00 00:00:00', 'qw', 'qw', 'qw', 'qw', 'qw', 'qw', 'qw'),
(6, 'asd', 'wq', 'wq', 'wq', '0000-00-00 00:00:00', 'wq', 'wq', 'wq', 'wq', 'wq', 'wq', 'wq'),
(7, 's', 's', 's', 's', '0000-00-00 00:00:00', 's', 's', 's', 's', 's', 's', 's'),
(8, 'e', 'e', 'Laki-Laki', 'e', '0000-00-00 00:00:00', 'e', 'e', 'e', 'e', 'e', 'e', 'e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(3, 'adiidx', '9abfd1618c5e505568ede83f1c334746', 'user'),
(4, 'al', '97282b278e5d51866f8e57204e4820e5', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
