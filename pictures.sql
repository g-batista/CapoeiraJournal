-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: tarot
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture_id` int(2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `approved` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (2,2,1,'adsf','title','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n','2020-04-30 19:54:18',1),(3,12,2,'Belita','Matix ','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n','2020-04-30 19:54:36',1),(4,21,3,'Lui','The Rabt of Yours','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n','2020-04-30 19:54:43',1),(5,8,4,'Hito','Titanic','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n','2020-04-30 19:54:52',1),(6,1,5,'aliens_abduction','Star Track IX','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n','2020-04-30 21:19:00',1),(14,2,9,'Bender','Novo','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2020-05-02 18:22:51',1),(15,3,10,'Gilson Batista','moooovie','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2020-05-02 18:22:58',1),(16,16,17,'billy','NetFolks','ppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp','2020-05-02 22:36:08',1),(17,22,18,'CoolJeans','Star Wars','It takes place in a galaxy far far away.','2020-05-03 16:28:54',1),(18,22,18,'CoolJeans','Star Wars','It takes place in a galaxy far far away.','2020-05-03 21:45:50',1),(19,13,18,'qwwwe','any','asdadas','2020-05-03 21:20:59',1),(20,2,19,'Lui','mfician','aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa','2020-05-03 21:17:15',1),(21,8,20,'T','NEtFlix','sdgadgadsfgadsascxaascasc','2020-05-03 21:43:01',1),(22,20,21,'name','ZeroZeroZero','erfwerffcsadfvsdaf','2020-05-03 22:01:27',1);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pictures`
--

LOCK TABLES `pictures` WRITE;
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
INSERT INTO `pictures` VALUES (1,'0.jpg','The Fool'),(2,'1.jpg','The Magician'),(3,'2.jpg','The High Priestess'),(4,'3.jpg','The Empress'),(5,'4.jpg',' The Emperor'),(6,'5.jpg','The Hierophant'),(7,'6.jpg','The Lovers'),(8,'7.jpg','The Chariot'),(9,'8.jpg',' The Strength'),(10,'9.jpg','The Hermit'),(11,'10.jpg','Wheel of Fortune'),(12,'11.jpg','Justice'),(13,'12.jpg','The Hanged Man'),(14,'13.jpg','Death'),(15,'14.jpg','Temperance'),(16,'15.jpg','The Devil'),(17,'16.jpg','The Tower'),(18,'17.jpg','The Star'),(19,'18.jpg','The Moon'),(20,'19.jpg',' The Sun'),(21,'20.jpg','Judgment'),(22,'21.jpg','The World');
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarot_user`
--

DROP TABLE IF EXISTS `tarot_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarot_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(40) NOT NULL,
  `username` varchar(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarot_user`
--

LOCK TABLES `tarot_user` WRITE;
/*!40000 ALTER TABLE `tarot_user` DISABLE KEYS */;
INSERT INTO `tarot_user` VALUES (1,'356a192b7913b04c54574d18c28d46e6395428ab','new','new','new'),(2,'356a192b7913b04c54574d18c28d46e6395428ab','G','Gilson','Gilsomn'),(3,'356a192b7913b04c54574d18c28d46e6395428ab','student','student','Batista'),(4,'356a192b7913b04c54574d18c28d46e6395428ab','Gilson','Gislon','BAtista'),(5,'22ea1c649c82946aa6e479e1ffd321e4a318b1b0','q','q','q'),(6,'356a192b7913b04c54574d18c28d46e6395428ab','qqq','Gislon','BAtista'),(7,'11f6ad8ec52a2984abaafd7c3b516503785c2072','x','x','x'),(8,'7110eda4d09e062aa5e4a390b0a572ac0d2c0220','Sarah','Sarah','Batista'),(9,'356a192b7913b04c54574d18c28d46e6395428ab','a','a','a'),(10,'aff024fe4ab0fece4091de044c58c9ae4233383a','w','w','w'),(11,'356a192b7913b04c54574d18c28d46e6395428ab','b','b','b'),(12,'da4b9237bacccdf19c0760cab7aec4a8359010b0','new1','abc','abc'),(13,'356a192b7913b04c54574d18c28d46e6395428ab','abc','abc','asd'),(14,'356a192b7913b04c54574d18c28d46e6395428ab','wee','asdasda','afsfasf'),(15,'356a192b7913b04c54574d18c28d46e6395428ab','student12','qwwwwwww','asfasdfdf'),(16,'356a192b7913b04c54574d18c28d46e6395428ab','new23','weweweee','dfsdfs'),(17,'356a192b7913b04c54574d18c28d46e6395428ab','bily','billy','us'),(18,'8cb2237d0679ca88db6464eac60da96345513964','hello','frog','frog'),(19,'356a192b7913b04c54574d18c28d46e6395428ab','Lui','q','q'),(20,'356a192b7913b04c54574d18c28d46e6395428ab','T','Mike','new'),(21,'356a192b7913b04c54574d18c28d46e6395428ab','name','name','name');
/*!40000 ALTER TABLE `tarot_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ux`
--

DROP TABLE IF EXISTS `ux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `ex` int(2) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ux`
--

LOCK TABLES `ux` WRITE;
/*!40000 ALTER TABLE `ux` DISABLE KEYS */;
INSERT INTO `ux` VALUES (1,'gbatista@madisoncollege.edu',1,'sdfsdfs dfgdfgd '),(2,'gbatista@madisoncollege.edu',1,'Mussum Ipsum, cacilds vidis litro abertis. NÃ£o sou faixa preta cumpadi, sou preto inteiris, inteiris. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Aenean aliquam molestie leo, vitae iaculis nisl.'),(3,'gbatista@madisoncollege.edu',5,'goood'),(4,'gbatista@madisoncollege.edu',5,'goood'),(5,'gbatista@madisoncollege.edu',4,'sasa'),(13,'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq',4,'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),(14,'html@criative.com.com',5,'This web site change my live thanks.\r\n'),(15,'gbatista@madisoncollege.edu',5,'Awesome!'),(16,'4545 ABC st',5,'adsasdasdgsdawergdsfvsdfvav'),(17,'html@criative.com.com',4,'dasfrwefgqegdfcasdca'),(18,'fdsffdsfsdf@SDF',5,'vgdfsagadsfgadsgvfadscfvgadfa');
/*!40000 ALTER TABLE `ux` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-03 17:13:39
