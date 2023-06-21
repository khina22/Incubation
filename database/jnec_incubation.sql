/*
SQLyog Ultimate v8.82 
MySQL - 5.5.5-10.4.28-MariaDB : Database - incubation_jnec
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`incubation_jnec` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `incubation_jnec`;

/*Table structure for table `t_admin_master` */

DROP TABLE IF EXISTS `t_admin_master`;

CREATE TABLE `t_admin_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_admin_master` */

insert  into `t_admin_master`(`id`,`email`,`password`,`created_at`,`updated_at`,`created_by`,`updated_by`) values (143,'shankharsharma.jnec@rub.edu.bt','sharma123@','2023-06-19 04:33:45','2023-06-19 04:33:45',1,1);

/*Table structure for table `t_advisory_master` */

DROP TABLE IF EXISTS `t_advisory_master`;

CREATE TABLE `t_advisory_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `affiliation` text DEFAULT NULL,
  `pro_pic` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_advisory_master` */

insert  into `t_advisory_master`(`id`,`name`,`designation`,`affiliation`,`pro_pic`,`created_at`,`created_by`,`updated_at`,`updated_by`) values (18,'Khina Maya Ghalley','fdgdg','dfg','1687197961_Nezuka.jpg','2023-06-19 06:06:01','1','2023-06-19 18:06:01',NULL),(19,'zulu','dfgdg','dfgdfg','1687197970_5.jpg','2023-06-19 06:06:10','1','2023-06-19 18:06:10',NULL),(20,'Khinafdgfvg','fgbdg','gdfvd','1687197980_2.jpg','2023-06-19 06:06:20','1','2023-06-19 18:06:20',NULL);

/*Table structure for table `t_application_master` */

DROP TABLE IF EXISTS `t_application_master`;

CREATE TABLE `t_application_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `business_title` varchar(1000) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `potential_customers` text DEFAULT NULL,
  `competetors` text DEFAULT NULL,
  `survey` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_application_master` */

insert  into `t_application_master`(`id`,`name`,`email`,`contact_no`,`business_title`,`description`,`potential_customers`,`competetors`,`survey`,`created_at`,`created_by`,`updated_at`,`updated_by`) values (1,'Khina Maya Ghalley','khinaghalley646@gmail.com',17924980,'dwed','dwe','de',NULL,'ds','2023-06-19 04:26:02','1','2023-06-19 04:26:02',NULL),(2,'Khina Maya Ghalley','khinaghalley646@gmail.com',17924980,'dwed','dwe','de',NULL,'ds','2023-06-19 04:38:19','1','2023-06-19 04:38:19',NULL),(3,'zulu','khinaghalley646@gmail.com',17924980,'fdf','dfd','fdsf',NULL,'dfdf','2023-06-19 06:12:57','1','2023-06-19 06:12:57',NULL),(4,'zulu','khinaghalley646@gmail.com',17924980,'fdf','dfd','fdsf',NULL,'dfdf','2023-06-19 06:14:35','1','2023-06-19 06:14:35',NULL);

/*Table structure for table `t_coaching_master` */

DROP TABLE IF EXISTS `t_coaching_master`;

CREATE TABLE `t_coaching_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(100) DEFAULT NULL,
  `coachingtools` text DEFAULT NULL,
  `facilitytools` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_coaching_master` */

insert  into `t_coaching_master`(`id`,`pic`,`coachingtools`,`facilitytools`,`created_at`,`created_by`,`updated_at`,`updated_by`) values (20,'1687198004_carousel-1.jpg','fdfdfd','dfd','2023-06-19 06:06:44','1','2023-06-19 18:06:44',NULL),(21,'1687198016_Be gone.jpg','dfd','fd','2023-06-19 06:06:56','1','2023-06-19 18:06:56',NULL),(22,'1687198016_Be gone.jpg','dfd','fd','2023-06-19 06:06:56','1','2023-06-19 18:06:56',NULL);

/*Table structure for table `t_event_master` */

DROP TABLE IF EXISTS `t_event_master`;

CREATE TABLE `t_event_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `venue` varchar(3000) DEFAULT NULL,
  `pro_pic` longblob DEFAULT NULL,
  `organizer` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_event_master` */

