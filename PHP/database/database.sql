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

insert  into `announcemnet`(`subject`,`description`,`time`,`classId`,`global`) values ('sdadhka','askhasgkdsahd\r\nasd\r\nd\r\nasd\r\nasd\r\nas','2016-01-08 00:23:07',1,0),('sdasjd\'ad\'d\'asd\'asdmasdlaas','aldasd\'\r\nd\r\nasd\'asdsajd\'adjas\'dasjdlsfjsd\'fsdd/d\'dsjsdlvksdsdsd[ssssc\"ksndfsd\r\n\'s;sd\'sds','2016-01-08 00:24:10',1,0);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `classes` */

LOCK TABLES `classes` WRITE;

insert  into `classes`(`classId`,`teacherId`,`courseId`,`description`,`courseOutline`,`image`) values (1,51,1,'sdjasldhasl\nasldassaldjhasd\nadhaldjad;ad\nasdadas\ndajs','asdasjdh\nsadjhas\ndahdas\ndahdasd\nas','b3fdb62db4.jpg'),(2,51,2,'','',''),(3,51,3,'','','0b2b89d015.png'),(4,51,10,'','','98af2fb45f.jpg');

UNLOCK TABLES;

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `courseId` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `courseName` varchar(50) DEFAULT NULL,
  `credits` int(1) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`courseId`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `courses` */

LOCK TABLES `courses` WRITE;

insert  into `courses`(`courseId`,`courseName`,`credits`,`description`) values (1,'augue quam',4,'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh. In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc.'),(2,'suspendisse accumsan',1,'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.'),(3,'parturient montes',1,'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.'),(4,'sit amet',1,'Suspendisse potenti. Cras in purus eu magna vulputate luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo.'),(5,'nibh',4,'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti. Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum.'),(6,'ligula sit',3,'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat.'),(7,'vulputate',2,'Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est. Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum. Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.'),(8,'a suscipit',3,'Aenean fermentum. Donec ut mauris eget massa tempor convallis.'),(9,'ultrices',1,'Suspendisse potenti. Cras in purus eu magna vulputate luctus.'),(10,'libero convallis',4,'Nulla facilisi. Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla.'),(11,'felis',1,'Pellentesque ultrices mattis odio. Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus. Curabitur at ipsum ac tellus semper interdum.'),(12,'venenatis lacinia',2,'Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo.'),(13,'nullam',2,'Vivamus in felis eu sapien cursus vestibulum. Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.'),(14,'vel sem',2,'In eleifend quam a odio. In hac habitasse platea dictumst.'),(15,'lacus curabitur',2,'Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh. In quis justo. Maecenas rhoncus aliquam lacus.'),(16,'luctus ultricies',3,'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem. Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus. Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.'),(17,'cursus urna',4,'Nullam molestie nibh in lectus. Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque.'),(18,'eu',3,'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo.'),(19,'tempus vel',1,'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo.'),(20,'congue',1,'Nullam varius.');

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

insert  into `files`(`classId`,`file`,`uploadTime`,`path`) values (1,'verzeichnisse_baum_a.png','2016-01-08 00:21:30','data/eb8cafa8da');

UNLOCK TABLES;

/*Table structure for table `person` */

DROP TABLE IF EXISTS `person`;

CREATE TABLE `person` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT '0000-00-00',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `userImg` varchar(45) DEFAULT ' ',
  `intro` longtext,
  `sex` varchar(6) DEFAULT 'Male',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

/*Data for the table `person` */

LOCK TABLES `person` WRITE;

