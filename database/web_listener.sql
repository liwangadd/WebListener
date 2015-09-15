-- MySQL dump 10.13  Distrib 5.5.19, for Win32 (x86)
--
-- Host: localhost    Database: web_listener
-- ------------------------------------------------------
-- Server version	5.5.19

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
-- Table structure for table `question`
--

USE web_listener;

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `que_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `que_topic` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '选择题题目',
  `ans_a` varchar(100) NOT NULL COMMENT '答案A',
  `ans_b` varchar(100) NOT NULL COMMENT '答案B',
  `ans_c` varchar(100) NOT NULL COMMENT '答案C',
  `ans_d` varchar(100) NOT NULL COMMENT '答案D',
  `stu_a` int(11) NOT NULL DEFAULT '0' COMMENT '回答A的人数',
  `stu_b` int(11) NOT NULL DEFAULT '0' COMMENT '回答B的人数',
  `stu_c` int(11) NOT NULL DEFAULT '0' COMMENT '回答C的人数',
  `stu_d` int(11) NOT NULL DEFAULT '0' COMMENT '回答D的人数',
  `ans_right` varchar(20) NOT NULL COMMENT '正确答案序号',
  `path` varchar(100) NOT NULL COMMENT '录音存放路径',
  `right_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回答正确数',
  `wrong_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回答错误数',
  `test_id` int(11) NOT NULL COMMENT '指向试卷id',
  PRIMARY KEY (`que_id`) COMMENT '主键'
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8 COMMENT='选择题表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (6,'1-3-1','O','X',' ',' ',2,0,0,0,'A','1-3.mp3',4,1,1),(7,'1-3-2','O','X',' ',' ',0,1,0,0,'B','1-3.mp3',1,0,1),(8,'1-3-3','O','X',' ',' ',0,1,0,0,'A','1-3.mp3',0,1,1),(9,'2-3-1','O','X',' ',' ',0,1,0,0,'B','2-3.mp3',1,0,1),(10,'2-3-2','O','X',' ',' ',0,1,0,0,'A','2-3.mp3',0,1,1),(11,'2-3-3','O','X',' ',' ',0,0,0,0,'A','2-3.mp3',0,0,1),(12,'3-2-1','O','X',' ',' ',0,0,0,0,'B','3-2.mp3',0,0,1),(13,'3-2-2','O','X',' ',' ',0,0,0,0,'A','3-2.mp3',0,0,1),(14,'3-2-3','O','X',' ',' ',0,0,0,0,'A','3-2.mp3',0,0,1),(15,'3-2-4','O','X',' ',' ',0,0,0,0,'B','3-2.mp3',0,0,1),(16,'3-2-5','O','X',' ',' ',0,0,0,0,'B','3-2.mp3',0,0,1),(17,'4-3-1','O','X',' ',' ',0,0,0,0,'B','4-3.mp3',0,0,1),(18,'4-3-2','O','X',' ',' ',0,0,0,0,'A','4-3.mp3',0,0,1),(19,'4-3-3','O','X',' ',' ',0,0,0,0,'B','4-3.mp3',0,0,1),(20,'4-4-1','18:30','7:30',' ',' ',0,0,0,0,'B','4-4-（1-4）.mp3',0,0,1),(21,'4-4-2','午前8:20','午後8:20',' ',' ',0,0,0,0,'A','4-4-（1-4）.mp3',0,0,1),(22,'4-4-3','9:30~6:30','9:00~6:00',' ',' ',0,0,0,0,'B','4-4-（1-4）.mp3',0,0,1),(23,'4-4-4','12:15~1:15','12:50~1:50',' ',' ',0,0,0,0,'A','4-4-（1-4）.mp3',0,0,1),(24,'4-4-5','349-7895',' 349-7865',' ',' ',0,0,0,0,'B','4-4-（5-8）.mp3',0,0,1),(25,'4-4-6','075-831-6697','075-138-6697',' ',' ',0,0,0,0,'A','4-4-（5-8）.mp3',0,0,1),(26,'4-4-7',' 3,850','3,650',' ',' ',0,0,0,0,'B','4-4-（5-8）.mp3',0,0,1),(27,'4-4-8','208,000','128,000',' ',' ',0,0,0,0,'A','4-4-（5-8）.mp3',0,0,1),(28,'5-3-1','O','X',' ',' ',0,0,0,0,'A','5-3.mp3',0,0,1),(29,'5-3-2','O','X',' ',' ',0,0,0,0,'B','5-3.mp3',0,0,1),(30,'5-3-3','O','X',' ',' ',0,0,0,0,'A','5-3.mp3',0,0,1),(31,'6-2-1','O','X',' ',' ',0,0,0,0,'B','6-2.mp3',0,0,1),(32,'6-2-2','O','X',' ',' ',0,0,0,0,'A','6-2.mp3',0,0,1),(33,'6-2-3','O','X',' ',' ',0,0,0,0,'A','6-2.mp3',0,0,1),(34,'6-2-4','O','X',' ',' ',0,0,0,0,'A','6-2.mp3',0,0,1),(35,'6-2-5','O','X',' ',' ',0,0,0,0,'A','6-2.mp3',0,0,1),(36,'7-3-1','O','X',' ',' ',0,0,0,0,'B','7-3.mp3',0,0,1),(37,'7-3-2','O','X',' ',' ',0,0,0,0,'A','7-3.mp3',0,0,1),(38,'7-3-3','O','X',' ',' ',0,0,0,0,'B','7-3.mp3',0,0,1),(39,'8-3-1','O','X',' ',' ',0,0,0,0,'A','8-3.mp3',0,0,1),(40,'8-3-2','O','X',' ',' ',0,0,0,0,'B','8-3.mp3',0,0,1),(41,'8-3-3','O','X',' ',' ',0,0,0,0,'B','8-3.mp3',0,0,1),(42,'9-2-1','O','X',' ',' ',0,0,0,0,'B','9-2.mp3',0,0,1),(43,'9-2-2','O','X',' ',' ',0,0,0,0,'B','9-2.mp3',0,0,1),(44,'9-2-3','O','X',' ',' ',0,0,0,0,'A','9-2.mp3',0,0,1),(45,'9-2-4','O','X',' ',' ',0,0,0,0,'B','9-2.mp3',0,0,1),(46,'9-2-5','O','X',' ',' ',0,0,0,0,'A','9-2.mp3',0,0,1),(47,'10-3-1','O','X',' ',' ',0,0,0,0,'A','10-3.mp3',0,0,1),(48,'10-3-2','O','X',' ',' ',0,0,0,0,'B','10-3.mp3',0,0,1),(49,'11-3-1','O','X',' ',' ',0,0,0,0,'A','11-3.mp3',0,0,1),(50,'11-3-2','O','X',' ',' ',0,0,0,0,'B','11-3.mp3',0,0,1),(51,'11-3-3','O','X',' ',' ',0,0,0,0,'B','11-3.mp3',0,0,1),(52,'12-2-1','O','X',' ',' ',0,0,0,0,'A','12-2.mp3',0,0,1),(53,'12-2-2','O','X',' ',' ',0,0,0,0,'B','12-2.mp3',0,0,1),(54,'12-2-3','O','X',' ','  ',0,0,0,0,'B','12-2.mp3',0,0,1),(55,'12-2-4','O','X',' ','  ',0,0,0,0,'A','12-2.mp3',0,0,1),(56,'12-2-5','O','X',' ',' ',0,0,0,0,'A','12-2.mp3',0,0,1),(57,'13-2-1','O','X',' ',' ',0,0,0,0,'A','13-2.mp3',0,0,1),(58,'13-2-2','O','X',' ',' ',0,0,0,0,'A','13-2.mp3',0,0,1),(59,'13-2-3','O','X',' ',' ',0,0,0,0,'A','13-2.mp3',0,0,1),(60,'13-2-4','O','X',' ',' ',0,0,0,0,'A','13-2.mp3',0,0,1),(61,'13-2-5','O','X',' ',' ',0,0,0,0,'B','13-2.mp3',0,0,1),(62,'14-3-1','O','X',' ',' ',0,0,0,0,'A','14-3.mp3',0,0,1),(63,'14-3-2','O','X',' ','  ',0,0,0,0,'B','14-3.mp3',0,0,1),(64,'14-3-3','O','X',' ',' ',0,0,0,0,'A','14-3.mp3',0,0,1),(65,'15-2-1','O','X',' ',' ',0,0,0,0,'A','15-2.mp3',0,0,1),(66,'15-2-2','O','X',' ',' ',0,0,0,0,'A','15-2.mp3',0,0,1),(67,'15-2-3','O','X',' ',' ',0,0,0,0,'B','15-2.mp3',0,0,1),(68,'15-2-4','O','X',' ',' ',0,0,0,0,'A','15-2.mp3',0,0,1),(69,'15-2-5','O','X',' ',' ',0,0,0,0,'B','15-2.mp3',0,0,1),(70,'16-3-1','O','X',' ','  ',0,0,0,0,'A','16-3.mp3',0,0,1),(71,'16-3-2','O','X',' ',' ',0,0,0,0,'B','16-3.mp3',0,0,1),(72,'16-3-3','O','X',' ',' ',0,0,0,0,'A','16-3.mp3',0,0,1),(73,'17-2-1','O','X',' ',' ',0,0,0,0,'B','17-2.mp3',0,0,1),(74,'17-2-2','O','X',' ',' ',0,0,0,0,'A','17-2.mp3',0,0,1),(75,'17-2-3','O','X',' ',' ',0,0,0,0,'A','17-2.mp3',0,0,1),(76,'17-2-4','O','X',' ',' ',0,0,0,0,'A','17-2.mp3',0,0,1),(77,'17-2-5','O','X',' ',' ',0,0,0,0,'B','17-2.mp3',0,0,1),(78,'18-2-1','O','X',' ',' ',0,0,0,0,'B','18-2.mp3',0,0,1),(79,'18-2-2','O','X',' ',' ',0,0,0,0,'A','18-2.mp3',0,0,1),(80,'18-2-3','O','X',' ','  ',0,0,0,0,'A','18-2.mp3',0,0,1),(81,'18-2-4','O','X',' ',' ',0,0,0,0,'B','18-2.mp3',0,0,1),(82,'18-2-5','O','X',' ',' ',0,0,0,0,'B','18-2.mp3',0,0,1),(83,'19-2-1','O','X',' ',' ',0,0,0,0,'A','19-2.mp3',0,0,1),(84,'19-2-2','O','X',' ',' ',0,0,0,0,'B','19-2.mp3',0,0,1),(85,'19-2-3','O','X',' ',' ',0,0,0,0,'A','19-2.mp3',0,0,1),(86,'19-2-4','O','X',' ',' ',0,0,0,0,'A','19-2.mp3',0,0,1),(87,'19-2-5','O','X',' ','  ',0,0,0,0,'A','19-2.mp3',0,0,1),(88,'20-2-1','O','X',' ',' ',0,0,0,0,'A','20-2.mp3',0,0,1),(89,'20-2-2','O','X',' ',' ',0,0,0,0,'B','20-2.mp3',0,0,1),(90,'20-2-3','O','X',' ',' ',0,0,0,0,'A','20-2.mp3',0,0,1),(91,'20-2-4','O','X',' ',' ',0,0,0,0,'A','20-2.mp3',0,0,1),(92,'20-2-5','O','X',' ',' ',0,0,0,0,'B','20-2.mp3',0,0,1),(93,'21-2-1','O','X',' ',' ',0,0,0,0,'B','21-2.mp3',0,0,1),(94,'21-2-2','O','X',' ',' ',0,0,0,0,'B','21-2.mp3',0,0,1),(95,'21-2-3','O','X',' ',' ',0,0,0,0,'B','21-2.mp3',0,0,1),(96,'21-2-4','O','X',' ',' ',0,0,0,0,'A','21-2.mp3',0,0,1),(97,'21-2-5','O','X',' ',' ',0,0,0,0,'B','21-2.mp3',0,0,1),(98,'22-2-1','O','X',' ',' ',0,0,0,0,'A','22-2.mp3',0,0,1),(99,'22-2-2','O','X',' ',' ',0,0,0,0,'A','22-2.mp3',0,0,1),(100,'22-2-3','O','X',' ',' ',0,0,0,0,'B','22-2.mp3',0,0,1),(101,'22-2-4','O','X',' ',' ',0,0,0,0,'A','22-2.mp3',0,0,1),(102,'22-2-5','O','X',' ',' ',0,0,0,0,'A','22-2.mp3',0,0,1),(103,'23-3-1','O','X',' ',' ',0,0,0,0,'B','23-3.mp3',0,0,1),(104,'23-3-2','O','X',' ',' ',0,0,0,0,'A','23-3.mp3',0,0,1),(105,'23-3-3','O','X',' ',' ',0,0,0,0,'B','23-3.mp3',0,0,1),(106,'24-2-1','O','X',' ',' ',0,0,0,0,'B','24-2.mp3',0,0,1),(107,'24-2-2','O','X',' ',' ',0,0,0,0,'A','24-2.mp3',0,0,1),(108,'24-2-3','O','X',' ',' ',0,0,0,0,'B','24-2.mp3',0,0,1),(109,'24-2-4','O','X',' ',' ',0,0,0,0,'A','24-2.mp3',0,0,1),(110,'24-2-5','O','X',' ',' ',0,0,0,0,'A','24-2.mp3',0,0,1),(111,'25-2-1','O','X',' ',' ',0,0,0,0,'B','25-2.mp3',0,0,1),(112,'25-2-2','O','X',' ',' ',0,0,0,0,'A','25-2.mp3',0,0,1),(113,'25-2-3','O','X',' ',' ',0,0,0,0,'A','25-2.mp3',0,0,1),(114,'25-2-4','O','X',' ',' ',0,0,0,0,'B','25-2.mp3',0,0,1),(115,'25-2-5','O','X',' ',' ',0,0,0,0,'A','25-2.mp3',0,0,1),(116,'26-2-1 ジャンさんは｛ａ．都合が悪いです　ｂ．おなかが痛いです｝から、早く帰ります。','都合が悪いです','おなかが痛いです',' ',' ',0,2,0,0,'B','26-2.mp3',2,0,2),(117,'26-2-2 ミゲルさんは｛ａ．遊びに行きます　ｂ．柔道を練習します｝から、急いでいます。','遊びに行きます','柔道を練習します',' ',' ',0,0,0,0,'B','26-2.mp3',0,0,2),(118,'26-2-3 エドさんは｛ａ．両親が来ます　ｂ．漢字の試験があります｝から、月曜日休みます。','両親が来ます','漢字の試験があります',' ',' ',0,0,0,0,'A','26-2.mp3',0,0,2),(119,'28-3-1 昼ごはんを食べますか。……ａ．毎日　ｂ．時々　ｃ．全然→どこで食べますか。……（　　　）','毎日','時々','全然',' ',0,0,0,0,'A','28-3.mp3',0,0,2),(120,'28-3-2 晩ごはんを食べますか。……ａ．毎日　ｂ．時々　ｃ．全然→どこで食べますか。……（　　　）','毎日','時々','全然',' ',0,0,0,0,'A','28-3.mp3',0,0,2),(121,'28-3-3 買い物……ａ．デパート　ｂ．スパー　ｃ．コンビに　ｄ．その他','デパート','スパー','コンビに','その他',0,0,0,0,'C','28-3.mp3',0,0,2),(122,'29-2-1 図書館は｛ａ．休みだった　ｂ．休みだと思った｝から。','休みだった','休みだと思った',' ',' ',0,0,0,0,'B','29-2.mp3',0,0,2),(123,'29-2-2 ｛ａ．美術館ではピカソの絵が見られなかった　ｂ．美術館は閉まっていた｝から。','美術館ではピカソの絵が見られなかった','美術館は閉まっていた',' ',' ',0,0,0,0,'A','29-2.mp3',0,0,2),(124,'32-2-1 大掃除に｛ａ．参加する。　ｂ．参加しない。｝','参加する','参加しない',' ',' ',0,0,0,0,'A','32-2.mp3',0,0,2),(125,'32-2-2 遅くなったとき、駅から｛ａ．タクシーに　ｂ．バスに｝乗る。','タクシーに','バスに',' ',' ',0,0,0,0,'A','32-2.mp3',0,0,2),(126,'32-2-3 田中さんに｛ａ．仕事を紹介してもらう。　ｂ．仕事のことを相談する。｝','仕事を紹介してもらう','仕事のことを相談する',' ',' ',0,0,0,0,'B','32-2.mp3',0,0,2),(127,'34-4-1 木曜日、７時まで働く。','O','X',' ',' ',0,0,0,0,'B','34-4.mp3',0,0,2),(128,'34-4-2 東京から大阪まで出張のとき、新幹線に乗る。','O','X',' ',' ',0,0,0,0,'A','34-4.mp3',0,0,2),(129,'34-4-3 作ったレポートをコピーして、ファクスで送る。','O','X',' ',' ',0,0,0,0,'B','34-4.mp3',0,0,2),(130,'34-4-4 夏は毎日エアコンをつける。','O','X',' ',' ',0,0,0,0,'B','34-4.mp3',0,0,2),(131,'35-5-1 みんなのクイズです。正しい答えを選んでください。','A','B','C',' ',0,0,0,0,'B','35-5.mp3',0,0,2),(132,'35-5-2 みんなのクイズです。正しい答えを選んでください。','A','B','C',' ',0,0,0,0,'C','35-5.mp3',0,0,2),(133,'35-5-3 みんなのクイズです。正しい答えを選んでください。','A','B','C',' ',0,0,0,0,'A','35-5.mp3',0,0,2);
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stu_que`
--

