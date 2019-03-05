-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5284
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for kir
CREATE DATABASE IF NOT EXISTS `kir` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `kir`;

-- Dumping structure for table kir.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table kir.admin: ~0 rows (approximately)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table kir.order
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_pelatih` int(5) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_id_barang` (`id_pelatih`),
  CONSTRAINT `FK_id_pelatih` FOREIGN KEY (`id_pelatih`) REFERENCES `pelatih` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table kir.order: ~1 rows (approximately)
DELETE FROM `order`;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` (`id`, `id_pelatih`, `nama_sekolah`, `alamat`, `hp`) VALUES
	(1, 17, 'SMA 8 Jakarta Selatan', 'Jalan Jaksel No 18', '08486475458');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping structure for table kir.pelatih
CREATE TABLE IF NOT EXISTS `pelatih` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `biasa` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table kir.pelatih: ~7 rows (approximately)
DELETE FROM `pelatih`;
/*!40000 ALTER TABLE `pelatih` DISABLE KEYS */;
INSERT INTO `pelatih` (`id`, `username`, `nama`, `alamat`, `foto`, `biasa`, `jam`) VALUES
	(1, 'fahrul', 'Fahrul Kurniawan', 'Jalan Bunga No 1 Pasar Minggu', 'http://informatika.uin-malang.ac.id/wp-content/uploads/2018/10/IMG_20170814_111556-193x300.jpg', 'SMA', 'Senin, Pukul 12.00 - 15.00 WIB<br>Selasa, pukul 16'),
	(13, 'sulton', 'Shulthon Hanif Madjid', 'Jalan Rawasari Jakarta Utara', 'https://pbs.twimg.com/profile_images/647112881914277888/WtKqWF6a.jpg', 'SMP', 'Senin, Pukul 12.00 - 15.00 WIB<br>Selasa, pukul 16'),
	(14, 'alvin', 'Alviansyah Oktario Pratama', 'Jalan Rawamangun Persahabatan', 'http://mahasiswa.dinus.ac.id/images/foto/A/A11/2015/A11.2015.09127.jpg', 'SD', 'Senin, Pukul 12.00 - 15.00 WIB<br>Selasa, pukul 16'),
	(15, 'dadan', 'Dadan Sumardani', 'Jalan Lebak Bulus No 3', 'http://mahasiswa.dinus.ac.id/images/foto/A/A11/2013/A11.2013.07764.jpg', 'SD', 'Senin, Pukul 12.00 - 15.00 WIB<br>Selasa, pukul 16'),
	(16, 'gita', 'Nurmala Sagita Suryadi', 'Jalan Pemuda 3 Rawamangun', 'http://mahasiswa.dinus.ac.id/images/foto/A/A11/2014/A11.2014.08038.jpg', 'SMA', 'Senin, Pukul 12.00 - 15.00 WIB<br>Selasa, pukul 16'),
	(17, 'uhti', 'Uhti Aisyah', 'Jalan Ciledug Tangerang', 'https://pbs.twimg.com/profile_images/693409151846748160/IoXQdAuk_400x400.jpg', 'SMA', 'Senin, Pukul 12.00 - 15.00 WIB<br>Selasa, pukul 16'),
	(18, 'ade', 'Ade Rohdiana', 'Jalan Pemuda Rawamangun No 4', 'http://roamsys.com/wp-content/uploads/2015/09/Michael_B_Avatar.png', 'SD', 'Senin, Pukul 12.00 - 15.00 WIB<br>Selasa, pukul 16');
/*!40000 ALTER TABLE `pelatih` ENABLE KEYS */;

-- Dumping structure for table kir.user_sekolah
CREATE TABLE IF NOT EXISTS `user_sekolah` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL DEFAULT '0',
  `hp` varchar(100) NOT NULL DEFAULT '0',
  `alamat` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table kir.user_sekolah: ~0 rows (approximately)
DELETE FROM `user_sekolah`;
/*!40000 ALTER TABLE `user_sekolah` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_sekolah` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
