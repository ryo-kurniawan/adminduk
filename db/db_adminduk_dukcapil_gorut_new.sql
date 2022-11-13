-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_adminduk_dukcapil_gorut
CREATE DATABASE IF NOT EXISTS `db_adminduk_dukcapil_gorut` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_adminduk_dukcapil_gorut`;

-- Dumping structure for table db_adminduk_dukcapil_gorut.t_formulir_kua
CREATE TABLE IF NOT EXISTS `t_formulir_kua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pria` varchar(50) DEFAULT NULL,
  `nik_pria` varchar(16) DEFAULT NULL,
  `nama_wanita` varchar(50) DEFAULT NULL,
  `nik_wanita` varchar(16) DEFAULT NULL,
  `nama_penghulu` varchar(50) DEFAULT NULL,
  `nik_penghulu` varchar(16) DEFAULT NULL,
  `nama_saksi_1` varchar(50) DEFAULT NULL,
  `nik_saksi_1` varchar(16) DEFAULT NULL,
  `nama_saksi_2` varchar(50) DEFAULT NULL,
  `nik_saksi_2` varchar(16) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'proses',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `n1` varchar(255) DEFAULT NULL,
  `n2` varchar(255) DEFAULT NULL,
  `n3` varchar(255) DEFAULT NULL,
  `n5` varchar(255) DEFAULT NULL,
  `akta_cerai` varchar(255) DEFAULT NULL,
  `izin_komandan` varchar(255) DEFAULT NULL,
  `akta_kematian` varchar(255) DEFAULT NULL,
  `izin_dispen_pa` varchar(255) DEFAULT NULL,
  `izin_kb_wna` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `akta_kelahiran` varchar(255) DEFAULT NULL,
  `rekom_nikah_kua_kec` varchar(255) DEFAULT NULL,
  `pas_foto_4x3` varchar(255) DEFAULT NULL,
  `pas_foto_2x3` varchar(255) DEFAULT NULL,
  `ktp_ayah` varchar(255) DEFAULT NULL,
  `ktp_ibu` varchar(255) DEFAULT NULL,
  `ktp_2saksi` varchar(255) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `pernyataan_status` varchar(255) DEFAULT NULL,
  `dispen_kec` varchar(255) DEFAULT NULL,
  `ket_suntik_catin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_adminduk_dukcapil_gorut.t_formulir_kua: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_formulir_kua` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_formulir_kua` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
