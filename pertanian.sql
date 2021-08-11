/*
SQLyog Ultimate v10.3 
MySQL - 5.5.5-10.4.18-MariaDB : Database - pertanian
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pertanian` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `pertanian`;

/*Table structure for table `auth_menu` */

DROP TABLE IF EXISTS `auth_menu`;

CREATE TABLE `auth_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `auth_menu` */

insert  into `auth_menu`(`id`,`menu`,`description`) values (1,'admin','Untuk pengelolaan administrators active atau tidak'),(2,'user','Untuk pengelolaan menu users active atau tidak'),(3,'Menu','Untuk pengelolaan menus active atau tidak');

/*Table structure for table `auth_role` */

DROP TABLE IF EXISTS `auth_role`;

CREATE TABLE `auth_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `auth_role` */

insert  into `auth_role`(`id`,`role`) values (1,'Administrator'),(2,'Mahasiswa'),(3,'Dosen'),(4,'Keuangan'),(5,'Akademik'),(6,'Visitor');

/*Table structure for table `auth_sub_menu` */

DROP TABLE IF EXISTS `auth_sub_menu`;

CREATE TABLE `auth_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `judul_menu` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `auth_sub_menu` */

insert  into `auth_sub_menu`(`id`,`menu_id`,`judul_menu`,`description`,`url`,`icon`,`is_active`) values (1,1,'Administrator','Untuk pengelolaan administrators active atau tidak','admin','home',1),(2,2,'Users','Untuk pengelolaan menu users active atau tidak','user','account_circle',1),(3,3,'Menus','Untuk pengelolaan menus active atau tidak','menu','widgets',1);

/*Table structure for table `auth_user` */

DROP TABLE IF EXISTS `auth_user`;

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `auth_user` */

insert  into `auth_user`(`id`,`fullname`,`email`,`password`,`phone`,`image`,`role_id`,`is_active`,`date_created`) values (3,'sarmuni','sarmun@gmail.com','$2y$10$k1BAyFBwb2WYWpO.LOiBaOMcpDOCW8nprZGAFKL/4IuALW/b692DW','085711899949','default.jpg',2,1,'2021-04-17 15:43:21'),(4,'sarmuni','sarmuni@gmail.com','$2y$10$maPb0XkOir8WR18nWfpaSOVqAorU8wi9zQcvHMdFXk1sgNicVFnGO','085711899949','default.jpg',2,1,'2021-04-17 15:43:21'),(5,'sarmuni','sarmuni010@gmail.com','$2y$10$85nWDe6eahwY21Qt1zOp.u5BNuzNDrYhZl5Ys5ojh3l8Dg2LFRE82','085711899949','default.jpg',1,1,'2021-04-29 17:16:25');

/*Table structure for table `auth_user_access_menu` */

DROP TABLE IF EXISTS `auth_user_access_menu`;

CREATE TABLE `auth_user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `auth_user_access_menu` */

insert  into `auth_user_access_menu`(`id`,`role_id`,`menu_id`) values (1,1,1),(2,1,2),(3,2,2),(4,1,3),(5,2,3);

/*Table structure for table `auth_user_token` */

DROP TABLE IF EXISTS `auth_user_token`;

CREATE TABLE `auth_user_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `auth_user_token` */

insert  into `auth_user_token`(`id`,`email`,`token`,`date_created`) values (6,'sarmuni010@gmail.com','rWiOExWujkgPW4pI6L9ZWs7eY2AxTlZJF6puS/5gNlI9wCXzVMCsQsYnI06beym33b2sW3pO40PXI2UgZ5r7Lw==','2021-06-19 14:31:47');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
