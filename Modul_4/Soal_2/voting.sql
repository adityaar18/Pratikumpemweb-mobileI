/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.14-MariaDB : Database - voting
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`voting` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `voting`;

/*Table structure for table `pemilih` */

DROP TABLE IF EXISTS `pemilih`;

CREATE TABLE `pemilih` (
  `nik` bigint(20) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `Bdate` date DEFAULT NULL,
  `capres` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pemilih` */

insert  into `pemilih`(`nik`,`nama`,`Bdate`,`capres`) values 
(1,'dani','2021-04-25','c'),
(2,'farhan','2021-04-30','a'),
(3,'siti','2021-04-30','b'),
(4,'dody','2021-05-03','c');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
