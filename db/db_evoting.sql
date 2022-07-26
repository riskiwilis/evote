-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 11:31 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_evoting`
--
CREATE DATABASE IF NOT EXISTS `db_evoting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_evoting`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'ihsan Miftahul Huda', 'ihsan', 'ccbc2bffe69e83479314d2df030a2cdf'),
(3, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'aipjamjam', 'aipjamjam', '101dbb150ea9cd944f356a2ac91217e4'),
(7, 'Hermawan Gustiana', 'hermawan', '0a5c2657a27501b02b270ca999b0d412'),
(8, 'Gyansyah Zulfikar', 'gyan', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE IF NOT EXISTS `tb_akun` (
  `id_akun` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_akun`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `username`, `password`, `email`) VALUES
(21, 'ihsan', 'ccbc2bffe69e83479314d2df030a2cdf', 'ihsan@gmail.com'),
(22, 'way', 'e10adc3949ba59abbe56e057f20f883e', 'way@gmai.com'),
(23, 'aipjamjam', 'e172dd95f4feb21412a692e73929961e', 'aipjamjam16@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata`
--

CREATE TABLE IF NOT EXISTS `tb_biodata` (
  `id_biodata` int(10) NOT NULL AUTO_INCREMENT,
  `id_akun` int(10) NOT NULL,
  `nama_calon` varchar(30) NOT NULL,
  `nim` int(10) NOT NULL,
  `ipk` float NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_biodata`),
  UNIQUE KEY `nim` (`nim`),
  KEY `id_akun` (`id_akun`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tb_biodata`
--

INSERT INTO `tb_biodata` (`id_biodata`, `id_akun`, `nama_calon`, `nim`, `ipk`, `visi`, `misi`, `foto`) VALUES
(9, 21, 'ihsan Miftahul Huda ', 1157050074, 4, 'sagdjasgdjhas\r\n', 'jsadgjhasgdjhga\r\n', 'sanz.jpg'),
(10, 22, 'wahyu fajar ', 1157050171, 4, 'Membangun dunia lebih buruk', 'Penguasa', 'images.png'),
(11, 23, 'Moch. Arif Zamzami ', 1157050090, 3.9, 'bismillah', 'solid', 'banner_1.gif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_delegasi`
--

CREATE TABLE IF NOT EXISTS `tb_delegasi` (
  `id_delegasi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_delegasi` varchar(30) NOT NULL,
  `nim` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Belum memilih',
  PRIMARY KEY (`id_delegasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tb_delegasi`
--

INSERT INTO `tb_delegasi` (`id_delegasi`, `nama_delegasi`, `nim`, `password`, `angkatan`, `status`) VALUES
(3, 'Ihsan Miftahul Huda', 1157050074, 'ihsan', 2015, 'Sudah Memilih'),
(4, 'Wildan Andzani', 1157050175, 'ZRmYtjt', 2015, 'Belum Memilih'),
(5, 'Hermwan Gustiaana', 1157050066, 'wrFmnDK', 2015, 'Belum Memilih'),
(6, 'Fakhri Aria Fadhillah', 1157050048, 'KMWBtII', 2015, 'Belum Memilih'),
(7, 'Febri Ardi Saputra', 1157050055, 'cFf2oMZ', 2015, 'Belum Memilih'),
(8, 'M Irgiawan Futuh', 1157050079, 'bNjN3Ew', 2015, 'Belum Memilih'),
(9, 'Qoriah Indah Susilowati', 1157050129, 'mhr71PG', 2015, 'Belum Memilih'),
(10, 'wahyu', 111, 'way', 2015, 'Belum Memilih'),
(11, 'Moch. Arif Zamzami', 1157050090, 'aipjamjam', 2015, 'Belum Memilih'),
(12, 'sumayyah', 1157050090, 'etqySKD', 2011, 'Belum Memilih'),
(13, 'bebebsa', 1157050090, 'GSorWE7', 2008, 'Belum Memilih'),
(14, 'aip', 123, 'bOFKSNv', 2015, 'Belum memilih');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kandidat`
--

CREATE TABLE IF NOT EXISTS `tb_kandidat` (
  `id_kandidat` int(10) NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama_kandidat` varchar(30) NOT NULL,
  `jml_suara` int(10) NOT NULL,
  PRIMARY KEY (`id_kandidat`),
  KEY `nim` (`nim`),
  KEY `nim_2` (`nim`),
  KEY `nim_3` (`nim`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tb_kandidat`
--

INSERT INTO `tb_kandidat` (`id_kandidat`, `foto`, `nim`, `nama_kandidat`, `jml_suara`) VALUES
(9, 'sanz.jpg', 1157050074, 'ihsan Miftahul Huda ', 0),
(10, 'images.png', 1157050171, 'wahyu fajar ', 0),
(11, 'banner_1.gif', 1157050090, 'Moch. Arif Zamzami', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemilihan`
--

CREATE TABLE IF NOT EXISTS `tb_pemilihan` (
  `id_pemilihan` int(10) NOT NULL AUTO_INCREMENT,
  `id_kandidat` int(10) NOT NULL,
  `id_pemilih` int(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pemilihan`),
  KEY `id_kandidat` (`id_kandidat`),
  KEY `id_pemilih` (`id_pemilih`),
  KEY `id_pemilih_2` (`id_pemilih`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_pemilihan`
--

INSERT INTO `tb_pemilihan` (`id_pemilihan`, `id_kandidat`, `id_pemilih`, `waktu`) VALUES
(1, 11, 3, '2018-01-09 07:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_syarat`
--

CREATE TABLE IF NOT EXISTS `tb_syarat` (
  `id_syarat` int(10) NOT NULL AUTO_INCREMENT,
  `id_biodata` int(10) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file` varchar(50) NOT NULL,
  `ukuran_file` varchar(50) NOT NULL,
  `nim` int(10) NOT NULL,
  PRIMARY KEY (`id_syarat`),
  KEY `id_biodata` (`id_biodata`),
  KEY `id_biodata_2` (`id_biodata`),
  KEY `id_biodata_3` (`id_biodata`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tb_syarat`
--

INSERT INTO `tb_syarat` (`id_syarat`, `id_biodata`, `tgl_upload`, `file`, `ukuran_file`, `nim`) VALUES
(7, 9, '2018-01-07', 'BiodataMahasiswaUin.pdf', '520778', 1157050074),
(8, 10, '2018-01-08', 'arab.pdf', '308925', 1157050171),
(9, 10, '2018-01-08', 'BiodataMahasiswaUin.pdf', '520778', 1157050171),
(10, 10, '2018-01-08', 'subtitle.rar', '49071', 1157050171),
(11, 11, '2018-01-08', 'Teks MC dan Modertor.pdf', '13092', 1157050090);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD CONSTRAINT `tb_biodata_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kandidat`
--
ALTER TABLE `tb_kandidat`
  ADD CONSTRAINT `tb_kandidat_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_biodata` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pemilihan`
--
ALTER TABLE `tb_pemilihan`
  ADD CONSTRAINT `tb_pemilihan_ibfk_2` FOREIGN KEY (`id_pemilih`) REFERENCES `tb_delegasi` (`id_delegasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pemilihan_ibfk_3` FOREIGN KEY (`id_kandidat`) REFERENCES `tb_kandidat` (`id_kandidat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_syarat`
--
ALTER TABLE `tb_syarat`
  ADD CONSTRAINT `tb_syarat_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `tb_biodata` (`id_biodata`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
