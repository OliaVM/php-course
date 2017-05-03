-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: publications
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Table structure for table `classics`
--

DROP TABLE IF EXISTS `classics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classics` (
  `author` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `category` varchar(16) DEFAULT NULL,
  `year` smallint(6) DEFAULT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classics`
--

LOCK TABLES `classics` WRITE;
/*!40000 ALTER TABLE `classics` DISABLE KEYS */;
INSERT INTO `classics` VALUES ('Mark Twain','The Adventures of Tom Sawyer','Fiction',1876,1),('Jane Austen','Pride and Prejudice','Fiction',1811,2),('Charles Darwin','The Origin of Species','Non-Fiction',1856,3),('Charles Dickens','The Old Curiosity Shop','Fiction',1841,4),('William Shakespeare','Romeo and Juliet','Play',1594,5),('Ð°Ð²Ñ‚Ð¾Ñ€','Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ','Ð¶Ð°Ð½Ñ€',1893,6),('Ð°Ð²Ñ‚Ð¾Ñ€','Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ','Ð¶Ð°Ð½Ñ€',1893,7),('Ð°Ð²Ñ‚Ð¾Ñ€','Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ','Ð¶Ð°Ð½Ñ€',1893,8),('Ð°Ð²Ñ‚Ð¾Ñ€','Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ','Ð¶Ð°Ð½Ñ€',1893,9),('Ð°Ð²Ñ‚Ð¾Ñ€','Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ','Ð¶Ð°Ð½Ñ€',1893,10),('Ð°Ð²Ñ‚Ð¾Ñ€','Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ','Ð¶Ð°Ð½Ñ€',1893,11),('Ð°Ð²Ñ‚Ð¾Ñ€','Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ','Ð¶Ð°Ð½Ñ€',1893,12),('Ð°Ð²Ñ‚Ð¾Ñ€','Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ','Ð¶Ð°Ð½Ñ€',1893,13),('Ð°Ð²Ñ‚Ð¾Ñ€','Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ','Ð¶Ð°Ð½Ñ€',1893,14),(NULL,NULL,NULL,NULL,15),(NULL,NULL,NULL,NULL,16),(NULL,NULL,NULL,NULL,17),(NULL,NULL,NULL,1220,18),('author1','title1','category1',0,19),('author1','title1','category1',0,20),('author1','title1','category1',0,21),('author1','title1','category1',0,22),('author1','title1','category1',0,23),('author1','title1','category1',NULL,24),('author1','title1','category1',8907,25),('author1','title1','category1',6570,26),('author1','title1','category1',1347,27),('author1','title1','category1',NULL,28),(NULL,NULL,NULL,NULL,29),('Ð°Ð²Ñ‚Ð¾Ñ€2','Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ2','Ð¶Ð°Ð½Ñ€3',2016,30);
/*!40000 ALTER TABLE `classics` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-01 18:47:10
