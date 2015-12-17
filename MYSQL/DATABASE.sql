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
  `classId` int(4) DEFAULT NULL,
  `global` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `announcemnet` */

LOCK TABLES `announcemnet` WRITE;

insert  into `announcemnet`(`subject`,`description`,`time`,`classId`,`global`) values ('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 13:41:01',1,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:36',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:36',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:36',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:36',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',2,0),('Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',1,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',2,0),('Day After Tommorrow Lecture','Tommorrow Lecture will be held in Roomm No. 13 at 3:00pm...','2015-12-14 14:03:37',2,0),('new info ','tommororw holiday .... assignment','2015-12-15 01:07:42',1,0),('new info ','tommororw holiday .... assignment','2015-12-15 01:08:26',1,0),('new info ','tommororw holiday .... assignment','2015-12-15 01:09:14',1,0),('new aannn','notthing','2015-12-17 13:48:57',1,0),('a123','a321','2015-12-17 14:11:22',1,0);

UNLOCK TABLES;

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

LOCK TABLES `classes` WRITE;

insert  into `classes`(`classId`,`teacherId`,`courseId`,`description`,`courseOutline`,`image`) values (1,1,1,'123456\n4564321sdaldh\ndjdhdjdaasdslkdasjdlksajdaslkdjsldksa\nskjdashdad\nksdhasdjas','sadlahdlasdhaldHishamsdsadsfsdsflksdfsdflksjfslfsdjflsdfjsdfsd\nflsjsdaskdasjdlaskalakdadfhslfsdhfslfsdhflsdf\ndfsldjfhsdflsdf12121212121121\n1112121\n1212121',NULL),(2,1,2,NULL,NULL,NULL),(3,1,3,NULL,NULL,NULL),(4,1,4,NULL,NULL,NULL),(5,1,5,NULL,NULL,NULL),(6,4,2,NULL,NULL,NULL),(7,4,3,NULL,NULL,NULL),(8,4,6,NULL,NULL,NULL);

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

