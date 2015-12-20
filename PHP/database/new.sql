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
  `teacherId` int(4) DEFAULT NULL,
  `classId` int(4) DEFAULT NULL,
  `global` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `announcemnet` */

insert  into `announcemnet`(`subject`,`description`,`time`,`teacherId`,`classId`,`global`) values ('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 13:41:01',1,1,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:36',1,1,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:36',1,1,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:36',1,1,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:36',1,1,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',1,1,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',1,2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',1,2,0),('Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',1,2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',1,2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',1,2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',1,3,0),('new info ','tommororw holiday .... assignment','2015-12-15 01:07:42',1,1,0),('new info ','tommororw holiday .... assignment','2015-12-15 01:08:26',1,1,0),('new info ','tommororw holiday .... assignment','2015-12-15 01:09:14',1,1,0);

/*Table structure for table `classes` */

DROP TABLE IF EXISTS `classes`;

CREATE TABLE `classes` (
  `classId` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `teacherId` int(4) DEFAULT NULL,
  `courseId` int(4) DEFAULT NULL,
  `description` longtext,
  `courseOutline` longtext,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`classId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `classes` */

insert  into `classes`(`classId`,`teacherId`,`courseId`,`description`,`courseOutline`,`image`) values (1,1,1,NULL,NULL,NULL),(2,1,2,NULL,NULL,NULL),(3,1,3,NULL,NULL,NULL),(4,1,4,NULL,NULL,NULL),(5,1,5,NULL,NULL,NULL),(6,4,2,NULL,NULL,NULL),(7,4,3,NULL,NULL,NULL),(8,4,6,NULL,NULL,NULL);

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

insert  into `courses`(`courseId`,`courseName`,`credits`,`description`) values (1,'OS',4,'1<br><br>2<br><br><br>2<br><br>w12<br><br>321<br><br>sadasjkdashdsa<br>sdjlashdsadhasdsa<br>sakjhsaaskdas<br><br>23234<br><br>23<br><br>2<br><br>323<br>sldkhasda<br>sdlfjshfsd<br>lsdjfhf<br>dljfhsd<br>dlfjsdhfsdfs<br>sdasljhdaas<br>'),(2,'CN',4,'1 2<br>23<br>3156<br>6546'),(3,'CC',4,'Soudard Breizh-Izel eno dimeurzh, eta tan lonkañ neuiñ delioù den eil levr plant giz amanenn, skouarn aet soubenn, hag livet hegarat dreist-holl e eus miz meur a gwech, burzhud peoc\'h menoz piz sevel, gouzañv marv munutenn harzhal. Gouelañ soñj Nedeleg trubard. Aod nevez c\'hwezhañ e fri, kefe santout kerc\'hat, merc\'hed lemm hor gwiskañ gourc\'hemennoù eñ ler dek moan moged lann liv lur merkañ pignat anal skalier, kaeraat Kemper noazh lur nizez pe dre logod dir yalc\'h Sun he toullañ don prenestr. Baz darev gourc\'hemenn, talvezout hon niverenn. Per yalc\'h c\'hwec\'hvet spi den ti eost hevelep, banne dreist-holl gwiskañ gwech c\'hoarzhin aes eil dall c\'hoarvezout, c\'hwezek nec\'h garv kastell kalon eta biz-bihan aes huchal eor eur brumenn piv dimezell, e-kichen teurel beg den ebet tamm-ha-tamm. Tud egile unnek ret glebiañ. Eil sukr tennañ e anal e formaj pegoulz he ken lies.'),(4,'SOCIO',4,'Soudard Breizh-Izel eno dimeurzh, eta tan lonkañ neuiñ delioù den eil levr plant giz amanenn, skouarn aet soubenn, hag livet hegarat dreist-holl e eus miz meur a gwech, burzhud peoc\'h menoz piz sevel, gouzañv marv munutenn harzhal. Gouelañ soñj Nedeleg trubard. Aod nevez c\'hwezhañ e fri, kefe santout kerc\'hat, merc\'hed lemm hor gwiskañ gourc\'hemennoù eñ ler dek moan moged lann liv lur merkañ pignat anal skalier, kaeraat Kemper noazh lur nizez pe dre logod dir yalc\'h Sun he toullañ don prenestr. Baz darev gourc\'hemenn, talvezout hon niverenn. Per yalc\'h c\'hwec\'hvet spi den ti eost hevelep, banne dreist-holl gwiskañ gwech c\'hoarzhin aes eil dall c\'hoarvezout, c\'hwezek nec\'h garv kastell kalon eta biz-bihan aes huchal eor eur brumenn piv dimezell, e-kichen teurel beg den ebet tamm-ha-tamm. Tud egile unnek ret glebiañ. Eil sukr tennañ e anal e formaj pegoulz he ken lies.'),(5,'WEB',4,'Soudard Breizh-Izel eno dimeurzh, eta tan lonkañ neuiñ delioù den eil levr plant giz amanenn, skouarn aet soubenn, hag livet hegarat dreist-holl e eus miz meur a gwech, burzhud peoc\'h menoz piz sevel, gouzañv marv munutenn harzhal. Gouelañ soñj Nedeleg trubard. Aod nevez c\'hwezhañ e fri, kefe santout kerc\'hat, merc\'hed lemm hor gwiskañ gourc\'hemennoù eñ ler dek moan moged lann liv lur merkañ pignat anal skalier, kaeraat Kemper noazh lur nizez pe dre logod dir yalc\'h Sun he toullañ don prenestr. Baz darev gourc\'hemenn, talvezout hon niverenn. Per yalc\'h c\'hwec\'hvet spi den ti eost hevelep, banne dreist-holl gwiskañ gwech c\'hoarzhin aes eil dall c\'hoarvezout, c\'hwezek nec\'h garv kastell kalon eta biz-bihan aes huchal eor eur brumenn piv dimezell, e-kichen teurel beg den ebet tamm-ha-tamm. Tud egile unnek ret glebiañ. Eil sukr tennañ e anal e formaj pegoulz he ken lies.'),(6,'PF',4,'ABCAKJSAHSKAJSHAKSJAHSAKJSHASKASHKJSAHSKJSHAKSJAHSKAJSHASKJASHAKSJAHSKJASHKSJAHSKAJSHASKJHSAKJ'),(7,'DM',4,'ABCAKJSAHSKAJSHAKSJAHSAKJSHASKASHKJSAHSKJSHAKSJAHSKAJSHASKJASHAKSJAHSKJASHKSJAHSKAJSHASKJHSAKJ'),(8,'CAL',4,'ABCAKJSAHSKAJSHAKSJAHSAKJSHASKASHKJSAHSKJSHAKSJAHSKAJSHASKJASHAKSJAHSKJASHKSJAHSKAJSHASKJHSAKJ');

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `classId` int(4) NOT NULL,
  `file` varchar(45) NOT NULL,
  `time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `files` */

/*Table structure for table `person` */

DROP TABLE IF EXISTS `person`;

CREATE TABLE `person` (
  `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Password` varchar(25) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `userImg` varchar(45) DEFAULT NULL,
  `intro` longtext,
  `sex` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `person` */

insert  into `person`(`id`,`fname`,`lname`,`phone`,`email`,`Password`,`birthdate`,`type`,`userImg`,`intro`,`sex`) values (0001,'Tayyab','Tariq',123,'Shtayyabtariq@gmail.com','Tayyab8686','0000-00-00',1,'1450455691.png','my name is muhammad tayyab tariq',''),(0002,'hisham','asjh',26546,'bc23@pucit.edu','Hisham8686','0000-00-00',0,'1450455691.png',NULL,''),(0003,'tayyab','tariq',49213,'bcs54@pucit.edu','Aleena4566','0000-00-00',0,'1450455691.png',NULL,''),(0004,'aleena','raza',2147483647,'bcs53@pucit.edu','Momna8900','0000-00-00',1,'1450455691.png',NULL,''),(0005,'Tayyab','Tariq',NULL,'Shtayyabtariq@gmail.com','Tayyab8686','2005-12-12',1,'1450455691.png','my name is muhammad tayyab tariq','Array'),(0006,'Aleena','Raza',NULL,'bcsf13m054@pucit.edu.pk','Tayyab8686','2005-12-15',1,'1450456442.png','','Array'),(0011,'Tariq','Sa',NULL,'bcsf13m053@pucit.edu.pk','Tayyab8686','2005-12-27',1,'1450458338.png','Tayyab','male'),(0012,'Tariq','Sa',NULL,'bcsf13m053@pucit.edu.pk','Tayyab8686','2005-12-27',1,'1450458614.png','Tayyab','male'),(0013,'Tariq','Sa',NULL,'bcsf13m053@pucit.edu.pk','Tayyab8686','2005-12-27',1,'1450458647.png','Tayyab','male'),(0014,'Tariq','Sa',NULL,'bcsf13m053@pucit.edu.pk','Tayyab8686','2005-12-27',1,'1450458908.png','Tayyab','Male'),(0015,'Tariq','Sa',NULL,'bcsf13m053@pucit.edu.pk','Tayyab8686','2005-12-27',1,'1450458998.png','Tayyab','Male'),(0016,'Tayyab','Tariq',NULL,'fatimatariq-85@hotmail.co','Tayyab8686','2005-12-21',1,'1450459279.png','asaddddddd','Female'),(0017,'Tayyab','Tariq',NULL,'fatimatariq806@gmail.com','Aleenaraza867','2005-12-21',0,'1450459445.png','asadddddddassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss','Female'),(0018,'Tariq','Sa',NULL,'bcsf13m053@pucit','Tayyab8686','2005-12-27',0,'1450516678.png','\r\nsaddddddddddddddddddddddddddd','Male'),(0019,'Tariq','Sa',NULL,'bcsf13m053@pucit.edu.com','Tayyab8686','2005-12-27',0,'1450517873.png','\r\nsaddddddddddddddddddddddddddd','Male'),(0020,'Tariq','Sa',NULL,'bcsf13m053@pucit.edu','Tayyab8686','2005-12-27',0,'1450517969.png','\r\nsaddddddddddddddddddddddddddd','Male'),(0021,'Tariq','Sa',NULL,'bcsf13m053@lahore.com','Tariq8686','2005-12-27',0,'1450518081.png','\r\nsaddddddddddddddddddddddddddd','Male');

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `postedBy` int(4) DEFAULT NULL,
  `postDesc` longtext,
  `postTime` datetime DEFAULT CURRENT_TIMESTAMP,
  `global` tinyint(1) NOT NULL DEFAULT '0',
  `courseId` int(4) DEFAULT NULL,
  `teacherId` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `post` */

insert  into `post`(`postedBy`,`postDesc`,`postTime`,`global`,`courseId`,`teacherId`) values (2,'dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum gril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.','2015-12-15 00:10:38',1,2,1),(2,'kasjdhaskdasjdhlakdasbda\r\nldajhdsadad\r\ndasjdas\r\ndsf\r\nsd\r\ndf\r\ndsf\r\ngfd\r\ngdfgsdfgkfdgfdknfd\r\nfdfdfdsfdj\r\nvfdkvfdsv\r\njfdvdfsv','2015-12-15 00:29:58',0,2,1),(2,'sadlsdjasdlasdjsad','2015-12-15 00:42:52',1,2,1),(2,'sadlsdjasdlasdjsad','2015-12-15 00:43:58',1,2,1),(2,'sadlsdjasdlasdjsad','2015-12-15 00:44:12',0,1,1),(2,'sadlsdjasdlasdjsad','2015-12-15 00:44:52',1,1,1),(1,'sadlsdjasdlasdjsad','2015-12-15 00:45:15',0,1,1),(1,'sadlsdjasdlasdjsad','2015-12-15 00:45:41',1,2,1),(2,'HEllo G kese ho g :p :p :p','2015-12-15 00:45:57',1,2,1),(1,'nothing kidnslds','2015-12-15 01:14:27',0,1,1),(2,'ME LOGIN AS A USER','2015-12-15 12:45:56',1,NULL,NULL),(2,'ME LOGIN AS A USER','2015-12-15 12:46:34',1,NULL,NULL),(2,'123456sdfjsdhfsdljfsdhfjsfs\r\nljsdahdalshas','2015-12-15 12:46:44',1,NULL,NULL);

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `studentId` int(4) unsigned zerofill NOT NULL,
  `classId` int(4) NOT NULL,
  PRIMARY KEY (`studentId`,`classId`),
  UNIQUE KEY `uk_std_crs` (`studentId`,`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`studentId`,`classId`) values (0002,1),(0002,2),(0002,3),(0002,4),(0003,1),(0003,2),(0003,3);

/*Table structure for table `ta` */

DROP TABLE IF EXISTS `ta`;

CREATE TABLE `ta` (
  `studentId` int(4) NOT NULL,
  `classId` int(4) NOT NULL,
  PRIMARY KEY (`studentId`,`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ta` */

insert  into `ta`(`studentId`,`classId`) values (2,6),(3,2);

/*Table structure for table `teacher` */

DROP TABLE IF EXISTS `teacher`;

CREATE TABLE `teacher` (
  `teacherId` int(4) NOT NULL,
  `classId` int(4) NOT NULL,
  PRIMARY KEY (`teacherId`,`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `teacher` */

insert  into `teacher`(`teacherId`,`classId`) values (1,1),(1,2),(1,3),(1,4),(1,5);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
