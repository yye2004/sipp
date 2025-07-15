-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 07:37 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppdb_yinger`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jantina` varchar(10) NOT NULL,
  `aras` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `password`, `nama`, `jantina`, `aras`) VALUES
('040117079377', '1234', 'PARK HYUNSE', 'LELAKI', 'PELAJAR'),
('040203015355', '1234', 'JOSEPH KANG', 'LELAKI', 'PELAJAR'),
('040216074316', '1234', 'JUNG WHEEIN', 'PEREMPUAN', 'PELAJAR'),
('040223070524', '1234', 'LEE MIN HUI', 'PEREMPUAN', 'PELAJAR'),
('040323070546', '1234', 'CHLOE OOI', 'PEREMPUAN', 'PELAJAR'),
('040419080672', '1234', 'KIM YONG SUN ', 'PEREMPUAN', 'PELAJAR'),
('040514073022', '1234', 'AHN HYEJIN', 'PEREMPUAN', 'PELAJAR'),
('040518010377', '1234', 'KIM HYUN JIN', 'LELAKI', 'PELAJAR'),
('040519079262', '1234', 'MUN BYULYI', 'PEREMPUAN', 'PELAJAR'),
('040523070391', '1234', 'PARK WOO SANG', 'LELAKI', 'PELAJAR'),
('040530010122', '1234', 'MONICA LEE', 'PEREMPUAN', 'PELAJAR'),
('040805076323', '1234', 'JAY PARK', 'LELAKI', 'PELAJAR'),
('040901083439', '1234', 'CHAN JUNWEI', 'LELAKI', 'PELAJAR'),
('040916075224', '1234', 'KIMBERLEY TAN', 'PEREMPUAN', 'PELAJAR'),
('040930078675', '1234', 'LIM JAE BEOM', 'LELAKI', 'PELAJAR'),
('041012078912', '1234', 'CHEAH KEYING', 'PEREMPUAN', 'PELAJAR'),
('041014073244', '1234', 'SOON YIN YIN', 'PEREMPUAN', 'PELAJAR'),
('041117076735', '1234', 'YEOH MIN JUN', 'LELAKI', 'PELAJAR'),
('041203076809', '1234', 'HARRY PARK', 'LELAKI', 'PELAJAR'),
('041222079881', '1234', 'PARK JAE WOOK', 'LELAKI', 'PELAJAR'),
('101010101010', '1010', 'Guru Test', 'LELAKI', 'GURU'),
('111111111111', '1111', 'PENTADBIR SISTEM', 'PEREMPUAN', 'ADMIN'),
('123456789012', '1234', 'Guru A', 'PEREMPUAN', 'GURU'),
('223456789012', '2234', 'Guru B', 'LELAKI', 'GURU');

-- --------------------------------------------------------

--
-- Table structure for table `perekodan`
--

