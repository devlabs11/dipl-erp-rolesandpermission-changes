/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.3.39-MariaDB : Database - dipl_erp_test
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dipl_erp_test` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;

USE `dipl_erp_test`;

/*Table structure for table `permission_menu_mappings` */

DROP TABLE IF EXISTS `permission_menu_mappings`;

CREATE TABLE `permission_menu_mappings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) DEFAULT NULL,
  `url` varchar(191) DEFAULT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `postion` int(11) DEFAULT 0,
  `menu_id` varchar(191) DEFAULT '0' COMMENT 'permission_menu_masters Table id',
  `submenu_id` int(11) DEFAULT 0 COMMENT 'permission_menu_masters Table id',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permission_menu_mappings` */

insert  into `permission_menu_mappings`(`id`,`name`,`url`,`slug`,`postion`,`menu_id`,`submenu_id`,`created_by`,`updated_by`,`deleted_by`,`deleted_at`,`created_at`,`updated_at`) values (1,'View',NULL,'company-view',0,'1',2,9,NULL,9,'2023-09-01 13:44:02','2023-09-01 05:28:51','2023-09-01 13:44:02'),(2,'create',NULL,'company-create',0,'1',2,9,9,NULL,NULL,'2023-09-01 05:58:44','2023-09-04 10:48:26'),(3,'edit',NULL,'company-edit',0,'1',2,9,NULL,NULL,NULL,'2023-09-01 05:59:02','2023-09-01 05:59:02'),(4,'list',NULL,'company-list',0,'1',2,9,NULL,NULL,NULL,'2023-09-01 05:59:49','2023-09-01 05:59:49'),(5,'delete',NULL,'company-delete',0,'1',2,9,NULL,NULL,NULL,'2023-09-01 06:43:13','2023-09-01 06:43:13'),(6,'create',NULL,'quotations-create',0,'3',5,9,NULL,NULL,NULL,'2023-09-04 10:40:47','2023-09-04 10:40:47'),(7,'edit',NULL,'quotations-edit',0,'3',5,9,NULL,NULL,NULL,'2023-09-04 10:44:00','2023-09-04 10:44:00'),(8,'delete',NULL,'quotations-delete',0,'3',5,9,NULL,NULL,NULL,'2023-09-04 10:44:25','2023-09-04 10:44:25'),(9,'list',NULL,'quotations-list',0,'3',5,9,9,NULL,NULL,'2023-09-04 10:44:42','2023-09-04 10:46:07'),(10,'duplicate',NULL,'quotations-duplicate',0,'3',5,9,NULL,NULL,NULL,'2023-09-04 10:45:04','2023-09-04 10:45:04'),(11,'alter',NULL,'quotations-alter',0,'3',5,9,NULL,NULL,NULL,'2023-09-04 10:45:28','2023-09-04 10:45:28'),(12,'view-PDF(With HF)',NULL,'quotations-pdf',0,'3',5,9,NULL,NULL,NULL,'2023-09-04 10:46:35','2023-09-04 10:46:35'),(13,'view-PDF(Without HF)',NULL,'quotations-view',0,'3',5,9,NULL,NULL,NULL,'2023-09-04 10:47:04','2023-09-04 10:47:04'),(14,'export',NULL,'quotations-export',0,'3',5,9,NULL,NULL,NULL,'2023-09-04 10:47:32','2023-09-04 10:47:32'),(15,'create',NULL,'site-create',0,'1',7,9,NULL,NULL,NULL,'2023-09-04 10:51:26','2023-09-04 10:51:26');

/*Table structure for table `permission_menu_masters` */

DROP TABLE IF EXISTS `permission_menu_masters`;

CREATE TABLE `permission_menu_masters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) DEFAULT NULL,
  `url` varchar(191) DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `parent_id` int(11) DEFAULT 0,
  `treecode` varchar(191) DEFAULT NULL,
  `position` int(11) DEFAULT 0,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permission_menu_masters` */

insert  into `permission_menu_masters`(`id`,`title`,`url`,`icon`,`parent_id`,`treecode`,`position`,`created_by`,`updated_by`,`dele

ted_by`,`deleted_at`,`created_at`,`updated_at`) values (1,'Master',NULL,NULL,0,NULL,0,9,NULL,NULL,NULL,'2023-09-01 05:25:05','2023-09-01 05:25:05'),(2,'Company Master(Company-Setup)',NULL,NULL,1,NULL,0,9,NULL,NULL,NULL,'2023-09-01 05:26:03','2023-09-01 05:26:03'),(3,'Sales',NULL,NULL,0,NULL,0,9,NULL,NULL,NULL,'2023-09-04 10:37:37','2023-09-04 10:37:37'),(4,'Jobs',NULL,NULL,0,NULL,0,9,9,NULL,NULL,'2023-09-04 10:38:16','2023-09-04 10:38:32'),(5,'Quotations',NULL,NULL,3,NULL,0,9,NULL,NULL,NULL,'2023-09-04 10:38:45','2023-09-04 10:38:45'),(6,'Manage Proforma Invoice',NULL,NULL,3,NULL,0,9,NULL,NULL,NULL,'2023-09-04 10:39:15','2023-09-04 10:39:15'),(7,'Site Master(Company Setup)',NULL,NULL,1,NULL,0,9,NULL,NULL,NULL,'2023-09-04 10:50:12','2023-09-04 10:50:12');

/*Table structure for table `permission_role_mappings` */

DROP TABLE IF EXISTS `permission_role_mappings`;

CREATE TABLE `permission_role_mappings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT 0 COMMENT 'access_roles Table id',
  `permission_id` varchar(191) DEFAULT '0' COMMENT 'permission_menu_mappings Table id',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permission_role_mappings` */

insert  into `permission_role_mappings`(`id`,`role_id`,`permission_id`,`created_by`,`updated_by`,`deleted_by`,`deleted_at`,`created_at`,`updated_at`) values (26,25,'2',NULL,NULL,NULL,NULL,NULL,NULL),(27,25,'3',NULL,NULL,NULL,NULL,NULL,NULL),(28,25,'4',NULL,NULL,NULL,NULL,NULL,NULL),(29,25,'5',NULL,NULL,NULL,NULL,NULL,NULL),(41,38,'2',NULL,NULL,NULL,NULL,NULL,NULL),(42,38,'3',NULL,NULL,NULL,NULL,NULL,NULL),(43,38,'4',NULL,NULL,NULL,NULL,NULL,NULL),(44,38,'5',NULL,NULL,NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
