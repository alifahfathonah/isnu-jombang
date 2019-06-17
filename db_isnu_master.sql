-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jun 2019 pada 06.00
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jam` varchar(32) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama`, `pesan`, `jam`) VALUES
(8, 'PC ISNU', 'coba', '01/10, 23:12'),
(7, 'tester', 'percobaan', '27/09, 23:18:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datainfo`
--

CREATE TABLE `datainfo` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `noktp` varchar(50) NOT NULL,
  `jeniskel` varchar(10) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tgllahir` varchar(10) NOT NULL,
  `alamat1` varchar(50) NOT NULL,
  `alamat2` varchar(50) NOT NULL,
  `alamat3` varchar(50) NOT NULL,
  `notelp` varchar(50) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `pengurus` varchar(8) DEFAULT NULL,
  `jabatan` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datainfo`
--

INSERT INTO `datainfo` (`id_user`, `nama`, `noktp`, `jeniskel`, `tempatlahir`, `tgllahir`, `alamat1`, `alamat2`, `alamat3`, `notelp`, `jenjang`, `jurusan`, `instansi`, `pengurus`, `jabatan`) VALUES
(49, 'Abd Hannan Majdy', '3517092702810007', 'Laki - Lak', 'jombang', '27021981', 'TambakRejo', 'Jombang', 'Jombang', '081234490382', 'S 1', 'sistem informasi', 'stmik akakom', 'Cabang', 'Ketua'),
(54, 'Faizuddin FM. SP.d', '3517131004770002', 'Laki-laki', 'Jombang', '10-041977', 'Sentul', 'Tembelang', 'Jombang', '082247733808', 'S 1', 'Menagemen Pendidikan', 'UNIGRES', NULL, NULL),
(55, 'ABDUL MANAF', '3517061809820002', 'Laki-laki', 'JOMBANG', '18 / 09 /1', 'KAROBELAH 1/ KAROBELAH  RT 001 RW 002', 'Mojoagung', 'Jombang', '085731099976', 'S 1', 'PENJASKES', 'UNP KEDIRI PGRI', NULL, NULL),
(56, 'SAMSUL HUDA, S.HI', '3517202712760002', 'Laki-laki', 'Jombang', '27/12/1976', 'NGRANDULOR RT 12/6', 'Peterongan', 'Jombang', '081252787454', 'S 1', 'Syariah Muamalat ', 'IKAHA', NULL, NULL),
(57, 'April Adek Sutanto', '3517110804920004', 'Laki-laki', 'Jombang', '08/04/1992', 'Ds. Plosokerep', 'Sumobito', 'Jombang', '085707531400', 'S 1', 'Bahasa dan Sastra Indonesia', 'STKIP PGRI Jombang', NULL, NULL),
(59, 'Aang Fatihul Islam', '3517182109850002', 'Laki-laki', 'Jombang', '21/09/1985', 'Plosokendal-Plosogeneng', 'Jombang', 'Jombang', '085645671995', 'S 2', 'Pendidikan Bahasa dan Sastra (', 'UNESA', NULL, NULL),
(60, 'Astatik, S.Ag', '351707461176005', 'Perempuan', 'Mojokerto', '06/11/1976', 'Catakgayam', 'Mojowarno', 'Jombang', '085731623678', 'S 1', 'Ushuludddin', 'Universitas Darul Ulum Jombang', NULL, NULL),
(61, 'M. Jauharul Afif', '3522162203860001', 'Laki-laki', 'Bojonegoro', '22/03/1986', 'Denanyar', 'Jombang', 'Jombang', '085838080888, 081338080888', 'S 1', 'Tafsir', 'Al-Azhar', NULL, NULL),
(62, 'Amrulloh, S.Pd', '3517111101860001', 'Laki-laki', 'Jombang', '11/01/1986', 'Dsn. Kalongan Ds. Menturus', 'Kudu', 'Jombang', '085730815259', 'S 1', 'Pend. Matematika', 'STKIP PGRI JOMBANG', NULL, NULL),
(63, 'Malik mahardika AR., SH., M. Hum.', '3517091410840006', 'Laki-laki', 'Jombang', '14/10/1984', 'Tambak Beras ', 'Jombang ', 'Jombang', '085855471177', 'S 2', 'Hukum', 'Unmer Malang', NULL, NULL),
(64, 'Ainun Fuadah', '3517076209860002', 'Perempuan', 'Jombang', '22/09/1986', 'Catakgayam', 'Mojowarno', 'Jombang', '081229541818', 'S 2', 'Pendidikan Sains ', 'Universitas Negeri Yogyakarta', NULL, NULL),
(65, 'Imamuddin Roichan', '3517100408730001', 'Laki - Lak', 'Jombang', '04/08/1973', 'Gempoldampet 19/09 No. 09 Ngrandulor', 'Peterongan', 'Jombang', '08113026488', 'S 2', 'Manajemen', 'STIE Gotong Royong Pasar Minggu Jaksel', NULL, NULL),
(67, 'Nasrulloh ', '3517060612830003', 'Laki-laki', 'Jombang', '06/12/1983', 'Murukan', 'Mojoagung', 'Jombang', '085645608963', 'S 1', 'Matematika', 'STKIP PGRI Jombang', NULL, NULL),
(68, 'MIFTAKHUL HUDA', '876455656849', 'Laki-laki', 'Magelang', '08/01/1981', 'Banjardowo', 'Jombang', 'Jombang', '085292044000', 'S 1', 'Sistem informasi', 'UNWAHA TAMBAKBERAS JOMBANG', 'PC ISNU', 'Anggota Pengurus'),
(69, 'Nine Adien Maulana ', '3517200709790004', 'Laki-laki', 'Jombang ', '07/09/1979', 'Dusun Peluk, Desa Pacarpeluk ', 'Megaluh ', 'Jombang', '085655340317', 'S 2', 'Pendidikan Islam ', 'Universitas Darul Ulum Jombang ', NULL, NULL),
(70, 'SYAMSUL MAARIF, M.Pd', '3517080407750003', 'Laki-laki', 'Jombang', '04/07/1975', 'Dsn Sumoyono Ds Cukir ', 'Diwek', 'Jombang', '085648621888', 'S 2', 'Pendidikan Bahasa Inggris', 'UNIVERSITAS NEGERI MALANG', NULL, NULL),
(72, 'SAYEKTI PUJI RAHAYU', '3517075008740005', 'Perempuan', 'Jombang', '10 Agustus', 'Perum Sambong Permai H - 26', 'Jombang', 'Jombang', '081332119510', 'S 1', 'Kependidikan dan Keguruan', 'Universitas Terbuka Jakarta', NULL, NULL),
(73, 'BENY HENDRO YULIANTO SH', '3517080506800001', 'Laki-laki', 'JOMBANG', '05/06/1980', 'Dusun Ngemplak RT/RW :004/005 Desa Ngudirejo', 'Diwek', 'Jombang', '081242882715', 'S 1', 'ilmu hukum', 'Universitas DARUL ULUM Jombang', 'PC ISNU', 'Anggota'),
(76, 'MOKHAMAD SYAHAL MASRUR, S. Sos', '3517062812910002', 'Laki-laki', 'Jombang', '28/12/1991', 'Dsn. Wonoayu Timur RT 02 RW 02 Ds. Dukuhmojo', 'Mojoagung', 'Jombang', '085748980647', 'S 1', 'Sosiologi/Sosiatri', 'Universitas Darul Ulum Jombang', NULL, NULL),
(77, 'Muhamad Fatih Sururi', '3517011301870001', 'Laki-laki', 'Jombang', '13/01/1987', 'Ploso/Plosogenuk', 'Perak', 'Jombang', '085730902995', 'S 1', 'Pendidikan Matematika', 'STKIP PGRI Jombang', NULL, NULL),
(79, 'MOHAMAD SHOLAHUDDIN ', '3517131706760002', 'Laki-laki', 'jombang', '17/06/1976', 'jl.  Mojokrapak 12, Ds.  Mojokrapak', 'Tembelang ', 'Jombang', '081259037600', 'S 1', 'Ilmu Hukum', 'universitas Islam Malang', NULL, NULL),
(82, 'ROMZA, SPd.I', '3529081506910001', 'Laki-laki', 'Sumenep', '15/06/1991', 'Kepuh Kembeng, Keplaksari', 'Peterongan', 'Jombang', '081334000115', 'S 1', 'Pendidikan Agama Islam ', 'STIT-UW Jombang', NULL, NULL),
(84, 'Achmad Rizki Faradi S. Psi', '3517081209910001', 'Laki-laki', 'Jombang', '12/09/1991', 'Tebon-kayangan', 'Diwek', 'Jombang', '081224055847 / 085736163893', 'S 1', 'Psikologi', 'UIN MALIKI MALANG', 'PC ISNU', 'Anggota'),
(85, 'Muhammad baidowi', '500416049100005', 'Laki - Lak', 'Nganjuk', '16041991', 'Kepuh kembeng', 'Peterongan', 'Jombang', '085733545673', 'S 1', 'Pendidikan agama islam', 'STIT UW ', NULL, NULL),
(86, 'Mohamad Ali Murtadho, M.Kom.', '3517181505850002', 'Laki-laki', 'Jombang', '15/05/1985', 'RT. 04 RW. 16 Dsn. Subentoro Ds. Sumbermulyo', 'Jogoroto', 'Jombang', '085649845187', 'S 2', 'Teknik Informatika', 'Universitas Islam Indonesia Yogyakarta', NULL, NULL),
(87, 'Mohammad Hani', '351712703830005', 'Laki-laki', 'Jombang', '27031983', 'Tembelang', 'Tembelang', 'Jombang', '081216585888', 'S 1', 'Ilmu Hukum', 'Univ. Darul Ulum', NULL, NULL),
(88, 'Yayan Andhika Putra, S.Pd', '3517122008890001', 'Laki-laki', 'Jombang', '28/08/1989', 'Kandang Sapi, Kedungbetik', 'Kesamben', 'Jombang', '085733608880', 'S 1', 'Pend. Matematika', 'STKIP PGRI Jombang', NULL, NULL),
(89, 'RACHMAD AMIRUDIN, S.KOM', '3517062005820001', 'Laki-laki', 'JOMBANG', '20/05/1982', 'DSN. WONOAYU TIMUR RT 01 RW 02 DS. DUKUHMOJO', 'Mojoagung', 'Jombang', '08563404910', 'S 1', 'TEKNIK INFORMATIKA', 'UNIVERSITAS DARUL ULUM JOMBANG', NULL, NULL),
(90, 'AHMAD BADAWI,S.Ag., S.Pd', '3517062107730001', 'Laki-laki', 'Jombang', '21 Juli 19', 'Dukuhsari  Ds. Janti  RT 03 RW 03', 'Mojoagung', 'Jombang', '0857 0871 5374', 'S 1', 'B.Arab dan B. Indonesia', 'IAIN Sby dan UNISMA Malang', NULL, NULL),
(91, 'IMAM ROFII', '3517052711910001', 'Laki-laki', 'Jombang', '27/11/1991', 'Desa Carangwulung', 'Wonosalam', 'Jombang', '081333537987', 'S 1', 'PAI', 'STIT AL- URWATUL WUTSQO', NULL, NULL),
(92, 'MUHAMAD ZAKI', '351709280976001', 'Laki-laki', 'Blitar', '28/09/1976', 'Jl. Teratai I/36 Candimulyo Jombang', 'Jombang', 'Jombang', '085258112511', 'S 2', 'Manajemen Pendidikan Islam', 'Unipdu Jombang', NULL, NULL),
(93, 'Ahmad Khoirun Nasir', '3517082512850003', 'Laki-laki', 'Jombang', '25/12/1985', 'Dempok / Grogol', 'Diwek', 'Jombang', '085648906486', 'S 1', 'Teknik informatika', 'Universitas Darul Ulum Jombang', NULL, NULL),
(94, 'Fikri Rahmatulloh ', '3517081608920005', 'Laki-laki', 'Jombang ', '16/08/1992', 'Kayen/ Kayangan ', 'Diwek ', 'Jombang', '085732468677', 'S 1', 'Pendidikan Ekonomi ', 'STKIP PGRI JOMBANG ', NULL, NULL),
(95, 'YUSUF ISKANDAR', '3517091811720003', 'Laki-laki', 'JOMBANG', '11/18/1972', 'PANDANWANGI', 'Diwek', 'Jombang', '085790211157', 'S 1', 'PAI', 'IAIN MALANG', NULL, NULL),
(96, 'M Amin Rais', '3517071506890003', 'Laki-laki', 'Jombang', '15/06/1989', 'Bajang Karanglo', 'Mojowarno', 'Jombang', '085648581943', 'S 1', 'Ekonomi IE/SP', 'Universitas Darul Ulum Jombang', NULL, NULL),
(97, 'Ahmad Zulfahmi Aulawi', '3517082003890001', 'Laki-laki', 'Jombang', '20/031989', 'Dempok RT/RW 003/001 Grogol', 'Diwek', 'Jombang', '085648413400', 'S 1', 'Pendidikan Bahasa Inggris', 'STKIP PGRI Jombang', NULL, NULL),
(98, 'LULUK KHOTIMAH', '3517204909760001', 'Perempuan', 'Jombang', '09/09/1976', 'Dsn. Paritan Ds. Sudimoro', 'Megaluh', 'Jombang', '085852729879/085746932799', 'S 1', 'PAI', 'IKAHA TEBUIRENG- JOMBANG', NULL, NULL),
(99, 'Achmad fatchurrozi', '3517200305870006', 'Laki-laki', 'Jombang', '03/05/1987', 'Balongsari', 'Megaluh', 'Jombang', '085736245275', 'S 1', 'PAI', 'STAI Bahrul Ulum', NULL, NULL),
(100, 'Faris Trihatmoyo, SH', '3517161605840003', 'Laki-laki', 'Jombang', '16/05/1984', 'Brumbung,RT 01 RW 04, Desa Mangunan', 'Kabuh', 'Jombang', '082225333289', 'S 1', 'Ilmu Hukum', 'Undar', NULL, NULL),
(102, 'MASRUKHIN', '3517121303790004', 'Laki-laki', 'Jombang', '13/03/1979', 'Krandegan/ Kedungmlati', 'Kesamben', 'Jombang', '08510012996', 'S 2', 'Studi Islam', 'UNDAR', NULL, NULL),
(103, 'SUGIATI NINGSIH, S.E', '3517134210840001', 'Perempuan', 'Jombang', '02/10/1984', 'Mojokrapak', 'Tembelang', 'Jombang', '085649429669', 'S 1', 'Ekonomi', 'Universitas Darul Ulum Jombang', NULL, NULL),
(104, 'AHMAD GHOZALI', '3578280203870001', 'Laki-laki', 'lamongan', '2/3/1987', 'Wonosalam', 'Wonosalam', 'Jombang', '082231395319', 'S 2', 'PAI', 'UIN Sunan Ampel', NULL, NULL),
(105, 'M KHOIRUL ANWAR,SPd.I', '3517140202910001', 'Laki-laki', 'JOMBANG', '02/02/1991', 'JATIGEDONG', 'Ploso', 'JOMBANG', '082332833175', 'S 1', 'PENDIDIKAN BAHASA ARAB', 'UNHASY', NULL, NULL),
(106, 'MATINU BAYU WIRASTRA, S.Pd', '3517202909890002', 'Laki-laki', 'JOMBANG', '28/09/1988', 'GONGSENG', 'MEGALUH', 'Jombang', '085646295202', 'S 1', 'BAHASA dan SASTRA INGGRIS', 'STKIP PGRI JOMBANG', NULL, NULL),
(107, 'MUSLIK, S.Pd.I', '351711191019770003', 'Laki-laki', 'Jombang', '19/10/1977', 'Dusun BULU Desa BAKALAN', 'Sumobito', 'Jombang', '085648968095', 'S 1', 'PAI', 'UNIPDU Jombang', NULL, NULL),
(108, 'khoriqut tofa', '3517191801890002', 'Laki-laki', 'jombang', '18/01/1989', 'Ngumpul', 'Jogoroto', 'Jombang', '085853232231', 'S 1', 'sistem informasi', 'Universitas Pesantren Tinggi Darul Ulum Jombang', NULL, NULL),
(109, 'Mokh.  Fakhruddin S. MPd I', '3517152905800001', 'Laki-laki', 'Jombang', '29/05/1980', 'Bangsri', 'Plandaan', 'Jombang', '081553340029', 'S 2', 'PAI', 'IAIN Sunan Ampel Surabaya', 'PWC ISNU', 'Ketua'),
(110, 'AULIA ROHMAH', '3517086305910005', 'Perempuan', 'JOMBANG', '23/05/1991', 'GENDONG/WATUGALUH', 'Diwek', 'Jombang', '082245530807 / 085646231234', 'S 1', 'Pendidikan Agama Islam', 'UIN MAULANA MALIK IBRAHIM MALANG', 'PWC ISNU', 'Bendahara'),
(111, 'Abdur Rosyid', '3517092409820007', 'Laki-laki', 'Jombang', '24/09/1982', 'Denanyar', 'Jombang', 'Jombang', '+61416682409', 'S 2', 'Master of TESOL', 'Monash University', NULL, NULL),
(113, 'Abdurrachman Afifi, S.Pi', '3517080205840006', 'Laki-laki', 'Jombang', '02/05/1984', 'Gendong/ Watugaluh', 'Diwek', 'Jombang', '081230852333', 'S 1', 'Perikanan', 'Universitas Diponegoro, Semarang', 'PC ISNU', 'Anggota'),
(114, 'Lilik Zainiyah, S.Pd., M.Pd', '3517115303850007', 'Perempuan', 'Jombang ', '13/03/1985', 'Dsn. Krajan Rt/Rw 002/003 Desa Curahmalang ', 'Sumobito ', 'Jombang', '08563480080 ', 'S 2', 'Magister Pend.Bhs.Indonesia', 'Universitas DR. Soetomo Surabaya ', NULL, NULL),
(115, 'Zuhriatul fithriah ', '3517076705880002', 'Perempuan', 'Jombang', '27/05/1988', 'Catak gayam', 'Mojowarno', 'Jombang', '085733135544', 'S 2', 'Pendidikan biologi ', 'Universitas negeri yogyakarta', 'PC ISNU', 'Wakil Bendahara'),
(116, 'Mohammad Busyral Karim', '35170009190190003', 'Laki-laki', 'Jombang', '19/01/1990', 'Denanyar', 'Jombang', 'Jombang', '081297204705', 'S 1', 'T. Industri', 'ITS', NULL, NULL),
(117, 'H. Maulana Syahiduzzaman,SE,MM', '3517000190585002', 'Laki-laki', 'jombang', '19/05/1985', 'Tambakrejo V no 22-23', 'Jombang', 'Jombang', '08113361808', 'S 2', 'Manajemen', 'Universitas Airlangga', NULL, NULL),
(118, 'MOCH. SA RONI', '3517063107750001', 'Laki-laki', 'Jombang', '31/07/1975', 'Bandaran 01/01 Desa Mancilan', 'Mojoagung', 'Jombang', '081230255165', 'S 1', 'PGMI', 'UINSA Surabaya', NULL, NULL),
(119, 'SITI MAISAROH', '3517036603840004', 'Perempuan', 'JOMBANG', '26/03/1984', 'CERMENAN / SUGIHWARAS', 'Ngoro', 'Jombang', '085645804336', 'S 1', 'BAHASA INGGRIS', 'STKIP PGRI JOMBANG', NULL, NULL),
(120, 'AHMAD KHOTIB ', '3517062404840001', 'Laki-laki', 'Jombang ', '24 April 1', 'Mojongapit ', 'Jombang ', 'Jombang', '085856263331', 'S 1', 'Bahasa Indonesia ', 'STKIP PGRI JOMBANG', NULL, NULL),
(121, 'Achmad fanani S.Hi', '35170708128800034', 'Laki-laki', 'Jombang', '08/12/1988', 'Banjarsari/Rejoslamet', 'Mojowarno', 'Jombang', '085648372009', 'S 1', 'Hukum Islam', 'Unipdu jombang', NULL, NULL),
(125, 'Rifai abror Spd', '35170200001', 'Laki-laki', 'Jombang', '30/01/1990', 'Kepuhkembeng', 'Peterongan', 'Jombang', '085231284026', 'S 1', 'Ekonomi', 'Stkip pgri jombang', NULL, NULL),
(126, 'MUHAMAD ZAINURI,SE', '3517011306870001', 'Laki-laki', 'Jombang', '13/06/1987', 'Dusun Pagak Desa Sembung', 'Perak', 'Jombang', '085736340562', 'S 1', 'Ekonomi Pembangunan', 'Universitas Darul Ulum Jombang', NULL, NULL),
(127, 'Mia Iqlimah', '3517075910940002', 'Perempuan', 'jombang', '19/10/1994', 'catakgayam', 'Mojowarno', 'Jombang', '085851825691', 'S 1', 'pendidikan ipa', 'universitas negeri malang', NULL, NULL),
(128, 'Muhammad Khoirul Umam, S.Pd', '3517071108860001', 'Laki-laki', 'Jombang', '11/08/1986', 'Dsn. Gempolgarut Ds. Menganto', 'Mojowarno', 'Jombang', '085646047699', 'S 1', 'Pendidikan Matematika', 'STKIP PGRI Jombang', NULL, NULL),
(129, 'Isa Amrulloh', '3517111005850001', '', 'Jombang', '10/05/1985', 'Jeblok, Brudu', 'Sumobito', 'Jombang', '085645676917', 'S 1', 'Biologi', 'UIN MALANG', NULL, NULL),
(131, 'Amirul Arifin', '3517092012760009', 'Laki-laki', 'Pati, 20 Desember 976', '20/12/1976', 'Dayu / Tunggorono', 'Jombang', 'Jombang', '082221797333', 'S 1', 'EKONOMI', 'STIE PGRI DEWANTARA', NULL, NULL),
(132, 'FITHRUS SAIBANI', '3517070104860005', 'Laki-laki', 'JOMBANG', '01/04/1986', 'BANGUNREJO - GONDEK', 'Mojowarno', 'Jombang', '085648927750', 'S 1', 'Pendidikan Bahasa Inggris', 'STKIP PGRI JOMBANG', NULL, NULL),
(133, 'Nazhifatum Mutahhirah', '3517097108940003', 'Perempuan', 'Jombang', '31/08/1994', 'Dsn. Caruk Kulon RT/RW:002/002 Desa Jabon', 'Jombang', 'Jombang', '085732436850', 'S 1', 'Antropologi', 'Universitas Brawijaya', NULL, NULL),
(134, 'Ahmad Syamsun Faridi', '3517070909790012', 'Laki-laki', 'Jombang', '09/09/1979', 'catakgayam', 'Mojowarno', 'Jombang', '08555462117', 'S 1', 'Ushuluddin', 'UINSA Surabaya', NULL, NULL),
(135, 'SULUNG RAHMAWAN WIRA GHANI, MT', '3517120807850001', 'Laki-laki', 'BOJONEGORO', '08/07/1985', 'perum griya mancar permai, mancar peterongan jomba', 'Peterongan', 'Jombang', '08563087058', 'S 2', 'TEKNIK INDUSTRI', 'universitas trunojoyo &amp; universitas brawijaya', NULL, NULL),
(136, 'Abd. Basit Misbachul Fitri, M.HI.', '3517090207810006', 'Laki-laki', 'Jombang', '02-07-1981', 'Jl. Kusuma Bangsa IV, RT. 02, RW. 01 A, Tawangsari', 'Jombang', 'Jombang', '08123190465 / 085607819777', 'S 2', 'Syariah', 'IAIN SUNAN AMPEL SURABAYA 2007', NULL, NULL),
(137, 'Abdillah Basya', '3517073110810004', 'Laki-laki', 'Jombang', '31/10/1981', 'Ngelo - Gondek', 'Mojowarno', 'Jombang', '082234551160', 'S 1', 'Psikologi', 'UIN Malang', NULL, NULL),
(138, 'Siti Arifah, S.Psi, M.Psi', '3517094510800005', 'Perempuan', 'Lamongan', '05/11/1980', 'Jombatan', 'Jombang', 'Jombang', '+6285231700856', 'S 2', 'Psikologi', 'UNTAG Surabaya', NULL, NULL),
(139, 'DARMAWAN TRI LAKSONO,SE', '3517082412810005', 'Laki-laki', 'JOMBANG', '24/12/1981', 'DSN.DAPURNO DESA DAPURKEJAMBON', 'Jombang', 'Jombang', '085732808909', 'S 1', 'EKONOMI AKUNTANSI', 'UNIV.PUTRA BANGSA SURABAYA', NULL, NULL),
(140, 'Moh. Nurul Mubin. M.Pd', '3517132911700026', 'Laki-laki', 'Jombang', '29/11/79', 'Dsn. Doko Kepuhdoko Tembelang Jombang', 'Tembelang', 'Jombang', '085785885515', 'S 2', 'Manajemen Pendidikan', 'Universitas Hasyim Asyari Tebuireng Jombang', NULL, NULL),
(141, 'Akhmad Zainuddin,S.Pd,MMA', '3517081', 'Laki-laki', 'Jombang', '10071979', 'Babatan Ds.Kedawong', 'Diwek', 'Jombang', '08155156200', 'S 2', 'Manajemen Agribisnis', 'Universitas Islam Kadiri', NULL, NULL),
(142, 'Nur Khasanuri,SPd,MM', '3517071211750002', 'Laki-laki', 'Jombang', '12/11/75', 'Jl Joas 61 RT 05 RW 02 Mojojejer', 'Mojowarno', 'Jombang', '085733465734', 'S 2', 'Manajemen Sumber Daya Manusia', 'Universitas WR Supratman Surabaya', NULL, NULL),
(143, 'Deddy Zainuddin', '3517091112790003', 'Laki-laki', 'Jombang', '11121979', 'Mojongapit', 'Jombang', 'Jombang', '085733449988', 'S 1', 'Pendidikan Agama Islam', 'Universitas Darul Ulum', NULL, NULL),
(145, 'TOTOK YULIANTO, ST. MT.', '3517090507790004', 'Laki-laki', 'JOMBANG', '05/07/1979', 'Jombatan', 'Jombang', 'Jombang', '082142594455', 'S 2', 'Teknik Sipil', 'Unhasy Tebuireng', NULL, NULL),
(146, 'M.Shobih', '3517082005780007', 'Laki-laki', 'Jombang', '20/05/1986', 'mojosongo balongbesuk ', 'Diwek', 'Jombang', '085731779393', 'S 1', 'agama', 'undar', NULL, NULL),
(148, 'aminatus sholikhah', '3517094507800012', 'Perempuan', 'lamongan', '05/07/1980', 'candimulyo', 'jombang', 'Jombang', '085235202336', 'S 2', 'hukum bisnis', 'unmer', NULL, NULL),
(149, 'Bagus Fitrianto', '6109072603930002', 'Laki-laki', 'Padak', '26/03/1993', 'Maboh Permai', 'Belitang', 'Jombang', '085252076838', 'S 1', 'Pendidikan Bahasa Inggris', 'Universitas Tanjungpura Pontianak', NULL, NULL),
(150, 'Hanifun Nashor', '3517060101920006', 'Laki-laki', 'Jombang', '01/01/1992', 'Kademangan', 'Mojoagung', 'Jombang', '085733567557', 'S 1', 'Pendidikan Agama Islam', 'STAI Bahrul Ulum', NULL, NULL),
(151, 'Agus Masyhudi', '351711208730002', 'Laki-laki', 'Jombang', '21/08/1978', 'Mentoro Rt/Rw : 02/03', 'Sumobito', 'Jombang', '081553531608', 'S 1', 'Pendidikan Matematika', 'STKIP PGRI Jombang', NULL, NULL),
(152, 'Miftahudin Anis', '3517170902870002', 'Laki-laki', 'Jombang', '09/02/1987', 'Katemas', 'Kudu', 'Jombang', '081515305987', 'S 1', 'Teknik informatika', 'Univesitas Darul Ulum', NULL, NULL),
(153, 'Mochammad Aris', '3517170810830001', 'Laki-laki', 'Jombang', '8/10/1983', 'Dsn. Katemas RT RW 001 002 Ds. Katemas', 'Kudu', 'Jombang', '085731371765', 'S 1', 'Pendidikan Bahasa dan Sastra I', 'STKIP PGRI Jombang', NULL, NULL),
(154, 'Rohmawati Linasari', '3517015609880001', 'Perempuan', 'Jombang', '16/9/1988', 'Dsn. Katemas RT RW 001 002 Ds. Katemas', 'Kudu', 'Jombang', '085731371765', 'S 1', 'Pendidikan Bahasa Inggris', 'STKIP PGRI Jombang', NULL, NULL),
(155, 'Mohammad Nuzul Hidayat, S. Pd.', '3517170508850003', 'Laki-laki', 'Jombang', '5/8/1985', 'Dsn. Sumber Gurit RT RW 001 001 Ds. Katemas', 'Kudu', 'Jombang', '085648579615', 'S 1', 'Pendidikan Matematika', 'STKIP PGRI Jombang', NULL, NULL),
(156, 'M. Faisol Hidayat, S.Pd.I', '3517061912890001', 'Laki-laki', 'Jombang', '19/12/1988', 'Pekunden Kademangan', 'Mojoagung', 'Jombang', '085648421211', 'S 1', 'Pendidikan Islam', 'Universitas Darul Ulum Jombang', NULL, NULL),
(157, 'Hendrik Setiyo Mawan', '3517170512890001', 'Laki-laki', 'Jombang ', '05/12/1989', 'sumberjo/sumberteguh', 'Kudu', 'Jombang', '085854439289', 'S 1', 'pend. matematika', 'stkip pgri jombang ', NULL, NULL),
(158, 'Masum Maulani', '3517171311890001', 'Laki - Lak', 'Jombang', '13/11/1989', 'Dusun Genenglo Desa Sidokaton', 'Kudu', 'Jombang', '085738417278', 'S 1', 'Pendidikan Agama Islam', 'STIT Raden Wijaya Mojokerto', NULL, NULL),
(159, 'Nur Isnaini', '3517176408930001', 'Perempuan', 'Jombang', '24/8/1993', 'Dsn. Katemas RT RW 001 002 Ds. Katemas', 'Kudu', 'Jombang', '085648496021', 'S 1', 'Pendidikan Bahasa Inggris', 'STKIP PGRI Jombang', NULL, NULL),
(160, 'Muhammad Yazid Z. M, S. Pd.I, M. Pd', '3517052210920003', 'Laki-laki', 'Jombang', '22101992', 'Wonosalam', 'Wonosalam', 'Jombang', '085649999480', 'S 2', 'Pendidikan Agama Islam', 'UIN Maulana Malik Ibrahim Malang', NULL, NULL),
(161, 'Susilowati', '3517175407890001', 'Perempuan', 'Jombang', '14/7/1989', 'Dsn. Soko Ds. Kepuhrejo', 'Kudu', 'Jombang', '085706109212', 'S 1', 'PAI', 'STAIN Kediri', NULL, NULL),
(162, 'Fathur Rokhman', '3517170508930001', 'Laki-laki', 'Jombang', '5/8/1993', 'Dsn. Katemas RT/RW 002/002 Ds. Katemas', 'Kudu', 'Jombang', '085731967771', 'S 1', 'Teknik Informatika', 'Undar Jombang', NULL, NULL),
(163, 'Farid Wahyu Khoiruddin', '3517171603890001', 'Laki-laki', 'Jombang', '16/3/1989', 'Dsn. Randuwatang RT/RW 001/002 Ds. Randuwatang', 'Kudu', 'Jombang', '085755588671', 'S 1', 'Penjasorkes', 'STKIP PGRI Jombang', NULL, NULL),
(164, 'Hanif Sholahuddin Furqon', '3517170311880001', 'Laki-laki', 'Jombang', '3/11/1988', 'Dsn. Tapen Lor RT/RW 001/002 Ds. Tapen', 'Kudu', 'Jombang', '085746212353', 'S 1', 'Penjasorkes', 'STKIP PGRI Jombang', NULL, NULL),
(165, 'Husnul latifah ', '3517215904720001', 'Perempuan', 'jombang', '19/04/1972', 'keboan', 'Ngusikan', 'Jombang', '085727755356', 'S 1', 'Bimbingan penyuluhan masyaraka', 'IAIN Sunan Ampel Surabaya', NULL, NULL),
(166, 'Hamzah setiyawan', '3517032311870002', 'Laki-laki', 'Jombang', '23/11/1987', 'Dsn tegalan Ds kauman', 'Ngoro', 'Jombang', '08563149818', 'S 1', 'Pendidikan olahraga', 'Universitas nusantara PGRI Kediri', 'PC ISNU', 'Anggota'),
(167, 'MUHAMMAD AGUS SALIM', '3517070909920004', 'Laki-laki', 'Jombang', '09/09/1992', 'Catak Gayam', 'Mojowarno', 'Jombang', '085748935093', 'S 1', 'PENDIDIKAN AGAMA ISLAM', 'STIT UW JOMBANG', NULL, NULL),
(168, 'muhammad siswanto, M.Pd.I', '3517041407800002', 'Laki-laki', 'jombang', '14/07/1980', 'jln.mbah fatah iman dadirejo RT/RW 02/04 Ds.Ngrimb', 'Bareng', 'Jombang', '085730500357', 'S 2', 'Magister Pendidikan Islam', 'Universitas Darul Ulum', NULL, NULL),
(169, 'Khudrotun Nafisah', '3523044311840001', '', 'Tuban', 'O3/11/1984', 'Santrean Tembelang', 'Tembelang', 'Jombang', '081332154192', '', 'Sosiologi', 'Unesa/ UMM', NULL, NULL),
(171, 'sulaiman', '3517022617760003', 'Laki-laki', 'jombang', '26/07/1976', 'sukopinggir 02/01', 'Gudo', 'Jombang', '085790958391', 'S 1', 'pai', 'unipdu', NULL, NULL),
(173, 'Abdul Rosyid ', '3517091309890005', 'Laki-laki', 'Jombanh', '13/09/1989', 'Plosokendal/Plosogeneng', 'Jombang', 'Jombang', '085732335879', 'S 1', 'Pendidikan Matematika ', 'STKIP PGRI Jombang ', NULL, NULL),
(174, 'Bismar Basalama', '3517070612890002', 'Laki-laki', 'Jombang', '06/12/1989', 'Bangunrejo Gondek', 'Mojowarno', 'Jombang', '082245224055', 'S 1', 'Pendidikan Matematika', 'IAIN Sunan Ampel', NULL, NULL),
(175, 'Siti Ainiyah', '3517176504780002', 'Perempuan', 'Jombang', '250478', 'Katemas', 'Kudu', 'Jombang', '081216260800', 'S 2', 'Pendidikan agama Islam', 'Undar', NULL, NULL),
(176, 'Ali Syaihudin M. PdI', '3517071606820002', 'Laki-laki', 'Jombang ', '16/06/1982', 'Bayeman karanglo Mojowarno ', 'Mojowarno', 'Jombang', '085649496978', 'S 2', 'Manajemen pendidikan islam ', 'Unhasy Tebuireng ', NULL, NULL),
(177, 'M Choirul  lukman', '3517190305910005', 'Laki-laki', 'Sampang', '3/5/1991', 'Sumbermulyo ', 'Jogoroto', 'Jombang', '085853854987', 'S 1', 'Sistem informasi ', 'Universitas Pesantren Tinggi Darul Ulum', NULL, NULL),
(178, 'Muhammad Ifan Luqman Hakim, S. PdI. ', '3517182011800001', 'Laki-laki', 'Jombang', '20/11/1980', 'Rejosari', 'Bandar Kedungmulyo', 'Jombang', '085655660715', 'S 1', 'PBA', 'Ikaha Tebuireng', 'PWC ISNU', 'Ketua'),
(179, 'Achmad Mundzir', '3517060708870002', 'Laki-laki', 'Jombang', '07/08/1987', 'Klampisan/Tejo', 'Mojoagung', 'Jombang', '085730485790', 'S 1', 'Siyasah Jinayah (Hukum Pidana ', 'IAIN Sunan Ampel Surabaya', NULL, NULL),
(180, 'Adi Nuryanto', '3517182107900001', 'Laki-laki', 'Jombang', '21-07-1990', 'Rejosari', 'Bandar Kedungmulyo', 'Jombang', '085655055500', 'S 1', 'Akuntansi', 'Univ Negeri Malang', '', 'Bendahara'),
(181, 'M.Imam Nurul Zuhda', '3517123007740001', 'Laki-laki', 'Jombang', '30/07/1974', 'Jatipandak Jatiduwur', 'Kesamben', 'Jombang', '081230075374', 'S 1', 'PAI', 'Unipdu Jombang', NULL, NULL),
(182, 'Meriana Wahyu Nugroho,ST.,MT', '3517091601830010', 'Laki-laki', 'jombang', '16/01/1983', 'jl durian G/20 jombang permai', 'Jombang', 'Jombang', '081935089060', 'S 2', 'sipil', 'unhasy tebuireng jombang', NULL, NULL),
(183, 'Amir Syarifudin', '3517112801830005', 'Laki-laki', 'Jombang', '28/01/1983', 'Brudu', 'Sumobito', 'Jombang', '085735515955', 'S 1', 'Komputer', 'Universitas Darul Ulum', NULL, NULL),
(185, 'M Agung Purnomo SPdI', '3517082408910002', 'Laki-laki', 'Jombang', '24/08/1991', 'Bandung', 'Diwek', 'Jombang', '085649115469', 'S 1', 'PAI', 'STIT UW', NULL, NULL),
(186, 'ASBABUL ULUM', '3517048408230001', 'Laki-laki', 'JOMBANG', '23/08/1984', 'WATUGALUH', 'Diwek', 'Jombang', '085645890293', 'S 1', 'PAI', 'UNDAR JOMBANG', 'PWC', 'Ketua'),
(188, 'AHMAD ANDRIAN', '3517051203930005', '', 'JOMBANG', '12/03/1993', 'Dusun Plumpung/Desa Galengdowo', 'Wonosalam', 'Jombang', '082338848193', '', 'Al Ahwal Al Syahsiyyah', 'UIN Maulana Malik Ibrahim Malang', NULL, NULL),
(189, 'SITI AINIYAH', '3517176504780001', 'Perempuan', 'JOMBANG', '25/04/1978', 'KATEMAS', 'Kudu', 'Jombang', '081216260800', 'S 2', 'Pendidikan Agama Islam', 'Undar', NULL, NULL),
(190, 'Isa Amrulloh, S. Si.', '351711100585', 'Laki-laki', 'Jombang', '10/05/1985', 'Jeblok/Brudi', 'Sumobito', 'Jombang', '085645676917', 'S 1', 'Biologi', 'UIN MALANG', NULL, NULL),
(191, 'Dodik Waloyo', '3517090103850008', 'Laki-laki', 'Jombang', '01/03/1985', 'Banjardowk', 'Jombang', 'Jombang', '085645559006', 'S 1', 'PGSD', 'Universitas Terbuka', NULL, NULL),
(192, 'ILYAS NURUL AZAM', '3517091307840003', 'Laki-laki', 'JOMBANG', '13/07/1984', 'SUKOPURO KWARON', 'Diwek', 'Jombang', '081334093793', 'S 2', 'ILMU EKONOMI', 'UNIVERSITAS DARUL ULUM', NULL, NULL),
(193, 'Nashihul Amin,  S.  HI. ', '3517032310850001', 'Laki-laki', 'Gresik', '23/10/1985', 'Kertorejo', 'Ngoro', 'Jombang', '085649558300', 'S 1', 'Syariah', 'IKAHA', NULL, NULL),
(194, 'iis makhisoh', '3517204803870001', 'Perempuan', 'jombang', '08/03/1987', 'Pacarpeluk', 'Megaluh', 'Jombang', '085608500856', 'S 2', 'bahasa arab', 'uin Sunan Ampel', NULL, NULL),
(195, 'Eko Andy Saputro', '3517100503850001', 'Laki-laki', 'Jombang', '05/03/1985', 'Gempoldampet desa ngrandulor', 'Peterongan', 'Jombang', '08122992392', 'S 2', 'Hukum Islam', 'Institut Ilmu al-Quran', NULL, NULL),
(196, 'mujtahidah', '3517204803870002', 'Perempuan', 'jombang', '08/03/1987', 'Pacarpeluk', 'Megaluh', 'Jombang', '085735009036', 'S 1', 'Hubungan Internasional', 'Universitas Slamet Riyadi Surakarta', '', ''),
(197, 'Mustofa', '3517182409750002', 'Laki-laki', 'Jombang', '24/09/1975', 'dsn Gisikan Ds Banjarsari', 'Bandar Kedungmulyo', 'Jombang', '085735516670', 'S 1', 'PAI', 'AlUrwatul Wustqo Jombang', NULL, NULL),
(198, 'M. Syafiuddin Shobirin, M.Pd.I', '3517090204880001', 'Laki-laki', 'Jombang', '02/04/1988', 'Tambakberas Barat', 'Jombang', 'Jombang', '085646162003', 'S 2', 'PAI', 'UINSA Sunan Ampel Surabaya', NULL, NULL),
(199, 'MAULANA MASRUR', '357091306810006', 'Laki-laki', 'JOMBANG', '13/06/1981', 'DENANYAR INDAH', 'Jombang', 'Jombang', '081335370045', 'S 1', 'TENIK ', 'UNDAR JOMBANG', NULL, NULL),
(200, 'Hery Ridhwan', '3517031112910005', 'Laki-laki', 'Jombang', '11/12/1991', 'Cermenan Sugihwaras', 'Ngoro', 'Jombang', '0816566551', 'S 1', 'PAI', 'UNHASY', NULL, NULL),
(201, 'Sulthon Sulaiman', '351710160810003', 'Laki-laki', 'Jombang', '16/06/1981', 'Dusun Pule. Desa Tanjunggunung', 'Peterongan', 'Jombang', '08113444682', 'S 2', 'Manajemen Pendidikan Islam', 'UNIPDU', NULL, NULL),
(202, 'Hariyanto', '3517092808780010', 'Laki-laki', 'Bangkalan', '28/08/1978', 'Gentengan GG. V/07 Pulo Lor', 'Jombang', 'Jombang', '081335208200', 'S 1', 'Ekonomi Manajemen', 'Universitas Darul Ulum Jombang', NULL, NULL),
(203, 'AGUS MASYHUDI', '3517112108730002', 'Laki-laki', 'JOMBANG', '21/08/1978', 'MENTORO', 'Sumobito', 'Jombang', '081553531608', 'S 1', 'PENDIDIKAN MATEMATIKA', 'STKIP PGRI JOMBANG', NULL, NULL),
(204, 'ROIKHAN ARIF PAMBUDI ', '3517170503940002', 'Laki-laki', 'Jombang ', '05031994', 'Bakalanrayung ', 'Kudu', 'Jombang', '085732831459', 'S 2', 'Hukum Islam', 'UIN Maulana Maliki Ibrahim Malang', NULL, NULL),
(205, 'Kamil masrukan', '3517082212900001', 'Laki-laki', 'Jombang', '22/12/1990', 'Bogem/Grogol', 'Diwek', 'Jombang', '+6281259921264', 'S 1', 'Pendidikan Olahraga', 'Universitas Negeri Jakarta', NULL, NULL),
(206, 'MIFTAHUL MUNIR', '3517072111800002', 'Laki-laki', 'Jombang', '21/11/1980', 'Catakgayam', 'Mojowarno', 'Jombang', '08563044937', 'S 2', 'Magister Pendidikan Islam', 'Unhasy Tebuireng', NULL, NULL),
(207, 'Ahmad Mundzir', '3517060708870003', 'Laki-laki', 'Jombang', '07/08/1987', 'Dusun. Klampisan Desa Tejo', 'Mojoagung', 'Jombang', '085730485790', 'S 1', 'Siyasah Jinayah', 'IAIN Sunan Ampel Surabaya', NULL, NULL),
(208, 'ahmad fatoni', '3517131212890002', 'Laki-laki', 'jombang', '12/121989', 'kedunggaleh', 'Tembelang', 'Jombang', '085649944525', 'S 1', 'matematika', 'STKIP PGRI JOMBANG', NULL, NULL),
(209, 'Mahmudi', '3517092004840004', 'Laki-laki', 'Sampang', '20 April 1', 'Candimulyo', 'Jombang', 'Jombang', '082232100629', 'S 1', 'PAI', 'STIT-UW', NULL, NULL),
(210, 'KHOTIM FADHLI', '3517120302880001', 'Laki-laki', 'Jombang', '03/02/1988', 'Krandegan/Kedungmlati', 'Kesamben', 'Jombang', '082244857474', 'S 1', 'Pendidikan Ekonomi', 'STKIP PGRI JOMBANG', NULL, NULL),
(211, 'bahru rohim.s sosi', '3517082508770005', 'Laki-laki', 'jombang', '25.8.1977', 'bandung', 'Diwek', 'Jombang', '005631619917', 'S 1', 'kumunikasi peyiaran islam', 'ikaha tebuireng', NULL, NULL),
(212, 'Feni Qoriroh', '3517136501940001', 'Perempuan', 'Jombang', '25/01/1994', 'Balongombo', 'Tembelang', 'Jombang', '082257250283', 'S 1', 'Pend. Pancasila dan kewarganeg', 'Univ. Negeri Surabaya', NULL, NULL),
(213, 'chairul rizal', '3529051110880006', 'Laki-laki', 'sumenep', '11/10/1988', 'kaliwungu', 'Jombang', 'Jombang', '085648636437', 'S 1', 'tarbiyah', 'stit uw', NULL, NULL),
(214, 'achmad bajuri arief', '3517082911730001', 'Laki-laki', 'jombang', '29/11/73', 'desa pandanwangi', 'Diwek', 'Jombang', '082 132 405625', 'S 1', 'tarbiyah', 'STAIN MALANG', NULL, NULL),
(215, 'Laili Indra Mufidah', '3517086101880003', 'Perempuan', 'Jombang', '21/01/1988', 'Krandegan/Kedungmlati', 'Kesamben', 'Jombang', '085648303934', 'S 1', 'P. Ekonomi', 'STKIP PGRI Jombang', NULL, NULL),
(216, 'Imam Mafrudloh, S.Pd', '3517120211850001', 'Laki-laki', 'Jombang', '02/11/1985', 'Ds. Pojokkulon ', 'Kesamben', 'Jombang', '085784591764', 'S 1', 'Pendidikan Ekonomi Koperasi ', 'STKIP PGRI JOMBANG', NULL, NULL),
(217, 'Anwarul Chafid', '3517131505880005', 'Laki-laki', 'Jombang', '15/05/1988', 'Dusun Doko, Desa Kepuhdoko', 'Tembelang', 'Jombang', '085731222778', 'S 1', 'PAI', 'STAI Bahrul Ulum', NULL, NULL),
(218, 'Aliyah', '3517086408910003', 'Perempuan', 'Jombang ', '24/08/1991', 'Paritan/Keras', 'Diwek', 'Jombang', '085646325996', 'S 1', 'Pendidikan Matematika ', 'STKIP PGRI Jombang ', NULL, NULL),
(219, 'Ewilda Bakhtiar', '3517012503820003', 'Laki-laki', 'Jombang', '25/03/1982', 'desa cangkringrandu', 'Perak', 'Jombang', '08563563453', 'S 1', 'Teknologi Pertanian', 'universitas Brawijaya', NULL, NULL),
(220, 'Irawati', '3517055510850002', '', 'jombang', '15/10/1985', 'carangwulung', 'Wonosalam', 'Jombang', '085851959551', '', 'bahasa inggris', 'stkip pgri jombang', NULL, NULL),
(221, 'ANI TUTI ASWATI, S.Pd.I', '3517175608920001', 'Perempuan', 'Jombang', '16/08/1992', 'Bakalanrayung', 'Kudu', 'Jombang', '085736340726', 'S 1', 'Pendidikan Agama Islam ', 'UIN SUNAN AMPEL SURABAYA', NULL, NULL),
(222, 'Rifaatul Mahmudah', '3517114210930003', 'Perempuan', 'Jombang', '02/10/1993', 'Dsn. Tegalan Ds. Curah malang', 'Sumobito', 'Jombang', '085648915311', 'S 1', 'Bahasa dan Sastra Arab', 'Universitas Islam Negeri Maulana Malik Ibrahim Mal', '', ''),
(223, 'Amirul mukmin', '3517111850001', 'Laki-laki', 'Jombang', '17/11/1985', 'Bakalan', 'Sumobito', 'Jombang', '085733722306', 'S 1', 'Pend. Sejarah', 'Unesa Surabaya', NULL, NULL),
(224, 'Dami Farida,S.Pd', '3517105201680002', 'Perempuan', 'Jombang', '12/01/1968', 'Tanjunggunung', 'Peterongan', 'Jombang', '085853307470', 'S 1', 'Fisika', 'Kanjuruhan Malang', NULL, NULL),
(225, 'Akhmad Toni Syaifuddin', '3517122009810093', 'Laki-laki', 'Jombang', '20/09/1981', 'Sapon/Jombatan', 'Kesamben', 'Jombang', '081515253089', 'S 1', 'Pertanian', 'Darul Ulum', NULL, NULL),
(226, 'Ma rifatul  Lailiyah ', '3517126008720001', 'Perempuan', 'Lamongan', '20/08/1972', 'Dsn. Garu Ds. Podoroto ', 'Kesamben', 'Jombang', '085100114759 ', 'S 2', 'PAI', 'UNDAR Jombang ', NULL, NULL),
(227, 'Nurul Rahmawati, S PdI.', '3517126901810004', 'Perempuan', 'Kediri', '29011981', 'Krandegan-Kedungmlati', 'Kesamben', 'Jombang', '082257299801', 'S 1', 'Tarbiyah', 'UNDAR JOMBANG', NULL, NULL),
(228, 'M. KHOLILURROHMAN HASAN', '3527040606810002', 'Laki-laki', 'jombang', '06/06/1981', 'pojokkulon', 'Kesamben', 'Jombang', '085736991981', 'S 1', 'tarbiyah', 'STAINATA SAMPANG', NULL, NULL),
(229, 'Fatkul Hidayat, S.Ag.MM', '3517122012690003', 'Laki-laki', 'Jombang', '20/12/1969', 'Dsn Kandangsapi 01/06 Ds Kedungbetik', 'Kesamben', 'Jombang', '085102118226', 'S 2', 'Managemen SDM', 'Universitas Wijaya Putra Surabaya', NULL, NULL),
(230, 'Hj. Nur Shofiyah, S.Pd.I', '351 7 126108780001', 'Perempuan', 'Jombang', '21/08/1978', 'Dsn Kandangsapi 01/06 Ds Kedungbetik', 'Kesamben', 'Jombang', '085102118226', 'S 1', 'PAI', 'STIT Raden Wijaya Mojokerto', NULL, NULL),
(231, 'Achmad Zainul Falakh', '3517091006920005', 'Laki-laki', 'Jombang', '10/06/1992', 'Tambakberas', 'Jombang', 'Jombang', '081515513154', 'S 1', 'Sistem Informasi', 'Universitas KH. A. Wahab Hasbullah', NULL, NULL),
(232, 'Adhib Lutfi Rahim', '3517081503930007', 'Laki-laki', 'Ujung Pandang', '15/03/1993', 'Brambang', 'Diwek', 'Jombang', '081515309331', 'S 1', 'Bahasa dan Sastra Indonesia', 'STKIP PGRI Jombang', NULL, NULL),
(233, 'Muhammad Hakam Amarulloh. SE', '3517100211920001', 'Laki-laki', 'Jombang', '02/11//199', 'Peterongan', 'Peterongan', 'Jombang', '082285897379', 'S 1', 'ILMU EKONOMI', 'Universitas Darul Ulum Jombang', '', ''),
(234, 'Moh.Teguh Satriadi.,S.Pd.', '3517082204930003', 'Laki - Lak', 'Jombang', '22 04 1993', 'Bandungkrajan Bandung', 'Diwek', 'Jombang', '082257545309', 'S 1', 'Pendidikan Jasmani dan Kesehat', 'Stkip Pgri Jombang', NULL, NULL),
(235, 'Khoirul ibad. S.Hi', '3517082304820009', 'Laki-laki', 'Jombang', '23/04/1982', 'Bulurejo', 'Diwek', 'Jombang', '085648076066', 'S 1', 'Akhwalus syakhahiyah', 'IAIN SUNAN AMPEL', NULL, NULL),
(236, 'Candra Arga Dinata, S.Pd.I', '3517122109920002', 'Laki-laki', 'Jombang', '21/09/1992', 'Dusun Kedungdowo Desa Podoroto', 'Kesamben', 'Jombang', '08563329576', 'S 1', 'PAI', 'Undar Jombang', NULL, NULL),
(237, 'Sutrisno ', '3517200107800074 ', 'Laki-laki', 'Kediri ', '01/07/1980', 'Glagaharum RT 02 RW 01 Dukuharum ', 'Megaluh', 'Jombang', '081357616864 ', 'S 2', 'Manajemen Pendidikan Islam ', 'UNIPDU Jombang ', NULL, NULL),
(239, 'yuniar rose bhakti', '3517126206790003', 'Perempuan', 'jombang', '22/06/79', 'jombatan', 'Kesamben', 'Jombang', '085855418555', 'S 1', 'hukum', 'undar', NULL, NULL),
(240, 'Mas Puguh', '36791203820005', 'Laki-laki', 'Banjardowo', '12 03 1989', 'Lapangan ', 'Megaluh', 'Jombang', '0859346578910', 'S 3', 'Tambangan', 'PT', NULL, NULL),
(241, 'Akhmadi, ST.', '3517121312930001', 'Laki-laki', 'Jombang', '13/12/1993', 'Carangpranti - Carangrejo', 'Kesamben', 'Jombang', '085648422364', 'S 1', 'Desain Interior', 'Institut Teknologi Sepuluh Nopember (ITS) Surabaya', NULL, NULL),
(242, 'arif lukman', '3517090902840004', 'Laki-laki', 'jombang', '09/02/1984', 'ngeneng/jombatan', 'Jombang', 'Jombang', '085748811138', 'S 1', 'matematika', 'stkip pgri jombang', NULL, NULL),
(243, 'Muhamad Syafi Udin', '3517080305910002', 'Laki-laki', 'Jombang', '03/05/1991', 'Bandung', 'Diwek', 'Jombang', '085853933981', 'S 1', 'Teknik Informatika', 'UNDAR Jombang', NULL, NULL),
(244, 'Moh Syafii', '3517071608790008', 'Laki-laki', 'jombang', '16/08/1979', 'gedangan, gedangan', 'Mojowarno', 'Jombang', '085854144140', 'S 1', 'muamalah', 'ikaha', 'PC ISNU', 'Sekretaris'),
(245, 'IRWANUL FAUZI,S.Pd.I', '3517180212850001', 'Laki-laki', 'Jombang', '02/12/1985', 'Barongsawahan', 'Bandar Kedungmulyo', 'Jombang', '085649579786', 'S 1', 'PAI', 'UNHASY', NULL, NULL),
(246, 'Nadhroh Jauharoh, S.Pd', '3517094701830007', 'Perempuan', 'Sidoarjo', '08/01/1983', 'Annajiyah bahrul ulum tambakberas 3/3 tambakrejo', 'Jombang', 'Jombang', '081554423028', 'S 1', 'Pend. Bahasa Inggris', 'Unisma', NULL, NULL),
(247, 'machin', '3517091503730004', 'Laki-laki', 'sidoarjo', '15/03/73', 'mojongapit', 'Jombang', 'Jombang', '081332056000', 'S 1', 'manajemen', 'undar jombang', NULL, NULL),
(248, 'Mohamad Muhib,M.Pd.I', '3517120507740006', 'Laki-laki', 'Jombang', '05071974', 'Dero Rt/Rw : 03/V  Desa Kedungbetik ', 'Kesamben', 'Jombang', '085646031316', 'S 2', 'PAI', 'Universitas Darul Ulum Jombang', NULL, NULL),
(249, 'Samsul Muarif', '3517022404840002', 'Laki-laki', 'Jombang', '24/04/1984', 'Plumbon Gambang', 'Gudo', 'Jombang', '08563181624', 'S 1', 'Fisika', 'Unej', '', ''),
(250, 'Fathul Zaen', '3518102408850001', 'Laki-laki', 'Nganjuk', '24/08/1985', 'Perak', 'Perak', 'Jombang', '085790388646', 'S 1', 'PAI', 'STAIM Nglawak', NULL, NULL),
(251, 'siti muktakifah', '3517015904900005', 'Laki-laki', 'jombang', '19/04/1990', 'kalangan/kalangsemanding', 'Perak', 'Jombang', '085655660274', 'S 1', 'psikologi', 'Universitas Darul ulum', NULL, NULL),
(252, 'Nur Lailatul Fitri', '3517185408860001', 'Perempuan', 'Jombang', '14/08/1986', 'Semelo', 'Bandar Kedungmulyo', 'Jombang', '085645889294', 'S 1', 'Bimbingan Konseling', 'UNDAR JOMBANG', '', 'Sekretaris'),
(254, 'Saidmashar,', '3517102507740003', 'Laki-laki', 'Jimbang', '25 juli 20', 'Gading rt. 19 rw  05  tugusumberjo', 'Peterongan', 'Jombang', '081335264689', 'S 1', 'Sosiologi', 'Undar ', NULL, NULL),
(255, 'Eko Yulianto Saputro', '3514081707850001', 'Laki-laki', 'Pasuruan', '17/07/1985', 'Dsn. Tanjung 011/004 Ds. Ngusikan ', 'Ngusikan', 'Jombang', '081252751985', 'S 1', 'Pendidikan Tehnik Mesin ', 'Universitas Negeri Surabaya', NULL, NULL),
(257, 'Aji Saputro', '3517081705890004', 'Laki-laki', 'Jombang', '17/05/1989', 'Watugaluh', 'Diwek', 'Jombang', '081331324806', 'S 1', 'EKONOMI MANAGEMENT', 'Universitas Darul Ulum Jombang', '', ''),
(258, 'NINE ADIEN MAULANA ', '3517200709790001', 'Laki-laki', 'JOMBANG ', '07/09/1979', 'PELUK RT. 03 RW 04 PACARPELUK', 'Megaluh', 'Jombang', '085655340317', 'S 2', 'PENDIDIKAN ISLAM ', 'UNIVERSITAS DARUL ULUM JOMBANG ', 'Cabang', 'Anggota Bidang'),
(259, 'MUHAMMAD IRFAN', '35172108110940001', 'Laki-laki', 'JOMBANG', '08/10/1994', 'Dusun Tanjung Ds Ngusikan Kec Ngusikan Kab Jombang', 'Ngusikan', 'Jombang', '085704246034', 'S 1', 'Gizi', 'STIKES KARYA HUSADA PARE KEDIRI', NULL, NULL),
(260, 'nanang khotmunnajah', '3517081208860001', 'Laki-laki', 'jombang', '12081986', 'ds bandung', 'Diwek', 'Jombang', '085730084061', 'S 1', 'pendidikan agama islam', 'IKAHA', 'PC ISNU', 'Anggota Bidang'),
(262, 'M.Abdul ghofur', '251342789012', 'Laki-laki', 'bojonegoro', '17/09/1987', 'BALONGREJO NGUSIKAN', 'Ngusikan', 'Jombang', '085748281875', 'S 1', 'Pendidikan Bahasa inggris', 'Stkip pgri jombang', NULL, NULL),
(263, 'Wito', '3517162110810002', 'Laki-laki', 'Jombang', '21/10/1981', 'Dsn.kalipang Ds.Munungkerep', 'Ngusikan', 'Jombang', '085645443511', 'S 1', 'PAI ', 'STAI BAHRUL ULUM JOMBANG', '', ''),
(264, 'IFLAHATUL MASITHOH', '3517015001920001', 'Perempuan', 'JOMBANG', '10/01/1992', 'Dsn. Gading Ds. Gadingmangu RT/RW : 01/05 Kec. Per', 'Perak', 'Jombang', '085649585332', 'S 1', 'Bimbingan Konseling', 'Universitas Nusantara PGRI Kediri', NULL, NULL),
(265, 'EBID NASRULLOH', '3517012102840001', 'Laki-laki', 'Jombang', '21/02/1984', 'Juwet Glagahan', 'Perak', 'Jombang', '081553499687', 'S 1', 'Penjaskesrek', 'Universitas Nusantara PGRI Kediri', NULL, NULL),
(266, 'Umi kalsum ,S.pd', '3517217112740003', 'Perempuan', 'Jombang', '31-12-1974', 'dusun kambingan ds ngusikan ', 'Ngusikan', 'Jombang', '085730736664', 'S 1', 'Paud', 'Ikip pgri jember', NULL, NULL),
(267, 'AKH. BAIDHOWI MTS', '3517091501640005', 'Laki-laki', 'Kediri', '15-01-1964', 'Sariloyo-Sambongdukuh', 'Jombang', 'Jombang', '081335733572', 'S 1', 'Tarbiyah Bahasa Arab', 'STIT Bahrul Ulum Tambakberas', NULL, NULL),
(268, 'Husnul latifah S.Ag', '351721904720001', 'Perempuan', 'jombang, 19 April 1972', '19 april 1', 'jl.Propinsi RT/RW :001/003 Keboan lor Keboan', 'Ngusikan', 'Jombang', '0812-3223-3317', 'S 1', 'Bimbingan penyuluhan masyaraka', 'IAIN Sunan Ampel Surabaya', NULL, NULL),
(269, 'ENDAH DWI SUNARNI', '3517216309820001', 'Perempuan', 'Jombang', '23/9/1982', 'Manunggal', 'Ngusikan', 'Jombang', '085748418312', 'S 1', 'Psikologi', 'Universitas DARUL ULUM Jombang', NULL, NULL),
(270, 'KRaNADIYONO', '351720910750001', 'Laki-laki', 'Jombang', '09-10-1975', 'Dsn Tanjung Ds Ngudikan', 'Ngusikan', 'Jombang', '0 85731364127', 'S 1', 'Hukum', 'Darul Ulum Jombag', NULL, NULL),
(271, 'Herni Efianti', '3517215007950001', 'Perempuan', 'Mojokerto', '10/07/1995', 'Manunggal', 'Ngusikan', 'Jombang', '081247974568', 'S 1', 'Pendidikan Luar Sekolah', 'Universitas Jember', NULL, NULL),
(272, 'SHOFIUL ARIF', '3517082605910003', 'Laki-laki', 'Jombang', '26/05/1991', 'Bandung', 'Diwek', 'Jombang', '085731923123', 'S 1', 'Teknik Informatika', 'Universitas Darul Ulum Jombang', NULL, NULL),
(273, 'sajad mukafi', '3517010804760001', 'Laki-laki', 'jombang', '08041976', 'Sumberagung', 'Perak', 'Jombang', '085646138700', 'S 1', 'pertanian', 'undar', NULL, NULL),
(274, 'Mohamad Maftuh Annajah', '3517080306820006', 'Laki-laki', 'Jombang', '03/06/1982', 'Kedawong', 'Diwek', 'Jombang', '081333087999', 'S 1', 'Kependidikan Islam', 'IAIN Sunan Ampel Surabaya', NULL, NULL),
(275, 'Mahfudlotin Nikmah Yuliati', '3517186607860001', 'Perempuan', 'Jombang', '26/07/86', 'Krapak bandarkedungmulyo', 'Perak', 'Jombang', '085732388586', 'S 1', 'Biologi', 'UIN MALIKI MALANG', NULL, NULL),
(277, 'ABD. HALIM WAHYUDI', '3517071011870004', 'Laki-laki', 'Jombang', '10/11/1987', 'Dsn kwasen ds menganto', 'Mojowarno', 'Jombang', '08563430021', 'S 1', 'Pendidikan bahasa inggris', 'STKIP PGRI JOMBANG', NULL, NULL),
(278, 'Nur laili zakiyah', '3517076512910004', 'Perempuan', 'Jombang', '25/12/1991', 'Catakgayam', 'Mojowarno', 'Jombang', '085731899611', 'S 1', 'PGMI', 'UNIPDU', NULL, NULL),
(279, 'SADIYAH', '3517075011760001', 'Perempuan', 'JOMBANG', '10/11/1976', 'Catakgayam', 'Mojowarno', 'Jombang', '085655120689', 'S 1', 'PGMI', 'UNIPDU', NULL, NULL),
(280, 'MUCHAMAD KURNIAWAN AZIZI', '173517182803850002', 'Laki-laki', 'jombang', '28/03/1985', 'pucanganom/pucangsimo', 'Bandar Kedungmulyo', 'Jombang', '085649972174', 'S 1', 'Fisika', 'Univ. Negeri Malang', NULL, NULL),
(281, 'Lilik Agustin', '3517075708940003', 'Perempuan', 'Jombang', '17/08/1994', 'jl. mayor tumijo rt/rw 003/010 Catak Gayam Mojowar', 'Mojowarno', 'Jombang', '085790413010', 'S 1', 'Budidaya Perairan', 'Universitas Brawijaya', NULL, NULL),
(282, 'UMI MUSTAGHFIROH', '3517075307920004', 'Perempuan', 'Jombang', '13/07/1992', 'Catak gayam', 'Mojowarno', 'Jombang', '085-732-252100', 'S 1', 'Pendidikan geografi', 'Universitas Negeri Surabaya', '', ''),
(283, 'Imam Muslim', '3517071410870001', 'Laki-laki', 'jombang', '14/10/1987', 'catakgayam', 'Mojowarno', 'Jombang', 'moezliem068@gmail.com', 'S 1', 'tarbiyah', 'unhasy', '', ''),
(284, 'Johan hariyanto', '3517201003920001', 'Laki-laki', 'Jombang', '10/03/1992', 'Ngogri', 'Megaluh', 'Jombang', '085852073539', 'S 1', 'Ilmu Ekonomi &amp; study pemba', 'Universitas Darul Ulum Jombang', '', ''),
(285, 'M. BAGUS HIDAYATULLOH', '3517091711890004', 'Laki-laki', 'JOMBANG', '17/11/1989', 'DAPURKEJAMBON', 'Jombang', 'Jombang', '085749869226', 'S 1', 'BAHASA ARAB', 'STAI BAHRUL ULUM JOMBANG', NULL, NULL),
(287, 'M. Zakki Abd Shomad', '3517100801810002', 'Laki-laki', 'Jombang', '08/01/1981', 'Gempoldampet/Ngrandulor', 'Peterongan', 'Jombang', '085648737505', 'S 1', 'Ushuluddin', 'Undar', NULL, NULL),
(289, 'Fatkhul hidayat', '3517211108900002', 'Laki-laki', 'Jombang ', 'Jombang ', '11/08/1990', 'Ngusikan', 'Jombang', '085645862879', 'S 2', 'Pendidikan olahraga', 'Olahraga', NULL, NULL),
(291, 'IZARROHMAN FADLI', '3517082304870007', 'Laki-laki', 'Jombang', 'Jombang', '23/04/1987', 'Diwek', 'Jombang', '082139922285', 'S 1', 'Ahwal syakhsiyah Hukum Islam', 'IKAHA Tebuireng', 'PWC ISNU', 'Sekretaris'),
(295, 'ahmad fauzi', '3517080605900003', 'Laki-laki', 'jombang', '06/05/1990', 'kayangan', 'Diwek', 'Jombang', '085851312693', 'S 1', 'Teknik Sipil', 'Universitas Darul Ulum', NULL, NULL),
(297, 'Hanif ardiansyah', '3506042106910004', 'Laki-laki', 'Kediri', '21/06/1991', 'Jasem/watugaluh', 'Diwek', 'Jombang', '085732182920', 'S 1', 'Ekonomi islam', 'Fakultas ekonomi dan bisnis', NULL, NULL),
(299, 'Fery Sriafandi', '3517081609900003', 'Laki-laki', 'Ponorogo', '16/09/1990', 'Kwaron', 'Diwek', 'Jombang', '085730530437', 'S 1', 'Teknik Informatika', 'Universitas Darul Ulum Jombang', NULL, NULL),
(301, 'Uswatun hasanah', '3517086208770001', 'Perempuan', 'Jombang', '22/08/1977', 'Kedawong', 'Diwek', 'Jombang', '085730427177', 'S 1', 'PAI', 'UNHASY', NULL, NULL),
(305, 'M.Qoyyum Amirul mukminin', '3517081904930002', 'Laki-laki', 'jombang', '19/04/1993', 'kedaton/bulurejo', 'Diwek', 'Jombang', '085732474598', 'S 1', 'hukum bisnis syariah', 'universitas islam negeri maulana malik ibrahim mal', NULL, NULL),
(311, 'M Ali Mudzoffar', ' 3517082703780006', 'Laki-laki', 'Jombanh', '27/03/7&po', 'Pandanwangi', 'Diwek', 'Jombang', '085854425060', 'S 1', 'Bahasa dan Sastra Arab', 'UIN Sunan Ampel Surabaya', NULL, NULL),
(313, 'Muhammad Roqib, M.Pd.I', '3517080911810007', 'Laki-laki', 'Jombang', '09/11/1981', 'Bendet', 'Diwek', 'Jombang', '085746207895', 'S 2', 'Pendidikan Islam', 'Undar Jombang', NULL, NULL),
(321, 'UMI SOBICHAH', '3517084101890008', 'Perempuan', 'JOMBANG', '1/01/1989', 'KWARON', 'Diwek', 'Jombang', '085646081973', 'S 1', 'PENDIDIKAN MATEMATIKA', 'STKIP PGRI JOMBANG', NULL, NULL),
(323, 'Fauzadin Gansala', '3517081705900001', 'Laki-laki', 'Jombang', '17051990', 'Seblak', 'Diwek', 'Jombang', '085755740701', 'S 1', 'Teknik Informatika', 'Uin Malang', NULL, NULL),
(325, 'Neny Mutoharoh', '3517', 'Perempuan', 'Jombang', '24121986', 'Watugaluh', 'Diwek', 'Jombang', '085645890293', 'S 1', 'PGMI', 'Unipdu', NULL, NULL),
(327, 'Ahmad Ikrima Azman', '3517080907780004', 'Laki-laki', 'Banyuwangi', '09/07/1978', 'Kwaron', 'Diwek', 'Jombang', '085732144412', 'S 1', 'Syariah', 'ikaha', NULL, NULL),
(329, 'Moh Agus Setiabudi, S.H', '351408930005', 'Laki-laki', 'JOMBANG', '14081993', 'Jasem Watugaluh', 'Diwek', 'Jombang', '08563330378', 'S 1', 'HUKUM EKONOMI SYARUAH', 'UNHASY', '', ''),
(331, 'MOHAMMAD LUTHFI, S. Ag', '3517012111720001', 'Laki-laki', 'JOMBANG', '21/11/1972', 'GADINGMANGU', 'Perak', 'Jombang', '085746303072', 'S 1', 'USHULUDDIN', 'STAIN KEDIRI', NULL, NULL),
(333, 'Abdul Halim, S.Ag', '3517180107760042', 'Laki-laki', 'Jombanv', '01/07/1976', 'Brangkal', 'Bandar Kedungmulyo', 'Jombang', '065648855626', 'S 1', 'PAI', 'IKAHA tebuireng', NULL, NULL),
(335, 'Nasrudin Latif, S.Ag', '3517181709760003', 'Laki-laki', 'Jombang', '17/09/1976', 'Semelo Kayen', 'Bandar Kedungmulyo', 'Jombang', '081233573387', 'S 1', 'Ahwalus Syaksiyah', 'IAIN SUNAN AMPEL SURABAYA', NULL, NULL),
(340, 'UTARI KARTININGRUM, S.AD', '3517086104860005', 'Perempuan', 'JOMBANG', '21041986', 'MEJOYO KERAS', 'Bandar Kedungmulyo', 'Jombang', '085648090803', 'S 1', 'ADMINISTRASI BISNIS', 'BRAWIJAYA', NULL, NULL),
(341, 'shinta nur cholifah', '123456789911', 'Perempuan', 'jombang', '11/12/1995', 'mojoduwur', 'Mojowarno', 'Jombang', '085645149126', 'S 1', 'teknik sistem informasi', 'unipdu jombang', NULL, NULL),
(343, 'M. Zainal Afif ', '3517181406900002', 'Laki-laki', 'Jombang', '14/06/1990', 'Brangkal', 'Bandar Kedungmulyo', 'Jombang', '085745170609', 'S 1', 'Manajemen Pendidikan Islam ', 'Sekolah Tinggi Agama Islam Darussalam (STAIDA) Kre', NULL, NULL),
(346, 'Mafrud Sultoni', '3517080406950001', 'Laki-laki', 'Jombang', '04/06/1995', 'Pojok/Puton', 'Diwek', 'Jombang', '085607481892', 'S 1', 'Sistem Informasi', 'Unipdu', NULL, NULL),
(347, 'Riza Fitrianingsih, S. Pd', '3517085404910001', 'Perempuan', 'Jombang', '14/4/1991', 'Kwaron', 'Diwek', 'Jombang', '085851954191', 'S 1', 'Bahasa dan Sastra Indonesia', 'STKIP PGRI JOMBANG', NULL, NULL),
(348, 'Khumairoh halimatus sya dia', '3517126203940001', 'Perempuan', 'Jombang', '22/03/1994', 'Kesamben', 'Kesamben', 'Jombang', '085648885513', 'S 1', 'Hukum Keluarga Islam', 'UIN Sunan Ampel Surabaya', NULL, NULL),
(350, 'UTARI KARTININGRUM, S.AD', '3517086104860004', 'Perempuan', 'JOMBANG', '21041986', 'MEJOYO KERAS', 'Diwek', 'Jombang', '085648090803', 'S 1', 'ADMINISTRASI BISNIN', 'UNIV. BRAWIJAYA', NULL, NULL),
(352, 'QURROTUL AINI', '3517086404940003', 'Perempuan', 'JOMBANG', '240419994', 'KERAS', 'Diwek', 'Jombang', '085731486886', 'S 1', 'PEND. FISIKA', 'UNIV. JEMBER', NULL, NULL),
(357, ' DIA', '22031994', 'Perempuan', 'JOMBANG', '22/03/1994', 'KESAMBEN', 'Kesamben', 'Jombang', '085648885513', 'S 1', 'HUKUM KELUARGA ISLAM', 'UIN SUNAN AMPEL SURABAYA', NULL, NULL),
(359, 'M. Romli', '3517082701790002', 'Laki-laki', 'Jombang', '27/01/1979', 'Bandung', 'Diwek', 'Jombang', '08563125639', 'S 1', 'BK', 'UNDAR Jombang', NULL, NULL),
(361, 'ARIKAWATI', '3517085510840015', 'Perempuan', 'Jombang', '15/10/1984', 'Pundong', 'Diwek', 'Jombang', '082139922285', 'S 1', 'PGSD', 'Universitas terbuka', NULL, NULL),
(362, 'Siti zahiroh', '3517124401890001', 'Perempuan', 'Jombang', '04/01/1989', 'Jatiduwur', 'Kesamben', 'Jombang', '085655264783', 'S 1', 'PBA', 'STIBAFA', NULL, NULL),
(363, 'Firdaus Ahliz Zammi Sihotang', '3517083010910001', 'Laki-laki', 'Jombang', '30/10/1991', 'Watugaluh', 'Diwek', 'Jombang', '085648989294', 'S 1', 'Ilmu Keolahragaan', 'Universitas negeri malang', NULL, NULL),
(364, 'Arifuddin Rokhmanto Hudoyo ', '3517121007920004', 'Laki-laki', 'Jombang', '10/07/1992', 'Carang Rejo', 'Kesamben', 'Jombang', '081249903197', 'S 1', 'Hukum ', 'Universitas Brawijaya', NULL, NULL),
(365, 'Uswatun Hasanah,S.Pd.I', ' 3517034210830001', 'Perempuan', 'jombang', '02-10-1983', 'payak santren,rejoagung', 'Ngoro', 'Jombang', '081357788643', 'S 1', 'PAI', 'UIN Malang', NULL, NULL),
(366, 'Muchlison,S.Pd.I', '351703240290005', 'Laki-laki', 'jombang', '24-02-1979', 'dayangan,genukwatu', 'Ngoro', 'Jombang', '085646323232', 'S 1', 'PAI', 'STAI hasanudin Pare', NULL, NULL);
INSERT INTO `datainfo` (`id_user`, `nama`, `noktp`, `jeniskel`, `tempatlahir`, `tgllahir`, `alamat1`, `alamat2`, `alamat3`, `notelp`, `jenjang`, `jurusan`, `instansi`, `pengurus`, `jabatan`) VALUES
(367, 'Chirul muanam', '351708160885000*', 'Laki-laki', 'Jonbang', '16081985', 'Tanggungan santren bandung', 'Diwek', 'Jombang', '085784939456', 'S 1', 'Menegemen', 'Raden wijaya', NULL, NULL),
(368, 'Ramadhani eka kurniawan', '3517080703920002', 'Laki-laki', 'Jonbang', '07031992', 'Buntel keras', 'Diwek', 'Jombang', '085608026832', 'S 1', 'Informatika', 'Wearnes', NULL, NULL),
(370, 'Siti humaidah', '3517086005930003', 'Perempuan', 'Jonbang', '20051993', 'Paritan keras', 'Diwek', 'Jombang', '085732649780', 'S 1', 'Sosial ekonomi pertanian', 'Brawijaya', NULL, NULL),
(371, 'Erlina usianti', '3517085211930002', 'Perempuan', 'Jonbang', '12111993', 'Seblak kwaron', 'Diwek', 'Jombang', '085655421355', 'S 1', 'Pgmi', 'Unhasy', NULL, NULL),
(374, 'Dianita nafisatun niswah', '3517086701950001', 'Perempuan', 'Jonbang', '27011995', 'Keras', 'Diwek', 'Jombang', '085852604547', 'S 1', 'Pgmi', 'Unhasy', NULL, NULL),
(375, 'Riza anissatul fitriana', '3517086203930002', 'Perempuan', 'Jonbang', '22031993', 'Keras', 'Diwek', 'Jombang', '085745367027', 'S 1', 'Budidaya pertania', 'Brawijaya', NULL, NULL),
(376, 'HARTONO', '3517111005770007', 'Laki-laki', 'Jombang', '10/05/1977', 'Gedangan', 'Sumobito', 'Jombang', '', 'S 2', 'Manajemen Pendidikan Islam', 'UNIPDU Jombang', NULL, NULL),
(377, 'Mukhamad Lukman Chakhim', '3517080050910002', 'Laki-laki', 'Jombang', '05/02/1991', 'Kedaton/Bulurejo', 'Diwek', 'Jombang', '085815553903', 'S 1', 'Keperawatan', 'Stikes pemkab jombang', NULL, NULL),
(378, 'Imam Syuhadi ', '3517082607880001', 'Laki-laki', 'Jombang ', '26/07/1988', 'Gebangmalang/Bandung ', 'Diwek', 'Jombang', '085648308275 ', 'S 1', 'Kimia', 'ITS Surabaya ', NULL, NULL),
(380, 'Mochamad Mulyono', '3517060805950004', 'Laki-laki', 'Jombang', '08/05/1995', 'Karobelah', 'Mojoagung', 'Jombang', '085855069127', 'S 1', 'Pendidikan Agama Islam', 'STAI ARROSYID ', '', ''),
(381, 'rois nurul fadila', '1112345678', 'Perempuan', 'bangkalan ', '17041995', 'rejoso', 'Peterongan', 'Jombang', '0876539657', 'S 1', 'sistem informasi', 'unipdu', NULL, NULL),
(382, 'saiful amin', '12345678', 'Laki-laki', 'jombang', '11061995', 'peterongan', 'Peterongan', 'Jombang', '08767654345', 'S 1', 'teknik mesin', 'undar', NULL, NULL),
(383, 'Pajrizka ', '3517080703910006', 'Laki-laki', 'Jombang ', '7 maret 19', 'Bogem ', 'Diwek', 'Jombang', '085804108927', 'S 1', 'B.Indonesia', 'STKIP PGRI JOMBANG ', NULL, NULL),
(384, 'M zainur rofiq', '', 'Laki-laki', 'Jombang', '07/10/1972', 'Podoroto', 'Kesamben', 'Jombang', '085746249289', 'S 2', 'PAI', 'Universitas Darul Ulum', NULL, NULL),
(385, 'Achmad Winedy RyanTono', '3517120808930001', 'Laki-laki', 'jombang', '08/08/1993', 'jatiduwur', 'Kesamben', 'Jombang', '0895332161311', 'S 1', 'T.Informatika', 'Univ Sidoarjo', NULL, NULL),
(390, 'Mohammad Mansyur Abidin', '3517191404950002', 'Laki-laki', 'Jombang', '14/041995', 'mayangan', 'Jogoroto', 'Jombang', '083857354001', 'S 1', 'Teknik Informatika', 'Universitas Darul Ulum', NULL, NULL),
(391, 'Moh. Ali Fikri', '3571020305730010', 'Laki-laki', 'Kediri', '03051973', 'Perum Bumi Asri', 'Jombang', 'Jombang', '081555829994', 'S 1', 'Ekonomi', 'Islam Kadiri', NULL, NULL),
(392, 'Muhamad Holil', '3578230505830002', 'Laki-laki', 'Jombang', '05051983', 'Jl. Adityawarman', 'Jombang', 'Jombang', '0818324180', 'S 2', 'Hukum', 'brawijaya malang', NULL, NULL),
(394, 'M.Nurul Huda', '3516102007810003', 'Laki-laki', 'Mojokerto', '20-07-1981', 'Dsn.Sranten Desa.Panglungan', 'Wonosalam', 'Jombang', '081227131381', 'S 1', 'Bahasa dan sastra indonesia', 'STKIP PGRI Jombang', NULL, NULL),
(407, 'Nailatin Fauziyah', '3517095206740005', 'Perempuan', 'Bojonegoro', '12/06/1974', 'Jl. Kalpataru E.5 RT.04 RW.04 Kepanjen', 'Jombang', 'Jombang', '08125908172', 'S 1', 'Psikologi', 'Univ. Darul Ulum Jombang', NULL, NULL),
(420, 'Taufik Hidayat', '3517133005730003', 'Laki-laki', 'Bantul', '30/4/1973', 'Kalijaring', 'Tembelang', 'Jombang', '081315442380', 'S 1', 'PBA dan Sistim Informasi', 'IAiN)UIN Sunan Kalijaga dan STMIK Bahrul Ulum', NULL, NULL),
(421, 'Siti Rofiah', '3517076707860005', 'Perempuan', 'Jombang', '27/07/1986', 'Jl. Irian jaya no 55', 'Jombang', 'Jombang', '081233972464', 'S 2', 'Pendidikan Guru Madrasah Ibtid', 'UIN Maliki Malang', NULL, NULL),
(423, 'Sholihun', '3517040101720004', 'Laki-laki', 'Jombang', '01/01/1972', 'Dadirejo/Ngrimbi', 'Bareng', 'Jombang', '081357961040', 'S 1', 'PAI', 'Undar', NULL, NULL),
(424, 'Khorul anam, s.kom', '3517210402820001', 'Laki-laki', 'Jombang', '04-02-1982', 'Keboan', 'Ngusikan', 'Jombang', '085655733494', 'S 1', 'Sistem infirmasi', 'STIMIK barul ulum tambakberas jombang', '', ''),
(433, 'ACHMAD MUZAYYIN', '3517080606770006', 'Laki-laki', 'Jombang', '06/06/1977', 'PANDANWANGI', 'Diwek', 'Jombang', '085806028739', 'S 1', 'Pendidikan Agama Islam', 'UIN Malang', NULL, NULL),
(435, 'Misbachudin, S.Kom', '3517121712840002', 'Laki-laki', 'Jombang', '17/12/1984', 'Pojokkulon RT/RW 004/002 Pojokkulon', 'Kesamben', 'Jombang', '085655620813', 'S 1', 'Sistem Informasi dan Komputer', 'STMIK Bahrul Ulum Tambakberas', NULL, NULL),
(436, 'Muhammad Ahmad Sahal', '3517090904940002', 'Laki-laki', 'Jepara', '09/04/1994', 'Dsn. Sariloyo, Ds. Sambongdukuh', 'Jombang', 'Jombang', '085648580147', 'S 1', 'PBA', 'Unwaha', NULL, NULL),
(439, 'Mukhammad Burhanuddin', '3517092609860003', 'Laki-laki', 'Jombang', '26091986', 'Jl anggrek 9 blok F no 15 perumda candimulyo jomba', 'Jombang', 'Jombang', '085697447447', 'S 1', 'Kedokteran', 'Unair', NULL, NULL),
(440, 'Lailatul Rochmah.  S. Pd', '3517085608930006', 'Perempuan', 'jombang', '16/08/1993', 'desa bulurejo', 'Diwek', 'Jombang', '085736120193', 'S 1', '', 'universitas hasyim asyari tebu ireng jombang', NULL, NULL),
(441, 'Fathur rozak', '3517170601860001', 'Laki-laki', 'Jombang', '06/01/1986', 'Kepuhrejo', 'Jombang', 'Jombang', '085334407534', 'S 1', 'PAI', 'STIT Raden Wijaya Mojokerto', NULL, NULL),
(442, 'MUH ARIS HIDAYATULLOH', '3517170808780002', 'Laki-laki', 'JOMBANG', '05/08/1978', 'Dusun Roworayung RT.06 RW. 03 desa Bakalanrayung', 'Kudu', 'Jombang', '085731075751', 'S 1', 'Tarbiyah', 'STIT Raden Wijaya Mojokerto', NULL, NULL),
(443, 'M.Roqib', '3517083008910003', 'Laki-laki', 'Keras', '30/08/1991', 'Keras', 'Jombang', 'Jombang', '085645611435', 'S 2', 'Magister manajemen', 'Universitas Dr Soetomo surabaya', NULL, NULL),
(444, 'Didik Firdiyanto', '3517110503870003', 'Laki-laki', 'Jombang', '05/03/1987', 'Plosokerep', 'Sumobito', 'Jombang', '082233751999', 'S 1', 'Pendidikan Agama Islam', 'Unipdu', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datauser`
--

CREATE TABLE `datauser` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datauser`
--

INSERT INTO `datauser` (`id`, `username`, `pass`) VALUES
(1, 'isnu2017', '2bf50fb0acb29382c4a2f557f9a92ca7'),
(2, 'Bandar Kedungmulyo', '26aae8c6493f46a4f5b1b1f8fdfc1447'),
(3, 'Bareng', '425d87fcef768e183042e098db73ecd7'),
(4, 'Diwek', 'ace87cae1a3b55f4a71d8a9b2132c87a'),
(5, 'Gudo', 'fddcd904b8546a923066a21ed0519a4d'),
(6, 'Jogoroto', '1e52a220e04e84949e7c262f6d90aceb'),
(7, 'Jombang', '7973f2d1ef8400c97e9d1f9b712692d4'),
(8, 'Kabuh', 'cbd687a9a57b6adc43a054c75bdbc017'),
(9, 'Kesamben', 'eef59164bac39728850105b35872fa30'),
(10, 'Kudu', '1c57d0d5c82ed23d9f092dc37c456628'),
(11, 'Megaluh', 'c09d66425f76b005c4397898f089cf4f'),
(12, 'Mojoagung', 'd4b1606a01336cc5c9815de9e8140d74'),
(13, 'Mojowarno', 'ca9d4f8b678fcce7a75c1ff3461b3607'),
(14, 'Ngoro', '9b2c24a81bb8dec644e7446815258af6'),
(15, 'Ngusikan', '5582dfe410717364f31d57471ae39f72'),
(16, 'Perak', '953c413a94a99984ea374aa78706a565'),
(17, 'Peterongan', '2200c8555ee1450a0e1353be0e6cade3'),
(18, 'Plandaan', '3f8fb4a926823b03b109d60c892ec1c6'),
(19, 'Ploso', '96c4a0387c5505bec4d1ce238d6af128'),
(20, 'Sumobito', '9e9f82aec910b3879a1f41be3d0232f4'),
(21, 'Tembelang', 'fdd22fcdad1460a6ae50bd1afc9d32c2'),
(22, 'Wonosalam', 'cc08a6ee19c030fea80c9e68f646ff26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `imgname` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `alttext` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `imgname`, `title`, `alttext`) VALUES
(2, 'a65ba2240201791b48250037d4dd8f0d.jpg', '3517092702810007', '3517092702810007'),
(3, 'ROMZA.jpg', '3529081506910001', '3529081506910001'),
(4, '5-51101_icon-map-pin-google-maps-icons-png.png', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datainfo`
--
ALTER TABLE `datainfo`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `noktp` (`noktp`);

--
-- Indexes for table `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `datainfo`
--
ALTER TABLE `datainfo`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445;
--
-- AUTO_INCREMENT for table `datauser`
--
ALTER TABLE `datauser`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
