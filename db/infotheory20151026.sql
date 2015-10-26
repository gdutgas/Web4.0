/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.6.21 : Database - infotheory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`infotheory` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `infotheory`;

/*Table structure for table `tb_chapter` */

DROP TABLE IF EXISTS `tb_chapter`;

CREATE TABLE `tb_chapter` (
  `chapter_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_chapter` */

insert  into `tb_chapter`(`chapter_id`,`title`) values (1,'第一章'),(2,'第二章'),(3,'第三章'),(4,'3月2日课堂作业');

/*Table structure for table `tb_question` */

DROP TABLE IF EXISTS `tb_question`;

CREATE TABLE `tb_question` (
  `que_id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `difficult` int(2) DEFAULT NULL,
  `type` int(20) DEFAULT NULL,
  `que_photo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chapter_id` int(10) DEFAULT NULL,
  `ans_photo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`que_id`),
  KEY `FK_Relationship_1` (`chapter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_question` */

insert  into `tb_question`(`que_id`,`question`,`answer`,`difficult`,`type`,`que_photo`,`chapter_id`,`ans_photo`) values (0,'','',1,4,'1430453557322.jpg',1,'1430453557324.jpg'),(1,'在本征半导体中加入(   )元素可形成N型半导体，加入(   )元素可形成P型半导体。<br/>A. 五价         B. 四价        C. 三价','A.  C.',1,1,NULL,1,NULL),(2,'当温度升高时，二极管的反向饱和电流将 (   )。<br/>A. 增大         B. 不变        C. 减小','A',1,1,NULL,1,NULL),(3,'工作在放大区的某三极管，如果当IB从12μA增大到22μA时，IC从1mA变为2mA，那么它的Β约为(   )。<br/> A. 83           B. 91           C. 100','C',1,1,NULL,1,NULL),(4,'当场效应管的漏极直流电流ID从2mA变为4mA时，它的低频跨导Gm将(   ) <br/>  A.增大          B.不变         C.减小     ','A',1,1,NULL,1,NULL),(5,'能否将1.5V的干电池以正向接法接到二极管两端？为什么？','解：不能。因为二极管的正向电流与其端电压成指数关系，当端电压为1.5V时，管子会因电流过大而烧坏。',2,2,NULL,1,NULL),(7,'电路如图所示，已知晶体管B＝50，在下列情况下，用直流电压表测晶体管的集电极电位，应分别为多少？设VCC＝12V，晶体管饱和管压降UCES＝0.5V。<br/>\r\n（1）正常情况 （2）Rb1短路（3）Rb1开路（4）Rb2开路（5）Rc短路','解：设UBE＝0.7V。则<br/>\r\n\r\n（1） 基极静态电流<br/>\r\n\r\n          \r\n\r\n（2）由于UBE＝0V，T截止，UC＝12V。<br/>\r\n\r\n（3）临界饱和基极电流<br/>\r\n\r\n          \r\n\r\n实际基极电流<br/>\r\n\r\n          \r\n\r\n由于IB＞IBS，故T饱和，UC＝UCES＝0.5V。<br/> \r\n\r\n（4）T截止，UC＝12V。<br/>\r\n\r\n（5）由于集电极直接接直流电源，UC＝VCC＝12V<br/>',3,4,NULL,2,NULL),(8,'半导体中有（ ）和（ ）两种载流子参与导电。','空穴  自由电子',1,2,NULL,1,NULL),(9,'集成运算放大器输入级一般采用（ ）电路，其作用是用来减小（ ）。','差分放大  零点漂移',2,2,NULL,1,NULL),(10,'放大电路中为了提高输入电阻引入（ ）反馈，为了降低输入电阻应引入（ ）反馈。','串联   并联',2,2,NULL,1,NULL),(11,'光电二极管能将（ ）转变为（ ），它工作时需加（ ）偏置电压。','光信号  电信号  反向',1,2,NULL,1,NULL),(12,'当温度升高时，二极管的反向饱和电流将增大，正向电压将减小。（  ）','正确',1,3,NULL,1,NULL),(13,'晶体管具有电流放大作用的外部条件是发射结反偏，集电结正偏。（  ）','错误，发射结正偏，集电结反偏。',1,3,NULL,1,NULL),(14,'差分放大电路对差模输入信号具有良好的放大作用，对共模输入信号具有很强的抑制作用，差分放大电路的零点漂移很小。（  ）','正确',2,3,NULL,1,NULL),(15,'当温度升高时，晶体管的参数增大，I减小，导通电压增大。（  ）','错误。当温度升高时，晶体管的参数增大，I增大，导通电压减小。',2,3,NULL,1,NULL),(16,'在图中，已知I=2A，求Uab和Pab。','解：Uab=IR+2-4=2×4+2-4=6V，<br/> 电流I与Uab为关联参考方向，<br/>因此  Pab=UabI=6×2=12W',1,4,'1428331069643.jpg',1,NULL),(17,'求图中的R和Uab、Uac。','解：对d点应用KCL得：I=4A，<br/>故有 RI=4R=4，R=1Ω  <br/>Uab=Uad+Udb=3×10＋（-4）=26V<br/> Uac=Uad-Ucd=3×10- (-7)×2=44V',1,4,'1428331164762.jpg',1,NULL),(18,'如题','在图（A）所示电路中，当二极管断开时，二极管两端的电压等于。所以<br/>\r\n当ui>=Vc时，二极管截止，u0=ui<br/>\r\n当ui<Vc时，二极管导通，u0=Vc=5V',2,4,'1428331697437.jpg',1,NULL),(19,'能否将1.5V的干电池以正向接法接到二极管两端？为什么','不能，因为二极管的正向电流与其端电压成指数关系，当端电压为1.5V时，管子会因为电压过大而烧坏。',1,4,NULL,1,NULL);

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  `superadmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`name`,`password`,`phone`,`email`,`admin`,`superadmin`) values (1,'admin','admin','18826400674','oyrongtai@163.com',1,1),(2,'abc','abc',NULL,NULL,1,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