CREATE TABLE `perekodan` (
  `idperekodan` int(11) NOT NULL,
  `idpengguna` varchar(12) NOT NULL,
  `idtopik` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `skor` varchar(5) NOT NULL,
  `catatan_masa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perekodan`
--

INSERT INTO `perekodan` (`idperekodan`, `idpengguna`, `idtopik`, `jenis`, `skor`, `catatan_masa`) VALUES
(1, '040223070524', 3, 1, '5', '2021-10-27 17:04:11'),
(2, '040223070524', 5, 1, '5', '2021-11-04 20:13:15'),
(3, '040216074316', 6, 2, '5', '2021-11-06 13:31:11'),
(4, '040223070524', 6, 2, '5', '2021-11-06 17:48:08'),
(5, '223456789012', 7, 1, '5', '2021-11-06 17:53:28'),
(6, '040419080672', 6, 2, '5', '2021-11-06 17:57:54'),
(7, '040514073022', 6, 2, '5', '2021-11-06 17:58:55'),
(8, '040519079262', 6, 2, '5', '2021-11-06 17:59:43'),
(9, '040216074316', 7, 1, '5', '2021-11-06 18:56:03'),
(11, '040216074316', 9, 1, '5', '2021-11-06 18:58:10'),
(12, '040216074316', 1, 2, '6', '2021-11-06 19:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `idpilihan` int(11) NOT NULL,
  `nom_soalan` int(10) NOT NULL,
  `jawapan` varchar(20) NOT NULL,
  `pilihan_jawapan` text NOT NULL,
  `idsoalan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`idpilihan`, `nom_soalan`, `jawapan`, `pilihan_jawapan`, `idsoalan`) VALUES
(1, 1, '', 'month', 1),
(2, 2, '', '7', 2),
(3, 3, '', 'oatmeal', 3),
(4, 4, '', 'peanut butter and oatmeal nut', 4),
(5, 5, '', 'chocolate', 5),
(6, 1, '0', 'a', 6),
(7, 1, '1', 'an', 6),
(8, 1, '0', '-', 6),
(9, 1, '0', 'the', 6),
(10, 2, '0', 'a few', 7),
(11, 2, '0', 'a little', 7),
(12, 2, '0', 'many', 7),
(13, 2, '1', 'a lot of', 7),
(14, 3, '0', 'pulled', 8),
(15, 3, '0', 'pushed', 8),
(16, 3, '1', 'took', 8),
(17, 3, '0', 'called', 8),
(18, 4, '1', 'grateful', 9),
(19, 4, '0', 'cheerful', 9),
(20, 4, '0', 'useful', 9),
(21, 4, '0', 'helpful', 9),
(24, 5, '0', 'feeling', 11),
(25, 5, '0', 'feels', 11),
(26, 5, '1', 'felt', 11),
(27, 5, '0', 'feel', 11),
(28, 1, '', 'sejambak', 12),
(29, 2, '', 'serangkap', 13),
(30, 3, '', 'segugus', 14),
(31, 4, '', 'biji', 15),
(32, 5, '', 'Beberapa', 16),
(33, 1, '0', 'lintang-pukang', 17),
(34, 1, '1', 'kusut-masai', 17),
(35, 1, '0', 'compang-camping', 17),
(36, 1, '0', 'comot-momot', 17),
(37, 2, '0', 'kemerah-merahan', 18),
(38, 2, '0', 'kekuning-kuningan', 18),
(39, 2, '1', 'kebiru-biruan', 18),
(40, 2, '0', 'kehijau-hijauan', 18),
(41, 3, '0', 'menyanyi', 19),
(42, 3, '0', 'bising', 19),
(43, 3, '1', 'senyap', 19),
(44, 3, '0', 'berbual-bual', 19),
(45, 4, '1', 'ketat', 20),
(46, 4, '0', 'longgar', 20),
(47, 4, '0', 'singkat', 20),
(48, 4, '0', 'besar', 20),
(49, 5, '0', 'rapi', 21),
(50, 5, '0', 'kemas', 21),
(51, 5, '0', 'teratur', 21),
(52, 5, '1', 'berselerak', 21),
(53, 1, '', '13', 22),
(54, 2, '', 'Kuala Lumpur', 23),
(55, 3, '', 'Putrajaya', 24),
(57, 4, '', 'Perlis', 26),
(58, 4, '', 'Kedah', 26),
(59, 4, '', 'Pulau Pinang', 26),
(60, 4, '', 'Perak', 26),
(61, 4, '', 'Kelantan', 26),
(62, 4, '', 'Terengganu', 26),
(63, 4, '', 'Pahang', 26),
(64, 4, '', 'Selangor', 26),
(65, 4, '', 'Negeri Sembilan', 26),
(66, 4, '', 'Melaka', 26),
(67, 4, '', 'Johor', 26),
(68, 4, '', 'Sabah', 26),
(69, 4, '', 'Sarawak', 26),
(70, 5, '', 'Ipoh', 27),
(71, 1, '0', 'Litosfera', 28),
(72, 1, '0', 'Atmosfera', 28),
(73, 1, '1', 'Metafora', 28),
(74, 1, '0', 'Biosfera', 28),
(75, 2, '0', 'teras lapisan', 29),
(76, 2, '0', 'teras tepi', 29),
(77, 2, '0', 'teras atas', 29),
(78, 2, '1', 'teras luar', 29),
(79, 3, '0', 'membekalkan air', 30),
(80, 3, '1', 'membekalkan udara', 30),
(81, 3, '0', 'membekalkan makanan', 30),
(82, 3, '0', 'membekalkan wang', 30),
(83, 4, '0', 'Amerika Selatan', 31),
(84, 4, '0', 'Amerika Utara', 31),
(85, 4, '0', 'Antartika', 31),
(86, 4, '1', 'Amerika Timur', 31),
(87, 5, '1', 'gunung berapi', 32),
(88, 5, '0', 'tsunami', 32),
(89, 5, '0', 'gempa bumi', 32),
(94, 1, '1', 'bandar', 34),
(95, 1, '0', 'luar bandar', 34),
(96, 2, '0', 'bandar', 35),
(97, 2, '1', 'luar bandar', 35),
(98, 3, '1', 'bandar', 36),
(99, 3, '0', 'luar bandar', 36),
(100, 4, '1', 'bandar', 37),
(101, 4, '0', 'luar bandar', 37),
(102, 5, '0', 'bandar', 38),
(103, 5, '1', 'luar bandar', 38),
(104, 1, '0', 'berlari', 39),
(105, 1, '0', 'berduduk', 39),
(106, 1, '1', 'beratur', 39),
(107, 1, '0', 'berjalan', 39),
(108, 2, '0', 'Cis', 40),
(109, 2, '1', 'Eh', 40),
(110, 2, '0', 'Wah', 40),
(111, 2, '0', 'Aduhai', 40),
(112, 3, '0', 'sambil', 41),
(113, 3, '0', 'tetapi', 41),
(114, 3, '0', 'lalu', 41),
(115, 3, '1', 'jika', 41),
(116, 4, '0', 'compang-camping', 42),
(117, 4, '0', 'hingar-bingar', 42),
(118, 4, '0', 'kucar-kacir', 42),
(119, 4, '1', 'sunyi-sepi', 42),
(120, 5, '0', 'beta', 43),
(121, 5, '1', 'tuanku', 43),
(122, 5, '0', 'baginda', 43),
(123, 5, '0', 'hamba', 43),
(124, 1, '', 'our', 44),
(125, 2, '', 'lose', 45),
(126, 3, '', 'into', 46),
(127, 4, '', 'faster', 47),
(128, 5, '', 'variety', 48);

-- --------------------------------------------------------

--
-- Table structure for table `soalan`
--

CREATE TABLE `soalan` (
  `idsoalan` int(11) NOT NULL,
  `nom_soalan` int(11) NOT NULL,
  `soalan` text NOT NULL,
  `jenis` int(10) NOT NULL,
  `gambarajah` varchar(20) NOT NULL,
  `idtopik` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soalan`
--

INSERT INTO `soalan` (`idsoalan`, `nom_soalan`, `soalan`, `jenis`, `gambarajah`, `idtopik`) VALUES
(1, 1, 'The chart show the number of cookies made by Kiara Bakery in a __________.', 2, 'chart.jpg', 1),
(2, 2, 'How many types of cookies are made by Kiara Bakery?', 2, 'chart.jpg', 1),
(3, 3, 'Kiara Bakery made the most number of __________ cookies in June.', 2, 'chart.jpg', 1),
(4, 4, 'Which types of cookies were made in equal numbers in June?', 2, 'chart.jpg', 1),
(5, 5, 'From the chart, we know that Kiara Bakery made two types of cookies with ______ in them.', 2, 'chart.jpg', 1),
(6, 1, 'One evening, John was walking home from the market. He saw _______ old woman trying to cross the road.', 1, '', 3),
(7, 2, 'She was holding a walking stick in her hand. There was ______ traffic so she could not cross the road.', 1, '', 3),
(8, 3, 'Then, John ______ her to the pedestrian crossing. When the lights turned green, he helped her to cross the road.', 1, '', 3),
(9, 4, 'The old woman was very __________ to John so she thanked him.', 1, '', 3),
(11, 5, 'John _________ happy for being able to help someone in need.', 1, '', 3),
(12, 1, 'Encik Tan membeli __________ bunga untuk dihadiahkan kepada isterinya.', 2, 'bunga.jpg', 4),
(13, 2, 'Ali sedang mencipta _________ pantun yang bertemakan semangat perpaduan.', 2, '', 4),
(14, 3, 'Puan Anita membeli ________ anggur di pasar.', 2, '', 4),
(15, 4, 'Pelanggan itu tertinggal enam _______ epal di gerai makanan saya.', 2, '', 4),
(16, 5, '___________ orang murid di SJK(C) Chung Hwa telah dipilih untuk mewakili sekolah dalam Pertandingan Robotik itu.', 2, '', 4),
(17, 1, 'Rambut pengemis itu kelihatan ____________ kerana tidak pernah disikat.', 1, 'kusaimasai.jpg', 5),
(18, 2, 'Air laut yang __________ itu menggamit kehadiran ramai pengunjung.', 1, '', 5),
(19, 3, 'Kita mestilah ___________ ketika guru tiada di dalam kelas.', 1, '', 5),
(20, 4, 'Semua baju yang dibeli oleh Abu sudah menjadi ________ kerana badannya sudah berisi.', 1, '', 5),
(21, 5, 'Mei Mei menyusun semula buku-buku yang ____________ di atas meja.', 1, 'books.jpg', 5),
(22, 1, 'Malaysia mempunyai ______ buah negeri.', 2, '', 6),
(23, 2, 'Ibu Negara Malaysia ialah __________ .', 2, '', 6),
(24, 3, 'Pusat Pentadbiran Malaysia terletak di Wilayah Persekutuan _____________ .', 2, '', 6),
(26, 4, 'Senaraikan salah satu negeri yang terdapat di Malaysia.', 2, '', 6),
(27, 5, 'Apakah ibu negeri Perak?', 2, '', 6),
(28, 1, 'Pilihan bawah merupakah sistem fizikal bumi, kecuali', 1, '', 7),
(29, 2, 'Berdasarkan gambar di bawah, X merupakan', 1, 'strukturbumi.png', 7),
(30, 3, 'Apakah kepentingan lapisan atmosfera kepada manusia?', 1, '', 7),
(31, 4, 'Berikut merupakan benua-benua utama yang terdapat di dunia, kecuali', 1, '', 7),
(32, 5, 'Magma di dalam kerak bumi keluar dalam bentuk lava.\r\nBerdasarkan penyataan di atas, kesan pergerakan kerak bumi ialah ', 1, '', 7),
(34, 1, 'Apakah jenis petempatan bagi kawasan Georgetown?', 1, '', 8),
(35, 2, 'Apakah jenis petempatan bagi kawasan Keningau?', 1, '', 8),
(36, 3, 'Apakah jenis petempatan bagi kawasan Kota Kinabalu?', 1, '', 8),
(37, 4, 'Apakah jenis petempatan bagi kawasan Ipoh?', 1, '', 8),
(38, 5, 'Apakah jenis petempatan bagi kawasan Kapit?', 1, '', 8),
(39, 1, 'Ah Seng __________ dengan sabar semasa menaiki bas.', 1, '', 9),
(40, 2, '_________, ini bukan barang saya!', 1, '', 9),
(41, 3, 'Mingi tidak dapat keluar bermain _______ dia tidak menyiapkan kerja sekolah yang diberi oleh gurunya.', 1, '', 9),
(42, 4, 'Suasana kelas 1A menjadi _________ apabila Cikgu Tan masuk ke dalam kelas.', 1, '', 9),
(43, 5, '\"Ampun, _______. Patik berjanji tidak akan mengulanginya lagi,\" kata dayang istana kepada permaisuri.', 1, '', 9),
(44, 1, 'Technology has improved *ours* lives.\r\n\r\nFrom the sentence above, correct the * word without changing the meaning.', 2, '', 10),
(45, 2, 'As a result, people *loose* their social skills.', 2, '', 10),
(46, 3, 'The information technology sector has turned the world *upon* a global village.\r\n\r\nFrom the sentence above, correct the * word without changing the meaning.', 2, '', 10),
(47, 4, 'It has provided people with easier and *fast* ways to solve problems.\r\n\r\nFrom the sentence above, correct the * word without changing the meaning.', 2, '', 10),
(48, 5, 'People use a *various* of gadgets such as smartphones, laptops, tablets, and computers.', 2, '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE `subjek` (
  `idsubjek` int(11) NOT NULL,
  `subjek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjek`
--

INSERT INTO `subjek` (`idsubjek`, `subjek`) VALUES
(1, 'Bahasa Inggeris'),
(2, 'Bahasa Melayu'),
(3, 'Geografi');

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `idtopik` int(11) NOT NULL,
  `topik` varchar(60) NOT NULL,
  `markah` int(11) NOT NULL,
  `idsubjek` int(10) NOT NULL,
  `idpengguna` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`idtopik`, `topik`, `markah`, `idsubjek`, `idpengguna`) VALUES
(1, 'Reading', 10, 1, '123456789012'),
(3, 'Grammar', 10, 1, '123456789012'),
(4, 'Kata Bilangan', 10, 2, '223456789012'),
(5, 'Kata Adjektif', 10, 2, '223456789012'),
(6, 'Negeri-Negeri dan Wilayah Persekutuan di Malaysia', 10, 3, '223456789012'),
(7, 'Bumi', 10, 3, '223456789012'),
(8, 'Penduduk dan Petempatan', 10, 3, '223456789012'),
(9, 'Pemahaman', 10, 2, '223456789012'),
(10, 'Grammatical Error', 10, 1, '123456789012');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `perekodan`
--
ALTER TABLE `perekodan`
  ADD PRIMARY KEY (`idperekodan`),
  ADD KEY `idpengguna` (`idpengguna`,`idtopik`),
  ADD KEY `idtopik` (`idtopik`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`idpilihan`),
  ADD KEY `idsoalan` (`idsoalan`);

--
-- Indexes for table `soalan`
--
ALTER TABLE `soalan`
  ADD PRIMARY KEY (`idsoalan`),
  ADD KEY `idtopik` (`idtopik`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`idsubjek`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`idtopik`),
  ADD KEY `idsubjek` (`idsubjek`,`idpengguna`),
  ADD KEY `idpengguna` (`idpengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perekodan`
--
ALTER TABLE `perekodan`
  MODIFY `idperekodan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `idpilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `soalan`
--
ALTER TABLE `soalan`
  MODIFY `idsoalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
  MODIFY `idsubjek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `idtopik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perekodan`
--
ALTER TABLE `perekodan`
  ADD CONSTRAINT `perekodan_ibfk_1` FOREIGN KEY (`idpengguna`) REFERENCES `pengguna` (`idpengguna`),
  ADD CONSTRAINT `perekodan_ibfk_2` FOREIGN KEY (`idtopik`) REFERENCES `topik` (`idtopik`);

--
-- Constraints for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD CONSTRAINT `pilihan_ibfk_1` FOREIGN KEY (`idsoalan`) REFERENCES `soalan` (`idsoalan`);

--
-- Constraints for table `soalan`
--
ALTER TABLE `soalan`
  ADD CONSTRAINT `soalan_ibfk_1` FOREIGN KEY (`idtopik`) REFERENCES `topik` (`idtopik`);

--
-- Constraints for table `topik`
--
ALTER TABLE `topik`
  ADD CONSTRAINT `topik_ibfk_1` FOREIGN KEY (`idpengguna`) REFERENCES `pengguna` (`idpengguna`),
  ADD CONSTRAINT `topik_ibfk_2` FOREIGN KEY (`idsubjek`) REFERENCES `subjek` (`idsubjek`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
