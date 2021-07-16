git add-- MySQL dump 10.13  Distrib 8.0.18, for macos10.14 (x86_64)
--
-- Host: localhost    Database: cee_db
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_acc`
--

DROP TABLE IF EXISTS `admin_acc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_acc` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_user` varchar(1000) NOT NULL,
  `admin_pass` varchar(1000) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_acc`
--

LOCK TABLES `admin_acc` WRITE;
/*!40000 ALTER TABLE `admin_acc` DISABLE KEYS */;
INSERT INTO `admin_acc` VALUES (1,'admin@username','admin@password');
/*!40000 ALTER TABLE `admin_acc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `attendance` int(1) NOT NULL,
  `classes` int(11) DEFAULT '0',
  `feeClasses` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
INSERT INTO `attendance` VALUES (1,64,1,1,0,'2021-01-15 18:19:35','2021-01-25 09:31:06'),(6,68,0,0,0,'2021-01-15 20:07:23','2021-01-25 09:22:50'),(11,65,0,0,0,'2021-01-15 20:23:41','2021-01-25 13:54:06');
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_tbl`
--

DROP TABLE IF EXISTS `course_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_tbl` (
  `cou_id` int(11) NOT NULL AUTO_INCREMENT,
  `cou_name` varchar(1000) NOT NULL,
  `cou_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cou_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_tbl`
--

LOCK TABLES `course_tbl` WRITE;
/*!40000 ALTER TABLE `course_tbl` DISABLE KEYS */;
INSERT INTO `course_tbl` VALUES (67,'BATCH 1','2021-01-04 17:57:42'),(68,'GAMER COURSE','2021-01-23 17:25:40'),(69,'DABBER','2021-01-23 17:26:11');
/*!40000 ALTER TABLE `course_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam_answers`
--

DROP TABLE IF EXISTS `exam_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exam_answers` (
  `exans_id` int(11) NOT NULL AUTO_INCREMENT,
  `axmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `exans_answer` varchar(1000) NOT NULL,
  `exans_status` varchar(1000) NOT NULL DEFAULT 'new',
  `exans_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`exans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=338 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam_answers`
--

LOCK TABLES `exam_answers` WRITE;
/*!40000 ALTER TABLE `exam_answers` DISABLE KEYS */;
INSERT INTO `exam_answers` VALUES (295,4,12,25,'Diode, inverted, pointer','old','2019-12-07 02:52:14'),(296,4,12,16,'Data Block','old','2019-12-07 02:52:14'),(297,6,12,18,'Programmable Logic Controller','old','2019-12-05 12:59:47'),(298,6,12,9,'1850s','old','2019-12-05 12:59:47'),(299,6,12,24,'1976','old','2019-12-05 12:59:47'),(300,6,12,14,'Operating System','old','2019-12-05 12:59:47'),(301,6,12,19,'WAN (Wide Area Network)','old','2019-12-05 12:59:47'),(302,6,11,28,'fds','old','2021-01-13 13:14:04'),(303,6,11,29,'sd','old','2021-01-13 13:14:04'),(304,6,12,15,'David Filo & Jerry Yang','new','2019-12-05 12:59:47'),(305,6,12,17,'System file','new','2019-12-05 12:59:47'),(306,6,12,10,'Field','new','2019-12-05 12:59:47'),(307,6,12,9,'1880s','new','2019-12-05 12:59:47'),(308,6,12,21,'Temporary file','new','2019-12-05 12:59:47'),(309,4,11,28,'q1','new','2019-12-05 13:30:21'),(310,4,11,29,'dfg','new','2019-12-05 13:30:21'),(311,4,12,16,'Data Block','new','2019-12-07 02:52:14'),(312,4,12,20,'Plancks radiation','new','2019-12-07 02:52:14'),(313,4,12,10,'Report','new','2019-12-07 02:52:14'),(314,4,12,24,'1976','new','2019-12-07 02:52:14'),(315,4,12,9,'1930s','new','2019-12-07 02:52:14'),(316,8,12,18,'Programmable Lift Computer','new','2020-01-05 03:18:35'),(317,8,12,14,'Operating System','new','2020-01-05 03:18:35'),(318,8,12,20,'Einstein oscillation','new','2020-01-05 03:18:35'),(319,8,12,21,'Temporary file','new','2020-01-05 03:18:35'),(320,8,12,25,'Diode, inverted, pointer','new','2020-01-05 03:18:35'),(321,9,24,31,'2','new','2020-01-12 04:47:37'),(322,9,24,35,'8','new','2020-01-12 04:47:37'),(323,9,24,33,'9','new','2020-01-12 04:47:37'),(324,9,24,34,'8','new','2020-01-12 04:47:37'),(325,9,24,32,'1','new','2020-01-12 04:47:37'),(326,9,25,36,'4','new','2020-01-12 05:10:11'),(327,9,26,37,'4','new','2020-01-12 05:13:34'),(328,4,30,41,'3','new','2021-01-13 13:10:11'),(329,4,30,39,'1','new','2021-01-13 13:10:11'),(330,4,30,40,'3','new','2021-01-13 13:10:11'),(331,6,11,29,'asd','new','2021-01-13 13:14:04'),(332,6,11,30,'asd','new','2021-01-13 13:14:04'),(333,68,30,41,'1','new','2021-01-13 16:14:43'),(334,68,30,40,'4','new','2021-01-13 16:14:43'),(335,68,30,39,'1','new','2021-01-13 16:14:43'),(336,68,29,38,'test a','new','2021-01-18 19:13:53'),(337,68,31,42,'MLG 360','new','2021-01-23 18:05:48');
/*!40000 ALTER TABLE `exam_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam_attempt`
--

DROP TABLE IF EXISTS `exam_attempt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exam_attempt` (
  `examat_id` int(11) NOT NULL AUTO_INCREMENT,
  `exmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `examat_status` varchar(1000) NOT NULL DEFAULT 'used',
  PRIMARY KEY (`examat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam_attempt`
--

LOCK TABLES `exam_attempt` WRITE;
/*!40000 ALTER TABLE `exam_attempt` DISABLE KEYS */;
INSERT INTO `exam_attempt` VALUES (51,6,12,'used'),(52,4,11,'used'),(53,4,12,'used'),(54,8,12,'used'),(55,9,24,'used'),(56,9,25,'used'),(57,9,26,'used'),(58,4,30,'used'),(59,6,11,'used'),(60,68,30,'used'),(61,68,29,'used'),(62,68,31,'used');
/*!40000 ALTER TABLE `exam_attempt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam_question_tbl`
--

DROP TABLE IF EXISTS `exam_question_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exam_question_tbl` (
  `eqt_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) NOT NULL,
  `exam_question` varchar(1000) NOT NULL,
  `exam_ch1` varchar(1000) NOT NULL,
  `exam_ch2` varchar(1000) NOT NULL,
  `exam_ch3` varchar(1000) NOT NULL,
  `exam_ch4` varchar(1000) NOT NULL,
  `exam_answer` varchar(1000) NOT NULL,
  `exam_status` varchar(1000) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`eqt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam_question_tbl`
--

LOCK TABLES `exam_question_tbl` WRITE;
/*!40000 ALTER TABLE `exam_question_tbl` DISABLE KEYS */;
INSERT INTO `exam_question_tbl` VALUES (9,12,'In which decade was the American Institute of Electrical Engineers (AIEE) founded?','1850s','1880s','1930s','1950s','1880s','active'),(10,12,'What is part of a database that holds only one type of information?','Report','Field','Record','File','Field','active'),(14,12,'OS computer abbreviation usually means ?','Order of Significance','Open Software','Operating System','Optical Sensor','Operating System','active'),(15,12,'Who developed Yahoo?','Dennis Ritchie & Ken Thompson','David Filo & Jerry Yang','Vint Cerf & Robert Kahn','Steve Case & Jeff Bezos','David Filo & Jerry Yang','active'),(16,12,'DB computer abbreviation usually means ?','Database','Double Byte','Data Block','Driver Boot','Database','active'),(17,12,'.INI extension refers usually to what kind of file?','Image file','System file','Hypertext related file','Image Color Matching Profile file','System file','active'),(18,12,'What does the term PLC stand for?','Programmable Lift Computer','Program List Control','Programmable Logic Controller','Piezo Lamp Connector','Programmable Logic Controller','active'),(19,12,'What do we call a network whose elements may be separated by some distance? It usually involves two or more small networks and dedicated high-speed telephone lines.','URL (Universal Resource Locator)','LAN (Local Area Network)','WAN (Wide Area Network)','World Wide Web','WAN (Wide Area Network)','active'),(20,12,'After the first photons of light are produced, which process is responsible for amplification of the light?','Blackbody radiation','Stimulated emission','Plancks radiation','Einstein oscillation','Stimulated emission','active'),(21,12,'.TMP extension refers usually to what kind of file?','Compressed Archive file','Image file','Temporary file','Audio file','Temporary file','active'),(22,12,'What do we call a collection of two or more computers that are located within a limited distance of each other and that are connected to each other directly or indirectly?','Inernet','Interanet','Local Area Network','Wide Area Network','Local Area Network','active'),(24,12,'	 In what year was the \"@\" chosen for its use in e-mail addresses?','1976','1972','1980','1984','1972','active'),(25,12,'What are three types of lasers?','Gas, metal vapor, rock','Pointer, diode, CD','Diode, inverted, pointer','Gas, solid state, diode','Gas, solid state, diode','active'),(27,15,'asdasd','dsf','sd','yui','sdf','yui','active'),(28,11,'Question 1','q1','asd','fds','ytu','q1','active'),(29,11,'Question 2','asd','sd','q2','dfg','q2','active'),(30,11,'Question 3','sd','q3','asd','fgh','q3','active'),(31,24,'1+1','3','8','9','2','d','active'),(32,24,'2+2=?','1','2','3','4','d','active'),(33,24,'1+2=?','7','8','3','9','c','active'),(34,24,'4+4=?','8','9','7','6','a','active'),(35,24,'9+9=?','7','9','18','8','c','active'),(36,25,'2+2=?','4','67','8','8','a','active'),(37,26,'2+2=?','3','6','7','4','D','active'),(38,29,'This is a test q','test a','test b','test c','test d','test a','active'),(39,30,'Question 1','1','2','3','4','1','active'),(40,30,'Question 2','1','2','3','4','2','active'),(41,30,'Question 3','1','2','3','4','3','active'),(42,31,'How to reverse dabber a gamer?','GEM','STONKS','NOT STONKS','MLG 360','MLG 360','active');
/*!40000 ALTER TABLE `exam_question_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam_tbl`
--

DROP TABLE IF EXISTS `exam_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exam_tbl` (
  `ex_id` int(11) NOT NULL AUTO_INCREMENT,
  `cou_id` int(11) NOT NULL,
  `ex_title` varchar(1000) NOT NULL,
  `ex_time_limit` varchar(1000) NOT NULL,
  `ex_questlimit_display` int(11) NOT NULL,
  `ex_description` varchar(1000) NOT NULL,
  `ex_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ex_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam_tbl`
--

LOCK TABLES `exam_tbl` WRITE;
/*!40000 ALTER TABLE `exam_tbl` DISABLE KEYS */;
INSERT INTO `exam_tbl` VALUES (11,26,'Duerms','1',2,'qwe','2019-12-05 12:03:21'),(12,26,'Another Exam','1',5,'Mabilisang Exam','2019-12-04 15:19:18'),(13,26,'Exam Again','5',0,'again and again\r\n','2019-11-30 08:24:54'),(24,65,'math','10',5,'basic math','2020-01-12 05:04:45'),(25,65,'math 2','10',3,'basic math 2','2020-01-12 05:08:44'),(26,65,'math3','10',3,'basic math3','2020-01-12 05:12:11'),(27,67,'test exam','10',2,'test exam\r\n','2021-01-04 17:58:49'),(28,67,'test examexam','10',2,'s\r\n','2021-01-04 17:59:32'),(29,67,'test examsdfv','10',5,'test examhjcvbsdvbdfhjs\r\n','2021-01-06 21:02:22'),(30,68,'TEST JJ 1','10',4,'THIS IS A TEST FOR JJ ACCOUNT','2021-01-13 07:57:03'),(31,69,'DABBER QUIZ','10',1,'HOW TO DAB?','2021-01-23 18:09:56');
/*!40000 ALTER TABLE `exam_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examinee_tbl`
--

DROP TABLE IF EXISTS `examinee_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `examinee_tbl` (
  `exmne_id` int(11) NOT NULL AUTO_INCREMENT,
  `exmne_fullname` varchar(1000) NOT NULL,
  `exmne_course` varchar(1000) NOT NULL,
  `exmne_gender` varchar(1000) NOT NULL,
  `exmne_birthdate` varchar(1000) NOT NULL,
  `exmne_year_level` varchar(1000) NOT NULL,
  `exmne_email` varchar(1000) NOT NULL,
  `exmne_password` varchar(1000) NOT NULL,
  `exmne_status` varchar(1000) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`exmne_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examinee_tbl`
--

LOCK TABLES `examinee_tbl` WRITE;
/*!40000 ALTER TABLE `examinee_tbl` DISABLE KEYS */;
INSERT INTO `examinee_tbl` VALUES (4,'Rogz Nune','26','male','2019-11-15','third year','rogz.nunez2013@gmail.com','rogz','active'),(5,'Jane Rivera','25','female','2019-11-14','second year','jane@gmail.com','jane','active'),(6,'Glenn Duerme','26','female','2019-12-24','third year','glenn@gmail.com','glenn','active'),(7,'Maria Duerme','26','female','2018-11-25','second year','maria@gmail.com','maria','active'),(8,'Dave Limasac','65','female','2019-12-21','second year','dave@gmail.com','dave','active');
/*!40000 ALTER TABLE `examinee_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedbacks_tbl`
--

DROP TABLE IF EXISTS `feedbacks_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedbacks_tbl` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT,
  `exmne_id` int(11) NOT NULL,
  `fb_exmne_as` varchar(1000) NOT NULL,
  `fb_feedbacks` varchar(1000) NOT NULL,
  `fb_date` varchar(1000) NOT NULL,
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedbacks_tbl`
--

LOCK TABLES `feedbacks_tbl` WRITE;
/*!40000 ALTER TABLE `feedbacks_tbl` DISABLE KEYS */;
INSERT INTO `feedbacks_tbl` VALUES (4,6,'Glenn Duerme','Gwapa kay Miss Pam','December 05, 2019'),(5,6,'Anonymous','Lageh, idol na nako!','December 05, 2019'),(6,4,'Rogz Nunezsss','Yes','December 08, 2019'),(7,4,'','','December 08, 2019'),(8,4,'','','December 08, 2019'),(9,8,'Anonymous','dfsdf','January 05, 2020'),(10,9,'warren dalaoyan','haah','January 12, 2020'),(11,68,'jjj','This is the announcement as user','January 13, 2021'),(12,68,'Anonymous','This is the announcement as anonymous','January 13, 2021');
/*!40000 ALTER TABLE `feedbacks_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` tinyint(4) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `course` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (64,0,'Sabad','sabadmodi@gmail.com','$2y$10$3xRbv1GNuxmNmWg2AGymnOi04gF.3LMCvUVpz3bjD/dm8.oDmX2YC','2021-01-06 05:01:35',68),(65,0,'Sabad','sabadmodi@gmail.coma','$2y$10$vpkM38svL8TjPSTB2OSBce.WmH4WNdJqd1SU4T4LlQxXDoI6/z9Ka','2021-01-06 06:11:13',67),(66,1,'test','test@test.com','$2y$10$sZQQHJ9FFsHcLALcPMZcg.rhhyqd5gqEcs9jgtf36N3JT/FASmdRC','2021-01-06 06:14:28',66),(67,1,'testa','test@gmail.com','$2y$10$TWDRCcpMKpcyaNoSZDeEVOr3NXmC83KAskUIjGxvjyUqFy.YS2TGS','2021-01-06 19:22:23',67),(68,0,'jj','jj@jj.com','$2y$10$6EVAyIL6nXaqNk06oWKJnOM.8Q/iAlRltU.NFiL2TqSf8XHd5cOuy','2021-01-06 19:37:13',69),(69,1,'SABADMODI','thisissabad@gmail.com','$2y$10$lSHN4l6v/kb2FbQXUohZWukIPPcoLqe54RX76iOVAOwLLLV1blsb.','2021-01-13 07:49:46',NULL),(70,0,'s','sabadmodi@gmail.comaa','$2y$10$mHMGaMFegcNhh5qeFHoAqeSXhlVHRhG66RThMyH1wt4mjyFtadfY.','2021-02-11 21:29:58',NULL),(71,0,'sab','sabadmodi@gmail.comaaa','$2y$10$966V1K0Ucsqmd.HHWW2HQODctso8OzEu2oXlNwbcsBLOZ09niKz8q','2021-02-11 21:31:39',NULL),(72,0,'saba','sabadmodi@gmail.comaaaa','$2y$10$r/RuAvPJpXuDA80ukBv3WetJ4CTrACZlYKNMEs7eJuEOZ5qfZllhW','2021-02-11 21:34:01',NULL),(73,NULL,'sabaa','sabadmodi@gmail.comaaaaa','$2y$10$OSPN3usm1kCg0zrJ7xYRtOB1RZ6dtbUaUiYh4GjahapN6EWeeEtAy','2021-02-11 21:35:50',NULL),(74,0,'sabaaa','kool@kool.comaa','$2y$10$T/9vlHgu8zsr1VY5K5MnU.spvfvWTwcJDA/zsGlUi2Los6Z6.HjwO','2021-02-11 21:38:32',NULL),(75,1,'k','kool@kool.comaaa','$2y$10$/l6SNMIT6HgJn9ynqSjPUeqPh/dvdkaBlSZposhZFORWZp5uMffES','2021-02-11 21:39:11',NULL),(76,0,'ka','kool@kosol.comaaa','$2y$10$n83PD6HluLB51lAvDRdh2u1SDJovVFR4Art5ptNuUfY9ZGz9hfGT.','2021-02-11 21:39:31',NULL);
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

-- Dump completed on 2021-07-16 16:51:55
