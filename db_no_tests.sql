-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: printful_test
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `fake_answers1`
--

DROP TABLE IF EXISTS `fake_answers1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fake_answers1` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `question1` varchar(50) NOT NULL,
  `question2` varchar(50) NOT NULL,
  `question3` varchar(50) NOT NULL,
  `question4` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fake_answers1`
--

LOCK TABLES `fake_answers1` WRITE;
/*!40000 ALTER TABLE `fake_answers1` DISABLE KEYS */;
INSERT INTO `fake_answers1` VALUES (1,'Its Magic','Love','My Pizza','Or Not To Be Born'),(2,'What Is Love','Parents','Never Gonna Give You Up','A Bee'),(3,'Hurty Dont Babe Me','Wallet','Never Gonna Drive Your Truck','Loving You'),(4,'Aliens','Brother In Law','Even If You Eat My Duck','Free');
/*!40000 ALTER TABLE `fake_answers1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fake_answers2`
--

DROP TABLE IF EXISTS `fake_answers2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fake_answers2` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `question1` varchar(50) NOT NULL,
  `question2` varchar(50) NOT NULL,
  `question3` varchar(50) NOT NULL,
  `question4` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fake_answers2`
--

LOCK TABLES `fake_answers2` WRITE;
/*!40000 ALTER TABLE `fake_answers2` DISABLE KEYS */;
INSERT INTO `fake_answers2` VALUES (1,'3.15','4','5','81'),(2,'Is Delicious','8','3','91'),(3,'1.14','2','2','61'),(4,'1.41','666','1','3');
/*!40000 ALTER TABLE `fake_answers2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fake_answers3`
--

DROP TABLE IF EXISTS `fake_answers3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fake_answers3` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `question1` varchar(50) NOT NULL,
  `question2` varchar(50) NOT NULL,
  `question3` varchar(50) NOT NULL,
  `question4` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fake_answers3`
--

LOCK TABLES `fake_answers3` WRITE;
/*!40000 ALTER TABLE `fake_answers3` DISABLE KEYS */;
INSERT INTO `fake_answers3` VALUES (1,'Is Pretty Sweet','Eat Sweets All Day','Be Nice To Everybody','Before A Shower'),(2,'Is A Concert','Make My Bed','You Talk About Fight Club','Smells Like Home'),(3,'Giggity','I Am Dead','No Smoking','Its Refreshing'),(4,'Of Destiny','And Turn Right There','There Are No Rules','Lets Meet Marlon Brando');
/*!40000 ALTER TABLE `fake_answers3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fake_answers4`
--

DROP TABLE IF EXISTS `fake_answers4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fake_answers4` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `question1` varchar(50) NOT NULL,
  `question2` varchar(50) NOT NULL,
  `question3` varchar(50) NOT NULL,
  `question4` varchar(50) NOT NULL,
  `question5` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fake_answers4`
--

LOCK TABLES `fake_answers4` WRITE;
/*!40000 ALTER TABLE `fake_answers4` DISABLE KEYS */;
INSERT INTO `fake_answers4` VALUES (1,'Figa','Putin','Bratislava','Ninjatown','Art'),(2,'Tallin','KGB','Ljubljana','Kyoto','Seville'),(3,'Vilnius','Vodka','Zagreb','Osaka','Marseille'),(4,'Sigulda','St Petersburg','Rome','Sushi','Toulouse'),(5,'Latvi','Nasa','Sticks And Stones','Beijing','Laris');
/*!40000 ALTER TABLE `fake_answers4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `results` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `test_name` char(5) NOT NULL,
  `test_question` varchar(50) NOT NULL,
  `test_answer` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_answer` varchar(100) NOT NULL,
  `is_correct` enum('true','false') NOT NULL,
  `dt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test1`
--

DROP TABLE IF EXISTS `test1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test1` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test1`
--

LOCK TABLES `test1` WRITE;
/*!40000 ALTER TABLE `test1` DISABLE KEYS */;
INSERT INTO `test1` VALUES (1,'What Is Love?','Lady Dont Hurt Me'),(2,'I Get By With A Little Help From','My Friends'),(3,'Never Gonna Give You Up','Never Gonna Let You Down'),(4,'Born To Be','Wild');
/*!40000 ALTER TABLE `test1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test2`
--

DROP TABLE IF EXISTS `test2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test2` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) NOT NULL,
  `answer` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test2`
--

LOCK TABLES `test2` WRITE;
/*!40000 ALTER TABLE `test2` DISABLE KEYS */;
INSERT INTO `test2` VALUES (1,'Pi','3.14'),(2,'2 + 2 * 2','6'),(3,'2 + 2','4'),(4,'8023 / 113','71');
/*!40000 ALTER TABLE `test2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test3`
--

DROP TABLE IF EXISTS `test3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test3` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test3`
--

LOCK TABLES `test3` WRITE;
/*!40000 ALTER TABLE `test3` DISABLE KEYS */;
INSERT INTO `test3` VALUES (1,'A Gig Is','A Gig Is A Gig Is A Gig'),(2,'Go Ahead','Make My Day'),(3,'The First Rule Of Fight Club','You Do Not Talk About Fight Club'),(4,'I Love The Smell Of Napalm','In The Morning');
/*!40000 ALTER TABLE `test3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test4`
--

DROP TABLE IF EXISTS `test4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test4` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test4`
--

LOCK TABLES `test4` WRITE;
/*!40000 ALTER TABLE `test4` DISABLE KEYS */;
INSERT INTO `test4` VALUES (1,'Capital of Latvia','Riga'),(2,'Capital of Russia','Moscow'),(3,'Capital of Serbia','Bellgrade'),(4,'Capital of Japan','Tokyo'),(5,'Capital of France','Paris');
/*!40000 ALTER TABLE `test4` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-12 14:35:26