insert  into `person`(`id`,`fname`,`lname`,`email`,`password`,`birthdate`,`type`,`userImg`,`intro`,`sex`) values (1,'Alan','Hamiltonssadasddasdas','ahamilton0@zdnet.com','Abc123456','1999-12-30',0,'image/145219a885','In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo.','Male'),(2,'Elizabeth','Gilbert','egilbert1@nytimes.com','Abc123456','1999-12-30',0,'image/4af0be6bff.','Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices.','Female'),(3,'Deborah','Nowell','dhowell2@list-manage.com','Abc123456','1999-12-30',0,'image/c36f6e907c.','IHSASHkcbckzxcl\r\nasjkh\r\nsczc\r\nzczxc\r\nzx','Female'),(4,'Janet','Kennedy','jkennedy3@prnewswire.com','Abc123456','1999-12-30',0,'image/d492e96908.','Suspendisse accumsan tortor quis turpis. Sed ante. Vivamus tortor.','Female'),(5,'Raymond','Peters','rpeters4@examiner.com','Abc123456','1999-12-30',0,' ','Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque.','Male'),(6,'Anna','Patterson','apatterson5@apple.com','Abc123456','1999-12-30',1,' ','Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus. Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat. Curabitur gravida nisi at nibh. In hac habitasse platea dictumst.','Female'),(7,'Bobby','Meyer','bmeyer6@barnesandnoble.com','Abc123456','1999-12-30',1,' ','Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est. Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.','Male'),(8,'Norma','Greene','ngreene7@usatoday.com','Abc123456','1999-12-30',1,' ','Donec posuere metus vitae ipsum. Aliquam non mauris. Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet.','Female'),(9,'Rachel','Henry','rhenry8@geocities.jp','Abc123456','1999-12-30',1,' ','Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti. Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum.','Female'),(10,'Virginia','Allen','vallen9@51.la','Abc123456','1999-12-30',1,' ','Aliquam erat volutpat. In congue. Etiam justo. Etiam pretium iaculis justo. In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.','Female'),(11,'Dennis','Pierce','dpiercea@youtube.com','Abc123456','1999-12-30',1,' ','Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.','Male'),(12,'Marilyn','Marshall','mmarshallb@twitpic.com','Abc123456','1999-12-30',1,' ','Quisque ut erat. Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.','Female'),(13,'Brian','Johnston','bjohnstonc@bloglines.com','Abc123456','1999-12-30',1,' ','Donec dapibus. Duis at velit eu est congue elementum. In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante.','Male'),(14,'Michael','Foster','mfosterd@cbslocal.com','Abc123456','1999-12-30',1,' ','Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est. Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum. Proin eu mi.','Male'),(15,'Catherine','Bowman','cbowmane@instagram.com','Abc123456','1999-12-30',1,' ','Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus. Suspendisse potenti. In eleifend quam a odio.','Female'),(16,'Jonathan','Sullivan','jsullivanf@a8.net','Abc123456','1999-12-30',1,' ','Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh. In quis justo.','Male'),(17,'Samuel','Richards','srichardsg@wix.com','Abc123456','1999-12-30',1,' ','Sed ante. Vivamus tortor. Duis mattis egestas metus. Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.','Male'),(18,'Lisa','Bowman','lbowmanh@usgs.gov','Abc123456','1999-12-30',0,' ','Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum.','Female'),(19,'Billy','Schmidt','bschmidti@elpais.com','Abc123456','1999-12-30',0,' ','Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci.','Male'),(20,'Ann','Rivera','ariveraj@mozilla.com','Abc123456','1999-12-30',0,' ','In congue. Etiam justo. Etiam pretium iaculis justo. In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.','Female'),(21,'Sean','Wilson','swilsonk@google.pl','Abc123456','1999-12-30',0,' ','Suspendisse potenti. Nullam porttitor lacus at turpis.','Male'),(22,'Steve','Peters','spetersl@usgs.gov','Abc123456','1999-12-30',0,' ','Suspendisse potenti. Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris. Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.','Male'),(23,'Brenda','Ross','brossm@comsenz.com','Abc123456','1999-12-30',0,' ','Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum.','Female'),(24,'Ronald','Ramirez','rramirezn@usa.gov','Abc123456','1999-12-30',0,' ','Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat.','Male'),(25,'Ashley','Alexander','aalexandero@spotify.com','Abc123456','1999-12-30',0,' ','Nulla justo. Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis. Sed ante.','Female'),(26,'Jose','Griffin','jgriffinp@webmd.com','Abc123456','1999-12-30',0,' ','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque. Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus. In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.','Male'),(27,'Mildred','Campbell','mcampbellq@shutterfly.com','Abc123456','1999-12-30',0,' ','Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti. Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris. Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet.','Female'),(28,'Stephen','Bell','sbellr@columbia.edu','Abc123456','1999-12-30',0,' ','Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.','Male'),(29,'Pamela','Rogers','progerss@exblog.jp','Abc123456','1999-12-30',0,' ','Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum.','Female'),(30,'Philip','Cruz','pcruzt@yandex.ru','Abc123456','1999-12-30',0,' ','Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus. Pellentesque eget nunc.','Male'),(31,'Gerald','Meyer','gmeyeru@1und1.de','Abc123456','1999-12-30',0,' ','Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.','Male'),(32,'Kathleen','Williamson','kwilliamsonv@netvibes.com','Abc123456','1999-12-30',0,' ','Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.','Female'),(33,'Christina','Wilson','cwilsonw@wufoo.com','Abc123456','1999-12-30',0,' ','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.','Female'),(34,'Ruby','Cooper','rcooperx@w3.org','Abc123456','1999-12-30',0,' ','Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus.','Female'),(35,'Karen','Moore','kmoorey@loc.gov','Abc123456','1999-12-30',0,' ','Suspendisse accumsan tortor quis turpis. Sed ante. Vivamus tortor. Duis mattis egestas metus.','Female'),(36,'Jack','Phillips','jphillipsz@boston.com','Abc123456','1999-12-30',0,' ','Phasellus in felis. Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius. Integer ac leo. Pellentesque ultrices mattis odio.','Male'),(37,'Todd','Ramos','tramos10@yellowpages.com','Abc123456','1999-12-30',0,' ','Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem. Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus. Pellentesque at nulla.','Male'),(38,'Jacqueline','Anderson','janderson11@stumbleupon.com','Abc123456','1999-12-30',0,' ','In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat. Nulla nisl. Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.','Female'),(39,'Maria','Owens','mowens12@mac.com','Abc123456','1999-12-30',0,' ','Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.','Female'),(40,'Angela','Cole','acole13@smugmug.com','Abc123456','1999-12-30',0,' ','Nunc purus. Phasellus in felis. Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius. Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.','Female'),(41,'Willie','Graham','wgraham14@flickr.com','Abc123456','1999-12-30',0,' ','In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue.','Male'),(42,'Denise','Crawford','dcrawford15@si.edu','Abc123456','1999-12-30',0,' ','Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue. Etiam justo. Etiam pretium iaculis justo. In hac habitasse platea dictumst.','Female'),(43,'Diane','Franklin','dfranklin16@yellowbook.com','Abc123456','1999-12-30',0,' ','Nullam varius. Nulla facilisi.','Female'),(44,'Annie','Gomez','agomez17@accuweather.com','Abc123456','1999-12-30',0,' ','Nulla justo. Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros.','Female'),(45,'Earl','Peterson','epeterson18@nydailynews.com','Abc123456','1999-12-30',0,' ','In eleifend quam a odio. In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat. Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum.','Male'),(46,'Ann','George','ageorge19@symantec.com','Abc123456','1999-12-30',0,' ','Vestibulum sed magna at nunc commodo placerat. Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede. Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.','Female'),(47,'Elizabeth','Gibson','egibson1a@cbsnews.com','Abc123456','1999-12-30',0,' ','In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam.','Female'),(48,'Charles','Morrison','cmorrison1b@free.fr','Abc123456','1999-12-30',0,' ','Aliquam erat volutpat. In congue. Etiam justo. Etiam pretium iaculis justo.','Male'),(49,'Adam','Morris','amorris1c@woothemes.com','Abc123456','1999-12-30',0,' ','Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh. In quis justo. Maecenas rhoncus aliquam lacus.','Male'),(50,'Philip','Kelly','pkelly1d@chron.com','Abc123456','1999-12-30',0,' ','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque. Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.','Male'),(51,'Osama','Asghar','tagheir@gmail.com','Abc123456','1996-02-26',1,'image/1452191885','Hello Theresdjsahdsakdja\r\nhdkajdhadkajsdhaskdjashdaskjda\r\nhs         ','Male'),(52,'Tayyab','Tariq','TT@t.t','Abc123456','2005-12-31',0,'image/1452261710','sahjsgadas\r\nasdjasd\r\nadaskdsa\r\ndaskgjdsa\r\ndasgd\'a\r\nsdasd\r\nsahdgsa\'\r\ndashgdas\'\r\n                                ','Male');

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

