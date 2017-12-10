-- MySQL dump 10.13  Distrib 5.6.30, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Lowongan
-- ------------------------------------------------------
-- Server version	5.6.30-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `passwd` varchar(8) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (999,'admin','admin1','adminutama');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lamaran`
--

DROP TABLE IF EXISTS `lamaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lamaran` (
  `no_reg` varchar(10) NOT NULL,
  `id_persh` int(10) DEFAULT NULL,
  `id_job` int(6) DEFAULT NULL,
  `NIM` int(10) DEFAULT NULL,
  PRIMARY KEY (`no_reg`),
  KEY `id_job` (`id_job`),
  KEY `NIM` (`NIM`),
  CONSTRAINT `lamaran_ibfk_1` FOREIGN KEY (`id_job`) REFERENCES `lowongan` (`id_job`),
  CONSTRAINT `lamaran_ibfk_2` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lamaran`
--

LOCK TABLES `lamaran` WRITE;
/*!40000 ALTER TABLE `lamaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `lamaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lowongan`
--

DROP TABLE IF EXISTS `lowongan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lowongan` (
  `id_job` int(6) NOT NULL,
  `id_persh` int(10) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `usia` int(2) DEFAULT NULL,
  `pengalaman` varchar(10) DEFAULT NULL,
  `JK` varchar(2) DEFAULT NULL,
  `pendidikan` varchar(2) DEFAULT NULL,
  `IPK` decimal(4,0) DEFAULT NULL,
  `lainnya` varchar(250) DEFAULT NULL,
  `qty` varchar(10) DEFAULT NULL,
  `closing_date` date DEFAULT NULL,
  PRIMARY KEY (`id_job`),
  KEY `id_persh` (`id_persh`),
  CONSTRAINT `lowongan_ibfk_1` FOREIGN KEY (`id_persh`) REFERENCES `perusahaan` (`id_persh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lowongan`
--

LOCK TABLES `lowongan` WRITE;
/*!40000 ALTER TABLE `lowongan` DISABLE KEYS */;
INSERT INTO `lowongan` VALUES (88,11,'asal',1,'mobile','2','1',1,'coba','60','2017-06-10'),(1234,99,'asal',1,'SofwareEng','L','D3',3,'dicoba','60','2017-05-30'),(2222,11,'asal',2,'mobile','P','S2',1,'asal aja','60','2017-05-24'),(170501,1701,'Associate Software Developer',1,'website','PL','D3',2,'Having an excellent algorithm Having knowledge about .NET and OOP will be an advantage','4','0000-00-00');
/*!40000 ALTER TABLE `lowongan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa` (
  `NIM` int(8) NOT NULL,
  `nama_mhs` varchar(20) DEFAULT NULL,
  `alamt` char(150) DEFAULT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `nama_jurusan` varchar(2) DEFAULT NULL,
  `IPK` varchar(11) DEFAULT NULL,
  `TTL` date DEFAULT NULL,
  `th_lulus` int(4) DEFAULT NULL,
  `minat_bidang` varchar(25) DEFAULT NULL,
  `JK` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` VALUES (135410297,'Afif','Gg.Puntudewo 13c','2147483647','rizky281193@gmail.co','TI','3.35','1993-11-28',2017,'minat_bidang','P');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perusahaan`
--

DROP TABLE IF EXISTS `perusahaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perusahaan` (
  `id_persh` int(10) NOT NULL,
  `nama_persh` varchar(20) DEFAULT NULL,
  `almt` char(150) DEFAULT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_persh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perusahaan`
--

LOCK TABLES `perusahaan` WRITE;
/*!40000 ALTER TABLE `perusahaan` DISABLE KEYS */;
INSERT INTO `perusahaan` VALUES (11,'PT. coba','sangat jelas','123456','tes@gmail.com'),(99,'percobaan','jelas','2147483647','anda@percobaan.com'),(1701,'PT Ebiz Cipta Solusi','13th Floor,Suite E,Metropolitan Tower,Jl R.A Kartini Kav.14 Jakarta','622157938489',''),(1702,'TWELVE INC','Jl Raya Janti,Gang Arjuna no 59,Karangjambe,Banguntapan,Bantul','622744534571',''),(1703,'PT XSIS Mitra Utama','Graha Tunas Unit C Lt.5,Jl Warung Jati Barat No 63,Jakarta Selatan','62217972772',''),(1704,'Magna Digital Lab','Wisma Korindo Lt.3,Jl MT Haryono Kav.62,Pancoran,Jakarta Selatan','62217975959',''),(1705,'PT Sebangsa Bersama','Jl Candi Sambisari No 90,Juwangen,Purwomartani,Kalasan,Sleman','622744986708',''),(1706,'PT Dasaplast Nusanta','Jl Kendalisodo No.1 Semarang','62248509311',''),(1707,'PT.Asuransi Sinar Ma','Plaza Simas,Jl.KH Fachrudin No 18,Jakarta Pusat','62213902141',''),(1708,'PT Mitracomm Ekasara','Ruko Taman palagan asri 3 Jl palagan tentara pelajar Km 10 sarihajo,Sleman','622157894808',''),(1709,'PT Victory Internati','Jl. Laksada Adisucipto 157 Pasific Building Lt Dasar,Yogyakarta','62274553597',''),(1710,'PT BNI Life Insuranc','Ruko casa Grande No 39 Maguwoharjo,Yogyakarta','622744478164',''),(1711,'PT Mega Giga Solusin','Jl Cempaka No 15, Baciro Baru, Yogyakarta','62818270525',''),(629876531,'PT asal','sadasdas','6289608590983','');
/*!40000 ALTER TABLE `perusahaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `user_id` varchar(10) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `JK` varchar(2) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `usernam` varchar(60) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-12  2:28:46
