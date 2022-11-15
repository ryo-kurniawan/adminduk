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

-- Dumping structure for table db_adminduk_dukcapil_gorut.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_adminduk_dukcapil_gorut.ci_sessions: ~0 rows (approximately)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

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
  `tgl_nikah` date DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table db_adminduk_dukcapil_gorut.t_formulir_kua: ~6 rows (approximately)
/*!40000 ALTER TABLE `t_formulir_kua` DISABLE KEYS */;
INSERT INTO `t_formulir_kua` (`id`, `nama_pria`, `nik_pria`, `nama_wanita`, `nik_wanita`, `nama_penghulu`, `nik_penghulu`, `nama_saksi_1`, `nik_saksi_1`, `nama_saksi_2`, `nik_saksi_2`, `status`, `tgl_nikah`, `created_at`, `updated_at`, `n1`, `n2`, `n3`, `n5`, `akta_cerai`, `izin_komandan`, `akta_kematian`, `izin_dispen_pa`, `izin_kb_wna`, `ktp`, `kk`, `akta_kelahiran`, `rekom_nikah_kua_kec`, `pas_foto_4x3`, `pas_foto_2x3`, `ktp_ayah`, `ktp_ibu`, `ktp_2saksi`, `ijazah`, `pernyataan_status`, `dispen_kec`, `ket_suntik_catin`) VALUES
	(1, 'Tono Sukmojo', '3525015201880002', 'Susi Susanti', '3525010510930001', 'Virman Pradana', '3525016005650004', 'Galak Hardiansyah', '3525015306780002', 'Sidiq Mandala', '3525016501830002', 'revisi', NULL, '2022-11-14 13:06:57', '2022-11-15 01:53:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'Hartana Firgantoro', '3525013006580042', 'Kayla Pudjiastuti', '3525017006950028', 'Vero Kusumo', '3525017006620060', 'Talia Uyainah', '3525017006650078', 'Makara Jailani', '3525011506830001', 'selesai', NULL, '2022-11-14 13:11:22', '2022-11-15 13:17:15', 'f8d160dde6ed65d911c3ee288ab9267f.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 'Prabawa Widodo', '3525017006540043', 'Winda Novitasari', '3525017006750042', 'Legawa Prasetyo ', '3525010609510002', 'Kamidin Waskita', '3525015212920003', 'Elvina Sudiati', '3525013006580043', 'belum lengkap', NULL, '2022-11-14 13:14:03', '2022-11-15 01:57:23', '6ad9eb38b3aca2c431346bf936cb34b1.png', 'f21b25360a977ceead46fef6093434dd.png', 'c5d253a6cb4e217fb393455a7bbe6391.pdf', NULL, NULL, NULL, NULL, NULL, '176d86128cfd4514eaa89fc4b6ec4341.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 'Keisha Wijayanti', '3525010505720003', 'Keisha Wijayanti', '3525013006640036', 'Pardi Sirait', '3525016401830001', 'Sarah Lailasari ', '3525015306880002', 'Michelle Aryani ', '3525013006740032', 'proses', NULL, '2022-11-14 23:35:31', '2022-11-15 01:59:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(5, 'Jarwa Pradana', '3314076404720003', 'Farhunnisa Pudjiastuti ', '3525016611770002', 'Emong Pranowo', '3525016801790002', 'Padma Padmasari', '3525014407710003', 'Ibun Pratama', '3525016406730003', 'proses', '2022-12-21', '2022-11-15 02:02:45', '2022-11-15 22:43:05', 'a135d4f7ebbff1ff76e88323929b6fea.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(6, '', '', '', '', '', '', '', '', '', '', 'belum lengkap', '2022-11-30', '2022-11-15 22:35:49', '2022-11-15 22:35:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `t_formulir_kua` ENABLE KEYS */;

-- Dumping structure for table db_adminduk_dukcapil_gorut.t_laporan_rs
CREATE TABLE IF NOT EXISTS `t_laporan_rs` (
  `id_laporan_rs` varchar(200) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `tempat_lahir_anak` varchar(100) NOT NULL,
  `tgl_lahir_anak` date NOT NULL,
  `no_kk` varchar(16) DEFAULT NULL,
  `file_kk` varchar(100) DEFAULT NULL,
  `file_ktp_ayah` varchar(100) DEFAULT NULL,
  `file_ktp_ibu` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_laporan_rs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_adminduk_dukcapil_gorut.t_laporan_rs: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_laporan_rs` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_laporan_rs` ENABLE KEYS */;

-- Dumping structure for table db_adminduk_dukcapil_gorut.t_revisi_formulir_kua
CREATE TABLE IF NOT EXISTS `t_revisi_formulir_kua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_kua_id` int(11) NOT NULL,
  `message` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_adminduk_dukcapil_gorut.t_revisi_formulir_kua: ~2 rows (approximately)
/*!40000 ALTER TABLE `t_revisi_formulir_kua` DISABLE KEYS */;
INSERT INTO `t_revisi_formulir_kua` (`id`, `form_kua_id`, `message`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Masih banyak form yang tidak lengkap! Tolong dilengkapi lagi.', NULL, NULL),
	(2, 1, 'Masih belum lengkap', NULL, NULL);
/*!40000 ALTER TABLE `t_revisi_formulir_kua` ENABLE KEYS */;

-- Dumping structure for table db_adminduk_dukcapil_gorut.t_user
CREATE TABLE IF NOT EXISTS `t_user` (
  `nik` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(32) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` timestamp NULL DEFAULT NULL,
  `hash_key` varchar(200) DEFAULT NULL,
  `hash_expiry` varchar(50) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_adminduk_dukcapil_gorut.t_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `t_user` DISABLE KEYS */;
INSERT INTO `t_user` (`nik`, `name`, `email`, `username`, `password`, `avatar`, `role`, `created_at`, `last_login`, `hash_key`, `hash_expiry`, `unit_id`) VALUES
	('1234567898765432', 'Ryo Kurniawan', 'pakayaaryo@gmail.com', 'Ryoo', '$2y$10$FJK3ZPCaRt4PtZ53GKWKtuQ0J9XEd/z94ktHxBDekLHBpHlt/KNa6', 'assets-img/user-male.jpg', 'operator_kua', '2022-10-31 07:53:21', NULL, NULL, NULL, NULL),
	('7501140805970001', 'Andriyanto Pajiri', 'andriyantopajiri2020@gmail.com', 'andriyantopajiri2020', '$2y$10$FJK3ZPCaRt4PtZ53GKWKtuQ0J9XEd/z94ktHxBDekLHBpHlt/KNa6', NULL, 'operator_capil', '2022-11-04 07:31:59', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `t_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