DROP TABLE IF EXISTS `stu_que`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stu_que` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `stu_id` int(11) NOT NULL COMMENT '指向学生id',
  `que_id` int(11) NOT NULL COMMENT '指向问题id',
  `right` varchar(4) NOT NULL COMMENT '答案是否正确',
  `answer` varchar(4) NOT NULL DEFAULT '5' COMMENT '错误答案序号',
  `is_right` tinyint(3) unsigned NOT NULL COMMENT '是否做对',
  PRIMARY KEY (`link_id`) COMMENT '主键'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='学生问题关联表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stu_que`
--

LOCK TABLES `stu_que` WRITE;
/*!40000 ALTER TABLE `stu_que` DISABLE KEYS */;
INSERT INTO `stu_que` VALUES (1,3,6,'A','A',1),(2,3,7,'B','B',1),(3,3,8,'A','B',0),(4,1,6,'A','A',1),(5,3,9,'B','B',1),(6,3,10,'A','B',0),(7,3,116,'B','B',1),(8,1,116,'B','B',1);
/*!40000 ALTER TABLE `stu_que` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `stu_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(100) NOT NULL COMMENT '密码',
  `grade` tinyint(3) unsigned NOT NULL COMMENT '年级',
  `class` tinyint(3) unsigned NOT NULL COMMENT '班级',
  `real_name` varchar(20) NOT NULL COMMENT '真实姓名',
  `stu_num` varchar(10) NOT NULL COMMENT '学号',
  PRIMARY KEY (`stu_id`) COMMENT '主键'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='学生表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'liwang','Yn5jo8+TuAsMsnn/AepCx7nAQykdtxhC7V0tZRa2vRk8PMDEviyXzL04kacAcqJ7U1zrnEWzJr1nb1BcUECi3Q==',13,11,'liwang','201392396'),(2,'liwang','gd80PoJY/WwSnPLjG7iv7qgxZFSgja0xxFf22AGUetEL9ct+WWg/dXTBGCo5oSAe3U54jahX699e4F5T8rRwiQ==',13,11,'liwang','201392397'),(3,'','czvR46isTb635F+AzDDlsi9WUFoKGnrVXkgPtlYljcajX/cvRW3ZzJ5ORbwhcs9k1LbteXIYnDNeORCtD1sI1g==',13,11,'李旺','201392398'),(4,'','Ab2tEGr4bWooHC58xVUtsetLPO4ioZRwzANAqnWWH0XQDQOxvWNSpmff8o1r5nfynVM63i0ea9qJAjVdebEqSA==',13,11,'李旺','201392399'),(5,'','jfujsA4bd/WjGVp688SoRcxgU+HTMrYljIj8KaAjITQbJl48lba+uLA48qsK1t5nl1ywrON8hj4Y8l9m44uvgw==',13,11,'李旺','201392399'),(6,'','qMfFEyXlerG3ru/I50tjwGFmpIKtn/BIK6ZRhmicpOQBiFnUnk6u9iCMZK0b5TLLqoDqobF8xzugsVDZQr4Zog==',13,11,'李旺','201392399'),(7,'','nteWtpO7vR5cPrSHoCvW9yzNFfeoY81glDsmR50bIPWfPyEGbrFOCvBvSTjY5/Ax23ZSMwke+dW42wAjGeiZQQ==',13,11,'李旺','201392400');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `teacher_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(100) NOT NULL COMMENT '密码',
  PRIMARY KEY (`teacher_id`) COMMENT '主键'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='老师表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (1,'root','XvrkTmzoqTyOgS6jTu6y61jZA/004mASQ7jQoQ5/Mk/JbmateLyNaBBUAIi4uFR1s/vb3p+w7kdYIhae2JSCFA==');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `test_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `test_topic` varchar(100) NOT NULL COMMENT '试卷名称',
  `pub_time` date NOT NULL COMMENT '试卷发布时间',
  `teacher_name` varchar(20) NOT NULL COMMENT '上传试题老师',
  PRIMARY KEY (`test_id`) COMMENT '主键'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='试卷表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (1,'大家的日本语1','2015-09-14','root'),(2,'大家的日本语2','2015-09-14','root');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-15 21:06:26