-- MySQL dump 10.15  Distrib 10.0.29-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.0.29-MariaDB-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `auctions`
--

DROP TABLE IF EXISTS `auctions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auctions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_prop` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sum` decimal(19,4) DEFAULT NULL,
  `comment` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auctions`
--

LOCK TABLES `auctions` WRITE;
/*!40000 ALTER TABLE `auctions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auctions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contract_events`
--

DROP TABLE IF EXISTS `contract_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contract_events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_cont` int(11) DEFAULT NULL,
  `sum` decimal(19,4) DEFAULT NULL,
  `paysystem` varchar(100) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contract_events`
--

LOCK TABLES `contract_events` WRITE;
/*!40000 ALTER TABLE `contract_events` DISABLE KEYS */;
/*!40000 ALTER TABLE `contract_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracts`
--

DROP TABLE IF EXISTS `contracts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_prop` int(11) DEFAULT NULL,
  `id_auction` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracts`
--

LOCK TABLES `contracts` WRITE;
/*!40000 ALTER TABLE `contracts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contracts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_accounts`
--

DROP TABLE IF EXISTS `payment_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_accounts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `paysystem` varchar(100) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_accounts`
--

LOCK TABLES `payment_accounts` WRITE;
/*!40000 ALTER TABLE `payment_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propositions`
--

DROP TABLE IF EXISTS `propositions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propositions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('seller','buyer') DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `currency_from` varchar(32) DEFAULT NULL,
  `course` decimal(19,4) DEFAULT NULL,
  `sum` decimal(19,4) DEFAULT NULL,
  `description` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `currency_to` varchar(32) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propositions`
--

LOCK TABLES `propositions` WRITE;
/*!40000 ALTER TABLE `propositions` DISABLE KEYS */;
INSERT INTO `propositions` VALUES (1,'seller',3,'USD',26.9500,100.0000,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','2017-04-04 18:38:35','UAH'),(2,'buyer',4,'EUR',28.8500,200.0000,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.лосуточно, без перерывов и выходных!!!','2017-04-04 18:38:40','UAH'),(3,'seller',4,'GBP',26.4500,500.0000,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','2017-04-04 18:38:44','UAH');
/*!40000 ALTER TABLE `propositions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statuses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_contract` int(11) DEFAULT NULL,
  `date_from_prop` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_from_auction` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_to_prop` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_to_auction` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statuses`
--

LOCK TABLES `statuses` WRITE;
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sums`
--

DROP TABLE IF EXISTS `sums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sums` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_contract` int(11) DEFAULT NULL,
  `sum_from` decimal(19,4) DEFAULT NULL,
  `sum_to` decimal(19,4) DEFAULT NULL,
  `sum_interest` decimal(19,4) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sums`
--

LOCK TABLES `sums` WRITE;
/*!40000 ALTER TABLE `sums` DISABLE KEYS */;
/*!40000 ALTER TABLE `sums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (3,'pupkin','vasya@pupkin.com','8cb2237d0679ca88db6464eac60da96345513964','вася ','пупкин'),(4,'admin','admin@admin.com','d033e22ae348aeb5660fc2140aec35850c4da997','admin','admin'),(5,'dudko','dudko@admin.com','6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2','Серега','Дудко'),(6,'ponizov','podmge@gmail.com','8cb2237d0679ca88db6464eac60da96345513964','dima','ponizov');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-06 13:01:32
