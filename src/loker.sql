-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2015 at 12:09 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loker`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE IF NOT EXISTS `buku_tamu` (
  `id_buku` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `isi` text,
  PRIMARY KEY (`id_buku`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_buku`, `nama`, `email`, `isi`) VALUES
(1, 'evi', 'evi@yahoo.com', 'untuk daerah jakarta selatan apakah ada informasi pekerjaan untuk jenjang sma');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
  `id_data` int(4) NOT NULL AUTO_INCREMENT,
  `nama_prusahaan` varchar(50) DEFAULT NULL,
  `profil_perusahaan` text,
  `info_lowongan` text,
  `syarat` text,
  PRIMARY KEY (`id_data`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_data`, `nama_prusahaan`, `profil_perusahaan`, `info_lowongan`, `syarat`) VALUES
(1, 'PT GGP', 'perusahaan berdiri di bidang ekspor nanas kaleng', 'menerima karyawan bidang it', 'usia maks 25 tahun\r\nlulusan min d3\r\nbisa mengoprasikan komputer dengan baik\r\nmengerti jaringan dan bisa menjalankan sistem operasi linux\r\n\r\n'),
(4, 'PT Gudang Garam Tbk', 'perusahaan berdiri di bidang pembuatan rokok. ', 'Dicar staf IT untuk di tempatkan di bagian it PT Gudang Garam Tbk cabang jawa surabaya.', 'Laki-laki atau perempuan \r\nbelum menikah\r\nmemiliki ijazah minimal d3 komputer\r\nmampu mengoprasikan pc dengan sistem operasi linux\r\nmemiliki kemampuan di bidang jaringan komputer\r\n \r\nsyarat lamaran dapat di ajukan paling lambat  30 desember 2013');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
