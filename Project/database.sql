-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: shop
-- ------------------------------------------------------
-- Server version	8.0.26-0ubuntu0.20.04.2

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `gander` varchar(45) DEFAULT NULL,
  `fac` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (3,'admin','123456','ziko samy','arabever2@gmail.com','male','engi','Bay Area, San Francisco, CA',' (239) 816-9029');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `Quantity` varchar(45) DEFAULT NULL,
  `total_price` varchar(45) DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,11,'1','1000',1),(2,11,'1','1000',1),(3,11,'1','1000',1),(4,11,'1','4000',2),(5,11,'1','4000',2),(6,11,'3','12000',2),(7,11,'2','8000',3),(8,11,'3','3000',1),(9,11,'3','3000',1),(10,11,'3','12000',3),(11,11,'3','3000',1);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` longtext,
  `price` decimal(18,4) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'oppo reno 5','متوافق مع هاتف سامسونج جالكسي ام 31 القوي - هاتف ذكي ثنائي الشريحة مع بطارية ضخمة 6000 مللي أمبير في الساعة وقدرات الشحن السريع - جاهز للدخول في النهار والليل، القيام بالعديد من المهام مع أنشطتك المفضلة. كما يأتي مع كاميرات رائعة وشاشة عرض مذهلة وآمنة للتغلب عليها. التقط العالم من خلال مناظر متعددة - يمنحك نظام الكاميرا الرباعية كاميرا رئيسية بدقة 64 ميجابكسل (اف 1.8) لالتقاط صور تفصيلية، كاميرا بدقة 8 ميجابكسل (اف 2.2) لعرض جميع العناصر الخاصة بك، كاميرا عمق 5 ميجابكسل (اف 2.2) لإضافة المزيد من الحياة إلى صورك وتركيز مباشر، كاميرا ماكرو 5 ميجابكسل (اف 2.4) لتقربك حقًا إلى موضوعك، و كاميرا أمامية بدقة 32 ميجابكسل لالتقاط جميع اللحظات الحالية. بمجرد التقاطها، شاهد جميع تلك الصور المذهلة على شاشة العرض الرائعة 6.4 بوصة، فائقة المدى اف اتش دي + انفينيتي-يو. معالج ثماني النواة مع 6 جيجا بايت من ذاكرة الوصول العشوائي يقرص كل العمل، يعمل بسلاسة على تشغيل هاتفك. كما أنها تحتوي على مساحة تخزين 128 جيجابايت، ومساحة لجميع المحتويات الخاصة بك. وللحفاظ على سلامة البيانات بأكملها، تأتي مع مستشعر بصمات الأصابع الخلفي وتقنية التعرف على الوجه. يأتي هاتف جالاكسي m31 مرتدياً بشكل جميل بثلاثة لمسات نهائية - الأحمر والأسود والأزرق.',1000.0000,'1.jpg'),(2,'samsung m31','متوافق مع هاتف سامسونج جالكسي ام 31 القوي - هاتف ذكي ثنائي الشريحة مع بطارية ضخمة 6000 مللي أمبير في الساعة وقدرات الشحن السريع - جاهز للدخول في النهار والليل، القيام بالعديد من المهام مع أنشطتك المفضلة. كما يأتي مع كاميرات رائعة وشاشة عرض مذهلة وآمنة للتغلب عليها. التقط العالم من خلال مناظر متعددة - يمنحك نظام الكاميرا الرباعية كاميرا رئيسية بدقة 64 ميجابكسل (اف 1.8) لالتقاط صور تفصيلية، كاميرا بدقة 8 ميجابكسل (اف 2.2) لعرض جميع العناصر الخاصة بك، كاميرا عمق 5 ميجابكسل (اف 2.2) لإضافة المزيد من الحياة إلى صورك وتركيز مباشر، كاميرا ماكرو 5 ميجابكسل (اف 2.4) لتقربك حقًا إلى موضوعك، و كاميرا أمامية بدقة 32 ميجابكسل لالتقاط جميع اللحظات الحالية. بمجرد التقاطها، شاهد جميع تلك الصور المذهلة على شاشة العرض الرائعة 6.4 بوصة، فائقة المدى اف اتش دي + انفينيتي-يو. معالج ثماني النواة مع 6 جيجا بايت من ذاكرة الوصول العشوائي يقرص كل العمل، يعمل بسلاسة على تشغيل هاتفك. كما أنها تحتوي على مساحة تخزين 128 جيجابايت، ومساحة لجميع المحتويات الخاصة بك. وللحفاظ على سلامة البيانات بأكملها، تأتي مع مستشعر بصمات الأصابع الخلفي وتقنية التعرف على الوجه. يأتي هاتف جالاكسي m31 مرتدياً بشكل جميل بثلاثة لمسات نهائية - الأحمر والأسود والأزرق.',4000.0000,'2.jpg'),(3,'samsung a70','متوافق مع هاتف سامسونج جالكسي ام 31 القوي - هاتف ذكي ثنائي الشريحة مع بطارية ضخمة 6000 مللي أمبير في الساعة وقدرات الشحن السريع - جاهز للدخول في النهار والليل، القيام بالعديد من المهام مع أنشطتك المفضلة. كما يأتي مع كاميرات رائعة وشاشة عرض مذهلة وآمنة للتغلب عليها. التقط العالم من خلال مناظر متعددة - يمنحك نظام الكاميرا الرباعية كاميرا رئيسية بدقة 64 ميجابكسل (اف 1.8) لالتقاط صور تفصيلية، كاميرا بدقة 8 ميجابكسل (اف 2.2) لعرض جميع العناصر الخاصة بك، كاميرا عمق 5 ميجابكسل (اف 2.2) لإضافة المزيد من الحياة إلى صورك وتركيز مباشر، كاميرا ماكرو 5 ميجابكسل (اف 2.4) لتقربك حقًا إلى موضوعك، و كاميرا أمامية بدقة 32 ميجابكسل لالتقاط جميع اللحظات الحالية. بمجرد التقاطها، شاهد جميع تلك الصور المذهلة على شاشة العرض الرائعة 6.4 بوصة، فائقة المدى اف اتش دي + انفينيتي-يو. معالج ثماني النواة مع 6 جيجا بايت من ذاكرة الوصول العشوائي يقرص كل العمل، يعمل بسلاسة على تشغيل هاتفك. كما أنها تحتوي على مساحة تخزين 128 جيجابايت، ومساحة لجميع المحتويات الخاصة بك. وللحفاظ على سلامة البيانات بأكملها، تأتي مع مستشعر بصمات الأصابع الخلفي وتقنية التعرف على الوجه. يأتي هاتف جالاكسي m31 مرتدياً بشكل جميل بثلاثة لمسات نهائية - الأحمر والأسود والأزرق.',4000.0000,'1.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `gander` varchar(45) DEFAULT NULL,
  `fac` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'20B403048','123456','ziko samy1','arabever2@gmail.com','male','engi','Bay Area, San Francisco, CA','(239) 816-9029'),(4,'we','wefg','ibrahim','zakariasamy10@gmail.com','male','science','efwwe','01065303069'),(11,'new2','456','ayman1','aa@gmail.com','male','science','22 street','01111111111'),(12,'wefwefw','1321456','fwwefwef','aaaaaaa@gmail.com','male','engi','srerwerwe','1155229261');
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

-- Dump completed on 2021-09-19 18:00:24
