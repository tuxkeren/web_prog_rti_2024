-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.1.72-community - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for minimart
DROP DATABASE IF EXISTS `minimart`;
CREATE DATABASE IF NOT EXISTS `minimart` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `minimart`;

-- Dumping structure for table minimart.customers
DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table minimart.customers: 6 rows
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
REPLACE INTO `customers` (`id`, `cust_name`, `address`, `phone`) VALUES
	(1, 'Andi Felani', 'Bengkong Laut', '0813 466 7921'),
	(2, 'Fatma Hanum', 'Batu Aji', '0856 777 3321'),
	(3, 'Budi Hartono', 'Nagoya', '0813 554 7661'),
	(4, 'Edward H', 'Batu Ampar', '0811 777 111'),
	(5, 'Agus Purwati', 'Baloi Permai', '0811 600 7781'),
	(6, 'Tsiqah M', 'Batu Ampar', '-');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table minimart.d_trans
DROP TABLE IF EXISTS `d_trans`;
CREATE TABLE IF NOT EXISTS `d_trans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `htrans_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `htrans_id` (`htrans_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table minimart.d_trans: 0 rows
/*!40000 ALTER TABLE `d_trans` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_trans` ENABLE KEYS */;

-- Dumping structure for table minimart.h_trans
DROP TABLE IF EXISTS `h_trans`;
CREATE TABLE IF NOT EXISTS `h_trans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_trans` date NOT NULL,
  `cust_id` int(11) NOT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cust_id` (`cust_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table minimart.h_trans: 0 rows
/*!40000 ALTER TABLE `h_trans` DISABLE KEYS */;
/*!40000 ALTER TABLE `h_trans` ENABLE KEYS */;

-- Dumping structure for table minimart.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barcode` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table minimart.products: 5 rows
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
REPLACE INTO `products` (`id`, `barcode`, `product_name`, `price`, `picture`) VALUES
	(1, '12312354', 'Pop Mie Rasa Bakso Ayam', 6500.00, 'images/vegetables.webp'),
	(2, '12312355', 'Pop Mie Rasa Bakso Daging', 7000.00, NULL),
	(3, '12312356', 'Indomie Goreng Laksa', 13750.00, NULL),
	(4, '12312357', 'Baygon Semprot 250ml', 23000.00, NULL),
	(5, '12312358', 'MacBook Air 15inc', 23450000.00, NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table minimart.stocks
DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table minimart.stocks: 0 rows
/*!40000 ALTER TABLE `stocks` DISABLE KEYS */;
/*!40000 ALTER TABLE `stocks` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