insert  into `t_event_master`(`id`,`title`,`description`,`date`,`venue`,`pro_pic`,`organizer`,`created_at`,`created_by`,`updated_at`,`updated_by`) values (39,'dfvfdvfd','fdvf','2023-06-29 00:00:00','fdvd','1687197090_6.jpg','fvd','2023-06-19 05:51:30','1','2023-06-19 17:51:30',NULL),(40,'fvbf','vfdv','2023-06-27 00:00:00','fv','1687197103_3.jpg','fvfdv','2023-06-19 05:51:43','1','2023-06-19 17:51:43',NULL),(41,'vfdvfd','vfdvdf','2023-06-28 00:00:00','vfdv','1687197115_5.jpg','dfvdv','2023-06-19 05:51:56','1','2023-06-19 17:51:56',NULL);

/*Table structure for table `t_feedback_master` */

DROP TABLE IF EXISTS `t_feedback_master`;

CREATE TABLE `t_feedback_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `feedback` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_feedback_master` */

insert  into `t_feedback_master`(`id`,`name`,`contact_no`,`email`,`feedback`,`created_at`,`created_by`,`updated_at`,`updated_by`) values (18,'Khina Maya Ghalley',17924980,'des@rdfrdf','qwewed','2023-06-19 09:41:46','1','2023-06-19 09:41:46',NULL),(19,'ddr',17924980,'des@rdfrdf','fref','2023-06-19 09:46:05','1','2023-06-19 09:46:05',NULL),(20,'Khina Maya Ghalley',17924980,'sdf@gmail.com','weerf','2023-06-19 10:03:13','1','2023-06-19 10:03:13',NULL),(21,'Khina Maya Ghalley',17924980,'ff@ahdbse','wwed','2023-06-19 10:04:08','1','2023-06-19 10:04:08',NULL),(22,'Khina Maya Ghalley',17924980,'des@rdfrdf','rgg','2023-06-19 12:46:53','1','2023-06-19 12:46:53',NULL);

/*Table structure for table `t_incubatee_master` */

DROP TABLE IF EXISTS `t_incubatee_master`;

CREATE TABLE `t_incubatee_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `pro_pic` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_incubatee_master` */

insert  into `t_incubatee_master`(`id`,`name`,`contact_no`,`email`,`description`,`pro_pic`,`created_at`,`created_by`,`updated_at`,`updated_by`) values (9,'fdsf',17924980,'khinaghalley646@gmail.comfs','sfdf','1687182183_Be gone.jpg','2023-06-19 01:43:03','1','2023-06-19 13:43:03',NULL);

/*Table structure for table `t_mentors_master` */

DROP TABLE IF EXISTS `t_mentors_master`;

CREATE TABLE `t_mentors_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `affiliation` text DEFAULT NULL,
  `pro_pic` varchar(100) DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_mentors_master` */

insert  into `t_mentors_master`(`id`,`name`,`designation`,`affiliation`,`pro_pic`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (31,'Khina Maya Ghalley','d fff','aws ff','1687185623_5.jpg','1','2023-06-19 02:40:23',NULL,'2023-06-19 14:40:23'),(33,'test','asdfa','asdf','1687178324_Sleep was a mistake.jpg','1','2023-06-19 12:38:44',NULL,'2023-06-19 12:38:44');

/*Table structure for table `t_stakeholder_master` */

DROP TABLE IF EXISTS `t_stakeholder_master`;

CREATE TABLE `t_stakeholder_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `organization` varchar(1000) DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `pro_pic` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_stakeholder_master` */

insert  into `t_stakeholder_master`(`id`,`name`,`email`,`contact_no`,`organization`,`designation`,`pro_pic`,`created_at`,`created_by`,`updated_at`,`updated_by`) values (8,'dgd','khinaghalley646@gmail.com',NULL,'erger','erfe',NULL,'2023-06-18 11:50:23','1','2023-06-18 11:50:23',NULL),(9,'ef','khinaghalley646@gmail.com',NULL,'fe','efe',NULL,'2023-06-18 11:51:04','1','2023-06-18 11:51:04',NULL),(10,'dsfs','khinaghalley646@gmail.com',NULL,'fsf','dsfs',NULL,'2023-06-19 01:44:08','1','2023-06-19 13:44:08',NULL),(11,'ssd','khinaghalley646@gmail.com',NULL,'dsdf','sfsd','1687182712_6.jpg','2023-06-19 01:51:52','1','2023-06-19 13:51:52',NULL),(12,'ddf','khinaghalley646@gmail.com',NULL,'fe','sfsf','1687182889_2.jpg','2023-06-19 01:54:49','1','2023-06-19 13:54:49',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
