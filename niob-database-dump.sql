-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: niob
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `niob_info`
--

DROP TABLE IF EXISTS `niob_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `niob_info` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_surname` varchar(100) DEFAULT NULL,
  `member_othernames` varchar(200) DEFAULT NULL,
  `member_personal_title` varchar(20) DEFAULT NULL,
  `member_gender` varchar(10) DEFAULT NULL,
  `member_date_of_birth` varchar(50) DEFAULT NULL,
  `member_religion` varchar(20) DEFAULT NULL,
  `member_phone_no` int(11) DEFAULT NULL,
  `member_email_address` varchar(50) DEFAULT NULL,
  `member_contact_address` varchar(200) DEFAULT NULL,
  `member_niob_admission_date` varchar(20) DEFAULT NULL,
  `member_niob_grade_title` varchar(50) DEFAULT NULL,
  `member_registration_number` varchar(100) DEFAULT NULL,
  `membership_number` varchar(100) DEFAULT NULL,
  `corbon_admission_number` varchar(20) DEFAULT NULL,
  `corbon_date_of_admission` varchar(20) DEFAULT NULL,
  `academic_qualification` varchar(20) DEFAULT NULL,
  `member_year_of_education` varchar(20) DEFAULT NULL,
  `member_current_employer` varchar(20) DEFAULT NULL,
  `member_position_held` varchar(20) DEFAULT NULL,
  `member_additional_infomation` varchar(200) DEFAULT NULL,
  `member_passport` varchar(200) DEFAULT NULL,
  `access` int(11) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `niob_info`
--

