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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` VALUES (1,'test1','What Is Love?','Lady Dont Hurt Me','Ivars','Aliens','false','2018-02-12 14:36:50'),(2,'test1','I Get By With A Little Help From','My Friends','Ivars','Love','false','2018-02-12 14:36:57'),(3,'test1','Never Gonna Give You Up','Never Gonna Let You Down','Ivars','Never Gonna Let You Down','true','2018-02-12 14:37:06'),(4,'test1','Born To Be','Wild','Ivars','Free','false','2018-02-12 14:37:10'),(5,'test2','Pi','3.14','Toms','3.14','true','2018-02-12 14:37:28'),(6,'test2','2 + 2 * 2','6','Toms','666','false','2018-02-12 14:37:31'),(7,'test2','2 + 2','4','Toms','4','true','2018-02-12 14:37:32'),(8,'test2','8023 / 113','71','Toms','71','true','2018-02-12 14:37:35'),(9,'test3','A Gig Is','A Gig Is A Gig Is A Gig','Ance','A Gig Is A Gig Is A Gig','true','2018-02-12 14:37:55'),(10,'test3','Go Ahead','Make My Day','Ance','Make My Bed','false','2018-02-12 14:37:58'),(11,'test3','The First Rule Of Fight Club','You Do Not Talk About Fight Club','Ance','You Do Not Talk About Fight Club','true','2018-02-12 14:38:04'),(12,'test3','I Love The Smell Of Napalm','In The Morning','Ance','Before A Shower','false','2018-02-12 14:38:08'),(13,'test4','Capital of Latvia','Riga','Jose','Riga','true','2018-02-12 14:38:28'),(14,'test4','Capital of Russia','Moscow','Jose','Moscow','true','2018-02-12 14:38:51'),(15,'test4','Capital of Serbia','Bellgrade','Jose','Bellgrade','true','2018-02-12 14:38:56'),(16,'test4','Capital of Japan','Tokyo','Jose','Tokyo','true','2018-02-12 14:39:02'),(17,'test4','Capital of France','Paris','Jose','Paris','true','2018-02-12 14:39:07'),(18,'test4','Capital of Latvia','Riga','stinky','Riga','true','2018-02-12 15:45:05'),(19,'test4','Capital of Russia','Moscow','stinky','KGB','false','2018-02-12 15:45:08'),(20,'test4','Capital of Serbia','Bellgrade','stinky','Sticks And Stones','false','2018-02-12 15:45:10'),(21,'test4','Capital of Japan','Tokyo','stinky','Beijing','false','2018-02-12 15:45:12'),(22,'test4','Capital of France','Paris','stinky','Marseille','false','2018-02-12 15:45:15'),(23,'test1','What Is Love?','Lady Dont Hurt Me','Pinky','Aliens','false','2018-02-12 15:45:29'),(24,'test1','I Get By With A Little Help From','My Friends','Pinky','Love','false','2018-02-12 15:45:30'),(25,'test1','Never Gonna Give You Up','Never Gonna Let You Down','Pinky','My Pizza','false','2018-02-12 15:45:31'),(26,'test1','Born To Be','Wild','Pinky','Loving You','false','2018-02-12 15:45:32'),(27,'test3','A Gig Is','A Gig Is A Gig Is A Gig','John Wayne','Is Pretty Sweet','false','2018-02-12 16:34:21'),(28,'test3','Go Ahead','Make My Day','John Wayne','Make My Day','true','2018-02-12 16:34:33'),(29,'test3','The First Rule Of Fight Club','You Do Not Talk About Fight Club','John Wayne','There Are No Rules','false','2018-02-12 16:34:44'),(30,'test3','I Love The Smell Of Napalm','In The Morning','John Wayne','Before A Shower','false','2018-02-12 16:34:48');
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-12 17:06:53