insert  into `post`(`postedBy`,`postDesc`,`postTime`,`global`,`classId`) values (51,'sdalskdhasld\r\nasljdhsadlasd\r\ndlahsdlasdhaslda\r\nlsadhsadlsakd\r\ndljahdasldkasd\r\naldjhsadlasd\r\nldjahd','2016-01-08 00:06:07',0,1),(51,'','2016-01-08 00:12:16',0,1),(51,'sdlasdhasldjasd\'sdasjkda/dasdashdas/sajsdh\'dfdshfsd;fsf\'fds/fdsjf\'sdfsdffd/xzklhzdlczclcjscsc\'','2016-01-08 00:14:01',0,1),(51,'sdlasdhasldjasd\'sdasjkda/dasdashdas/sajsdh\'dfdshfsd;fsf\'fds/fdsjf\'sdfsdffd/xzklhzdlczclcjscsc\'','2016-01-08 00:15:28',0,1),(2,'dasjdlahdlada\r\ndasdj;sa\r\nd\'s;ds\';sf;sdf','2016-01-08 00:39:08',1,NULL),(2,'dasjdlahdlada\r\ndasdj;sa\r\nd\'s;ds\';sf;sdf','2016-01-08 00:39:51',1,NULL),(1,'czkxjchclj\r\nksdjfsd\'fdsjfs\r\nfsdfsdf\'','2016-01-08 01:01:26',0,1),(2,'sdlasjda\r\nsadjahda\r\nsajldas\r\ndadajsld','2016-01-08 02:18:18',1,NULL),(2,'sdlasjda\r\nsadjahda\r\nsajldas\r\ndadajsld','2016-01-08 02:19:22',1,NULL),(2,'sdlasjda\r\nsadjahda\r\nsajldas\r\ndadajsld','2016-01-08 02:19:34',1,NULL),(2,'sdlasjda\r\nsadjahda\r\nsajldas\r\ndadajsld','2016-01-08 02:20:58',1,NULL),(1,'sdsaljdhsad;\r\nasdlhd\r\nasdsahld\r\nsadsajd\r\nasdhsa','2016-01-08 02:27:02',1,NULL),(1,'dasjdhas\r\nsalhasd\r\nadlja','2016-01-08 02:27:43',1,NULL),(1,'dasjdhas\r\nsalhasd\r\nadlja','2016-01-08 02:27:57',1,NULL),(1,'sdasjldhasd\r\nadaljdsadsad','2016-01-08 02:28:32',1,NULL),(1,'daskdjahda;dasj;dasdaslda\r\ns;dasdasd/asda;dsa;dsa;das:DSADSA\";sas\'csd','2016-01-08 03:08:55',1,NULL),(3,'sadasldjah\r\ndsaldasd','2016-01-08 03:09:27',1,NULL),(4,'dkjashdsad\r\nkjhslj\r\ncdvhd;dvd\r\nvsd\'vsd;vsdlvsd\r\n\'v;sdbv\'sd\r\nvsd;lvsd\'vsd;lvsd\'sdlkvsd\'vpsldkvlsd\r\n\';v[sd\r\nvsdlvksdl\'v\r\nsdlvkhsd\'vpsdlkvbhsd\'\r\nvsdb ','2016-01-08 19:58:47',1,NULL),(1,'1231321321321321321313\r\n13\r\n1\r\n32 \r\n12 313\r\n21\r\n\r\n','2016-01-08 20:00:03',1,NULL),(51,'dslfjds\r\ndslfjsd\r\nfsdlfsdjkf\r\n\'sdfsdf\r\nsdfsd\'h\r\nf','2016-01-08 20:04:12',1,NULL);

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

insert  into `student`(`studentId`,`classId`) values (1,1),(2,2),(20,1);

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

insert  into `ta`(`studentId`,`classId`) values (1,2),(2,1);

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

insert  into `teacher`(`teacherId`,`classId`) values (51,1),(51,2),(51,3),(51,4);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
