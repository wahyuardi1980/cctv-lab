-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for cctvlab
CREATE DATABASE IF NOT EXISTS `cctvlab` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `cctvlab`;

-- Dumping structure for table cctvlab.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cctvlab.kategori: ~5 rows (approximately)
INSERT INTO `kategori` (`id`, `nama`) VALUES
	(1, 'CCTV'),
	(2, 'ALARM'),
	(3, 'ACCESS CONTROL'),
	(4, 'FINGER PRINT'),
	(5, 'PABX'),
	(6, 'VIDEO WALL');

-- Dumping structure for table cctvlab.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `detail2` varchar(255) NOT NULL,
  `detail3` varchar(255) NOT NULL,
  `detail4` varchar(255) NOT NULL,
  `detail5` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cctvlab.produk: ~17 rows (approximately)
INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `detail2`, `detail3`, `detail4`, `detail5`) VALUES
	(1, 1, '4 Camera 2 Megapixels', '2.600.000', 'p1.jpg', '- 1 Unit DVR dahua cooper 4ch 2mp full hd\r\n', '- 4 unit camera dahua 2mp indoor/outdoor', '- 1 Unit HDD 500GB', '- Gratis cable 50M RG 58+Power', '- Gratis pemasangan dan setting online'),
	(2, 1, '8 Camera 2 Megapixels', '2.500.000', 'p2.jpg', '', '', '', '', ''),
	(3, 1, '16 Camera 2 Megapixels', '2.700.000', 'p3.jpg', '', '', '', '', ''),
	(4, 1, 'Paket Hikvision 4CH', '3.300.000', 'pl18.jpg', '- Unit DV Hikvision HDTVI 4CH Full HD 1080p', '- 4 Unit Camera Hik HDTVI 1080p 2MP Indoor/Outdoor', '- 1 Unit Hardisk Sata 500GB', '- Gratis Cable 50M RG59+Power', '- Gratis biaya pasang & setting online ke hp'),
	(5, 1, 'Paket hilook produk hikvision 4 Camera', '2.750.000', 'pl1.jpg', '- 1 Unit DVR 4CH Hilook 2046 Full HD', '- 4 Unit Camera Hilook Indoor/Outdoor', '- 1 Unit HDD 500GB (Accesories [Optional])', '- Gratis Cable 50M RG58+Power', '- Gratis Pemasangan dan Setting online ke hp'),
	(6, 1, 'Camera Bergerak Dan Bersuara, PRPM', '2.000.000', 'pl2.jpg', '', '', '', '', ''),
	(7, 1, '32 Camera 2 Megapixels', '2.000.000', 'pl6.jpg', '', '', '', '', ''),
	(8, 1, 'Paket Hikvision 16 CH', '2.000.000', 'pl7.jpg', '', '', '', '', ''),
	(9, 1, 'Paket Hikvision 32 CH', '2.000.000', 'pl8.jpg', '', '', '', '', ''),
	(10, 1, 'Hikvision Colorvu 2 MP', '2.000.000', 'pl9.jpg', '', '', '', '', ''),
	(11, 1, 'Kamera HD 2 MP PTZ', '2.000.000', 'pl10.jpg', '', '', '', '', ''),
	(12, 4, 'Mesin Absensi Scan', '2.000.000', 'pl11.jpg', '', '', '', '', ''),
	(13, 4, 'Mesin Absensi WL20', '2.000.000', 'pl12.jpg', '', '', '', '', ''),
	(14, 3, 'Paket Access Door', '2.000.000', 'pl13.jpg', '', '', '', '', ''),
	(15, 2, 'Alarm', '2.000.000', 'pl14.jpg', '', '', '', '', ''),
	(16, 5, 'PABX', '2.000.000', 'pl15.jpg', '', '', '', '', ''),
	(17, 5, 'Paket PABX', '2.000.000', 'pl16.jpg', '', '', '', '', ''),
	(18, 6, 'Video Wall', '2.000.000', 'pl17.jpg', '', '', '', '', '');

-- Dumping structure for table cctvlab.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cctvlab.user: ~2 rows (approximately)
INSERT INTO `user` (`id`, `username`, `password`) VALUES
	(1, 'wahyu', '8cbbdc3fff847eee79abadc7b693b60e'),
	(2, 'erwin', '66589ae77387a90660219a2aad624e94');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
