/*
SQLyog Enterprise - MySQL GUI v7.12 
MySQL - 5.6.21 : Database - pucit
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`pucit` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pucit`;

/*Table structure for table `announcemnet` */

DROP TABLE IF EXISTS `announcemnet`;

CREATE TABLE `announcemnet` (
  `subject` varchar(45) DEFAULT NULL,
  `description` longtext,
  `time` datetime DEFAULT CURRENT_TIMESTAMP,
  `classId` int(4) unsigned DEFAULT NULL,
  `global` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `announcemnet` */

LOCK TABLES `announcemnet` WRITE;

insert  into `announcemnet`(`subject`,`description`,`time`,`classId`,`global`) values ('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 13:41:01',1,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:36',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:36',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:36',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:36',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',2,0),('Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',1,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',2,0),('new info ','tommororw holiday .... assignment','2015-12-15 01:07:42',1,0),('new info ','tommororw holiday .... assignment','2015-12-15 01:08:26',1,0),('new info ','tommororw holiday .... assignment','2015-12-15 01:09:14',1,0),('new aannn','notthing','2015-12-17 13:48:57',1,0),('a123','a321','2015-12-17 14:11:22',1,0),('abc','helooozzzzzz................','2015-12-19 01:10:22',6,0),('abc','helooozzzzzz................','2015-12-19 01:12:34',6,0),('HAHAHA','sadjahdsadjhsadkajshdas','2015-12-19 11:34:12',22,0),('abcsj','','2015-12-19 20:38:39',23,0),('asakjh','','2015-12-19 20:38:43',23,0),('sadas','sldkashdalsk\r\n','2015-12-19 20:38:49',23,0),('sas','sldasjdasjlask','2015-12-19 20:38:53',23,0),('ABC','hdakjdahsd','2015-12-20 14:46:34',5,0);

UNLOCK TABLES;

/*Table structure for table `classes` */

DROP TABLE IF EXISTS `classes`;

CREATE TABLE `classes` (
  `classId` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `teacherId` int(4) unsigned DEFAULT NULL,
  `courseId` int(4) unsigned DEFAULT NULL,
  `description` longtext,
  `courseOutline` longtext,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`classId`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `classes` */

LOCK TABLES `classes` WRITE;

insert  into `classes`(`classId`,`teacherId`,`courseId`,`description`,`courseOutline`,`image`) values (1,1,1,'sdlsakdasdsakjldkasdas\ndlasdjadlasdkjasldsakdjas\nsadlakdajsdlada','adaasasdxzcxzczxcm\nxzclkzcxjzlcxz\nxzlcjzcnzxckzx\nxzcljzxczxckz\nxzlcjxzczxc\nzxlczxn','image/1450431180.jpg'),(3,1,3,NULL,NULL,'image/1450431077.jpg'),(5,1,5,NULL,NULL,'image/1450431077.jpg'),(6,4,2,NULL,NULL,'image/1450431077.jpg'),(7,4,3,NULL,NULL,'image/1450431077.jpg'),(8,4,6,NULL,NULL,'image/1450431077.jpg'),(10,4,1,'newos','newsoso','image/1450431077.jpg'),(11,4,1,'newos','newsoso','image/1450431077.jpg'),(19,4,4,'sdasljdh','sdlksdj','image/1450432345.jpg'),(22,1,6,'abc','abc','image/1450506759'),(23,2,5,'avc','aed','image/1450538464'),(24,1,2,'aa','aa','image/1450619278');

UNLOCK TABLES;

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `courseId` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `courseName` varchar(50) DEFAULT NULL,
  `credits` int(1) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`courseId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `courses` */

LOCK TABLES `courses` WRITE;

insert  into `courses`(`courseId`,`courseName`,`credits`,`description`) values (1,'Operating Systems',4,'1<br><br>2<br><br><br>2<br><br>w12<br><br>321<br><br>sadasjkdashdsa<br>sdjlashdsadhasdsa<br>sakjhsaaskdas<br><br>23234<br><br>23<br><br>2<br><br>323<br>sldkhasda<br>sdlfjshfsd<br>lsdjfhf<br>dljfhsd<br>dlfjsdhfsdfs<br>sdasljhdaas<br>'),(2,'Computer Networks',4,'1 2<br>23<br>3156<br>6546'),(3,'Compiler Construction',4,'Soudard Breizh-Izel eno dimeurzh, eta tan lonkañ neuiñ delioù den eil levr plant giz amanenn, skouarn aet soubenn, hag livet hegarat dreist-holl e eus miz meur a gwech, burzhud peoc\'h menoz piz sevel, gouzañv marv munutenn harzhal. Gouelañ soñj Nedeleg trubard. Aod nevez c\'hwezhañ e fri, kefe santout kerc\'hat, merc\'hed lemm hor gwiskañ gourc\'hemennoù eñ ler dek moan moged lann liv lur merkañ pignat anal skalier, kaeraat Kemper noazh lur nizez pe dre logod dir yalc\'h Sun he toullañ don prenestr. Baz darev gourc\'hemenn, talvezout hon niverenn. Per yalc\'h c\'hwec\'hvet spi den ti eost hevelep, banne dreist-holl gwiskañ gwech c\'hoarzhin aes eil dall c\'hoarvezout, c\'hwezek nec\'h garv kastell kalon eta biz-bihan aes huchal eor eur brumenn piv dimezell, e-kichen teurel beg den ebet tamm-ha-tamm. Tud egile unnek ret glebiañ. Eil sukr tennañ e anal e formaj pegoulz he ken lies.'),(4,'Sociology',4,'Soudard Breizh-Izel eno dimeurzh, eta tan lonkañ neuiñ delioù den eil levr plant giz amanenn, skouarn aet soubenn, hag livet hegarat dreist-holl e eus miz meur a gwech, burzhud peoc\'h menoz piz sevel, gouzañv marv munutenn harzhal. Gouelañ soñj Nedeleg trubard. Aod nevez c\'hwezhañ e fri, kefe santout kerc\'hat, merc\'hed lemm hor gwiskañ gourc\'hemennoù eñ ler dek moan moged lann liv lur merkañ pignat anal skalier, kaeraat Kemper noazh lur nizez pe dre logod dir yalc\'h Sun he toullañ don prenestr. Baz darev gourc\'hemenn, talvezout hon niverenn. Per yalc\'h c\'hwec\'hvet spi den ti eost hevelep, banne dreist-holl gwiskañ gwech c\'hoarzhin aes eil dall c\'hoarvezout, c\'hwezek nec\'h garv kastell kalon eta biz-bihan aes huchal eor eur brumenn piv dimezell, e-kichen teurel beg den ebet tamm-ha-tamm. Tud egile unnek ret glebiañ. Eil sukr tennañ e anal e formaj pegoulz he ken lies.'),(5,'WEB Engg.',4,'Soudard Breizh-Izel eno dimeurzh, eta tan lonkañ neuiñ delioù den eil levr plant giz amanenn, skouarn aet soubenn, hag livet hegarat dreist-holl e eus miz meur a gwech, burzhud peoc\'h menoz piz sevel, gouzañv marv munutenn harzhal. Gouelañ soñj Nedeleg trubard. Aod nevez c\'hwezhañ e fri, kefe santout kerc\'hat, merc\'hed lemm hor gwiskañ gourc\'hemennoù eñ ler dek moan moged lann liv lur merkañ pignat anal skalier, kaeraat Kemper noazh lur nizez pe dre logod dir yalc\'h Sun he toullañ don prenestr. Baz darev gourc\'hemenn, talvezout hon niverenn. Per yalc\'h c\'hwec\'hvet spi den ti eost hevelep, banne dreist-holl gwiskañ gwech c\'hoarzhin aes eil dall c\'hoarvezout, c\'hwezek nec\'h garv kastell kalon eta biz-bihan aes huchal eor eur brumenn piv dimezell, e-kichen teurel beg den ebet tamm-ha-tamm. Tud egile unnek ret glebiañ. Eil sukr tennañ e anal e formaj pegoulz he ken lies.'),(6,'Programming Fundamentals',4,'ABCAKJSAHSKAJSHAKSJAHSAKJSHASKASHKJSAHSKJSHAKSJAHSKAJSHASKJASHAKSJAHSKJASHKSJAHSKAJSHASKJHSAKJ'),(7,'DM',4,'ABCAKJSAHSKAJSHAKSJAHSAKJSHASKASHKJSAHSKJSHAKSJAHSKAJSHASKJASHAKSJAHSKJASHKSJAHSKAJSHASKJHSAKJ'),(8,'CAL',4,'ABCAKJSAHSKAJSHAKSJAHSAKJSHASKASHKJSAHSKJSHAKSJAHSKAJSHASKJASHAKSJAHSKJASHKSJAHSKAJSHASKJHSAKJ');

UNLOCK TABLES;

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `classId` int(4) unsigned NOT NULL,
  `file` varchar(45) DEFAULT ' ',
  `uploadTime` datetime DEFAULT CURRENT_TIMESTAMP,
  `path` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `files` */

LOCK TABLES `files` WRITE;

insert  into `files`(`classId`,`file`,`uploadTime`,`path`) values (1,'a.txt','2015-12-17 16:52:05','data/49606e6640'),(1,'Bitmap Printing Test.pdf','2015-12-17 16:53:00','data/4bc83aa9b1'),(1,'grande.pdf','2015-12-17 16:53:44','data/d4efc30426'),(2,'Analog and Digital Electronics Lab Report hai','2015-12-17 20:59:53','data/7f00c46c62'),(2,'MaiMu98qNSq3.128.mp3','2015-12-17 21:00:12','data/80ce6ccce3'),(2,'Analog and Digital Electronics Lab Report hai','2015-12-17 21:04:26','data/6ef6bb3d87'),(2,'MaiMu98qNSq3.128.mp3','2015-12-17 21:05:07','data/5e098d3dfa'),(2,'12289658_883873048395886_8670684143027213754_','2015-12-17 21:06:52','data/621f0bc199'),(2,'12289658_883873048395886_8670684143027213754_','2015-12-17 21:10:06','data/e98899972f'),(2,'12289658_883873048395886_8670684143027213754_','2015-12-17 21:11:09','data/6f52dcbf9b'),(2,'12289658_883873048395886_8670684143027213754_','2015-12-17 21:11:17','data/5a0b220289'),(2,'12289658_883873048395886_8670684143027213754_','2015-12-17 21:12:28','data/053a398b19'),(2,'hgignore_global.txt','2015-12-17 21:12:50','data/f54f1044e7'),(2,'hgignore_global.txt','2015-12-17 21:14:10','data/47217abf8f'),(6,'mp1.html','2015-12-19 01:16:16','data/2e9e167e03'),(23,'linuxcommands.pdf','2015-12-19 20:39:53','data/50ecc5aeee'),(5,'principle.png','2015-12-20 14:46:47','data/778f310d73');

UNLOCK TABLES;

/*Table structure for table `person` */

DROP TABLE IF EXISTS `person`;

CREATE TABLE `person` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `phone` int(15) unsigned zerofill DEFAULT '000000000000000',
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT '0000-00-00',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `userImg` varchar(45) DEFAULT ' ',
  `intro` longtext,
  `sex` varchar(6) DEFAULT 'Male',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `person` */

LOCK TABLES `person` WRITE;

insert  into `person`(`id`,`fname`,`lname`,`phone`,`email`,`password`,`birthdate`,`type`,`userImg`,`intro`,`sex`) values (1,'Tayyab','Tariq',000000000000123,'Shtayyabtariq@gmail.com','TayyabTariq123','0000-00-00',1,'image/1450506636','my name is muhammad tayyab tariq','Male'),(2,'hisham','asghar',000000000026546,'bc23@pucit.edu','Hishamasghar123','0000-00-00',0,'image/1450506636',NULL,'Male'),(3,'momna','aslam',000000000049213,'bcs19@pucit.edu','momnaaslam123','0000-00-00',0,'image/1450506636',NULL,'Female'),(4,'aleena','raza',000002147483647,'bcs53@pucit.edu','aleenaraza123','0000-00-00',1,'image/1450506636',NULL,'Female'),(5,'Shahbaz','Tayyab',000000000000000,'bcs54@pucit.edu.pk','ShahbazTayyab123','2005-12-12',1,'image/1450506636','my name is muhammad tayyab tariq','Male'),(6,'Aleena','Raza',000000000000000,'bcsf13m054@pucit.edu.pk','AleenaRaza123','2005-12-15',1,'image/1450506636','','Female'),(11,'Tariq','Sa',000000000000000,'bcsf13m053@pucit.edu.pk','TariqSa123','2005-12-27',1,'image/1450506636','Tayyab','male'),(16,'Fatima','Tariq',000000000000000,'fatimatariq-85@hotmail.co','FatimaTariq123','2005-12-21',1,'image/1450506636','asaddddddd','Female'),(18,'Tariq','Sa',000000000000000,'bcsf13m053@pucit','TariqSa123','2005-12-27',0,'image/1450506636','\r\nsaddddddddddddddddddddddddddd','Male'),(22,'Admin','admin',000000000000000,'admin@gmail.com','Adminadmin123','0000-00-00',0,'image/1450506636','I am admin ','Male'),(23,'User','user',000000000000000,'user@pucit.edu','Useruser123','0000-00-00',0,'image/145050663','I am user\r\n	','Male'),(24,'Tagheir','Mughal',000000000000000,'tagheir@gmail.m','Tagheir123','1990-05-05',0,'image/1450629510.jpg','I am a Student of Pucit           ','Male'),(25,'Anas','Asghar',000000000000000,'anas@gmail.com','Anas1234','1996-06-04',0,'image/1450636093.jpg','I am student                                ','Male'),(26,'Asad','Asghar',000000000000000,'asad@gmail.com','Asad1234','1994-06-03',0,'image/1450636426','sadkjahdsadkahdba\r\nsdjlashdsad\r\ndlasjdhsa\r\nd                                ','Male');

UNLOCK TABLES;

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `postedBy` int(4) DEFAULT NULL,
  `postDesc` longtext,
  `postTime` datetime DEFAULT CURRENT_TIMESTAMP,
  `global` tinyint(1) NOT NULL DEFAULT '0',
  `classId` int(4) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `post` */

LOCK TABLES `post` WRITE;

insert  into `post`(`postedBy`,`postDesc`,`postTime`,`global`,`classId`) values (2,'dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum gril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.','2015-12-15 00:10:38',1,2),(2,'kasjdhaskdasjdhlakdasbda\r\nldajhdsadad\r\ndasjdas\r\ndsf\r\nsd\r\ndf\r\ndsf\r\ngfd\r\ngdfgsdfgkfdgfdknfd\r\nfdfdfdsfdj\r\nvfdkvfdsv\r\njfdvdfsv','2015-12-15 00:29:58',0,2),(2,'sadlsdjasdlasdjsad','2015-12-15 00:42:52',1,2),(2,'sadlsdjasdlasdjsad','2015-12-15 00:43:58',1,2),(2,'sadlsdjasdlasdjsad','2015-12-15 00:44:12',0,1),(2,'sadlsdjasdlasdjsad','2015-12-15 00:44:52',1,1),(1,'sadlsdjasdlasdjsad','2015-12-15 00:45:15',0,1),(1,'sadlsdjasdlasdjsad','2015-12-15 00:45:41',1,2),(2,'HEllo G kese ho g :p :p :p','2015-12-15 00:45:57',1,2),(1,'nothing kidnslds','2015-12-15 01:14:27',0,1),(2,'ME LOGIN AS A USER','2015-12-15 12:45:56',1,NULL),(2,'ME LOGIN AS A USER','2015-12-15 12:46:34',1,NULL),(2,'123456sdfjsdhfsdljfsdhfjsfs\r\nljsdahdalshas','2015-12-15 12:46:44',1,NULL),(3,'Whta are you doing man......','2015-12-17 14:08:41',0,1),(4,'HAHAHAHA','2015-12-17 14:11:02',0,1),(2,'helozzasdjashdkjasd/dsdad','2015-12-19 01:13:53',0,6),(2,'LOLXXXXX','2015-12-19 11:34:19',0,22),(2,'LOLXXXXX','2015-12-19 11:38:01',0,22),(2,'asaasa','2015-12-19 11:44:07',0,22),(2,'asaasa','2015-12-19 11:46:46',0,22),(1,'HLKSJALKSJASL','2015-12-19 13:01:10',0,22),(2,'qwqwqhu','2015-12-19 20:40:06',0,23),(1,'posdasdsadsasasadjbsad\r\nlsjdnasd\r\nsljdasd\r\ndasdnasd\r\nsadnas\r\ndasdabjdask\r\nd','2015-12-20 14:47:30',0,5);

UNLOCK TABLES;

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `studentId` int(4) unsigned NOT NULL,
  `classId` int(4) unsigned NOT NULL,
  PRIMARY KEY (`studentId`,`classId`),
  UNIQUE KEY `uk_std_crs` (`studentId`,`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student` */

LOCK TABLES `student` WRITE;

insert  into `student`(`studentId`,`classId`) values (2,2),(2,3),(2,4),(3,1),(3,3),(4,1);

UNLOCK TABLES;

/*Table structure for table `ta` */

DROP TABLE IF EXISTS `ta`;

CREATE TABLE `ta` (
  `studentId` int(4) unsigned NOT NULL,
  `classId` int(4) unsigned NOT NULL,
  PRIMARY KEY (`studentId`,`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ta` */

LOCK TABLES `ta` WRITE;

insert  into `ta`(`studentId`,`classId`) values (2,1),(2,6),(2,22),(3,2),(3,6),(5,22),(23,1);

UNLOCK TABLES;

/*Table structure for table `teacher` */

DROP TABLE IF EXISTS `teacher`;

CREATE TABLE `teacher` (
  `teacherId` int(4) unsigned NOT NULL,
  `classId` int(4) unsigned NOT NULL,
  PRIMARY KEY (`teacherId`,`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `teacher` */

LOCK TABLES `teacher` WRITE;

insert  into `teacher`(`teacherId`,`classId`) values (1,1),(1,2),(1,3),(1,4),(1,5),(1,22),(1,24),(2,3),(2,23),(2,24),(2,25);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