insert  into `courses`(`courseId`,`courseName`,`credits`,`description`) values (1,'OS',4,'1<br><br>2<br><br><br>2<br><br>w12<br><br>321<br><br>sadasjkdashdsa<br>sdjlashdsadhasdsa<br>sakjhsaaskdas<br><br>23234<br><br>23<br><br>2<br><br>323<br>sldkhasda<br>sdlfjshfsd<br>lsdjfhf<br>dljfhsd<br>dlfjsdhfsdfs<br>sdasljhdaas<br>'),(2,'CN',4,'1 2<br>23<br>3156<br>6546'),(3,'CC',4,'Soudard Breizh-Izel eno dimeurzh, eta tan lonkañ neuiñ delioù den eil levr plant giz amanenn, skouarn aet soubenn, hag livet hegarat dreist-holl e eus miz meur a gwech, burzhud peoc\'h menoz piz sevel, gouzañv marv munutenn harzhal. Gouelañ soñj Nedeleg trubard. Aod nevez c\'hwezhañ e fri, kefe santout kerc\'hat, merc\'hed lemm hor gwiskañ gourc\'hemennoù eñ ler dek moan moged lann liv lur merkañ pignat anal skalier, kaeraat Kemper noazh lur nizez pe dre logod dir yalc\'h Sun he toullañ don prenestr. Baz darev gourc\'hemenn, talvezout hon niverenn. Per yalc\'h c\'hwec\'hvet spi den ti eost hevelep, banne dreist-holl gwiskañ gwech c\'hoarzhin aes eil dall c\'hoarvezout, c\'hwezek nec\'h garv kastell kalon eta biz-bihan aes huchal eor eur brumenn piv dimezell, e-kichen teurel beg den ebet tamm-ha-tamm. Tud egile unnek ret glebiañ. Eil sukr tennañ e anal e formaj pegoulz he ken lies.'),(4,'SOCIO',4,'Soudard Breizh-Izel eno dimeurzh, eta tan lonkañ neuiñ delioù den eil levr plant giz amanenn, skouarn aet soubenn, hag livet hegarat dreist-holl e eus miz meur a gwech, burzhud peoc\'h menoz piz sevel, gouzañv marv munutenn harzhal. Gouelañ soñj Nedeleg trubard. Aod nevez c\'hwezhañ e fri, kefe santout kerc\'hat, merc\'hed lemm hor gwiskañ gourc\'hemennoù eñ ler dek moan moged lann liv lur merkañ pignat anal skalier, kaeraat Kemper noazh lur nizez pe dre logod dir yalc\'h Sun he toullañ don prenestr. Baz darev gourc\'hemenn, talvezout hon niverenn. Per yalc\'h c\'hwec\'hvet spi den ti eost hevelep, banne dreist-holl gwiskañ gwech c\'hoarzhin aes eil dall c\'hoarvezout, c\'hwezek nec\'h garv kastell kalon eta biz-bihan aes huchal eor eur brumenn piv dimezell, e-kichen teurel beg den ebet tamm-ha-tamm. Tud egile unnek ret glebiañ. Eil sukr tennañ e anal e formaj pegoulz he ken lies.'),(5,'WEB',4,'Soudard Breizh-Izel eno dimeurzh, eta tan lonkañ neuiñ delioù den eil levr plant giz amanenn, skouarn aet soubenn, hag livet hegarat dreist-holl e eus miz meur a gwech, burzhud peoc\'h menoz piz sevel, gouzañv marv munutenn harzhal. Gouelañ soñj Nedeleg trubard. Aod nevez c\'hwezhañ e fri, kefe santout kerc\'hat, merc\'hed lemm hor gwiskañ gourc\'hemennoù eñ ler dek moan moged lann liv lur merkañ pignat anal skalier, kaeraat Kemper noazh lur nizez pe dre logod dir yalc\'h Sun he toullañ don prenestr. Baz darev gourc\'hemenn, talvezout hon niverenn. Per yalc\'h c\'hwec\'hvet spi den ti eost hevelep, banne dreist-holl gwiskañ gwech c\'hoarzhin aes eil dall c\'hoarvezout, c\'hwezek nec\'h garv kastell kalon eta biz-bihan aes huchal eor eur brumenn piv dimezell, e-kichen teurel beg den ebet tamm-ha-tamm. Tud egile unnek ret glebiañ. Eil sukr tennañ e anal e formaj pegoulz he ken lies.'),(6,'PF',4,'ABCAKJSAHSKAJSHAKSJAHSAKJSHASKASHKJSAHSKJSHAKSJAHSKAJSHASKJASHAKSJAHSKJASHKSJAHSKAJSHASKJHSAKJ'),(7,'DM',4,'ABCAKJSAHSKAJSHAKSJAHSAKJSHASKASHKJSAHSKJSHAKSJAHSKAJSHASKJASHAKSJAHSKJASHKSJAHSKAJSHASKJHSAKJ'),(8,'CAL',4,'ABCAKJSAHSKAJSHAKSJAHSAKJSHASKASHKJSAHSKJSHAKSJAHSKAJSHASKJASHAKSJAHSKJASHKSJAHSKAJSHASKJHSAKJ');

UNLOCK TABLES;

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `classId` int(4) NOT NULL,
  `file` varchar(45) DEFAULT ' ',
  `uploadTime` datetime DEFAULT CURRENT_TIMESTAMP,
  `path` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `files` */

LOCK TABLES `files` WRITE;

insert  into `files`(`classId`,`file`,`uploadTime`,`path`) values (1,'a.txt','2015-12-17 16:52:05','data/49606e6640'),(1,'Bitmap Printing Test.pdf','2015-12-17 16:53:00','data/4bc83aa9b1'),(1,'grande.pdf','2015-12-17 16:53:44','data/d4efc30426'),(2,'Analog and Digital Electronics Lab Report hai','2015-12-17 20:59:53','data/7f00c46c62'),(2,'MaiMu98qNSq3.128.mp3','2015-12-17 21:00:12','data/80ce6ccce3'),(2,'Analog and Digital Electronics Lab Report hai','2015-12-17 21:04:26','data/6ef6bb3d87'),(2,'MaiMu98qNSq3.128.mp3','2015-12-17 21:05:07','data/5e098d3dfa'),(2,'12289658_883873048395886_8670684143027213754_','2015-12-17 21:06:52','data/621f0bc199'),(2,'12289658_883873048395886_8670684143027213754_','2015-12-17 21:10:06','data/e98899972f'),(2,'12289658_883873048395886_8670684143027213754_','2015-12-17 21:11:09','data/6f52dcbf9b'),(2,'12289658_883873048395886_8670684143027213754_','2015-12-17 21:11:17','data/5a0b220289'),(2,'12289658_883873048395886_8670684143027213754_','2015-12-17 21:12:28','data/053a398b19'),(2,'hgignore_global.txt','2015-12-17 21:12:50','data/f54f1044e7'),(2,'hgignore_global.txt','2015-12-17 21:14:10','data/47217abf8f');

