-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.19.04.2-log

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
-- Table structure for table `producten`
--

DROP TABLE IF EXISTS `producten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producten` (
  `id` int(11) NOT NULL,
  `naam` text NOT NULL,
  `prijs` decimal(5,2) NOT NULL,
  `type` text NOT NULL,
  `smaak` text NOT NULL,
  `soort` text NOT NULL,
  `gewicht` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producten`
--

LOCK TABLES `producten` WRITE;
/*!40000 ALTER TABLE `producten` DISABLE KEYS */;
INSERT INTO `producten` VALUES (1,'Chocoladehagel puur',2.17,'Strooibaar','Pure chocolade','Hagelslag',380),(2,'Chocoladehagel melk',2.17,'Strooibaar','Melk chocolade','Hagelslag',380),(3,'Witte vlokken',1.78,'Strooibaar','Witte chocolade','Vlokken',300),(4,'Vlokken puur',1.77,'Strooibaar','Pure chocolade','Vlokken',300),(5,'Vlokken melk',1.77,'Strooibaar','Melk chocolade','Vlokken',300),(6,'Vlokken vlok feest',1.79,'Strooibaar','Mix','Vlokken',300),(7,'Royaal vlokken',1.85,'Strooibaar','Extra pure chocolade','Vlokken',300),(8,'Royaal hagel',2.09,'Strooibaar','Extra pure chocolade','Hagelslag',380),(9,'Specials koffie - puur',1.97,'Strooibaar','Mix','Hagelslag',220),(10,'Specials extra puur',1.97,'Strooibaar','Extra pure chocolade','Hagelslag',240),(11,'Specials intens puur',1.77,'Strooibaar','Intens pure chocolade','Hagelslag',220),(12,'Chunks extra puur',2.19,'Strooibaar','Extra pure chocolade','Chunks',200),(13,'Chunks melk',2.19,'Strooibaar','Melk chocolade','Chunks',200),(14,'Vruchtenhagel bosvruchten',1.38,'Strooibaar','Bosvruchten','Hagelslag',300),(15,'Vruchtenhagel',1.38,'Strooibaar','Vruchten','Hagelslag',400);
/*!40000 ALTER TABLE `producten` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-12  9:46:29
