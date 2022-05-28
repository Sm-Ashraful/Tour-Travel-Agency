-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: travel
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `message` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Tushar','mtushar53@gmail.com','01770353601','Test Message','This is a test message from web.'),(2,'','','','',''),(3,'Tushar','mtushar162011@bscse.uiu.ac.bd','01521324263','Test','Test message'),(4,'Monir','ahatasham011@gmail.com','01883','test','test'),(5,'test','ahatasham011@gmail.com','32324','aadfafs','afdasdfa'),(6,'test','ahatasham@gmail.com','33434','afsdadsfa','fascasdf'),(7,'Tushar','mtushar53@gmail.com','01770353601','test','test cccc'),(8,'Tushar','mtushar53@gmail.com','01521324263','Email Testing','This is an email testing message.'),(9,'Tushar','mtushar53@gmail.com','01521324263','Email Testing','This is an email testing message.'),(10,'Tushar','mtushar53@gmail.com','01521324263','Email Testing','This is an email testing message.'),(11,'steerfa','mtushar53@gmail.com','3335','fasdfas','adasfdasd'),(12,'asadfsas','mtushar53@gmail.com','323','23rdfsdafas','fasfafsd'),(13,'asdfawe','malsdfja@glafjla.com','323','2353','asdarf'),(14,'vvvv','mtushar53@gmail.com','43344','3fdsaas','afdsadsfas'),(15,'ccccc','mtushar53@gmail.com','43344','3fdsaas','afdsadsfas'),(16,'test','mtushar53@gmail.com','33333','fdadsfas','asdfasdfasd'),(17,'dsasdasdfa','mtushar53@gmail.com','323r','2esdsa','fasdfasf');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `destination` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `no_of_member` int DEFAULT NULL,
  `arrival_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `leaving_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES ('cus_LMxiTfPRv395Oi','kkjjh','fghfhty','ewqheehfeil@gmail.com',NULL,'Paris',2,'2022-03-24 00:00:00','2022-03-30 00:00:00'),('cus_LMxsAtuzAz20Gt','vxcfsdg','srtsyh','srasdfaer@gmail.com',NULL,'Egypt',1,'',''),('cus_LNfad3QERtzIC9','rfaf','aFsdarf','eraaer@gmail.com',NULL,'Paris',2,'2022-03-25','2022-03-25'),('cus_LNJDfBFrOACv4e','Tushar','Ali','mtshoar@gmail.com',NULL,'Tokyo',2,'2022-03-25','2022-03-29'),('cus_LNJP0l1cflsUnJ','ldjfaljfdler','dasfasdfgasd','adfareare@gmail.com',NULL,'Sydney',1,'2022-03-26','2022-03-31');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transactions` (
  `id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `amount` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `currency` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES ('ch_3KgDmlF6eHEt5krV02ARK694','cus_LMxiTfPRv395Oi','undefined','500','usd','succeeded',NULL),('ch_3KgDwOF6eHEt5krV1ELrpfnh','cus_LMxsAtuzAz20Gt','undefined','200','usd','succeeded',NULL),('ch_3KguFWF6eHEt5krV1vklYYq1','cus_LNfad3QERtzIC9','undefined','1000','usd','succeeded',NULL),('ch_3KgYbMF6eHEt5krV1A7jjZ5O','cus_LNJDfBFrOACv4e','undefined','300','usd','succeeded',NULL),('ch_3KgYmiF6eHEt5krV04TGZZE5','cus_LNJP0l1cflsUnJ','undefined','1000','usd','succeeded',NULL);
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-18 15:34:48
