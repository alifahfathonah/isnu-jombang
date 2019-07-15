-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 11:18 AM
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
(2, 'alfiantaufani', '827ccb0eea8a706c4c34a16891f84e7b', 'Ahmad Alfian Taufani, S.Kom', '2907575779', 'Laki-Laki', 'Jombang', '2000-01-01', 'Dukuhklopo', 'Peterongan', 'Jombang', '08138313223', 'S1', 'Teknik Informatika', 'Universitas KH. A Wahab Hasbulloh', '10072019102855aku.jpg'),
(5, 'yasir', '81dc9bdb52d04dc20036dbd8313ed055', 'M. Yasyir Arafat. Si', '78025576897830', 'Laki-Laki', 'Gersik', '2000-07-02', 'Medaeng', 'Jombang', 'Jombang', '08138313784', 'S1', 'Sistem Informasi', 'Universitas KH. A Wahab Hasbulloh', '04072019073709person_3.jpg'),
(14, 'andini', '81dc9bdb52d04dc20036dbd8313ed055', 'Andini Dwi Andiana, S. Pdi', '7733628863', 'Perempuan', 'Jombang', '2019-12-31', 'Monoayu', 'Peterongan', 'Jombang', '081383167850', 'S2', 'Pendidikan Agama Islam', 'Universitas KH. A Wahab Hasbulloh', '04072019080707person_1.jpg'),
(19, 'muuslim', '81dc9bdb52d04dc20036dbd8313ed055', 'Muslimin, SE', '7393792739', 'Laki-Laki', 'Jombang', '1997-04-20', 'Mungol', 'Jombang', 'Jombang', '081383137821', 'S1', 'Menenjemen', 'Universitas Diponegoro', '05072019075304avatar.png'),
(22, 'budi', '81dc9bdb52d04dc20036dbd8313ed055', 'Budi Wicaksono, SE', '29075757498', 'Laki-Laki', 'Majalengka', '1996-10-11', 'Mbalong Biru', 'Diwek', 'Jombang', '081383137826', 'S1', 'Ekonimi', 'STIE Dewantaara', ''),
(25, 'Eskulin', '81dc9bdb52d04dc20036dbd8313ed055', 'Alin Aliya', '00772662', 'Perempuan', 'Tuban', '2000-07-11', 'Cendoro', 'Palang', 'Tuban', '087665345789', 'S3', 'Keperawatan', 'Univeesitas Lamongan', '15072019060437IMG-20190626-WA0020.jpg'),
(27, 'angga', '827ccb0eea8a706c4c34a16891f84e7b', 'Angga Dwi Rahmawan', '2907575779', 'Laki-Laki', 'Jombang', '1999-12-31', 'Dukuhklopo', 'Bareng', 'Jombang', '081383167850', 'S1', 'Keperawatan', 'STIKES PEMKAB JOMBANG', ''),
(30, 'kirana', '827ccb0eea8a706c4c34a16891f84e7b', 'Candra Kirana, S.Kom', '7393792739', 'Laki-Laki', 'Jombang', '2019-12-31', 'Dukuhklopo', 'Peterongan', 'Jombang', '081111167850', 'S1', 'Teknik Informatika', 'Universitas KH. A Wahab Hasbulloh', 'avatar.png');

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
(8, 'Perangi Radikalisme di Indonesia, Ketua ISNU Jatim: Di Internal Kami Punya Corps Khusus', '2019-07-15', '<p>isnujombang.org - Terus perangi radikalisme, Ikatan Sarjana Nahdlatul Ulama, gelar diskusi dan kajian bertajuk Peta gerakan radikalisme di Indonesia Pascareformasi, Selasa (28/5/2019).Acara ini digelar di Ruang Salsabila lantai 1, Gedung PWNU Jatim ini, dihadiri oleh anggota ISNU Jatim.Dalam acara yang digelar dari sore hingga petang itu, Prof. Akh. Muzakki diberi mandat sebagai pembicara dan pemateri. Ketua ISNU Jatim, M. Mas&#39;ud Said, saat dikonfirmasi mengatakan, acara yang digagas pihaknya ini pun merupakan satu upaya untuk terus memerangi gerakan radikalisme di Indonesia.</p>\r\n\r\n<p>&quot;Bahwa Indonesia ke depan harus clear dari gerakan radikalisme,&quot; ucapnya kepada TribunJatim.com saat ditemui usai acara. Hal itu, dapat terwujud, apabila seluruh elemen dapat terus bergandeng bersama memerangi radikalisme. Terutama, umat Islam yang harus memegang teguh prinsip Islam Rahmatan lil &#39;alamin dan Ahlus Sunnah Wal Jamaah. &quot;Memperkuat Islam multikultural, memperkuat kasih sayang. silaturahim antar bangsa, antar umat manusia, dan juga antar kaum muslimin sendiri,&quot; tambahnya. Menyadari begitu massifnya gerakan radikalisme di tanah air, Ketua ISNU Jatim itu pun mengungkapkan, di internal ISNU telah membentuk satu corps yang berisi pakar di bidang IT dari perguruan tinggi terkemuka di Jatim. &quot;Namanya DINUN, yaitu Dai Intelektual Nusantara Network yang bekerja untuk memerangi radikalisme lewat dunia maya,&quot; jelasnya. Menurutnya, DINUN yang dimiliki oleh ISNU Jatim ini, punya kemampuan teknologi yang mapan, sehingga, ia percaya mereka dapat memberi counter attack kepada seluruh gerakan radikal dengan sangat rapi.</p>\r\n', '2', '1560418701_12.jpg');

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
(96, 'Opini');

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
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori_info`
--
ALTER TABLE `kategori_info`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
