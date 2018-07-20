-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: bane_db
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `bane_category`
--

DROP TABLE IF EXISTS `bane_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bane_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `subcategory` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bane_category`
--

LOCK TABLES `bane_category` WRITE;
/*!40000 ALTER TABLE `bane_category` DISABLE KEYS */;
INSERT INTO `bane_category` VALUES (1,'Kitchens','{0:\"Modern Kitchens\",1:\"Rustic Kitchens\",2:\"Classic Kitchens\"}'),(2,'LG_Solid_Surface','{0:\"VIP\",0:\"Dental Office Ortis Novi Sad\",0:\"Colors HiMacs\",0:\"MTS Telekom Serbia\",0:\"Hotel Oltrant\",0:\"Solid Surface Wash Basin on Tape\",0:\"Splendid Kerrock\",0:\"Sink Kerrock\",0:\"Colors Kerrock\",0:\"Bekament\",0:\"Telenor\",0:\"Caribic Pizza Place Novi Sad\",0:\"Salas\"}'),(3,'Lumino_Solid_Surface','{0:\"Airport Belgrade\",1:\"Bulevar Caffe\", 2:\"Optical Shop\",3:\"Pult Hotel Pullman\"}'),(4,'Doors',NULL),(5,'AquaHome_Equipment_for_Bathrooms','{0:\"Ceramic floor\",0:\"Kolpa-San\",0:\"AquaStil\",0:\"Bathroom Equipment\",0:\"HUPPE\",0:\"Haberdashery\",0:\"Fittings\"}'),(6,'Interiors','{0:\"Boss\",0:\"Caffee Bar\",0:\"Continental\",0:\"Caffee Bar\",0:\"Child room\",0:\"Living room\",0:\"Hospital in Novi Sad\",0:\"Furniture\",0:\"Palmon Bay Montenegro\",0:\"Dental Office Ortis -  Novi Sad\",0:\"Closets\",0:\"Bedroom\",0:\"Tables\",0:\"Patent Misicevo\",0:\"Salasvo\"}'),(7,'Bathroom_Furniture','{0:\"Queen\",0:\"Country 80\",0:\"EGO\",0:\"Aris\",0:\"Milano 120\",0:\"Image 90\",0:\"Lorena 90\",0:\"Lorena New 90\",0:\"Nefertiti 90\",0:\"Nefertiti New 90\",0:\"Anna 120\",0:\"Ana New 120\",0:\"Gracija Extra 140\",0:\"Samba 120\",0:\"Twist 100\",0:\"Tango 90\",0:\"Opera 80\",0:\"Lucia New 80\",0:\"Aria 60\",0:\"Dea 60 V\",0:\"Dea 60\",0:\"Viktoria V60\",0:\"Viktoria 60\",0:\"Lorena New 60\",0:\"Venecia 60\",0:\"Vip 60\",0:\"Nika 72/60\",0:\"Linea 61\",0:\"Alfa New 55\",0:\"Vera 65\",0:\"Leon 60\",0:\"Mlena 55\",0:\"Mia 55-65-75\",0:\"Image 50\",0:\"Lea 45\",0:\"Lea 50\",0:\"Art 40x20\",0:\"Golf 80-80-90-100-120\",0:\"Golf New\",0:\"Mirror 60-65-75-80-90-100-120\",0:\"Aqua\",0:\"Mirror Classic 55-60-65-75-80-90-100-120\",0:\"Prestige/S\",0:\"Prestige 120/S\",0:\"New 60\",0:\"New 120\",0:\"Prestige 1600\",0:\"Prestige 1850\",0:\"Prestige 1000\",0:\"Prestige 800\",0:\"Prestige 900\",0:\"Short GE III\",0:\"Short GE IV\",0:\"Toilet seats\"}');
/*!40000 ALTER TABLE `bane_category` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-20 22:50:42
