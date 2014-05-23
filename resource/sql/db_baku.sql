-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2014 at 07:30 PM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_baku`
--
CREATE DATABASE IF NOT EXISTS `db_baku` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_baku`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'arifmatika@gmail.com', '52e2f479879b2daadadc868abc996ba0'),
(2, 'Ahmad Hasan Al Arif Billah', 'ahmadhasanalarifbillah@gmail.com', '52e2f479879b2daadadc868abc996ba0'),
(8, 'sigit', 'arexlaser@gmail.com', '9acf72d757bdb3d5bf07975983a6bdf1');

-- --------------------------------------------------------

--
-- Table structure for table `kata`
--

CREATE TABLE IF NOT EXISTS `kata` (
  `id_kata` int(5) NOT NULL AUTO_INCREMENT,
  `kata_tidak_baku` varchar(50) NOT NULL,
  `kata_baku` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kata`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=214 ;

--
-- Dumping data for table `kata`
--

INSERT INTO `kata` (`id_kata`, `kata_tidak_baku`, `kata_baku`) VALUES
(1, 'aktip', 'aktif'),
(2, 'aktifitas', 'aktivitas'),
(3, 'apotik', 'apotek'),
(4, 'analisa', 'analisis'),
(5, 'azas', 'asas'),
(6, 'atlit', 'atlet'),
(7, 'atmosfir', 'atmosfer'),
(8, 'cinderamata', 'cenderamata'),
(9, 'difinisi', 'definisi'),
(10, 'pebruari', 'februari'),
(11, 'hakekat', 'hakikat'),
(12, 'hipotesa', 'hipotesis'),
(13, 'hirarki', 'hierarki'),
(14, 'ijasah', 'ijazah'),
(15, 'ijin', 'izin'),
(16, 'jadual', 'jadwal'),
(17, 'jenasah', 'jenazah'),
(18, 'kaedah', 'kaidah'),
(19, 'karir', 'karier'),
(20, 'kondite', 'konduite'),
(21, 'konkrit', 'konkret'),
(22, 'konsepsionil', 'konsepsional'),
(23, 'kwitansi', 'kuitansi'),
(24, 'lembab', 'lembap'),
(25, 'lobang', 'lubang'),
(26, 'mengobah', 'mengubah'),
(27, 'merobah', 'merubah'),
(28, 'menterjemahkan', 'menerjemahkan'),
(29, 'metoda', 'metode'),
(30, 'musti', 'mesti'),
(31, 'motip', 'motif'),
(32, 'motifasi', 'motivasi'),
(33, 'nasehat', 'nasihat'),
(34, 'nopember', 'november'),
(35, 'seksama', 'saksama'),
(36, 'rejeki', 'rezeki'),
(37, 'sintesa', 'sintesis'),
(38, 'sistim', 'sistem'),
(39, 'sistimatis', 'sistematis'),
(40, 'standarisasi', 'standardisasi'),
(41, 'sipiritual', 'spiritual'),
(42, 'subyektip', 'subjektif'),
(43, 'sutra', 'sutera'),
(44, 'tarip', 'tarif'),
(45, 'tapsiran', 'tafsiran'),
(46, 'terlentang', 'telentang'),
(47, 'terlanjur', 'telanjur'),
(48, 'terlantar', 'telantar'),
(49, 'teoritis', 'teoretis'),
(50, 'tehnik', 'teknik'),
(51, 'trampil', 'terampil'),
(52, 'tradisionil', 'tradisional'),
(53, 'ujud', 'wujud'),
(54, 'mendifinisikan', 'mendefinisikan'),
(55, 'rubuh', 'roboh'),
(56, 'silahkan', 'silakan'),
(57, 'mumpung', 'selagi'),
(58, 'problimatik', 'problematic'),
(59, 'tilpun', 'telepon'),
(60, 'penasehat', 'penasihat'),
(61, 'spesis', 'spesies'),
(62, 'varitas', 'varietas'),
(63, 'photo', 'foto'),
(64, 'produktifitas', 'produktivitas'),
(65, 'subyek', 'subjek'),
(66, 'ahir', 'akhir'),
(67, 'on', 'ons'),
(68, 'eksport', 'ekspor'),
(69, 'sukur', 'syukur'),
(70, 'jendral', 'jenderal'),
(71, 'resiko', 'risiko'),
(72, 'survai', 'survei'),
(73, 'team', 'tim'),
(74, 'disel', 'diesel'),
(75, 'zone', 'zona'),
(76, 'filem', 'film'),
(77, 'manager', 'manajer'),
(78, 'dipersilakan', 'dipersilahkan'),
(79, 'kwalitas', 'kualitas'),
(80, 'mensukseskan', 'menyukseskan'),
(81, 'baud', 'baut'),
(82, 'ekstrim', 'ekstrem'),
(83, 'managemen', 'manajemen'),
(84, 'wasallam', 'wasalam'),
(85, 'mengeritik', 'mengkritik'),
(86, 'ilmiawan', 'ilmuwan'),
(87, 'menyolok', 'mencolok'),
(88, 'sekertaris', 'sekretaris'),
(89, 'prosentase', 'persentase'),
(90, 'pertanggungjawab', 'pertanggungjawaban'),
(91, 'perletakan', 'peletakan'),
(92, 'dipindah', 'dipindahkan'),
(93, 'menterapkan', 'menerapkan'),
(94, 'memproklamirkan', 'memproklamasikan'),
(95, 'insyaf', 'insaf'),
(96, 'trotoir', 'trotoar'),
(97, 'dollar', 'dolar'),
(98, 'setasiun', 'stasiun'),
(99, 'erobik', 'aerobic'),
(100, 'psikotest', 'psikotes'),
(101, 'melola', 'mengelola'),
(102, 'mengenyampingkan', 'mengesampingkan'),
(103, 'khutbah', 'khotbah'),
(104, 'isteri', 'istri'),
(105, 'justeru', 'justru'),
(106, 'Sumatra', 'Sumatera'),
(107, 'negri', 'negeri'),
(108, 'Prancis', 'Perancis'),
(109, 'krupuk', 'kerupuk'),
(110, 'anugrah', 'anugerah'),
(111, 'rejim', 'rezim'),
(112, 'jamrud', 'zamrud'),
(113, 'saptu', 'sabtu'),
(114, 'sarap', 'saraf'),
(115, 'obrak-abrik', 'ubrak-abrik'),
(116, 'mangkok', 'mangkuk'),
(117, 'kaos', 'kaus'),
(118, 'bis', 'bus'),
(119, 'nomer', 'nomor'),
(120, 'punggawa', 'penggawa'),
(121, 'resleting', 'risleting'),
(122, 'kempes', 'kempis'),
(123, 'intelejen', 'intelijen'),
(124, 'vidio', 'video'),
(125, 'pinsil', 'pensil'),
(126, 'personil', 'personel'),
(127, 'musium', 'museum'),
(128, 'disain', 'desain'),
(129, 'dekrit', 'dekret'),
(130, 'diskripsi', 'deksripsi'),
(131, 'debet', 'debit'),
(132, 'cendikiawan', 'cendekiawan'),
(133, 'speda', 'sepeda'),
(134, 'cidera', 'cedera'),
(135, 'antri', 'antre'),
(136, 'afdol', 'afdal'),
(137, 'aktuil', 'aktual'),
(138, 'formil', 'formal'),
(139, 'materai', 'meterai'),
(140, 'kalendar', 'kalender'),
(141, 'parlamen', 'parlemen'),
(142, 'sekular', 'sekuler'),
(143, 'selular', 'seluler'),
(144, 'aritmatika', 'aritmetika'),
(145, 'amandemen', 'amendemen'),
(146, 'adpokat', 'advokat'),
(147, 'akte', 'akta'),
(148, 'cemilan', 'camilan'),
(149, 'frase', 'frasa'),
(150, 'mesjid', 'masjid'),
(151, 'sekadar', 'sekedar'),
(152, 'pengreditan', 'pengkreditan'),
(153, 'sportip', 'sportif'),
(154, 'sportifitas', 'sportivitas'),
(155, 'obyek', 'objek'),
(156, 'terhempas', 'terempas'),
(157, 'berfikir', 'berpikir'),
(158, 'himbau', 'imbau'),
(159, 'mempesona', 'memesona'),
(160, 'taxi', 'taksi'),
(161, 'accu', 'Aki'),
(162, 'route', 'rute'),
(163, 'konggres', 'kongres'),
(164, 'Aquarium', 'Akuarium'),
(165, 'director', 'direktur'),
(166, 'antar negara', 'antarnegara'),
(167, 'electronik', 'elektronik'),
(168, 'tekhnologi', 'teknologi'),
(169, 'repertoire', 'repertoar'),
(170, 'relative', 'relatif'),
(171, 'security', 'sekuritas'),
(172, 'deputy', 'deputi'),
(173, 'culture', 'kultur'),
(177, 'diagnosa', 'diagnosis'),
(178, 'legalisir', 'legalisiasi'),
(179, 'akomodir', 'akomodasi'),
(181, 'abstrac', 'abstrak'),
(182, 'defaluasi', 'devaluasi'),
(183, 'monarkhi', 'monarki'),
(184, 'structure', 'struktur'),
(185, 'theatre', 'teater'),
(186, 'University', 'Universitas'),
(187, 'lesung pipit', 'lesung pipi'),
(190, 'salat', 'sholat'),
(191, 'disyahkan', 'disahkan'),
(192, 'fihak', 'pihak'),
(193, 'anggauta', 'anggota'),
(196, 'dipersilahkan', 'dipersilakan'),
(197, 'langganan', 'pelanggan'),
(198, 'utang', 'hutang'),
(205, 'dasa wisma', 'dasawisma'),
(206, 'pasca panen', 'pascapanen'),
(207, 'mengreditkan', 'mengkreditkan'),
(208, 'solat', 'sholat'),
(209, 'aktiv', 'aktif'),
(211, 'aktipitas', 'aktivitas'),
(212, 'motiv', 'motif'),
(213, 'refrensi', 'referensi');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE IF NOT EXISTS `tabel_buku` (
  `kode_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` char(30) NOT NULL,
  `penerbit` char(30) NOT NULL,
  `isbn` char(30) NOT NULL,
  `stok_buku` int(11) NOT NULL,
  PRIMARY KEY (`kode_buku`),
  UNIQUE KEY `isbn` (`isbn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`kode_buku`, `judul_buku`, `penerbit`, `isbn`, `stok_buku`) VALUES
(1, 'PHP Framework', 'CI', 'EE9099', 90),
(2, 'Jawa Pos', 'Andi Pub', '90SSK', 89);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
