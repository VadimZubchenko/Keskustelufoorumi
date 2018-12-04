# ************************************************************
# Ruhmä 15, project SQL
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Database: keskustelupalsta
# Generation Time: 2018-12-04 10:10:45 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table chatrooms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `chatrooms`;

CREATE TABLE `chatrooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `chatrooms` WRITE;
/*!40000 ALTER TABLE `chatrooms` DISABLE KEYS */;

INSERT INTO `chatrooms` (`id`, `name`, `date_created`)
VALUES
	(1,'CHAT1','2018-12-03 11:34:31');

/*!40000 ALTER TABLE `chatrooms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(45) NOT NULL,
  `group_id` varchar(45) NOT NULL,
  `sender_username` varchar(45) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;

INSERT INTO `messages` (`id`, `message`, `group_id`, `sender_username`, `timestamp`)
VALUES
	(1,'a','1','Hannu','2018-12-03 11:34:31'),
	(2,'b','2','Hannu','2018-12-03 11:34:31'),
	(3,'c','1','Hannu','2018-12-03 11:34:31'),
	(4,'d','2','Vadim','2018-12-03 11:34:31'),
	(5,'e','1','Vadim','2018-12-03 11:34:31'),
	(6,'f','1','Rasmus','2018-12-03 11:34:31'),
	(7,'g','2','Hannu','2018-12-03 11:34:31'),
	(8,'h','1','Vadim','2018-12-03 11:34:31'),
	(9,'i','1','Rasmus','2018-12-03 11:34:31'),
	(10,'j','2','Hannu','2018-12-03 11:34:31'),
	(11,'k','2','Hannu','2018-12-03 11:34:31'),
	(12,'l','1','Hannu','2018-12-03 11:34:31'),
	(13,'m','1','Vadim','2018-12-03 11:34:31'),
	(14,'n','2','Vadim','2018-12-03 11:34:31'),
	(15,'o','1','Rasmus','2018-12-03 11:34:31'),
	(16,'p','2','Vadim','2018-12-03 11:34:31'),
	(17,'q','1','Rasmus','2018-12-03 11:34:31'),
	(18,'r','2','Rasmus','2018-12-03 11:34:31'),
	(19,'s','2','Rasmus','2018-12-03 11:34:31'),
	(20,'t','1','Rasmus','2018-12-03 11:34:31'),
	(21,'u','1','Vadim','2018-12-03 11:34:31'),
	(22,'v','2','Vadim','2018-12-03 11:34:31'),
	(23,'w','1','Rasmus','2018-12-03 11:34:31'),
	(24,'x','2','Vadim','2018-12-03 11:34:31'),
	(25,'y','1','Vadim','2018-12-03 11:34:31'),
	(26,'dafgsfgsfdg','1','Hannu','2018-12-03 11:40:08'),
	(27,'How are you?','1','Hannu','2018-12-03 11:40:29'),
	(28,'sdfasdfdsafdsf','1','Hannu','2018-12-03 12:18:05'),
	(29,'dwwwdw ','1','Hannu','2018-12-03 12:19:02'),
	(30,'dwwwdw<br>','1','Hannu','2018-12-03 12:19:07'),
	(31,'dwwwdw<br>','1','Hannu','2018-12-03 12:19:13'),
	(32,'dwwwdw','1','Hannu','2018-12-03 12:19:20'),
	(33,'Hi! ','1','Hannu','2018-12-03 12:20:50'),
	(34,'Hi!','1','Hannu','2018-12-03 12:21:00'),
	(35,'Hello! Fine! And you?','1','Hannu','2018-12-03 12:24:25'),
	(36,'Hello! ','1','Hannu','2018-12-03 12:25:24');

/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `date_joined` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`username`, `password`, `date_joined`)
VALUES
	('hannu','passu','2018-12-03 11:34:31'),
	('rasmus','pekkataijarmo','2018-12-03 11:34:31'),
	('vadim','zu','2018-12-03 11:34:31');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