UNLOCK TABLES;

/*Table structure for table `person` */

DROP TABLE IF EXISTS `person`;

CREATE TABLE `person` (
  `id` int(4) unsigned zerofill NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `country` varchar(25) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `userImg` varchar(45) DEFAULT NULL,
  `intro` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `person` */

LOCK TABLES `person` WRITE;

insert  into `person`(`id`,`fname`,`lname`,`phone`,`email`,`country`,`birthdate`,`type`,`userImg`,`intro`) values (0001,'abc','def',123,'momna@yahoo.com','pk','0000-00-00',1,NULL,NULL),(0002,'hisham','asjh',26546,'bc23@pucit.edu','pk','0000-00-00',0,NULL,NULL),(0003,'tayyab','tariq',49213,'bcs54@pucit.edu','pk','0000-00-00',0,NULL,NULL),(0004,'aleena','raza',2147483647,'bcs53@pucit.edu','pk','0000-00-00',1,NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `postedBy` int(4) DEFAULT NULL,
  `postDesc` longtext,
  `postTime` datetime DEFAULT CURRENT_TIMESTAMP,
  `global` tinyint(1) NOT NULL DEFAULT '0',
  `classId` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `post` */

LOCK TABLES `post` WRITE;

insert  into `post`(`postedBy`,`postDesc`,`postTime`,`global`,`classId`) values (2,'dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum gril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.','2015-12-15 00:10:38',1,2),(2,'kasjdhaskdasjdhlakdasbda\r\nldajhdsadad\r\ndasjdas\r\ndsf\r\nsd\r\ndf\r\ndsf\r\ngfd\r\ngdfgsdfgkfdgfdknfd\r\nfdfdfdsfdj\r\nvfdkvfdsv\r\njfdvdfsv','2015-12-15 00:29:58',0,2),(2,'sadlsdjasdlasdjsad','2015-12-15 00:42:52',1,2),(2,'sadlsdjasdlasdjsad','2015-12-15 00:43:58',1,2),(2,'sadlsdjasdlasdjsad','2015-12-15 00:44:12',0,1),(2,'sadlsdjasdlasdjsad','2015-12-15 00:44:52',1,1),(1,'sadlsdjasdlasdjsad','2015-12-15 00:45:15',0,1),(1,'sadlsdjasdlasdjsad','2015-12-15 00:45:41',1,2),(2,'HEllo G kese ho g :p :p :p','2015-12-15 00:45:57',1,2),(1,'nothing kidnslds','2015-12-15 01:14:27',0,1),(2,'ME LOGIN AS A USER','2015-12-15 12:45:56',1,NULL),(2,'ME LOGIN AS A USER','2015-12-15 12:46:34',1,NULL),(2,'123456sdfjsdhfsdljfsdhfjsfs\r\nljsdahdalshas','2015-12-15 12:46:44',1,NULL),(3,'Whta are you doing man......','2015-12-17 14:08:41',0,1),(4,'HAHAHAHA','2015-12-17 14:11:02',0,1);

UNLOCK TABLES;

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `studentId` int(4) NOT NULL,
  `classId` int(4) NOT NULL,
  PRIMARY KEY (`studentId`,`classId`),
  UNIQUE KEY `uk_std_crs` (`studentId`,`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student` */

LOCK TABLES `student` WRITE;

insert  into `student`(`studentId`,`classId`) values (2,1),(2,2),(2,3),(2,4),(3,1),(3,2),(3,3);

UNLOCK TABLES;

/*Table structure for table `ta` */

DROP TABLE IF EXISTS `ta`;

CREATE TABLE `ta` (
  `studentId` int(4) NOT NULL,
  `classId` int(4) NOT NULL,
  PRIMARY KEY (`studentId`,`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ta` */

LOCK TABLES `ta` WRITE;

insert  into `ta`(`studentId`,`classId`) values (2,6),(3,2);

UNLOCK TABLES;

/*Table structure for table `teacher` */

DROP TABLE IF EXISTS `teacher`;

CREATE TABLE `teacher` (
  `teacherId` int(4) NOT NULL,
  `classId` int(4) NOT NULL,
  PRIMARY KEY (`teacherId`,`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `teacher` */

LOCK TABLES `teacher` WRITE;

insert  into `teacher`(`teacherId`,`classId`) values (1,1),(1,2),(1,3),(1,4),(1,5);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
