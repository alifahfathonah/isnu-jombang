-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 11:07 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

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
(2, 'alfiantaufani', '827ccb0eea8a706c4c34a16891f84e7b', 'Ahmad Alfian Taufani, S.Kom', '2907575777', 'Laki-Laki', 'Jombang', '2000-01-01', '223', '16', 'Jombang', '08138313223', 'S1', 'Informatika', '10', '16072019094722aku.jpg'),
(5, 'M. Yasyir Arafat', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'M. Yasyir Arafat, S.kom', '3525103001000006', 'Laki-Laki', 'Gresik', '2000-01-30', '121', '8', 'Gresik', '081334847589', 'S1', 'Sistem Informasi', '10', '18072019080210IMG_52599.jpg'),
(14, 'andini', '81dc9bdb52d04dc20036dbd8313ed055', 'Andini Dwi Andiana, S. Pdi', '7733628863', 'Perempuan', 'Jombang', '2019-12-31', '78', '6', 'Jombang', '081383167850', 'S2', 'Pendidikan Agama Islam', '10', '04072019080707person_1.jpg'),
(19, 'muuslim', '81dc9bdb52d04dc20036dbd8313ed055', 'Muslimin, SE', '7393792739', 'Laki-Laki', 'Jombang', '1997-04-20', '78', '6', 'Jombang', '081383137821', 'S1', 'Menenjemen', '8', '05072019075304avatar.png'),
(22, 'budi', '81dc9bdb52d04dc20036dbd8313ed055', 'Budi Wicaksono, SE', '29075757498', 'Laki-Laki', 'Majalengka', '1996-10-11', '78', '6', 'Jombang', '081383137826', 'S1', 'Ekonimi', '6', ''),
(25, 'Eskulin', '81dc9bdb52d04dc20036dbd8313ed055', 'Alin Aliya', '00772662', 'Perempuan', 'Tuban', '2000-07-11', '78', '6', 'Tuban', '087665345789', 'S3', 'Keperawatan', '6', '15072019060437IMG-20190626-WA0020.jpg'),
(27, 'angga', '827ccb0eea8a706c4c34a16891f84e7b', 'Angga Dwi Rahmawan', '2907575779', 'Laki-Laki', 'Jombang', '1999-12-31', '78', '6', 'Jombang', '081383167850', 'S1', 'Keperawatan', '6', ''),
(30, 'kirana', '827ccb0eea8a706c4c34a16891f84e7b', 'Candra Kirana, S.Kom', '7393792739', 'Laki-Laki', 'Jombang', '2019-12-31', '78', '6', 'Jombang', '081111167850', 'S1', 'Teknik Informatika', '10', 'avatar.png'),
(36, 'dwi', '827ccb0eea8a706c4c34a16891f84e7b', 'Dwija Indrawan', '29075757498', 'Laki-Laki', 'Gersik', '2010-12-31', '78', '6', 'Jombang', '081383137824', 'S2', 'Ekonomi Syariah', '10', ''),
(37, 'rohman', '827ccb0eea8a706c4c34a16891f84e7b', 'Rohman Hidayat', '7733628863', 'Laki-Laki', 'Gersik', '2002-11-30', '78', '6', 'Jombang', '081383167850', 'S1', 'Keperawatan', '6', ''),
(38, 'dian', '827ccb0eea8a706c4c34a16891f84e7b', 'Dian Kumalasari Eka Putriani', '290757573424', 'Perempuan', 'Salatiga', '1993-02-09', '78', '6', 'Pekalongan', '085662345789', 'S1', 'Agrobisnis Pertanian', '10', ''),
(39, 'sinta', '827ccb0eea8a706c4c34a16891f84e7b', 'Shinta Eka Wahyuni', '2907575779', 'Perempuan', 'Jombang', '1996-08-31', '301', '21', 'Jombang', '081383137824', 'S1', 'Pendidikan Agama Islam', '10', '26072019054258TPQ HB.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `desa` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `id_kecamatan`, `desa`) VALUES
(1, 1, 'Bandar Kedung Mulyo'),
(2, 1, 'Banjar Sari'),
(3, 1, 'Barong Sawahan'),
(4, 1, 'Brangkal '),
(5, 1, 'Brodot'),
(6, 1, 'Gondang Manis'),
(7, 1, 'Karang Dagangan'),
(8, 1, 'Kayen'),
(9, 1, 'Mojokambang'),
(10, 1, 'Pucang Simo'),
(11, 1, 'Tinggar'),
(12, 2, 'Banjaragung'),
(13, 2, 'Bareng'),
(14, 2, 'Jenisgelaran '),
(15, 2, 'Karangan '),
(16, 2, 'Kebondalem'),
(17, 2, 'Mojotengah '),
(18, 2, 'Mundusewu '),
(19, 2, 'Ngampungan '),
(20, 2, 'Nglebak '),
(21, 2, 'Ngrimbi '),
(22, 2, 'Pakel '),
(23, 2, 'Pulosari'),
(24, 2, 'Tebel'),
(25, 3, 'Balong Besuk'),
(26, 3, 'Bandung '),
(27, 3, 'Bendet '),
(28, 3, 'Brambang '),
(29, 3, 'Bulurejo '),
(30, 3, 'Ceweng '),
(31, 3, 'Cukir '),
(32, 3, 'Diwek'),
(33, 3, 'Grogol '),
(34, 3, 'Jatipelem '),
(35, 3, 'Jatirejo '),
(36, 3, 'Kayangan '),
(37, 3, 'Kedawong '),
(38, 3, 'Keras'),
(39, 3, 'Kwaron '),
(40, 3, 'Ngudirejo '),
(41, 3, 'Pandanwangi'),
(42, 3, 'Pundong '),
(43, 3, 'Puton '),
(44, 3, 'Watugaluh '),
(45, 4, 'Blimbing '),
(46, 4, 'Bugasur Kedaleman'),
(47, 4, 'Gempol Legundi'),
(48, 4, 'Godong '),
(49, 4, 'Gudo '),
(50, 4, 'Japanan '),
(51, 4, 'Kedungturi '),
(52, 4, 'Krembangan '),
(53, 4, 'Mejoyolosari '),
(54, 4, 'Mentaos '),
(55, 4, 'Pesanggrahan '),
(56, 4, 'Plumbon Gambang'),
(57, 4, 'Pucangro'),
(58, 4, 'Sepanyul '),
(59, 4, 'Sukoiber '),
(60, 4, 'Sukopinggir '),
(61, 4, 'Tanggungan '),
(62, 4, 'Wangkalkepuh '),
(63, 5, ' Alang Alang Caruban'),
(64, 5, 'Janti'),
(65, 5, 'Jarak Kulon'),
(66, 5, 'Jogoroto '),
(67, 5, 'Mayangan '),
(68, 5, 'Ngumpul '),
(69, 5, 'Sambirejo '),
(70, 5, 'Sawiji '),
(71, 5, 'Sukosari '),
(72, 5, 'Sumber Mulyo'),
(73, 5, 'Tambar '),
(74, 6, 'Kepanjen '),
(75, 6, 'Jelakombo '),
(76, 6, 'Plandi '),
(77, 6, 'Mojongapit '),
(78, 6, 'Jombang '),
(79, 6, 'Denanyar'),
(80, 6, 'Plosogeneng '),
(81, 6, 'Kepatihan '),
(82, 6, 'Pulo Lor'),
(83, 6, 'Jabon '),
(84, 6, 'Sengon'),
(85, 6, 'Banjar Dowo'),
(86, 6, 'Candi Mulyo'),
(87, 6, 'Dapur Kejambon'),
(88, 6, 'Jombatan'),
(89, 6, 'Kaliwungu '),
(90, 6, 'Sambong Dukuh'),
(91, 6, 'Sumberjo '),
(92, 6, 'Tambak Rejo'),
(93, 6, 'Tunggorono '),
(94, 7, 'Banjar Dowo'),
(95, 7, 'Genengan Jasem'),
(96, 7, 'Kabuh '),
(97, 7, 'Karang Pakis'),
(98, 7, 'Kauman '),
(99, 7, 'Kedung Jati '),
(100, 7, 'Manduro '),
(101, 7, 'Mangunan '),
(102, 7, 'Marmoyo '),
(103, 7, 'Munung Kerep'),
(104, 7, 'Pengampon '),
(105, 7, 'Sukodadi '),
(106, 7, 'Sumber Gondang'),
(107, 7, 'Sumberaji'),
(108, 7, 'Sumberringin '),
(109, 7, 'Tanjung Wadung'),
(110, 8, 'Blimbing '),
(111, 8, 'Carang Rejo'),
(112, 8, 'Gumulan'),
(113, 8, 'Jati Duwur'),
(114, 8, 'Jombatan '),
(115, 8, 'Jombok '),
(116, 8, 'Kedung Betik'),
(117, 8, 'Kedung Mlati'),
(118, 8, 'Kesamben '),
(119, 8, 'Podoroto '),
(120, 8, 'Pojok Kulon'),
(121, 8, 'Pojok Rejo'),
(122, 8, 'Watu Dakon'),
(123, 8, 'Wuluh'),
(124, 9, 'Bakalanrayung '),
(125, 9, 'Bendungan '),
(126, 9, 'Katemas '),
(127, 9, 'Kepuhrejo '),
(128, 9, 'Kudubanjar '),
(129, 9, 'Made '),
(130, 9, 'Menturus '),
(131, 9, 'Randuwatang '),
(132, 9, 'Sidokaton '),
(133, 9, 'Sumber Teguh'),
(134, 9, 'Tapen '),
(135, 10, 'Balonggemek '),
(136, 10, 'Balongsari '),
(137, 10, 'Dukuh Arum'),
(138, 10, 'Gongseng '),
(139, 10, 'Kedung Rejo'),
(140, 10, 'Megaluh '),
(141, 10, 'Ngogri '),
(142, 10, 'Pacar Peluk'),
(143, 10, 'Sidomulyo '),
(144, 10, 'Sudimoro'),
(145, 10, 'Sumber Agung'),
(146, 10, 'Sumbersari '),
(147, 10, 'Turi Pinggir'),
(148, 11, 'Betek '),
(149, 11, 'Dukuh Mojo'),
(150, 11, 'Dukuhdimoro '),
(151, 11, 'Gambiran '),
(152, 11, 'Janti '),
(153, 11, 'Johowinong '),
(154, 11, 'Kademangan '),
(155, 11, 'Karangwinongan '),
(156, 11, 'Karobelah '),
(157, 11, 'Kauman '),
(158, 11, 'Kedunglumpang '),
(159, 11, 'Mancilan '),
(160, 11, 'Miagan '),
(161, 11, 'Mojotrisno '),
(162, 11, 'Murukan '),
(163, 11, 'Seketi '),
(164, 11, 'Tanggalrejo '),
(165, 11, 'Tejo '),
(166, 12, 'Catak Gayam'),
(167, 12, 'Gedangan '),
(168, 12, 'Gondek '),
(169, 12, 'Grobogan '),
(170, 12, 'Japanan '),
(171, 12, 'Karanglo '),
(172, 12, 'Kedungpari '),
(173, 12, 'Latsari '),
(174, 12, 'Menganto '),
(175, 12, 'Mojoduwur '),
(176, 12, 'Mojojejer '),
(177, 12, 'Mojowangi '),
(178, 12, 'Mojowarno '),
(179, 12, 'Penggaron '),
(180, 12, 'Rejoslamet '),
(181, 12, 'Selorejo '),
(182, 12, 'Sidokerto '),
(183, 12, 'Sukomulyo '),
(184, 12, 'Wringinpitu '),
(185, 13, 'Badang '),
(186, 13, 'Banyuarang '),
(187, 13, 'Gajah '),
(188, 13, 'Genukwatu '),
(189, 13, 'Jombok '),
(190, 13, 'Kauman '),
(191, 13, 'Kertorejo '),
(192, 13, 'Kesamben '),
(193, 13, 'Ngoro '),
(194, 13, 'Pulorejo '),
(195, 13, 'Rejoagung '),
(196, 13, 'Sidowarek'),
(197, 13, 'Sugihwaras '),
(198, 14, 'Asem Gede'),
(199, 14, 'Cupak '),
(200, 14, 'Keboan '),
(201, 14, 'Kedung Bogo'),
(202, 14, 'Ketapang Kuning'),
(203, 14, 'Kromong '),
(204, 14, 'Manunggal '),
(205, 14, 'Mojodanu '),
(206, 14, 'Ngampel '),
(207, 14, 'Ngusikan '),
(208, 14, 'Sumber Nongko'),
(209, 15, 'Cangkringrandu '),
(210, 15, 'Gadingmangu'),
(211, 15, 'Glagahan '),
(212, 15, 'Jantiganggong '),
(213, 15, 'Kalang Semanding'),
(214, 15, 'Kepuhkajang '),
(215, 15, 'Pagerwojo '),
(216, 15, 'Perak '),
(217, 15, 'Plosogenuk '),
(218, 15, 'Sembung '),
(219, 15, 'Sukorejo '),
(220, 15, 'Sumberagung '),
(221, 15, 'Temuwulan '),
(222, 16, 'Bongkot '),
(223, 16, 'Dukuhklopo'),
(224, 16, 'Kebontemu '),
(225, 16, 'Keplaksari '),
(226, 16, 'Kepuhkembeng '),
(227, 16, 'Mancar '),
(228, 16, 'Morosunggingan '),
(229, 16, 'Ngrandu Lor'),
(230, 16, 'Peterongan '),
(231, 16, 'Senden '),
(232, 16, 'Sumberagung '),
(233, 16, 'Tanjung Gunung '),
(234, 16, 'Tengaran '),
(235, 16, 'Tugusumberjo '),
(236, 17, 'Bangsri '),
(237, 17, 'Darurejo '),
(238, 17, 'Gebang Bunder '),
(239, 17, 'Jatimlerek '),
(240, 17, 'Jipurapah '),
(241, 17, 'Kampungbaru '),
(242, 17, 'Karang Mojo'),
(243, 17, 'Klitih '),
(244, 17, 'Plabuhan '),
(245, 17, 'Plandaan '),
(246, 17, 'Purisemanding '),
(247, 17, 'Sumberjo '),
(248, 17, 'Tondowulan '),
(249, 18, 'Bawangan '),
(250, 18, 'Dadi Tunggal'),
(251, 18, 'Gedongombo '),
(252, 18, 'Jatibanjar '),
(253, 18, 'Jatigedong '),
(254, 18, 'Kebon Agung'),
(255, 18, 'Kedungdowo '),
(256, 18, 'Losari '),
(257, 18, 'Pager Tanjung'),
(258, 18, 'Pandan Blole'),
(259, 18, 'Ploso '),
(260, 18, 'Rejoagung '),
(261, 18, 'Tanggung Kramat'),
(262, 19, 'Badas '),
(263, 19, 'Badas '),
(264, 19, 'Bakalan '),
(265, 19, 'Brudu'),
(266, 19, 'Budugsidorejo '),
(267, 19, 'Curah Malang'),
(268, 19, 'Gedangan '),
(269, 19, 'Jogoloyo '),
(270, 19, 'Kedungpapar '),
(271, 19, 'Kendalsari '),
(272, 19, 'Madyo Puro'),
(273, 19, 'Mentoro '),
(274, 19, 'Mlaras '),
(275, 19, 'Nglele'),
(276, 19, 'Palrejo '),
(277, 19, 'Plemahan '),
(278, 19, 'Plosokerep '),
(279, 19, 'Sebani'),
(280, 19, 'Segodorejo '),
(281, 19, 'Sumobito '),
(282, 19, 'Talun Kidul'),
(283, 19, 'Trawasan '),
(284, 20, 'Bedah Lawak'),
(285, 20, 'Gabusbanaran '),
(286, 20, 'Jati Wates'),
(287, 20, 'Kali Kejambon'),
(288, 20, 'Kedung Losari'),
(289, 20, 'Kedung Otok '),
(290, 20, 'Kepuh Doko'),
(291, 20, 'Mojokrapak '),
(292, 20, 'Pesantren'),
(293, 20, 'Pulo Gedang'),
(294, 20, 'Pulorejo '),
(295, 20, 'Rejoso Pinggir'),
(296, 20, 'Sentul '),
(297, 20, 'Tamping Mojo'),
(298, 20, 'Tembelang '),
(299, 21, 'Carangwulung '),
(300, 21, 'Galengdowo '),
(301, 21, 'Jarak '),
(302, 21, 'Panglungan '),
(303, 21, 'Sambirejo '),
(304, 21, 'Sumberjo '),
(305, 21, 'Wonokerto '),
(306, 21, 'Wonomerto '),
(307, 21, 'Wonosalam ');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id_info` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id_info`, `judul`, `tanggal`, `isi`, `kategori`, `img`) VALUES
(1, 'ISNU Jatim Gelar Muskerwil, Ini Harapan Wakil Gubernur', '2019-07-08', '<p>isnujatim.org - Wakil Gubernur Jawa Timur Emil Dardak meminta para sarjana NU yang tergabung dalam Ikatan Sarjana Nahdlatul Ulama (ISNU) berpartisipasi dalam pembangunan dan pengembangan SDM.&nbsp;isnujatim.org - Wakil Gubernur Jawa Timur Emil Dardak meminta para sarjana NU yang tergabung dalam Ikatan Sarjana Nahdlatul Ulama (ISNU) berpartisipasi dalam pembangunan dan pengembangan SDM.&nbsp;isnujatim.org - Wakil Gubernur Jawa Timur Emil Dardak meminta para sarjana NU yang tergabung dalam Ikatan Sarjana Nahdlatul Ulama (ISNU) berpartisipasi dalam pembangunan dan pengembangan SDM.isnujatim.org - Wakil Gubernur Jawa Timur Emil Dardak meminta para sarjana NU yang tergabung dalam Ikatan Sarjana Nahdlatul Ulama (ISNU) berpartisipasi dalam pembangunan dan pengembangan SDM.</p>\r\n', '2', 'toko2.jpg'),
(2, 'Belajar Desain Grafis untuk Berdakwah di Medsos', '2019-07-08', '<p><strong>ISNU Jombang -&nbsp;</strong>Dunia digital tak bisa lepas dari kehidupan manusia sat ini seiring dengan zaman yang kian berkembang pesat. Oleh sebagian banyak pegiat teknologi diimbangi dengan ragam kemampuan, salah satu di antaranya adalah kemampuan mendesain gambar dan tulisan atau desain grafis.</p>\r\n\r\n<p>Masyarakat yang berlatar belakang Nahdlatul Ulama (NU) juga tak ketinggalan dengan dunia digital serta desain grafis. Bedanya dengan masyarakat pada umumnya, warga NU kebanyakan menjadikan kemampuan desain grafis sebagai sarana berdakwah di media sosial (Medsos), sehingga sejumlah ajaran NU bisa disebar luaskan di Medsos tersebut.</p>\r\n\r\n<p>&quot;Para kader IPNU-IPPNU nantinya dituntut mampu membuat desain untuk dijadikan dakwah bil medsos yang lagi eksis di zaman ini, sekaligus sebagai bekal bagi dirinya baik dalam profesinya masing-masing maupun dalam organisasi,&quot; kata Ketua IPPNU Kesamben, Kabupaten Jombang, Jawa Timur,&nbsp;Nuril Asmaul Khusna.</p>\r\n\r\n<p>Demikian ini mengemuka kala IPNU-IPPNU Kesamben menggelar&nbsp;pelatihan Desain Grafis. Pesertanya adalah kader IPNU-IPPNU yang ada di masing-masing pimpinan ranting,&nbsp;Jumat (5/6) di Kantor MWCNU setempat.</p>\r\n\r\n<p>Dunia desain grafis menurut dia perlu digalakkan pada diri kader NU, terutama kadar-kader muda NU. Seperti mereka yang masih aktif di IPNU-IPPNU. Ia beralasan, saat ini merupakan era digital, sejumlah aktifitas manusia tak bisa lepas dari digital. Tak terkecuali dalam berdakwah.</p>\r\n\r\n<p>Ia menilai, kader IPNU-IPPNU Jombang yang memiliki kemampuan dalam desain grafis saat ini masih belum banyak. Perlu terus menyelenggerakan diklat atau pelatihan desain grafis di berbagai tingkatan kepengurusan IPNU-IPPNU.</p>\r\n\r\n<p>&quot;Dengan diadakan pelatihan desain grafis, bakat dan minat dari rekan rekanita IPNU IPPNU Kesamben bisa terwadahi,&quot; ujar alumni MAN 9 Jombang ini.</p>\r\n\r\n<p>Katib Syuriah MWCNU Kesamben,&nbsp;Fakhul Hidayat&nbsp;mengapresiasi adanya pelatihan tersebut di lingkungan IPNU-IPPNU. Sebagai kader NU yang masih cukup mudah menurutnya harus bisa menggali banyak ilmu, terlebih ilmu desain grafis, lantaran kesempatan yang dimilikinya masih cukup luas.</p>\r\n\r\n<p>&quot;Pelatihan ini juga bisa menjadi penyemangat bagi anggota untuk ikut berorganisasi karena di organisasi itu banyak sekali ilmu yang diperoleh,&quot; ucapnya.</p>\r\n\r\n<p>Pria yang juga Kepala KUA Kesamben itu mencontohkan beberapa sosok yang sukses dan berlatar belakang IPNU-IPPNU. Di antaranya KH. Abdurrahman Wahid atau Gus Dur, Hj. Khofifah Indar Parawansa selaku Gubernur Jawa Timur dan Hj. Mundjidah Wahab, Bupati Jombang.</p>\r\n\r\n<p>Sosok di atas sukses salah satunya atas keteguhan mereka dalam berorganisasi. Sejumlah perkembangan ilmu ditekuninya.</p>\r\n\r\n<p>Hadir sebagai pemateri pelatihan desain grafis Direktur Pers PC IPNU Jombang, Ainul Farid Hariadi. Selama kurang lebih lima jam berlangsung, semua peserta sangat antusias mengikuti ini.&nbsp;<strong>(Nuruddin Suryanullah/Syamsul Arifin)&nbsp;</strong></p>\r\n', '1', 'a86d64760a5a8d8a6e9795bcb99d52c5.jpg'),
(3, 'PWNU Jatim Award: Antara Resistensi dan Eksistensi', '2019-07-08', '<p>Perhelatan PWNU Jatim Award (PJA) tahun 2019 usai sudah. Namun hasrat untuk membincangnya masih saja terdengar. Perhelatan PJA dimulai sejak 2016, artinya ini adalah tahun ke empat.</p>\r\n\r\n<p>Dibanding dengan PJA di tahun-tahun sebelumnya, tahun ini secara administratif lebih ringan bagi peserta yang ingin mendaftar untuk berpartisipasi. Calon peserta hanya diwajibkan mengisi form verifikasi dan berita acara. Sebagaimana yang disampaikan panitia, bahwa prinsip di tahun ini adalah tidak ribet di depan. Sedang tahun sebelumnya calon peserta harus mengisi data online, selain juga masih tetap harus menyerahkan berkas lengkap. Kalau mengikuti semua nominasi, maka berkas yang dibawa bisa sampai satu pick up.</p>\r\n\r\n<p>Namun demikian, walaupun syarat untuk mengikutinya sudah diperingan, tidak semua PCNU di Jatim antusias mengikutinya.&nbsp; Hal ini terlihat dari yang mendaftar hanya berjumlah 19 PCNU. Padahal di Jatim ada 38 Kabupaten/ Kota. Dari 19 PCNU tersebut yang ikut di katagori PCNU hanya 10. Artinya, PCNU lain ikut, tapi di katagori lain, entah Lembaga, Banom, atau institusi khusus.</p>\r\n\r\n<p>Lebih jauh, dari 19 PCNU yang berpartisipasi ternyata beberapa di antaranya hanya mendaftar di sebagian &ndash;untuk tidak mengatakan sedikit- katagori. Padahal tahun ini nominasinya lebih banyak. Nominasi lembaga pendidikan misalnya, tingkat SD/MI tidak di tandingkan dengan sekolah SMP/MTs, apalagi dengan SMA/SMK. Dengan demikian untuk nominasi lembaga pendidikan ada 3, dimana masing-masing nominasi diambil juara 1 dan 2. Beda dengan tahun sebelumnya nominasi lembaga pendidikan hanya ada satu.</p>\r\n\r\n<p>Pun juga dengan Lembaga, tahun ini lembaga-lembaga yang ada tidak ditandingkan jadi satu, tetapi ditandingkan sesuai rumpun masing-masing. Lakpesdam sesama Lakpesdam, LTN sesama LTN, RMI sesama RMI, dan seterusnya. Demikian juga yang terjadi di Banom dan institusi khusus. Rumah sakit yang terakreditasi D, tidak akan ditandingkan dengan rumah sakit terakreditasi A, tetapi yang sekelas.&nbsp;</p>\r\n\r\n<p>Karena banyaknya katagori yang ditandingkan, sampai-sampai beberapa katagori minim yang mengikuti. Beberapa katagori diikuti hanya 2 peserta. Bahkan pengalaman kami yang mengajukan katagori Kampung Nahdliyin, gugur. Mungkin karena katagori ini ini tidak ada lawannya. Akirnya peserta kami diikutkan dalam katagori Ranting.</p>\r\n\r\n<p>Dalam catatan penulis, ada 5 PCNU yang mengikuti banyak katagori, sehingga mereka yang akhirnya banyak mendominasi sampai tahap Gran Final. 5 PCNU itu adalah Lamongan yang lolos sampai Grand Final di 14 katagori nominasi, Sidoarjo lolos di 12 nominasi, Lumajang lolos di 10 nominasi, dan Jombang beserta Gresik masing-masing lolos ke Grand Final di 9 nominasi.</p>\r\n\r\n<p>Dari 19 PCNU tersebut, 11 PCNU yang akhirnya berhasil membawa pulang piala, tentunya dengan jumlah bervariasi sesuai prestasi masing-masing. Sedangkan 8 PCNU lainnya pulang dengan tangan kosong.</p>\r\n\r\n<p><br />\r\n<strong>Melihat</strong>&nbsp;<strong>Peta</strong>&nbsp;<strong>NU</strong>&nbsp;<strong>Jatim</strong></p>\r\n\r\n<p>Lalu sebenarnya karena apa banyak PCNU yang tidak mengikuti PJA tersebut? Apakah semata hanya permasalahan teknis: waktu persiapan yang berada di bulan puasa dan&nbsp; persyaratan yang ribet. Atau karena persaingannya berat? Buktinya memang tidak semua PCNU yang ikut serta berhasil memboyong pulang kemenangan.</p>\r\n\r\n<p>Bisa juga karena hal yang lebih substansial dari itu, resistensi. Melihat kenyataan di tahun keempat masih saja banyak PCNU yang tidak ikut serta, maka dugaan ini patut dikemukakan.</p>\r\n\r\n<p>Manakah yang benar dari dugaan-dugaan tersebut, perlu ditelusuri lebih lanjut. Untuk memecahkan permasalahan partisipasi PCNU-PCNU di Jatim yang masih rendah dalam ajang PJA.</p>\r\n\r\n<p>Lepas dari permasalahan partisipasi, menurut penulis, PJA mendedahkan dua hal. Hal Pertama, bahwa belum semua PCNU di Jatim mempunyai kondisi yang ideal. Bahasa lainnya, belum semua PCNU di Jatim mempuyai kemampuan SDM dan SDA yang merata. Masih banyak lobang di sana-sini. Kalau kemampuan merata, maka yang masuk ke tahap Grand Final tidak hanya itu-itu saja.&nbsp;</p>\r\n\r\n<p>Lihat saja, di tahun 2016 dan 2017, PCNU Blitar juara umum berturut-turut. Sedangkan tahun 2018 dan 2019 PCNU Sidoarjo juara umum berturut-turut. Meski PCNU Sidoarjo memang patut diacungi jempol. Dari 12 kagori nominasi mereka yang berhasil masuk Grand Final, 11 diantaranya juara 1, dan hanya 1 yang dapat juara 2.</p>\r\n\r\n<p>Sementara itu untuk katagori RS, tahun 2017 dan tahun 2018 diraih oleh RS Siti Hajar.&nbsp; RS Siti Hajar memang pantas mendapatkan prestasi itu, karena di tahun 2017 saja sudah mampu memberikan sharing keuntungan ke PWNU Jatim 50 juta dan ke PBNU 100 juta. Tahun ini RS Siti Hajar rupanya _sungkan_ ikut lagi. ISNU juga demikian, tahun 2018 dan tahun 2019 pemenangnya di raih oleh ISNU Sidoarjo.</p>\r\n\r\n<p>Sebaliknya, yang memang sejak awal tidak antusias, seiring bergantinya tahun nama mereka tidak muncul-muncul juga. Ada juga golongan ketiga, pernah ikut, kalah, dan kemudian tidak ikut lagi di tahun berikutnya.</p>\r\n\r\n<p>Hal Kedua, bahwa dari sekian nominasi yang ditandingankan, baik PCNU, MWC, PR, Lembaga, Banom, instusi pendidikan, maupun institusi khusus, ternyata ada di antara mereka yang mempunyai capaian di atas rata-rata. Sehingga mereka akhirnya menjadi juara. RS Siti Hajar sebagaimana yang disebut di atas adalah salah satunya.&nbsp;</p>\r\n\r\n<p>Dalam katagori pendidikan, tahun 2018 SMA NU 1 Gresik muncul sebagai juara. Kalau kita mengikuti profil sekolah tersebut, kita tidak hanya maklum kalau dia menang, tapi juga akan terperangah, kok ada ya lembaga pendidikan NU yang sebegitu bagusnya.</p>\r\n\r\n<p>Prestasinya dan aktifitasnya tidak hanya tingkat nasional, tapi juga internasional. Kepala sekolahnya sudah tidak lagi sibuk urusan manajerial, tapi sudah sibuk menerima tamu yang ingin study banding. Di antara yang study banding adalah SMA Kristen ST. Louis Surabaya.</p>\r\n\r\n<p>Tahun 2019 ini kita mendapati MI Darussalam Candi Sidoarjo sebagai pemenang dalam katagori SD/MI. Keistimewaan MI ini adalah kemampuannya bertransformasi dari sekolah yang reot dan kumuh, menjadi sekolah yang prestisius dan bertabur prestasi.</p>\r\n\r\n<p>Pada katagori BMT, tahun 2018 kita mendapati BMT Ngasem Bojonegoro yang telah mampu membiayai kegiatan NU dan Banomnya, baik yang sudah direncanakan maupun yang insindental. Berikut menyediakan terop besarta transportnya secara gratis.&nbsp;</p>\r\n\r\n<p>Tahun ini, Muncul 2 BMT. BMT Jombang, yang mampu memberikan pinjaman tanpa bunga. BMT NU Jombang ini akhirnya dapat juara katagori omset di bawah 100 M. Juga BMT Gapura Sumenep yang omsetnya sudah sampai 200 Milyar. BMT Gapura mendapat juara katagori omset di atas 100 M.&nbsp;</p>\r\n\r\n<p>Itu hanya sebagian contoh puncak-puncak capaian yang mengemuka pada gelaran PJA. Harapanya, puncak-puncak capaian tersebut bisa diduplikasi di tempat-tempat lain. Sehingga PJA bukan hanya ajang menang-menangan, tapi juga ajang study banding.</p>\r\n\r\n<p>Hanya saja kalau tidak pernah mengikuti PJA, apa bisa mendapatkan hikmah positif semacam ini?</p>\r\n', '2', '41cbf4ea365eb2b1d5b86c49467ee47f.jpg'),
(4, ' ISNU Jombang Jangan Politisasi Anggota KPPS yang Gugur', '2019-07-08', '<p><strong>ISNU Jombang -&nbsp;</strong>Wakil Ketua Ikatan Sarjan Nahdlatul Ulama (ISNU) Jawa Timur, KH Zahrul Azhar Asumta As&rsquo;ad takziah (menjenguk) keluarga kelompok penyelenggara pemungutan suara (KPPS) yang wafat beberapa waktu lalu di Kota Surabaya.</p>\r\n\r\n<p>Korban tersebut bernama Suryanto (39) warga Kelurahan Sidosermo, Kecamatan Wonocolo, Kota Surabaya, Jawa Timur. Dalam kesempatan ini, ia juga memberikan santunan kepada keluarga korban yang ditinggalkan serta berdoa bersama untuk korban.</p>\r\n\r\n<p>&ldquo;Mereka butuh empati bukan otopsi, mereka pasti akan sedih jika kematian orang-orang yang ia cintai justru dikapitalisasi untuk bahan saling membenci dan ujung ujungnya mendelegitimasi demokrasi,&rdquo; katanya kepada&nbsp;<em>NU</em>&nbsp;<em>Jombang</em>&nbsp;<em>Online</em>, Sabtu (11/5).</p>\r\n\r\n<p>Pengasuh Pondok Pesantren Queen Al Azhar Darul Ulum Rejoso, Kecamatan Peterongan, Kabupaten Jombang ini meminta semua pihak mendahulukan sisi kemanusiaan dalam masalah meninggalnya panitia pemungutan suara. Seperti tidak mempolitisasi korban yang meninggal dunia.</p>\r\n\r\n<p>Biar bagaimanapun, menurut pria yang biasa disapa Gus Hans ini para panitia pemungutan suara sudah berjuang keras menyukseskan pemilu 2019. Mereka meluangkan begitu banyak waktu untuk kebaikan bersama.</p>\r\n\r\n<p>&ldquo;Ada yang jauh lebih penting dari sekedar kekuasaan yaitu nilai kemanusiaan,&rdquo; tambah Gus Hans.</p>\r\n\r\n<p>Ia melihat ada beberapa kelompok yang akhir-akhir ini sengaja menggiring opini sesat di balik meninggalnya para petugas tersebut. Bahkan perbuatan itu dilakukan orang yang dianggap pintar.&nbsp;</p>\r\n\r\n<p>&ldquo;Basic pendidikan saya di bidang ilmu politik yang menyadarkan saya betapa pertarungan politik terkadang tak lagi mempedulikan nilai-nilai kemanusiaan. Pesan saya, ngono yo ngono ning ojo ngono,&rdquo; ungkapnya.</p>\r\n\r\n<p>Gus Hans juga mengusulkan ke pemerintah untuk memisahkan Pemilihan Legislatif (Pileg) dan Pemilihan Presiden (Pilpres) pada pemilu selanjutnya. Hal ini agar kejadian serupa tidak terulang kembali.</p>\r\n\r\n<p>&ldquo;Saya berpesan sabaiknya lain kali Pileg dan Pilpres dipisah untuk mengurangi beban kerja petugas,&rdquo; pungkas Direktur Rumah Dana Ummat (Rudama) ini.</p>\r\n\r\n<p>Komisi Pemilihan Umum (KPU) mencatat, hingga Jumat (10/5) pagi, KPPS yang meninggal dunia mencapai 469 petugas KPPS dan 92 orang petugas pengawas dan 22 petugas keamanan. Komisioner KPU Evi Novida Ginting Manik mengatakan, selain KPPS yang meninggal, sebanyak 4.602 KPPS jatuh sakit saat bertugas.&nbsp;</p>\r\n', '1', '0807201910301359f29761c9ab1c927e2e2a549894a88f.jpeg'),
(7, 'Halaqoh Nasional Hari Santri kerjasama Pemkab Jombang ISNU Jombang', '2019-07-15', '<p>Assalamualikum sahabat ISNU semua. Alhamdulillah kemarin tgl 23 Oktober dilaksanakan halaqoh Nasional Hari Santri kerjasama Pemkab Jombang ISNU Jombang. Acara berlangsung sukses dan meriah.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kegiatan berlangsung di Aula Bung Tomo Jombang, menyedot audiences yg membludak dengan pembicara Dr Emil Dardak Wagub terpilih yang juga pengurus PW ISNU Jatim, Deputi Pencegahan BNN Irjen Pol Arman Depari (Jakarta) dan Direktur Kesenian Kemendikbud Restu Darmawan (Jakarta) dan Ketua ISNU Jatim Prof M Mas&#39;ud Said.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sebelum halaqoh disampaikan sambutan hangat Wakil Rois PCNU Jombang dan Bupati Jombang Munjidah Wahab yg menjelaskan rencana-rencana pembangunan Jombang dan harapan kerjasama Inovasi pembanguan dan peningkatan PAD dg ISNU Jatim. Bupati Munjidah berharap beliau bisa dibantu oleh ahli ahli pemerintahan dari ISNU Jatim .&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Selain tetamu penting Jakarta hadir pula Katib Syuriah PC NU, Wakil Ketua LC NU, tokoh organisasi sayap NU; Pergunu, PMII, Muslimat, Fatayat, IPNU, Anshor, kalangan TNI- Polri, mahasiswa berbagai perguruan tinggi dan MWC ISNU se Jombang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Alhamdulillah PC ISNU Jombang bergerak dengan kerjasama yg manis dan semangat baru yang menyenangkan. Saya sebagai Ketua PW ISNU berharap agar model *kerja bareng yg kolaboratif* seperti ini digagas dan dijalankan oleh ISNU di berbagai Cabang lain. Dalam diskusi panjang dengan Gus Hanan Ketua ISNU Jombang Ketua ISNU Jatim Prof Mas&#39;ud Said menyarankan agar kerja bareng ISNU dengan PC ISNU terdekat misalnya Mojokerto, Nganjuk atau ISNU tetangga yang lain. Ketua ISNU Jatim sering mengatakan saat ini model kerja haruslah dengan *kerja sama* , dengan kerja sama semua akan lebih mudah dan lebih bermakna.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hari ini tgl 24 Oktober 2018 insyaallah sebagian pengurus PW dan peneliti serta akademisi ISNU Jatim dari berbagai bidang ilmu akan melaksanakan FGD 5 judul penelitian strategis Jatim kerja bersama Balitbang Pemprop Jatim. Penelitian aktual akan dilaksanakan thn 2019 sebagai implementasi 7 program utama PW ISNU Jatim yg telah kami programkan dalam Visi - Misi ISNU Jatim 2018-2022. FGD akan berlangsung di Hotel Ibis Style Jemursari.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ayo bergerak dengan ikhlas. Temui orang orang yg bisa bekerjasama dengan baik. Kemukakan gagasan dan awali dg mencari tema yg merupakan kepentingan bersama dan kepentingan umum, cari tempat menarik dan pemantik kegiatan yaitu orang orang atau lembaga yang se visi se misi baik kalangan intern maupun bukan dari kalangan kita.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mohon doa restu.&nbsp;</p>\r\n\r\n<p>Saling asah asih, asuh.</p>\r\n', '1', '1540344852_IMG-20181024-WA0003.jpg'),
(8, 'Perangi Radikalisme di Indonesia, Ketua ISNU Jatim: Di Internal Kami Punya Corps Khusus', '2019-07-15', '<p>isnujombang.org - Terus perangi radikalisme, Ikatan Sarjana Nahdlatul Ulama, gelar diskusi dan kajian bertajuk Peta gerakan radikalisme di Indonesia Pascareformasi, Selasa (28/5/2019).Acara ini digelar di Ruang Salsabila lantai 1, Gedung PWNU Jatim ini, dihadiri oleh anggota ISNU Jatim.Dalam acara yang digelar dari sore hingga petang itu, Prof. Akh. Muzakki diberi mandat sebagai pembicara dan pemateri. Ketua ISNU Jatim, M. Mas&#39;ud Said, saat dikonfirmasi mengatakan, acara yang digagas pihaknya ini pun merupakan satu upaya untuk terus memerangi gerakan radikalisme di Indonesia.</p>\r\n\r\n<p>&quot;Bahwa Indonesia ke depan harus clear dari gerakan radikalisme,&quot; ucapnya kepada TribunJatim.com saat ditemui usai acara. Hal itu, dapat terwujud, apabila seluruh elemen dapat terus bergandeng bersama memerangi radikalisme. Terutama, umat Islam yang harus memegang teguh prinsip Islam Rahmatan lil &#39;alamin dan Ahlus Sunnah Wal Jamaah. &quot;Memperkuat Islam multikultural, memperkuat kasih sayang. silaturahim antar bangsa, antar umat manusia, dan juga antar kaum muslimin sendiri,&quot; tambahnya. Menyadari begitu massifnya gerakan radikalisme di tanah air, Ketua ISNU Jatim itu pun mengungkapkan, di internal ISNU telah membentuk satu corps yang berisi pakar di bidang IT dari perguruan tinggi terkemuka di Jatim. &quot;Namanya DINUN, yaitu Dai Intelektual Nusantara Network yang bekerja untuk memerangi radikalisme lewat dunia maya,&quot; jelasnya. Menurutnya, DINUN yang dimiliki oleh ISNU Jatim ini, punya kemampuan teknologi yang mapan, sehingga, ia percaya mereka dapat memberi counter attack kepada seluruh gerakan radikal dengan sangat rapi.</p>\r\n', '2', '1560418701_12.jpg'),
(14, 'Lawan Dakwah Radikal, ISNU Jatim Luncurkan Dinun di Nurul Jadid Probolinggo', '2019-07-16', '<p>ISNUJOMBANG.ORG -&nbsp;<a href=\"https://www.timesindonesia.co.id/tag/PW-ISNU\">P</a><a href=\"https://www.timesindonesia.co.id/tag/PW-ISNU\">W ISNU</a>(Pengurus Wilayah Ikatan Sarjana Nahdlatul Ulama) Jawa Timur berkomitmen melawan maraknya&nbsp;<a href=\"http://www.timesindonesia.co.id/tag/dakwah-radikal\">dakwah radikal</a>&nbsp;dengan meresmikan&nbsp;<a href=\"http://www.timesindonesia.co.id/tag/DINUN\">DINUN</a>&nbsp;(Dai Intelektual NU Network) di Pondok Pesantren&nbsp;<a href=\"http://www.timesindonesia.co.id/tag/Nurul-Jadid\">Nurul Jadid</a>, Paiton, Kabupaten&nbsp;<a href=\"http://www.timesindonesia.co.id/tag/Probolinggo\">Probolinggo</a>, Jumat (5/7/2019).</p>\r\n\r\n<p>Ikhtiar ISNU Jatim secara kolektif dan sistematis berkomitmen mengikis model dakwah radikal yang fenomenal.</p>\r\n\r\n<p>&ldquo;Program DINUN ini adalah bagian dari ISNU sebagai lokomotif dakwah Nahdlatul Ulama yang&nbsp;<em>rahmatan lil alamin&nbsp;</em>dan bernilai&nbsp;<em>nahdhiyyah</em>&nbsp;untuk masyarakat Indonesia khususnya Jawa Timur,&rdquo; jelas Ketua Pelaksana Halal Bihalal dan peluncuran Dai Intelektual NU Network, Dian Ferricha kepada TIMES Indonesia.</p>\r\n\r\n<p>Kegiatan yang bertajuk Islam Wasathiyah, Pancasila dan Ekonomi Syariah ini hasil kolaborasi PW ISNU Jatim dengan panitia Ponpes Nurul Jadid Paiton. &nbsp;</p>\r\n\r\n<p>Icha, panggilan akrabnya juga menyampaikan bahwa ISNU Jatim memiliki komitmen besar untuk menjadi organisasi intelektual NU. Hal itulah yang menjadi dasar diangkatnya tema besar di dalam acara seminar ini.</p>\r\n\r\n<p>&ldquo;Alhamdulillah, komitmen ini bisa kami buktikan dengan hadirnya kader-kader NU yang terwakili dalam pengurus cabang sebanyak 500 orang dari 38 kab/kota se-Jatim dan didukung kehadiran Bank Jatim Syariah,&rdquo; kata perempuan yang juga menjabat Ketua PC ISNU Kota Blitar ini.</p>\r\n\r\n<p>Beberapa narasumber yang diundang dalam acara yakni Gubernur Jawa Timur Dra. Hj. Khofifah Indar Parawansa, Pembina BPIP Prof. Dr. Mohammad Mahfud MD, Drs. KH. Abdul Hamid Wahid, M. Ag Rektor Universitas&nbsp;<a href=\"http://www.timesindonesia.co.id/tag/Nurul-Jadid\">Nurul Jadid</a>&nbsp;(UNUJA), Prof. H. M. Mas&rsquo;ud Said, M.M., Ph.D Ketua PW ISNU Jawa Timur, dan Ahmad Tohe Direktur Da&rsquo;i Intelektual NU Network (<a href=\"http://www.timesindonesia.co.id/tag/DINUN\">DINUN</a>).</p>\r\n\r\n<p>&ldquo;Saya berharap acara ini dapat meningkatkan tali silaturahmi&nbsp;kader NU dalam tubuh&nbsp;<a href=\"http://www.timesindonesia.co.id/tag/PW-ISNU\">ISNU</a>,&rdquo; tegasnya.&nbsp;<strong>(*)</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Sumber :&nbsp;<a href=\"https://m.timesindonesia.co.id/read/219302/20190705/161655/lawan-dakwah-radikal-isnu-jatim-luncurkan-dinun-di-nurul-jadid-probolinggo/#!-_-\">https://m.timesindonesia.co.id</a></strong></p>\r\n', '96', '1562372925_Mahfud-MD.jpg'),
(15, 'Bersama KH. , Pelantikan ISNU Jombang Akan Bahas Kedaulatan NKRI', '2019-07-16', '<p>JOMBANG, FaktualNews.co &ndash; Kepala Divisi Humas Polri, Irjen Pol Drs Boy Rafly Amar dijadwalkan menghadiri pelantikan Pengurus Cabang Ikatan Sarjana Nahdlatul Ulama (ISNU) Kabupaten Jomban periode 2017-2021 pada 25 Maret mendatang.</p>\r\n\r\n<p>Dalam acara tersebut, Boy Rafli akan menjadi pembicara sarasehan bersama tiga tokoh yang diundang sebagai nara sumber. Panitia pelaksana mengambil tema &ldquo;Meneguhkan peran dan khidmat sarjana NU dalam menguatkan kedaulatan NKRI&rdquo; yang akan dibahas dalam forum rangkaian kegiatan tersebut.</p>\r\n\r\n<p><br />\r\n&nbsp;<br />\r\nH Abdul Hanan Majdy, Ketua Terpilih PC ISNU Jombang &nbsp;mengatakan, tema yang telah disepakati oleh panitia dan pengurus ini merupakan salah satu gambaran langkah organisasi para sarjana NU tersebut selama periode kedepan.</p>\r\n\r\n<p>&ldquo;ISNU periode ini berupaya menghidmatkan diri pada pencapaian kedaulatan negara yang terus dirongrong melalui isu SARA, &nbsp;narkoba, ekonomi kapitalis dan laut,&rdquo; ujar Gus Hannan, panggilan akrab Ketua PC ISNU Jombang kepada FaktualNews.co, Senin (20/3/2017).</p>\r\n\r\n<p><br />\r\nUntuk itu, lanjut Gus Hannan, pihaknya menghadirkan para tokoh yang dinilai bisa memberikan pemaparan tentang kedaulatan NKRI. Selain Boy Rafli Amar, panitia juga mengundang Brigjend Pol Fatkhurrohman, Kepala BNN (Badan Narkotika Nasional) Provinsi Jatim, Jaenal Effendi, Ketua Program Studi Ilmu Ekonomi Syariah IPB, dan Letkol Wisnu Priambodo, &nbsp;pejabat TNI AL yang juga tenaga pengajar Kodiklatal.</p>\r\n\r\n<p>&ldquo;Kami sudah berkomunikasi dengan para narasumber, sampai sekarang semuanya memastikan untuk hadir dalam acara nanti,&rdquo; jelas Gus Hannan.</p>\r\n\r\n<p><br />\r\n&nbsp;<br />\r\nMenurutnya, sarasehan dilaksanakan dalam rangka membaca peta peran yang dapat dilaksanakan anggota ISNU untuk meneguhkan khidmat kepada NU dalam membangun bangsa. &ldquo;Pelantikan mendorong ghirah sarjana NU untuk meneguhkan khidmat kepada NU dan Negara,&rdquo; jelasnya.</p>\r\n\r\n<p>Sementara itu, Ketua Panitia Pelaksana Pelantikan Pengurus ISNU, Muhammad Syafi&rsquo;I mengatakan, prosesi pengukuhan akan dipimpin langsung Ketua Umum PP ISNU, H Ali Masykur Musa. Selain itu, Ketua PW ISNU Jatim, H Abdullah Azwar Anas yang juga Bupati Banyuwangi telah memastikan hadir pada kegiatan yang akan dilangsungkan di gedung serba guna Pondok Pesantren Bahrul Ulum Tambakberas tersebut.</p>\r\n\r\n<p>&ldquo;Sekarang kita fokus pada final cheking semua persiapan pelantikan untuk memastikan seluruh rangkaian kegiatan bisa dilaksanakan dengan baik,&rdquo; kata Syafi&rsquo;i.</p>\r\n', '1', '18072019080046c6e224ef019747ea0187d02092cf99c7.jpg'),
(16, 'Saat Akad Jual Beli Bercampur dengan Akad Hibah', '2019-07-30', '<p>Tulisan ini diawali dari sebuah kisah ilustratif. Seorang santri ditugasi mengajar di sebuah tempat yang jauh dari tempat ia mondok. Jauhnya jarak, memaksanya untuk membeli sepeda motor guna mempersingkat waktu. Kebetulan ia mendapati tetangga pondok yang memiliki tiga sepeda. Dorongan antara memenuhi tugas dan kebutuhan memaksa dia memberanikan diri untuk bilang kepada pemilik kendaraan: &quot;Pak, saya minta kerelaan bapak untuk saya beli salah satu sepedanya. Bapak mungkin tidak punya keinginan untuk menjual. Tapi, ini karena saya sendiri yang membutuhkan sepeda itu untuk saya pakai memenuhi tugas mengajar di desa X yang jauh dari sini.&quot; Karena merasa kasihan, dan setelah berpikir sejenak, akhirnya sang bapak itu merelakan sepedanya dibeli oleh si santri, dengan harga sepantasnya. Akad apakah seperti ini?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ada dua akad yang bisa kita ambil dari kisah di atas khususnya dari sisi si bapak yang pemilik barang.&nbsp;<strong>Pertama</strong>, adalah akad yang menunjukkan kerelaan (<em>tabarru&#39;</em>) memberikan (hibah).&nbsp;<strong>Kedua</strong>, adalah akad yang menunjukkan jual beli (<em>bai&#39;</em>). Jadi, ada dua akad yang terkumpul di situ, antara akad hibah dan akad bai&#39;. Namun, ada catatan bahwa hibah yang diberikan oleh bapak tadi bersifat&nbsp;<em>ta&#39;alluq</em>(berikatan) dengan akad jual beli. Seandainya bukan karena pertimbangan terhadap kondisi santri yang hendak bertugas di tempat yang jauh, ia tidak akan menjual sepeda itu. Atau, seandainya ada orang lain yang hendak membeli sepeda itu, Sang Bapak belum tentu memberikannya, karena ketiadaan hajat untuk menjual. Singkatnya, menjualnya sang bapak terhadap sepeda adalah didahului oleh sikap kerelaan. Apakah boleh jual beli seperti ini?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Al-Zuhaily menjelaskan dalam Kitabnya&nbsp;<em>al-Fiqhu al-Isl&acirc;my wa adillatuhu,&nbsp;</em>sebagai berikut:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"RTL\">ÙˆÙ‚Ø¯ ÙŠÙƒÙˆÙ† Ø§Ù„ØªØ¨Ø±Ø¹ ÙÙŠ Ø§Ø¨ØªØ¯Ø§Ø¡ Ø§Ù„Ø¹Ù‚Ø¯ ÙƒØ§Ù„Ù‚Ø±Ø¶ ÙˆØ§Ù„ÙƒÙØ§Ù„Ø© Ø¨Ø£Ù…Ø± Ø§Ù„Ù…Ø¯ÙŠÙ†ØŒ ÙˆØ§Ù„Ù‡Ø¨Ø© Ø¨Ø´Ø±Ø· Ø§Ù„Ø¹ÙˆØ¶ØŒ Ø«Ù… ÙŠÙ„Ø²Ù… Ø§Ù„Ø·Ø±Ù Ø§Ù„Ø¢Ø®Ø± Ø¨Ø¯ÙØ¹ Ø§Ù„Ø¨Ø¯Ù„ØŒ ÙÙ‡ÙŠ ØªØ¨Ø±Ø¹ Ø§Ø¨ØªØ¯Ø§Ø¡ØŒ Ù…Ø¹Ø§ÙˆØ¶Ø© Ø§Ù†ØªÙ‡Ø§Ø¡</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Artinya: &quot;Terkadang sikap sukarela muncul mendahului akad, misalnya akad utang-piutang (qardh), penanggung jawab tanggungan (pihak yang berutang) terkait urusannya dengan pihak kreditur (<em>kaf&acirc;lah</em>), hibah (pemberian) dengan syarat adanya harga ganti (<em>iwadl</em>), sehingga bersifat mengikat kepada pihak lain (lawan transaksi) untuk menyerahkan gantinya. Akad seperti ini adalah contoh akad&nbsp;<em>tabarru&#39;</em>&nbsp;di awal, pertukaran diujungnya.&quot; (al-Zuhaily,<em>&nbsp;al-Fiqhu al-Isl&acirc;my wa Adillatuhu</em>, Beirut: D&acirc;r al-Kutub al-Ilmiyyah, tt.: 4/244)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Apakah akad ini menyalahi tujuan utama akad jual beli yang harus diakhiri dengan kepemilikan? Tentu saja tidak. Hibah yang ada dalam contoh di atas kedudukannya adalah menjadi &quot;sebab&quot; bagi terjadinya akad jual beli.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hal yang sama dengan di atas, juga bisa berlaku pada akad yang lain misalnya adalah akad utang piutang (<em>qardh</em>). Perlu diingat bahwa gabungan antara hibah dengan&nbsp;<em>bai&#39;</em>&nbsp;ini merupakan bagian dari gabungan akad&nbsp;<em>tabarru&#39;</em>&nbsp;dengan jual beli. Ada beberapa jenis akad tabarru&#39;. Misalnya seperti yang disampaikan oleh al-Zuhaily dalam ibarat berikut ini:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"RTL\">ÙˆØ¥Ù† ÙƒØ§Ù† Ø§Ù„ØªÙ…Ù„ÙŠÙƒ Ù…Ø¬Ø§Ù†Ø§ Ø¨ØºÙŠØ± Ø¹ÙˆØ¶ ÙÙ‡ÙŠ Ø¹Ù‚ÙˆØ¯ Ø§Ù„ØªØ¨Ø±Ø¹Ø§ØªØŒ ÙƒØ§Ù„Ù‡Ø¨Ø© ÙˆØ§Ù„ØµØ¯Ù‚Ø© ÙˆØ§Ù„ÙˆÙ‚Ù ÙˆØ§Ù„Ø¥Ø¹Ø§Ø±Ø© ÙˆØ­ÙˆØ§Ù„Ø© Ø§Ù„Ø¯ÙŠÙ†</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Artinya: &quot;Apabila sifat kepemilikan itu diperoleh dengan jalan gratis tanpa adanya nilai tukar, maka akad seperti ini termasuk akad tabarru&#39; (suka rela), misalnya seperti hibah, shadaqah, waqaf, i&#39;arah (pinjam-meminjam) dan pengalihan utang (hiw&acirc;lah). (al-Zuhaily,<em>&nbsp;al-Fiqhu al-Isl&acirc;my wa Adillatuhu</em>, Beirut: D&acirc;r al-Kutub al-Ilmiyyah, tt.: 4/244)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Semua kelompok akad tabarru&#39; ini bisa dipergunakan sebagai &quot;<strong>sebab</strong>&quot; bagi berlangsungnya jual beli. Kita perlu membedakan antara menjadi&nbsp;<strong>sebab</strong>&nbsp;dengan&nbsp;<strong>bergabung</strong>. Misalnya ada pernyataan seperti ini: &quot;Bang, tolong pinjami saya uang 100 ribu saja!&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Diksi &quot;<strong>pinjam</strong>&quot; dalam kalimat ini sebenarnya hendak dipergunakan oleh pengucap, bahwa dirinya memerlukan utang. Pinjam merupakan bagian dari akad&nbsp;<em>i&#39;&acirc;rah</em>, sementara utang, merupakan akad&nbsp;<em>qardh</em>. Jadi, seolah akad ini berbunyi:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"RTL\">Ø§Ø¹Ø§Ø±Ø© Ø§Ø¨ØªØ¯Ø§Ø¡ ÙˆÙ‚Ø±Ø¶ Ø§Ù†ØªÙ‡Ø§Ø¡</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Artinya: &quot;Pinjam permulaannya, utang yang jadi tujuan akhirnya.&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sekarang, bandingkan dengan bila hibah ini kita gabung dalam akad jual beli! Contoh, misalnya ucapan ijab dari seorang penjual kepada pembelinya: &quot;Saya &quot;<em>berikan</em>&quot; barang ini kepadamu&quot;. Jawab pembeli: &quot;Saya terima&quot;. Apakah akad seperti ini sah untuk akad jual-beli?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sudah barang tentu perlu pemilahan. Akad ijab dan qabul merupakan syarat sah jual beli. Jika dalam shighat ijab, penjual menggunakan lafadh &quot;<em>memberikan</em>&quot;, maka dilihat dari dhahirnya, akad ini adalah masuk akad hibah, hadiah atau athiyah, sehingga bertentangan dengan maksud jual beli yang menghendaki&nbsp;<em>iwadl</em>&nbsp;(harga barang). Oleh karena itu, jika lafadh itu digunakan dalam shighat ijab, maka jual belinya tidak sah disebabkan lafadh yang menyatakan &quot;hibah&quot; masuk di dalam aqad. Hibah bersifat menafikan jual beli. Sampai di sini, bandingkan dengan keterangan sebelumnya yang menyatakan bahwa hibah merupakan sebab.&nbsp;<em>Wall&acirc;hu a&#39;lam&nbsp;</em><em>bi</em><em>sh</em><em>&nbsp;</em><em>shaw&acirc;b</em>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Ustadz&nbsp;</em></strong><strong><em>Muhammad Syamsudin</em></strong><strong><em>,&nbsp;</em></strong><em>Peneliti Bidang Ekonomi Syariah - Aswaja NU Center PWNU Jawa Timur</em></p>\r\n', '2', '1564403042.jpg'),
(17, 'ISNU Kabupaten Blitar Gelar Uji Kompetensi', '2019-07-30', '<p>Pimpinan Cabang (PC) Ikatan Sarjana Nahdlatul Ulama (ISNU) Kabupaten Blitar, Jawa Timur bekerja sama dengan&nbsp; Indonesia Kompeten mengadakan uji kompetensi.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kegiatan yang berlangsung Rabu (17/7) ini diikuti Pengurus Anak Cabang (PAC) dan PC ISNU, serta peserta umum. Acara berlangsung di Graha NU Blitar, Jalan Desa Jatinom, Kanigoro, Blitar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Dalam pelaksanaan kegiatan ini kami bekerja sama dengan&nbsp; Badan Nasional Sertifikasi Profesi atau BNSP dari Lembaga Sertifikasi Profesi atau LSP Manajemen Wirausaha dan Produktifitas Merdeka atau MWPM,&rdquo; kata Imam Maliki.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>BNSP sendiri merupakan sebuah lembaga independen yang dibentuk pemerintah untuk melaksanakan ketentuan Pasal 18 ayat (5) Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam penjelasannya, Imam yang juga sebagai ketua penyelenggara kegiatan mengemukakan bahwa uji kompeten sebagai ikhtiar dan prosedur. &ldquo;Ya, agar&nbsp; menjadi warga Indonesia kompeten di bidangnya,&rdquo; tegasnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ditanya mengapa harus memiliki kompetensi, Imam mengemukakan hal tersebut demi memastikan diterimanya para pekerja di dunia industri. &ldquo;Agar skills kita diakui di dunia industri dan mengikuti standar yang ada,&rdquo; jelasnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Imam mengemukakan bahwa sertifikasi sebagai hal yang tidak dapat dihindari. Justru dengan piranti tersebut keterampilan yang dimiliki seseorang mendapatkan pengakuan.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Hasilnya&nbsp; menjadikan kita lebih dipercaya di dunia industri dan usaha,&quot; tambah Mohammad Subhan selaku panitia yang lain.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dirinya mengungkapkan bahwa para peserta yang ikut dalam kopetensi terdiri dari para pelaku Usaha Mikro Kecil&nbsp; dan Menengah atau&nbsp; UMKM, pelajar , mahasiswa,&nbsp; pofesional, guru, dosen, trainer, mentor hingga konsultan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Panitia sendiri tak semata mencari keuntungan menggelar acara ini. &quot;Kegiatan ini bersubsidi,&rdquo; tegasnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dengan mengikuti ujian, maka tidak semata keterampilan yang diperoleh. &ldquo;Para peserta dapat memanfaatkan bimbingan dan konsultasi pra uji kompetensi,&rdquo; kata Wakil Ketua PC ISNU Blitar tersebut</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Demikian juga, sejumlah manfaat lain akan diperoleh. &ldquo;Seperti jejaring dan informasi peluang usaha,&rdquo; urainya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Oleh sebab itu, diharapkan peserta akan mengikuti seluruh rangkaian hingga rampung. &ldquo;Nantinya mereka juga menjadi mitra dan mendapat sertifikat uji kompetensi oleh negara bagi yang lulus,&quot; tandasnya. (Imam Kusnin Ahmad/Ibnu Nawawi)</p>\r\n\r\n<p>&nbsp;</p>\r\n', '105', '15634675125d309ef804d00.jpg'),
(18, 'LAZISNU Jombang Dipercaya Salurkan Infaq dan Sedekah Warga Luar Negeri', '2019-07-30', '<p>Pengurus Cabang (PC) Lembaga Amil Zakat Infaq dan Sedekah Nahdlatul Ulama (LAZISNU) Kabupaten Jombang, Jawa Timur kerap menerima infaq sekaligus sedekah warga. Tak hanya dari warga di kawasan Jombang sendiri namun luar Kota Jombang, bahkan warga luar negeri.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Menurut Ketua PC LAZISNU Jombang, Ahmad Zainudin, keberadaan LAZISNU di Kota Santri kian dipercaya khalayak luas sebagai lembaga penerima sekaligus penyalur zakat, infaq, dan sedekah yang amanah dan kredibilitasnya sudah tidak diragukan lagi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Melihat tren, kepercayaan masyarakat semakin meningkat terhadap LAZISNU Jombang dan ini menambah semangat kami dan segenap pengurus untuk menjaga amanah masyarakat,&quot; ujarnya kepada&nbsp;NU Online, Rabu (17/7).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Terbaru, LAZISNU Jombang menerima sedekah dan infaq sejumlah warga yang berada di Australia New Zeland. Melalui Pengurus Cabang Istimewa Nahdlatul Ulama (PCINU) Australia New Zeland, infaq dan sedekah tersebut dipercayakan kepada LAZISNU Jombang untuk dikelola danan ditransfer melalui rekening LAZISNU.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Alhamdulillah&nbsp;kembali diamanahi PCINU Australia New Zeland 600 Dolar Ausie atau Rp5.810.654,&quot; kata Ahmad Zainudin.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Infaq dan sedekah tersebut bersumber dari jamaah Do&#39;a dan Dzikir Melbourne yang dikumpulkan selama kurang lebih empat bulan, terhitung sejak Maret hingga Juni 2019. Jamaah ini dikoordinir langsung oleh PCINU Australia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Itu merupakan infaq sedekah dari jamaah pengajian Do&#39;a dan Dzikir Melbourne di bawah naungan PCINU Australia selama kurun waktu empat bulan,&quot; ujar pria yang juga Ketua Pusat Kegiatan Belajar Mengajar (PKBM) Yalatif, Desa Kedawong, Kecamatan Diwek, Jombang ini.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Jamaah Doa dan dan Dzikir Melbourne lanjut dia, mengamanahkan kepada LAZISNU agar mengalokasikan infaq dan sedekahnya untuk dua hal. Pertama dialokasikan untuk pondok tahfidz dan kedua untuk anak yatim.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Sesuai kesepakatan jamaah di sana. Jumlah tersebut dibagi menjadi dua, Rp2.905.327 untuk pondok tahfidz dan Rp2.905.327 untuk anak yatim,&quot; ucap pria yang biasa disapa Gok Din ini.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dirinya memastikan, LAZISNU yang dipimpinnya akan senantiasa memegang prinsip amanah. Sejumlah dana yang dikelola LAZISNU akan dialokasikan kepada pihak-pihak yang memang berhak menerimanya. Seperti anak-anak yatim, warga kurang mampu, beasiswa santri tahfidz, dan lain sebagainya sebagaimana program-program LAZISNU yang disusun. (Syamsul Arifin/Muiz)</p>\r\n', '106', '15633691815d2f1eddc0a40.jpg'),
(19, 'Ketua ISNU Semarang Resmi Sandang Guru Besar UIN Semarang', '2019-07-30', '<p>Ketua Pimpinan Cabang (PC) Ikatan Sarjana Nahdlatul Ulama (ISNU) Kota Semarang Jawa Tengah, H Syamsul Ma&#39;arif resmi menerima gelar Guru Besar Universitas Islam Negeri (UIN) Wali Songo Semarang pada bidang Ilmu Pendidikan Islam pada Fakultas Ilmu Tarbiyah dan keguruan. Pengukuhan berlangsung Kamis (4/7) di Auditorium II kampus III UIN Wali Songo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo; Membaca, Meneliti, berkarya, dan mengaji adalah moto hidup saya. Dan&nbsp;Alhamdulilah&nbsp;di usia saya yang ke 44 tahun ini bisa menyandang gelar Profesor. Semua harus di syukuri bukan untuk berbangga hati melainkan menjadi tantangan saya secara pribadi untuk menatap masa depan,&rdquo; ungkap Syamsul dalam rilisnya yang diterima&nbsp;NU Online, Jumat (5/7).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam sambutannya yang bertema&nbsp;Pendidikan dalam Pusaran Neo-Liberalisme dan Gerakan Ultra-Right: Restorasi Local Genius Pesantren&nbsp;membawa audien untuk sejenak berfikir serta memikirkan masa depan pendidikan islam di indonesia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Judul sambutan pada pengukuhan ini saya ambil dari kegelisahan saya yang mendalam serta kian tak berujung melihat kenyataan belum beranjaknya pendidikan di indonesia, termasuk dalam pendidikan agama islam,&quot; jelasnya.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dikatakan, pendidikan belum mampu merekayasa perubahan masyarakat yang diharapkan menuju pada transformasi perubahan masyarakat yang terbuka dan demokratis, pendidikan belum mewujudkan civil islam. &quot;Sebuah gambaran masyarakat yang memiliki tradisi saling menyayangi sesama umat manusia, bisa memahami dan menghormati berbagai ekspresi budaya akan nilai-nilai luhur dari berbagai kelompok (multikultural),&rdquo; ungkap Prof Syamsul.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pendidikan Islam lanjutnya, harus siap berada di pusaran neo-liberalisme, terlepas dari kebijakan pendidikan nasional yang masih normatif dan terkesan lips service selama ini, tentu sangat memberikan dampak bagi wajah pendidikan kita. Sementara masifikasi gelombang globalisasi, sungguh telah didepan mata dan membawa pengaruh yang sangat serius pada sistem pendidikan nasional.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Persoalan ini membutuhkan kajian kritis komparatif yang sangat efektif supaya mampu menawarkan sebuah sistem pendidikan yang lentur dan tidak&nbsp;ekslusif,&rdquo; tegasnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Rektor UIN Wali Songo, H Muhibbin Noor berharap semoga ilmunya bermanfaat dan bisa memberi warna baru dalam dunia pendidikan Islam, beliau termasuk Profesor termuda di UIN Wali Songo Semarang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;UIN Wali Songo semarang dalam menunjang pelayanan sudah mengembangkan fasilitas, saat ini sedang berlangsung pembangan 8 gedung baru berkat bantuan Islamic Developmant Bank, dan tahun ini&nbsp;Alhamdulilah&nbsp;UIN Wali Songo sudah terakreditasi A, semoga ini menajadi pijakan awal untuk kebesaran UIN Wali Songo Semarang,&rdquo; ungkapnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Orang nomer 1 di UIN Wali Songo tersebut juga berpesan kepada Syamsul agar menindaklanjuti gagasan-gagasan yang dihasilkannya supaya bisa menjadi perbaikan dan penyempurnaan apa yang ada di lingkungan UIN Wali Songo dan sekitarnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Islam itu moderat, tidak condong ke kiri-kirian dan tidak condong ke kanan-kananan. Dan kita butuh para ahli untuk bisa membawa islam tepat di tengah,&rdquo; jelas Muhibbin.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Muhibbin juga menyampaikan harapannya kepada calon penggantinya menjadi rektor nanti agar bisa membawa dan memajukan UIN Wali Songo menjadi lebih baik lagi serta dapat memberikan manfaat kepada masyarakat sekitar maupun masyarakat Indonesia pada umumnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Selasa depan 9 Juli 2019 secara jabatan terakhir saya bertugas sebagai Rektor di sini. Akan ada rektor baru nanti. UIN sudah semakin berkembang baik dalam segi keilmuan maupun sarana dan prasarana penunjang. Semoga UIN ke depan lebih baik lagi dan lebih memberikan manfaat,&rdquo; pungkasnya. (Red: Muiz)</p>\r\n', '105', '15623278505d1f3b2a33303.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_info`
--

CREATE TABLE `kategori_info` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_info`
--

INSERT INTO `kategori_info` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Berita'),
(2, 'Berita Internasional'),
(96, 'Opini'),
(105, 'Daerah'),
(106, 'Isnu Jombang');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `kecamatan`) VALUES
(1, 'Bandar Kedungmulyo'),
(2, 'Bareng'),
(3, 'Diwek'),
(4, 'Gudo'),
(5, 'Jogoroto'),
(6, 'Jombang'),
(7, 'Kabuh'),
(8, 'Kesamben'),
(9, 'Kudu'),
(10, 'Megaluh'),
(11, 'Mojoagung'),
(12, 'Mojowarno'),
(13, 'Ngoro'),
(14, 'Ngusikan'),
(15, 'Perak'),
(16, 'Peterongan'),
(17, 'Plandaan'),
(18, 'Ploso'),
(19, 'Sumobito'),
(20, 'Tembelang'),
(21, 'Wonosalam');

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id` int(11) NOT NULL,
  `universitas` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universitas`
--

INSERT INTO `universitas` (`id`, `universitas`) VALUES
(1, 'Universitas Darul \'Ulum Jombang'),
(3, 'Sekolah Tinggi Keguruan & Ilmu Pendidikan PGRI'),
(4, 'Sekolah Tinggi Ilmu Ekonomi PGRI Dewantara'),
(5, 'Sekolah Tinggi Ilmu Kesehatan Husada'),
(6, 'Sekolah Tinggi Ilmu Kesehatan Pemkab Jombang'),
(7, 'Sekolah Tinggi Ilmu Kesehatan Insan Cendekia Medika'),
(8, 'Sekolah Tinggi Ilmu Kesehatan Bahrul Ulum Tambakberas'),
(10, 'Universitas KH. Abdul Wahab Chasbulloh'),
(11, 'Universitas Pesantren Tinggi Darul \'Ulum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `kategori_info`
--
ALTER TABLE `kategori_info`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kategori_info`
--
ALTER TABLE `kategori_info`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