LOCK TABLES `niob_info` WRITE;
/*!40000 ALTER TABLE `niob_info` DISABLE KEYS */;
INSERT INTO `niob_info` VALUES (1,'adeniyi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'Abidemi','Ayobami',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'Adeniyi','Taofik Adeleke','Alhaji','Male','07/06/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','08/01/2015','Corporate','87654231','SCI/14/15/0068','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer','Additional information',NULL,NULL),(4,'Adeniyi','Taofik Adeleke','Alhaji','Male','07/06/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','08/01/2015','Corporate','87654231','SCI/14/15/0068','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer','Additional information',NULL,NULL),(5,'Adeniyi','Taofik Adeleke','Alhaji','Male','07/06/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','08/01/2015','Corporate','87654231','SCI/14/15/0068','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer','Additional information',NULL,NULL),(6,'Adeniyi','Taofik Adeleke','Alhaji','Male','07/06/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','08/01/2015','Corporate','87654231','SCI/14/15/0068','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer','Additional information',NULL,NULL),(7,'Adeniyi','Taofik Adeleke','Alhaji','Male','07/06/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','08/01/2015','Corporate','87654231','SCI/14/15/0068','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer','Additional information',NULL,NULL),(8,'Adeniyi','Taofik Adeleke','Alhaji','Male','07/06/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','08/01/2015','Corporate','87654231','SCI/14/15/0068','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer','Additional information',NULL,NULL),(9,'Adeniyi','Taofik Adeleke','Alhaji','Male','07/06/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','08/01/2015','Corporate','87654231','SCI/14/15/0068','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer','Additional information',NULL,NULL),(10,'Adeniyi','Taofik Adeleke','Alhaji','Male','07/06/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','08/01/2015','Corporate','87654231','SCI/14/15/0068','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer','Additional information',NULL,NULL),(11,'Adeniyi','Taofik Adeleke','Alhaji','Male','07/06/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','08/01/2015','Corporate','87654231','SCI/14/15/0068','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer','Additional information',NULL,NULL),(12,'Adeniyi','Taofik Adeleke','Bldr.','Female','07/03/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','234yt56488','Licentiate','kjhgfjgh','SCI/14/15/0068','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer','anything',NULL,NULL),(13,'Adeniyi','Taofik Adeleke','Alhaji','Male','07/03/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','234yt56488','Associate','123nhnb avw','mknbhvghhm','kmjihkygxhnjf','njbhgvhfgh','NCE','','taofikadeniyi','software developer','new thing are coming',NULL,NULL),(14,'Adeniyi','Taofik Adeleke','Emperor','Male','07/03/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','234yt56488','Graduate','87654231','09opiuy','25566666','khbgjvshjgn','NCE','','taofikadeniyi',' jkvldnbiolek','njkbhjvsnj',NULL,NULL),(15,'Olanrewaju','Opeyemi deborah','Miss','Female','02/01/2000','Islamic',2147483647,'deborah@yqmail.com','nkjhnfdmx,mf',' kbvhns','Student','znk.vjnf','vkjsvhjns','nl;rjvnjs','fnjkvhfnf','WASCE','','nvihlkhjnv','njkhvl,j.nfv','njhbf',NULL,NULL),(16,'Oladapo','Oluwatobiloba abdulmalik','Comrade','Male','458796','Christianity',2547863,'lordrahqi@gmail.com',',knlhdvnjm','mnkh,jnvm ','Associate','kjnk,dmn ','jmnk,md','01222222','021458','PGD','','jkhhjvnfhkjns','nhiyklsghvnerj','bhiyskhtnr',NULL,NULL),(17,'Oloko','Dapo demola','Bldr.','Male','0125479','Christianity',125478,'mnjbhkbvn@hiuu','kmnjbhgvfhc','2015478','Corporate','02547','255','258','0258','NCE','',',mnbhgvcfhg','mnjbkhgvjcfh','jkhbjgvfhg',NULL,NULL),(18,'Adeniyi','Taofik Adeleke','Bldr.','Female','07/03/1993','Traditional',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','234yt56488','Graduate','87654231','09opiuy','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi',' jkvldnbiolek','kojhfghj',NULL,NULL),(19,'Adeniyi','taofik adeleke','Comrade','Male','07/03/1993','Christianity',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu',';.lkjhgvcf','Corporate','kjhgfjgh','09opiuy','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer','km;njbhgfhghdfgh',NULL,NULL),(20,'Adeniyi','Taofik Adeleke','Bldr.','Female','07/03/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','234yt56488','Graduate','87654231','09opiuy','25566666','02/08/2015','PGD','','taofikadeniyi',' jkvldnbiolek',',kmjnhbjghmjn',NULL,NULL),(21,'Adeniyi','Taofik Adeleke','Alhaji','Male','789','Christianity',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','234yt56488','Graduate','87654231','09opiuy','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer',',lmknjbhgvjhnhbhn',NULL,NULL),(22,'Adeniyi','Taofik Adeleke','Alhaji','Female','07/03/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','234yt56488','Fellow','87654231','09opiuy','25566666','02/08/2015','HND','','taofikadeniyi',' jkvldnbiolek','m;knjkhbdfvhjnms',NULL,NULL),(23,'Adeniyi','Taofik Adeleke','Doctor','Male','07/03/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu','234yt56488','Graduate','87654231','09opiuy','25566666','02/08/2015','NCE','','tm30','software developer',',ljhg',NULL,NULL),(24,'Adeniyi','Sheriff Adedayo','Alhaji','Male','21/02/1988','Islamic',2147483647,'d14chicks@yahoo.com','13 dayo oluyemi str isawo ikorodu','234yt56488','Graduate','87654231','09opiuy','25566666','02/08/2015','Bsc/Btech','','taofikadeniyi','software developer','knjbhgjhhjnm',NULL,NULL),(25,'Oloko','Dapo demola','Bldr.','#','021458','Christianity',13654789,'oloko@ymail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','234yt56488','Licentiate','87654231','09opiuy','25566666','02/08/2015','HND','','taofikadeniyi',' jkvldnbiolek','kjkhgjhf',NULL,NULL),(26,'Adeniyi','taofik adeleke','Alhaji','Female','789','#',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','','#','','','','','#','','taofikadeniyi','','',NULL,NULL),(27,'Adeniyi','lkjhgfghj','#','#','','#',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','','#','','','','','#','','taofikadeniyi','','',NULL,NULL),(28,'Ayoola','Sunday eKITI','Comrade','Female','02587','Traditional',2154,'ekiti@gmail.com','jesus','258741','Graduate','256398','214587','25698741','125478','NCE','','kmjk,m,jdfmkbyjj','mkli gkls,jnmc lk','km k ,m erf d',NULL,NULL),(29,'Oladipupo','Ibrahim Zeze','Chief','#','07/03/1993','Islamic',125478,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu','234yt56488','Corporate','kjhgfjgh','SCI/14/15/0068','25566666','02/08/2015','Bsc/Btech','','tm30','software developer',',kmjk,rhngierl',NULL,NULL),(30,'Adeniyi','Taofik Adeleke','Doctor','Male','07/03/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu','234yt56488','Associate','kjhgfjgh','mknbhvghhm','25566666','02/08/2015','HND','Msc','taofikadeniyi','software developer','vefbge',NULL,NULL),(31,'Adeniyi','Taofik Adeleke','Mr','Male','07/03/1993','Christianity',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu','234yt56488','Graduate','87654231','SCI/14/15/0068','25566666','02/08/2015','OND','NCE','taofikadeniyi','software developer',',lkmnjbhgvh',NULL,NULL),(32,'Adeniyi','Taofik Adeleke','Alhaji','Male','07/03/1993','#',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu','234yt56488','Fellow','87654231','SCI/14/15/0068','25566666','02/08/2015','Bsc/Btech','HND','taofikadeniyi','software developer','mnbj',NULL,NULL),(33,'Adeniyi','Taofik Adeleke','Alhaji','Female','07/03/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu','234yt56488','Associate','87654231','SCI/14/15/0068','kmjihkygxhnjf','02/08/2015','HND','HND','tm30','software developer','mknjhbilfks',NULL,NULL),(34,'Oloko','taofik adeleke','Comrade','Male','07/03/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu','234yt56488','Corporate','monopoly','monopoly123','kmjihkygxhnjf','njbhgvhfgh','NCE','NCE','tm30','jkbhgvuujykhjkmr','kmjnh',NULL,NULL),(35,'Adeniyi','Taofik Adeleke','Bldr.','Male','07/03/1993','Islamic',2147483647,'bidemi64@gmail.com','13 dayo oluyemi str isawo ikorodu, 13 dayo oluyemi str isawo ikorodu','08/01/2015','Fellow','bomomobo','yagagagaga','olopa','02/08/2015','Msc','OND','taofikadeniyi','Software developer','mlkhfjhgjk',NULL,NULL),(36,'fifi','max drex','Comrade','Female','01/04/2010','Christianity',2147483647,'maxdrex@ymail.com','24 olopa street off obalende bustop rd','2/3/1993','Graduate','myexpanel','myexpanel','myrootpanel','miandra','NCE','NCE','sofolureparty','ofofo','alright',NULL,NULL);
/*!40000 ALTER TABLE `niob_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `member_id` int(11) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `access` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (0,'myname','oauujcle',NULL),(34,'taofik','oauujcle',NULL),(34,'adeleke','3a958c8b748b7c7d8015b88ad859b561',NULL),(34,'babalawo','3a958c8b748b7c7d8015b88ad859b561',NULL),(35,'demola','8ea781aec1a50180f3c4f8f672bd3363',1),(NULL,NULL,NULL,1),(36,'fifimax','3a958c8b748b7c7d8015b88ad859b561',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-15 14:28:35
